<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class ShippingMiddleware
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
        if(Session::has('shipping')){
            return $next($request);
        }
        
        return redirect()->back()->with('error', 'Please enter your shipping details');
       
        
    }
}
