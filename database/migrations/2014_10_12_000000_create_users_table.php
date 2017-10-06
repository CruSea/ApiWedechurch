<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{



public function boot()
{
    Schema::defaultStringLength(191);
}

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->boot();
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country')->nullable();
            $table->string('sex')->nullable();
            $table->string('phone')->nullable();
            $table->integer('church_id')->index()->nullable();
          //  $table->foreign('church_id')->references('id')->on('churches');
            $table->integer('role_id')->index()->nullable();
           // $table->foreign('role_id')->references('id')->on('role');
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
