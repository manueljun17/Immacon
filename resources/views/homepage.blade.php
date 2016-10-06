<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<style>
    #main-wrap {
        position:relative;
    }   
    header {
        position:relative;
    }
    #main-nav a {
        color:white;         
    }
    .banner {
        position:absolute;
        top:0;        
        z-index:-1;  
    }
    .banner img {
        width:100%;        
        max-height:40vw;
    }
     @media all and ( max-width: 720px ) {
         .banner img {
            max-height:70vw;
         }
     }
  
    /*-- Bootstrap -- */
    .navbar-inverse {
        background-color:rgba(0, 0, 0, 0.46);
    }
    .navbar-inverse .navbar-brand{
        color: #ffffff;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: #ffffff;
    }
    .navbar-inverse .navbar-nav>li>a:hover {
        background-color: rgba(251, 251, 227, 0.19);
    }
    figure {
        position:relative;
    }

</style>



</head>
<body>	
    <div id="main-wrap">
        <header>          
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">ImmaconAngelesCityPH CHURCH</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">   
                        <li><a href="/officers">Parish Officers</a></li>
                        <li><a href="/events">Events</a></li>    
                    </ul>
                    </div>
                </div>
            </nav>	

            <div class="banner">
                <img src="img/1.jpg">
            </div>
        </header>
        <figure class="main-content">
            <h1>Vision and Mission of the Parish</h1>
        </figure>

    </div>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>