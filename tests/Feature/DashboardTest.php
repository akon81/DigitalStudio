<?php

use App\Models\User;

// The app uses Filament-admin-only login; adjust tests to assert access to the public `home` route
test('guests can access public home page', function () {
    $response = $this->get(route('home'));
    $response->assertStatus(200);
});

test('authenticated users can visit public home page', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('home'));
    $response->assertStatus(200);
});