<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
       //
    protected $fillable = ['name', 'description','logo','banner','country','state','location','latitude','longitude','phone','weburl'];
    // each church has many users
    public function church_users() {
        return $this->belongsTo('User');
    }
    // each church has one denomination
    public function church_Denomination() {
        return $this->hasOne(Denomination::class);
    }
    // each church has many schedules
    public function church_schedules() {
        return $this->hasMany(Schedule::class);
    }
    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function user_church() {
        return $this->belongsTo(Church::class);
    }
    // each church has many events
    public function church_event() {
        return $this->hasMany(Event::class);
    }
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // define a many to many relationship
    // also call the linking table
    public function favChurch() {
        return $this->belongsToMany(User::class, 'favorite_churches', 'church_id', 'user_id');
          }
}