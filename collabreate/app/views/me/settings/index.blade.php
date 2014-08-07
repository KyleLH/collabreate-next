@extends('layouts.default')

@section('head')
	@parent
	<title>Collabreate: Profile Settings</title>
@stop

@section('content')
	{{ $fullname, $username, $email }}

	{{ Form::open() }}

		{{ Form::label('fullname', 'Full name') }}
		{{ Form::text('fullname', $fullname) }}

		<p>
			{{ Form::label("username", "Username") }}
			{{ Form::text("username", $username) }}
		</p>

		<p>
			{{ Form::label("email", "Email") }}
			{{ Form::text("email", $email) }}
		</p>

		<p>
			{{ Form::label("password", "Password") }}
			{{ Form::password("password") }}
		</p>

		<p>
			{{ Form::label("password_confirmation", "Type that password again") }}
			{{ Form::password("password_confirmation") }}
		</p>

		<p>
			{{ Form::submit("Update") }}
		</p>

	{{ Form::close() }}
@stop

@stop