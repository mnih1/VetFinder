<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: true }" :class="open ? 'md:w-[250px]' : 'md:w-[100px]'"
    class="h-screen bg-bg sticky flex flex-col  px-3 py-6 transition-all duration-500">
    <div class="h-1/2 relative flex items-center justify-between flex-col">
        <a href="{{ route('dashboard') }}" wire:navigate>
            <h1 x-show="open" class="flex flex-col text-center text-3xl/6 font-bold text-white">
                VetFinder <span class="text-sm font-extralight text-right">dashboard</span>
            </h1>
            <h1 x-show="!open" class="flex flex-col text-center text-3xl/6 font-bold text-white">
                VF
            </h1>
        </a>
        <button @click="open = !open"
            class="absolute w-[30px] h-[30px] bg-secondary flex items-center justify-center right-[-25px] rounded-full cursor-pointer transition-transform duration-600">
            <i :class="open ? 'rotate-0' : 'rotate-180'"
                class="fa-duotone fa-solid fa-arrow-right transition-transform duration-600"
                style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
        </button>


        <ul class="flex flex-col gap-4 text-white text-lg font-medium">
            <li>
                <a href="{{ route('dashboardProfile') }}" wire:navigate>
                    <i class="fa-duotone fa-solid fa-id-card fa-xl"
                        style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                    <span x-show="open" x-transition.opacity.duration.300ms>Profil</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboardContact') }}" wire:navigate class="flex items-center gap-2 text-white">
                    <i class="fa-solid fa-phone fa-xl"></i>
                    <span x-show="open" x-transition.opacity.duration.300ms>Kontakt</span>
                </a>
            </li>


            <li>
                <a href="{{ route('dashboardAccont') }}" wire:navigate>
                    <i class="fa-duotone fa-solid fa-user fa-xl"
                        style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                    <span x-show="open" x-transition.opacity.duration.300ms>Konto</span>
                </a>
            </li>
            <li class="relative cursor-pointer">
                <a href="{{ route('dashboardClinic') }}" wire:navigate>
                    <i class="fa-duotone fa-solid fa-house-medical fa-xl"
                        style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                    <span x-show="open" x-transition.opacity.duration.300ms>Klinika</span>
                </a>
                <div
                    class="w-[18px] h-[18px] rounded-full bg-secondary absolute top-0 flex items-center justify-center">
                    <i class="fa-solid fa-trophy fa-2xs"></i>
                </div>
            </li>
        </ul>
    </div>
    <div class="h-1/2 relative flex items-center justify-end flex-col">
        <ul class="flex flex-col gap-4 text-white text-lg font-medium">
            <li wire:click="logout" class="cursor-pointer">
                <i class="fa-duotone fa-solid fa-right-from-bracket fa-2xl"
                    style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                <span x-show="open" x-transition.opacity.duration.300ms>Wyloguj</span>
            </li>
            <li onclick="location.href=''" class="cursor-pointer">
                <i class="fa-duotone fa-solid fa-square-question fa-2xl"
                    style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                </i>
                <span x-show="open" x-transition.opacity.duration.300ms>Pomoc</span>
            </li>
        </ul>
    </div>
</nav>
