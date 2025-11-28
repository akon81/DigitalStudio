<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route as RouteFacade;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        $target = RouteFacade::has('dashboard') ? route('dashboard', absolute: false) : route('home', absolute: false);

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended($target.'?verified=1');
        }

        $request->fulfill();

        return redirect()->intended($target.'?verified=1');
    }
}
