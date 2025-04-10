<?php namespace Gibraltarsf\Pmo\Updates;

use Winter\Storm\Database\Updates\Seeder;
use Gibraltarsf\Pmo\Models\Pilar;
use Carbon\Carbon;

class Seeder105 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $pilares = array(
            ['name' => 'Almacenes', 'short' => 'AL', 'color' => 'blue', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Calidad, medioambiente y seguridad', 'short' => 'CMS', 'color' => 'green', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Comercio Exterior', 'short' => 'Comex', 'color' => 'green', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Compras y contratos', 'short' => 'CC', 'color' => 'green', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Gestion modelo suppy Chain', 'short' => 'GMSC', 'color' => 'yellow', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Gestion modelo logístico', 'short' => 'GML', 'color' => 'yellow', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Inspección no destructiva', 'short' => 'IND', 'color' => 'red', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Inspección & Activación', 'short' => 'I&A', 'color' => 'purple', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Otros pilares', 'short' => 'Otros', 'color' => 'gray', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Planificación y abastecimiento', 'short' => 'PL', 'color' => 'orange', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Planificación y gestión técnica', 'short' => 'PLGT', 'color' => 'orange', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Presupuesto y control', 'short' => 'PC', 'color' => 'orange', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Productos digitales', 'short' => 'PC', 'color' => 'orange', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Soluciones digitales', 'short' => 'SC', 'color' => 'orange', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Transporte', 'short' => 'TR', 'color' => 'brown', 'created_at' => $time, 'updated_at' => $time],
        
            );
        Pilar::insert($pilares);

    }
}