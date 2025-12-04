<?php

declare(strict_types=1);

use App\Models\Faq;
use App\Models\User;

use function Pest\Laravel\{actingAs, assertDatabaseHas, get};

test('faq page displays active faqs in order', function () {
    $faq1 = Faq::factory()->create([
        'question' => 'First Question',
        'answer' => 'First Answer',
        'order' => 2,
        'is_active' => true,
    ]);

    $faq2 = Faq::factory()->create([
        'question' => 'Second Question',
        'answer' => 'Second Answer',
        'order' => 1,
        'is_active' => true,
    ]);

    $faq3 = Faq::factory()->create([
        'question' => 'Inactive Question',
        'answer' => 'Inactive Answer',
        'order' => 0,
        'is_active' => false,
    ]);

    $response = get(route('faq'));

    $response->assertSuccessful();
    $response->assertSee('Second Question'); // order 1
    $response->assertSee('First Question'); // order 2
    $response->assertDontSee('Inactive Question'); // is_active = false
});

test('faq page shows empty state when no active faqs', function () {
    Faq::factory()->create(['is_active' => false]);

    $response = get(route('faq'));

    $response->assertSuccessful();
    $response->assertSee('Brak pytań do wyświetlenia');
});

test('admin can create faq', function () {
    $user = User::factory()->create();

    actingAs($user);

    $faqData = [
        'question' => 'Test Question?',
        'answer' => 'Test Answer',
        'order' => 10,
        'is_active' => true,
    ];

    \Livewire\Livewire::test(\App\Filament\Resources\Faqs\Pages\CreateFaq::class)
        ->fillForm($faqData)
        ->call('create')
        ->assertHasNoErrors();

    assertDatabaseHas('faqs', [
        'question' => 'Test Question?',
        'answer' => 'Test Answer',
        'order' => 10,
        'is_active' => true,
    ]);
});

test('admin can edit faq', function () {
    $user = User::factory()->create();
    $faq = Faq::factory()->create([
        'question' => 'Original Question',
        'answer' => 'Original Answer',
    ]);

    actingAs($user);

    \Livewire\Livewire::test(\App\Filament\Resources\Faqs\Pages\EditFaq::class, [
        'record' => $faq->getRouteKey(),
    ])
        ->fillForm([
            'question' => 'Updated Question',
            'answer' => 'Updated Answer',
        ])
        ->call('save')
        ->assertHasNoErrors();

    expect($faq->fresh())
        ->question->toBe('Updated Question')
        ->answer->toBe('Updated Answer');
});

test('admin can delete faq', function () {
    $user = User::factory()->create();
    $faq = Faq::factory()->create();

    actingAs($user);

    \Livewire\Livewire::test(\App\Filament\Resources\Faqs\Pages\EditFaq::class, [
        'record' => $faq->getRouteKey(),
    ])
        ->callAction('delete');

    expect(Faq::find($faq->id))->toBeNull();
});

test('faq requires question and answer', function () {
    $user = User::factory()->create();

    actingAs($user);

    // Try to create FAQ without required fields - should fail
    $faqCount = Faq::count();

    \Livewire\Livewire::test(\App\Filament\Resources\Faqs\Pages\CreateFaq::class)
        ->fillForm([
            'question' => '',
            'answer' => '',
            'order' => 0,
        ])
        ->call('create');

    // Verify that FAQ was not created due to validation errors
    expect(Faq::count())->toBe($faqCount);
});

test('faqs are sorted by order ascending', function () {
    Faq::factory()->create(['order' => 3, 'is_active' => true]);
    Faq::factory()->create(['order' => 1, 'is_active' => true]);
    Faq::factory()->create(['order' => 2, 'is_active' => true]);

    $response = get(route('faq'));

    $faqs = $response->viewData('faqs');

    expect($faqs->pluck('order')->toArray())->toBe([1, 2, 3]);
});

