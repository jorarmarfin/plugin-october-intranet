<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaIntranetUserCurso extends Migration
{
    public function up()
    {
        Schema::create('luismayta_intranet_user_curso', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('curso_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_intranet_user_curso');
    }
}
