#!/bin/bash
set -e

composer install --no-dev --optimize-autoloader
php artisan octane:install --server=frankenphp

# we're user ROOT at this point so we can fix these permissions:
chown -R laravel:laravel .
chmod -R 770 .


# now switch to laravel:

if [ "$APP_ENV" = "production" ]; then
  su laravel sh -c "
    php artisan migrate --force &&
    php artisan optimize &&
    php artisan config:cache &&
    php artisan octane:frankenphp
  "
else
  su laravel sh -c "
    php artisan migrate &&
    php artisan serve --host 0.0.0.0
  "
fi
