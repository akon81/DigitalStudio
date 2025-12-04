@extends('layouts.app')

@section('title', 'FAQ - Najczęściej zadawane pytania')

@section('content')
    <section class="py-20 bg-white overflow-hidden" id="faq-page">
        <div class="container mx-auto px-4">
             <div class="mb-16 text-center">
                <h1 class="text-gray-900 font-black font-heading text-4xl md:text-5xl mb-6">Najczęściej zadawane pytania</h1>
                <p class="md:text-xl text-lg text-gray-500 font-bold max-w-2xl mx-auto">Odpowiedzi na najważniejsze pytania dotyczące współpracy i tworzenia stron</p>
            </div>

            <div class="max-w-4xl mx-auto">
 
            <div x-data="{ openItem: null }">
                <!-- Accordion list -->
                <div class="space-y-4">

                    @forelse($faqs as $index => $faq)
                        <x-faq-item :index="$index + 1">
                            <x-slot:question>{{ $faq->question }}</x-slot:question>
                            <x-slot:answer>{!! nl2br(e($faq->answer)) !!}</x-slot:answer>
                        </x-faq-item>
                    @empty
                        <div class="text-center py-8">
                            <p class="text-neutral-600 dark:text-neutral-400">Brak pytań do wyświetlenia.</p>
                        </div>
                    @endforelse

        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">
            <h3 class="text-2xl font-bold text-neutral-900 dark:text-white">Masz inne pytania?</h3>
            <p class="mt-2 text-neutral-600 dark:text-neutral-400">Napisz — chętnie pomogę.</p>

            <a href="/kontakt"
               class="inline-block px-8 py-4 mt-6 font-semibold text-white transition-all bg-blue-500 shadow-lg rounded-full hover:bg-blue-600 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-200 dark:focus-visible:ring-blue-900/30">
                Przejdź do kontaktu
            </a>
        </div>

    </div>
            </div>
        </div>
    </section>
@endsection
