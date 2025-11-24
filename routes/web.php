<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

require __DIR__.'/auth.php';
