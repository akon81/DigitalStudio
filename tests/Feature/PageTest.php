<?php

use App\Models\Page;
use App\Models\User;

uses()->group('pages');

test('page displays active content by slug', function () {
    $page = Page::factory()->active()->privacyPolicy()->create([
        'content' => '<h2>Test Policy</h2><p>This is a test policy content.</p>',
    ]);

    $response = $this->get(route('privacy-policy'));

    $response->assertOk();
    $response->assertSee('Test Policy', false);
    $response->assertSee('This is a test policy content', false);
});

test('page returns 404 when no active page with slug', function () {
    Page::factory()->privacyPolicy()->create(['is_active' => false]);

    $response = $this->get(route('privacy-policy'));

    $response->assertNotFound();
});

test('admin can create page', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $pageData = [
        'slug' => 'test-page',
        'title' => 'Test Page',
        'content' => '<h2>New Page</h2><p>Content here</p>',
        'is_active' => true,
    ];

    Page::create($pageData);

    $this->assertDatabaseHas('pages', [
        'slug' => 'test-page',
        'is_active' => true,
    ]);
});

test('admin can update page', function () {
    $user = User::factory()->create();
    $page = Page::factory()->active()->privacyPolicy()->create();

    $this->actingAs($user);

    $page->update([
        'content' => '<h2>Updated Page</h2>',
    ]);

    $this->assertDatabaseHas('pages', [
        'id' => $page->id,
        'content' => '<h2>Updated Page</h2>',
    ]);
});

test('only active page is displayed', function () {
    Page::factory()->create([
        'slug' => 'inactive-page',
        'content' => '<h2>Inactive Page</h2>',
        'is_active' => false,
    ]);

    $activePage = Page::factory()->active()->privacyPolicy()->create([
        'content' => '<h2>Active Page</h2>',
    ]);

    $response = $this->get(route('privacy-policy'));

    $response->assertSee('Active Page', false);
    $response->assertDontSee('Inactive Page', false);
});

test('terms of service page works', function () {
    $page = Page::factory()->active()->termsOfService()->create([
        'content' => '<h2>Terms Content</h2>',
    ]);

    $response = $this->get(route('terms-of-service'));

    $response->assertOk();
    $response->assertSee('Terms Content', false);
});
