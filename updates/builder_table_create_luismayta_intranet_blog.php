<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetBlog extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_blog', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
            $table->string('resumen');
            $table->text('descripcion');
            $table->boolean('archivar');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_blog');
    }
}
