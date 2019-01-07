<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    
    protected $fillable = [
        'family_id','user_parent_id', 'event_id', 'child_id','book_price'
    ];
    
    // $book->family
    public function family()
    {
        return $this->belongsTo('App\Family');
    }
    
    // $book->userChild
    public function userChild()
    {
        return $this->belongsTo('App\UserChild');
    }
    
    // $book->userParent
    public function userParent()
    {
        return $this->belongsTo('App\UserParent');
    }
    
    // $book->event
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    
}