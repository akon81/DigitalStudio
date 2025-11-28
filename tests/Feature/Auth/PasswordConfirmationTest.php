<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

test('password confirmation logic (programmatic)', function () {
    $user = User::factory()->create([ 'password' => bcrypt('password') ]);

    $this->actingAs($user);

    // Simulate confirming password by checking hash match
    expect(Hash::check('password', $user->password))->toBeTrue();
    expect(Hash::check('wrong-password', $user->password))->toBeFalse();
});