# Utilise l'image officielle PHP avec Apache
FROM php:8.2-apache

# Copie tout le projet dans le dossier web d'Apache
COPY . /var/www/html/

# Donne les bons droits
RUN chown -R www-data:www-data /var/www/html

# Active mod_rewrite si besoin
RUN a2enmod rewrite

# Expose le port 80
EXPOSE 80