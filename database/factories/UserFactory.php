<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

const ALLOWED_LEVELS = [111, 222, 333];

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        //'username' => $faker->lastName,

        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),

        'address' => $faker->address,
        'country' => $faker->address,
        'state' => $faker->state,
        'city' => $faker->city,
        'postal_code' => $faker->postcode,
        'telephone' => $faker->e164PhoneNumber,

        'uuid' =>  $faker->uuid,

        'level' => ALLOWED_LEVELS[random_int(0, count(ALLOWED_LEVELS) - 1)],
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
