<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoNovedades extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_novedades', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('idea_id')->nullable()->unsigned();
        $table->integer('etapa_id')->nullable()->unsigned();
        $table->text('novedades',1024)->nullable();
        $table->text('proximos_pasos',1024)->nullable();
        $table->text('logros',1024)->nullable();
        $table->date('fecha')->nullable();
        $table->string('status')->nullable();
        $table->decimal('avance', 12, 2)->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        
        $table->index('idea_id');
        $table->index('etapa_id');
        $table->index('fecha');
        $table->index('status');
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_novedades');
}
}