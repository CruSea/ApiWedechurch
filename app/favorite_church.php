<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorite_church extends Model
{
   public function favirite_church()
   {
   	return $this->hasOne(Church::class);
   }
   public function favirite_user()
   {
   	return $this->hasOne(User::class);
   }

}
