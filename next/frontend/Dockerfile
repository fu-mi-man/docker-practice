# Node.js Vercelに合わせてDebianベースのイメージを使用
FROM node:22.16.0-bookworm

# pnpmをグローバルインストール
RUN npm install -g pnpm

# 作業ディレクトリを設定（frontendディレクトリとマウント）
WORKDIR /app

# package.jsonとpnpm-lock.yamlを先にコピー
# これによりソースコード変更時でも依存関係のキャッシュが効く
# COPY package*.json pnpm-lock.yaml* ./

# 依存関係をインストール（この時点でレイヤーがキャッシュされる）
# RUN pnpm install

# 全ソースコードをコピー（./frontend → /app、依存関係後でキャッシュ最適化）
# COPY . .

# ポート3000を公開するというメモ
EXPOSE 3000

# 開発サーバーを起動
# CMD ["pnpm", "run", "dev"]
