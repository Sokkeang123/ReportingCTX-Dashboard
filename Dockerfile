FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git unzip curl libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql mbstring zip
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader
COPY . .
RUN composer dump-autoload
EXPOSE 80

CMD ["php","artisan","serve","--host=0.0.0.0","--port=80"]
