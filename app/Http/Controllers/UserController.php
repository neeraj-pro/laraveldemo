<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login() 
    {
        //echo "u r in login";
        return view('login');
    }

    public function register() 
    {
        echo "u r in register page";
    }
}
