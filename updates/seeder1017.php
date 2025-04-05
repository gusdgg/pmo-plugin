<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Risktype;
use Carbon\Carbon;

class Seeder1017 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $risktypes = array(
            ['name' => 'Agenda', 'created_at' => $time, 'updated_at' => $time],   
            ['name' => 'Alcance', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Calidad', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Presupuesto', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Recursos', 'created_at' => $time, 'updated_at' => $time],
            );
        Risktype::insert($risktypes);

    }
}