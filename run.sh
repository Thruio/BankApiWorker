#!/usr/bin/env bash

cd /app/;
crond -n
php get_balances.php

chown www-data:www-data /app -R
source /etc/apache2/envvars
tail -F /var/log/apache2/* &
exec apache2 -D FOREGROUND

