FROM php:8.0-fpm

RUN apt-get update \
    && apt-get install -y \
    apt-utils \
    && apt-get install -y \
    libpq-dev \
    libzip-dev \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install -j24 intl \
    && docker-php-ext-install -j24 zip \
    && docker-php-ext-install -j24 mysqli \
    && docker-php-ext-install -j24 pdo_mysql \
    && pecl install redis\
    && docker-php-ext-enable redis

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./src /var/www/html

RUN composer install --no-interaction --prefer-dist
