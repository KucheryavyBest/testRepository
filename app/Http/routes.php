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
	Route::get('/plData/{id}', array('id' => 'id', 'uses' => 'APIcontr@GetOnePeopleData'));
	Route::get('/pl/{id}','APIcontr@GetOnePeople');
	
	Route::get('/plData', 'APIcontr@GetAllPeopleData');
	
	Route::get('/pl', 'APIcontr@GetAllPeople');

	Route::get('/api/{level1}',array('params' => 'level1', 'uses' => 'APIcontr@GetAPI1')); 
	Route::get('/api/{level1}/{level2}', array('params' => 'level1','params2' => 'level2', 'uses' => 'APIcontr@GetAPI2')); 


	Route::get('/{vue_capture?}', function () {
		return view('example');
	});
