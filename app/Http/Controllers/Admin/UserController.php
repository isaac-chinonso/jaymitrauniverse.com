<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    //Save Users Function
    public function register(Request $request)
    {
        // Validation
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->status = 1;
        $user->save();

        Auth::login($user);

        $user = Auth::user();

        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->route('admindashboard');
    }

    // Login Function
    public function postlogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            
            return redirect()->intended(route('admindashboard'));
        }

        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    // Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
