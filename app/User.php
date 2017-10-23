<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent;
use App\Church;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','user_name','country','sex','phone','email', 'password',
    ];

   //Table user and church relationship
    public function user_church (){
        return $this->hasOne(Church::class);// relates to churches model
    }

    //Table user and role relationship
    public function user_role (){
        return $this->hasOne(Role::class);// relates to role model
    }
    //user fav church relation ship
    public function favChurch() {
        return $this->belongsToMany(Church::class, 'favorite_churches', 'user_id', 'church_id');
    }
    //user fav event relation ship
    public function favEvent() {
        return $this->belongsToMany(Event::class, 'favorite_Event', 'user_id', 'event_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }

}