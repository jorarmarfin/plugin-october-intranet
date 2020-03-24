<?php namespace LuisMayta\Intranet\Models;

use Model;

/**
 * Model
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'luismayta_intranet_banner';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /*Relations*/
    public $attachOne = [
        'fondo'=> 'System\Models\File'    
    ];
    /*Scope*/
    public function scopePrincipal($query)
    {
        return $query->where('activo', 1)->take(1);
    }
    
}
