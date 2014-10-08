<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('HomeController.index');
	}
    public function personal()
    {
        return View::make('HomeController.personal');
    }
    public function contacto()
    {
        return View::make('HomeController.contacto');
    }
    public function login()
    {
        return View::make('HomeController.login');
    }
    public function privado()
    {
        return View::make('HomeController.privado');
    }
    public function salir()
    {
        Auth::user()->logout();
        return Redirect::to('login');
    }

}
