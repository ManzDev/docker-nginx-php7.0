# Iniciamos PHP Composer
cd /var/www/html
composer install --quiet --no-interaction

# Iniciamos el servidor PHP-FPM
service php7.0-fpm start

# Iniciamos el servidor web Nginx
service nginx start

# Descomentar una (solo una) de las siguientes lineas

# A) Para revisar temporalmente el contenedor
#/bin/bash
# B) Para mostrar errores
tail -f /var/log/nginx/access.log /var/log/nginx/error.log | ccze
