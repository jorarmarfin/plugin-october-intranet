<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetDescargas extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_descargas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_descargas');
    }
}
