<?php

namespace App\Http\Middleware;

use Closure;

class manajer
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
        if (auth()->user()->level == 2){
            return $next($request);
        }
        return redirect('/');
    }
}
