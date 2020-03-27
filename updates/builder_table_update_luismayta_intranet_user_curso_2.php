<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetUserCurso2 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_user_curso', function($table)
        {
            $table->integer('user_id')->default(null)->change();
            $table->integer('curso_id')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_user_curso', function($table)
        {
            $table->integer('user_id')->default(NULL)->change();
            $table->integer('curso_id')->default(NULL)->change();
        });
    }
}
