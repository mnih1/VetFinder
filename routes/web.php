<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

Route::get('/', function() {
    $users = User::all();
    return view('welcome', ['users' => $users]);
});

// Tymczasowe:
Route::get('/wyniki-wyszukiwania', function () {
    $users = User::all();
    return view('main.results', ['users' => $users]);
})->name('results');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
