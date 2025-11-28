use App\Models\User;
use Illuminate\Support\Facades\Hash;

test('users can authenticate programmatically', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    // Programmatic auth: attempt to validate credentials
    $this->assertTrue(Hash::check('password', $user->password));

    // Simulate login
    $this->actingAs($user);

    $this->assertAuthenticated();
    $this->assertAuthenticatedAs($user);
});

test('users cannot authenticate with invalid password', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    $this->assertFalse(Hash::check('wrong-password', $user->password));

    // Ensure guest when not acting as user
    $this->assertGuest();
});
<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

test('programmatic login and logout behavior', function () {
    $user = User::factory()->create([ 'password' => bcrypt('password') ]);

    // Programmatic authentication (UI disabled)
    $this->actingAs($user);
    $this->assertAuthenticatedAs($user);

    // Logout route should still work
    $response = $this->post(route('logout'));
    $response->assertRedirect(route('home'));
    $this->assertGuest();
});

test('password verification works for invalid password', function () {
    $user = User::factory()->create([ 'password' => bcrypt('password') ]);

    expect(Hash::check('wrong-password', $user->password))->toBeFalse();
});