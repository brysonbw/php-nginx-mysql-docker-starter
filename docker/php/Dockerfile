FROM php:8.2-fpm-alpine

WORKDIR /var/www

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \
        curl \
        zip \
        vim \
        unzip; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# install pdo and mysql
RUN docker-php-ext-install pdo pdo_mysql

# uncomment and run below to install composer:
# docker-compose up -d --build
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
