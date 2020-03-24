<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetCursosVirtuales extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->decimal('precio', 10, 0);
            $table->increments('id')->unsigned(false)->change();
            $table->string('nombre')->change();
            $table->string('resumen')->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->dropColumn('precio');
            $table->increments('id')->unsigned()->change();
            $table->string('nombre', 191)->change();
            $table->string('resumen', 191)->change();
        });
    }
}
