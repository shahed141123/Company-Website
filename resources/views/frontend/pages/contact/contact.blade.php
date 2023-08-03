@extends('frontend.master')
@section('content')
    <style>
        /* 30-07-2023 */
        .solution_contact_wrapper {
            background-color: #ffffff !important;
            padding: 40px 0px;

        }

        .thing_together_wrapper p {
            color: #000;
            font-size: 16px;
            font-family: "Allumi Std Extended";
            font-weight: 400;
        }

        .thing_together_wrapper h4 {
            color: #000;
            font-size: 2.5rem;
            font-family: "Klinic Slab";
            font-weight: 400;
            margin-top: 30px;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header" style="background:url('{{ asset('frontend/images/Contact.jpg') }}');">
        <div class="container ">
            <h1>Contact Us</h1>
            <p class="text-center text-white">Browse and Explore exclusive Refurbished products from Ngen It. <br> We offer
                quality assurance for products, software and services.</p>
        </div>
    </section>
    <!----------End--------->

    <!--=====// Pageform section //=====-->
    <section class=" solution_contact_wrapper">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <div class="thing_together_wrapper">
                        <h4>
                            <span class="why_Choose_lineTop">L</span>et’s do big things together.
                        </h4>
                        <p>Get assistance with tracking an order, requesting a quote, contacting your account representative
                            and more by phone or over chat.</p>
                        <h5 class="text-black">NGen It Global Headquarters</h5>
                        <p>{{ isset($setting->address) ?? $setting->address }} </p>
                        <p>Whatsapp Number: <span
                                class="main_color">{{ isset($setting->whatsapp_number) ?? $setting->whatsapp_number }}</span>
                            <br> Information and sales: <span class="main_color"><a
                                    href="mailto:{{ isset($setting->sales_email) ?? $setting->sales_email }}">{{ isset($setting->sales_email) ?? $setting->sales_email }}</a></span>
                            <br> Support Email: <span class="main_color">
                                <a
                                    href="mailto:{{ isset($setting->support_email) ?? $setting->support_email }}">{{ isset($setting->support_email) ?? $setting->support_email }}</a>
                            </span>
                            <br> Returns:
                            <span class="main_color">
                                <a
                                    href="tel:+{{ !empty($setting->phone_one) ? $setting->phone_one : '' }}">{{ !empty($setting->phone_one) ? $setting->phone_one : '' }}</a>
                            </span>
                        </p>
                        <!-- <h5><i class="fa-solid fa-phone"></i>NgenIT</h5> -->
                        <a href="{{ route('location') }}" class="product_button">View all NGentIt office locations</a>
                    </div>
                </div>
                <!----------Sidebar Privacy Policy --------->
                <div class="col-lg-7 col-sm-12">
                    <!-- form Sidebar -->
                    <div class="background ">
                        <div class="containers">
                            <div class="screen shadow-lg">
                                <div class="screen-header">
                                    <div class="screen-header-left">
                                        <div class="screen-header-button maximize"></div>
                                        <div class="screen-header-button minimize"></div>
                                    </div>
                                    <div class="screen-header-right">
                                        <div class="screen-header-ellipsis"></div>
                                        <div class="screen-header-ellipsis"></div>
                                        <div class="screen-header-ellipsis"></div>
                                    </div>
                                </div>
                                <div class="screen-body">
                                    <div class="screen-body-item left">
                                        <div class="app-title">
                                            <span>CONTACT</span>
                                            <span>US</span>
                                        </div>
                                    </div>
                                    <form id="recaptcha-form" class="w-75 feature_form" action="{{ route('contactus.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="screen-body-item screen-body-item-right">
                                            <div class="app-form">
                                                <div class="app-form-group">
                                                    <input type="hidden" name="type" value="contact">
                                                    <input name="name" class="app-form-control" placeholder="Full NAME"
                                                        value="{{ old('name') }}" required>
                                                </div>
                                                <div class="app-form-group">
                                                    <input name="email" class="app-form-control" placeholder="EMAIL Id"
                                                        value="{{ old('email') }}" required>
                                                </div>
                                                <div class="app-form-group">
                                                    <input name="phone" class="app-form-control" placeholder="CONTACT NO"
                                                        value="{{ old('phone') }}">
                                                </div>
                                                <div class="app-form-group message">
                                                    <textarea name="message" class="app-form-control" rows="3" placeholder="Your Message"></textarea>

                                                </div>
                                                <div class="g-recaptcha" data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>

                                                {{-- <div class="g-recaptcha" id="feedback-recaptcha"
                                                    data-sitekey="{{config('services.recaptcha.site_key')}}">
                                                </div> --}}
                                                <div class="app-form-group buttons">
                                                    <button class="app-form-button"
                                                        type="submit"><strong>SEND</strong></button>
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
        </div>
    </section>
    <!---------End -------->
@endsection
