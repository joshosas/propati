<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // SHOW REGISTER FORM
    public function register()
    {
        return view('users.register');
    }

    // CREATE USER ACCOUNT

    // SHOW LOGIN FORM
    public function login()
    {
        return view('users.login');
    }
}
