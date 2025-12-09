<?php

declare(strict_types=1);

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create a category', function () {
    $category = Category::create([
        'name' => 'Web Development',
        'slug' => 'web-development',
        'order' => 1,
        'is_active' => true,
    ]);

    expect($category->id)->not->toBeNull();
    expect($category->name)->toBe('Web Development');
    expect($category->slug)->toBe('web-development');
    expect($category->order)->toBe(1);
    expect($category->is_active)->toBeTrue();
});
