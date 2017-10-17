<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_Category extends Model
{
    protected $fillable = ['name'];

    // each event_category belongs to many  events
    public function event_category_event() {
        return $this->belongsTo(Event::class);
    }
}