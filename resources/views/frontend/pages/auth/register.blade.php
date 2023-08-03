@extends('frontend.master')

@section('content')
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->

    <!-- sign in page -->

    <div class="log_in_page">

        <!-- login form -->
        <div class="Login_form">
            @include('frontend.flash-message')
            <div class="Login_form_content">
                <div class="Login_form_title">Create an account</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- inner -->
                    <div class="login_fomr_inner">
                        <label for="username">Name</label>
                        <input type="text" name="name" id="username" placeholder="Enter Your Name" required>
                    </div>

                    <!-- inner -->
                    <div class="login_fomr_inner">
                        <label for="useremail">Email</label>
                        <input type="email" name="email" id="useremail" placeholder="Enter Your Email" required>
                    </div>

                    <!-- inner -->
                    <div class="login_fomr_inner">
                        <label for="Password">Password</label>
                        <input type="password" name="password" minlength="8" id="Password" onChange="onChange()"
                            placeholder="Enter Your Password" required>
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
                        <input type="submit" value="Create">
                    </div><br>
                    <div class="text-center"> Already a member? <a href="{{ route('login') }}" style="color: #ae0a46">
                            Login</a></div>
                </form>
            </div>
        </div>

    </div>
    <!-- sign in page End -->


    @include('frontend.footer')


    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const toggleConfirm = document.querySelector("#toggleConfirm");
        const password = document.querySelector("#Password");
        const confirm = document.querySelector("#Confirm");
        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        toggleConfirm.addEventListener("click", function() {
            // toggle the type attribute
            const type = confirm.getAttribute("type") === "password" ? "text" : "password";
            confirm.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>

    <script>
        function onChange() {
            const password = document.querySelector('input[name=password]');
            const confirm = document.querySelector('input[name=password_confirmation]');
            if (confirm.value === password.value) {
                confirm.setCustomValidity('');
            } else {
                confirm.setCustomValidity('Passwords do not match');
            }
        }
    </script>
@endsection
