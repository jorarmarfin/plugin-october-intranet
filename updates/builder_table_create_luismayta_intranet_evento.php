<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetEvento extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_evento', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
            $table->string('resumen');
            $table->text('descripcion');
            $table->dateTime('fechainicio');
            $table->dateTime('fechafin');
            $table->text('ubicacion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_evento');
    }
}
