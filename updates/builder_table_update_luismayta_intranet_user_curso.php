<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetUserCurso extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_user_curso', function($table)
        {
            $table->integer('user_id')->nullable()->change();
            $table->integer('curso_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_user_curso', function($table)
        {
            $table->integer('user_id')->nullable(false)->change();
            $table->integer('curso_id')->nullable(false)->change();
        });
    }
}
