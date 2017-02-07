<div>
<h1>Events</h1>
{!! Form::open(['route' => 'events', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
<div class="input-group">
    {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              
    <span class="input-group-btn">
    <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
    </button>
    </span>
</div>
{!! Form::close() !!}
</div>

@if ($events->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Event</th>
                <th>Location</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->event_location }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('events.show',array($event->id)) }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <nav>
        {!! $events->appends( Request::query() )->render() !!}
        </nav>
    </div>
@else
    There are no Events
@endif