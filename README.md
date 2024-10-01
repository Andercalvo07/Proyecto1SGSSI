# Proyecto de Grupo

## Integrantes del Grupo

- [Jon Miraz Amorrortu](https://github.com/jonmi2)
- [Ander Calvo Asensio](https://github.com/Andercalvo07)
- [Asier Grandes Orons](https://github.com/asiergrandes)
- [Mikel Herranz Rodriguez](https://github.com/Mikel-Herranz)
- [Andoni Castellanos Diaz](https://github.com/andokas)
- [Iker López Aldonza](https://github.com/NotGayo)

## Despliegue del Proyecto con Docker

### Requisitos previos:

- Configuracion e instalacion de docker
- Configuracion en github de las claves SSH mediante key-gen para no tener que descargar mediante el enlace http...

# Docker LAMP
Linux + Apache + MariaDB (MySQL) + PHP 7.2 on Docker Compose. Mod_rewrite enabled by default.

## Instrucciones

### 1. Bajar el repositorio en su ultima version
- $ git clone git@github.com:jonmi2/Proyecto1SGSSI.git entrega_1
- $ git checkout entrega_1
- $ git pull git@github.com:jonmi2/Proyecto1SGSSI.git entrega_1

### 2. Dentro de la carpeta de proyecto construimos la imagen una unica vez
- $ docker build -t="web" .

### 3. Una vez construido desplegamos
- $ docker-compose up

### 4. Accedemos a phpMyAdmin e importamos la database.sql del proyecto
- [phpMyAdmin](http://localhost:8890/)

- Nos registramos con:
  - Usuario : admin
  - Password : test
  
- Dentro de la pagina accedemos dentro del nav a la pestaña de IMPORTAR/IMPORT y seleccionamos en el area que pone BROWSE el fichero database.sql

### 5. Accedemos a la vista de la pagina en el puerto 81

- [CONCESIONARIO](http://localhost:81/)

### 6. Para terminar con la pagina y los servicios

- $ docker-compose down
