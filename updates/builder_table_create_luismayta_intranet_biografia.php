<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetBiografia extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_biografia', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_biografia');
    }
}
