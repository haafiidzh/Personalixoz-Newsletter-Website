<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('assets/img/logo-kecil.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logo-kecil.ico') }}">
    
    {{-- Tailwind CSS --}}
    @vite([
            'resources/css/app.css',
            'resources/js/app.js'
        ])

    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/d89a21a1ce.js" crossorigin="anonymous"></script>
    
    <title>@yield('title') | Personalixoz</title>

    @stack('styles')
    @livewireStyles
</head>

<body class="font-poppins">
    <div x-data="{ isOpen: true }">

        {{-- Sidebar --}}
        <livewire:administrator.layouts.sidebar>

        <div class="flex flex-col flex-grow">
            {{-- Header --}}
            <livewire:administrator.layouts.header>

                {{-- Main Content --}}
                <main :class="isOpen ? 'ml-52' : 'ml-20'"
                    class="px-20 pt-5 transition-all duration-300 bg-slate-200 flex-grow min-h-screen">
                    @yield('content')
                </main>
        </div>
        
        {{-- Footer --}}
        <livewire:administrator.layouts.footer>
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
