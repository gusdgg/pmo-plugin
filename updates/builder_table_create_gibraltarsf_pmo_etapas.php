<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoEtapas extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_etapas', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('nombre')->nullable();
        $table->integer('idea_id')->nullable();
        $table->date('inicio')->nullable();
        $table->date('fin')->nullable();
        $table->date('inicio_real')->nullable();
        $table->date('fin_real')->nullable();
        $table->decimal('participacion', 14, 2)->nullable();
        $table->string('observaciones')->nullable();
        $table->string('hito')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        
        $table->index('idea_id');
        $table->index('inicio');
        $table->index('inicio_real');
        $table->index('fin');
        $table->index('fin_real');
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_etapas');
}
}