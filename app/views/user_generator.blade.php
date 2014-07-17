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

		{{ Form::label('users', 'How many users?') }}
		
		{{ Form::text('query', 5, array('size' => '20','maxlength' => '2')) }} (Max:99)

		<br><br>

		{{ Form::submit('Generate!') }}


	{{ Form::close() }}

	<br>

	@for ($i = 0; $i < $query; $i++)

		{{ $faker->name }} <br>
		{{ $faker->date }} <br>
		{{ $faker->text }} <br><br>

	@endfor


</section>

@stop