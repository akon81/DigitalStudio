@extends('layouts.app')

@section('meta_title', 'Polityka Prywatności - DigitalStudio')
@section('meta_description', 'Polityka prywatności DigitalStudio - informacje o przetwarzaniu danych osobowych, RODO, cookies i bezpieczeństwie danych.')
@section('meta_keywords', 'polityka prywatności, RODO, dane osobowe, cookies, ochrona danych')

@section('content')

    <section class="py-20 bg-white overflow-hidden" id="privacy-policy-page">
        <div class="container mx-auto px-4">
             <div class="mb-16 text-center">
                <h1 class="text-gray-900 font-black font-heading text-4xl md:text-5xl mb-6">Polityka prywatności</h1>
                <p class="md:text-xl text-lg text-gray-500 font-bold max-w-2xl mx-auto">Przetwarzanie danych osobowych – najważniejsze informacje</p>
            </div>
           
            <div class="max-w-4xl mx-auto space-y-8">

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">1. Administrator danych</h3>
            <p>
                Administratorem danych osobowych jest <strong>[Twoja firma / imię i nazwisko]</strong>,
                z siedzibą w <strong>[adres]</strong>, NIP: <strong>[NIP]</strong>.
                Kontakt: <strong>[e-mail]</strong>.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">2. Zakres przetwarzanych danych</h3>
            <ul class="list-disc list-inside space-y-1">
                <li>imię i nazwisko,</li>
                <li>adres e-mail,</li>
                <li>numer telefonu,</li>
                <li>dane z formularzy kontaktowych,</li>
                <li>adres IP i dane techniczne związane z korzystaniem ze strony,</li>
                <li>dane dotyczące realizacji usług (np. zamówienia – jeśli dotyczy).</li>
            </ul>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">3. Cele przetwarzania</h3>
            <ul class="list-disc list-inside space-y-1">
                <li>odpowiedź na zapytania przesłane przez formularz,</li>
                <li>realizacja usług świadczonych przez stronę,</li>
                <li>obsługa kontaktu i korespondencji,</li>
                <li>analizy i statystyki ruchu na stronie,</li>
                <li>marketing bezpośredni, np. newsletter (za zgodą),</li>
                <li>zapewnienie bezpieczeństwa i poprawnego działania serwisu.</li>
            </ul>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">4. Podstawa prawna</h3>
            <ul class="list-disc list-inside space-y-1">
                <li>zgoda użytkownika – art. 6 ust. 1 lit. a RODO,</li>
                <li>wykonanie umowy lub działania przedumowne – art. 6 ust. 1 lit. b,</li>
                <li>prawnie uzasadniony interes administratora – art. 6 ust. 1 lit. f.</li>
            </ul>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">5. Odbiorcy danych</h3>
            <p>Dane mogą być przekazywane m.in. do:</p>
            <ul class="list-disc list-inside space-y-1 mt-2">
                <li>firm hostingowych i IT,</li>
                <li>narzędzi analitycznych (np. Google Analytics),</li>
                <li>dostawców systemów mailingowych,</li>
                <li>biura rachunkowego lub kancelarii prawnej (jeśli dotyczy).</li>
            </ul>
            <p class="mt-2">Dane nie są sprzedawane ani przekazywane nieuprawnionym podmiotom.</p>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">6. Przekazywanie danych poza UE</h3>
            <p>
                Jeśli wykorzystywane są narzędzia firm, których serwery znajdują się poza UE,
                dane mogą być przekazywane do państw trzecich w oparciu o mechanizmy zgodności,
                takie jak standardowe klauzule umowne.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">7. Czas przechowywania danych</h3>
            <ul class="list-disc list-inside space-y-1">
                <li>do momentu wycofania zgody – przy danych przetwarzanych na podstawie zgody,</li>
                <li>przez czas niezbędny do realizacji usług,</li>
                <li>zgodnie z obowiązującymi przepisami (np. księgowymi),</li>
                <li>w przypadku cookies – zgodnie z ich ustawieniami.</li>
            </ul>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">8. Prawa użytkownika</h3>
            <ul class="list-disc list-inside space-y-1">
                <li>dostęp do danych,</li>
                <li>sprostowanie,</li>
                <li>usunięcie danych („prawo do bycia zapomnianym”),</li>
                <li>ograniczenie przetwarzania,</li>
                <li>przenoszenie danych,</li>
                <li>sprzeciw wobec przetwarzania,</li>
                <li>cofnięcie zgody,</li>
                <li>skarga do Prezesa UODO.</li>
            </ul>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">9. Dobrowolność podania danych</h3>
            <p>
                Podanie danych jest dobrowolne, lecz w niektórych sytuacjach niezbędne
                do kontaktu, realizacji usług lub zapisania się do newslettera.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">10. Profilowanie</h3>
            <p>
                Dane nie są wykorzystywane do zautomatyzowanego podejmowania decyzji.
                W celach marketingowych mogą być wykorzystywane podstawowe analizy statystyczne.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">11. Pliki cookies</h3>
            <p>Strona może korzystać z plików cookies w celu:</p>
            <ul class="list-disc list-inside space-y-1 mt-2">
                <li>zapewnienia działania serwisu,</li>
                <li>analizy statystyk,</li>
                <li>personalizacji treści,</li>
                <li>obsługi narzędzi marketingowych.</li>
            </ul>
            <p class="mt-2">
                Użytkownik może zmienić ustawienia cookies w swojej przeglądarce.
            </p>
        </div>

    </div>
</div> 
        </div>
    </section>
@endsection