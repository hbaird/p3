@extends('_master')




@section('head')
	<link rel="stylesheet" href="custom.css" type="text/css">
@stop


@section('title')
	Lorem Ipsum Generator
@stop


@section('content')

	<a href={{url('/')}}>&larr; Home</a>

	<h1>User Generator</h1>


	<br>

		{{ Form::open(array('url' => '/user-generator', 'method' => 'GET')) }}

		<label for="users">How many users?</label>
		
		{{ Form::text('query') }} (Max:99)

		<br><br>

		{{ Form::submit('Generate!') }}


	{{ Form::close() }}


		
</section>

@stop