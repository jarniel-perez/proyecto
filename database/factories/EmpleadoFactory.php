<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
      'cedula' => $faker->randomNumber($nbDigits = NULL, $strict = false),
      'nombre' => $faker->streetName,
      'apellido' => $faker->lastName,
      'direccion' => $faker->streetAddress,
      'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
      'email' => $faker->unique()->safeEmail,
    ];
});