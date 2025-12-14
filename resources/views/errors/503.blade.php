@extends('layouts.app')

@section('meta_title', 'Serwis niedostępny - 503 | DigitalStudio')
@section('meta_description', 'Serwis jest obecnie niedostępny. Pracujemy nad przywróceniem działania.')

@section('content')
<section class="py-20 bg-gray-50 min-h-screen flex items-center">
    <div class="container max-w-7xl mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <svg class="mx-auto h-32 w-32 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            
            <h1 class="text-gray-900 font-black font-heading text-6xl md:text-7xl mb-6">503</h1>
            <h2 class="text-gray-900 font-bold font-heading text-2xl md:text-3xl mb-4">Serwis niedostępny</h2>
            <p class="text-gray-500 text-lg mb-8 max-w-xl mx-auto">
                Przepraszamy, serwis jest obecnie niedostępny z powodu prac konserwacyjnych. 
                Wrócimy wkrótce. Dziękujemy za cierpliwość.
            </p>
            
            <div class="mb-8">
                <div class="inline-flex items-center bg-indigo-50 rounded-full px-6 py-3">
                    <svg class="animate-spin h-5 w-5 mr-3 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <p class="text-indigo-700 font-semibold">Trwają prace konserwacyjne...</p>
                </div>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="window.location.reload()" class="inline-flex items-center px-8 py-4 bg-blue-500 text-white font-bold rounded-full hover:bg-blue-600 transition focus:ring-4 focus:ring-blue-200">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Odśwież stronę
                </button>
            </div>
            
            <div class="mt-12 pt-8 border-t border-gray-200">
                <p class="text-gray-600 mb-4">Potrzebujesz pilnie pomocy?</p>
                <p class="text-gray-500 text-sm">
                    Skontaktuj się z nami: 
                    <a href="mailto:kontakt@digitalstudio.pl" class="text-blue-500 hover:text-blue-600 font-semibold">kontakt@digitalstudio.pl</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
