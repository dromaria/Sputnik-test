<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role->role != 'admin')
        {
            abort(403,'You do not have permission to perform this action.');
        }
        return $next($request);
    }
}
