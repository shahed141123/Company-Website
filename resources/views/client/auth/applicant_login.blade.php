@extends('frontend.master')
@section('content')
    <style>
        label {
            margin-left: 5px;
        }
    </style>
    <section id="sign-in-container-area">
        <div class="row py-5">
            <div class="col-lg-4 offset-lg-4">
                <div class="partner-form-container sign-in-container mx-auto client_login">
                    <form action="{{ route('client.loginstore') }}" method="POST" id="partnerLoginForm">
                        @csrf
                        <h2 class="main_color pt-3 pb-4">Job Applicant Login</h2>

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
    <section id="sign-up-container-area" style="display: none">
        <div>
            <img src="{{ asset('frontend/images/job_registration.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="partner-container" id="partner-login-container">

                        <div class="partner-form-container sign-up-container">

                            <form action="{{ route('clientRegister.store') }}" method="POST" id="partnersignUpForm">
                                @csrf
                                <h2 class="pb-1 pt-0 mt-4 mb-2 main_color">Job Applicant Register</h2>
                                <h6>Already Have An Account ?
                                    <a href="javascript:void(0);" class="mb-3 main_color" id="signIn">&nbsp;Sign In
                                        Now</a>
                                </h6>
                                <div class="row text-start">
                                    <div class="col-lg-7 mb-3">
                                        <input type="hidden" name="user_type" value="job_seeker">
                                        <input type="hidden" name="client_type" value="job_seeker">
                                        <label for="">Full Name <span class="text-danger">*</span></label>
                                        <input class="input_login registered_name" type="text" name="name"
                                            placeholder="Full name" required value="{{ old('name') }}" maxlength="35"
                                            minlength="3">
                                    </div>
                                    <div class="col-lg-5 mb-3">
                                        <label for="">Contact Number <span class="text-danger">*</span></label>
                                        <input class="input_login" type="number" name="phone" placeholder="Mobile Number"
                                            required value="{{ old('phone') }}">
                                    </div>

                                    <div class="col-lg-7 mb-3">
                                        <label for="">Email <span class="text-danger">*</span></label>
                                        <input class="input_login" type="email" name="name" placeholder="Email"
                                            required value="{{ old('email') }}" maxlength="35" minlength="3">
                                        <span class="text-danger text-start p-0 m-0 email_validation"
                                            style="display: none;">
                                            Please input valid email
                                        </span>
                                    </div>

                                    <div class="col-lg-5 mb-3">
                                        <label for="">City</label>
                                        <input class="input_login" type="text" name="city" placeholder="City"
                                            value="{{ old('city') }}" maxlength="35" minlength="3">
                                    </div>

                                    <div class="col-lg-5 mb-3">
                                        <label for="">CV <span class="text-danger">*</span></label>
                                        <input class="input_login form-control" type="file" name="resume"
                                            placeholder="Upload Your CV" value="{{ old('resume') }}" minlength="3">
                                    </div>

                                    <div class="col-lg-7 mb-3">
                                        <label for="address">Address</label>
                                        <textarea class="input_login" name="address" id="address" rows="1"></textarea>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="">Password <span class="text-danger">*</span></label>
                                        <input class="input_login password_strength" type="password" name="password"
                                            placeholder="Password" required value="{{ old('password') }}">
                                        <i class="fas fa-eye transform-v-center view-password view-password-signup"></i>
                                        <span id="input_loginStrength" style="display: none;">
                                            Password Strength: <span id="input_loginStrengthIndicator"></span>
                                        </span>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="">Confirm Password <span class="text-danger">*</span></label>
                                        <input class="input_login confirm_password" type="password"
                                            name="password_confirmation" placeholder="Confirm Password" required>
                                        <span class="confirm_message"></span>
                                    </div>
                                </div>
                                <div class="checkbox-wrapper-21 mt-2">
                                    <label class="control control--checkbox">
                                        Please Read Our <a href="javascript:void(0);" class="main_color">Policy</a> And
                                        Terms.
                                        <input class="main_color" type="checkbox" checked disabled />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                                <button type="submit" class="partner-login-button mt-3">Sign Up</button>
                            </form>

                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                <div class="overlay-panel overlay-right">
                                    <h2 class="text-white">Hello <span class="welcome_name"></span></h2>
                                    <div class="row text-start">
                                        <p class="mb-3"><i class="fa-solid fa-star"></i> Enter your personal details and start your
                                            journey with us.</p>
                                        <p class="mb-3"><i class="fa-solid fa-star"></i> You will also be able to update your personal
                                            details after registration from your
                                            dashboard.</p>
                                        <p class="mb-3">
                                            <i class="fa-solid fa-star"></i> You can find our available jobs from
                                            <a class="text-primary fs-5 fw-bold text-decorattion-underline"
                                                href="{{ route('job.openings') }}">here..</a>
                                        </p>
                                    </div>
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
