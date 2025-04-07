<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoCriteriaScore extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_criteria_score', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('criteria_type')->nullable();
        $table->integer('valcriteria_id')->nullable();
        $table->integer('riscriteria_id')->nullable();
        $table->integer('score_id')->nullable();
        $table->string('tooltip')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        
        $table->index('criteria_type');
        $table->index('valcriteria_id');
        $table->index('riscriteria_id');
        $table->index('score_id');
});
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_criteria_score');
}
}