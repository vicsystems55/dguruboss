<?php

namespace App\Http\Middleware;

use Closure;

use Auth;


class PaidMemberMiddleware
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
        if(Auth::check() && Auth::user()->payment_status == "paid"){

            return $next($request); 
            }

            else{

                return redirect('/unpaidmember');
            }
    }
}
