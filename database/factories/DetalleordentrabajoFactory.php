<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Detalleordentrabajo;
use App\Servicio;
use App\Empleado;
use App\Ordentrabajo;
use Faker\Generator as Faker;

$factory->define(Detalleordentrabajo::class, function (Faker $faker) {
    return [
      'cantidad' => $faker->numberBetween($min = 1, $max = 30),
      'estado' => $faker->numberBetween($min = 1, $max = 30),
      'servicio_id'=>function(){
            return factory(Servicio::class)->create()->id;
          },
      'empleado_id'=>function(){
            return factory(Empleado::class)->create()->id;
          },
      'orden_trabajo_id'=>function(){
            return factory(Ordentrabajo::class)->create()->id;
          }
    ];
});