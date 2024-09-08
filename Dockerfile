FROM php:8.0-apache

# Installer les extensions nécessaires pour PDO et PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Installer les dépendances pour MongoDB
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer libzip-dev et git, puis installer l'extension zip pour PHP
RUN apt-get update && apt-get install -y zip unzip git libzip-dev \
    && docker-php-ext-install zip
