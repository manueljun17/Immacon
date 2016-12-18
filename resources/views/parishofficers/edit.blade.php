@extends('layouts.parishofficer')

@section('content')
	<h1>Edit: {!! $parishofficers->name !!} </h1>
	{!! Form::model($parishofficers,['method'=>'PATCH','route'=>['parishofficers.update', $parishofficers->id],'files' => true]) !!}

		@include('parishofficers.form', ['submitButtonText'=>'Update Parish Officers'])

 	{!! Form::close() !!}
 	
 	@include('errors.list')

@endsection 