<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['name','redundancy','startDate','endDate'];

    // each church has many events
    public function schedule_church() {
        return $this->hasOne(Church::class);
    }
    // each event has one Schedule_category
    public function schedule_category() {
        return $this->hasOne(Schedule_category::class);
    }
}
