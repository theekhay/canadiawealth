<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {

    $amoutPaid = $faker->randomFloat(2, 1000, 10000);
    return [

        'customer_id' => $faker->randomDigitNotNull,
        //'vendor_id' => $faker->randomDigitNotNull,
        'expected_payment' => $amoutPaid,
        'amount_paid' => $amoutPaid,
        'payment_method' => "credit_card",
        'discount' => $faker->randomFloat(2, 1000, 100000),
        'order_id' => $faker->randomDigitNotNull,
        'reversed' => false,
        'uuid' => $faker->uuid,

        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
