<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'|'female'),
        'email' => $faker->email,
        'uni_id' => rand(pow(10, 5-1), pow(10, 5)-1),
        'country' => $faker->country,
        'university' => $faker->company,
        'city' => $faker->city
    ];
});
