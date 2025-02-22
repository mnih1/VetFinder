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

        <div class="w-full h-[75vh] flex">
            <div class="w-1/2 h-full pl-16 flex items-center">
                <h2 class="text-5xl font-extrabold leading-[55px]">Znajdź najlepszego <br> specjaliste dla <br><span class="text-primary">swojego zwierzęcia!</span></h2>
            </div>
            <div class="w-1/2 h-full bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('img/hero.jpg') }}'); clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 20% 0);">
            </div>        
        </div>
        <div class="w-full px-16 py-8 flex justify-center items-center gap-10 flex-col">
            <h2 class="text-4xl font-bold">Najwyżej oceniani specjaliści!</h2>
            <div class="flex justify-between items-center gap-11">
                {{-- TODO: Gdy będzie system logowania i profili --}}
                <div class="w-[250px] h-[300px] rounded-2xl shadow-2xl flex flex-col justify-around items-center py-3">
                    <img src="{{ asset('img/noneProfilePic.png') }}" class="w-[100px] h-[100px]">
                    <div>
                        <p class="text-xl font-extrabold">Andrzej Nowak</p>
                        <p class="text-center">Katowice</p>
                    </div>
                    <a href="#" class="w-[120px] h-[40px] bg-primary rounded-3xl flex items-center justify-center text-white hover:scale-110 duration-500 ease-out">Więcej</a>
                </div>
                <div class="w-[250px] h-[300px] rounded-2xl shadow-2xl flex flex-col justify-around items-center py-3">
                    <img src="{{ asset('img/noneProfilePic.png') }}" class="w-[100px] h-[100px]">
                    <div>
                        <p class="text-xl font-extrabold">Andrzej Nowak</p>
                        <p class="text-center">Katowice</p>
                    </div>
                    <a href="#" class="w-[120px] h-[40px] bg-primary rounded-3xl flex items-center justify-center text-white hover:scale-110 duration-500 ease-out">Więcej</a>
                </div>
                <div class="w-[250px] h-[300px] rounded-2xl shadow-2xl flex flex-col justify-around items-center py-3">
                    <img src="{{ asset('img/noneProfilePic.png') }}" class="w-[100px] h-[100px]">
                    <div>
                        <p class="text-xl font-extrabold">Andrzej Nowak</p>
                        <p class="text-center">Katowice</p>
                    </div>
                    <a href="#" class="w-[120px] h-[40px] bg-primary rounded-3xl flex items-center justify-center text-white hover:scale-110 duration-500 ease-out">Więcej</a>
                </div>
                <div class="w-[250px] h-[300px] rounded-2xl shadow-2xl flex flex-col justify-around items-center py-3">
                    <img src="{{ asset('img/noneProfilePic.png') }}" class="w-[100px] h-[100px]">
                    <div>
                        <p class="text-xl font-extrabold">Andrzej Nowak</p>
                        <p class="text-center">Katowice</p>
                    </div>
                    <a href="#" class="w-[120px] h-[40px] bg-primary rounded-3xl flex items-center justify-center text-white hover:scale-110 duration-500 ease-out">Więcej</a>
                </div>
            </div>
        </div>
        @include('main.includes.footer')
    </body>
</html>