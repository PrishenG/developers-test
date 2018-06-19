<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    
    return [
        'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'logo' => $faker->image('public/storage/logos', 400, 300, null, false),
        'website' => $faker->url,
    ];
});

