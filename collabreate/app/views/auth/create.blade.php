@extends('layouts.default')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<h1>Login</h1>
			</div>
			<div class="row jumboLogin">
				{{ Form::open(array('route' => 'auth.store')) }}
					<div class="form-group">
						{{ Form::label('email', 'Email address') }}
						{{ Form::email('email', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Password') }}
						{{ Form::password('password', ['class' => 'form-control']) }}
					</div>
					{{ Form::submit('Login', ['class' => 'btn btn-default']) }}
					{{ link_to('/auth/remind', 'Forgot your password?') }}
				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop