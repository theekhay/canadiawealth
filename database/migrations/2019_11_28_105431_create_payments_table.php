<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('customer_id');
            $table->integer('vendor_id');
            $table->uuid('uuid')->unique();
            $table->decimal('expected_payment');
            $table->decimal('amount_paid');
            $table->string('payment_method')->default("creedit_card");
            $table->decimal('discount')->default(0.00);
            $table->integer('cart_id');
            $table->boolean('reversed')->default(false);

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
        Schema::drop('payments');
    }
}
