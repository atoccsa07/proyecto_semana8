<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Citas;
use Faker\Generator as Faker;

$factory->define(Citas::class, function (Faker $faker) {

    return [
        'd_paciente' => $faker->randomDigitNotNull,
        'fecha_cita' => $faker->word,
        'id_doctor' => $faker->randomDigitNotNull
    ];
});
