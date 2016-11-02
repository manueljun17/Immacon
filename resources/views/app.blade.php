<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
</head>
<body>
	@include('partials.nav')
<div class="container">
	@yield('content')
</div>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	@yield('footer')
</body>
</html>