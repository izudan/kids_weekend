<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public function activities()
    {
        return $this->belongsTo('\App\Activity');
    }
}