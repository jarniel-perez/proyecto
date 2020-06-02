<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Servicioclienteespecial;
use App\Servicio;
use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Servicioclienteespecial::class, function (Faker $faker) {
    return [
        'precio' => $faker->numberBetween($min = 1000, $max = 9000),
        'servicio_id'=>function(){
              return factory(Servicio::class)->create()->id;
            },
        'cliente_id'=>function(){
              return factory(Cliente::class)->create()->id;
            }
    ];
});