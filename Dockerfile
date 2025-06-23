# Stage 1: Build dependencies with Composer
FROM composer:2.7 AS composer-dependencies

WORKDIR /app

# Copy only the composer files to leverage Docker cache
COPY composer.json composer.lock ./

# Install dependencies without dev packages
RUN composer install --no-dev --optimize-autoloader

# Stage 2: Main PHP-Apache image
FROM php:8.2-apache

# Install PHP extensions and system tools
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libonig-dev libxml2-dev libpng-dev libjpeg-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy Laravel application files
COPY . .

# Copy vendor dependencies from composer stage
COPY --from=composer-dependencies /app/vendor ./vendor

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Expose port and run Laravel server
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
