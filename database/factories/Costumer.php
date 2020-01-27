<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Costumer;
use Faker\Generator as Faker;

$factory->define(Costumer::class, function (Faker $faker) {
    return [
        'code_costumer'=> $faker -> unique() -> randomNumber,
        'nama'=> $faker -> name,
        'email'=> $faker -> email,
        'contry'=> $faker -> country,
        'city'=> $faker -> city,
        'address'=> $faker -> address,
        'Contact_Number'=> $faker -> phoneNumber,
    ];
});
