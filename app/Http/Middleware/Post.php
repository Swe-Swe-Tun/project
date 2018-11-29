<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Post
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
        if(Auth::check()){
            if(Auth::user()->hasRole('Admin')){
                return $next($request);
            }elseif (Auth::user()->hasRole('Post')){
                return $next($request);
            }else{
                return redirect('/');
            }

        }else{
            return redirect('/');
        }

    }
}
