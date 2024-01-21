@extends('frontend.master')
@section('content')
    <style>
        body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            height: 100vh;
        }

        /* General Styling */
        .custom-form {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 600px;
            margin: auto;
        }

        .custom-form p {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.3px;
            margin: 20px 0;
        }

        .custom-form span {
            font-size: 12px;
        }

        .custom-form a {
            color: #333;
            font-size: 13px;
            text-decoration: none;
            margin: 15px 0 10px;
        }

        /* Styling for Buttons */
        .custom-form button {
            background-color: #a00080;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
            border: 2px solid #a00080;
        }

        .custom-form button:hover {
            background-color: transparent;
            color: #a00080;
            border: 2px solid #a00080;
            transition: all 0.5s ease-in;
        }

        .custom-form button.hidden {
            background-color: white;
            color: #ae0a46;
            border: 2px solid white;
            width: 50%;
        }

        .custom-form button.hidden:hover {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            transition: all 0.5s ease-in;
            width: 50%;
        }

        /* Styling for Forms */
        .custom-form form {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
        }

        .custom-form input {
            background-color: #eee;
            border: none;
            margin: 8px 0;
            padding: 10px 15px;
            font-size: 13px;
            width: 100%;
            outline: none;
        }

        /* Styling for Form Sections */
        .form-custom-form {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .custom-form.active .sign-in {
            transform: translateX(100%);
        }

        .custom-sign-up {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .custom-form.active .custom-sign-up {
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
        .toggle-custom-form {
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

        .custom-form.active .toggle-custom-form {
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

        .custom-form.active .toggle {
            transform: translateX(50%);
        }

        /* Styling for Toggle Panels */
        .toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .toggle-left {
            transform: translateX(-200%);
        }

        .custom-form.active .toggle-left {
            transform: translateX(0);
        }

        .toggle-right {
            right: 0;
            transform: translateX(0);
        }

        .custom-form.active .toggle-right {
            transform: translateX(200%);
        }

        /* Styling for Password Toggle Buttons */
        .password-toggle {
            position: absolute;
            top: 53.3%;
            right: 50px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .create-accounts {
            position: absolute;
            top: 61.3%;
            right: 50px;
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
                position: absolute;
                top: 53.3%;
                right: 50px;
                transform: translateY(-50%);
                cursor: pointer;
            }

            .create-accounts {
                position: absolute;
                top: 61.3%;
                right: 50px;
                transform: translateY(-50%);
                cursor: pointer;
            }
        }

        /* Media Query for Small Devices */
        @media screen and (max-width: 767px) {
            .password-toggle {
                position: absolute;
                top: 50.3%;
                right: 50px;
                transform: translateY(-50%);
                cursor: pointer;
            }

            .create-accounts {
                position: absolute;
                top: 63.3%;
                right: 50px;
                transform: translateY(-50%);
                cursor: pointer;
            }
        }
    </style>
    <section>
        <div class="container">
            <div class="row my-5 py-5">
                <div class="col-lg-12">
                    <div class="custom-form" id="custom-form">

                        <!-- Sign Up Form -->
                        <div class="form-custom-form custom-sign-up">
                            <form class="needs-validation" action="{{ route('clientRegister.store') }}" method="POST" novalidate>
                                @csrf
                                <h1>Create Account</h1>
                                <span>or use your email for registration</span>

                                <!-- Full Name Input -->
                                <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}"  maxlength="35" minlength="3" class="form-control" id="validationCustom01" required>

                                <!-- Email Input -->
                                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control" id="validationCustom02" required>

                                <!-- Phone Input -->
                                <input type="number" placeholder="Phone" name="phone" class="form-control" id="validationCustom03" required>

                                <!-- Password Input -->
                                <input type="password" name="password" placeholder="Password"  value="{{ old('password') }}" class="form-control" id="validationCustom04" required>

                                <!-- Password Confirmation Input -->
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" id="validationCustom05" required>

                                <!-- Eye Button for Password Visibility -->
                                <div class="password-toggle create-accounts" onclick="togglePasswordVisibility(this)">
                                    <i class="fas fa-eye"></i>
                                </div>

                                <!-- Sign Up Button -->
                                <button type="submit">Sign Up</button>
                            </form>
                        </div>

                        <!-- Sign In Form -->
                        <div class="form-custom-form sign-in">
                            <form action="{{ route('client.loginstore') }}" method="POST" class="needs-validation" novalidate>
                                @csrf
                                <h1>Sign In</h1>
                                <span>use your email password</span>

                                <!-- Email Input -->
                                <input type="email" placeholder="Email" name="email" class="form-control" id="validationCustom06"  required>

                                <!-- Password Input -->
                                <input type="password" placeholder="Password" name="password" class="form-control" id="validationCustom07" required>

                                <!-- Eye Button for Password Visibility -->
                                <div class="password-toggle" onclick="togglePasswordVisibility(this)">
                                    <i class="fas fa-eye"></i>
                                </div>

                                <!-- Forget Password Link -->
                                <a href="javascript:void()">Forget Your <span class="text-primary">Password</span>?</a>

                                <!-- Sign In Button -->
                                <button type="submit">Sign In</button>
                            </form>
                        </div>

                        <!-- Toggle Form Container -->
                        <div class="toggle-custom-form">
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
                                    <button class="hidden" id="login">Sign In</button>
                                </div>

                                <!-- Toggle Right Panel (Sign Up) -->
                                <div class="toggle-panel toggle-right">
                                    <div class="error-message mt-4">
                                        <p class="error-for-signin">
                                            <span>sign in Error For Email</span>
                                            <span class="d-none">Error For Password</span>
                                        </p>
                                    </div>
                                    <h1>Hello, Friend!</h1>
                                    <p>Register with your personal details to use all of the site features</p>
                                    <button class="hidden" id="register">Sign Up</button>
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
        function togglePasswordVisibility(icon) {
            const passwordInput = icon.previousElementSibling; // Assuming the input comes before the icon
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle eye icon style
            if (type === 'password') {
                icon.innerHTML = '<i class="fas fa-eye"></i>';
            } else {
                icon.innerHTML = '<i class="fas fa-eye-slash"></i>';
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formContainer = document.getElementById('custom-form');
            const registerBtn = document.getElementById('register');
            const loginBtn = document.getElementById('login');

            registerBtn.addEventListener('click', function() {
                formContainer.classList.add('active');
            });

            loginBtn.addEventListener('click', function() {
                formContainer.classList.remove('active');
            });

            // For Required Fields in Sign-In Form
            const signInForm = document.querySelector('.form-custom-form.sign-in form');
            const signInButton = signInForm.querySelector('button');

            signInForm.addEventListener('input', function() {
                const requiredInputs = signInForm.querySelectorAll('input[required]');
                const isAnyEmpty = Array.from(requiredInputs).some(input => input.value.trim() === '');

                signInButton.disabled = isAnyEmpty;
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
