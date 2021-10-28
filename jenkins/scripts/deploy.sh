#!/usr/bin/env sh

set -x
docker run -d -p 80:81 --name my-apache-php-app -v c:\\users\\JIN YUAN NEO\\Documents\\Github\\lab7.1\\src:/var/www/html php:7.2-apache
sleep 1
set +x

echo 'Now...'
echo 'Visit http://192.168.10.109 to see your PHP application in action.'

