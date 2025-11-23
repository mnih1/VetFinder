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
    <div class="flex w-full flex-col items-center gap-4">
        <h2 class="text-center font-bold text-xl w-full">Twój profil</h2>
        <div class="py-8 px-14 bg-lighttext flex gap-7 rounded-md">
            <img src="{{ asset('img/noneProfilePic.avif') }}" alt="Zdjęcie profilowe">
            <div class="flex flex-col">
                <p>Imie i Nazwisko: {{ auth()->user()->vet_firstName . ' ' . auth()->user()->vet_lastName }}</p>
                <p>Kontakt:</p>
                <p><i class="fa-solid fa-envelope"></i> email: {email}</p>
                <p><i class="fa-solid fa-phone"></i> tel: {numer telefonu}</p>
                <p>Ilość opinii: {ilość opini}</p>
                <p>Średnia opinia: {średnia opinia w gwiazdkach}{średnia opinia w liczbie}</p>
            </div>
        </div>
    </div>
    <div class="flex w-full flex-col gap-4">
        <h2 class="text-center font-bold text-xl w-full">Ostatnie opinie</h2>
        <div class="w-full flex justify-around gap-4">
            <div class="w-80 h-60 flex flex-col gap-2 items-center">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse aperiam dolorum dolor autem
                    tempora sunt est cum. Impedit quia voluptatum, officia fugit doloremque porro pariatur, obcaecati at
                    accusamus optio eligendi cupiditate! Quidem a reprehenderit, nisi soluta doloremque odit adipisci
                    repellendus eveniet impedit corrupti quasi magni, earum veritatis atque sit accusantium expedita,
                    totam itaque officia qui? Repellendus natus deleniti suscipit!
                </p>
                <div class="flex gap-1">
                    <i class="fa-solid fa-star text-secondary"></i>
                    <i class="fa-solid fa-star text-secondary"></i>
                    <i class="fa-solid fa-star text-secondary"></i>
                    <i class="fa-solid fa-star text-secondary"></i>
                    <i class="fa-solid fa-star text-secondary"></i>
                </div>
                <h3 class="font-bold">Autor</h3>
            </div>
        </div>
    </div>
</div>
