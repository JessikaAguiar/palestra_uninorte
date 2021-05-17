<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autorias;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Autorias::class, function (Faker $faker) {
    return [
        'obra_id' => $faker->numberBetween(1, 15),
        'autor_id' => $faker->numberBetween(1, 20),
    ];
});
