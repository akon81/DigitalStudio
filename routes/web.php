<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PortfolioController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/kontakt', function () {
    return view('contact', ['settings' => app(\App\Settings\GeneralSettings::class)]);
})->name('contact');

require __DIR__.'/auth.php';
