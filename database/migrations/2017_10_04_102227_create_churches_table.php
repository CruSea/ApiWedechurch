<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('country');
            $table->string('state');
            $table->string('location');
            $table->string('phone');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('banner');
            $table->string('logo');
            $table->string('weburl');
            $table->integer('parent_church_id')->index()->nullable();
            //$table->foreign('parent_church_id')->references('id')->on('churches');
            $table->integer('denomination_id')->index()->nullable();
            //$table->foreign('denomination_id')->references('id')->on('denominations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
     */
    public function down()
    {
        Schema::dropIfExists('churches');
    }
}
