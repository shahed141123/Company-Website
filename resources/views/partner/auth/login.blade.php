@extends('frontend.master')
@section('content')
    <section id="sign-in-container-area">
        <div class="row py-5">
            <div class="col-lg-4 offset-lg-4">
                <div class="partner-form-container sign-in-container mx-auto client_login">
                    <form action="{{ route('partner.login') }}" method="POST" id="partnerLoginForm">
                        @csrf
                        <h2 class="main_color mb-1">Partner Login</h2>

                        <input class="mt-3" name="email" type="email" placeholder="Email" required/>
                        <span class="text-danger text-start p-0 m-0 email_validation" style="display: none;">Please input
                            valid email</span>
                        <input class="mt-3" name="password" type="password" placeholder="Password" required/>
                        <i class="fas fa-eye transform-v-center view-password"></i>
                        <h6 class="mt-4">Don't Have An Account ? <a href="javascript:void(0);"
                                class="mb-3 mt-2 main_color" id="signUp">Register Now</a></h6>
                        {{-- <a href="javascript:void(0);" class="mb-1 mt-3">Forgot your password?</a> --}}
                        <button type="submit" class="partner-login-button mt-4">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="sign-up-container-area" style="display: none">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="partner-container" id="partner-login-container">
                        <div class="partner-form-container sign-up-container">
                            <form action="{{ route('partner.store') }}" method="POST" id="partnersignUpForm">
                                @csrf
                                <h2 class="pb-1 pt-0 mb-1 main_color">Partner Register</h2>
                                Allready Have An Account ?<a href="javascript:void(0);" class="mb-3"> <span id="signIn"
                                        class="main_color">Sign In Now</span></a>
                                <input class="input_login registered_name" type="text" name="name"
                                    placeholder="Full name" required value="{{ old('name') }}" maxlength="35"
                                    minlength="3">
                                <input class="input_login" type="email" name="email" placeholder="Email" required
                                    value="{{ old('email') }}">
                                <span class="text-danger text-start p-0 m-0 email_validation" style="display: none;">Please
                                    input valid email</span>
                                <input class="input_login" type="text" name="tin_number" placeholder="Tin Number"
                                    value="{{ old('tin_number') }}" required>
                                <input class="input_login password_strength" type="password" name="password"
                                    placeholder="Password" required value="{{ old('password') }}">
                                <i class="fas fa-eye transform-v-center view-password"></i>
                                <div id="input_loginStrength" style="display: none;">
                                    Password Strength: <span id="input_loginStrengthIndicator"></span>
                                </div>
                                <input class="input_login confirm_password" type="password" name="password_confirmation"
                                    placeholder="Confirm Password" required>
                                <span class="confirm_message"></span>
                                <div class="checkbox-wrapper-21 mt-2">
                                    <label class="control control--checkbox">
                                        Please Read Our <a href="javascript:void(0);" class="main_color">Policy</a> And
                                        Terms.
                                        <input class="main_color" type="checkbox" checked disabled />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                                <button type="submit" class="partner-login-button">Sign Up</button>
                            </form>
                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                {{-- <div class="overlay-panel overlay-left">
                                    <h1>Welcome Back!</h1>
                                    <p>To keep connected with us please login with your personal info</p>
                                    <button class="ghost partner-login-button" id="signIn">Sign In</button>
                                </div> --}}
                                <div class="overlay-panel overlay-right">
                                    <h1 class="text-white">Hello, Partner!</h1>
                                    <p>Enter your personal details and start your journey with us</p>
                                    <!-- Your Sign Up form content here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            const $signUpButton = $('#signUp');
            const $signInButton = $('#signIn');
            const $signInContainer = $('#sign-in-container-area');
            const $signUpContainer = $('#sign-up-container-area');


            $signUpButton.on('click', function() {
                // Toggle the visibility of sign in and sign up containers
                $signInContainer.toggle();
                $signUpContainer.toggle();
            });


            $signInButton.on('click', function() {
                // Toggle the visibility of sign up and sign in containers
                $signUpContainer.toggle();
                $signInContainer.toggle();
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $('.view-password').on('click', function() {
                let input = $(this).prev("input[name='password']");
                let icon = $(this).toggleClass('fa-eye fa-eye-slash');
                input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
            });

            $('.confirm_password').on('keyup', function() {
                if ($('.password_strength').val() == $('.confirm_password').val()) {
                    $('.confirm_message').html('Password is matched').css('color', 'green');
                } else {
                    $('.confirm_message').html('Password do not match').css('color', 'red');
                }
            });

            $('input[name="email"]').on("keyup change", function(e) {
                var email = $(this).val();
                // var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                var emailRegex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (emailRegex.test(email)) {
                    $('.email_validation').hide();
                } else {
                    $('.email_validation').show();
                }
            });

            $('.password_strength').on('keyup change', function() {
                var password = $(this).val();
                var strengthIndicator = $('#input_loginStrength');
                var strengthText = $('#input_loginStrengthIndicator');

                if (password.length > 0) {
                    strengthIndicator.show();
                } else {
                    strengthIndicator.hide();
                    return;
                }

                var score = calculatePasswordStrength(password);

                switch (true) {
                    case score >= 80:
                        updateStrength('Strong', 'text-success');
                        break;
                    case score >= 50:
                        updateStrength('Medium', 'text-warning');
                        break;
                    default:
                        updateStrength('Weak', 'text-danger');
                }
            });

            function calculatePasswordStrength(password) {
                var score = 0;

                // Rule 1: Minimum length
                if (password.length >= 8) {
                    score += 20;
                }

                // Rule 2: Contains both lower and uppercase characters
                if (/[a-z]/.test(password) && /[A-Z]/.test(password)) {
                    score += 20;
                }

                // Rule 3: Contains at least one digit
                if (/\d/.test(password)) {
                    score += 20;
                }

                // Rule 4: Contains at least one special character
                if (/[$@#&!]/.test(password)) {
                    score += 20;
                }

                // Rule 5: Avoid consecutive repeating characters (e.g., 'aaa')
                if (!/(.)\1{2,}/.test(password)) {
                    score += 20;
                }

                return score;
            }

            function updateStrength(text, styleClass) {
                $('#input_loginStrengthIndicator').text(text);
                $('#input_loginStrengthIndicator').removeClass().addClass(styleClass);
            }


            // $('#showPassword').change(function() {
            //     var passwordField = $('#password');
            //     if (this.checked) {
            //         passwordField.attr('type', 'text');
            //     } else {
            //         passwordField.attr('type', 'password');
            //     }
            // });
            // $('input[name="password"]').keyup(function() {
            //     var password = $(this).val();
            //     var strengthIndicator = $('#strengthIndicator');

            //     // Define password strength criteria (customize as needed)
            //     var weak = /[a-zA-Z]/.test(password) && password.length < 6;
            //     var medium = /[a-zA-Z]/.test(password) && /[0-9]/.test(password) && password.length >= 6;
            //     var strong = /[a-zA-Z]/.test(password) && /[0-9]/.test(password) && /[$@#&!]/.test(
            //         password) && password.length >= 8;

            //     if (strong) {
            //         strengthIndicator.text('Strong');
            //         strengthIndicator.removeClass().addClass('text-success');
            //         $('#passwordStrength').show();
            //     } else if (medium) {
            //         strengthIndicator.text('Medium');
            //         strengthIndicator.removeClass().addClass('text-warning');
            //         $('#passwordStrength').show();
            //     } else if (weak) {
            //         strengthIndicator.text('Weak');
            //         strengthIndicator.removeClass().addClass('text-danger');
            //         $('#passwordStrength').show();
            //     } else {
            //         $('#passwordStrength').hide();
            //     }
            // });
            // $('.input_login').keyup(function() {
            //     var password = $(this).val();
            //     var strengthIndicator = $('#input_loginStrengthIndicator');

            //     // Define password strength criteria (customize as needed)
            //     var weak = /[a-zA-Z]/.test(password) && password.length < 6;
            //     var medium = /[a-zA-Z]/.test(password) && /[0-9]/.test(password) && password.length >= 6;
            //     var strong = /[a-zA-Z]/.test(password) && /[0-9]/.test(password) && /[$@#&!]/.test(
            //         password) && password.length >= 8;

            //     if (strong) {
            //         strengthIndicator.text('Strong');
            //         strengthIndicator.removeClass().addClass('text-success');
            //         $('#input_loginStrength').show();
            //     } else if (medium) {
            //         strengthIndicator.text('Medium');
            //         strengthIndicator.removeClass().addClass('text-warning');
            //         $('#input_loginStrength').show();
            //     } else if (weak) {
            //         strengthIndicator.text('Weak');
            //         strengthIndicator.removeClass().addClass('text-danger');
            //         $('#input_loginStrength').show();
            //     } else {
            //         $('#input_loginStrength').hide();
            //     }
            // });
        });
    </script>
@endsection
