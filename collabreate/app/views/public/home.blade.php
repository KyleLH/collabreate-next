@extends('layouts.default')

@section('head')
	<title>Collabreate</title>

@section('content')
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<h1>Collabreate is the digital services exchange for Boston University.</h1>
			</div>
			<div class="row jumboSearch">
				<div class="input-group input-group-lg">
					<input type="text" class="form-control" placeholder="search for anything: jobs, freelancers, projects, etc.">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Search</button>
					</span>
				</div>
			</div>
		</div>
	</div>

@stop