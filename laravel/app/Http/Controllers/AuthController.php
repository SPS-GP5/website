<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use Auth;
use Hash;
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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:150',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect('login')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }
        else {
            if(Auth::attempt(['email' => $email, 'password' => $password, 'confirmed' => 1, 'active' => 1], true)) {
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

    public function showRegister()
    {
        if(Auth::check()) {
            return redirect('/intern');
        }

        return view('register');
    }
    
    public function postRegister(Request $request)
    {
        // Define input validation clause(s) for registration
        // The max contraints matches the ones set in the database 
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|min:3|max:200|alpha',
            'lastname' => 'required|min:3|max:200|alpha',
            'email' => 'required|email|min:3|max:100|unique:users',
            'password' => 'required|confirmed|min:8|max:300',
        ]);

        if($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput(
                    $request->except('password'),
                    $request->except('password_confirmation')
            );
        }
        else {
            $confirmcode = str_random(30);

            $user = new User;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->confirmcode = $confirmcode;
            
            // Default role = 1
            /* Role settings: 
                1 => readonly, show just documents and schedules (role for Mayr)
                2 => readwrite, show all parts (role for our group)
            */
            // Default active = 0
            $user->save();

            $mail = MailController::sendWelcomeMail($request->firstname, $request->lastname, $request->email, $confirmcode);
            if($mail == true) {
                return view('register', array('created' => true));
            }

            return view('register');
        }
    }

    public function confirmEmail($confirmcode)
    {
        $updated = User::where('confirmcode', $confirmcode)->update(['confirmed' => 1]);
        if($updated == 1) {
            return redirect('register')->with('confirmed', 'true');
        }
        
        return redirect('register');
    }
}

