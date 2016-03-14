<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Input;

class AuthController extends Controller
{
    public function showLogin()
    {
        if(Auth::check()) {
            return redirect('/start');
        }

        return view('login');
    }

    public function postLogin()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if(Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('/start');
        }
        else {
            return view('login', array('error_message' => trans('messages.login_failed')));
        }
    }

    public function showLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}

