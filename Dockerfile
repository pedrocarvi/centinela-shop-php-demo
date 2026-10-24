FROM php:8.2.20-fpm
RUN docker-php-ext-install pdo_mysql
COPY . /var/www/html/
EXPOSE 9000
