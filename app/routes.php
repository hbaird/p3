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

/ Display edit form
Route::get('/lorem-ipsum/', function() {


});


// Process edit form
Route::post('/lorem-ipsum/', function() {


});


// Display add form
Route::get('/user-generator/', function() {


});


// Process add form
Route::post('/user-generator/', function() {



});