<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'uuid' => $faker->uuid,
        'amount' => $faker->randomFloat(2, 1000, 100000),
        'vendorId' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'category' => $faker->word,
        'description' => $faker->sentence(10),
        'image'  => $faker->imageUrl(),
        'measurement_unit' => "kg"
    ];
});
