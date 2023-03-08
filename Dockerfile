FROM php:8.0-apache

# Копирование файлов проекта внутрь контейнера
COPY ./web_project /var/www/html/

# Установка необходимых расширений PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite

# Определение порта
EXPOSE 8000

# Запуск Apache внутри контейнера
CMD ["apache2-foreground"]
