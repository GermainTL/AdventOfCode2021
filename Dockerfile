FROM php:8.0-apache

WORKDIR /app

RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    zip

#INSTALL COMPOSER AND MAKE COMPOSER COMMAND ACCESSIBLE EVERYWHERE ON CONTAINER
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

COPY composer.* ./

RUN composer install
RUN composer dump-autoload

COPY . .
