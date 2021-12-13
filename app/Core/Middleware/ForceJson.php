<?php

namespace App\Core\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceJson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $request->headers->set('Accept', 'application/json');

        return $next($request);
    }
}
