<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoPersons extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_persons', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('user_id')->nullable();
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->integer('inmediato_id')->nullable();
        $table->integer('supervisor_id')->nullable();
        $table->integer('gerente_id')->nullable();
        $table->integer('pilar_id')->nullable();
        $table->integer('role_id')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        
        $table->index('user_id');
        $table->index('inmediato_id');
        $table->index('gerente_id');
        $table->index('pilar_id');
        $table->index('role_id');
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_persons');
}
}