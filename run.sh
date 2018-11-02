# Creamos un contenedor basado en la imagen "manz/php7:1.0"
# - Que sea interactivo (-it)
# - Que se borre al salir de la terminal temporal (--rm)
# - Que escuche en el puerto 80

# Windows compatible
docker run -it --rm -p 80:80 -v $(pwd -W)/html:/var/www/html manz/php7:1.0

# Linux compatible
# docker run -it --rm -p 80:80 -v html:/var/www/html manz/php7:1.0