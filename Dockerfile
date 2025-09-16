# Stage 1: Build frontend assets
FROM node:18 AS node-builder
WORKDIR /app

COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: PHP + Nginx + Laravel
FROM php:8.2-fpm

# Install dependencies and Nginx
RUN apt-get update && apt-get install -y \
    nginx git curl zip unzip libpq-dev libonig-dev libzip-dev sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy Laravel files
COPY . .

# Copy built frontend assets
COPY --from=node-builder /app/public/build ./public/build

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Create storage dirs and set permissions
RUN mkdir -p storage/framework/cache/data \
 && mkdir -p storage/framework/views \
 && mkdir -p storage/logs \
 && chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# Laravel optimizations
RUN php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:clear

# Configure Nginx
COPY ./nginx/default.conf /etc/nginx/sites-available/default

# Expose port 80
EXPOSE 80

# Start Nginx + PHP-FPM
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
