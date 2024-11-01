<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function create()
    {
        return view('pages.administrator.news.category.create');
    }

    public function index()
    {
        return view('pages.administrator.news.category.index');
    }
}
