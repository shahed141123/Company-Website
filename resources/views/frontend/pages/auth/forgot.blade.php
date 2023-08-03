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
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                   {{ session('status')}}
                </div>
                    
                @endif
             <form method="POST" action="{{ route('password.request') }}">
                    @csrf
                <div class="login_fomr_inner">
                    <label for="username">Email</label>
                    <input type="email" name="email" id="username" placeholder="Enter Your Email"> 
                </div>

                <!-- submit buttton -->

                <div class="submit_button">
                    <input type="submit" value="Log in">
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