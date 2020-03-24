<?php namespace LuisMayta\Intranet\Components;

use Cms\Classes\ComponentBase;

class Contactame extends ComponentBase
{
    public function componentDetails()
    {
        return[
            'name' => 'contactame',
            'description' => 'Formulario de contacto'
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