@extends('layouts.default')

@section('head')
	<title>Collabreate: Create an account</title>

@section('content')
	<div class="jumbotron">
		<div class="container">
			<div class="row"><h1>Create an account</h1></div>
			<div class="row jumboLogin">
				{{ Form::open(array('route' => 'register.store')) }}
					<div class="form-group">
						{{ Form::label('fullname', 'Full name') }}
						{{ Form::text('fullname', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('username', 'Username') }}
						{{ Form::text('username', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('email', 'Email address') }}
						{{ Form::email('email', null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Password') }}
						{{ Form::password('password', ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('password_confirmation', 'Type that password again') }}
						{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
					</div>
					{{ Form::submit('Create an account', ['class' => 'btn btn-default']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>

	@if ($errors)
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	@endif

@stop