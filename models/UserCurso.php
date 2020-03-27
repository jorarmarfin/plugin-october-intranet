<?php namespace LuisMayta\Intranet\Models;

use Model;

/**
 * Model
 */
class UserCurso extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    protected $guarded = [];
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'luismayta_intranet_user_curso';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /**
     * Relations inverse One To Many
     */
    public $belongsTo = [
        'user' => 'Rainlab\User\Models\User',
        'curso' => 'LuisMayta\Intranet\Models\CursosVirtuales'
    ];

    /**
    * Scope a query to only include popular users.
    */
    public function scopeCompras($query,$user_id,$curso_id){
         return $query->where('curso_id',$curso_id)->where('user_id',$user_id);
    }
}
