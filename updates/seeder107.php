<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Mejora;
use Carbon\Carbon;

class Seeder107 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $mejoras = array(
            ['name' => 'Implementar nuevas herramientas y/o aplicaciones', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Mejoras / Actualización de sistemas y/o aplicaciones GML', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Modificaciones / Mejoras / Desarrollos de Procesos', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Integración - Eficiencia y Productividad de Supply Chain', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Obras / Adecuaciones', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Performance y Automatización de procesos manuales / tableros de gestión', 'created_at' => $time, 'updated_at' => $time],

            );
        Mejora::insert($mejoras);

    }
}
