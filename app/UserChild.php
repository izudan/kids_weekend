<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserChild extends Model
{
    protected $table = 'userChildren';
    
    protected $fillable = [
        'family_id','child_last_name', 'child_first_name', 'child_last_kana','child_first_kana','chilld_sex','child_birth_day'
    ];
    
    
    // $userChild->family
    public function family()
    {
        return $this->belongsTo('App\Family');
    }
    
    public function books()
    {
        return $this->hasMany('App\Book');
    }
}