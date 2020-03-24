<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetBanner extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('frase');
            $table->boolean('activo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_banner');
    }
}
