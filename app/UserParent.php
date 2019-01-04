<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserParent extends Model
{
    protected $table = 'userParents';
    
    protected $fillable = [
        'family_id','user_last_name', 'user_first_name', 'user_last_kana','user_first_kana','email','tel',
        'sex','u_zip_code1','u_zip_code2','u_state','u_city','u_address1','u_address2'
    ];
    
    // $userParent->family
    public function family() {
        return $this->belongsTo('App\Family');
    }
    
    public function books() {
        return $this->hasMany('App\Book');
    }
    
}
