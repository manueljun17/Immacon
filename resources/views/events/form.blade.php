  
    <div class="form-group">
 		{!! Form::label('Event Name:') !!}
 		{!! Form::text('title', null , ['class' => 'form-control']) !!}
 	</div>

     <div class="form-group">
 		{!! Form::label('Event Location:') !!}
 		{!! Form::text('event_location', null , ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('start_time','Time Start:') !!}
 		{!! Form::time('start_time', null , ['class' => 'form-control']) !!}
 	</div>

    <div class="form-group">
 		{!! Form::label('end_time','Time End:') !!}
 		{!! Form::time('end_time', null , ['class' => 'form-control']) !!}
 	</div>
     <div class="form-group">
 		{!! Form::label('event_date','Date:') !!}
 		{!! Form::date('event_date', null , ['class' => 'form-control']) !!}
 	</div> 	

    

     <div class="form-group">
 		{!! Form::label('body','Content:') !!}
 		{!! Form::textarea('body', null , ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control']) !!}
        <a class="btn btn-warning form-control" href="{{ route('events.index') }}">Back</a>
 	</div>	