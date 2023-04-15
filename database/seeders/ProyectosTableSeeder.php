<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyecto;
use Faker\Factory as Faker;


class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
       
    // }
    public function run()
    {
        // Crear una instancia de Faker para generar datos aleatorios
        $faker = Faker::create();

        // Crear registros de ejemplo en la tabla proyectos
        for ($i = 1; $i <= 10; $i++) {
            Proyecto::create([
                'proyectos' => 'Proyecto ' . $i,
                'municipio_id' => $faker->numberBetween(1, 10),
                'costoProyecto' => $faker->randomFloat(2, 1000, 10000),
                'estado_id' => $faker->numberBetween(0, 4),
                'cliente' => $faker->name,
                'supervisor' => $faker->name,
                'telefono' => $faker->phoneNumber,
                'correo' => $faker->email,
                'descripcion' => $faker->text,
                'estado_gestion_id' => $faker->numberBetween(0, 3),
                'objeto' => $faker->text,
                'alcance' => $faker->text,
                'anio' => $faker->year,
                'responsable' => $faker->name,
                'centro_costos' => $faker->word,
                'orden_interna' => $faker->randomFloat(2, 1, 100),
                'cod_inva' => $faker->randomFloat(2, 1, 100),
                'grupo_proyecto_id' => $faker->numberBetween(0, 3),
                'tipo_proyecto_id' => $faker->numberBetween(0, 3),
            ]);
        }
    }
}
