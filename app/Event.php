<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'events';
    
    protected $fillable = [
        'activity_id','event_date', 'event_start_time','event_end_time','event_capacity_members','event_target_min_age', 
        'event_target_max_age','event_parent_attendant','event_price','event_cancelation_policy','event_pub_status',
        'event_arival_time','event_state','event_city','event_addres1','event_addres2',
    ];
    
    public function books()
    {
        return $this->hasMany('App\Book');
    }
    
     // $event->activity
    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
}

