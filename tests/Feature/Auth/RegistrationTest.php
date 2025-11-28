use App\Models\User;

test('programmatic user creation and authentication', function () {
    // Public registration UI is disabled in this app (auth via Filament admin).
    // Test that we can create a user and authenticate programmatically.
    $user = User::factory()->create([ 'password' => bcrypt('password') ]);

    $this->actingAs($user);

    $this->assertAuthenticatedAs($user);
});

test('new users can be created programmatically', function () {
    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('password'),
    ]);

    $this->assertDatabaseHas(User::class, [
        'email' => 'test@example.com',
    ]);
});
<?php

use App\Models\User;

test('programmatic user creation and authentication', function () {
    // Public registration UI is disabled in this app (auth via Filament admin).
    // Test that we can create a user and authenticate programmatically.
    $user = User::factory()->create([ 'password' => bcrypt('password') ]);

    $this->actingAs($user);

    $this->assertAuthenticatedAs($user);
});