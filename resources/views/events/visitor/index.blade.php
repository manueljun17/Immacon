<div>
<h1>Events</h1>
{!! Form::open(['route' => 'events', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}
<div class="input-group">
    {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              
    <button class="btn btn-default" type="submit">
        <i class="fa fa-search"></i>
    </button>
    </span>
</div>
{!! Form::close() !!}
</div>

@if ($events->count())
    @foreach ($events as $event)
        <div class="card" style="width: 20rem;">
            <?php {{ preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $event->body, $image); }} ?>
            <img class="card-img-top" src="{{ asset( $image['src']) }}" alt="Events Image"  width="100%" height="auto">
            <div class="card-block">
                <h4 class="card-title">{{ $event->title }}</h4>
                <h5 class="card-title">{{ $event->event_location }}</h5>
                <p class="card-text">{{ $event->event_date }}</p>
                <a href="{{ route('events.show',array($event->id)) }}" class="btn btn-info">Show</a>
            </div>
        </div>
    @endforeach

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