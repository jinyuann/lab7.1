#!/usr/bin/env sh

set -x
docker run -d -p 81:81 --name my-apache-php-app -v "/root/github/lab7.1"\\src:/var/www/html php:7.2-apache
sleep 1
set +x

echo 'Now...'
echo 'Visit http://localhost to see your PHP application in action.'

