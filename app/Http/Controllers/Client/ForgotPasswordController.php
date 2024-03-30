<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Mail;
use Brian2694\Toastr\Facades\Toastr;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('client.auth.forgot-password');
    }

    //submit ForgetPassword Form
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clients',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([

            'email' => $request->email,
            'token' => $token,
            'created_at' => now()

          ]);

        Mail::send('mail.client_forget_password_mail', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });


        Toastr::success('We have e-mailed your password reset link!');
        return redirect()->back();
    }

    public function showResetPasswordForm()
    {
        return view('client.auth.forgot-password',['token' => $token]);
    }

    
}
