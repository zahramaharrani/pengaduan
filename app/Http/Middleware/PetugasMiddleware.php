<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PetugasMiddleware
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
       if (Auth::user()->level == 'petugas'){
        if(Auth::user()->petugas[0]->level=='petugas'){
          return $next($request);
        }else{
          abort(403);
        }
        }else{
          abort(403);
        }
       }
    }
