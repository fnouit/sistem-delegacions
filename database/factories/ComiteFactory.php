<?php

use Faker\Generator as Faker;

$factory->define(App\Comite::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
    ];
});
