FROM php:5.6-apache
COPY src/ /var/www/html/

RUN apt-get update && apt-get upgrade -y && apt-get install -y libmemcached-dev libssl-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached \
    && pecl install mongo \
    && docker-php-ext-enable mongo \
    && pecl install redis \
    && docker-php-ext-enable redis


EXPOSE  80

