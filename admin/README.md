## DSHOP ADMIN

php artisan make:model Flight --migration
php artisan make:controller UserController
php artisan migrate:refresh --path=/database/migrations/2023_11_30_213424_create_email_templates_table.php