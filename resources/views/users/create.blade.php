@extends('layouts.users')
@section('content')
    <div id="container">
      <h1>Create New User</h1>
        <hr />
        {!! Form::model($users = new \App\User, ['url'=>'/users']) !!}

          @include('users.form', ['submitButtonText'=>'Add User'])

        {!! Form::close() !!}
        
        @include('errors.list')
    </div>

@endsection