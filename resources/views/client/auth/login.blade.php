@extends('frontend.master')
@section('content')
    <style>
        .labels {
            background-color: #ae0a46;
            color: white;
            border-radius: 0px;
            padding: 8px;
            font-family: "Poppins", sans-serif !important;
            font-weight: normal;
        }

        label {
            font-family: "Poppins", sans-serif !important;
            font-weight: normal;
        }

        p,
        ul {
            color: #5f5753;
            font-weight: 900;
        }

        .client-info li {
            list-style-type: disc;
        }
    </style>
    <div class="container-fluid px-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4 mx-auto">
                    <div class="row gx-0">
                        <div class="col-lg-6">
                            <div class="card border-0 rounded-0 shadow-sm my-5">
                                <div class="card-body">
                                    <h2 class="text-center">Client Portal</h2>

                                    <div>
                                        <ul class="client-info p-3">
                                            <li class="pb-4"><strong class="main_color">NEW USER: </strong>Complete the
                                                form with the
                                                registered email and
                                                password to enter into client dashboard.</li>
                                            <li class="pb-4"><strong class="main_color">FORGOT YOUR PASSWORD:</strong>
                                                Don't worry. Click
                                                "forget password"
                                                from the left section.</li>
                                            <li class="pb-4"><strong class="main_color">ALREADY REGISTERED CLIENT
                                                    :</strong> Complete the
                                                form with the registered email and password to enter into client dashboard.
                                            </li>
                                            <li class="pb-4">
                                                <strong class="main_color">PARTNER:</strong> Click <a href=""
                                                    class="text-primary">Here!</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ route('client.loginstore') }}" method="POST" class="needs-validation"
                                novalidate>
                                @csrf
                                <div class="card border-0 rounded-0 shadow-sm my-5">
                                    <div class="card-body">
                                        <div class="container py-2">
                                            <div class="row py-3">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center">Sign In</h2>
                                                    <p class="pt-2 text-center">Use Your <span
                                                            class="main_color fw-bold">NGEN IT</span> <br> Registered Email
                                                        and Password!</p>
                                                </div>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col-lg-12">
                                                    <label class="pb-1" for="email">Email</label>
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-text labels border-0 rounded-0"
                                                            id="inputGroup-sizing-default" style="cursor: pointer">
                                                            <i class="fa-solid fa-envelope"></i></span>
                                                        <input type="text" class="form-control form-control-sm rounded-0"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default">
                                                        <br>
                                                    </div>
                                                    <p class="text-muted pt-2">Enter Your Email Address</p>
                                                    <div class="col-lg-12">
                                                        <label class="pb-1" for="email">Email</label>
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text labels border-0 rounded-0"
                                                                id="inputGroup-sizing-default" style="cursor: pointer"><i
                                                                    class="fa-regular fa-eye"></i></span>
                                                            <input type="text"
                                                                class="form-control form-control-sm rounded-0"
                                                                aria-label="Sizing example input"
                                                                aria-describedby="inputGroup-sizing-default">
                                                        </div>
                                                        <p class="text-muted pt-2">Enter Your Email Address</p>
                                                    </div>
                                                    <div class="col-lg-12 pt-5">
                                                        <p class="text-center">Forget Your Password ?<a href=""
                                                                class="text-primary">Recover It!</a></p>
                                                        <p class="text-center">New Here? Then <a href=""
                                                                class="text-primary">Register Now!</a></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="w-100 btn-color">Sign In</button>
                                                    </div>
                                                </div>
                                            </div>
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
    @include('frontend.partials.footer')
@endsection

@section('scripts')
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
