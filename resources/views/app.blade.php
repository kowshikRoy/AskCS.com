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
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">AskCS.com</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
	                    <li><a href="{{ url('/home') }}">About Us</a></li>
	                </ul>
	                <ul class="nav navbar-nav">
	                    <li><a href="{{ url('/home') }}">FAQ</a></li>
	                </ul>
					 <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/user/'.Auth::id())}}<i class="fa fa-btn fa-sign-out"></i>My Profile</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
				</div>
			</div>
		</nav>

		<div class="container">
			@if (Session::has('message'))
			<div class="flash alert-info">
				<p class="panel-body">
					{{ Session::get('message') }}
				</p>
			</div>
			@endif
			@if ($errors->any())
			<div class='flash alert-danger'>
				<ul class="panel-body">
					@foreach ( $errors->all() as $error )
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>@yield('title')</h2>
							@yield('title-meta')
						</div>
						<div class="panel-body">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<p>Copyright &copy; 2016 | AskCS.com</p>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>
	</body>
</html>
