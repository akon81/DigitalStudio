@extends('layouts.app')

@section('title', 'FAQ - Najczęściej zadawane pytania')

@section('content')
   <section class="py-20 bg-white overflow-hidden" id="faq-page">
        <div class="container mx-auto px-4">
            <!-- Dane kontaktowe -->
            <div class="max-w-3xl mx-auto mb-20">
                <div class="mb-12">
                    <h1 class="text-gray-900 text-center font-black font-heading text-4xl md:text-6xl mb-6">FAQ</h1>
                    <p class="text-xl text-gray-500 font-bold text-center">Odpowiedzi na najważniejsze pytania dotyczące współpracy i tworzenia stron</p>
                </div>

                <div 
    x-data="{ openItem: null }" 
    class="py-20 bg-gray-50"
>
    <div class="max-w-4xl px-6 mx-auto">

        <!-- Accordion list -->
        <div class="space-y-4">

            {{-- FAQ ITEM --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <button class="w-full flex items-center justify-between p-6 text-left cursor-pointer" @click="openItem === 1 ? openItem = null : openItem = 1">
                    <h3 class="text-lg font-semibold text-gray-900">Ile kosztuje stworzenie strony internetowej?</h3>

                    <svg x-bind:class="{ 'rotate-180': openItem === 1 }" 
                         class="w-6 h-6 text-gray-400 transition-transform" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="openItem === 1" x-collapse class="px-6 pb-6 text-gray-700 leading-relaxed">
                    Cena zależy od zakresu projektu. Proste strony zaczynają się od kilkuset złotych,
                    natomiast bardziej rozbudowane rozwiązania wyceniam indywidualnie po analizie Twoich potrzeb.
                </div>
            </div>

            {{-- FAQ ITEM --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <button 
                    class="w-full flex items-center justify-between p-6 text-left"
                    @click="openItem === 2 ? openItem = null : openItem = 2"
                >
                    <h3 class="text-lg font-semibold text-gray-900">Jak długo trwa realizacja projektu?</h3>

                    <svg x-bind:class="{ 'rotate-180': openItem === 2 }"
                         class="w-6 h-6 text-gray-400 transition-transform"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div 
                    x-show="openItem === 2"
                    x-collapse
                    class="px-6 pb-6 text-gray-700 leading-relaxed"
                >
                    Standardowy czas realizacji to 1–4 tygodnie. Zależy to od wielkości strony
                    oraz szybkości akceptacji kolejnych etapów.
                </div>
            </div>

            {{-- FAQ ITEM --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <button 
                    class="w-full flex items-center justify-between p-6 text-left"
                    @click="openItem === 3 ? openItem = null : openItem = 3"
                >
                    <h3 class="text-lg font-semibold text-gray-900">Czy mogę samodzielnie edytować treści?</h3>

                    <svg x-bind:class="{ 'rotate-180': openItem === 3 }"
                         class="w-6 h-6 text-gray-400 transition-transform"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div 
                    x-show="openItem === 3"
                    x-collapse
                    class="px-6 pb-6 text-gray-700 leading-relaxed"
                >
                    Oczywiście. Strony tworzę tak, aby każdy klient mógł sam dodawać teksty,
                    zdjęcia lub zmiany w CMS.
                </div>
            </div>

            {{-- FAQ ITEM --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <button 
                    class="w-full flex items-center justify-between p-6 text-left"
                    @click="openItem === 4 ? openItem = null : openItem = 4"
                >
                    <h3 class="text-lg font-semibold text-gray-900">Czy pomożesz z domeną i hostingiem?</h3>

                    <svg x-bind:class="{ 'rotate-180': openItem === 4 }"
                         class="w-6 h-6 text-gray-400 transition-transform"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div 
                    x-show="openItem === 4"
                    x-collapse
                    class="px-6 pb-6 text-gray-700 leading-relaxed"
                >
                    Tak — mogę polecić sprawdzone hostingi oraz pomóc w pełnej konfiguracji domeny.
                </div>
            </div>

            {{-- FAQ ITEM --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <button 
                    class="w-full flex items-center justify-between p-6 text-left"
                    @click="openItem === 5 ? openItem = null : openItem = 5"
                >
                    <h3 class="text-lg font-semibold text-gray-900">Czy oferujesz wsparcie po wdrożeniu?</h3>

                    <svg x-bind:class="{ 'rotate-180': openItem === 5 }"
                         class="w-6 h-6 text-gray-400 transition-transform"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div 
                    x-show="openItem === 5"
                    x-collapse
                    class="px-6 pb-6 text-gray-700 leading-relaxed"
                >
                    Oferuję zarówno wsparcie techniczne, jak i możliwość dalszego rozwoju strony lub sklepu.
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">
            <h3 class="text-2xl font-semibold text-gray-900">Masz inne pytania?</h3>
            <p class="mt-2 text-gray-600">Napisz — chętnie pomogę.</p>

            <a href="/kontakt"
               class="inline-block mt-6 px-8 py-3 bg-blue-600 text-white text-lg rounded-lg shadow hover:bg-blue-700 transition">
                Przejdź do kontaktu
            </a>
        </div>

    </div>
</div>


            </div>
        </div>
    </section>
@endsection
