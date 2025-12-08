<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Ile kosztuje stworzenie strony internetowej?',
                'answer' => 'Cena zależy od zakresu projektu, ilości podstron oraz funkcjonalności. Prosta strona to koszt około 2000 złotych, natomiast bardziej rozbudowane rozwiązania wyceniam indywidualnie po analizie Twoich potrzeb.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Jak długo trwa realizacja projektu?',
                'answer' => 'Standardowy czas realizacji to 2–4 tygodnie. Zależy to od złożoności strony oraz szybkości akceptacji kolejnych etapów.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Nie posiadam materiałów graficznych. Czy możesz mi pomóc?',
                'answer' => 'Tak, mogę pomóc w stworzeniu grafik, logo oraz innych materiałów wizualnych potrzebnych do Twojej strony.',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Czy mogę samodzielnie edytować treści?',
                'answer' => 'Oczywiście. Strony tworzę tak, aby każdy klient mógł sam dodawać teksty, zdjęcia lub zmiany w wygodnym panelu administracyjnym.',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Czy pomożesz z domeną i hostingiem?',
                'answer' => 'Tak — mogę polecić sprawdzone hostingi oraz pomóc w pełnej konfiguracji domeny.',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Czy oferujesz wsparcie po wdrożeniu?',
                'answer' => 'Oferuję zarówno wsparcie techniczne, jak i możliwość dalszego rozwoju projektu.',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'question' => 'Jakie technologie wykorzystane są do tworzenia stron?',
                'answer' => 'Pracuję głównie z wykorzystaniem PHP (Laravel), JavaScript oraz baz danych MySQL. Dzięki temu tworzę szybkie i bezpieczne strony internetowe.',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'question' => 'Czy strona będzie responsywna?',
                'answer' => 'Tak, wszystkie tworzone przeze mnie strony są w pełni responsywne i dostosowane do urządzeń mobilnych.',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'question' => 'Jak wygląda proces współpracy?',
                'answer' => 'Proces rozpoczyna się od konsultacji, podczas której omawiamy Twoje potrzeby. Następnie przygotowuję wycenę i harmonogram. Po akceptacji przystępuję do realizacji projektu, a na końcu wdrażam stronę i oferuję wsparcie.',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'question' => 'Jakie informacje są potrzebne do rozpoczęcia projektu?',
                'answer' => 'Potrzebuję informacji o Twojej firmie, celach strony, preferencjach dotyczących designu oraz wszelkich materiałach, które chciałbyś umieścić na stronie.',
                'order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
