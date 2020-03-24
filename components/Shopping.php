<?php namespace LuisMayta\Intranet\Components;

use Cms\Classes\ComponentBase;

class Shopping extends ComponentBase
{
    public function componentDetails()
    {
        return[
            'name' => 'luismayta.intranet::lang.shopping.de_name',
            'description' => 'luismayta.intranet::lang.shopping.de_desc'
        ];
    }
    public function onRun()
    {
        $this->actor = $this->myfuncion();
    }
    public function myfuncion()
    {
        return 'hola mundo';
    }

}
