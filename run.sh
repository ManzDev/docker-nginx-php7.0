# Creamos un contenedor basado en la imagen "manz/php7:1.0"
# - Que sea interactivo (-it)
# - Que se borre al salir de la terminal temporal (--rm)
# - Que escuche en el puerto 80
docker run -it --rm -p 80:80 manz/php7:1.0