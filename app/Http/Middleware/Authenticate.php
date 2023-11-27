<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            Session::flash('alert', 'Authentication Error!');
            $currentRouteName = Route::current()->getName();
            // dd($currentRouteName);
            if (str_contains($currentRouteName, 'client')) {
                return route('client.login');
            } else {
                return route('admin.login');
            }


        }
    }
}
