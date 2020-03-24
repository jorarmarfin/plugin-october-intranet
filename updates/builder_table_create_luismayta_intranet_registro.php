<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetRegistro extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_registro', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->string('distrito');
            $table->text('mensaje');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_registro');
    }
}
