FROM php:8.2-apache

RUN docker-php-ext-install mysqli

COPY php_app /var/www/html

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

EXPOSE 80

ENV DOCKER=true
