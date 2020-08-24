FROM php:7.2-fpm

RUN curl -sS https://getcomposer.org/installer | php

RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

RUN apt-get update \
    && apt-get install -y \
    git \
    zip \
    vim

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql

WORKDIR /var/www/html

# add alias
RUN echo "" >> ~/.bashrc
RUN echo "alias ll='ls -l'" >> ~/.bashrc