@extends('main.layouts.guest')

@section('head')
    <link rel="preload" href="{{ asset('img/hero.avif') }}" as="image" type="image/avif" />
@endsection

@section('content')
    <div class="w-full h-[75vh] flex items-center justify-between ">
        {{-- FIXME: sprowadzić do jednego diva / zwiększyć wydajność --}}
        {{-- <div class="max-lg:hidden max-lg:w-full lg:w-1/2 h-full pl-16 flex items-center">
            <h2 class="text-5xl font-extrabold leading-[55px]">Znajdź najlepszego <br> specjaliste dla <br><span
                    class="text-primary">swojego zwierzaka!</span></h2>
        </div>
        <div class="max-lg:hidden lg:w-1/2 h-full bg-center bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('img/hero.avif') }}'); clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 20% 0);">
        </div>
        <div class="lg:hidden w-full h-full bg-center bg-no-repeat bg-cover max-lg:flex items-center justify-center"
            style="background-image: url('{{ asset('img/hero.avif') }}');">
            <h2 class="text-5xl font-extrabold text-center leading-[55px] text-white">Znajdź najlepszego <br>
                specjaliste dla <br><span class="text-secondary">swojego zwierzaka!</span></h2>
        </div> --}}
        <div class="max-lg:absolute lg:static z-10 max-lg:flex max-lg:items-center max-lg:justify-center">
            <h2 class="max-lg:text-white max-lg:items-center text-5xl font-extrabold leading-[55px] pl-16 relative">
                Znajdź najlepszego <br> specjaliste dla
                <br><span class="text-primary">swojego zwierzaka!</span>
            </h2>
        </div>
        <img src="{{ asset('img/hero.avif') }}" alt="hero photo" class="h-full max-lg:w-full lg:w-1/2 object-cover clippath">
    </div>
    <div class="w-full px-16 py-8 flex justify-center items-center gap-10 flex-col">
        <h2 class="text-4xl font-bold">Najwyżej oceniani specjaliści!</h2>
        <div class="flex justify-around items-center gap-11 flex-wrap">
            {{-- TODO: Gdy będzie system logowania i profili --}}

            @foreach ($users->take(4) as $user)
                <div class="w-[250px] h-[300px] rounded-2xl shadow-2xl flex flex-col justify-around items-center py-3">
                    <img src="{{ asset('img/noneProfilePic.avif') }}" class="w-[100px] h-[100px]"
                        alt="Zdjęcie profiolowe: {{ $user->full_name }}">
                    <div>
                        <p class="text-lg font-bold">{{ $user->full_name }}</p>
                        <p class="text-center">Katowice</p>
                    </div>
                    <a href="#"
                        class="w-[120px] h-[40px] bg-bg rounded-3xl flex items-center justify-center text-white hover:scale-110 duration-500 ease-out">Więcej</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
