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
            $table->string('name','191')->unique();
            $table->string('email','191')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address', '250')->nullable();
            $table->string('website', '250')->nullable();
            $table->string('display_name', '250')->nullable();
            $table->enum('status', ['pending', 'publish', 'confirm', 'cancel', 'block'])->default('pending');
            $table->enum('state', ['0', '1'])->default('1');
            $table->integer('role')->default('2');
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
