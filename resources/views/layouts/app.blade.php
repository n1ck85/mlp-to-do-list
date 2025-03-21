<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MLP Task List') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div id="app" class="pt-3">
        <header class="container">
            <img src="assets/logo.png" alt="logo" class="logo">
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    @yield('notifications')
    </div>
    <footer class="container text-center">
        <p>&copy; {{ date('Y') }} All Rights Reserved.</p>
    </footer>
    @livewireScripts
</body>
</html>
