<?php

use Faker\Generator as Faker;

$factory->define(Appdominio\Client::class, function (Faker $faker) {
    return [
		'nombre'   => $faker->sentence(2),
		'ruc'      => $faker->text(10),
		'email'    => $faker->text(30),
		'telefono' => $faker->text(10),	   
    ];
});
