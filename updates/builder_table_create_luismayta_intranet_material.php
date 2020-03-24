<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetMaterial extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_material', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
            $table->string('precio');
            $table->bigInteger('year');
            $table->string('categoria');
            $table->string('tipo');
            $table->string('resumen');
            $table->text('descripcion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_material');
    }
}
