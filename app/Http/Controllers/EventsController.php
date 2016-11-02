<?php

namespace App\Http\Controllers;

use App\Event;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventsController extends Controller
{
    public function index() 
    {
        $events = Event::latest('published_at')->get();
    	return view('events.index',compact('events'));
    }
}
