#FROM geerlingguy/php-apache
FROM php:4.7-apache
COPY . /var/www/html/
COPY ./ports.conf /etc/apache2/ports.conf
COPY ./apache.conf /etc/apache2/sites-enabled/000-default.conf
