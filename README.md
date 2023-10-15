<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


### Первоначальная настройка Laravel проекта
> Копируем .env.example в .env

```
cp .env.example .env
```
> Устанавливаем зависимости:
```
composer update
```
> Генерируем ключ Laravel
```
php artisan key:generate
```
> Генерируем JWT ключ
```
php artisan jwt:secret
```
---
