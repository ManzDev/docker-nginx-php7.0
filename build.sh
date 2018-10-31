# Generamos la imagen de Docker
# - "manz" es el nombre del autor de la imagen
# - "php7" es el nombre de la imagen
# - "1.0" es la versión de la imagen
# - "docker-nginx-php7.0.dockerfile" es el nombre de nuestro dockerfile
# - "." es la carpeta del contexto (la carpeta actual)
docker build -t manz/php7:1.0 -f docker-nginx-php7.0.dockerfile .