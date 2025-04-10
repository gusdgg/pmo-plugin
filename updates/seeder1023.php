<?php namespace Gibraltarsf\Pmo\Updates;

use Winter\Storm\Database\Updates\Seeder;
use Gibraltarsf\Pmo\Models\Riscriteria;
use Carbon\Carbon;

class Seeder1023 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $risccriterias = array(
            ['name' => 'Complejidad', 'weight' => 30, 'created_at' => $time, 'updated_at' => $time],   
            ['name' => 'Recursos', 'weight' => 20, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'A nivel organizacional', 'weight' => 20, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Regulatorio', 'weight' => 15, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Dependencias', 'weight' => 15, 'created_at' => $time, 'updated_at' => $time],
            );
        Riscriteria::insert($risccriterias);

    }
}