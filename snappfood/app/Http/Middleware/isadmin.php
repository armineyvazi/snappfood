<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\resturantowner\RestaurantownerController;
use Illuminate\Support\Facades\Gate;

class isadmin
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



            if(!auth()->user()->isAdmin==1)
            {
               abort(403);

            }
            // else if(auth()->user()->isAdmin==0 and auth()->user()->role==0){


            //   // return response()->view('dashboarduser');
            // }
            // else if(auth()->user()->isAdmin==0  and  auth()->user()->role==1  and auth()->user()->ckeckprofile_resturant==0)
            // {

            //     return response()->view('resturant.profile.dashboardprofile');
            //    //return redirect()->route('resturantprofile.create');
            // //    dd('f');

            // }


            return $next($request);


    }
}
