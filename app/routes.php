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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/employees', function()
{
	return View::make('employees');
});

Route::get('/schedule', function()
{
	return View::make('schedule');
});

Route::get('/checklists', function()
{
	return View::make('checklists');
});

Route::get('/facebook', function()
{
	return View::make('facebook');
});

Route::get('/twitter', function()
{
	return View::make('twitter');
});

Route::get('/instagram', function()
{
	return View::make('instagram');
});

