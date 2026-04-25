FROM php:8.2-cli

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git curl unzip zip libzip-dev \
    libpng-dev libonig-dev libxml2-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_mysql zip intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

# 🔥 Node 20 install (IMPORTANT FIX)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install \
    && npm run build

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000