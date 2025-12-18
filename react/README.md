# React 18 + Vite + TypeScript 学習プロジェクト

## 環境

- Node.js 20 (Alpine)
- pnpm 10.26.0
- React 18
- Vite 7.x
- TypeScript 5.9.x

## クイックスタート（プロジェクトをcloneした人向け）

```bash
docker compose up
```

ブラウザで http://localhost:5173 にアクセス

## プロジェクト作成手順（記録用）

このプロジェクトは以下の手順で作成されました。

### 1. Docker環境の準備

`docker/Dockerfile` と `compose.yaml` を作成。

### 2. Viteプロジェクトの作成

```bash
docker compose run --rm -it app sh

# コンテナ内で
pnpm create vite@latest . --template react-ts
# → "Ignore files and continue" を選択
# → "Use rolldown-vite" → No
# → "Install with pnpm and start now" → No
```

### 3. React 18 のインストール

Viteはデフォルトで最新のReact（19）をインストールするため、React 18を明示的に指定。

```bash
# コンテナ内で
pnpm add react@18 react-dom@18
pnpm add -D @types/react@18 @types/react-dom@18
exit
```

### 4. 起動

```bash
docker compose up
```

## よく使うコマンド

```bash
# 起動
docker compose up

# 停止
docker compose down

# コンテナに入る
docker compose exec app sh

# パッケージ追加
docker compose exec app pnpm add <package>

# ビルド
docker compose exec app pnpm build
```
