# docker build -t node:22.2.0-bookworm-slim .
FROM node:22.2.0-bookworm-slim

# vimのインストール
RUN apt-get update && apt-get install -y \
  vim

# Nuxtはポート番号3000使用する
EXPOSE 3000
