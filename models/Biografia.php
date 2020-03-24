<?php namespace LuisMayta\Intranet\Models;

use Model;

/**
 * Model
 */
class Biografia extends Model
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
    public $table = 'luismayta_intranet_biografia';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
        'imagen'=> 'System\Models\File'    
    ];
}
