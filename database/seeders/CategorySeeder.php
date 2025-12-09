<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Strona WWW',
            'slug' => 'strona-www',
            'order' => 1,
            'is_active' => true,
        ]);
        Category::create([
            'name' => 'Sklep internetowy',
            'slug' => 'sklep-internetowy',
            'order' => 2,
            'is_active' => true,
        ]);
        Category::create([
            'name' => 'Aplikacja webowa',
            'slug' => 'aplikacja-webowa',
            'order' => 3,
            'is_active' => true,
        ]);
        Category::create([
            'name' => 'Inne',
            'slug' => 'inne',
            'order' => 4,
            'is_active' => true,
        ]);
    }
}
