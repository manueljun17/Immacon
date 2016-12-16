@extends('layouts.parishofficer')
@section('content')
<div>
<h1>Parish Officers</h1>
<a class="btn btn-info" href="{{ route('parishofficers.create') }}">Add Parish Officer</a>
</div>

@if ($parishofficers->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>Position</th>
                <th>Description</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($parishofficers as $parishofficer)
                <tr>
                    <td><img src="{{ asset($parishofficer->user_image)}}" width="50px" height="50px"></td>
                    <td>{{ $parishofficer->name }}</td>
                    <td>{{ $parishofficer->position }}</td>
                    <td>{{ $parishofficer->description }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('parishofficers.show',array($parishofficer->id)) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('parishofficers.edit',array($parishofficer->id)) }}">Edit</a>
                    </td>
                    <td>{{ Form::open(array('route' => array('parishofficers.destroy', $parishofficer->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete the information?')">Delete</button>
                        {{ Form::close() }}</td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
@else
    There are no Parish Officers info
@endif
@stop