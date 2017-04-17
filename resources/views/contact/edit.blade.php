@extends('layouts.contact')

@section('content')
<h1>Edit Contact Us</h1>
{{ Form::model($contact, array('method' => 'PATCH', 'route' => array('admin.contact.update', $contact->id))) }}
    <ul>
        <li>
            {{ Form::label('cell_number', 'Cell Phone:') }}
            {{ Form::textarea('cell_number') }}
        </li>
        <li>
            {{ Form::label('phone_number', 'Tele Phone:') }}
            {{ Form::textarea('phone_number') }}
        </li>
        <li>
            {{ Form::label('address', 'Address:') }}
            {{ Form::textarea('address') }}
        </li>
        <li>
            {{ Form::label('email_address', 'E-mail:') }}
            {{ Form::textarea('email_address') }}
        </li>
        <li>
            {{ Form::label('account_name', 'Bank Name:') }}
            {{ Form::textarea('account_name') }}
        </li>
        <li>
            {{ Form::label('account_number', 'Bank Number:') }}
            {{ Form::textarea('account_number') }}
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            <a class="btn btn-success" href="{{ route('admin.contact') }}">Back</a>
        </li>
    </ul>
{{ Form::close() }}

@stop