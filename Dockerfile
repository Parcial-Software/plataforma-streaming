FROM php:7.4-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Obtener Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configurar directorio de trabajo y copiar archivos
WORKDIR /var/www/html
COPY . /var/www/html

# Instalar dependencias de Composer
RUN composer install

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html/storage

# Exponer el puerto 9000
EXPOSE 9000

# Comando para ejecutar el servidor PHP-FPM
CMD ["php-fpm"]
