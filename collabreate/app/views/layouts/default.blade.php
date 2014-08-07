<!doctype html>
<html lang="en">

	<head>

		@section('head')
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="{{ asset('static/css/base.css') }}">
		@show

	</head>

	<body>

		<div class="navbar navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{{ URL::to('/') }}">Collabreate</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="navbar-right">
						@if (!Auth::check())
						<li>{{ link_to('/auth/login', 'Sign in', ['class' => 'nav-signIn']) }}</li>
						<li>{{ link_to('/register', 'Sign up', ['class' => 'nav-signUp']) }}</li>
						@else
						<div class="dropdown">
							<li>
								<a class="dropdownLink" data-toggle="dropdown">{{ Auth::user()->fullname }} <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>{{ link_to('/me', 'Profile') }}</li>
									<li>{{ link_to('/me/settings', 'Settings') }}</li>
									<li>{{ link_to('/auth/logout', 'Sign out') }}</li>
								</ul>
							</li>
						</div>
						@endif
					</ul>
				</div>
			</div>
		</div>
		
		@if (Session::get('flash_message'))
			<div class="flash panel panel-default">
				<div class="panel-body">
					{{ Session::get('flash_message') }}
				</div>
			</div>
		@endif

		@yield('content')

		@section('footer')
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		@show

	</body>
	
</html>