<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$posts  = DB::select('SELECT * FROM posts');	print_r($posts);
});

Route::get('/about', function() {	
	return view('about', array( 'items' => array('Item 1', 'Item 2', 'Item 3')));
});
