<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MasyarakatMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->level != 'masyarakat'){
            abort(403);
        }
        return $next($request);
     }
}
