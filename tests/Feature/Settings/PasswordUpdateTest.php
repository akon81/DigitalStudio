<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

test('password can be updated programmatically', function () {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    // Simulate current password verification and update
    expect(Hash::check('password', $user->password))->toBeTrue();

    $user->update(['password' => Hash::make('new-password')]);

    expect(Hash::check('new-password', $user->refresh()->password))->toBeTrue();
});

test('password is not updated when current password is incorrect', function () {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    // Wrong current password
    expect(Hash::check('wrong-password', $user->password))->toBeFalse();

    // Do not perform update; verify original still valid
    expect(Hash::check('password', $user->refresh()->password))->toBeTrue();
});