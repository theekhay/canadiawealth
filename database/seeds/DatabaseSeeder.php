<?php

use App\Models\Payment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            ProductTableSeeder::class,
            ProductCategoryTableSeeder::class,
            OrderTableSeeder::class,
            PaymentTableSeeder::class

        ]);
    }
}
