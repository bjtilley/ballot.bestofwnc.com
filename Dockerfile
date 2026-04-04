FROM php:8.3-apache

# PHP extensions
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli
RUN apt-get update \
    && apt-get install -y \
        nmap \
        vim

# APCu
RUN pecl install apcu \
    && docker-php-ext-enable apcu \
    && echo "apc.enabled=1\napc.enable_cli=1" >> /usr/local/etc/php/conf.d/docker-php-ext-apcu.ini
