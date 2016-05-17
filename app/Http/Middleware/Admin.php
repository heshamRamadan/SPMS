<?php

namespace App\Http\Middleware;
use App\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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
    	if( Auth::user()->job_type != 1)
    	{
    		return redirect()->back();
    	}
        return $next($request);
    }
}
