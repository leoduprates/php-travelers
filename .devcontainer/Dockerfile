FROM php:8.1-apache

RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf