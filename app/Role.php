<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function role_user() {
        return $this->belongsTo(User::class);
    }
}
