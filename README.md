# Dispensador de Comida API

Este proyecto es una API para un dispensador de comida, desarrollado con Laravel. A continuación se describen las características y la estructura del proyecto.

## Estructura del Proyecto

- **app/Console**: Contiene comandos de consola personalizados para la aplicación.
- **app/Exceptions**: Maneja las excepciones personalizadas de la aplicación.
- **app/Http/Controllers**: Controladores que manejan las solicitudes HTTP y la lógica de negocio.
- **app/Http/Middleware**: Middleware que se ejecuta antes o después de las solicitudes HTTP.
- **app/Models**: Modelos de Eloquent que representan las tablas de la base de datos.
- **app/Providers**: Proveedores de servicios que configuran la aplicación.
- **bootstrap/app.php**: Inicializa la aplicación Laravel y configura el entorno.
- **config**: Archivos de configuración de la aplicación.
- **database/factories**: Fábricas para crear datos de prueba.
- **database/migrations**: Migraciones para crear y modificar tablas en la base de datos.
- **database/seeders**: Seeders para poblar la base de datos con datos iniciales.
- **routes/api.php**: Define las rutas de la API.
- **tests/Feature**: Pruebas de características que verifican el comportamiento de la aplicación.
- **tests/Unit**: Pruebas unitarias que verifican la lógica de las clases individuales.
- **artisan**: Interfaz de línea de comandos de Laravel.
- **composer.json**: Configuración para Composer, que lista las dependencias del proyecto.
- **.env.example**: Ejemplo de configuración de variables de entorno.

## Instalación

1. Clona el repositorio.
2. Ejecuta `composer install` para instalar las dependencias.
3. Copia el archivo `.env.example` a `.env` y configura tus variables de entorno.
4. Ejecuta `php artisan key:generate` para generar la clave de la aplicación.
5. Ejecuta las migraciones con `php artisan migrate` para crear las tablas en la base de datos.

## Uso

La API está diseñada para manejar solicitudes relacionadas con el dispensador de comida. Puedes realizar solicitudes a las rutas definidas en `routes/api.php`.

## Contribuciones

Las contribuciones son bienvenidas. Por favor, abre un issue o un pull request para discutir cambios o mejoras.

## Licencia

Este proyecto está bajo la Licencia MIT.