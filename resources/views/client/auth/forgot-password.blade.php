@extends('frontend.master')
@section('content')
<section>
    <div class="container login-container">
        <div class="row justify-content-center align-items-center client-login-form">
            <form action="{{ route('forget.password.post') }}" method="POST">
                @csrf
                <div class="col-lg-10 offset-lg-1 mx-auto">
                    <div class="row card-container">
                        <div class="col-lg-6 sign-in-form shadow-sm py-5 my-auto">
                            <div class="text-center">
                                <h1 class="main-title">Forgot Password</h1>
                                {{-- <h3 class="text-center py-3">Welcome Back !</h3>
                                <p class="subtitle pt-2">Use Your <span class="main_color">NGen It </span>Registered <br>
                                    Email and Password</p> --}}
                            </div>
                            <div class="px-5 pt-5 py-5">
                                <div class="pt-4">
                                    <label for="" class="form-label">Email Address</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text border-0" id="addon-wrapping"
                                            style="cursor: pointer; background-color: #ae0a46;"><i
                                                class="fa-solid fa-envelope text-white"></i></span>
                                        <input type="email" class="form-control rounded-1 client-login-field"
                                            name="email" class="loginEmailInput" placeholder="your-email@mail.com"
                                            aria-label="your-email@mail.com" aria-describedby="addon-wrapping">
                                        <span class="email-login-message"></span>
                                    </div>
                                </div>
                                {{-- <div class="pt-4">
                                    <label for="" class="form-label">Password</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text border-0 toggle-passwordlogin" toggle="#passwordLogin"
                                            id="addon-wrapping" style="cursor: pointer; background-color: #ae0a46;"><i
                                                class="fa-solid fa-eye-slash text-white"></i></span>
                                        <input type="password" name="password" required id="passwordLogin"
                                            class="form-control rounded-1 client-login-field loginPasswordInput"
                                            placeholder="*******************" aria-label="Password"
                                            aria-describedby="addon-wrapping">
                                    </div>
                                </div> --}}
                                <div class="mt-5">
                                    <button type="submit" class="btn-color w-100">
                                        Reset Password
                                    </button>
                                </div>
                                {{-- <div class="text-center pt-5">
                                    <p class="subtitle m-0">Forgot Your Password?
                                        <a href="{{route('forget.password.get')}}" class="main_color">
                                            Recover It!</a>
                                        </p>
                                    <p class="subtitle m-0 show-register">New Here? Then<a href="javascript:void()"
                                            class="main_color"> Register
                                            Now!</a>
                                    </p>
                                </div> --}}

                            </div>
                        </div>
                        <div class="col-lg-6 sign-in-area py-5">
                            <div class="text-start ps-3 pe-2">
                                <h1 class="main-title text-center">User Board</h1>
                                <ul>
                                    <li class="pb-3 pt-3">
                                        <strong class="main_color">New User:</strong>
                                        Complete the form with the registered email & password to enter into client
                                        dashboard.
                                    </li>
                                    <li class="pb-3">
                                        <strong class="main_color">Forgot Password:</strong>
                                        Recover your password by following the instructions sent to your registered email
                                        address.
                                    </li>
                                    <li class="pb-3">
                                        <strong class="main_color">Already Registered:</strong>
                                        Registered user. If you are facing issues or have questions, please contact our
                                        support
                                        team.
                                    </li>
                                    <li class="pb-3">
                                        <strong class="main_color">Are Your Partner ?:</strong>
                                        <a href="{{route('client.login')}}" class="text-primary">Click</a> To Partner Login
                                    </li>
                                </ul>

                                <div>
                                    <img class="img-fluid" src="https://i.ibb.co/Tgd1zfd/Client-Login.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
