<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CartMiddleware
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
        if(Session::has('cart')){
            return $next($request);
        }
        
        return redirect()->back()->with('error', 'Please Select a Product');
    }
}
