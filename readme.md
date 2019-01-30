<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Get Started Tool

1. "git clone https://github.com/StanislavAshykhmin/parser.git" - clone with https or "git clone git@github.com:StanislavAshykhmin/parser.git" - clone with SSH;
2. "touch .env" - create file .env at the root of the parser folder;
3. "cp .env.example to .env" - copy basic settings;
4. "docker-compose up -d --build" - create docker container;
5. "docker exec -it parser-web-container bash" - open container;
6. "composer install" - install packages;
7. "chown -R www-data:www-data ." - opening access to reading;
8.  "php artisan key:generate" - generate key;
9. "php artisan migrate" - create table on data base;
10. "php artisan db:seed" - seeding table.
