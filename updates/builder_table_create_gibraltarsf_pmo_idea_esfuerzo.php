<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoIdeaEsfuerzo extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_idea_esfuerzo', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('idea_id')->nullable();
        $table->integer('esfcriteria_id')->nullable();
        $table->integer('score_id')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_idea_esfuerzo');
}
}