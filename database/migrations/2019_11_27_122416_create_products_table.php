<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');

            $table->string("name")->unique();
            $table->string("code")->unique()->nullable();
            $table->uuid("uuid")->unique();
            $table->decimal('price', 10, 2);
            //$table->integer("vendorId");
            $table->string('description')->nullable();
            $table->string('category')->nullable();

            $table->string('image')->nullable();
            $table->string('measurement_unit')->nullable();
            $table->float('weight')->nullable();

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
        Schema::drop('products');
    }
}
