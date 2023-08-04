# Nombre del Proyecto

Descripción breve del proyecto.

## Tabla de Contenidos

-   [Descripción](#descripción)
-   [Requisitos](#requisitos)
-   [Instalación](#instalación)
-   [Uso](#uso)

## Descripción

CRUD de productos con Laravel 10, Blade y MySQL.

## Requisitos

-   PHP 8.2.0
-   Composer
-   MySQL 5.7
-   Laravel 10

## Instalación

1. Clona este repositorio: `git clone URL_DEL_REPOSITORIO`
2. Instala las dependencias: `composer install`
3. Copia el archivo `.env.example` y renómbralo a `.env`
4. Configura tu archivo `.env` con las variables de entorno necesarias
5. Genera la clave de aplicación: `php artisan key:generate`
6. Ejecuta las migraciones: `php artisan migrate`
7. Ejecuta los seeders (si es necesario): `php artisan db:seed`

## Uso

1. Ejecuta el servidor local: `php artisan serve`
2. Accede a la aplicación en tu navegador: `http://localhost:8000`
