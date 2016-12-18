@extends('layouts.event')
@section('content')
<div>
<h1>Events</h1>
<a class="btn btn-info" href="{{ route('events.create') }}">Add Event</a>
</div>

@if ($events->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Event</th>
                <th>Location</th>
				<th>Date</th>
				<th>Content</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
					<td>{{ $event->event_location }}</td>
					<td>{{ $event->event_date }}</td>
                    <td>{{ $event->body }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('events.show',array($event->id)) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('events.edit',array($event->id)) }}">Edit</a>
                    </td>
                    <td>{{ Form::open(array('route' => array('events.destroy', $event->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete this Data?')">Delete</button>
                        {{ Form::close() }}</td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
@else
    There are no Events
@endif
@stop