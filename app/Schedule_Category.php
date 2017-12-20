<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule_category extends Model
{
   protected $fillable = ['name'];
    // each Schedule_category belongs to schedule
    public function schedule_category() {
        return $this->belongsTo(Schedule::class);
    }
}
