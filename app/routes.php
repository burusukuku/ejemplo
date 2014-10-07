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
	return View::make('HomeController.index');
});

Route::get('/personal', 'HomeController@personal', function()
{
    return View::make('HomeController.personal');
});

Route::get('/contacto', 'HomeController@contacto', function()
{
    return View::make('HomeController.contacto');
});

//Registro de Rutas

Route::any('/' , array('as' => 'index', 'uses' => 'HomeController@index'));
Route::any('/personal' , array('as' => 'personal', 'uses' => 'HomeController@personal'));
Route::any('/contacto' , array('as' => 'contacto', 'uses' => 'HomeController@contacto'));


// Redireccion a la página de error 404

App::missing(function($exception){
	return Response::view('error.error404', array(), 404);
});