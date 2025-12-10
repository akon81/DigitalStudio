@extends('layouts.app')

@section('meta_title', $page->title . ' - DigitalStudio')
@section('meta_description', 'Polityka prywatności DigitalStudio - informacje o przetwarzaniu danych osobowych, RODO, cookies i bezpieczeństwie danych.')
@section('meta_keywords', 'polityka prywatności, RODO, dane osobowe, cookies, ochrona danych')

@section('content')

    <section class="py-20 bg-white overflow-hidden" id="page-content">
        <div class="container mx-auto px-4">
             <div class="mb-16 text-center">
                <h1 class="text-gray-900 font-black font-heading text-4xl md:text-5xl mb-6">{{ $page->title }}</h1>
                <p class="md:text-xl text-lg text-gray-500 font-bold max-w-2xl mx-auto">Przetwarzanie danych osobowych – najważniejsze informacje</p>
            </div>
           
            <div class="max-w-4xl mx-auto prose prose-lg prose-headings:text-gray-900 prose-h2:text-2xl prose-h2:font-bold prose-h2:mb-4 prose-h2:mt-8 prose-h3:text-xl prose-h3:font-semibold prose-h3:mb-2 prose-p:text-gray-700 prose-ul:list-disc prose-ul:list-inside prose-ul:space-y-1 prose-li:text-gray-700">
                {!! $page->content !!}
            </div>
        </div>
    </section>
@endsection
