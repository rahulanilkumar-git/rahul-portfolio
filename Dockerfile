# Use the official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy app files
COPY . .

# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate APP_KEY (optional if already set in Render environment)
# RUN php artisan key:generate

# Expose port and run Laravel using Artisan
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

# Create the SQLite file if it doesn't exist (safe redundancy)
RUN mkdir -p database && \
    touch database/database.sqlite && \
    chmod -R 775 database