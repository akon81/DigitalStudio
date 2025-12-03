<section class="py-12 bg-white dark:bg-neutral-950">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-bold text-neutral-900 dark:text-white tracking-tight">Historie projektów, które robią różnicę</h2>
            <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-400">
                Każda realizacja to inna potrzeba, inny charakter i inny cel. Moim zadaniem jest przemienić je w dopracowane, efektywne doświadczenie cyfrowe.
            </p>
        </div>

        <x-case-carousel :cases="[1, 2, 3]">
              <div x-show="currentSlideIndex == 1" 
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                  class="w-full"
                  x-bind:class="currentSlideIndex == 1 ? 'relative' : 'absolute inset-0'"
                  x-ref="slide-1"
                  x-cloak>
                <x-case-study-item
                    id="case1"
                    label="Agro-Stalex"
                    title="Cyfrowa transformacja producenta maszyn rolniczych"
                    color="green"
                    goal="Klient potrzebował prostej w obsłudze strony, na której samodzielnie doda produkty, zdjęcia i opisy maszyn, a użytkownicy będą mogli je zamawiać przez wygodny formularz."
                    process="Zaprojektowałem panel do zarządzania ofertą, uprościłem wprowadzanie treści oraz stworzyłem moduł „mini sklepu”, który prowadzi klienta od produktu do zamówienia."
                    result="Firma prezentuje całą ofertę online, przyjmuje zamówienia przez stronę, a ja do dziś zapewniam pełną opiekę techniczną i hosting."
                    image="assets/img/mockup_agrostalex_smartfon.jpg"
                    imageAlt="Agro-Stalex"
                />
            </div>

              <div x-show="currentSlideIndex == 2"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                  class="w-full"
                  x-bind:class="currentSlideIndex == 2 ? 'relative' : 'absolute inset-0'"
                  x-ref="slide-2"
                  x-cloak>
                <x-case-study-item
                    id="case2"
                    label="Aktywnie dla siebie"
                    title="Platforma wspierająca formę i zdrowie dojrzałych kobiet"
                    color="purple"
                    goal="Klientka prowadzi zajęcia pilates i relaksacyjne – zarówno lokalnie, jak i online. Potrzebowała miejsca, które połączy prezentację oferty z przyszłą strefą premium dla klientek."
                    process="Zaprojektowałem stronę nastawioną na lekkość, delikatność i kobiecy charakter. Dodałem sekcje z wideo, social media, grafiką ruchową oraz przygotowałem strukturę pod przyszły moduł logowania i treści premium."
                    result="Klientka zyskała miejsce, które wzmacnia jej markę, ułatwia komunikację i będzie bazą do rozbudowy o platformę premium w przyszłości."
                    image="assets/img/mockup.jpg"
                    imageAlt="Aktywnie dla siebie"
                />
            </div>

              <div x-show="currentSlideIndex == 3"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                  class="w-full"
                  x-bind:class="currentSlideIndex == 3 ? 'relative' : 'absolute inset-0'"
                  x-ref="slide-3"
                  x-cloak>
                <x-case-study-item
                    id="case3"
                    label="Alpakraina"
                    title="Strona miejsca, które żyje swoją historią"
                    color="orange"
                    goal="Właściciele potrzebowali strony, która odda klimat hodowli alpak, a jednocześnie umożliwi umawianie wizyt i prezentację oferty pobytowej."
                    process="Stworzyłem wizualnie lekką, ciepłą stronę z naciskiem na fotografie i emocje. Dodałem formularz rezerwacji oraz sekcję prezentującą atrakcje."
                    result="Strona zyskała własny charakter, a właściciele otrzymali narzędzie do kontaktu, promocji i budowania społeczności. Prowadzę dla nich hosting i wsparcie techniczne do dziś."
                    image="assets/img/mockup.jpg"
                    imageAlt="Alpakraina"
                />
            </div>
        </x-case-carousel>

    </div>
</section>
