@extends('layouts.administrator.master')

@section('title')
    Daftar Kategori    
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'News', 'route' => 'administrator.news'],
        ['title' => 'Category'],
    ]" />

    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-3xl">News Category</h1>
        @can('create-news-category')
            <a href="{{ route('administrator.news.category.create') }}"
                class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
                <i class="text-xs fa-solid fa-plus"></i> &nbsp; Tambah Kategori
            </a>
        @endcan
    </div>

    <livewire:administrator.news.category.table>
@endsection
