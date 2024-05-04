<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @include('partials.style')
</head>
<body>
    @include('partials.navbar')
    <div id="layoutSidenav">
        @include('partials.sidebar')
        <div class="container mt-3">
            @yield('conten')
        </div>/.container.mt-3
    </div>/#layoutSidenav

    @include('partials.script')
</body>
</html>
