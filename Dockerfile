FROM php:8.3.1-fpm-alpine
WORKDIR /var/www/html
COPY src/ /var/www/html