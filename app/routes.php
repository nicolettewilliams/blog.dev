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

Route::get('/sayhello', function()
{
    return "Hello, Codeup!";
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
});

Route::get('/portfolio' , function()
{
	return "This is my portfolio.";
});



Route::get('/rolldice/{guess?}', function($guess = 0)
{
  $guess = Input::get('guess');
  $rand = rand(1, 6);
  $message = 'Try again';
  if ($rand == $guess) {
    $message = 'You got it dude';
  }
  $data = array('rand' => $rand, 'guess' => $guess, 'message' => $message);
  return View::make('rolldice')->with($data);
});

Route::resource('posts', 'PostsController');

Route::get('/my_posts/{id}' , 'PostsController@myPosts');

Route::get('/user_posts/{id}' , 'PostsController@userPosts');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('portfolio', 'HomeController@showPortfolio');

URL::to('Resume.pdf');
