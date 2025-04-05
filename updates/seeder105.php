<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Pilar;
use Carbon\Carbon;

class Seeder105 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $pilares = array(
            ['name' => 'Almacenes', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Comercio Exterior', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Gestion modelo logístico', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Inspección no destructiva', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Inspección & Activación', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Otros pilares', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Planificación', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Transporte', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Transporte/Almacén', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Transporte/Comercio Exterior', 'created_at' => $time, 'updated_at' => $time],
        
            );
        Pilar::insert($pilares);

    }
}

