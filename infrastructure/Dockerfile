# infrastructure/Dockerfile
FROM php:8.1-apache

# Installation de l’extension PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copie du code de l’application
COPY ./app/ /var/www/html/

# (Optionnel) Donne les bons droits
RUN chown -R www-data:www-data /var/www/html

# (Optionnel) Active mod_rewrite si besoin de routes propres
RUN a2enmod rewrite

EXPOSE 80

