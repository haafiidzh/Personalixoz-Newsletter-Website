@extends('layouts.administrator.master')

@section('title')
    Tambah Role
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'Role', 'route' => 'administrator.roles'],
        ['title' => 'Create'],
    ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-3xl">Tambah Role</h1>
        @can('view-roles')
            <a wire:navigate href="{{ route('administrator.roles') }}"
                class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
                <i class="text-xs fa-solid fa-arrow-left"></i> &nbsp; Kembali
            </a>
        @endcan
    </div>

    <livewire:administrator.roles.create>
@endsection
