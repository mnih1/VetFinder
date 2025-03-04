<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VetFinder</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{ asset('miniLogo.png') }}">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        @include('main.includes.nav')

        <div class="w-full px-16 py-7 flex flex-col justify-center gap-4">
            <h3 class="text-3xl font-bold">Wynik twoich wyszukiwa:</h3>
            <form action="" method="POST" class="flex gap-3">
                @csrf
                <label for="city" class="flex justify-center flex-col gap-2">
                    Miasto:
                    <input type="text" id="city" name="city">
                </label>
                <label for="specialization" class="flex justify-center flex-col gap-2">
                    Specjalizacja:
                    {{-- tu ma by dropdown po wprowadzeniu danych do bazy --}}
                    <input type="text" name="specialization" id="specialization">
                </label>
                <label for="rating" class="flex justify-center flex-col gap-2">
                    Min. ocena:
                    <input type="number" id="rating" name="rating">
                </label>
            </form>
        </div>
        
        @include('main.includes.footer')
    </body>
</html>