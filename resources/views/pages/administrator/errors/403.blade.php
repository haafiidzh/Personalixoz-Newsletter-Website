@extends('layouts.administrator.master')

@section('title')
    Error BOS
@endsection

@section('content')
    {{-- <h1>ERROR 403</h1>
    <div class="flex justify-center bg-red-200">
        <div class="flex-col bg-blue-300 justify-center">
            <div>gambar</div>
            <div>pesan</div>
        </div>
    </div> --}}
    <div class="h-96 flex items-center justify-center ">
        <div class="max-w-md mx-auto p-5 bg-white rounded shadow-md">
            <h1 class="text-3xl font-bold text-red-600">Error 403: Forbidden</h1>
            <p class="my-4 text-lg text-gray-600">You don't have permission to access this resource.</p>
            {{-- <p class="text-sm text-gray-500">Please contact the system administrator if you believe this is an error.</p> --}}
            <a href="/administrator" class=" py-2 px-4 rounded-md bg-gray-800 text-gray-300 font-semibold hover:bg-slate-200 hover:text-gray-800 hover:shadow-lg active:bg-slate-300 transition-all duration-300 tracking-widest ">DASHBOARD</a>
        </div>
    </div>
@endsection
