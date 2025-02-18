ARG PHP_VERSION=8.3
FROM php:${PHP_VERSION}-fpm

RUN apt-get update \
    && apt-get -y install gcc make autoconf zlib1g-dev

RUN pecl install grpc-1.70.0
RUN pecl install protobuf-4.29.3
RUN pecl install opentelemetry-1.1.2
RUN pecl install redis-6.1.0
RUN pecl install xdebug-3.4.1

RUN docker-php-ext-enable redis \
    grpc \
    protobuf \
    opentelemetry \
    xdebug

COPY php.ini /usr/local/etc/php/conf.d/custom-php.ini
