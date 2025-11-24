@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')
    <section class="py-20 bg-white overflow-hidden" id="contact-page">
        <div class="container mx-auto px-4">
            <!-- Dane kontaktowe -->
            <div class="max-w-2xl mx-auto mb-20">
                <div class="mb-12">
                    <h1 class="text-gray-900 text-center font-black font-heading text-4xl md:text-6xl mb-6">Skontaktuj się</h1>
                    <p class="text-xl text-gray-500 font-bold">Jestem dostępny do rozmowy o Twoim projekcie. Skontaktuj się ze mną przez dowolny z poniższych kanałów.</p>
                </div>

                <div class="bg-gray-50 border border-gray-100 hover:border-gray-200 rounded-3xl p-8 md:p-12 grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
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
                                <h3 class="text-gray-900 font-bold text-lg mb-2">Email</h3>
                                <a href="mailto:{{ $settings->email }}" class="text-blue-500 hover:text-blue-600 font-bold break-all">{{ $settings->email }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Kontakt telefon -->
                    <div class="mb-8">
                        <div class="flex items-start gap-4">
                            <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-blue-100">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-4.42c0-.88-.564-1.667-1.406-1.945l-1.789-.894c-.777-.389-1.719-.389-2.496 0l-1.789.894c-.842.278-1.406 1.065-1.406 1.945v2.494c-3.337-2.127-6.435-5.225-8.562-8.562v-2.494c0-.88.564-1.667 1.406-1.945l1.789-.894c.777-.389 1.719-.389 2.496 0l1.789.894c.842.278 1.406 1.065 1.406 1.945v2.25c2.25-3.723 5.973-6.25 10.304-6.25"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-bold text-lg mb-2">Telefon</h3>
                                <a href="tel:{{ $settings->phone }}" class="text-blue-500 hover:text-blue-600 font-bold">{{ $settings->phone }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Formularz kontaktowy -->
            <div class="max-w-4xl mx-auto">
                @include('partials.contact-form')
            </div>
        </div>
    </section>
@endsection
