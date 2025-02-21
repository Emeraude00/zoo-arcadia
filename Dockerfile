# Utiliser une image PHP avec Apache
FROM php:8.1-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier les fichiers de l'application dans le conteneur
COPY . /var/www/html/

# Changer les permissions pour Apache
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 pour le serveur
EXPOSE 80

# Commande de démarrage d'Apache
CMD ["apache2-foreground"]

# Utiliser une image officielle PHP
FROM php:8.1-apache

# Copier les fichiers de votre application
COPY . /var/www/html/

# Exposer le port 80
EXPOSE 80