<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class resturantowner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd('exit');
        // if(!auth()->user()->role==0 || auth()->user()->isAdmin==1)
        // {
        //     dd('ab');
        //     abort(403);
        // }
        // if(auth()->user()->checkprofile_resturant==0)
        // {
        //     dd('a');
        //     return redirect()->route('resturantcategory.create');
        // }

        return $next($request);
    }
}
