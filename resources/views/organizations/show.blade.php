@extends('layouts.organizations')

@section('content')
    <h4>Name: {{ $organizations->name }} </h4>
	
	<article>
		<h4>Description: {{ $organizations->description }}</h4>
	</article>
	<a class="btn btn-info" href="{{ route('organizations') }}">Back</a>
@stop