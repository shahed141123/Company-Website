{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('admin.password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ngen It | Forgot Password</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('backend/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- /global stylesheets -->

    <!-- Custom CSS styles -->
    <style>
        .back_img img {
            object-fit: contain;
            width: 100%;
            height: 100%;
        }

        .admin-login-form {
            padding: 30px 60px;
            border: none;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .form-check-input:checked {
            background-color: #ae0a46;
            border-color: var(--form-check-input-checked-border-color);
        }

        .form-control-feedback-start .form-control-feedback-icon {
            left: 0;
            border-right: 1px solid #ae0a46;
            background-color: #ae0a46;
            color: white;
            padding: 10px;
        }

        .main_color {
            color: #ae0a46;
        }

        @media screen and (max-width: 767px) {
            .back_img {
                display: none;
            }

            .admin-login-form {
                padding: 30px 60px;
                border: none;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <!-- Page content -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- Left Column with Background Image -->
                <div class="col-lg-5 col-sm-12 p-0" style="border-right: 1px solid #eee">
                    <div class="back_img">
                        <img class="img-fluid"
                            src="https://i.ibb.co/S5gB7Jh/Backend-side-image-NGen-IT.jpg"
                            alt="">
                    </div>
                </div>

                <!-- Right Column with Login Form -->
                <div class="col-lg-7 col-sm-12 p-0">
                    <div class="d-flex justify-content-center align-items-center"
                        style="background-color: white; height: 100vh;">
                        <div class="d-flex justify-content-center align-items-center">
                            <form class="login-form needs-validation" method="POST"
                                action="{{ route('admin.password.email') }}" style="width: 30rem;" novalidate>
                                @csrf



                                <div class="card mb-0 admin-login-form pt-1">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <!-- Brand Logo -->
                                            <div class="d-inline-flex align-items-center justify-content-center mb-2">
                                                <img class="img-fluid" width="130px"
                                                    src="https://www.ngenitltd.com/storage/RZlRwzfUA8get0PcCzQphbeIJu6OhSL7ltNc4xiZ.png"
                                                    alt="">
                                            </div>
                                            <h4 class="main_color">Forgot Your Password ?</h4>
                                            <p class="pb-2">Give us your email, and we'll send a link to reset your
                                                password.</p>
                                        </div>

                                        <!-- Email Input -->
                                        <div class="mb-3 text-left">
                                            <label class="form-label">Recover Email</label>
                                            <div class="form-control-feedback form-control-feedback-start">
                                                <input type="email" name="email" class="form-control"
                                                    style="border-radius: 0px; border: 0px; background-color:#eee;"
                                                    placeholder="john@doe.com" required>
                                                <div class="invalid-feedback">Enter your Email</div>
                                                <div class="form-control-feedback-icon">
                                                    <i class="fas fa-envelope text-white" style="padding-top: 2px"></i>
                                                </div>
                                            </div>
                                            @error('email')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Sign In Button -->
                                        <div class="text-center mb-3 pt-3">
                                            <p class="text-muted m-0 p-0">Have You Recalled The Password <a
                                                    class="main_color" href="{{ route('admin.login') }}">Login !</a></p>
                                            <button type="submit" class="btn w-md-100 w-100 mt-3"
                                                style="background:#ae0a46;border-radius: 0px;color: white;border: none;">Send
                                                Link</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- Core JS files -->
    <script src="{{ asset('backend/assets/demo/demo_configurator.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script src="{{ asset('backend/assets/demo/pages/form_validation_styles.js') }}"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.querySelector('input[name="password"]');
            const passwordToggleIcon = document.querySelector('.password-toggle-icon i');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggleIcon.classList.remove('fa-eye-slash');
                passwordToggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = "password";
                passwordToggleIcon.classList.remove('fa-eye');
                passwordToggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>

</html>
