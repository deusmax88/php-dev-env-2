FROM php:7.1-fpm

RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev libpq-dev
RUN pecl install memcached-3.0.3
RUN docker-php-ext-enable memcached

RUN pecl install mongodb-1.4.1
RUN docker-php-ext-enable mongodb

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql
