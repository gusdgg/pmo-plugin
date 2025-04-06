<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Valcriteria;
use Carbon\Carbon;

class Seeder1021 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $valcriterias = array(
            ['name' => 'Alineado a objetivos Compañía', 'weight' => 25, 'created_at' => $time, 'updated_at' => $time],   
            ['name' => 'Alineado a objetivos VP', 'weight' => 20, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Alineado a objetivos de la Gerencia', 'weight' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Alineado a objetivos generales', 'weight' => 10, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Mejora la experiencia del cliente', 'weight' => 8, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Mejora la calidad', 'weight' => 7, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'VAN', 'weight' => 10, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'ROI', 'weight' => 5, 'created_at' => $time, 'updated_at' => $time],
            );
        Valcriteria::insert($valcriterias);

    }
}