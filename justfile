help:
	just --list

# run github actions locally
act:
	act

lint: php-lint # js/ts
test: php-test

php-lint:
    ./vendor/bin/phpcs --colors  --report=diff .
    ./vendor/bin/pint --test

php-test:
    php artisan test

# asdf install
# pre-commit install
# k6
# openapi

