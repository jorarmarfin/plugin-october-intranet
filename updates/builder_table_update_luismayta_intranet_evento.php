<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetEvento extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_evento', function($table)
        {
            $table->boolean('destacar');
            $table->string('slug');
            $table->increments('id')->unsigned(false)->change();
            $table->string('titulo')->change();
            $table->string('resumen')->change();
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_evento', function($table)
        {
            $table->dropColumn('destacar');
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
            $table->string('titulo', 191)->change();
            $table->string('resumen', 191)->change();
        });
    }
}
