<?php namespace LuisMayta\Intranet\Models;

use Model;

/**
 * Model
 */
class Material extends Model
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
    public $table = 'luismayta_intranet_material';

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
    public function scopeDestacado($query)
    {
        return $query->where('destacar', 1)->take(1);
    }
    public function scopeMateriales($query)
    {
        return $query->where('destacar', 0);
    }
    public function scopeTopCuatro($query)
    {
        return $query->take(4);
    }
}
