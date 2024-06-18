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
