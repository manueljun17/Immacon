@extends('layouts.organizations')

@section('content')
	<h1> Organizations Information</h1>
    <h4>Name: {{ $organizations->name }} </h4>
	
	<article>
		<h4>Description: {{ $organizations->description }}</h4>
	</article>
	@if( auth()->check())
		@if( auth()->user()->hasRole('Admin'))
			<a class="btn btn-info" href="{{ route('admin.organizations') }}">Back</a>
		@endif
	@endif
	
@stop