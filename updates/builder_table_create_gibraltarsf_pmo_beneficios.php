<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoBeneficios extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_beneficios', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        
        $table->index('name');
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_beneficios');
}
}
