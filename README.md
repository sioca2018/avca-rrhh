# Laravel 5 Boilerplate

_Basado en un boilerplate de Laravel

## Requerimientos del sistema
Para ser capaz de correr Laravel tu tienes que cumplir con los siguientes requerimientos:
- PHP > 7.0
- PHP Extensions: PDO, cURL, Mbstring, Tokenizer, Mcrypt, XML, GD
- Node.js > 6.0
- Composer > 1.0.0

## Instalacion

**Nota:** Es necesario tener instalado en su computador el programa de git el cual se puede descargar desde el siguiente enlace: (https://git-scm.com/)
Lo siguiente es ubicarse dentro de su servidor local desde la terminal de git. Si estan usando xampp la ruta por defecto de instalación en windows está ubicada en:
```
C:\xampp\htdocs
```

Esto pueden hacerlo abriendo el programa ***git bash*** y ubicandose en la ruta mencionada arriba.

### Ahora si, manos a la obra!!!

1. Instala composer utilizando las instrucciones detalladas presentadas a continuacion [aquí](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
2. Instala node.js siguiendo las instruccciones a continuacion [aquí](https://nodejs.org/en/download/package-manager/)
3. Clona el repositorio
```
$ git clone https://github.com/jersonmr/avca-rrhh
```
4. Dirigete al directorio de trabajo
```
$ cd avca-rrhh
```
5. Copia `.env.example` a `.env` y modifica de acuerdo a tu entorno
```
$ cp .env.example .env
```
6. Instala las dependencias de composer
```
$ composer install --prefer-dist
```
7. Genera una llave para la aplicacion
```
$ php artisan key:generate
```
8. Ejecuta los siguientes comandos para ejecutar las otras dependencias
```
$ npm install
$ npm run dev
```
9. Abrir el gestor de base de datos y crear una base de datos con el nombre de su preferencia

10. Ir al proyecto, abrir el archivo `.env` y cambiar estos tres parámetros por los correspondientes a su base de datos:
```
DB_DATABASE=NOMBRE_BASE_DATOS
DB_USERNAME=NOMBRE_USUARIO
DB_PASSWORD=PASSWORD_BASE_DATOS
```
11. Ejecuta estos comandos para crear las tablas de la base de datos y llenar con datos las tablas necesarias
```
$ php artisan migrate --seed
```
Si obtienes un error `PDOException` trata de editar el archivo `.env` y cambia `DB_HOST=127.0.0.1` a `DB_HOST=localhost` o `DB_HOST=mysql`

## Correr el servidor

Para iniciar el servidor php ejecutar el comando
```
$ php artisan serve --port=8080
o
$ php -S localhost:8080 -t public/
```

Ahora puedes explorar el sitio en [http://localhost:8080](http://localhost:8080)  🙌
