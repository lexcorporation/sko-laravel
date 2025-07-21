FROM php:8.3-fpm

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_pgsql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar Node.js y npm (usaremos Node 18 estable)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www
