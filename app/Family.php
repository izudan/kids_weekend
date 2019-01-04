<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public function userChildren(){
        return $this->hasMany('App\UserChild');
    }
    
    public function userParents(){
        return $this->hasMany('App\UserParent');
    }
    
}
