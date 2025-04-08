<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pasos de Instalacion del proyecto
1. Clonar el repositorio Ejemplo git clone https://github.com/maurosena/adso2932015.git
2. Acceder al directorio del proyecto  cd adso2932015
3. Ejecutar el comando composer install para instalar las dependencias del proyecto
4. Copiar el archivo .env.example renombrarlo a .env y modificar los valores de la base de datos y el usuario de la base de datos
5. Ejecutar el comando php artisan key:generate para generar una clave de cifrado
6. Configurar las variables de entorno (opcional) asi: 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sera proporcionada por el instructor
DB_USERNAME=sera proporcionada por el instructor
DB_PASSWORD= sera proporcionada por el instructor
7. Migrar la base de datos con el comando php artisan migrate
8. Iniciar la aplicación con el comando php artisan serve