<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // SHOW REGISTER FORM
    public function register()
    {
        return view('users.register');
    }

    // CREATE USER ACCOUNT
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' => ['required', 'min:2'],
            'last_name' => ['required', 'min:2'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);
        // Create User
        $user = User::create($formFields);
        // Login User Automatically
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
    }

    // LOGOUT USER
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User Logged Out Successfully');
    }

    // SHOW LOGIN FORM
    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', "You have logged in successfully");
        }

        return back()->withErrors(['email' => 'Incorrect Email or Password'])->onlyInput('email');
    }
}
