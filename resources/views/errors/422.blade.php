@extends('layouts.app')

@section('meta_title', 'Błąd walidacji - 422 | DigitalStudio')
@section('meta_description', 'Wystąpił błąd podczas przetwarzania formularza.')

@section('content')
<section class="py-20 bg-gray-50 min-h-screen flex items-center">
    <div class="container max-w-7xl mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <svg class="mx-auto h-32 w-32 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            
            <h1 class="text-gray-900 font-black font-heading text-6xl md:text-7xl mb-6">422</h1>
            <h2 class="text-gray-900 font-bold font-heading text-2xl md:text-3xl mb-4">Błąd walidacji</h2>
            <p class="text-gray-500 text-lg mb-8 max-w-xl mx-auto">
                Wystąpił błąd podczas przetwarzania formularza. 
                Sprawdź poprawność wprowadzonych danych i spróbuj ponownie.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="window.history.back()" class="inline-flex items-center px-8 py-4 bg-blue-500 text-white font-bold rounded-full hover:bg-blue-600 transition focus:ring-4 focus:ring-blue-200">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Wróć i popraw
                </button>
                <a href="{{ route('home') }}" class="inline-flex items-center px-8 py-4 bg-white text-gray-900 font-bold rounded-full border-2 border-gray-200 hover:border-blue-500 hover:text-blue-500 transition focus:ring-4 focus:ring-blue-200">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Strona główna
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
