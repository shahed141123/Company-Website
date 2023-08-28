@extends('frontend.master')
@section('content')
    <style>
        .main {
            width: 450px;
            height: 515px;
            background: white;
            overflow: hidden;
            background: url('https://img.freepik.com/premium-vector/white-color-technology-abstract-background-vector-illustration-modern-design-concept_29865-4088.jpg') no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        #chk {
            display: none;
        }

        .signup {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .sign_back {
            color: #ae0a46;
            font-size: 13px;
            justify-content: center;
            display: flex;
            padding: 0px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        .sign_up_btn {
            color: #ae0a46;
            font-size: 1.3em;
            justify-content: center;
            border-bottom: 2px solid #ae0a46;
            display: flex;
            margin: 15px;
            padding: 0px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        .login_btns {
            color: #ae0a46;
            font-size: 1.3em;
            border-bottom: 2px solid #ae0a46;
            justify-content: center;
            display: flex;
            margin: 15px;
            padding: 0px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        .input_login {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            width: 60%;
            height: 30px;
            background: #f5f0f0;
            ;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        .logn_btn {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #ae0a46;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }

        .logn_btn:hover {
            background: #850635;
        }

        .main_color {
            color: #ae0a46;
        }

        .login {
            height: 500px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-70px);
            transition: .8s ease-in-out;
        }

        .login label {
            color: #ae0a46;
            transform: scale(.6);
        }

        #chk:checked~.login {
            transform: translateY(-470px);
        }

        #chk:checked~.login label {
            transform: scale(1);
        }

        #chk:checked~.signup label {
            transform: scale(.6);
        }

        /* Social */
        @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");

        body {
            background-color: #eee;
        }

        .login_social_link {
            font-size: 14px;
            text-align: center;
        }

        .login_social_link a {
            width: 25px;
            height: 25px;
            line-height: 10px !important;
            position: relative;
            margin: 0 5px;
            text-align: center;
            display: inline-block;
            color: #ae0a46;

            -webkit-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            -moz-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            -o-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            -ms-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
        }

        .login_social_link a i,
        .login_social_link a span {
            position: relative;
            top: 5px;
            left: 0px;
        }

        .login_social_link a:before {
            content: "";
            display: inline-block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid #ae0a46;

            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;

            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);

            -webkit-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            -moz-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            -o-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            -ms-transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);
            transition: all 0.27s cubic-bezier(0.300, 0.100, 0.580, 1.000);

        }

        .login_social_link a:hover {
            color: #fff;
        }

        .login_social_link a:hover:before {
            background: #ae0a46;
        }

        .social-icons i {
            margin: 5px;
        }

        input::placeholder {
            font-size: 13px;
        }

        @media only screen and (max-width: 600px) {
            .sign_up_btn {
                font-size: 1em;
            }
        }
    </style>
    <section class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 d-flex justify-content-center mb-3">
                <div class="main">
                    <input type="checkbox" id="chk" aria-hidden="true">

                    <div class="signup">
                        <form id="myform" action="{{ route('client.loginstore') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-end" style="margin-right: 5rem;">
                                <label class="login_btns w-25" for="chk" aria-hidden="true">Login</label>
                            </div>
                            <label class="sign_back" for="chk" aria-hidden="true" style="padding-top: 5rem;"><span
                                    class="text-black mr-2">Don't Have an Account ?</span> Register</label>

                            <input class="input_login" type="email" name="email" placeholder="Email" required="">
                            <input class="input_login" type="password" name="password" placeholder="Password"
                                required="">
                            <button type="submit" class="logn_btn">Login</button>
                        </form>
                        <!-- footer social -->
                        <div>
                            <p class="text-center"><a href="" class="main_color">Forgot Password</a> <span></span>
                            </p>
                            <div class="login_social_link">
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="login">
                        <form action="{{ route('clientRegister.store') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-end pb-2" style="margin-right: 5rem;">
                                <label class="sign_up_btn w-25 " for="chk" aria-hidden="true">Register</label>
                            </div>
                            <label class="sign_back" for="chk" aria-hidden="true"><span class="text-black mr-2">Already
                                    Have an Account ?</span> Login Now</label>

                            <input class="input_login" type="text" name="name" placeholder="Full name" required
                                value="{{ old('name') }}">
                            <input class="input_login" type="email" name="email" placeholder="Email" required
                                value="{{ old('email') }}">
                            <input class="input_login" type="number" name="phone" placeholder="Phone" required
                                value="{{ old('phone') }}">
                            <input class="input_login" type="password" name="password" placeholder="Password" required
                                value="{{ old('password') }}">
                            <input class="input_login" type="password" name="password_confirmation"
                                placeholder="Confirm Password" required>
                            <div class="">
                                <button type="submit" class="logn_btn ">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
