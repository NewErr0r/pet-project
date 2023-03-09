FROM php:8-cli

COPY ./web_project /app

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "/app"]
