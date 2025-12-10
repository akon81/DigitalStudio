<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/polityka-prywatnosci', [PageController::class, 'show'])->defaults('slug', 'polityka-prywatnosci')->name('privacy-policy');

Route::get('/regulamin', [PageController::class, 'show'])->defaults('slug', 'regulamin')->name('terms-of-service');

Route::get('/kontakt', function () {
    return view('contact', ['settings' => app(\App\Settings\GeneralSettings::class)]);
})->name('contact');

Route::get('/sitemap', SitemapController::class)->name('sitemap');

require __DIR__.'/auth.php';
