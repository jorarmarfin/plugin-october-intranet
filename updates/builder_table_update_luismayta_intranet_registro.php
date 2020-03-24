<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetRegistro extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_registro', function($table)
        {
            $table->string('evento');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_registro', function($table)
        {
            $table->dropColumn('evento');
        });
    }
}
