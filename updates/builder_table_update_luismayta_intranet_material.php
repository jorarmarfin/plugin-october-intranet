<?php namespace LuisMayta\Intranet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaIntranetMaterial extends Migration
{
    public function up()
    {
        Schema::table('luismayta_intranet_material', function($table)
        {
            $table->binary('destacar');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_intranet_material', function($table)
        {
            $table->dropColumn('destacar');
        });
    }
}
