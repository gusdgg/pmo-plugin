<?php namespace Gibraltarsf\Pmo\Updates;

use Winter\Storm\Database\Updates\Seeder;
use Gibraltarsf\Pmo\Models\Role;
use Carbon\Carbon;

class Seeder103 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $roles = array(

            ['name' => 'Analista funcional', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Analista performance', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Analista procesos', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Arquitecto de la solución', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Calidad', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Desarrollador', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Finanzas', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Ingeniería', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Lider operativo', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Mejora de procesos', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Project Manager', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Sponsor', 'created_at' => $time, 'updated_at' => $time],
            );
        Role::insert($roles);

    }
}