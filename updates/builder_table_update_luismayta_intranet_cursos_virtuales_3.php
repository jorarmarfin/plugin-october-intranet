<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetCursosVirtuales3 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->text('resumen')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->string('resumen', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
