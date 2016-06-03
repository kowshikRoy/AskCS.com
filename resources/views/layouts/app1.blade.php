<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AskCS.com</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" >
    <nav class="navbar navbar-default navbar-static-top" >
        <div class="container" >
            <div class="navbar-header" >

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="/icon.jpg" style="width:35px; height:35px; position:absolute; top:10px; left:100px; border-radius:50%">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    AskCS.com
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/new-post') }}">Ask or Post!</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Search Site <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                
                                <li><a href="{{ url('searchbypostinput') }}">Search Post</a></li>
                                <li><a href="{{ url('searchbyuserinput') }}">Search User</a></li>
                            </ul>
                            
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Site Stat</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                
                                <li><a href="{{ url('/user/'.Auth::id()) }}"><i class="fa fa-btn fa-user"></i>My Profile</a></li>
                                <li><a href="{{ url('profile') }}"><i class="fa fa-btn fa-user"></i>Upload Photo</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                            
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
    <!-- Footer -->
    
    <hr>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-center" style="position: absolute; left: 640px;">
        <li>
            <a href="about">About Us</a>
        </li>
        <li>
            <a href="contact">FeedBack</a>
        </li>
    </ul>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
            <div class="row" style="position: absolute; left: 640px;>
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://www.facebook.com/RiboTintel-1700844790182745/timeline">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/RiboTintel-1700844790182745/timeline">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://gitlab.com/kowshikRoy/AskCS.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; 2016 | AskCS.com</p></p>
                </div>
            </div>
        </div>


</body>
</html>
