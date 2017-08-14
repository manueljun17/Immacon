@extends('layouts.contact')
@section('content')
<h1>Edit Contact Us</h1>
{{ Form::model($contact, array('method' => 'PATCH', 'route' => array('admin.contact.update', $contact->id))) }}
    <ul style="list-style-type: none;">
    <h4>{{ Form::label('cell_number', 'Cell Phone:') }}</h4>
        <li>
            {{ Form::textarea('cell_number') }}
        </li>
    <h4>{{ Form::label('phone_number', 'Tele Phone:') }}</h4>
        <li>
            {{ Form::textarea('phone_number') }}
        </li>
    <h4>{{ Form::label('address', 'Address:') }}</h4>
        <li>
            {{ Form::textarea('address') }}
        </li>
    <h4>{{ Form::label('email_address', 'E-mail:') }}</h4>
        <li>
            {{ Form::textarea('email_address') }}
        </li>
    <h4>{{ Form::label('account_name', 'Bank Name:') }}</h4>
        <li>
            {{ Form::textarea('account_name') }}
        </li>
    <h4>{{ Form::label('account_number', 'Bank Number:') }}</h4>
        <li>
            {{ Form::textarea('account_number') }}
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            <a class="btn btn-success" href="{{ route('admin.contact') }}">Back</a>
        </li>
    </ul>
{{ Form::close() }}

@stop