<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;

class EventsController extends Controller
{
    public function index() 
    {
        return view('events.index');
    }

    public function create(Request $request) 
    {
        $event = $request->input('event');
        $newEvent = new Event;
        $newEvent->event = $event;
        $newEvent->save();
    }

    
}
