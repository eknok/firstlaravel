# README

初めてのLaravel (18.6.15更新)

## version
- PHP 7.2.6
- Laravel 5.6.25

## 参考サイト
- [ララ張](https://laravel10.wordpress.com/category/%E3%81%AF%E3%81%98%E3%82%81%E3%81%A6%E3%81%AE-laravel-5-1/page/4/)  
- [ドットインストール](https://dotinstall.com/lessons/basic_laravel_v2)  

## 一言めも
- `artisan`はLaravelに含まれるユーティリティコマンド
- 配列と`compact`関数
- phpタグ `<? $hoge ?>`
- Laravelのテンプレートエンジンの`blade`書式　`{{ $hoge }}`


## 疑問めも
- [x] controller作成時にデフォルトでResourceが作られない

## めもコマンド

- バージョン確認  
`$ php artisan --version`  

- プロジェクト作成
`$ laravel new project_name`

- サーバー立ち上げ
`$ php artisan serve`

- コントローラ作成
`$ php artisan make:controller WelcomeController`

- artisanコマンド一覧
`$ php artisan list`

- helpコマンド
`$ php artisan help コマンド`  
`$ php artisan help make:controller`

- DB確認（コンソール?）  
`$ php artisan tinker`

- migrationファイル作成
`$ php artisan make:migration create_user_table`
