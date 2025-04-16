<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield("head")

    <title>@yield("title", 'VetFinder')</title>
    <meta name="description" content="VetFinder to nowoczesna aplikacja umożliwiająca szybkie i wygodne wyszukiwanie weterynarzy według lokalizacji i specjalizacji. Oceniaj, przeglądaj profile i znajdź najlepszego specjalistę dla swojego pupila.">


    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{ asset('miniLogo.png') }}">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans">
    @include('main.includes.nav')

    @yield("content")
    
    @include('main.includes.footer')
</body>

</html>
