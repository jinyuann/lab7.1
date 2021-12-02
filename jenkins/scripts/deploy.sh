#!/usr/bin/env sh

set -x
docker run -d -p 80:80 --name my-apache-php-app -v "/home/student145/test/lab7.1"/src:/var/www/html php:7.2-apache
sleep 1
set +x

echo 'Now...'
echo 'Visit http://13.58.241.171 to see your PHP application in action.'

