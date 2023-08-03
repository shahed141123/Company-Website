<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next , $role)
    {
        if($request->user()->role !== $role){
            return redirect()->back()->withErrors('Please login first');
        }
        else{
            return $next($request);
        }
        // return $next($request);
    }
    // public function handle(Request $request, Closure $next)
    // {
    //     if (Auth::check()) {
    //         $user = Auth::user();
    //         $url = '';

    //         if ($user->role === 'admin') {
    //             $url = 'admin/dashboard';
    //         } elseif ($user->role === 'manager') {
    //             $url = 'admin/dashboard'; // Assuming there's a route for the manager dashboard
    //         } elseif ($user->role === 'others') {
    //             $url = 'admin/dashboard'; // Assuming there's a route for the others dashboard
    //         }

    //         return redirect()->intended($url);
    //     }

    //     return $next($request);
    // }
}
