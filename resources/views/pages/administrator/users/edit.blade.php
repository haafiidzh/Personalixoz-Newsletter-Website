@extends('layouts.administrator.master')

@section('title')
    Edit User    
@endsection

@section('content')
    <x-breadcrumb :items="[
                ['title' => 'User', 'route' => 'administrator.users'],
                ['title' => 'Edit'],
            ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-3xl">Edit User</h1>
        <a wire:navigate href="{{ route('administrator.users') }}"
            class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
            <i class="text-xs fa-solid fa-arrow-left"></i> &nbsp; Kembali
        </a>
    </div>

    <livewire:administrator.users.edit :id="$id_pengguna">
    {{-- :id="$id" untuk mengirim data yang diambil controller dari view sebelumnya,
    lalu dikirim ke komponen livewire detail user yang digunakan dalam view nya nanti --}}
@endsection
