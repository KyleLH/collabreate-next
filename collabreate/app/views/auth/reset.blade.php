@extends('layouts.default')

@section('content')
	<h1>Reset your password</h1>

	{{ Form::open() }}
		<input type="hidden" name="token" value="{{ $token }}">

		<li>
			{{ Form::label('email', 'Email address:') }}
			{{ Form::email('email') }}
		</li>

		<li>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</li>

		<li>
			{{ Form::label('password_confirmation', 'Type your password again:') }}
			{{ Form::password('password_confirmation') }}
		</li>

		<li>
			{{ Form::submit('Reset') }}
		</li>
	{{ Form::close() }}

	@if (Session::has('error'))
		<p>{{ Session::get('error') }}</p>
	@endif

@stop