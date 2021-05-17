<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autores;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Autores::class, function (Faker $faker) {
    return [
        'nome' => $faker->name
    ];
});
