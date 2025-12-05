<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TechStack;

class TechStackSeeder extends Seeder
{
    public function run(): void
    {
        TechStack::create([
            'name' => 'Laravel',
            'description' => 'Framework PHP do aplikacji webowych',
            'order' => 1,
            'icon' => null,
        ]);
        TechStack::create([
            'name' => 'PHP',
            'description' => 'Język skryptowy ogólnego przeznaczenia',
            'order' => 2,
            'icon' => null,
        ]);
        TechStack::create([
            'name' => 'MySQL',
            'description' => 'System zarządzania relacyjnymi bazami danych',
            'order' => 3,
            'icon' => null,
        ]);
        TechStack::create([
            'name' => 'JavaScript',
            'description' => 'Język programowania stron internetowych',
            'order' => 4,
            'icon' => null,
        ]);
        TechStack::create([
            'name' => 'HTML',
            'description' => 'Język znaczników do tworzenia stron internetowych',
            'order' => 5,
            'icon' => null,
        ]);
        TechStack::create([
            'name' => 'CSS',
            'description' => 'Język arkuszy stylów do opisu wyglądu stron internetowych',
            'order' => 6,
            'icon' => null,
        ]);
    }
}
