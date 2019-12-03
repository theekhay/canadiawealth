<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {

    $isCheckedout = random_int(0, 4) == 4 ? true : false;

    return [

        'user_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'total_price' => $faker->randomFloat(2, 1000, 100000),
        'checkout_date' => $faker->date('Y-m-d H:i:s'),
        'uuid' => $faker->uuid,
        'cart_id' => $faker->uuid,
        'order_ref' => $faker->uuid,
        'payment_method' => 'cash',
        'delivery_method' => 'home'
    ];
});
