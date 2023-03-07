<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Запуск

1. Через composer и npm устанавливаем все зависимости
2. Настраиваем БД в env файле
3. Запускаем artisan migrate и db:seed
4. Чтобы не проходить регистрацию buyer@example.com:password и seller@example.com:password
P.S. До ума доводить еще много, выносить валидаторы, убрать некоторую логику из контроллеров, взаимодействие с ролями по хорошему нужно выделять на каждую роль список разреешенных действий и через policy описывать
Времени потратил около 5 часов, не считая установку самого laravel и зависимостей
