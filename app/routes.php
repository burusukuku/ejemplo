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

Route::get('/',array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('/personal', array('as' => 'personal', 'uses' => 'HomeController@personal'));
Route::get('/contacto', array('as' => 'contacto', 'uses' => 'HomeController@contacto'));
Route::get('/login',array('as' => 'login', 'uses' => 'HomeController@login'))->before("guest_user");
Route::get('/privado', array('as' => 'privado', 'uses' => 'HomeController@privado'))->before("auth_user");
Route::any('/salir', array('as' => 'salir', 'uses' => 'HomeController@salir')); //recibe por post luego pongo any

//Recogida de datos con Post
Route::post('/login', array('before' => 'csrf', function(){

    $user = array(
        'email' => Input::get('email'),
        'password' => Input::get('password'),
        'active' => 1,
    );

    $remember = Input::get("remember");
    $remember == 'On' ? $remember = true : $remember = false;

    if (Auth::user()->attempt($user, $remember)){

        return Redirect::route("privado");
    } else{
        return Redirect::route("login");
    }

}));




// Redireccion a la página de error 404

App::missing(function($exception){
	return Response::view('error.error404', array(), 404);
});