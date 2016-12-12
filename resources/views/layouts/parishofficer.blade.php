<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! elixir('css/clock.css') !!}">
    <style>
        .file-upload-button {
            position: relative;
            overflow: hidden;
            width:150px;
            height:150px;
        }
        input[name="user_image"] {
            position: absolute;
            z-index: 100;
            top: 0;
            left: 0;
            font-size: 10em;
            opacity: .001;
        }
    </style>
</head>
<body>
	@include('partials.nav')
<div class="container">
	@yield('content')
</div>
	<script src="https://code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
        function showimagepreview(input) 
        {
            if (input.files && input.files[0]) 
            {
            var filerdr = new FileReader();
            filerdr.onload = function(e) {
                $('#myProfile').attr('src', e.target.result);
            };
            filerdr.readAsDataURL(input.files[0]);
            }
        }
    </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{!! elixir('js/clock.js') !!}"></script>
	@include('partials.footer')
</body>
</html>