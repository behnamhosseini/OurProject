<?php

namespace App\Http\Middleware;

use App\PhoneActivationCode;
use Closure;

class checkFullyActivated
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
        if (auth()->check()){
            return $next($request);
        }
        else if(PhoneActivationCode::where('phoneNumber', session('phoneNumber'))->pluck('activation')->first() == 2)
        {
            return $next($request);
        }
        return redirect(route('register'));

    }
}
