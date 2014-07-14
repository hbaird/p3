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

// Display edit form
Route::get('/lorem-ipsum/', function() {
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
	echo implode('<p>', $paragraphs);
	
});


// Process edit form
Route::post('/lorem-ipsum/', function() {


});


// Display add form
Route::get('/user-generator/', function() {

	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create();

	// generate data by accessing properties
	echo $faker->name;
  	// 'Lucy Cechtelar';
	echo $faker->address;
    // "426 Jordy Lodge
    // Cartwrightshire, SC 88120-6700"
	echo $faker->text;

});


// Process add form
Route::post('/user-generator/', function() {



});