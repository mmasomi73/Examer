<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
