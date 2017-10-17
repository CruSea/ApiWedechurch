<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorite_event extends Model
{
    
   public function favirite_event()
   {
   	return $this->hasOne(Event::class);
   }
   public function favirite_user()
   {
   	return $this->hasOne(User::class);
   }

}
