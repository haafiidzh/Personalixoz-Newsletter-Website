<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.administrator.news.index');
    }

    public function create()
    {
        return view('pages.administrator.news.create');
    }

    public function edit($id_berita)
    {
        return view('pages.administrator.news.edit',['id_berita' => $id_berita]);
    }

    public function show($id_berita)
    {
        return view('pages.administrator.news.detail',['id_berita' => $id_berita]);
    }
}
