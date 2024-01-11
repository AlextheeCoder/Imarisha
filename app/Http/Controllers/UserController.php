<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(){

        return view('Farmer.Auth.register');

    }

    public function login(){

        return view('Farmer.Auth.login');
    }

    //--------------------------------------------------------------------- LogOut Users ---------------------------------------------------------------------
    public function logout(Request $request)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Clear the Ethereum address from the user's database record
            $user = $request->user();
            $user->save();
        }
    
        // Perform the regular logout actions
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/')->with('message', 'You have been logged out and wallet disconnected!');
    }

    //--------------------------------------------------------------------- Store Users ---------------------------------------------------------------------
    public function store(Request $request) {
        $formFields = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'gender' => ['required'],
            'dob' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'number'=> ['required'],
            'county'=> ['required'],
            'subcounty'=> ['required'],
            'role'=> ['required'],
            'password' => ['required', 'min:6']
        ]);
    
        //get profile image
        if ($request->hasFile('profile')) {
            $formFields['profile'] = $request->file('profile')->store('profiles', 'public');
        }
    
        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        info($formFields);
        $user = User::create($formFields);
        $user->save();
        auth()->login($user);
        return redirect('/')->with('message', 'Registration successful!');
     
    }


    //---------------------------------------------------------------------Authenticate---------------------------------------------------------------------
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
    
        // Retrieve the user instance directly from the database
        $user = User::where('email', $formFields['email'])->first();
    
        // Check if the user exists and the password is correct
        if ($user && Hash::check($formFields['password'], $user->password)) {
            $user->save();
             // Log the user in
             auth()->login($user);
        
             // Clear the email from the session
             $request->session()->forget('email');
     
             return redirect('/')->with('message', 'You are now logged in!');

        } else {
            return redirect('/login')->with('error', 'Wrong credentials!!');
        }
    }

    


}
