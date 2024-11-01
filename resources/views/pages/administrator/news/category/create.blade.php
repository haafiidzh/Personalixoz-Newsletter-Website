@extends('layouts.administrator.master')

@section('title')
    Tambah Kategori    
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'News', 'route' => 'administrator.news'],
        ['title' => 'Category', 'route' => 'administrator.news.category'],
        ['title' => 'Create'],
    ]" />

    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-3xl">Tambah Kategori</h1>
        @can('view-news-category')
            <a wire:navigate href="{{ route('administrator.news.category') }}"
                class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
                <i class="text-xs fa-solid fa-arrow-left"></i> &nbsp; Kembali
            </a>
        @endcan
    </div>

    <livewire:administrator.news.category.create>
@endsection
