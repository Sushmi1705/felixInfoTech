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

# Set working directory
WORKDIR /var/www/html

# Copy PHP/Laravel files
COPY . .

# Copy built frontend assets
COPY --from=node-builder /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel optimizations
# Skip view:cache to avoid "View path not found" error on first deploy
RUN php artisan config:cache \
 && php artisan route:cache

# Expose port and start Laravel server
EXPOSE 10000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
