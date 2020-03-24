<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetCursosVirtuales6 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->boolean('ocultar');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->dropColumn('ocultar');
        });
    }
}
