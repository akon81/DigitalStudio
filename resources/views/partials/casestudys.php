<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-bold text-gray-900 tracking-tight">Historie projektów, które robią różnicę</h2>
            <p class="mt-4 text-lg text-gray-600">
                Każda realizacja to inna potrzeba, inny charakter i inny cel. Moim zadaniem jest przemienić je w dopracowane, efektywne doświadczenie cyfrowe.
            </p>
        </div>

        <div class="space-y-28">

            <div x-data="{ open: false }">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    
                    <div>
                        <span @click="open = ! open" class="text-sm font-semibold text-green-700 uppercase tracking-wide">01. Agro-Stalex</span>
                        <h3 class="text-3xl font-bold text-gray-900 mt-2">Cyfrowa transformacja producenta maszyn rolniczych</h3>

                        <div x-show="open" class="mt-6 space-y-6 ">
                            <div class="flex gap-4">
                                <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                                    <x-heroicon-o-light-bulb class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Wyjściowy cel</h4>
                                    <p class="text-gray-600">
                                        Klient potrzebował prostej w obsłudze strony, na której samodzielnie doda produkty, zdjęcia i opisy maszyn,
                                        a użytkownicy będą mogli je zamawiać przez wygodny formularz.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                                    <x-heroicon-o-cog-6-tooth class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Proces</h4>
                                    <p class="text-gray-600">
                                        Zaprojektowałem panel do zarządzania ofertą, uprościłem wprowadzanie treści
                                        oraz stworzyłem moduł „mini sklepu”, który prowadzi klienta od produktu do zamówienia.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                                    <x-heroicon-o-check-circle class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Efekt</h4>
                                    <p class="text-gray-600">
                                        Firma prezentuje całą ofertę online, przyjmuje zamówienia przez stronę, 
                                        a ja do dziś zapewniam pełną opiekę techniczną i hosting.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-xl">
                            <img src="/images/case/agrostalex.jpg" alt="Agro-Stalex" class="w-full h-auto object-cover">
                        </div>
                    </div>

                </div>
            </div>

            <div x-data="{ open: false }">
                <div class="grid md:grid-cols-2 gap-12 items-center md:flex-row-reverse">
                    
                    <div class="order-2 md:order-1">
                        <span @click="open = ! open"  class="text-sm font-semibold text-orange-600 uppercase tracking-wide">02. Alpakraina</span>
                        <h3 class="text-3xl font-bold text-gray-900 mt-2">Strona miejsca, które żyje swoją historią</h3>

                        <div x-show="open" class="mt-6 space-y-6">
                            <div class="flex gap-4">
                                <div class="p-3 bg-orange-100 text-orange-600 rounded-xl">
                                    <x-heroicon-o-map class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Wyjściowy cel</h4>
                                    <p class="text-gray-600">
                                        Właściciele potrzebowali strony, która odda klimat hodowli alpak, 
                                        a jednocześnie umożliwi umawianie wizyt i prezentację oferty pobytowej.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="p-3 bg-orange-100 text-orange-600 rounded-xl">
                                    <x-heroicon-o-sparkles class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Proces</h4>
                                    <p class="text-gray-600">
                                        Stworzyłem wizualnie lekką, ciepłą stronę z naciskiem na fotografie i emocje.
                                        Dodałem formularz rezerwacji oraz sekcję prezentującą atrakcje.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="p-3 bg-orange-100 text-orange-600 rounded-xl">
                                    <x-heroicon-o-check-circle class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Efekt</h4>
                                    <p class="text-gray-600">
                                        Strona zyskała własny charakter, a właściciele otrzymali narzędzie do kontaktu, promocji
                                        i budowania społeczności. Prowadzę dla nich hosting i wsparcie techniczne do dziś.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative order-1 md:order-2">
                        <div class="rounded-2xl overflow-hidden shadow-xl">
                            <img src="/images/case/alpakraina.jpg" alt="Alpakraina" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <div 
                x-data="{ open: false }">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    
                    <div>
                        <span @click="open = ! open" class="text-sm font-semibold text-purple-700 uppercase tracking-wide">03. Aktywnie dla siebie</span>
                        <h3 class="text-3xl font-bold text-gray-900 mt-2">Platforma wspierająca rozwój i zdrowie dojrzałych kobiet</h3>

                        <div  x-show="open" class="mt-6 space-y-6">
                            <div class="flex gap-4">
                                <div class="p-3 bg-purple-100 text-purple-600 rounded-xl">
                                    <x-heroicon-o-heart class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Wyjściowy cel</h4>
                                    <p class="text-gray-600">
                                        Klientka prowadzi zajęcia pilates i relaksacyjne – zarówno lokalnie, jak i online. 
                                        Potrzebowała miejsca, które połączy prezentację oferty z przyszłą strefą premium dla klientek.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="p-3 bg-purple-100 text-purple-600 rounded-xl">
                                    <x-heroicon-o-play-circle class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Proces</h4>
                                    <p class="text-gray-600">
                                        Zaprojektowałem stronę nastawioną na lekkość, delikatność i kobiecy charakter.
                                        Dodałem sekcje z wideo, social media, grafiką ruchową oraz przygotowałem strukturę
                                        pod przyszły moduł logowania i treści premium.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="p-3 bg-purple-100 text-purple-600 rounded-xl">
                                    <x-heroicon-o-check-circle class="w-6 h-6"/>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Efekt</h4>
                                    <p class="text-gray-600">
                                        Klientka zyskała miejsce, które wzmacnia jej markę, ułatwia komunikację i
                                        będzie bazą do rozbudowy o platformę premium w przyszłości.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-xl">
                            <img src="/images/case/aktywniedlasiebie.jpg" alt="Aktywnie dla siebie" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
