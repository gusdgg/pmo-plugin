<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Beneficio;
use Carbon\Carbon;

class Seeder109 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $beneficios = array(
            ['name' => 'Ahorros/beneficios económicos', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Automatización de procesos', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Implementación de sistemas', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Mejoras de procesos', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Productividad', 'created_at' => $time, 'updated_at' => $time],

            );
        Beneficio::insert($beneficios);

    }
}

