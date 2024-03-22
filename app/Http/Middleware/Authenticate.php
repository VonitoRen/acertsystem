<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect('login');
        }

        return $next($request);
    }
}
