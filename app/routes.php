<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Home page
Route::get('/', function() {
	return View::make('index');		


});

// Display lorem-ipsum form
Route::get('/lorem-ipsum/', function() {

	$query = Input::get('query');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($query);
	return View::make('lorem_ipsum')->with('paragraphs', $paragraphs);	
	
});


// Process lorem-ipsum form
Route::post('/lorem-ipsum/', function() {


});


// Display user-generator form
Route::get('/user-generator/', function() {
	$query = Input::get('query');
	
	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create();

	return View::make('user_generator')->with('faker', $faker)->with('query', $query);
});


// Process user-generator form
Route::post('/user-generator/', function() {



});