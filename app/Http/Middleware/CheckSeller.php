<?php

namespace App\Http\Middleware;

use Closure;

class CheckSeller
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
        if(\App\Store::where('user_id', \Auth::user()->id)->get()->isEmpty() != 'true') 
        {
            return $next($request);
        }
        return redirect('home');
    }
}
