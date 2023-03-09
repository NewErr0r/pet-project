FROM php:8-cli

COPY ./web_project /app

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

EXPOSE 80

ARG server_crt
ARG server_key

COPY ${server_crt} /app/certs/server.crt
COPY ${server_key} /app/certs/server.key

CMD ["php", "-S", "0.0.0.0:443", "-t", "/app", "--ssl", "--cert", "/app/certs/server.crt", "--key", "/app/certs/server.key"]
