@extends('layouts.parishofficer')
@section('content')
    <div id="container">
      @if($errors->has())
        <div class="alert alert-block alert-error fade in"id="error-block">
            <?php
            $messages = $errors->all(':message');
          ?>
          <button type="button" class="close"data-dismiss="alert">×</button>

          <h4>Warning!</h4>
          <ul>
            @foreach($messages as $message)
              <li>{{ $message }}</li>
            @endforeach

          </ul>
        </div>
      @endif
      
      <form name="createparishofficers" method="POST" action="{{ route('parishofficers.store')}}" enctype="multipart/form-data">
        <fieldset>
          <legend>Create Parish Officer</legend>

            <div class="form-group file-upload-button">
              <img id="myProfile" src="{{asset($defaultImage)}}" width="150px" height="150px"></img>
              <input name="user_image" type="file" onchange="showimagepreview(this)" />
            </div>
            
          <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control"placeholder="Name" value="{{ old('name') }}">
          </div>
          <div class="form-group">
            <label for="position">Position</label>
            <input name="position" type="text" class="form-control"placeholder="Position" value="{{ old('position') }}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" type="text"class="form-control" placeholder="Description" value="{{ old('description') }}"></textarea>
          </div>
          
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-info">Create</button>
        </fieldset>
      </form>
      </div>
      @stop