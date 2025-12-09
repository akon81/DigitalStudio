<?php

declare(strict_types=1);

use App\Models\Category;
use App\Models\Faq;
use App\Models\Project;
use Illuminate\Support\Facades\Cache;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('projects are cached on homepage', function () {
    $projects = Project::factory()->count(3)->create([
        'published_at' => now(),
    ]);

    // First call - should cache
    $this->get('/');

    expect(Cache::has('homepage.projects.3'))->toBeTrue();
});

test('categories are cached', function () {
    Category::factory()->count(5)->create(['is_active' => true]);

    // First call - should cache
    $this->get('/');

    expect(Cache::has('categories.active'))->toBeTrue();
});

test('cache is cleared when project is created', function () {
    // Pre-populate cache
    Cache::put('portfolio.projects.all', collect(), 3600);
    Cache::put('homepage.projects.3', collect(), 3600);

    expect(Cache::has('portfolio.projects.all'))->toBeTrue();

    // Create a project - should clear cache
    Project::factory()->create([
        'published_at' => now(),
    ]);

    expect(Cache::has('portfolio.projects.all'))->toBeFalse();
    expect(Cache::has('homepage.projects.3'))->toBeFalse();
});

test('cache is cleared when category is updated', function () {
    Cache::put('categories.active', collect(), 3600);

    $category = Category::factory()->create();

    expect(Cache::has('categories.active'))->toBeFalse();
});

test('FAQs are cached', function () {
    Faq::factory()->count(5)->create(['is_active' => true]);

    $this->get('/faq');

    expect(Cache::has('faqs.active'))->toBeTrue();
});

test('cache is cleared when FAQ is deleted', function () {
    Cache::put('faqs.active', collect(), 3600);

    $faq = Faq::factory()->create(['is_active' => true]);
    $faq->delete();

    expect(Cache::has('faqs.active'))->toBeFalse();
});
