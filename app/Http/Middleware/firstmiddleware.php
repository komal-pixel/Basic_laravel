<?php

namespace App\Http\Middleware;

use Closure;

class firstmiddleware
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
        if($request->age && $request->age<=10){
            return redirect('noacces');
        }
        return $next($request);
    }
}
