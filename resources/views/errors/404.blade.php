@extends('layouts.app')

@section('meta_title', 'Strona nie znaleziona - 404 | DigitalStudio')
@section('meta_description', 'Przepraszamy, ale strona, której szukasz nie istnieje. Wróć do strony głównej lub skorzystaj z nawigacji.')

@section('content')
<section class="py-20 bg-gray-50 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <svg class="mx-auto h-32 w-32 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            
            <h1 class="text-gray-900 font-black font-heading text-6xl md:text-7xl mb-6">404</h1>
            <h2 class="text-gray-900 font-bold font-heading text-2xl md:text-3xl mb-4">Strona nie znaleziona</h2>
            <p class="text-gray-500 text-lg mb-8 max-w-xl mx-auto">
                Przepraszamy, ale strona, której szukasz nie istnieje lub została przeniesiona. 
                Sprawdź adres URL lub wróć do strony głównej.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('home') }}" class="inline-flex items-center px-8 py-4 bg-blue-500 text-white font-bold rounded-full hover:bg-blue-600 transition focus:ring-4 focus:ring-blue-200">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Strona główna
                </a>
                <a href="{{ route('portfolio') }}" class="inline-flex items-center px-8 py-4 bg-white text-gray-900 font-bold rounded-full border-2 border-gray-200 hover:border-blue-500 hover:text-blue-500 transition focus:ring-4 focus:ring-blue-200">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Zobacz Portfolio
                </a>
            </div>
            
            <div class="mt-12 pt-8 border-t border-gray-200">
                <p class="text-gray-600 mb-4">Szukasz czegoś konkretnego?</p>
                <div class="flex flex-wrap justify-center gap-3 text-sm">
                    <a href="{{ route('portfolio') }}" class="text-blue-500 hover:text-blue-600 font-semibold">Portfolio</a>
                    <span class="text-gray-300">•</span>
                    <a href="{{ route('contact') }}" class="text-blue-500 hover:text-blue-600 font-semibold">Kontakt</a>
                    <span class="text-gray-300">•</span>
                    <a href="{{ route('faq') }}" class="text-blue-500 hover:text-blue-600 font-semibold">FAQ</a>
                    <span class="text-gray-300">•</span>
                    <a href="{{ route('privacy-policy') }}" class="text-blue-500 hover:text-blue-600 font-semibold">Polityka prywatności</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
