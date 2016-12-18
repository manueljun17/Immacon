@extends('layouts.event')

@section('content')
    <h4>Name: {{ $events->title }} </h4>
	@if($events->location)
        <h4>Location: {{ $events->event_location }} </h4>
    @endif
    @if($events->start_time && $events->start_time != "00:00:00")
       {{ $events->start_time }} 
    @endif
    @if($events->start_time && $events->end_time && $events->start_time != "00:00:00" && $events->end_time != "00:00:00")
        -
    @endif
    @if($events->end_time && $events->end_time != "00:00:00")
       {{ $events->end_time }} 
    @endif
    
 
	<article>
	 {{ $events->body }}
	</article>
	<a class="btn btn-info" href="{{ route('events.index') }}">Back</a>
@stop