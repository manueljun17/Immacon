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
      
        position: relative;
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


    /*-- Content -- */

    /*-- Mission and Vision -- */
    .mission-vision {
        text-align: center;
        background-color:#eee;
    }
    .mv-header{
        font-size: 3em; 
    }
    .mv-content{
        font-size: 1.3em;
    }
    /*-- Parish Officers -- */
    .parish-officers .po-header{
        text-align: center;
    }
    .po-header{
        font-size: 3em; 
    }
    .po-content{
        font-size: 1.3em;
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
            <div class="mission-vision">
                <div class="mv-header">
                    <p>Mission and Vision of the Parish</p>
                </div>
                <div class="mv-content">
                    <p>
                    Over the past years, we have seen God do amazing things through ImmaconAngelesCityPH church to change lives in our community, our nation, and around the world. We are blown away at how God continues to strengthen and build the church and use us as a body of believers to bring the good news of the Gospel to people who need Jesus! This year we unite around the calling to be Christ's hands extended by loving with extravagance, serving with genuineness, and welcoming people home.
                    </p>
                    <button class="btn btn-info">NEED HELP?</button>
                </div>
            </div> 
            <div class="parish-officers">
                <div class="po-header">
                    <p>Parish Officers</p>
                </div>
                <div class="po-content">
                    <p>                    
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet, ligula ut lobortis commodo, enim ligula volutpat justo, sit amet pretium massa sem vitae lorem. Curabitur egestas rutrum dolor, sed consectetur justo convallis eu. Donec eros erat, placerat in scelerisque vitae, tristique fermentum nibh. Nunc congue hendrerit luctus. Proin accumsan molestie mi a iaculis. Vivamus nulla ligula, suscipit lacinia bibendum tempor, faucibus nec magna. Donec auctor metus leo, quis rhoncus erat viverra sit amet. Donec nec tempor libero.
                    </p>
                </div>
            </div>    
        </figure>

    </div>

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>