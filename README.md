<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Servicio de gestión de tickets para eventos artísticos
API REST para la compra de tickets para eventos artísticos. 
## Levantamiento del proyecto

## Entorno de desarrollo
Primero es necesario instalar Docker y GIT en el equipo, para ello se puede seguir la guía de instalación de Docker en el siguiente enlace: https://docs.docker.com/engine/install/. 
En caso de ser sistema Windows, primero es necesario instalar WSL2 y luego una distribución de Linux, de preferencia Ubuntu.  Luego
es necesario seguir los siguientes pasos:

* Clonar el repositorio: `git clone https://github.com/AndresWV/tickets-haulmer.git`
* Ingresar a la carpeta del proyecto: `cd tickets-haulmer`
* Crear el archivo .env para almacenar las variables de entorno: `cp .env.example .env`
* Instalar las dependencias de composer: `docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php81-composer:latest \
  composer install --ignore-platform-reqs`
* Levantar los contenedores de Docker: `./vendor/bin/sail up --build`. La opción `--build` es necesaria solo la primera vez que se levanta el proyecto. 
* En una nueva terminal, generar la llave de la aplicación: `./vendor/bin/sail php artisan key:generate`
* Ejecutar las migraciones: `./vendor/bin/sail php artisan migrate`
* Ejecutar los seeders: `./vendor/bin/sail php artisan db:seed`

