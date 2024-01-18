@extends('frontend.master')
@section('content')
    <section id="sign-in-container-area">
        <div class="row py-5">
            <div class="col-lg-4 offset-lg-4">
                <div class="partner-form-container sign-in-container mx-auto client_login">
                    <form action="{{ route('client.loginstore') }}" method="POST" id="partnerLoginForm">
                        @csrf
                        <h2 class="main_color mb-1">Client Login</h2>

                        <input class="mt-3" name="email" type="email" placeholder="Email" required />
                        <span class="text-danger text-start p-0 m-0 email_validation" style="display: none;">Please input
                            valid email</span>
                        <input class="mt-3" name="password" type="password" placeholder="Password" required />
                        <i class="fas fa-eye transform-v-center view-password viewlogin-password"></i>
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

                            <form action="{{ route('clientRegister.store') }}" method="POST" id="partnersignUpForm">
                                @csrf
                                <div class="row mb-3">
                                    <h2 class="pb-1 pt-0 mt-4 mb-2 main_color">Client Register</h2>
                                    <h6>Already Have An Account ?<a href="javascript:void(0);" class="mb-3 main_color"
                                            id="signIn">&nbsp;Sign In Now</a></h6>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input class="input_login registered_name" type="text" name="name"
                                            placeholder="Full name" required value="{{ old('name') }}" maxlength="35"
                                            minlength="3">
                                    </div>
                                    <div class="col-12">
                                        <input class="input_login" type="email" name="email" placeholder="Email"
                                            required value="{{ old('email') }}">
                                        <input type="hidden" name="client_type" value="client">
                                        <span class="text-danger text-start p-0 m-0 email_validation"
                                            style="display: none;">Please
                                            input valid email</span>
                                    </div>
                                    <div class="col-12">
                                        <input class="input_login password_strength" type="password" name="password"
                                            placeholder="Password" required value="{{ old('password') }}">
                                        <i class="fas fa-eye transform-v-center view-password"></i>
                                        <span id="input_loginStrength" style="display: none;">
                                            Password Strength: <span id="input_loginStrengthIndicator"></span>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <input class="input_login confirm_password" type="password"
                                            name="password_confirmation" placeholder="Confirm Password" required>
                                        <span class="confirm_message"></span>
                                    </div>

                                </div>

                                <div class="checkbox-wrapper-21 mt-3 mb-3">
                                    <label class="control control--checkbox">
                                        Please Read Our <a href="javascript:void(0);" class="main_color">Policy</a> And
                                        Terms.
                                        <input class="main_color" type="checkbox" checked disabled />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                                <button type="submit" class="partner-login-button mt-4">Sign Up</button>
                            </form>
                        </div>
                        <div class="overlay-container d-md-block d-sm-none">
                            <div class="overlay">

                                <div class="overlay-panel overlay-right">
                                    <h2 class="text-white">Hello, <span class="welcome_name"></span></h2>
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
    @include('frontend.partials.footer')
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.view-password').on('click', function() {
                let input = $(this).prev("input[name='password']");
                let icon = $(this).toggleClass('fa-eye fa-eye-slash');
                input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
            });

            $('.registered_name').on('input', function() {
                var inputVal = $(this).val();
                $('.welcome_name').text(inputVal); // Assuming '.welcome_name' exists elsewhere in your HTML
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




            // $('.password_strength').keyup(function() {
            // $('.password_strength').on('keyup change', function() {

            //     var password = $(this).val();
            //     var strengthIndicator = $('#input_loginStrengthIndicator');


            //     if (password.length > 0) {
            //         $('#input_loginStrength').show();
            //     } else {
            //         $('#input_loginStrength').hide();
            //     }

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


            const $signUpButton = $('#signUp');
            const $signInButton = $('#signIn');
            const $signInContainer = $('#sign-in-container-area');
            const $signUpContainer = $('#sign-up-container-area');

            $signUpButton.on('click', function() {
                $signInContainer.hide();
                $signUpContainer.show();
            });

            $signInButton.on('click', function() {
                $signUpContainer.hide();
                $signInContainer.show();
            });
        });
    </script>
@endsection
