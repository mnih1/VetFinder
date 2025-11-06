<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')

    <title>@yield('title', 'VetFinder')</title>

    {{-- OG TAGS --}}
    <meta property="og:title" content="@yield('title', 'VetFinder')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('img/VetFinder-logo-text.avif') }}">
    <meta property="og:description"
        content="VetFinder to nowoczesna aplikacja umożliwiająca szybkie i wygodne wyszukiwanie weterynarzy według lokalizacji i specjalizacji. Oceniaj, przeglądaj profile i znajdź najlepszego specjalistę dla swojego pupila.">

    <meta name="description"
        content="VetFinder to nowoczesna aplikacja umożliwiająca szybkie i wygodne wyszukiwanie weterynarzy według lokalizacji i specjalizacji. Oceniaj, przeglądaj profile i znajdź najlepszego specjalistę dla swojego pupila.">

    @livewireStyles

    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{ asset('miniLogo.png') }}">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/mainNav.js'])
</head>

<body class="antialiased font-sans">
    @include('main.includes.nav')

    @yield('content')

    @include('main.includes.footer')
    @livewireScripts
</body>

</html>
