<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThreadsToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @throws Exception
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('threads_token')) {
            return $next($request);
        } else {
            abort(Response::HTTP_FORBIDDEN);
        }
    }
}
