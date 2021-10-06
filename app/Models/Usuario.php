<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version September 30, 2021, 12:29 am UTC
 *
 * @property string $ape_nom
 * @property string $usuario
 * @property integer $password
 */
class Usuario extends Model
{
    //use SoftDeletes;

    public $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_usuario' => 'integer',
        'ape_nom' => 'string',
        'usuario' => 'string',
        'password' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:60',
        'usuario' => 'nullable|string|max:60',
        'password' => 'nullable|integer'
    ];

    
}
