<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialRegisteredUserController extends Controller
{
    public function redirectSocial(string $social): \Symfony\Component\HttpFoundation\RedirectResponse|RedirectResponse
    {
        return Socialite::driver($social)->redirect();
    }

    public function callbackSocial(string $social): \Laravel\Socialite\Contracts\User
    {
        return Socialite::driver($social)->user();
    }
}
