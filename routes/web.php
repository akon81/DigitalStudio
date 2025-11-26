<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/kontakt', function () {
    return view('contact', ['settings' => app(\App\Settings\GeneralSettings::class)]);
})->name('contact');

require __DIR__.'/auth.php';
