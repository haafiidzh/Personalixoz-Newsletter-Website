<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/d89a21a1ce.js" crossorigin="anonymous"></script>
    <title>Tugas</title>
    @livewireStyles
</head>

<body class="font-poppins">
    <main class="bg-slate-300 min-h-screen">
        <livewire:administrator.auth.notice>
            its work
    </main>

    
    @livewireScripts
</body>

</html>
