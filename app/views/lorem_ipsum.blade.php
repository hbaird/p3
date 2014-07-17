@extends('_master')




@section('head')
	<link rel="stylesheet" href="custom.css" type="text/css">
@stop


@section('title')
	Lorem Ipsum Generator
@stop


@section('content')

	<a href={{url('/')}}>&larr; Home</a>

	<h1>Lorem Ipsum Generator</h1>

	How many paragraphs do you want?

	<br>

		{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'GET')) }}

		<label for="paragraphs">Paragraphs</label>
		
		{{ Form::text('query') }} (Max:99)

		<br><br>

		{{ Form::submit('Generate!') }}


	{{ Form::close() }}

</section>

@stop