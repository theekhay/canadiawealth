<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('firstname');
            $table->string('lastname');$table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            //$table->string('username')->unique()->nullable();

            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();

            $table->uuid('uuid');

            $table->string('telephone')->nullable();
            $table->integer('level');

            $table->softDeletes();
            $table->integer('deleted_by')->nullable();

            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }


}
