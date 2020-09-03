FROM centos:7

RUN yum -y update
RUN yum install -y php php-fpm
RUN mkdir -p /run/php-fpm

COPY www.conf /etc/php-fpm.d/www.conf
RUN useradd nginx

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

RUN yum -y update \
    && yum install -y \
    git \
    zip \
    vim

RUN yum -y update \
    && yum install -y \
    postgresql-server \
    docker-php-ext-install \
    pdo_mysql \
    pdo_pgsql

WORKDIR /var/www/

# add alias
RUN echo "" >> ~/.bashrc
RUN echo "alias ll='ls -l'" >> ~/.bashrc