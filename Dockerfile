#Base image
FROM php:7.2-apache
WORKDIR /var/www/html
COPY . /var/www/html
#Install musqli
RUN docker-php-ext-install mysqli
