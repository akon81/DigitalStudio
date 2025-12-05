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
        ]);
        Category::create([
            'name' => 'Sklep internetowy',
            'slug' => 'sklep-internetowy',
        ]);
        Category::create([
            'name' => 'Aplikacja webowa',
            'slug' => 'aplikacja-webowa',
        ]);
        Category::create([
            'name' => 'Inne',
            'slug' => 'inne',
        ]);
    }
}
