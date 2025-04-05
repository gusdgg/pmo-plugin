<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Nivel;
use Carbon\Carbon;

class Seeder1013 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $niveles = array(
            ['name' => 'Compañía', 'created_at' => $time, 'updated_at' => $time],   
            ['name' => 'Gerencia L&A', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Negocio', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Pilar', 'created_at' => $time, 'updated_at' => $time],
            );
        Nivel::insert($niveles);

    }
}