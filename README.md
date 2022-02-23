# 勉強用

## 初回セットアップ
1. `git clone https://github.com/TeXmeijin/LaravelBookmark_FatController.git`
1. `cd LaravelBookmark_FatController`
1. `cp src/.env.sample src/.env`
1. `docker-compose up -d`
1. `docker-compose exec app composer install`
1. `docker-compose exec app php artisan key:generate`
1. `docker-compose exec app php artisan migrate`
1. `docker-compose exec app php artisan db:seed`
1. `docker-compose logs -f`※コンテナのログをターミナルで見ることができます
1. https://localhost へアクセスする

## 初回以降の起動方法
1. `docker-compose up -d`
1. `docker-compose logs -f`※コンテナのログをターミナルで見ることができます
1. https://localhost へアクセスする

## 作業終了時
1. `docker-compose down`
