<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function notice()
    {
        return view('pages.administrator.auth.notice');
    }

    public function index() 
    {
        return view('pages.administrator.auth.login');
    }
}
