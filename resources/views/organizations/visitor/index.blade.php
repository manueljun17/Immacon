<div>
<h1>Organizations</h1>
{!! Form::open(['route' => 'organizations', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}

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

@if ($organizations->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th></th>
           
            </tr>
        </thead>

        <tbody>
            @foreach ($organizations as $organization)
                <tr>
                    <td>{{ $organization->id }}</td>
                    <td>{{ $organization->name }}</td>
                    <td>{{ $organization->description }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('organizations.show',array($organization->id)) }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
    <div class="text-center">
    <nav>
      {!! $organizations->appends( Request::query() )->render() !!}
    </nav>
  </div>
@else
    There are no Organizations info
@endif