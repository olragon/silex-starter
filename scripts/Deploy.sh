#!/bin/sh

# Set php version through phpenv. 5.3, 5.4 and 5.5 available
phpenv local 5.5
# Install extensions through Pecl
# yes yes | pecl install memcache

# Install dependencies through Composer
composer install --prefer-source --no-interaction

# Processes the schema and either create it
php cli.php orm:schema-tool:create

