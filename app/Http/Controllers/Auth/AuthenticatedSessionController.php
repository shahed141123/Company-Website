<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        Toastr::success('You have Successfully Logged in');
        return redirect()->intended(RouteServiceProvider::HOME);

        // $request->authenticate();

        // $request->session()->regenerate();

        // $notification = array(
        //     'message' => 'Login Successfully',
        //     'alert-type' => 'success'
        // );

        // // $url = '';
        // // // dd($url);
        // // if ($request->user()->role === 'admin') {
        // //     $url = 'admin/dashboard';
        // // } elseif ($request->user()->role === 'manager') {
        // //     //dd($request->user()->role);
        // //     $url = 'admin/dashboard';
        // // } elseif ($request->user()->role === 'others') {
        // //     $url = 'admin/dashboard';
        // // }
        // // return redirect()->intended($url)->with($notification);
        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
