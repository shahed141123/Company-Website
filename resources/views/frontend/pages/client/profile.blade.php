@extends('frontend.master')
@section('content')

    <div class="content_wrapper mx-4" style="margin-top:100px">
        <!--Sidebar Wrapper-->

    <!--=========Content Wrapper=============-->
    @include('client.partials.sidebar')

    <!--Content Wrapper-->
    <div class="d-flex">

        <div id="userSideButton_wrapper">
            <button class="sidebarButtonStyle" onclick="userDashboardSidebarClicked()">☰</button>
        </div>
        <div id="Content_Wrapper">
            <section class="client_dashboard_content_wp">
                <!--=====// Content body //=====-->
                <!--Content title-->
                <div class="row client_db_profile_header">
                    <div class="col-12 d-flex">
                        <img src="{{ asset('storage/Img1/1664345844.jpg') }}" class="img-fluid" alt="">
                        <div class="client_db_profile_title ">
                            <h3>HELLO, I'M PATRYCJA</h3>
                            <p>I am a versatile graphic designer who can approach marketing projects from concept to
                                implementation.</p>
                        </div>
                    </div>
                </div>
                <!--Content Detailes-->
                <div class="row">
                    <div class="col-lg-6 col-sm-12 client_db_details">
                        <h3>Details</h3><br>
                        <div>
                            <label><strong>Name:</strong></label>
                            <label>Motiur Rahman</label>
                        </div>
                        <hr class="mx-0 mt-2 p-0">
                        <div>
                            <label><strong>Age:</strong></label>
                            <label>22 Years</label>
                        </div>
                        <hr class="mx-0 mt-2 p-0">
                        <div>
                            <label><strong>Email:</strong></label>
                            <label>motiur.cmt@gmail.com</label>
                        </div>
                        <hr class="mx-0 mt-2 p-0">
                        <div>
                            <label><strong>Contact:</strong></label>
                            <label>01909302126</label>
                        </div>
                        <hr class="mx-0 mt-2 p-0">
                        <div>
                            <label><strong>Location:</strong></label>
                            <label>Shariatpur, Dhaka, Bangladesh</label>
                            <h6></h6>
                        </div>
                        <hr class="mx-0 mt-2 p-0">

                    </div>
                    <div class="col-lg-6 col-sm-12 client_db_about">
                        <h3>About me</h3>
                        <p>I am an allround web designer.Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>

@endsection
