<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Servicio;
use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Servicio::class, function (Faker $faker) {
    return [
      'nombre' => $faker->word,
      'precio' => $faker->numberBetween($min = 1000, $max = 9000),
      'descripcion' => $faker->text($maxNbChars = 30),
      'categoria_id'=>function(){
            return factory(Categoria::class)->create()->id;
          }
    ];
});