# Используем официальный образ PHP с поддержкой FPM
FROM php:8.1-fpm

# Устанавливаем зависимости для Laravel, например, расширения PHP
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Копируем Composer из официального контейнера
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию внутри контейнера
WORKDIR /var/www

# Копируем все файлы проекта в контейнер
COPY . .

# Выполняем установку зависимостей с помощью Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Настроим права доступа для папок
RUN chown -R www-data:www-data /var/www

# Открываем порт 9000 для PHP-FPM
EXPOSE 9000

# Запускаем PHP-FPM
CMD ["php-fpm"]
