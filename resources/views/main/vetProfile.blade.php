@extends('main.layouts.guest')

@section('content')
    <div class="w-full px-6 sm:px-9 md:px-16 lg:px-28 py-16 flex flex-col">
        <div class="w-full flex sm:flex-col lg:flex-row justify-between sm:items-center lg:items-start sm:gap-5 lg:gap-0">
            <img src="{{ asset('img/noneProfilePic.png') }}" alt=""
                class="sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px]">
            <div class="sm:w-full lg:w-fit flex flex-col gap-2 px-5">
                <h1 class="text-2xl font-extrabold">Imie Nazwisko</h1>
                <div class="w-full">RATING | Lokalizacja</div>
                <div class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet porro harum
                    praesentium deleniti qui molestias eligendi rem, sit necessitatibus reprehenderit error perspiciatis
                    ratione. Asperiores nulla suscipit eos praesentium, ex molestiae ad nobis blanditiis sint qui quae
                    corporis quo maxime voluptates sit error illo! Obcaecati quidem assumenda sit possimus quisquam sed
                    numquam, debitis earum, quis asperiores commodi in, aspernatur temporibus!</div>
            </div>
            <a href="#"
                class="w-[180px] h-[40px] bg-bg rounded-3xl flex items-center justify-center text-white hover:scale-110 duration-500 ease-out">Kontakt</a>
        </div>
        <div class="w-full flex flex-wrap justify-center gap-3 py-3">
            <div class="px-3 py-1 bg-gray-200 text-sm font-light rounded">Specjalizacja 1</div>
            <div class="px-3 py-1 bg-gray-200 text-sm font-light rounded">Specjalizacja 2</div>
            <div class="px-3 py-1 bg-gray-200 text-sm font-light rounded">Specjalizacja1 3</div>
            <div class="px-3 py-1 bg-gray-200 text-sm font-light rounded">Specjalizacja 4</div>
            <div class="px-3 py-1 bg-gray-200 text-sm font-light rounded">Specjalizacja 5</div>
        </div>
        <div class="w-full flex justify-center items-center flex-wrap gap-[3px] py-6">
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
            <div class="bg-gray-200 w-[300px] h-[300px]"></div>
        </div>
        <div class="w-full min-h-[350px] flex sm:items-center lg:items-start sm:flex-col lg:flex-row justify-center gap-4">
            <div class="sm:flex sm:justify-center lg:block sm:w-full lg:w-1/3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1425.3993403521793!2d18.99695207150063!3d50.24456720896524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716ce5e49d5e0eb%3A0x5ad03f8a8f76cf2!2zWmVzcMOzxYIgU3prw7PFgiBUZWNobmljem55Y2ggaSBPZ8OzbG5va3N6dGHFgmPEhWN5Y2ggTnIgMg!5e0!3m2!1spl!2spl!4v1745561652285!5m2!1spl!2spl"
                    width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" title="Lokalizacja"></iframe>
            </div>
            <div class="sm:w-full lg:w-1/3 lg:h-full flex flex-col items-center">
                <h2 class=" font-semibold text">Godziny otwarcia:</h3>
                    <ul>
                        <li>Poniedziałek</li>
                        <li>Wtorek</li>
                        <li>Środa</li>
                        <li>Czwartek</li>
                        <li>Piątek</li>
                        <li>Sobota</li>
                        <li>Niedziela</li>
                    </ul>
            </div>
        </div>
        <div class="w-full">
            <h2 class="text-3xl font-extrabold text-center py-12">Opinie</h2>
            <div class="w-full flex justify-around items-center flex-wrap">
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
                <div class="w-[350px] h-[250px] flex flex-col items-center justify-center gap-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus tempora sed
                        sapiente, dolore
                        adipisci suscipit quos ipsa nihil obcaecati illo praesentium aspernatur, quaerat minima a sequi,
                        mollitia excepturi! Voluptates, itaque?</p>
                    <hr class="w-1/2 bg-gray-300">
                    <div class="w-full flex justify-center">RATING</div>
                    <p class="text-sm font-bold">IMIE</p>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col items-center justify-center gap-6">
            <h2 class="text-3xl font-extrabold text-center py-12 text-primary">Oceń specjaliste!</h2>
            <form action="" class="w-3/4 bg-gray-300 px-7 py-4 flex flex-col items-center gap-2 rounded-xl">
                @csrf
                <div class="w-full flex justify-between gap-4">
                    <label for="email" class="w-1/2 flex flex-col gap-1">
                        Email:
                        <input type="email" name="email" id="email"
                            class="border-none bg-white px-1 h-11 w-full rounded-md">
                    </label>
                    <label for="name" class="w-1/2 flex flex-col gap-1">
                        Imie:
                        <input type="name" name="name" id="name"
                            class="border-none bg-white px-1 h-11 w-full rounded-md">
                    </label>
                </div>
                <label for="comment" class="w-full flex flex-col gap-1">
                    Komentarz:
                    <textarea name="comment" id="comment" cols="25" rows="10" class="border-none resize-none rounded-md"></textarea>
                </label>
                <input type="submit" value="Wyślij"
                    class="w-[200px] h-[50px] mt-5 mb-[9px] bg-primary rounded-3xl flex items-center justify-center text-white text-2xl font-medium hover:cursor-pointer hover:scale-105 duration-500 ease-out">
            </form>
        </div>
    </div>
@endsection
