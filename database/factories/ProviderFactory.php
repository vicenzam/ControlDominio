<?php

use Faker\Generator as Faker;

$factory->define(Appdominio\Provider::class, function (Faker $faker) {
    return [
        'nombre'  => $faker->sentence(2),
		'website' => $faker->text(30),	
    ];
});
