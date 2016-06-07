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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin()
	{
		return View::make('posts.login');
	}
	public function doLogin()
	{

		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', 'Incorrect email or password. Please try again.');
		    return Redirect::action('HomeController@showLogin');
		}
	}

	//GET
	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}
