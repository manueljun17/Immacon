@extends('layouts.about')

@section('content')
<h1>Edit About</h1>
{{ Form::model($about, array('method' => 'PATCH', 'route' => array('about.update', $about->id))) }}
    <ul>
        <li>
            {{ Form::label('mission', 'Mission:') }}
            {{ Form::textarea('mission') }}
        </li>
        <li>
            {{ Form::label('vision', 'Vision:') }}
            {{ Form::textarea('vision') }}
        </li>
        <li>
            {{ Form::label('history', 'History:') }}
            {{ Form::textarea('history') }}
        </li>
        <li>
            {{ Form::label('bank_account', 'Bank Account:') }}
            {{ Form::text('bank_account') }}
        </li>
        <li>
            {{ Form::label('email_account', 'Email:') }}
            {{ Form::text('email_account') }}
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            <a class="btn btn-success" href="{{ route('about.index') }}">Back</a>
        </li>
    </ul>
{{ Form::close() }}

@stop