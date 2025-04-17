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
    <!-- Wyświetlanie wyników -->
    @foreach ($results as $user)
    <div class="w-full h-[150px] px-8 py-4 bg-red flex gap-5 shadow-md rounded-md">
        <img src="{{ asset('img/noneProfilePic.png') }}" alt=""
            class="h-full flex justify-center items-center">
        <div class="h-full w-auto flex justify-between flex-col">
            <div class="w-full flex flex-col">
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
        {{ $results->links() }}  <!-- Wbudowana paginacja Livewire -->
    </div>
</div>
