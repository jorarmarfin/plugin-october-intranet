<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetCursosVirtuales extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('resumen');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_cursos_virtuales');
    }
}
