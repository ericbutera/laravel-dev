help:
	just --list

setup-asdf:
	cut -d\  -f1 .tool-versions|grep -E '^[^#]'|xargs -L1 asdf plugin add
	asdf install

# run github actions locally
act:
	act

lint: php-lint
test: php-test

php-lint:
    ./vendor/bin/phpcs --colors  --report=diff .
    ./vendor/bin/pint --test

php-test:
    php artisan test

# TODO: ts-lint, ts-test

# asdf install
# pre-commit install
# k6
# openapi
