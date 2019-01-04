<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    protected $table = "activities";
    
    public function schools()
    {
        return $this->belongsTo('\App\School');
    }
    
    public function events()
    {
        return $this->hasmany('\App\Event');
    }
    
    
    
    public function books()
    {
        return $this->hasmany('\App\Book', 'activity_id', 'activity_id');
    }
    //
}