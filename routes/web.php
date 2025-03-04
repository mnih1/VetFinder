<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Tymczasowe:
Route::get('/wyniki-wyszukiwania',function(){
    return view('main.results');
})->name('results');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
