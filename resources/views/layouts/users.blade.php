<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! elixir('css/clock.css') !!}">
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('src/js/select2/select2.min.css') }}" rel="stylesheet" />
</head>
<body>
	@include('partials.nav')
<div class="container">
	@yield('content')
</div>
	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="{{ URL::to('src/js/jqueryui/jquery-ui.min.js') }}"></script>
    
    <script>
        $(function() {
            $("#term").autocomplete({
            source: "{{ route('admin.users.autocomplete') }}",
            minLength: 3,
            select: function(event, ui) {
                $("#term").val(ui.item.value);
            }
            });
        }); 
    </script>
 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{!! elixir('js/clock.js') !!}"></script>
	<script src="{{ URL::to('src/js/select2/select2.min.js') }}"></script>
	@include('partials.footer')
    <script>
        $('#role_list').select2({
            placeholder: "Choose Roles"
        });
    </script>
</body>
</html>