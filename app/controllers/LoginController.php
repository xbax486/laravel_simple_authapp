<?php
class LoginController extends BaseController{
    public function showLoginPage(){
        return View::make('login');
    }

    public function redirectToLoginPage(){
        $credentials = Input::only('username', 'password');
        if(Auth::attempt($credentials)){
            return Redirect::intended('/'); //redirect the user to homepage before being caught by the authentication filter
        }
        //return Redirect::to('login'); //authentication fails and return to login page
        else{
            return View::make('relogin');
        }
    }
}