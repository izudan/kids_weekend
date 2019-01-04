<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $primarykey='school_id';
    
    public function activities()
    {
        return $this->hasMany('\App\Activity');
    }
}