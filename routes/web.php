<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/polityka-prywatnosci', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/kontakt', function () {
    return view('contact', ['settings' => app(\App\Settings\GeneralSettings::class)]);
})->name('contact');

Route::get('/sitemap', SitemapController::class)->name('sitemap');

require __DIR__.'/auth.php';
