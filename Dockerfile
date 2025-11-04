# 🩸 Imagen base con PHP y extensiones necesarias para Laravel
FROM php:8.2-fpm

# Instalar dependencias del sistema necesarias
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiar los archivos del proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Crear una clave de aplicación si no existe
RUN php artisan key:generate || true

# Dar permisos de escritura
RUN chmod -R 777 storage bootstrap/cache

# Exponer el puerto donde correrá la app
EXPOSE 8080

# Comando para ejecutar Laravel
CMD php artisan serve --host=0.0.0.0 --port=8080
