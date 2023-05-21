FROM php:8.2.4-fpm

RUN apt-get update && apt-get upgrade -y \
    git curl wget \
    libpq-dev libonig-dev libmemcached-dev libmcrypt-dev libxml2-dev \
    libfreetype6-dev libjpeg62-turbo-dev zlib1g-dev libicu-dev g++ libzip-dev zip librabbitmq-dev \
    && apt-get install apt-utils -y \
    && apt-get install git zip vim libzip-dev libgmp-dev libffi-dev libssl-dev cron unoconv pdftohtml -y \
    && pecl install xdebug \
    && pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-install -j$(nproc) opcache mbstring pdo pdo_pgsql pgsql sockets zip gmp pcntl bcmath ffi shmop ftp \
    && docker-php-source delete \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-enable redis \
    && apt-get autoremove --purge -y && apt-get autoclean -y && apt-get clean -y

## Установим Symfony CLI
#RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

# Установим Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

CMD composer install ; php-fpm
