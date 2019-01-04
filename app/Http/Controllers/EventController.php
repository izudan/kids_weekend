<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function event_index()
    {
        $events=Event::orderBy('created_at','asc')->get();
        return $events;
    }
}