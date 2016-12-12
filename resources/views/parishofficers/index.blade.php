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
                <th>Name</th>
                <th>Position</th>
                <th>Description</th>
                <th>Profile</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($parishofficers as $parishofficer)
                <tr>
                    <td>{{ $parishofficer->name }}</td>
                    <td>{{ $parishofficer->position }}</td>
                    <td>{{ $parishofficer->description }}</td>
                    <td><img src="{{ asset($parishofficer->user_image)}}" width="50px" height="50px"></td>
                    <td><a class="btn btn-info" href="{{ route('parishofficers.edit',array($parishofficer->id)) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
@else
    There are no Parish Officers info
@endif
@stop