FROM php:8.3-fpm-bookworm

# Laravel11に必要なPHP拡張モジュールは、8.3に全て含まれている
# Laravelインストール時にgit, zip, unzipが必要
RUN apt-get update && apt-get install -y \
  git \
  zip \
  unzip \
  && docker-php-ext-install pdo_mysql

# マルチステージビルドを使って常に最新の`composer`をインストールする
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# php-fpmはポート番号9000使用する
EXPOSE 9000

# Laravel 11 に必要な拡張モジュールを確認する（https://laravel.com/docs/11.x/deployment）
# PHP >= 8.2
# Ctype PHP Extension
# cURL PHP Extension
# DOM PHP Extension
# Fileinfo PHP Extension
# Filter PHP Extension
# Hash PHP Extension
# Mbstring PHP Extension
# OpenSSL PHP Extension
# PCRE PHP Extension
# PDO PHP Extension
# Session PHP Extension
# Tokenizer PHP Extension
# XML PHP Extension

# root@a4114e3eadf3:/var/www/html# php -m | egrep -i 'ctype|curl|dom|fileinfo|filter|hash|mbstring|openssl|pcre|pdo|session|tokenizer|xml'
# ctype
# curl
# dom
# fileinfo
# filter
# hash
# libxml
# mbstring
# openssl
# pcre
# PDO
# pdo_sqlite
# random
# session
# SimpleXML
# tokenizer
# xml
# xmlreader
# xmlwriter
