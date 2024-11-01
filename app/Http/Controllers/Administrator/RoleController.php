<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        return view('pages.administrator.roles.create');
    }

    public function edit($id_role)
    {
        return view('pages.administrator.roles.edit',compact('id_role'));
    }

    public function index()
    {
        return view('pages.administrator.roles.index');
    }

}
