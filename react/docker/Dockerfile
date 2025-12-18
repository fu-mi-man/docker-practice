# Node.js 20 LTS (2025年12月時点で安定版)
FROM node:20-alpine

# pnpmをcorepackで有効化（バージョン指定）
# インタラクティブなやり取りを避けるため --activate オプションを使用
RUN corepack enable && corepack prepare pnpm@10.26.0 --activate

WORKDIR /app

# 開発サーバーのポート
EXPOSE 5173

# Viteの開発サーバーを起動
CMD ["pnpm", "dev", "--host", "0.0.0.0"]
