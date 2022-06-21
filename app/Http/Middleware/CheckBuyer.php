<?php

namespace App\Http\Middleware;

use Closure;

class CheckBuyer
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
        if(\Auth::check() && \Auth::user()->selfie_idcard != '-') 
        {
            return $next($request);
        }
        return redirect('/verifKTP')->with('warning', 'Have to verify first!');
    }
}
