<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Client;
use Faker\Generator as Faker;
use Faker\Provider\pt_BR\PhoneNumber;



$factory->define(Client::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'birth' => $faker->date('Y-m-d','2000-01-01'),
        'phone' =>  "(" . PhoneNumber::areaCode() . ") " . PhoneNumber::phone()
    ];
});
