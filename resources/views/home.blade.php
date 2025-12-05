    @extends('layouts.app')

    @section('meta_title', 'Strony i aplikacje webowe - DigitalStudio')
    @section('meta_description', 'Tworzę profesjonalne strony internetowe i aplikacje webowe. Specjalizuję się w responsywnych rozwiązaniach z wykorzystaniem Laravel, Livewire i Tailwind CSS.')
    @section('meta_keywords', 'strony internetowe, aplikacje web, Laravel, Livewire, Tailwind CSS, web development, tworzenie stron')

    @section('content')
        
        @include('partials.hero')
        @include('partials.about')
        @include('partials.portfolio')
        @include('partials.casestudys')
        @livewire('contact-form')
        
    @endsection