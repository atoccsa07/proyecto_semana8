<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version September 30, 2021, 12:35 am UTC
 *
 * @property string $ape_nom
 * @property integer $dni
 * @property integer $celular
 */
class Paciente extends Model
{
    //use SoftDeletes;

    public $table = 'paciente';
    protected $primaryKey = 'id_paciente';
    public $timestamps = false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'dni',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_paciente' => 'integer',
        'ape_nom' => 'string',
        'dni' => 'integer',
        'celular' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:70',
        'dni' => 'nullable|integer',
        'celular' => 'nullable|integer'
    ];

    
}
