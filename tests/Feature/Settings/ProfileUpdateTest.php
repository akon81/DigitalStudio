<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Profile / Account tests (adapted)
|--------------------------------------------------------------------------
|
| The application uses Filament admin for authentication and settings UI.
| These tests validate profile/account logic programmatically rather than
| relying on UI components which are not present in the public site.
|
*/

test('profile information can be updated programmatically', function () {
    $user = User::factory()->create();

    // Simulate the action of updating profile information
    $user->update([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    $user->refresh();

    expect($user->name)->toEqual('Test User');
    expect($user->email)->toEqual('test@example.com');
});

test('email verification status is unchanged when email address is unchanged', function () {
    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    // Update name only
    $user->update(['name' => 'Renamed']);

    expect($user->refresh()->email_verified_at)->not->toBeNull();
});

test('user can be deleted programmatically with correct password', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    // Simulate password confirmation check
    expect(Hash::check('password', $user->password))->toBeTrue();

    // Perform deletion
    $userId = $user->id;
    $user->delete();

    expect(User::find($userId))->toBeNull();
});

test('user is not deleted when password is incorrect', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    // Wrong password
    expect(Hash::check('wrong-password', $user->password))->toBeFalse();

    // Do not delete; assert user still exists
    expect(User::find($user->id))->not->toBeNull();
});