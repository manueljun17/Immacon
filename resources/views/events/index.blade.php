@extends('app')

@section('content')
	<h1>List of Events</h1>
	<hr/>
	@foreach ( $events as $event )
	<article>		
		<h2>
			<a href=' {{ url('/events',$event->id) }} '> {{ $event->title }} </a>
		</h2>
		<div class="body"> {{ $event->body }} </div>
	</article>
	@endforeach
@endsection