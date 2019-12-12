<?php

use Faker\Generator as Faker;

$factory->define(App\Secretaria::class, function (Faker $faker) {
    return [
        'cartera' => $faker->name,
        'comite_id' => $faker->buildingNumber,
    ];
});
