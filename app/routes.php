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
	echo implode('<p>', $paragraphs);
	return View::make('lorem_ipsum');	
	
});


// Process lorem-ipsum form
Route::post('/lorem-ipsum/', function() {


});


// Display user-generator form
Route::get('/user-generator/', function() {
	$query = Input::get('query');
	
	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create();

	// generate data by accessing properties
	echo $faker->name; 
  	// 'Lucy Cechtelar';
	echo $faker->address;
    // "426 Jordy Lodge
    // Cartwrightshire, SC 88120-6700"
	return View::make('user_generator');
});


// Process add form
Route::post('/user-generator/', function() {



});