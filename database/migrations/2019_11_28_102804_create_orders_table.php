<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cart_id');
            $table->integer('user_id');

            $table->decimal('total_price', 10, 2);
            $table->string("shipping_address")->nullable();
            $table->string("payment_method")->nullable();
            $table->string("order_reference")->nullable();
            $table->string("delivery_method")->nullable();

            $table->timestamp('checkout_date');
            $table->uuid('uuid')->unique();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
