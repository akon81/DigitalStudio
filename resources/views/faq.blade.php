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

                    <x-faq-item :index="1">
                        <x-slot:question>Ile kosztuje stworzenie strony internetowej?</x-slot:question>
                        <x-slot:answer>
                            Cena zależy od zakresu projektu, ilości podstron oraz funkcjonalności. Proste strony zaczynają się od 2000 złotych,
                            natomiast bardziej rozbudowane rozwiązania wyceniam indywidualnie po analizie Twoich potrzeb.
                        </x-slot:answer>
                    </x-faq-item>

                    <x-faq-item :index="2">
                        <x-slot:question>Jak długo trwa realizacja projektu?</x-slot:question>
                        <x-slot:answer>
                            Standardowy czas realizacji to 2–4 tygodnie. Zależy to od złożoności strony
                            oraz szybkości akceptacji kolejnych etapów.
                        </x-slot:answer>
                    </x-faq-item>

                    <x-faq-item :index="3">
                        <x-slot:question>Czy mogę samodzielnie edytować treści?</x-slot:question>
                        <x-slot:answer>
                            Oczywiście. Strony tworzę tak, aby każdy klient mógł sam dodawać teksty,
                            zdjęcia lub zmiany w CMS.
                        </x-slot:answer>
                    </x-faq-item>

                    <x-faq-item :index="4">
                        <x-slot:question>Czy pomożesz z domeną i hostingiem?</x-slot:question>
                        <x-slot:answer>
                            Tak — mogę polecić sprawdzone hostingi oraz pomóc w pełnej konfiguracji domeny.
                        </x-slot:answer>
                    </x-faq-item>

                    <x-faq-item :index="5">
                        <x-slot:question>Czy oferujesz wsparcie po wdrożeniu?</x-slot:question>
                        <x-slot:answer>
                            Oferuję zarówno wsparcie techniczne, jak i możliwość dalszego rozwoju strony lub sklepu.
                        </x-slot:answer>
                    </x-faq-item>

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
