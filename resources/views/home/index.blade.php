@extends('app')

@section('content')

	<figure class="main-content">
        <div class="mission-vision">
            <div class="mv-header">
                <p>Mission</p>
            </div>
            <div class="mv-content">
                <p>{{ $about->mission}}</p>
            </div>
            <div class="mv-header">
                <p>Vision</p>
            </div>
            <div class="mv-content">
                <p>{{ $about->vision}}</p>
            </div>
            <a class="btn btn-info" href="{{ route('about') }}">See More</a>
        </div> 
        <div class="organizations">
            <div class="org-header">
                <p>Organizations</p>
            </div>
            <div class="org-content">
                <a class="btn btn-info" href="{{ route('organizations') }}">See More</a>
            </div>
        </div>
        <div class="events">
            <div class="events-header">
                <p>Upcoming Events</p>
            </div>
            <div class="events-content">
                @foreach ($events as $event)
                    <div>
                    <a  href="{{ route('events.show',array($event->id)) }}">{{ $event->title}}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="parish-officers">
            <div class="po-header">
                <p>Parish Officers</p>
            </div>
            <div class="po-content">
                <a class="btn btn-info" href="{{ route('parishofficers') }}">See More</a>
            </div>
        </div>
        <div class="gmap">
            <div class="gmap-header">
                <p>Location</p>
            </div>
            <div class="gmap-content">
                <p>Google Map</p>
            </div>
        </div>    
    </figure>
    <!--<ul id="clock">	
	   	<li id="sec"></li>
	   	<li id="hour"></li>
		<li id="min"></li>
	</ul>-->
  
@endsection