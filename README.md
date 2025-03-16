# Puesta a punto e instalación
La mayoría de comandos se lanzan en la raíz del proyecto, si no, se indicará lo contrario.

### Inicialización en entorno Development

- Comando para copiar el compose para lamp en la carpeta donde debe encontrarse para iniciar.
`ln -s dev-folder/compose-lamp.yml compose-lamp.yml`

- Comando para copiar el compose para lemp en la carpeta  donde debe encontrarse para iniciar.
`ln -s dev-folder/compose-lemp.yml compose-lemp.yml`


- Se necesita añadir un archivo **.env** en la raíz del proyecto el cual contenga información similar a la siguiente:

```
DB_HOST=basededatos
DB_PORT=3306
MYSQL_ROOT_PASSWORD=passwordRoot # Cambiable por el valor desado
MYSQL_DATABASE=lampDatabase # Cambiable por el  valor deseable
MYSQL_USER=lampUser # Cambiable por el valor deseable
MYSQL_PASSWORD=passwordUser # Cambiable por el valor deseable
```

- Para iniciar los proyectos se emplearán los siguientes comandos dependiendo del entorno.

##### Comando arraque de docker en lamp

`docker compose -f compose-lamp.yml build`
`docker compose -f compose-lamp.yml up`


##### Comando arraque de docker en lemp

`docker compose -f compose-lemp.yml build`
`docker compose -f compose-lemp.yml up`


- Realizar el siguiente comando para cargar la base de datos necesaria para su funcionamiento.

`./basededatos/restore.sh`

- Listo ahora ya se puede acceder usando la url **[oracle.lastcrave.shop](oracle.lastcrave.shop)** desde el cliente firefox virtual

> [!IMPORTANT]
> El cliente solo funciona en Linux, si en el tuyo no funciona ejecuta `xhost +local:` en la terminal antes de levantar el docker. Si quieres ver la web y realizar esto en windows tienes que usar http://localhost:80, no pudiendo comprobar con SSL(https).

### Inicialización en entorno Producción

Los pasos son los mismos que en development cambiando un par de detalles.

- En vez de usar la carpeta dev-folder usar la carpeta prod-folder.
- En el **.env** detallaremos todos los campos (no solo los comentados) obtenidos del host de mysql de nuestra elección. (En producción la base de datos no es hosteada por la web).
- Para importar la base de datos solo tendremos importar el **backup-bd.sql** de la carpeta **basededatos** en una tabla de nuestro host de mysql.
- Después de eso hay que buscar las lineas donde el codigo indica **oracle.lastcrave.shop** en las rutas *nginx-lemp/vhost-nginx.conf*, *apache-php-lamp/vhost-apache.conf*, *(entorno)-folder/compose-lamp.yml* y *(entorno)-folder/compose-lemp.yml*,  y cambiar este valor por el url que tengamos personalmente.
- Ejecutamos los mismos comandos de arranque dependiendo de si queremos arrancar en lemp o lamp.

> [!NOTE]
> Puede verse un funcionamiento en entorno de producción de lemp en la url **[oracle.lastcrave.shop](oracle.lastcrave.shop)**
