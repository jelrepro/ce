#!/bin/bash

php artisan db:seed --class=EstadoTableSeeder
php artisan db:seed --class=DepartamentosTableSeeder
php artisan db:seed --class=MunicipiosTableSeeder
php artisan db:seed --class=EstadoTableSeeder
php artisan db:seed --class=EstadosGestionTableSeeder
php artisan db:seed --class=EstadosAdminTableSeeder
# php artisan db:seed --class=ConveniosTableSeeder
# php artisan db:seed --class=ProyectosTableSeeder

