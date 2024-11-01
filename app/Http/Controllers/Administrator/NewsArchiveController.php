<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsArchiveController extends Controller
{
    public function index()
    {
        return view('pages.administrator.news.archive.index');
    }
}
