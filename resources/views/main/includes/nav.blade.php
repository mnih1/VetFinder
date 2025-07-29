<nav class="w-full h-[150px]">

    <div class="bg-bg w-full h-[50px]"></div>
    <div class="w-full h-[100px] flex items-center justify-between px-4 md:px-16">
        <a href="/" class="h-full text-3xl font-extrabold">
            <img src="{{ asset('img/VetFinder-logo-text.avif') }}"
                alt="Logo VetFinder" class="h-[100px] hidden md:inline">
            <img src="{{ asset('img/VetFinder-logo.avif') }}"
                alt="Logo VetFinder" class="h-[100px] inline md:hidden">
            </a>
        <div class="flex items-center">
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
            <button class="w-[50px] h-[50px] bg-secondary text-white text-lg group" aria-label="menu">
                <i class="fa-solid fa-bars transform transition-transform duration-200 group-hover:scale-125"></i>
            </button>

        </div>
    </div>

</nav>
