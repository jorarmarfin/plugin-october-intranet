<?php namespace LuisMayta\Intranet;

use RainLab\User\Models\User;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails() {
        return [
            'name'        => 'luismayta.intranet::lang.plugin.name',
            'description' => 'luismayta.intranet::lang.plugin.description',
            'author'      => 'Luis Mayta',
            'icon'        => 'oc-icon-book',
            'homepage'    => 'https://github.com/skydiver/'
        ];
    }
    public function registerComponents()
    {
        return[
            'LuisMayta\Intranet\Components\Contactame' => 'Contactame',
            'LuisMayta\Intranet\Components\Shopping' => 'Shopping',
            'LuisMayta\Intranet\Components\PermissionsCourse' => 'PermissionsCourse',
        ];
    }

    public function registerSettings()
    {
    }
    public function registerListColumnTypes()
    {

        return [
            'nombre_completo' => [$this, 'NombreCompleto'],
        ];
    }
    public function NombreCompleto($value, $column, $record)
    {
        $user = User::find($record->user_id);
        $nombre_completo = $user->name.', '.$user->surname;
        return $nombre_completo;
    }
}
