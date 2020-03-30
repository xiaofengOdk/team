<?php

namespace App\Http\Middleware;

use Closure;

class Chokentoken
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
        $adminuser=session('adminuser');
        if(!$adminuser){
            return redirect('login/index');
        }
            return $next($request);
    }
}
