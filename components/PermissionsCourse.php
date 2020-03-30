<?php namespace LuisMayta\Intranet\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Redirect;
use LuisMayta\Intranet\Models\UserCurso;
use LuisMayta\Intranet\Models\CursosVirtuales;

class PermissionsCourse extends ComponentBase
{
    public function componentDetails()
    {
        return[
            'name' => 'luismayta.intranet::lang.permissions_course.de_name',
            'description' => 'luismayta.intranet::lang.permissions_course.de_desc'
        ];
    }
    public function onRun()
    {
        $loggedIn = Auth::check();
        $slug = $this->param('slug');
        $curso = CursosVirtuales::where('slug',$slug)->first();
        $this->page['mostrar_audios'] = false;
        if ($curso->precio>0) {
            if (!$loggedIn) {
                return Redirect::to('/login');
            }else{
                $user = Auth::getUser();
                $curso_comprado = UserCurso::Compras($user->id,$curso->id)->first();
                if (isset($curso_comprado)) $this->page['mostrar_audios'] = true;
            }
        }
    }

}
