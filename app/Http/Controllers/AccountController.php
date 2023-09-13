<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return 'This is my page';
    }

    public function job()
    {
        return 'This is my job';
    }

    public function hobbies()
    {
        return 'My hobbies';
    }

    public function settings()
    {
        return "<a href=''>Exit</a>";
    }
}
