<div>
<h1>Organizations</h1>
{!! Form::open(['route' => 'organizations', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}

<div class="input-group">
    {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              
    <span class="input-group-btn">
    <button class="btn btn-default" type="submit">
        <i class="fa fa-search"></i>
    </button>
    </span>
</div>
{!! Form::close() !!}
</div>

@if ($organizations->count())
     @foreach ($organizations as $organization)
        <div class="card" style="width: 20rem;">
            <?php
             if(preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $organization->description)) preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $organization->description, $image);
             else $image['src']='image/settings/event-default.jpg';  
             ?>
            <img class="card-img-top" src="{{ asset( $image['src']) }}" alt="Organization Image"  width="100%" height="auto">
            <div class="card-block">
                <h4 class="card-title">{{ $organization->name }}</h4>
                <a href="{{ route('organizations.show',array($organization->id)) }}" class="btn btn-info">Show</a>
            </div>
        </div>
    @endforeach

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
           
            </tr>
        </thead>

        <tbody>
            @foreach ($organizations as $organization)
                <tr>
                    <td>{{ $organization->id }}</td>
                    <td>{{ $organization->name }}</td>
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