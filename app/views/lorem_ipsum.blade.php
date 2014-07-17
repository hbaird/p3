@extends('_master')




@section('head')
	<link rel="stylesheet" href="custom.css" type="text/css">
@stop


@section('title')
	User Generator
@stop


@section('content')

	<a href={{url('/')}}>&larr; Home</a>

	<h1>Lorem Ipsum Generator</h1>

	How many paragraphs do you want?

	<br>

		{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'GET')) }}

		{{ Form::label('paragraphs', 'Paragraphs') }}
		
		{{ Form::text('query', 5, array('size' => '20','maxlength' => '2')) }} (Max:99)

		<br><br>

		{{ Form::submit('Generate!') }}


	{{ Form::close() }}

	<br>

	@foreach($paragraphs as $paragraph => $value)

	<p> {{ $value }} </p>

	@endforeach

</section>

@stop