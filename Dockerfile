FROM php:8-cli

COPY ./web_project /app

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

EXPOSE 443

ENV SERVER_CRT=/run/secrets/server_crt
ENV SERVER_KEY=/run/secrets/server_key

RUN --mount=type=secret,id=server_crt cat /run/secrets/server_crt > /app/certs/server.crt
RUN --mount=type=secret,id=server_key cat /run/secrets/server_key > /app/certs/server.key

CMD ["php", "-S", "0.0.0.0:443", "-t", "/app", "--ssl", "--cert", "/app/certs/server.crt", "--key", "/app/certs/server.key", "--force-http"]
