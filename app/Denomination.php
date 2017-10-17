<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    protected $fillable = ['name','description','logo'];

    // each event has one Schedule_category
    public function denomination_church() {
        return $this->belongsTo(Church::class);
    }
}
