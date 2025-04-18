<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoPilares extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_pilares', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->string('short')->nullable();
        $table->string('color')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        
        $table->index('name');
        $table->index('short');
        
    });
    
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_pilares');
}
}