<?php

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;

test('password reset link can be requested via broker', function () {
    Notification::fake();

    $user = User::factory()->create();

    Password::sendResetLink(['email' => $user->email]);

    Notification::assertSentTo($user, ResetPassword::class);
});

test('password can be reset using the broker token', function () {
    Notification::fake();

    $user = User::factory()->create();

    // Send reset link and capture notification token
    Password::sendResetLink(['email' => $user->email]);

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
        $token = $notification->token;

        $status = Password::reset(
            ['email' => $user->email, 'password' => 'new-password', 'password_confirmation' => 'new-password', 'token' => $token],
            function ($u) {
                $u->forceFill(['password' => bcrypt('new-password')])->save();
            }
        );

        // Password::reset returns Password::PASSWORD_RESET on success
        expect($status)->toBe(Password::PASSWORD_RESET);

        return true;
    });
});