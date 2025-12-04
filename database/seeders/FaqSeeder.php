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
                'answer' => 'Cena zależy od zakresu projektu, ilości podstron oraz funkcjonalności. Proste strony zaczynają się od 2000 złotych, natomiast bardziej rozbudowane rozwiązania wyceniam indywidualnie po analizie Twoich potrzeb.',
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
                'question' => 'Czy mogę samodzielnie edytować treści?',
                'answer' => 'Oczywiście. Strony tworzę tak, aby każdy klient mógł sam dodawać teksty, zdjęcia lub zmiany w CMS.',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Czy pomożesz z domeną i hostingiem?',
                'answer' => 'Tak — mogę polecić sprawdzone hostingi oraz pomóc w pełnej konfiguracji domeny.',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Czy oferujesz wsparcie po wdrożeniu?',
                'answer' => 'Oferuję zarówno wsparcie techniczne, jak i możliwość dalszego rozwoju strony lub sklepu.',
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
