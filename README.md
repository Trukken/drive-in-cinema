# Drive-in Cinema Laravel application

The application uses Laravel's built-in Docker tool, Sail.
Frontend is yet to come, until then you can consume the APIs with Postman or you can learn more about them under `/api/documentation`.

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

The best way to discover the application is to visit `localhost/api/documentation` 
where you will be able to see all available endpoints.

### License

Licensed under the [MIT license](https://opensource.org/licenses/MIT).
