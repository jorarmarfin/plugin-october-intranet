<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetCursosVirtuales2 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->text('descripcion')->nullable()->change();
            $table->string('resumen', 191)->nullable()->change();
            $table->decimal('precio', 10, 0)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_cursos_virtuales', function($table)
        {
            $table->text('descripcion')->nullable(false)->change();
            $table->string('resumen', 191)->nullable(false)->change();
            $table->decimal('precio', 10, 0)->nullable(false)->change();
        });
    }
}
