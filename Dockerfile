FROM php:8.0-apache

COPY ./web_project /var/www/html/

RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite

EXPOSE 8000

CMD ["apache2-foreground"]
