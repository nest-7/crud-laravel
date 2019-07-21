# Crud con Laravel, Jquery y Bootstrap

![Vista Principal](https://res.cloudinary.com/dsc7j32bw/image/upload/v1549302582/repos/Crud%20with%20laravel/1-repo-free.png "Desarrollado por CodesMx")

![Creando un producto](https://res.cloudinary.com/dsc7j32bw/image/upload/v1549302581/repos/Crud%20with%20laravel/4-repo-free.png "Desarrollado por CodesMx")

## Instalación
1- Clonar el repositorio ya sea por HTTPS o SSH - Clone the repository either by HTTPS or SSH
```
git clone https://github.com/nest-7/crud-laravel.git
```

2.- Instalar las dependencias de Composer - Install the Composer dependencies
```bash
composer install
```

3.- Instalar las dependencias de Node.js - Install the dependencies of Node.js
```bash
npm install
```

4.- Ingresar a la carpeta del proyecto y realizar una copia del archivo de las variables de entorno - Enter the project folder and make a copy of the environment variables file
```bash
cp .env.example .env
```

5.- Configurar nombre, usuario y contraseña de la base de datos en el archivo .env - Set name, user and password of the database in the .env file
```bash
DB_DATABASE=name_database
DB_USERNAME=name_user_database
DB_PASSWORD=password_user_database
```

6.- Configurar la clave de aplicación - Configure the application key

```bash
php artisan key:generate
```

7.- Crear la base de datos - To create the database
```sql
CREATE DATABASE name_database;
```

8.- Crear las tablas a través de las migraciones - Create tables through migrations
```bash
php artisan migrate
```

9.- Compilar las hojas de estilo y los archivos JavaScript con Webpack - Compile style sheets and JavaScript files with Webpack
```bash
npm run dev
```

10.- Encender el servidor de artisan y acceder a la URL dada por medio del navegador - Turn on the artisan server and access the given URL through the browser

```bash
php artisan serve --port=8000
```

## UI
![Registro de usuario](https://res.cloudinary.com/dsc7j32bw/image/upload/v1549302580/repos/Crud%20with%20laravel/2-repo-free.png "Desarrollado por CodesMx")

![Registro guardado](https://res.cloudinary.com/dsc7j32bw/image/upload/v1549302581/repos/Crud%20with%20laravel/5-repo-free.png "Desarrollado por CodesMx")

![Index](https://res.cloudinary.com/dsc7j32bw/image/upload/v1549302581/repos/Crud%20with%20laravel/7-repo-free.png "Desarrollado por CodesMx")


## Créditos - Credits
* [Nst](https://github.com/nest-7 "GitHub del Creador")
* [CodesMx](http://codesmx.com/)

## Licencia - License
GNU General Public License v3.0. Por favor, vea el [archivo de licencia](https://github.com/nest-7/Crud-Laravel/blob/master/LICENSE) para más información - Please see [License File](https://github.com/nest-7/Crud-Laravel/blob/master/LICENSE) for more information.
