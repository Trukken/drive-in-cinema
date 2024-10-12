# Drive-in Cinema Laravel application

The application uses Laravel's built-in Docker tool, Sail.
Frontend SPA can be viewed [here](https://github.com/Trukken/drive-in-cinema-frontend), you can also view the APIs with Postman or you can learn more about them under `/api/documentation`.

## Prerequisites:

- Docker >= 27.0.3
- Composer >= 2.6.6
- PHP >= 8.2, however the container will use it's own PHP version.
- Ideally you should be running on Linux or MacOS
- If you are on Windows install [WSL](https://learn.microsoft.com/en-us/windows/wsl/install)

## Installation:

- Create a copy of `.env.example` as `.env` and modify it to fit your needs.
- `composer install`
- `./vendor/bin/sail up -d`
- `./vendor/bin/sail php artisan migrate:fresh`
- `./vendor/bin/sail php artisan db:seed`
- `./vendor/bin/sail php artisan l5-swagger:generate`

## Usage:

The best way to discover the application is to use the [Fronted SPA](https://github.com/Trukken/drive-in-cinema-frontend). 
However you can also visit `localhost/api/documentation` once you have the application running,
where you will be able to see all available endpoints.

## Libraries used:

- [Laravel](https://packagist.org/packages/laravel/laravel)
- [Laravel Sail](https://packagist.org/packages/laravel/sail)
- [L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger)

### License

Licensed under the [MIT license](https://opensource.org/licenses/MIT).
