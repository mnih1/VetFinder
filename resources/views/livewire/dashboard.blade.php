<div class="flex gap-5 flex-col w-full h-full">
    <h1 class="font-extrabold text-3xl">Cześć, {{ auth()->user()->vet_firstName }}!</h1>

    <div class="flex w-full flex-col gap-4">
        <h2 class="text-center font-bold text-xl w-full">Statystyki</h2>
        <div class="flex flex-wrap justify-around gap-4">
            <div class="flex flex-col items-center justify-center w-80 h-60 bg-secondary rounded-2xl">
                <h3 class="font-bold text-2xl">{230}</h3>
                <p class="text-lg">Liczba kliknięć profilu</p>
            </div>
            <div class="flex flex-col items-center justify-center w-80 h-60 bg-lighttext rounded-2xl">
                <h3 class="font-bold text-2xl">{230}</h3>
                <p class="text-lg">Liczba wyświetleń kontaktów</p>
            </div>
            <div class="flex flex-col items-center justify-center w-80 h-60 bg-primary rounded-2xl">
                <h3 class="font-bold text-2xl">{121}</h3>
                <p class="text-lg">Liczba opinii w tym miesiącu</p>
            </div>
        </div>
    </div>
</div>
