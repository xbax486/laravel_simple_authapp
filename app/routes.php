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

Route::get('register', 'RegisterController@showRegister');

Route::post('/register', 'RegisterController@doRegister');

Route::get('login', 'LoginController@showLoginPage');

Route::post('/login', 'LoginController@redirectToLoginPage');

Route::post('/relogin', 'LoginController@redirectToLoginPage');

//Route::get('/login', function(){
//    return View::make('login');
//});

//Route::post('/login', function(){
//    $credentials = Input::only('username', 'password');
//    if(Auth::attempt($credentials)){
//        return Redirect::intended('/'); //redirect the user to homepage before being caught by the authentication filter
//    }
//    //return Redirect::to('login'); //authentication fails and return to login page
//    else{
//        return View::make('login')->with('msg', 'User name or password is not correct. Please try again');
//    }
//});

Route::get('/logout', function(){
    Auth::logout();
    return View::make('logout');
});

Route::get('spotlight', array(
    'before' => 'auth',
    function(){
        return View::make('spotlight');
    }
));

Route::get('insider', array(
    'before' => 'auth',
    function(){
        return View::make('insider');
    }
));