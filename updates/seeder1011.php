<?php namespace Gibraltarsf\Pmo\Updates;

use Seeder;
use Gibraltarsf\Pmo\Models\Negativo;
use Carbon\Carbon;

class Seeder1011 extends Seeder
{
    public function run()
    {
        $time = Carbon::now();
        $negativos = array(
            ['name' => 'Aumento de riesgo operativo o seguridad', 'created_at' => $time, 'updated_at' => $time],   
            ['name' => 'Ausencia de información / Indicadores de Gestión (KPIs)', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Pérdidas económicas', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Debilidades de control interno', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Duplicación de tareas', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Errores / Ineficiencias administrativas- operativas', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Incumplimiento normativo', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Insatisfacción de clientes internos', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Otros', 'created_at' => $time, 'updated_at' => $time],

            );
        Negativo::insert($negativos);

    }
}