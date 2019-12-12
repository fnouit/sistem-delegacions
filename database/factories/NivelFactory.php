<?php

use Faker\Generator as Faker;

$factory->define(App\Nivel::class, function (Faker $faker) {
    return [
        'nivel_educativo' => $faker->name,
    ];
});