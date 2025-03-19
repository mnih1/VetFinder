<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $vet_firstName;
    public string $vet_lastName;
    public string $vet_loginEmail;
    public string $password;
    public string $password_confirmation;

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'vet_firstName' => ['required', 'string', 'max:255'],
            'vet_lastName' => ['required', 'string', 'max:255'],
            'vet_loginEmail' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">

        <h3 class="my-5 text-center font-extrabold text-2xl">Zarejestruj się</h3>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Imie')" />
            <x-text-input wire:model="vet_firstName" id="name" class="block mt-1 w-full" type="text"
                name="vet_firstName" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="lastName" :value="__('Nazwisko')" />
            <x-text-input wire:model="vet_lastName" id="lastName" class="block mt-1 w-full" type="text"
                name="vet_lastName" required autofocus autocomplete="vet_lastName" />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="vet_loginEmail" id="email" class="block mt-1 w-full" type="email"
                name="vet_loginEmail" required autocomplete="vet_loginEmail" />
            <x-input-error :messages="$errors->get('vet_loginEmail')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Hasło')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password" name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Potwierdź hasło')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}" wire:navigate>
                {{ __('Masz ju konto?') }}
            </a>

            <button type="submit"
                class="flex justify-center items-center text-lg bg-primary text-white py-2 px-6 rounded-full ml-3">
                Zarejestruj się
            </button>
        </div>
    </form>
</div>
