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
            @if(!Auth::check())
                
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/events">Events</a></li>
                        <li><a href="/organizations">Organizations</a></li>
                        <li><a href="/parishofficers">Parish Officers</a></li>
                        <li><a href="/about">About</a></li>   
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    </ul>
                </div>
            @else
                @if(Auth::user()->hasRole('Admin'))
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">   
                        <li><a href="/parishofficers">Parish Officers</a></li>
                        <li><a href="/organizations">Organizations</a></li>
                        <li><a href="/events">Events</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/users">Users</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
                @else
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">   
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
                @endif
            @endif
            
        </div>
    </nav>	

    <div class="banner">
        <img src="{{asset('img/settings/1.jpg')}}">
    </div>
</header>