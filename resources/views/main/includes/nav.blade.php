<nav class="w-full h-[150px]">

    <div class="bg-bg w-full h-[50px]"></div>
    <div class="w-full h-[100px] flex items-center justify-between px-4 md:px-16">
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
            <button class="w-[50px] h-[50px] bg-secondary text-white text-lg group" aria-label="menu"
                onclick="showMenu()">
                <i class="fa-solid fa-bars transform transition-transform duration-200 group-hover:scale-125"
                    id="barsIcon"></i>
                <i class="fa-solid fa-xmark transform transition-transform duration-200 group-hover:scale-125 !hidden"
                    id="xmarkMenu"></i>
            </button>
            <div class="absolute max-md:w-[60vw] md:w-[400px] md:h-auto bg-bg top-[65px] z-10 right-0 gap-3 flex flex-col text-white py-3 px-6 
            transform scale-0 opacity-0 pointer-events-none transition-all duration-300 ease-in-out"
                id="menu">
                <ul class="flex flex-col gap-1">
                    <a href="#">
                        <li>O nas</li>
                    </a>
                    <a href="#">
                        <li>Kontakt</li>
                    </a>
                    <a href="#">
                        <li>FAQ</li>
                    </a>
                </ul>
                <h2 class="font-bold text-lg border-b border-b-white">Dla weterynarzy</h2>
                <ul class="flex flex-col gap-1">
                    <a href="{{ route('login') }}">
                        <li class="font-semibold">Zaloguj</li>
                    </a>
                    <a href="{{ route('register') }}">
                        <li class="font-semibold">Zarejestruj</li>
                    </a>
                </ul>
                <h2 class="font-bold text-lg border-b border-b-white">Dla Klinik</h2>
                <ul class="flex flex-col gap-1">
                    <a href="#">
                        <li>Co oferujemy</li>
                    </a>
                    <a href="{{ route('login') }}">
                        <li class="font-semibold">Zaloguj</li>
                    </a>
                    <a href="{{ route('register') }}">
                        <li class="font-semibold">Zarejestruj</li>
                    </a>
                </ul>
            </div>

        </div>
    </div>

</nav>
