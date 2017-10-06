<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description','banner','location','latitude','longitude','contact_phone','startDate','endDate'];

    // each church has many events
    public function event_church() {
        return $this->belongsTo(Church::class);
    }
    // each event has one events_catagory
    public function event_category() {
        return $this->hasOne(Event_Category::class);
    }

    //user fav event relation ship
    public function favEvent() {
        return $this->belongsToMany(User::class, 'favorite_Event', 'event_id','user_id');
    }
}
