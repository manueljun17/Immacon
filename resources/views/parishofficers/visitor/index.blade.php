<div>
<h1>Parish Officers</h1>
{!! Form::open(['route' => 'parishofficers', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}

<div class="input-group">
    {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              

    <button class="btn btn-default" type="submit">
        <i class="fa fa-search"></i>
    </button>
</div>
{!! Form::close() !!}
</div>
@if ($parishofficers->count())
    @foreach ($parishofficers as $parishofficer)

        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{ asset($parishofficer->user_image)}}" alt="Parish Officer Image"  width="100%" height="auto">
        <div class="card-block">
            <h4 class="card-title">{{ $parishofficer->name }}</h4>
            <h5 class="card-title">{{ $parishofficer->position }}</h5>
            <p class="card-text">{{ $parishofficer->description }}</p>
            <a href="{{ route('parishofficers.show',array($parishofficer->id)) }}" class="btn btn-info">Show</a>
        </div>
        </div>
    @endforeach
@endif

@if ($parishofficers->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Position</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($parishofficers as $parishofficer)
                <tr>
                    <td>{{ $parishofficer->id }}</td>
                    <td><img src="{{ asset($parishofficer->user_image)}}" width="50px" height="50px"></td>
                    <td>{{ $parishofficer->name }}</td>
                    <td>{{ $parishofficer->position }}</td>
                    <td>{{ $parishofficer->description }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('parishofficers.show',array($parishofficer->id)) }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
    <div class="text-center">
        <nav>
        {!! $parishofficers->appends( Request::query() )->render() !!}
        </nav>
    </div>
@else
    There are no Parish Officers info
@endif