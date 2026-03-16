FROM php:8.3-apache

# PHP extensions
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli
RUN apt-get update \
    && apt-get install -y \
        nmap \
        vim
