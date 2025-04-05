<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Score;
use Carbon\Carbon;

class Seeder1015 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $scores = array(
            ['name' => 'Ninguno', 'value' => 0, 'created_at' => $time, 'updated_at' => $time],   
            ['name' => 'Bajo', 'value' => 1, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Medio', 'value' => 2, 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Alto', 'value' => 4, 'created_at' => $time, 'updated_at' => $time],
            );
        Score::insert($scores);

    }
}