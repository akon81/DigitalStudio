<?php

use App\Models\User;

test('guest is redirected when accessing admin panel', function () {
    $this->get('/admin')->assertRedirect();
});

test('authenticated user can access admin panel', function () {
    $user = User::factory()->create(['is_admin' => true]);

    // Authenticate using Filament's guard so middleware sees a FilamentUser.
    \Filament\Facades\Filament::auth()->login($user);

    $this->get('/admin')->assertOk();
});
