## プロジェクトの作成 
### Dockerfile
```dockerfile
FROM node:22.16.0-bookworm
RUN npm install -g pnpm
WORKDIR /app
EXPOSE 3000
```

### compose.yaml
```yaml
services:
  frontend:
    build:
      context: ./frontend
      dockerfile: Dockerfile
    container_name: myapp_nextjs
    ports:
      - '3000:3000'
    volumes:
      - ./frontend:/app
      - /app/node_modules
      - /app/.next
    tty: true
    restart: unless-stopped
```

### `next15.3.4`をインストール
```bash
root@78a6b6af371b:/app# npx create-next-app@15.3.4 . --typescript --tailwind --eslint --app
Need to install the following packages:
create-next-app@15.3.4
Ok to proceed? (y) y
y
```


上記の状態でプロジェクトを作成すると、ディレクトリが存在することでエラーになった。
```bash
root@9a599779815e:/app# npx create-next-app@15.3.4 . --typescript --tailwind --eslint --app
Need to install the following packages:
create-next-app@15.3.4
Ok to proceed? (y) y

The directory app contains files that could conflict:

  .next/
  Dockerfile
  node_modules/

Either try using a new directory name, or remove the files listed above.
```

`compose.yaml`のマウント設定が原因。  
`.next/`と`node_modules/`を削除し、Dockerfileを一時的に退避後、再度プロジェクトを作成する
```bash
root@78a6b6af371b:/app# npx create-next-app@15.3.4 . --typescript --tailwind --eslint --app
```

frontend-src-appという階層にするかどうか。Noがモダンで一般的
```bash
? Would you like your code inside a `src/` directory? › No / Yes
no
```

`Turbopack`: Vercel（Next.js の会社）が開発した超高速ビルドツール
```bash
Would you like to use Turbopack for `next dev`? › No / Yes
yes
```

`@/*`とはインポート時のパス指定を簡単にする仕組み。デフォルトで十分no
```bash
Would you like to customize the import alias (`@/*` by default)? … No / Yes
no
```

プロジェクト作成成功
