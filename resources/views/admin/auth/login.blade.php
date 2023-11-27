<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ngen It | Log In</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('backend') }}/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('backend') }}/assets/demo/demo_configurator.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>
    <script src="{{ asset('backend') }}/assets/demo/pages/form_validation_styles.js"></script>
    <!-- /theme JS files -->

</head>

<body>



    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">

                    <!-- Login card -->
                    <form class="login-form needs-validation" method="POST" action="{{ route('login') }}" novalidate>
                        @csrf
                        @if (Session::has('alert'))
                            <div class="alert bg-danger text-white alert-dismissible fade show">
                                <span class="fw-semibold">{{ Session::get('alert') }} . Login First</span>
                                <button type="button" class="btn-close btn-close-white"
                                    data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        @php
                            $setting = App\Models\Admin\Setting::first();
                        @endphp
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                        <img src="{{ isset($setting->logo) ? url('upload/logoimage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                                            class="h-48px" alt="">
                                    </div>
                                    <h5 class="mb-0">Login to your account</h5>

                                </div>



                                <div class="mb-3 text-left">
                                    <label class="form-label">Email</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" name="email" class="form-control"
                                            placeholder="john@doe.com" required>
                                        <div class="invalid-feedback">Enter your Email</div>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                    </div>
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 text-left">
                                    <label class="form-label">Password</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="•••••••••••" required>
                                        <div class="invalid-feedback">Enter your Password</div>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="invalid-feedback">Enter your password</div>
                                </div>

                                {{-- <div class="d-flex align-items-center mb-3">
                                    <label class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input" checked>
                                        <span class="form-check-label">Remember</span>
                                    </label>

                                    <a href="login_password_recover.html" class="ms-auto">Forgot password?</a>
                                </div> --}}

                                <div class="text-center mb-3">
                                    <button type="submit" class="btn w-25"
                                        style="background:#ae0a46;border-radius: 0px;color: white;border: none;">Sign
                                        In</button>
                                </div>


                            </div>
                        </div>
                    </form>
                    <!-- /login card -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
