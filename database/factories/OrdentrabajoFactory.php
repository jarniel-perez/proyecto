<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Ordentrabajo;
use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Ordentrabajo::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'detalle' => $faker->text($maxNbChars = 30),
      'fecha_entrada' => $faker->dateTime($max = 'now', $timezone = null),
      'fecha_salida' => $faker->dateTime($max = 'now', $timezone = null),
      'cliente_id'=>function(){
            return factory(Cliente::class)->create()->id;
          }
    ];
});

