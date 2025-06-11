# Use the official PHP image with Apache
FROM php:8.2-apache

# Install system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libsqlite3-dev \
    pkg-config \
    sqlite3 \
    && docker-php-ext-install pdo pdo_sqlite zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create SQLite database
RUN mkdir -p database && \
    touch database/database.sqlite && \
    chmod -R 775 database

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Environment variables (for safety; override with .env in production)
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/html/database/database.sqlite
ENV APP_ENV=production
ENV APP_DEBUG=false

# Expose Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
