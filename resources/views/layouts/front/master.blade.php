<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}
    <link href="{{ asset('assets/img/logo-kecil.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('assets/img/logo-kecil.ico') }}" rel="apple-touch-icon">

    <!-- Vendor CSS & Main CSS Files -->
    @vite([
        // Vendor CSS File
        'resources/css/front.css',
        'resources/js/front.js',
        // Main CSS File
        'resources/css/main.css',
        'resources/js/main.js',
    ])

    <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <title>@yield('title') - Personalixoz</title>

    @stack('styles')
    @livewireStyles

</head>

<body class="index-page">

    {{-- Header Navbar --}}
    <livewire:front.layouts.header>

        <main class="main">
            @yield('content')
        </main>

        {{-- Footer --}}
        <livewire:front.layouts.footer>

            <!-- Scroll Top -->
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Preloader -->
            {{-- <div id="preloader"></div> --}}

            <!-- Vendor JS Files -->
            <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

            @stack('scripts')
            @livewireScripts

</body>

</html>
