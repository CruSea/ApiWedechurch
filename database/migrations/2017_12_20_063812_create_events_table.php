<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('banner');
            $table->text('description');
            $table->string('location');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('contact_phone');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->integer('church_id')->index()->nullable();
           // $table->foreign('church_id')->references('id')->on('churches');
            $table->integer('event_category_id')->index()->nullable();
           // $table->foreign('event_category_id')->references('id')->on('event_categories');
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
        Schema::drop('events');
    }
}
