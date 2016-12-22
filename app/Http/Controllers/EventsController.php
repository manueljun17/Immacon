<?php

namespace App\Http\Controllers;

use Auth;

use App\Event;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest('created_at')->get();
    	return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Event $event, Request $request)
    {
        
        $validator = Validator::make($request->all(), $this->validator());
        if($validator->fails()){
        return Redirect::route('events.create')
        ->withErrors($validator)
        ->withInput();
        }
        
        $event = Auth::user()->events()->create([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'event_location' => $request->get('event_location'),
            'event_date' => $request->get('event_date'),
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time') 
        ]);
        
        return redirect('events');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::find($id);
        return view('events.show',compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
        return view('events.edit',compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Event $event, Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->validator());
        if($validator->fails()){
        return Redirect::route('events.create')
        ->withErrors($validator)
        ->withInput();
        }
        
        $event = Auth::user()->events()->update([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'event_location' => $request->get('event_location'),
            'event_date' => $request->get('event_date'),
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time') 
        ]);
        
        return redirect('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        return Redirect::route('events');
    }
    /**
     * Get Rules
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function validator()
    {
        return [
            'title' => 'required',
            'body' => 'required',
            'event_date' => 'required|date',
        ];
    }
}
