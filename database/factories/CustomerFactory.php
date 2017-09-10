<?php

use Faker\Generator as Faker;

$factory->define(Charlie\Customer::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'birthdate' => $faker->datetime(),
        'special_customer' => $faker->boolean,
    ];
});
