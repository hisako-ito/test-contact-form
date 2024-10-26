# お問い合わせフォーム

## 環境構築

### Docker ビルド

1.  git clone リンク<https://github.com/hisako-ito/test-contact-form.git>
2.  docker-compose up -d --build

### Laravel 環境構築

1.  docker-compose exec php bash
2.  composer install
3.  .env/example ファイルから.env を作成し、環境変数を変更
4.  php artisan key:generate
5.  php artisan migrate
6.  php artisan db seed

## 使用技術(実行環境)

・php v7.4.9
・Laravel v8.83.27
・MySQL 15.1

## ER 図

![test_contact_form](https://github.com/user-attachments/assets/586049e5-0571-4701-9103-494f245bf0df)

## URL

・開発環境：http://localhost/
・phpMyAdmin：http://localhost:8080/
