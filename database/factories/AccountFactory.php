<?php

use Faker\Generator as Faker;

$factory->define(Appdominio\Account::class, function (Faker $faker) {
    return [
        'nombre'  => $faker->sentence(2),
		'email' => $faker->text(30),
    ];
});
