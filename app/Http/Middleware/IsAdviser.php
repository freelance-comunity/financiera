<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class IsAdviser
{   
    protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->hasRole(['promotor de credito'])) {
        return $next($request);
    }else{
        return abort(403);
    }
}
}
