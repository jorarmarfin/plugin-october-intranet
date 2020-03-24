<?php namespace LuisMayta\Intranet\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Descargas extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LuisMayta.Intranet', 'main-menu-item', 'side-menu-item6');
    }
}
