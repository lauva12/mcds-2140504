<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('fullname');
            $table->integer('phone');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('address');
            $table->string('photo')->default('imgs/no-photo.png');
            $table->biginteger('email')->unique();
            $table->string('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('Customer');
            $table->boolean('active')->default(1);
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