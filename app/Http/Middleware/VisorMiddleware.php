<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VisorMiddleware
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
        if (Auth::check()) {
            if (Auth::user()->RollID == 3) {
                return $next($request);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
        
    }
}
