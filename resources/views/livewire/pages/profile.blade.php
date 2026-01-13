<div class="flex gap-5 flex-col w-full h-auto snap-y">
    <h1 class="font-extrabold text-3xl text-center">Profil</h1>

    <div class="py-8 px-14 bg-lighttext flex gap-7 rounded-md">
        <img src="{{ asset('img/noneProfilePic.avif') }}" alt="Zdjęcie profilowe">
        <div class="w-full flex flex-col">
            <form action="" class="w-full flex flex-col gap-2">
                @csrf
                <label for="firstName" class="flex flex-col gap-1">
                    Imie:
                    <input type="text" id="firstName" name="" value="{{ auth()->user()->vet_firstName }}"
                        class="w-full border-none rounded">
                </label>
                <label for="lastName" class="flex flex-col gap-1">
                    Nazwisko:
                    <input type="text" id="lastName" name="" value="{{ auth()->user()->vet_lastName }}"
                        class="w-full border-none rounded">
                </label>
                <button type="submit" class="py-3 px-6 w-44 bg-bg text-white rounded-3xl">
                    Zapisz
                </button>
            </form>
        </div>
    </div>
    <form action="" class="flex flex-col gap-2">
        <label for="description" class="flex flex-col gap-1">
            Opis:
            <textarea name="" id="description" cols="30" rows="10" class="border-none resize-none"></textarea>
        </label>
        <button type="submit" class="py-3 px-6 w-44 bg-bg text-white rounded-3xl">
            Zapisz
        </button>
    </form>
    <div class="w-full">
        <h2 class="text-center font-bold text-xl w-full">Zdjęcia</h2>
        {Pitu pitu}
    </div>
</div>
