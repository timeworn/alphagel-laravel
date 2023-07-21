<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center">Alpha gel project with laravel</p>

## Bootsrap Responsive Online Shop with beautiful metro style administration!

Current versions
* Laravel Framework 5.5.3 (https://laravel.com/)
* Bootstrap v3.3.7 (http://getbootstrap.com)

## We support following features
1. Bootstrap responsive
2. Blade template usage
3. Multi Language (administration and public page) 
4. Products with tree structure categories and tags

### Server Requirements
PHP >= 7.0.0

## Installation in 3 easy steps
1. Import alpha.sql to your mysql
2. Set hostname, username and password in .env for your SQL
3. Set APP_URL in .env with your site url - http://yourdomain.com
(Maybe you know but you must set your virtual host point to public/ directory or start laravel web server for testing with php artisan serve)

## Login to administration
http://yourdomain.com/admin
* Email: kiro@dev.bg
* Pass: admin

### How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__
