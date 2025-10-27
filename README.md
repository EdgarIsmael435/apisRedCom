# REDi API – Integración con RED Comunicación Móvil

API desarrollada en Laravel 12 y PHP 8.2 para conectar el sistema REDi con la base de datos y servicios internos de RED Comunicación Móvil.

El proyecto no crea tablas propias; únicamente consulta y actualiza información existente en el sistema de RED.  
Se utiliza principalmente para validar chips, consultar estados de operaciones y actualizar status de recarga.

## Requisitos
- PHP 8.2 o superior  
- Composer  
- MySQL  
- Servidor con soporte para Laravel

## Instalación
1. Clonar el repositorio  
   `git clone https://github.com/EdgarIsmael435/apisRedCom.git`
2. Instalar dependencias  
   `composer install`
3. Copiar el archivo `.env.example` a `.env` y configurar credenciales
4. Generar la clave de aplicación  
   `php artisan key:generate`
5. Ejecutar el servidor local  
   `php artisan serve`

## Notas
- No ejecutar migraciones; la API usa la base existente de RED.  
- No subir el archivo `.env` al repositorio.  
- Revisa `routes/api.php` para ver los endpoints disponibles.
