#!/usr/bin/env bash

echo "Running composer install..."
composer install --no-dev --working-dir=/var/www/html

echo "Running migrations..."

php artisan migrate:refresh --seed --force

echo "Running api docs generator"

php artisan l5-swagger:generate
