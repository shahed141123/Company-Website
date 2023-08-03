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
                <div class="Login_form_title">Sign in</div>
                <!-- inner -->
             <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                <div class="login_fomr_inner">
                    <label for="username">Email</label>
                    <input type="email" name="email" id="username" placeholder="Enter Your Email">
                </div>

                <!-- inner -->
                <div class="login_fomr_inner">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="Password" placeholder="Enter Your Password">
                   <span class="login_show"><i class="bi bi-eye-slash" id="togglePassword"></i></span>
                </div>

                <!-- forget password -->
                <a href="{{ route('forgot') }}" class="forgot_pass">Forgot password?</a>

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

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#Password");
        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });
        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>

    @endsection
