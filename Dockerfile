# Use official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
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

# Create SQLite database file
RUN mkdir -p database && \
    touch database/database.sqlite && \
    chmod -R 775 database

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Set environment variables (these are overridden by `.env`)
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV APP_KEY=base64:SomeDummyKeyChangeThisLater
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/html/database/database.sqlite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
