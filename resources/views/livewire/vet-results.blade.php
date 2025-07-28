<div class="w-full px-6 sm:px-9 md:px-16 lg:px-28 py-16 flex flex-col justify-center gap-4">
    <h3 class="text-3xl font-bold">Wynik twoich wyszukiwań:</h3>
    <div class="w-full">
        <button class="w-[50px] h-[50px] bg-primary text-white text-lg group md:hidden" onclick="showFilters()"><i
                class="fa-solid fa-filter transform transition-transform duration-200 group-hover:scale-125"
                aria-label="filtry"></i></button>
        <form action="" method="POST" class="gap-3 flex-wrap hidden md:flex">
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
    <!-- Wyświetlanie wyników -->
    @foreach ($results as $user)
        <div
            class="w-full min-h-[182px] md:h-auto px-8 py-4 bg-red flex gap-5 shadow-md rounded-md flex-col md:flex-row items-center md:items-start">
            <img src="{{ asset('img/noneProfilePic.png') }}" alt=""
                class="h-[150px] w-[150px] flex justify-center items-center">
            <div class="h-full w-auto flex justify-between flex-col">
                <div class="w-full flex flex-col items-center md:items-start gap-2 md:gap-0">
                    <h1 class="text-2xl font-bold">{{ $user['vet_firstName'] . ' ' . $user['vet_lastName'] }}</h1>
                    <div>
                        RATING | ADRESS
                    </div>
                </div>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos excepturi ratione
                    quibusdam numquam iusto magnam non assumenda, consequatur, fugiat, cupiditate soluta.
                    Similique eaque illum laboriosam ea molestias consequuntur incidunt voluptatibus?
                </p>
            </div>
            <div class="w-[120px]">
                <a href="#"
                    class="w-[120px] h-[40px] bg-bg rounded-3xl flex items-center justify-center text-white hover:scale-110 duration-500 ease-out">Więcej</a>
            </div>
        </div>
    @endforeach

    <!-- Paginacja -->
    <div class="w-full flex justify-center mt-5">
        {{ $results->links() }} <!-- Wbudowana paginacja Livewire -->
    </div>
</div>
