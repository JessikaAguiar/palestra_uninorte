<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Livros;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Livros::class, function (Faker $faker) {
    return [
        'data_aquisicao' => $faker->date(),
        'edicao' => $faker->numberBetween(1, 10),
        'obra_id' => $faker->numberBetween(1, 15),
        'editora_id' => $faker->numberBetween(1, 15),
    ];
});
