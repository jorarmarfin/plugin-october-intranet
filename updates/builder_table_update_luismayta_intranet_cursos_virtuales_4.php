<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetCursosVirtuales4 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
