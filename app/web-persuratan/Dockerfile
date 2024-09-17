# FROM joseluisq/php-fpm:8.2
# Use the official PHP 8.2.12 FPM Alpine image
FROM php:8.2.12-fpm-alpine

# Set working directory
# WORKDIR /var/www/html

# Install necessary system dependencies
RUN apk --no-cache add \
    icu-dev \
    libintl \
    oniguruma-dev \
    libzip-dev \
    git \
    unzip

# Install PHP extensions
RUN docker-php-ext-install intl zip pdo pdo_mysql mysqli

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer clear-cache
RUN composer update
RUN composer install
CMD php -v

CMD ["php", "spark", "serve", "--host", "0.0.0.0"]