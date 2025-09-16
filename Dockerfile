# Stage 1: Build frontend assets
FROM node:18 AS node-builder
WORKDIR /app

# Copy only package files first to leverage caching
COPY package.json package-lock.json ./
RUN npm install

# Copy rest of the frontend files
COPY . .

# Build frontend assets (Vite + React + SCSS)
RUN npm run build

# Stage 2: PHP + Laravel
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    curl \
    npm \
    && docker-php-ext-install pdo_mysql zip mbstring \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy Laravel backend files (excluding node_modules for caching)
COPY --chown=www-data:www-data . .

# Copy built frontend assets from node-builder
COPY --from=node-builder /app/public/build /var/www/html/public/build
COPY --from=node-builder /app/resources/js /var/www/html/resources/js
COPY --from=node-builder /app/resources/css /var/www/html/resources/css

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 9000 and start PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
