<?php

namespace App\Repositories;

use App\Models\Citas;
use App\Repositories\BaseRepository;

/**
 * Class CitasRepository
 * @package App\Repositories
 * @version September 30, 2021, 12:38 am UTC
*/

class CitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'd_paciente',
        'fecha_cita',
        'id_doctor'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Citas::class;
    }
}
