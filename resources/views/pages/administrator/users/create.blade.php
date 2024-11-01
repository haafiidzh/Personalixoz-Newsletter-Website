@extends('layouts.administrator.master')

@section('title')
    Tambah User
@endsection

@section('content')
    <x-breadcrumb :items="[['title' => 'User', 'route' => 'administrator.users'], ['title' => 'Create']]" />

    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-3xl">Tambah User</h1>
        @can('view-users')
            <a wire:navigate href="{{ route('administrator.users') }}"
                class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
                <i class="text-xs fa-solid fa-arrow-left"></i> &nbsp; Kembali
            </a>
        @endcan
    </div>

    <livewire:administrator.users.create>
@endsection
