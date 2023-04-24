<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $routeName = 'web.login';

        if ($this->guard == 'admin') $routeName = 'admin.login';

        return $request->expectsJson() ? null : route($routeName);
    }
}
