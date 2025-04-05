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
            ['name' => 'Almacenes', 'short' => 'AL', 'color' => 'blue', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Comercio Exterior', 'short' => 'Comex', 'color' => 'green', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Gestion modelo logístico', 'short' => 'GML', 'color' => 'yellow', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Inspección no destructiva', 'short' => 'IND', 'color' => 'red', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Inspección & Activación', 'short' => 'I&A', 'color' => 'purple', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Otros pilares', 'short' => 'Otros', 'color' => 'gray', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Planificación', 'short' => 'PL', 'color' => 'orange', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Transporte', 'short' => 'TR', 'color' => 'brown', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Transporte/Almacén', 'short' => 'TR/AL', 'color' => 'brown', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Transporte/Comercio Exterior', 'short' => 'TR/COMEX', 'color' => 'brown', 'created_at' => $time, 'updated_at' => $time],
        
            );
        Pilar::insert($pilares);

    }
}

