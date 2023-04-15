<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadosGestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_gestion')->insert([
            ['id' => 0, 'nombreEstadoGestion' => 'PLANIFICADO'],
            ['id' => 1, 'nombreEstadoGestion' => 'DISEÑO Y DESARROLLO'],
            ['id' => 2, 'nombreEstadoGestion' => 'CONSTRRUCCION'],
            ['id' => 3, 'nombreEstadoGestion' => 'PRUEBAS Y PUESTA EN SERVICIO'],
            ['id' => 4, 'nombreEstadoGestion' => 'CIERRE'],
            
        ]);
    }
}
