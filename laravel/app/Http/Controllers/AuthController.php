<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers\Controller;

use Auth;
use Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    // Todo: Lookup for ThrottlesLogins
    
    /**
     * Returns the login view 
     */
    public function getLogin()
    {
        if(Auth::check()) {
            return redirect('/intern');
        }

        return view('login');
    }

    /** 
     * Access the input data and forwards the user to the internal space
     * if he's in the database
     * 
     * @param Request $request - contains the input data
     */
    public function postLogin(Request $request)
    {
        // Retrieve input
        $email = $request->email;
        $password = $request->password;
        
        // Define input validation clause(s) for the login
        $validator = Validator::make($request->all(),
            ['email' => 'required|email|max:150']
        );

        if($validator->fails()){
            return redirect('login')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }else {
            if(Auth::attempt(['email' => $email, 'password' => $password], false)) {
                return redirect('/intern');
            }
            else {
                return redirect('login')
                    ->withErrors(trans('auth.failed'))
                    ->withInput($request->except('password'));
            }
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    public function postRegister(Request $request) {
        
        // Define input validation clause(s) for registration 
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:50|alpha',
            'lastname' => 'required|max:50|alpha',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|confirmed|min:8|max:300',
        ]);

        if($validator->fails()){
            return redirect('register')
                ->withErrors($validator)
                ->withInput([
                    $request->except('password'), 
                    $request->except('password_confirmation')
                ]);       
        }else {
            $user = new Users;
            $user->firstName = $request->firstname;
            $user->lastName = $request->lastname;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            
            // Default role = 1
            // Default active = 0
            $user->save();

            Auth::login($user);
            return redirect('intern');
        }
    }
}

