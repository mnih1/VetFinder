<nav class="w-full h-[150px] sticky top-0 z-10">

    <div class="bg-bg w-full h-[50px]"></div>
    <div class="w-full h-[100px] flex items-center justify-between px-4 md:px-16 bg-white">
        <a href="/" class="h-full text-3xl font-extrabold">
            <img src="{{ asset('img/VetFinder-logo-text.avif') }}" alt="Logo VetFinder" class="h-[100px] hidden md:inline">
            <img src="{{ asset('img/VetFinder-logo.avif') }}" alt="Logo VetFinder" class="h-[100px] inline md:hidden">
        </a>
        <div class="flex items-center relative">
            {{-- TODO: Search from - kiedy zrobione będą wyniki i page --}}
            <form class="flex items-center" action="" method="post">
                @csrf
                <input type="text" name=""
                    class="hidden md:block h-[50px] border-none bg-gray-500 text-white placeholder-white"
                    placeholder="Kogo szukasz?" />

                <button class="w-[50px] h-[50px] bg-primary text-white text-lg group">
                    <i class="fa-solid fa-magnifying-glass transform transition-transform duration-200 group-hover:scale-125"
                        aria-label="Szukaj"></i></button>
                </button>
            </form>
            <button class="w-[50px] h-[50px] bg-secondary text-white text-lg group flex items-center justify-center"
                aria-label="menu" onclick="showMenu()" id='menuBtn'>
                <i class="fa-solid fa-bars transform transition-transform duration-200 group-hover:scale-125"
                    id="barsIcon"></i>
                <i class="fa-solid fa-xmark transform transition-transform duration-200 group-hover:scale-125 !hidden"
                    id="xmarkMenu"></i>
            </button>
            <div class="absolute max-md:w-[60vw] md:w-[400px] md:h-auto bg-bg top-[75px] z-10 right-0 gap-3 flex flex-col text-white py-3 px-6 transform scale-0 opacity-0 pointer-events-none transition-all duration-300 ease-in-out"
                id="menu">
                <ul class="flex flex-col gap-1">
                    <li class="w-full h-auto cursor-pointer" onclick="location.href=''">
                        O nas
                    </li>
                    <li class="w-full h-auto cursor-pointer" onclick="location.href=''">
                        Kontakt
                    </li>
                    <li class="w-full h-auto cursor-pointer" onclick="location.href=''">
                        FAQ
                    </li>
                </ul>
                <h2 class="font-bold text-lg border-b border-b-white">Dla weterynarzy</h2>
                <ul class="flex flex-col gap-1">
                    <li class="font-semibold w-full h-auto cursor-pointer"
                        onclick="location.href='{{ route('login') }}'">
                        Zaloguj
                    </li>
                    <li class="font-semibold w-full h-auto cursor-pointer"
                        onclick="location.href='{{ route('register') }}'">
                        Zarejestruj
                    </li>
                </ul>
                <h2 class="font-bold text-lg border-b border-b-white">Dla Klinik</h2>
                <ul class="flex flex-col gap-1">
                    <li class="w-full h-auto cursor-pointer" onclick="location.href=''">
                        Co oferujemy
                    </li>
                    <li class="font-semibold w-full h-full cursor-pointer"
                        onclick="location.href='{{ route('login') }}'">
                        Zaloguj
                    </li>
                    <li class="font-semibold w-full h-full cursor-pointer"
                        onclick="location.href='{{ route('register') }}'">
                        <a href="{{ route('register') }}">
                            Zarejestruj
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

</nav>
