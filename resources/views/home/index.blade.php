@extends('app')

@section('content')


    <figure class="main-content">
        <div class="mission-vision">
            <div class="mv-header">
                <p>Immaculate Conception (update site_title)</p>
            </div>
            <div class="mv-content">
                <p>{{ $about->mission}}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.x</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
            </div>
        </div>   
    </figure>

   <div class="mini-box">
<div class="row">
<div class="col-md-6">
     
            <div class="mv-header">
                <span>Schedule</span>
            </div>
            <div class="mv-content">
                <p>{{ $about->mission}}</p>
            </div>
          
     
</div>

<div class="col-md-6">
    <div class="banner">
        <img src="{{asset('img/settings/sched.png')}}">
    </div>
</div>    
</div>

</div> 
<!-- 
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
            <a class="btn btn-info" href="{{ route('admin.about') }}">See More</a>
        </div> 
        <div class="organizations">
            <div class="org-header">
                <p>Organizations</p>
            </div>
            <div class="org-content">
                <a class="btn btn-info" href="{{ route('admin.organizations') }}">See More</a>
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
    </figure> -->

    
<!--     <ul id="clock">	
	   	<li id="sec"></li>
	   	<li id="hour"></li>
		<li id="min"></li>
	</ul> -->
  
@endsection