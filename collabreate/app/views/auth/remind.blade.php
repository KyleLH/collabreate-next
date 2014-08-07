@extends('layouts.default')

@section('content')
	<h1>Password reset</h1>

	{{ Form::open() }}

		<li>
			{{ Form::label('email', 'Email address:') }}
			{{ Form::email('email') }}
		</li>

		<li>
			{{ Form::submit('Reset') }}
		</li>

	{{ Form::close() }}

	@if (Session::has('error'))
		<p>{{ Session::get('error') }}</p>
	@elseif (Session::has('status'))
		<p>{{ Session::get('status') }}</p>
	@endif

@stop