    @extends('layouts.app')

    @section('title', 'Strona główna')

    @section('content')
        
        @include('partials.hero')
        @include('partials.about')
        @include('partials.portfolio')
        @include('partials.contact-form')

    @endsection