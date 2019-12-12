<?php

use Faker\Generator as Faker;

$factory->define(App\Nomenclatura::class, function (Faker $faker) {
    return [
        'nomenclatura' => $faker->name,
    ];
});
