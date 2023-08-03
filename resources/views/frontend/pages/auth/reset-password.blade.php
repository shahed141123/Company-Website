@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->


    <!-- Login page -->

    <div class="log_in_page">

        <!-- login form -->
        <div class="Login_form">
            @include('frontend.flash-message')
            <div class="Login_form_content">
                <div class="Login_form_title">Reset Password</div>
                <!-- inner -->
             <form method="POST" action="{{ route('password.update') }}">
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    @csrf
                <div class="login_fomr_inner">
                    <label for="username">Email</label>
                    <input type="email" name="email" id="username" value="{{ $request->email }}"> 
                </div>

                 <!-- inner -->
                 <div class="login_fomr_inner">
                    <label for="Password">Password</label>
                    <input type="password" name="password" minlength="8" id="Password" onChange="onChange()" placeholder="Enter Your Password" required>
                    <span class="login_show"><i class="bi bi-eye-slash" id="togglePassword"></i></span>

                </div>

                <!-- inner -->
                <div class="login_fomr_inner">
                    <label for="Confirm">Confirm Password</label>
                    <input type="password" name="password_confirmation" minlength="8" id="Confirm"
                        onChange="onChange()" placeholder="Enter Confirm Password" required>
                        <span class="login_show"><i class="bi bi-eye-slash" id="toggleConfirm"></i></span>

                </div>

                <!-- submit buttton -->

                <div class="submit_button">
                    <input type="submit" value="Update Password">
                </div>
            </div>

            <!-- create account -->

            <a href="{{ route('register') }}" class="create_account">
                <span>New to NgenIt?</span>
                <span>Create an account</span>
            </a>
        </div>

    </form>

    </div>

    <!-- Login page End -->

    @include('frontend.footer')
  

    @endsection