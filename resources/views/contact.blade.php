@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')
    <section class="py-20 bg-white overflow-hidden" id="contact-page">
        <div class="container mx-auto px-4">
            <!-- Dane kontaktowe -->
            <div class="max-w-2xl mx-auto mb-12">
                <div class="mb-12">
                    <h1 class="text-gray-900 text-center font-black font-heading text-4xl md:text-6xl mb-6">Zapraszam do kontaktu</h1>
                    <p class="text-xl text-gray-500 font-bold">Potrzebujesz wsparcia przy swoim projekcie? Skontaktuj się ze mną</p>
                </div>

            </div>

            <div class="max-w-5xl mx-auto mb-20">
                <div id="contact-info" class="relative overflow-hidden border border-gray-100 hover:border-gray-200 rounded-3xl p-8 md:p-12 bg-center bg-cover" style="background-image: url('/assets/img/banner_contact01.jpg');">
                    <div class="absolute inset-0 md:bg-black/1 bg-black/60"></div>
                    <div class="relative z-10">
                    <div>
                        <!-- Kontakt email -->
                        <div class="mb-8">
                            <div class="flex items-start gap-4">
                                <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-blue-100">
                                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2 8.5C2 6.015 4.015 4 6.5 4h11A4.5 4.5 0 0 1 22 8.5v7A4.5 4.5 0 0 1 17.5 20h-11A4.5 4.5 0 0 1 2 15.5v-7Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 8l6 4 6-4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold text-lg mb-2">Email</h3>
                                    <a href="mailto:{{ $settings->email }}" class="text-blue-400 hover:text-blue-600 font-bold break-all">{{ $settings->email }}</a>
                                </div>
                            </div>
                        </div>

                        <!-- Kontakt telefon -->
                        <div class="mb-8">
                            <div class="flex items-start gap-4">
                                <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-blue-100">
                                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5.75C3 4.784 3.784 4 4.75 4h2.086c.414 0 .789.252.936.64l1.14 2.853a1 1 0 0 1-.217 1.09l-1.13 1.13a15.978 15.978 0 0 0 6.364 6.364l1.13-1.13a1 1 0 0 1 1.09-.217l2.853 1.14c.388.147.64.522.64.936V19.25A1.75 1.75 0 0 1 19.25 21h-1.5C10.044 21 3 13.956 3 5.75v0Z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold text-lg mb-2">Telefon</h3>
                                    <a href="tel:{{ $settings->phone }}" class="text-blue-400 hover:text-blue-600 font-bold">{{ $settings->phone }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-20">
                <x-contact-feature
                    icon="heroicon-o-bolt"
                    title="Szybka odpowiedź"
                    description="Otrzymasz odpowiedź w krótkim czasie, abyś mógł szybko ruszyć ze swoim projektem."
                />
                <x-contact-feature
                    icon="heroicon-o-lifebuoy"
                    title="Wsparcie na każdym etapie"
                    description="Od pierwszej rozmowy po wdrożenie możesz liczyć na pomoc i doradztwo."
                />
                <x-contact-feature
                    icon="heroicon-o-cube"
                    title="Realne rozwiązania"
                    description="Proponuję tylko takie działania, które naprawdę poprawiają jakość Twojej strony lub biznesu."
                />
            </div>

            <!-- Formularz kontaktowy: jedna kolumna -->
            
                @livewire('contact-form')

        </div>
    </section>
@endsection
