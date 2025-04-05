<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoIdeas extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_ideas', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->string('code',60)->nullable();
        $table->string('status',60)->nullable();
        $table->string('calification',60)->nullable();
        $table->integer('requestor_id')->nullable();
        $table->integer('pilar_id')->nullable();
        $table->integer('supervisor_id')->nullable();
        $table->text('situacion')->nullable();
        $table->text('mejoras')->nullable();
        $table->text('objetivo')->nullable();
        $table->text('alcance')->nullable();
        $table->integer('created_by')->nullable();
        $table->integer('pm_id')->nullable();
        $table->integer('sponsor_id')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();

        $table->index('status');
        $table->index('code');
        $table->index('requestor_id');
        $table->index('pilar_id');
        $table->index('supervisor_id');
        $table->index('created_by');
        $table->index('pm_id');
        $table->index('sponsor_id');
        $table->index('calification');
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_ideas');
}
}