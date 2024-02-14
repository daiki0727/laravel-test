# [お問い合わせフォーム](https://pages.github.com/)

## 環境構築
Dockerビルド

1. git clone リンク
2. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術
- PHP8.0
- Laravel 10.0
- MYSQL 8.0

## ER図
![test ER図](https://github.com/daiki0727/test/assets/149881657/64093140-50c4-458f-b159-b9f55bb92381)


## URL
- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/

