@extends('frontend.master')
@section('content')
    <style>
        /* General Styling */
        .custom-login-form {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 80%;
            max-width: 100%;
            min-height: 600px;
            margin: auto;
        }

        .custom-login-form li {
            line-height: 1.5;
        }

        /* Styling for Buttons */
        .custom-login-form button {
            background-color: #a00080;
            width: 175px;
            color: #fff;
            font-size: 18px;
            padding: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
            margin-top: 10px;
            cursor: pointer;
            border: 2px solid #a00080;
        }

        .custom-login-form button:hover {
            background-color: transparent;
            color: #a00080;
            border: 2px solid #a00080;
            transition: all 0.5s ease-in;
        }

        .custom-login-form button.hidden {
            background-color: white;
            color: #ae0a46;
            border: 2px solid white;
        }

        .custom-login-form button.hidden:hover {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            transition: all 0.5s ease-in;
        }

        /* Styling for Forms */
        .custom-login-form form {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
        }

        .custom-login-form input {
            background-color: #e8f0fe !important;
            border: 1px solid #e8f0fe;
            margin: 8px 0;
            padding: 12px 20px;
            font-size: 18px;
            width: 100%;
        }

        .custom-login-form ::-webkit-input-placeholder {
            color: #7c7c7c;
            font-size: 18px;
            font-weight: 700;
        }

        /* Styling for Form Sections */
        .form-custom-login-form {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .custom-login-form-sign-in {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .custom-login-form.active .custom-login-form-sign-in {
            transform: translateX(100%);
        }

        .custom-login-sign-up {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .custom-login-form.active .custom-login-sign-up {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: move 0.6s;
        }

        @keyframes move {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        /* Styling for Social Icons */
        .social-icons {
            margin: 20px 0;
        }

        .social-icons a {
            border: 1px solid #ccc;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 3px;
            width: 40px;
            height: 40px;
            background-color: #a00080;
            color: white;
            font-size: 19px;
        }

        /* Styling for Toggle Form Container */
        .toggle-custom-login-form {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 150px 0 0 100px;
            z-index: 10;
        }

        .custom-login-form.active .toggle-custom-login-form {
            transform: translateX(-100%);
            border-radius: 0 150px 100px 0;
        }

        /* Styling for Toggle Section */
        .toggle {
            background-color: #512da8;
            height: 100%;
            background-image: linear-gradient(to right, #ae0a46, #ae0057, #aa006b, #a00080, #8f0896);
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .custom-login-form.active .toggle {
            transform: translateX(50%);
        }

        /* Styling for Toggle Panels */
        .toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            /* justify-content: center; */
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            /* top: 0; */
            margin-top: 8rem;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .toggle-left {
            transform: translateX(-200%);
        }

        .custom-login-form.active .toggle-left {
            transform: translateX(0);
        }

        .toggle-right {
            right: 0;
            transform: translateX(0);
        }

        .custom-login-form.active .toggle-right {
            transform: translateX(200%);
        }

        /* Styling for Password Toggle Buttons */
        .password-toggle {
            position: relative;
            top: -41%;
            left: 90%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        /* Styling for Error Messages */
        .error-message {
            display: none;
            background: white;
            color: red;
            padding: 0px;
            width: 250px;
            text-transform: capitalize;
        }

        /* Media Query for Larger Screens */
        @media screen and (min-width: 1401px) {
            .password-toggle {
                position: relative;
                top: -41%;
                left: 90%;
                transform: translateY(-50%);
                cursor: pointer;
            }
        }

        /* Media Query for Small Devices */
        @media screen and (max-width: 767px) {
            .create-accounts {
                position: absolute;
                top: 60.3%;
                right: 25px;
                transform: translateY(-50%);
                cursor: pointer;
            }

            .password-toggle {
                position: absolute;
                top: 52.3%;
                right: 25px;
                transform: translateY(-50%);
                cursor: pointer;
            }

            .custom-login-form button {
                background-color: #a00080;
                color: #fff;
                font-size: 12px;
                padding: 10px 10px;
                font-weight: 600;
                letter-spacing: 0.5px;
                text-transform: uppercase;
                margin-top: 10px;
                cursor: pointer;
                width: 100%;
                border: 2px solid #a00080;
            }

            .custom-login-form form {
                background-color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0px 10px;
                height: 100%;
            }

            .toggle-panel h1 {
                font-size: 18px;
            }

            .custom-login-form p {
                font-size: 9px;
                line-height: 20px;
                letter-spacing: 0.3px;
                margin: 8px 0;
                text-align: start;
            }

            .custom-login-form span {
                font-size: 12px;
                text-align: center;
            }
        }
    </style>
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="custom-login-form" id="custom-login-form">

                        <!-- Sign Up Form -->
                        <div class="form-custom-login-form custom-login-sign-up">
                            <form class="needs-validation" action="{{ route('clientRegister.store') }}" method="POST"
                                novalidate>
                                @csrf
                                <div class="row mb-3">
                                    <h1>Create Account</h1>
                                    <h6>or use your email for registration</h6>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="name" placeholder="Full name"
                                            value="{{ old('name') }}" maxlength="35" minlength="3" class=""
                                            required>
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                            class="" required>
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="number" placeholder="Phone" name="phone" class=""
                                            value="{{ old('phone') }}" required>
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="password" name="password" placeholder="Password"
                                            value="{{ old('password') }}" class="" required>
                                        <i class="fas fa-eye viewPassword password-toggle"></i>
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                            class="" required>
                                        <i class="fas fa-eye viewPassword password-toggle"></i>
                                    </div>
                                </div>


                                <!-- Password Confirmation Input -->


                                <!-- Sign Up Button -->
                                <button class="" type="submit">Sign Up</button>
                            </form>
                        </div>

                        <!-- Sign In Form -->
                        <div class="form-custom-login-form custom-login-form-sign-in">
                            <form action="{{ route('client.loginstore') }}" method="POST" class="needs-validation"
                                novalidate>
                                @csrf
                                <div class="row mb-3">
                                    <h1 class="fw-bold main_color text-center">Sign In</h1>
                                    <h6 class="text-center">Use Your NGEN IT Registered Email and Password</h6>
                                </div>

                                <div class="row mb-3">
                                    <!-- Email Input -->
                                    <div class="col-lg-12">
                                        <input type="email" placeholder="Email" name="email" class="loginEmailInput"
                                            required>
                                        <span class="email-login-message"></span>
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="password" placeholder="Password" name="password"
                                            class="loginPasswordInput" required>
                                        <i class="fas fa-eye password-toggle viewPassword"></i>
                                        <span class="password-login-message"></span>
                                    </div>

                                    <!-- Forget Password Link -->
                                    <a href="javascript:void()">Forget Your <span class="text-primary">Password</span>?</a>
                                </div>

                                <!-- Sign In Button -->
                                <div class="row">
                                    <button class="" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>

                        <!-- Toggle Form Container -->
                        <div class="toggle-custom-login-form">
                            <div class="toggle">
                                <!-- Toggle Left Panel (Sign In) -->
                                <div class="toggle-panel toggle-left">
                                    <div class="error-message mt-4">
                                        <p class="error-for-signup">
                                            <span>sign up Error For Email</span>
                                            <span class="d-none">Error For Password</span>
                                        </p>
                                    </div>
                                    <h1>Welcome Back!</h1>
                                    <p>Enter your personal details to use all of the site features</p>
                                    <button class="hidden custom-login-form-login">Sign In</button>
                                </div>

                                <!-- Toggle Right Panel (Sign Up) -->
                                <div class="toggle-panel toggle-right">
                                    <div class="error-message mt-2">
                                        <p class="error-for-signin">
                                            <span>sign in Error For Email</span>
                                            <span class="d-none">Error For Password</span>
                                        </p>
                                    </div>
                                    <div class="text-center mb-4">
                                        <h1 class="mb-0">Client Portal</h1>
                                        <button class="hidden custom-login-form-register">Sign Up</button>
                                    </div>
                                    <div class="text-start">
                                        {{-- <h1 class="mb-1">Hello, Client!</h1> --}}
                                        <ul>
                                            <li class="mb-3"><i class="fa fa-star me-2"></i><strong>NEW USER ?</strong>
                                                Click on "Sign Up" button in the Above.</li>

                                            <li class="mb-3"><i class="fa fa-star me-2"></i><strong>ALREADY REGISTERED
                                                    CLIENT ?</strong>
                                                &nbsp;Complete the form with the registered email and password to enter into
                                                client dashboard.</li>

                                            <li class="mb-3"><i class="fa fa-star me-2"></i><strong>FORGOT YOUR PASSWORD
                                                    ?</strong>
                                                &nbsp; Don't worry. Click "forget password" from the left section.
                                            </li>
                                            <li class="mb-3"><i class="fa fa-star me-2"></i><strong>PARTNER ?</strong>
                                                Click <a class="fs-5 text-white fw-bold"
                                                    href="{{ route('partner.login') }}">"here..".</a>
                                            </li>
                                        </ul>
                                    </div>
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
        $('.viewPassword').on('click', function() {
            let input = $(this).prev("input[name='password']");
            let icon = $(this).toggleClass('fa-eye fa-eye-slash'); // Updated to toggle classes correctly
            input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
        });
    </script>
    <script>
        $(document).ready(function() {
            // Toggle Form for Mobile
            const toggleMobile = $('.toggle-custom-login-form-mobile');
            const formContainer = $('.custom-login-form');
            const registerBtn = $('.custom-login-form-register');
            const loginBtn = $('.custom-login-form-login');

            registerBtn.on('click', function() {
                formContainer.addClass('active');
            });

            loginBtn.on('click', function() {
                formContainer.removeClass('active');
            });

            // For Required Fields in custom-login-form-Sign-In Form
            const signInForm = $('.form-custom-login-form.custom-login-form-sign-in form');
            const signInButton = signInForm.find('button');

            signInForm.on('input', 'input[required]', function() {
                const requiredInputs = signInForm.find('input[required]');
                const isAnyEmpty = requiredInputs.toArray().some(input => $(input).val().trim() === '');

                signInButton.prop('disabled', isAnyEmpty);
            });
        });
    </script>
    {{-- For validation --}}
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
