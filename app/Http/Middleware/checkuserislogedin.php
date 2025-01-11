<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class checkuserislogedin
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
        if (empty(Session::has('userlogin'))){
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
