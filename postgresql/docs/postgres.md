コンテナのbashに入る
```bash
docker compose exec db bash
```

bashの中でPostgreSQLに接続
```bash
psql -U myapp_user -d myapp_db
```

データベース一覧
```bash
\l
```

データベース選択
```bash
\c database_name
```

テーブル一覧
```bash
\dt
```

テーブル構造
```bash
\d table_name
```

終了
```bash
\q
```

テーブル作成
```bash
CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

データ挿入
```bash
INSERT INTO users (name, email) VALUES ('田中太郎', 'tanaka@example.com');
INSERT INTO users (name, email) VALUES ('佐藤花子', 'sato@example.com');

INSERT INTO users (name, email) VALUES 
('鈴木次郎', 'suzuki@example.com'),
('山田三郎', 'yamada@example.com'),
('高橋四郎', 'takahashi@example.com');
```

データ確認
```bash
SELECT * FROM users;
```
