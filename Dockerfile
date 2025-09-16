# Stage 1: Build frontend assets
FROM node:18 AS node-builder
WORKDIR /app

# Copy only package files and install dependencies
COPY package.json package-lock.json ./
RUN npm install

# Copy all frontend files and build assets
COPY . .
RUN npm run build

# Stage 2: PHP + Composer + Laravel
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev libonig-dev libzip-dev sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy Laravel files
COPY . .

# Copy built frontend assets from Node stage
COPY --from=node-builder /app/public/build ./public/build

# Create storage directories and set permissions
RUN mkdir -p storage/framework/cache/data \
 && mkdir -p storage/framework/views \
 && mkdir -p storage/logs \
 && chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel optimizations
# Clear view cache instead of caching to avoid missing paths
RUN php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:clear

# Expose port
EXPOSE 10000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
