FROM php:7.2-fpm
# install composer
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

RUN apt-get update \
&& apt-get install -y \
git \
zip \
vim

WORKDIR /var/www/html

# add alias
RUN echo "" >> ~/.bashrc
RUN echo "alias ll='ls -l'" >> ~/.bashrc