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

<nav class="md:w-[250px] h-screen bg-bg sticky flex flex-col  px-3 py-6 ">
    <div class="h-1/2 relative flex items-center justify-between flex-col">
        <div class="flex flex-col text-center text-3xl/6 font-bold text-white">
            VetFinder <span class="text-sm font-extralight text-right">dashboard</span>
        </div>
        <button id="dashboardBtn"
            class="absolute w-[30px] h-[30px] bg-secondary flex items-center justify-center right-[-25px] rounded-full cursor-pointer">
            <i id="arrow" class="fa-duotone fa-solid fa-arrow-right transition-transform duration-300"
                style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
        </button>

        <ul class="flex flex-col gap-4 text-white text-lg font-medium">
            <li onclick="location.href=''" class="cursor-pointer">
                <i class="fa-duotone fa-solid fa-id-card fa-xl"
                    style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                <span>Profil</span>
            </li>
            <li onclick="location.href=''" class="cursor-pointer">
                <i class="fa-solid fa-phone fa-xl" style="color: #ffffff;">
                </i>
                <span>Kontakt</span>
            </li>
            <li onclick="location.href=''" class="cursor-pointer">
                <i class="fa-duotone fa-solid fa-user fa-xl"
                    style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                <span>Konto</span>
            </li>
            <li onclick="location.href=''" class="relative cursor-pointer">
                <i class="fa-duotone fa-solid fa-house-medical fa-xl"
                    style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                <span>Klinika</span>
                <div
                    class="w-[18px] h-[18px] rounded-full bg-secondary absolute top-0 flex items-center justify-center">
                    <i class="fa-solid fa-trophy fa-2xs"></i>
                </div>
            </li>
        </ul>
    </div>
    <div class="h-1/2 relative flex items-center justify-end flex-col">
        <ul class="flex flex-col gap-4 text-white text-lg font-medium">
            <li onclick="location.href=''" class="cursor-pointer">
                <i class="fa-duotone fa-solid fa-right-from-bracket fa-2xl"
                    style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                Wyloguj
            </li>
            <li onclick="location.href=''" class="cursor-pointer">
                <i class="fa-duotone fa-solid fa-square-question fa-2xl"
                    style="--fa-primary-color: #caf0fe; --fa-secondary-color: #ffffff;"></i>
                </i>
                Pomoc
            </li>
        </ul>
    </div>
</nav>
