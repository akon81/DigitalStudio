<?php

declare(strict_types=1);

use App\Livewire\HomePortfolio;
use App\Models\Category;
use App\Models\Project;
use App\Settings\GeneralSettings;
use Livewire\Livewire;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('homepage portfolio filters across all projects (not just the homepage limit)', function () {
    $category = Category::factory()->create([
        'name' => 'Kategoria A',
        'is_active' => true,
    ]);

    Project::factory()->create([
        'title' => 'Projekt A1',
        'slug' => 'projekt-a1',
        'category_id' => $category->id,
        'published_at' => now()->subMinutes(4),
    ]);

    Project::factory()->create([
        'title' => 'Projekt A2',
        'slug' => 'projekt-a2',
        'category_id' => $category->id,
        'published_at' => now()->subMinutes(3),
    ]);

    Project::factory()->create([
        'title' => 'Projekt A3',
        'slug' => 'projekt-a3',
        'category_id' => $category->id,
        'published_at' => now()->subMinutes(2),
    ]);

    Project::factory()->create([
        'title' => 'Projekt A4',
        'slug' => 'projekt-a4',
        'category_id' => $category->id,
        'published_at' => now()->subMinutes(1),
    ]);

    Livewire::test(HomePortfolio::class)
        ->assertSee('Projekt A4')
        ->assertSee('Projekt A3')
        ->assertSee('Projekt A2')
        ->assertDontSee('Projekt A1')
        ->call('setCategory', $category->id)
        ->assertSee('Projekt A2')
        ->assertSee('Projekt A3')
        ->assertSee('Projekt A4')
        ->assertDontSee('Projekt A1');
});

test('homepage portfolio applies the admin limit per category when switching filters', function () {
    $settings = app(GeneralSettings::class);
    $settings->homepage_projects_count = 2;

    $categoryA = Category::factory()->create([
        'name' => 'Kategoria A',
        'is_active' => true,
    ]);

    $categoryB = Category::factory()->create([
        'name' => 'Kategoria B',
        'is_active' => true,
    ]);

    Project::factory()->create([
        'title' => 'Projekt A1',
        'slug' => 'projekt-a1',
        'category_id' => $categoryA->id,
        'published_at' => now()->subMinutes(10),
    ]);

    Project::factory()->create([
        'title' => 'Projekt A2',
        'slug' => 'projekt-a2',
        'category_id' => $categoryA->id,
        'published_at' => now()->subMinutes(9),
    ]);

    Project::factory()->create([
        'title' => 'Projekt A3',
        'slug' => 'projekt-a3',
        'category_id' => $categoryA->id,
        'published_at' => now()->subMinutes(8),
    ]);

    Project::factory()->create([
        'title' => 'Projekt A4',
        'slug' => 'projekt-a4',
        'category_id' => $categoryA->id,
        'published_at' => now()->subMinutes(7),
    ]);

    Project::factory()->create([
        'title' => 'Projekt B1',
        'slug' => 'projekt-b1',
        'category_id' => $categoryB->id,
        'published_at' => now()->subMinutes(6),
    ]);

    Project::factory()->create([
        'title' => 'Projekt B2',
        'slug' => 'projekt-b2',
        'category_id' => $categoryB->id,
        'published_at' => now()->subMinutes(5),
    ]);

    Project::factory()->create([
        'title' => 'Projekt B3',
        'slug' => 'projekt-b3',
        'category_id' => $categoryB->id,
        'published_at' => now()->subMinutes(4),
    ]);

    Project::factory()->create([
        'title' => 'Projekt B4',
        'slug' => 'projekt-b4',
        'category_id' => $categoryB->id,
        'published_at' => now()->subMinutes(3),
    ]);

    Livewire::test(HomePortfolio::class)
        ->call('setCategory', $categoryA->id)
        ->assertSee('Projekt A4')
        ->assertSee('Projekt A3')
        ->assertDontSee('Projekt A2')
        ->assertDontSee('Projekt A1')
        ->call('setCategory', $categoryB->id)
        ->assertSee('Projekt B4')
        ->assertSee('Projekt B3')
        ->assertDontSee('Projekt B2')
        ->assertDontSee('Projekt B1')
        ->assertDontSee('Projekt A4');
});
