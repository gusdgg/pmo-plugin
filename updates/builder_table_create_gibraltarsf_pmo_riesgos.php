<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoRiesgos extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_riesgos', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->integer('risktype_id')->nullable();
        $table->string('status')->nullable();
        $table->string('description')->nullable();
        $table->string('response_plan')->nullable();
        $table->string('notes')->nullable();
        $table->string('response', 60)->nullable();
        $table->integer('owner_id')->nullable();
        $table->string('priority', 60)->nullable();
        $table->string('severity', 60)->nullable();
        $table->string('likelihood', 60)->nullable();
        $table->string('riskable_type')->nullable();
        $table->integer('riskable_id')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        
        $table->index('name');
        $table->index('risktype_id');
        $table->index('status');
        $table->index('response');
        $table->index('owner_id');
        $table->index('priority');
        $table->index('severity');
        $table->index('likelihood');
        $table->index('riskable_type');
        $table->index('riskable_id');
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_riesgos');
}
}