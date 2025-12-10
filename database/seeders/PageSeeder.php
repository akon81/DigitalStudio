<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'slug' => 'polityka-prywatnosci',
            'title' => 'Polityka prywatności',
            'content' => $this->getPrivacyPolicyContent(),
            'is_active' => true,
        ]);

        Page::create([
            'slug' => 'regulamin',
            'title' => 'Regulamin',
            'content' => $this->getTermsOfServiceContent(),
            'is_active' => true,
        ]);
    }

    private function getPrivacyPolicyContent(): string
    {
        return <<<'HTML'
<h2>1. Administrator danych</h2>
<p>Administratorem danych osobowych jest <strong>Imię Nazwisko</strong>, z siedzibą w <strong>[adres]</strong>. Kontakt: <strong>[e-mail]</strong>.</p>

<h2>2. Zakres przetwarzanych danych</h2>
<ul>
<li>imię i nazwisko,</li>
<li>adres e-mail,</li>
<li>numer telefonu,</li>
<li>dane z formularzy kontaktowych,</li>
<li>adres IP i dane techniczne związane z korzystaniem ze strony,</li>
<li>dane dotyczące realizacji usług (np. zamówienia – jeśli dotyczy).</li>
</ul>

<h2>3. Cele przetwarzania</h2>
<ul>
<li>odpowiedź na zapytania przesłane przez formularz,</li>
<li>realizacja usług świadczonych przez stronę,</li>
<li>obsługa kontaktu i korespondencji,</li>
<li>analizy i statystyki ruchu na stronie,</li>
<li>marketing bezpośredni, np. newsletter (za zgodą),</li>
<li>zapewnienie bezpieczeństwa i poprawnego działania serwisu.</li>
</ul>

<h2>4. Podstawa prawna</h2>
<ul>
<li>zgoda użytkownika – art. 6 ust. 1 lit. a RODO,</li>
<li>wykonanie umowy lub działania przedumowne – art. 6 ust. 1 lit. b,</li>
<li>prawnie uzasadniony interes administratora – art. 6 ust. 1 lit. f.</li>
</ul>

<h2>5. Odbiorcy danych</h2>
<p>Dane mogą być przekazywane m.in. do:</p>
<ul>
<li>firm hostingowych i IT,</li>
<li>narzędzi analitycznych (np. Google Analytics),</li>
<li>dostawców systemów mailingowych,</li>
<li>biura rachunkowego lub kancelarii prawnej (jeśli dotyczy).</li>
</ul>
<p>Dane nie są sprzedawane ani przekazywane nieuprawnionym podmiotom.</p>

<h2>6. Przekazywanie danych poza UE</h2>
<p>Jeśli wykorzystywane są narzędzia firm, których serwery znajdują się poza UE, dane mogą być przekazywane do państw trzecich w oparciu o mechanizmy zgodności, takie jak standardowe klauzule umowne.</p>

<h2>7. Czas przechowywania danych</h2>
<ul>
<li>do momentu wycofania zgody – przy danych przetwarzanych na podstawie zgody,</li>
<li>przez czas niezbędny do realizacji usług,</li>
<li>zgodnie z obowiązującymi przepisami (np. księgowymi),</li>
<li>w przypadku cookies – zgodnie z ich ustawieniami.</li>
</ul>

<h2>8. Prawa użytkownika</h2>
<ul>
<li>dostęp do danych,</li>
<li>sprostowanie,</li>
<li>usunięcie danych („prawo do bycia zapomnianym"),</li>
<li>ograniczenie przetwarzania,</li>
<li>przenoszenie danych,</li>
<li>sprzeciw wobec przetwarzania,</li>
<li>cofnięcie zgody,</li>
<li>skarga do Prezesa UODO.</li>
</ul>

<h2>9. Dobrowolność podania danych</h2>
<p>Podanie danych jest dobrowolne, lecz w niektórych sytuacjach niezbędne do kontaktu, realizacji usług lub zapisania się do newslettera.</p>

<h2>10. Profilowanie</h2>
<p>Dane nie są wykorzystywane do zautomatyzowanego podejmowania decyzji. W celach marketingowych mogą być wykorzystywane podstawowe analizy statystyczne.</p>

<h2>11. Pliki cookies</h2>
<p>Strona może korzystać z plików cookies w celu:</p>
<ul>
<li>zapewnienia działania serwisu,</li>
<li>analizy statystyk,</li>
<li>personalizacji treści,</li>
<li>obsługi narzędzi marketingowych.</li>
</ul>
<p>Użytkownik może zmienić ustawienia cookies w swojej przeglądarce.</p>
HTML;
    }

    private function getTermsOfServiceContent(): string
    {
        return <<<'HTML'
<h2>1. Postanowienia ogólne</h2>
<p>Niniejszy regulamin określa zasady korzystania z serwisu internetowego.</p>

<h2>2. Definicje</h2>
<ul>
<li><strong>Serwis</strong> – strona internetowa dostępna pod adresem [adres]</li>
<li><strong>Użytkownik</strong> – osoba korzystająca z Serwisu</li>
<li><strong>Administrator</strong> – właściciel Serwisu</li>
</ul>

<h2>3. Zasady korzystania</h2>
<p>Użytkownik zobowiązuje się do korzystania z Serwisu zgodnie z obowiązującym prawem i dobrymi obyczajami.</p>

<h2>4. Odpowiedzialność</h2>
<p>Administrator nie ponosi odpowiedzialności za szkody wynikłe z korzystania z Serwisu.</p>

<h2>5. Postanowienia końcowe</h2>
<p>Administrator zastrzega sobie prawo do zmiany niniejszego regulaminu.</p>
HTML;
    }
}
