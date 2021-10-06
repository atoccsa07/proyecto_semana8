<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citas
 * @package App\Models
 * @version September 30, 2021, 12:38 am UTC
 *
 * @property integer $d_paciente
 * @property string $fecha_cita
 * @property integer $id_doctor
 */
class Citas extends Model
{
    //use SoftDeletes;

    public $table = 'citas';
    protected $primaryKey = 'id_cita';
    public $timestamps = false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'd_paciente',
        'fecha_cita',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cita' => 'integer',
        'd_paciente' => 'integer',
        'fecha_cita' => 'string',
        'id_doctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'd_paciente' => 'nullable|integer',
        'fecha_cita' => 'nullable|string|max:50',
        'id_doctor' => 'nullable|integer'
    ];

    
}
