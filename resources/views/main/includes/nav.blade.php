<nav class="w-full h-[150px]">

    <div class="bg-bg w-full h-[50px]"></div>
    <div class="w-full h-[100px] flex items-center justify-between px-16">
        <a href="/" class="text-3xl font-extrabold">Vetfinder</a>
        <div class="flex items-center">
            {{-- TODO: Search from - kiedy zrobione będą wyniki i page --}}
            <form class="flex items-center" action="" method="post">
                @csrf
                <input type="text" name="" class="w-[500px] h-[50px] border-none bg-gray-400 text-white placeholder-white" placeholder="Kogo szukasz?">
                <button class="w-[50px] h-[50px] bg-primary text-white text-lg group">
                    <i class="fa-solid fa-magnifying-glass transform transition-transform duration-200 group-hover:scale-125"></i></button>
                </button>
            </form>
            <button class="w-[50px] h-[50px] bg-secondary text-white text-lg group">
                <i class="fa-solid fa-bars transform transition-transform duration-200 group-hover:scale-125"></i>
            </button>
            
        </div>
    </div>

</nav>