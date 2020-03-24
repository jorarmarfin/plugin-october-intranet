<?php namespace LuisMayta\Intranet\Models;

use Model;

/**
 * Model
 */
class CursosVirtuales extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $jsonable = ['audios'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'luismayta_intranet_cursos_virtuales';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /*Relations*/
    public $attachOne = [
        'imagen'=> 'System\Models\File'    
    ];
    /*Scopes*/
    public function scopeOcultar($query)
    {
        return $query->where('ocultar', 0);
    }
    
    
    
}
