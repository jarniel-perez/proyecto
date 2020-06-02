<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
      'nombres' => $faker->streetName,
      'direccion' => $faker->streetAddress,
      'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
      'email' => $faker->unique()->safeEmail,
      'especial' => $faker->randomDigit,
      'clientescol' => $faker->text($maxNbChars = 30),
    ];
});