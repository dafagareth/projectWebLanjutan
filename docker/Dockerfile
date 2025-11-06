FROM php:8.2-apache

# Install ekstensi PHP yang sering dipakai
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite Apache
RUN a2enmod rewrite
