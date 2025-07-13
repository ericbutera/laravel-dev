# Laravel Development Environment

```sh
mkdir laravel-dev && cd laravel-dev
docker run --rm -v $(pwd)/app:/app composer create-project laravel/laravel /app
docker-compose up --build
docker-compose exec app bash           # shell into app container
docker-compose down                    # stop and clean up

docker-compose exec app php artisan make:model Todo -mcr
```
