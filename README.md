# Laravel Development Environment

Playground to learn Laravel.

## original setup steps

I tried to write down the relevant steps to set this project up from scratch. One of the goals was to prevent running commands on the host.

```sh
mkdir laravel-dev && cd laravel-dev
docker run --rm -v $(pwd)/app:/app composer create-project laravel/laravel /app
docker-compose up --build
docker-compose exec app bash           # shell into app container
docker-compose down                    # stop and clean up

composer require --dev squizlabs/php_codesniffer friendsofphp/php-cs-fixer

docker-compose exec app php artisan make:model Todo -mcr
# Edit the migration in database/migrations/...create_todos_table.php:
docker-compose exec app php artisan migrate

# tests
docker-compose exec app php artisan make:test TodoFeatureTest
docker-compose exec app php artisan make:factory TodoFactory --model=Todo
docker-compose exec app php artisan test
# set breakpoint in TodoFeatureTest.php, then run:
docker-compose exec app php artisan test --filter=TodoFeatureTest
```
