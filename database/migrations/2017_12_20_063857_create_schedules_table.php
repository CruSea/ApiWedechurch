<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name');
            $table->string('redundancy');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->integer('church_id')->index()->nullable();
          //  $table->foreign('church_id')->references('id')->on('churches');
            $table->integer('category_id')->index()->nullable();
           // $table->foreign('category_id')->references('id')->on('schedule_categories');
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
        Schema::drop('schedules');
    }
}
