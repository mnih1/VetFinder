<?php

// Livewire
use App\Livewire\Account;
use App\Livewire\Clinic;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\Profile;
// Models
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();

    return view('welcome', ['users' => $users]);
});

// Tymczasowe:
Route::get('/wyniki-wyszukiwania', function () {
    $users = User::all();

    return view('main.results', ['users' => $users]);
})->name('results');

Route::get('/vetprofile', function () {
    return view('main.vetProfile');
});

Route::get('/dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/dashboard/contact', Contact::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboardContact');

Route::get('/dashboard/profile', Profile::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboardProfile');

Route::get('/dashboard/clinic', Clinic::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboardClinic');

Route::get('/dashboard/account', Account::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboardAccont');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
