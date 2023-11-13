# Cuba-api

Cuba-api es un proyecto pequeño que permite consultar datos de la división político administrativa de las provincias y municipios de Cuba.

## Endpoints

La API de Cuba-api ofrece los siguientes endpoints:
- Base Url: https://cuba-api.onrender.com/api/v1/
- /provincias-municipios : Obtiene la lista de todas la provincias con sus municipios.
- /provincias: Obtiene la lista de todas las provincias de Cuba.
- /provincias/:id: Obtiene los detalles de una provincia específica por su ID.
- /municipios: Obtiene la lista de todos los municipios de Cuba.
- /municipios/:id: Obtiene los detalles de un municipio específico por su ID.

## Autor
Cuba-api ha sido desarrollado por [ Yadin ](https://github.com/yadindev).


# Instalación de cuba-api

## Requisitos Previos

- PHP (versión [^8.0](https://www.php.net/downloads.php))
- Composer (https://getcomposer.org/download/)
- Servidor de Base de Datos (por ejemplo, MySQL, PostgreSQL)
- Git

## Pasos para la Instalación

1. Clona el repositorio en tu máquina local utilizando el siguiente comando en tu terminal o línea de comandos:

   ```
   git clone https://github.com/yadindev/cuba-api.git
   ```

2. Accede al directorio del proyecto:

   ```
   cd tu-proyecto-laravel
   ```

3. Instala las dependencias utilizando Composer:

   ```
   composer install
   ```

4. Crea un archivo `.env` basado en el archivo `.env.example`:

   - En Linux/Mac:

     ```
     cp .env.example .env
     ```

   - En Windows (PowerShell):

     ```
     copy .env.example .env
     ```

5. Genera una nueva clave de aplicación ejecutando el siguiente comando:

   ```
   php artisan key:generate
   ```

6. Configura los detalles de conexión a tu servidor de base de datos en el archivo `.env`. Por ejemplo:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

7. Ejecuta las migraciones para crear las tablas en la base de datos:

   ```
   php artisan migrate
   ```

8. Opcionalmente, puedes ejecutar el comando `php artisan db:seed` para agregar datos predefinidos a la base de datos.

9. Inicia el servidor de desarrollo de Laravel:

   ```
   php artisan serve
   ```

10. Abre tu navegador y accede a `http://localhost:8000` para ver la aplicación en funcionamiento.

¡Listo! Ahora deberías tener el proyecto instalado y funcionando en tu máquina local.

Si tienes algún problema durante la instalación o tienes preguntas adicionales, consulta la documentación oficial de Laravel (https://laravel.com/docs) o ponte en contacto con [el desarrollador del proyecto.](https://github.com/yadindev) ¡Disfruta codificando! 😊🚀

