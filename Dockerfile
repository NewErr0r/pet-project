FROM php:8-cli

COPY ./web_project /usr/src/myapp

WORKDIR /usr/src/myapp
