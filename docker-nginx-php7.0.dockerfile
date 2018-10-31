FROM debian:latest

# Non Interactive MODE
ENV DEBIAN_FRONTEND noninteractive
ENV DEBCONF_NONINTERACTIVE_SEEN true

# Carpeta de trabajo
WORKDIR /var/www/html

# Instalamos PHP, Nginx, Composer y eliminamos la página por defecto
RUN apt-get update && apt-get install -y nginx php7.0-fpm composer && rm /var/www/html/index.*

# Iniciamos e istalamos Twig en Composer
RUN composer init --quiet --no-interaction
RUN composer require twig/twig --quiet --no-interaction

# Copiamos nuestro código backend en el contenedor
COPY backend /var/www/html/backend/
# Copiamos nuestra configuración de Nginx al contenedor
COPY nginx.conf /etc/nginx/sites-available/default
# Copiamos el script de inicialización al contenedor
COPY start.sh /start.sh

# Iniciamos script start.sh
ENTRYPOINT ["sh", "/start.sh"]