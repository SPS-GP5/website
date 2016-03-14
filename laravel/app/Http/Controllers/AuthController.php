<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers\Controller;

use Auth;
use Validator;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        if(Auth::check()) {
            return redirect('/intern');
        }

        return view('login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        
        $validator = Validator::make($request->all(),
            ['email' => 'required|email|max:150']
        );

        if($validator->fails()){
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }else {
            if(Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('/intern');
            }
            else {
                return view('login')->withErrors(trans('auth.failed'));
            }
        }
    }

    public function showLogout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|max:50|alpha',
            'lastName' => 'required|max:50|alpha',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new Users;
        $user->firstName = $data['firstName'];
        $user->lastName = $data['lastName'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return $user;
    }
}

