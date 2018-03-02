<?php

use Faker\Generator as Faker;

$factory->define(Appdominio\Domain::class, function (Faker $faker) {
    return [
        'client_id'   => rand(1,30),       
        'provider_id' => rand(1,10),
        'account_id'  => rand(1,5),
        'nombre'      => $faker->sentence(2),
        'registro'    => $faker->date(),
        'vence'       => $faker->date(),
        'observacion' => $faker->text(80),
        'estado'      => $faker->randomElement(['ACTIVO', 'INACTIVO']),
			
    ];
});
