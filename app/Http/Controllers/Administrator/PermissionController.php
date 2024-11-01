<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    
    public function create()
    {
        return view('pages.administrator.permissions.create');
    }

    public function index()
    {
        return view('pages.administrator.permissions.index');
    }
}
