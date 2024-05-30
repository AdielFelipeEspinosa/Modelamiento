## COMANDOS
composer install
npm install

Al importar migraciones eliminar "namespace Database\Migrations;"
Para traducir mensajes de error hay que buscar el archivo "validation.php"

php artisan make:model User -mcr //Crea Modelo Migracion y Controlador
php artisan make:controller User -r //Crea controlador para una crud