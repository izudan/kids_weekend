<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    //
    public function index()
    {
        // $events = Event::find(1)->books->where('id', '10')->first();
        //$events = Event::find(1)->books;
        
        // $events = Event::find(1)->books;
        // $events = Event::all();
        // return $events;
        
        // select activity_id from events inner join activities on activity_id = activities.id; 

        $events = Event::select(
            [
                'activity_id',
                'category_id',
                'file_name',
                'school_name',
                'activity_name',
                'event_start_time',
                'event_price',
                'event_target_min_age',
                'event_target_max_age',
                'school_state',
                'school_city',
                'school_detail',
                'activity_detail',
            ]
            )
            ->join('activities','activity_id','=','activities.id')
            ->join('schools','school_id','=','schools.id')
            ->where('activity_pub_status', '0')
            ->get();
        
        return $events;
    }
    
    public function getEvent()
    {
        $events = Event::with(['activity.schools'])->get();
        return $events;
    }

    public function getActivity()
    {
        $events = Event::find(1)->activity;
        return $events;
    }
    

    // public function eventGet()
    // {
    //     $events = Event::all();
    //     return $events;
    // }
}
