<?php namespace Gibraltarsf\Pmo\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGibraltarsfPmoEsfcriterias extends Migration
{
    public function up()
{
    Schema::create('gibraltarsf_pmo_esfcriterias', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->string('help')->nullable();
        $table->decimal('weight', 10, 2)->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('gibraltarsf_pmo_esfcriterias');
}
}