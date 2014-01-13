#!/bin/bash

rm -rf /srv/www/app/cache/* 2> /dev/null

mkdir -p /srv/www/app/cache
mkdir -p /srv/www/app/logs

chmod 777 /srv/www/app/cache -R
chmod 777 /srv/www/app/logs -R

cd /srv/www && php ./app/console cache:warmup --env=prod

chmod 777 /srv/www/app/cache -R
chmod 777 /srv/www/app/logs -R

/usr/bin/supervisord $@
