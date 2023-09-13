<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return "Login form";
    }

    public function register()
    {
        return "register form";
    }
}
