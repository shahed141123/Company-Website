@extends('frontend.master')
@section('content')

    <div class="masthead">
        <div class="container">
            @if (!empty($whatwedo))
                <div class="row align-items-center">
                    <div class="col-lg-7 py-4">
                        <h1 class="mb-4 what-we-do-title">{{ $whatwedo->bannner_title }}</h1>
                        <p class="text-white what-we-do-title" style="text-align: justify;letter-spacing: normal;">
                            {!! $whatwedo->bannner_description !!} </p>
                        <a class="btn-white mt-5 py-3" href="{{ route('contact') }}">Talk with us</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="py-5 px-4 masthead-cards">
                            <div>
                                <div class="d-flex">
                                    <a href="{{ $whatwedo->bannner_btn_one_link }}" class="what-we-do-banner-card">
                                        <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                                            <div class="card-body what-we-banner-card text-center p-4">
                                                <div class="text-center">
                                                    <i class="fa-lightbulb-o "></i>
                                                    <!-- <i class="fa-duotone fa-lightbulb-on "></i> -->
                                                    {{-- <i class="fa-solid fa-lightbulb-on"></i> --}}
                                                    <i class="{{ $whatwedo->bannner_btn_one_icon }} fa-4x my-2"></i>
                                                </div> {{ $whatwedo->bannner_btn_one_name }}
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ $whatwedo->bannner_btn_two_link }}" class="what-we-do-banner-card">
                                        <div class="card border-0 border-bottom-blue shadow-lg shadow-hover">
                                            <div class="card-body what-we-banner-card text-center  p-4">
                                                <div class="text-center">
                                                    <i class="{{ $whatwedo->bannner_btn_two_icon }} fa-4x my-2"></i>
                                                </div> {{ $whatwedo->bannner_btn_two_name }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex">
                                    <a href="{{ $whatwedo->bannner_btn_three_link }}" class="what-we-do-banner-card">
                                        <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                                            <div class="card-body what-we-banner-card text-center  p-4">
                                                <div class="text-center">
                                                    <i class="{{ $whatwedo->bannner_btn_three_icon }} fa-4x my-2"></i>
                                                </div> {{ $whatwedo->bannner_btn_three_name }}
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ $whatwedo->bannner_btn_four_link }}" class="what-we-do-banner-card ">
                                        <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                                            <div class="card-body what-we-banner-card text-center  p-4">
                                                <div class="text-center">
                                                    <i class="{{ $whatwedo->bannner_btn_four_icon }} fa-4x my-2"></i>
                                                </div> {{ $whatwedo->bannner_btn_four_name }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="shape"></div>
                        </div>
                    </div>



                </div>
            @endif
        </div>
        <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
            <defs>
                <style>
                    .a {
                        fill: none;
                    }

                    .b {
                        clip-path: url(#a);
                    }

                    .c,
                    .d {
                        fill: #f9f9fc;
                    }

                    .d {
                        opacity: 0.5;
                        isolation: isolate;
                    }
                </style>
                <clipPath id="a">
                    <rect class="a" width="1920" height="75"></rect>
                </clipPath>
            </defs>
            <title>wave</title>
            <g class="b">
                <path class="c"
                    d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48">
                </path>
            </g>
            <g class="b">
                <path class="d"
                    d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10">
                </path>
            </g>
            <g class="b">
                <path class="d"
                    d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24">
                </path>
            </g>
            <g class="b">
                <path class="d"
                    d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150">
                </path>
            </g>
        </svg>
    </div>
    <!--======// Services tab //======-->
    <section class="mt-3">
        <div class="container my-3">
            <ul class="breadcrumb text-left">

                <a href="{{ route('homepage') }}">
                    <li class="breadcrumb__item breadcrumb__item-firstChild">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Home</span>
                        </span>
                    </li>
                </a>

                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="{{ route('whatwedo') }}">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">What We Do</span>
                        </span>
                    </li>
                </a>


            </ul>
        </div>
    </section>

    <section>
        <div class="container">
            @if (!empty($whatwedo->row_one_header))
                <div class="pt-3">
                    <div class="home_title_heading" style="text-align: left;">
                        <div class="software_feature_title">
                            <h1 class="text-center pb-3">
                                <span>{{ \Illuminate\Support\Str::substr($whatwedo->row_one_header, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($whatwedo->row_one_header, 1) }}
                            </h1>
                            <h4 class="text-center px-5"> {!! $whatwedo->row_one_short_description !!} </h4>
                        </div>
                    </div>
                </div>
            @endif
            {{-- Shop Product Added End --}}
        </div>
    </section>

    <!--=======// Shop product //======-->
    <section class="pt-5 learn_more">
        <div class="container-fluid py-4">
            <div class="container">
                <div class="row align-items-center">
                    <!-- content -->
                    <div class="col-lg-8 col-sm-12">
                        <div class="home_shop_product_wrapper home_shop_product">
                            <h5> Shop Products and Hardware</h5>
                            <p class="text-justify w-75 w-sm-100">
                                Among More than
                                <strong class="main_color number-font" style="font-size:20px;">
                                    {{ $productCount }}
                                    <small>products</small>
                                </strong>
                                and
                                <strong class="main_color number-font" style="font-size:20px;">
                                    {{ $brandCount }}
                                    <small>brands</small>
                                </strong>
                                at your service, we can provide you with the tools
                                you need to succeed. Additionally, you may easily ask your exact requirements or contact
                                us at
                                anytime.
                            </p>
                            <div class="mt-5 btn-area">
                                <a href="{{ route('shop.html') }}" class="btn-color">Explore Shop</a>
                            </div>
                        </div>
                    </div>
                    <!-- product brand -->
                    <div class="col-lg-4 col-sm-12 product_brand">
                        <div>
                            <p class="fw-bold top-line-title"><span style="border-top: 4px solid #ae0a46;">Exp</span>lore
                            </p>
                            <div class="">
                                <a href="{{ route('all.category') }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h3 class="text-white brand_side_text">Product Categories ›</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=" pt-2">
                                <a href="{{ route('all.brand') }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h3 class="text-white brand_side_text">Brands ›</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=" pt-2">
                                <a href="{{ route('software.common') }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h3 class="text-white brand_side_text">Software ›</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=" pt-2">
                                <a href="{{ route('hardware.common') }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h3 class="text-white brand_side_text">Hardware ›</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            @if (!empty($whatwedo->row_one_image))
                <div class="row section-margin">
                    <div class="col-lg-6 col-md-6">
                        <div>
                            <img class="img-fluid"
                                src="{{ !empty($whatwedo->row_one_image) && file_exists(public_path('storage/' . $whatwedo->row_one_image)) ? asset('storage/' . $whatwedo->row_one_image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                alt="NGEN IT">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do_side_text">
                            <h1 class="pb-3" style="line-height: 30px !important;">{{ $whatwedo->row_one_sub_title }}
                            </h1>
                            <p>{!! $whatwedo->row_one_sub_description !!}</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="{{ $whatwedo->row_one_btn_one_link }}">
                                        <p class="text-center custom_shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_one_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_one_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="{{ $whatwedo->row_one_btn_two_link }}">
                                        <p class="text-center custom_shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_two_icon }}-arrow-up"></i>
                                            {{ $whatwedo->row_one_btn_two_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="{{ $whatwedo->row_one_btn_three_link }}">
                                        <p class="text-center custom_shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_three_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_three_name }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="{{ $whatwedo->row_one_btn_four_link }}">
                                        <p class="text-center custom_shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_four_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_four_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="{{ $whatwedo->row_one_btn_five_link }}">
                                        <p class="text-center custom_shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_five_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_five_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="{{ $whatwedo->row_one_btn_six_link }}">
                                        <p class="text-center custom_shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_six_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_six_name }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <a class="btn-color what-link" href="{{ route('contact') }}">Talk to a specialist</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section>
        <div class="container">
            <!-- Managed Service Start -->
            @if (!empty($row_two))
                <div class="row section-margin">
                    <div class="col-lg-6 col-md-6 d-sm-block d-lg-none">
                        <div>
                            <img class="img-fluid pt-3"
                                src="{{ !empty($row_two->image) && file_exists(public_path('storage/' . $row_two->image)) ? asset('storage/' . $row_two->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                alt="NGEN IT">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do_side_text">
                            <h1 class="pb-3">{{ $row_two->title }}</h1>
                            <p class="what-we-do-description">{!! $row_two->description !!}</p>

                            @if (!empty($row_two->btn_name))
                                <a class="btn-color mt-4 mb-4" href="{{ $row_two->link }}">{{ $row_two->btn_name }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-lg-block d-sm-none">
                        <div>
                            <img class="img-fluid"
                                src="{{ !empty($row_two->image) && file_exists(public_path('storage/' . $row_two->image)) ? asset('storage/' . $row_two->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                alt="NGEN IT">
                        </div>
                    </div>
                </div>
            @endif
            <!-- Managed Service end -->
        </div>
    </section>
    <section>
        <div class="container">
            <!-- Hardware Service Start -->
            @if (!empty($row_three))
                <div class="row section-margin">
                    <div class="col-lg-6 col-md-6">
                        <div>
                            <img class="img-fluid"
                                src="{{ !empty($row_three->image) && file_exists(public_path('storage/' . $row_three->image)) ? asset('storage/' . $row_three->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                alt="NGEN IT">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do_side_text">
                            {{-- <h1 class="pb-4 pt-0" style="line-height: 40px !important;">{{$row_three->badge}}</h1> --}}
                            <h1 class="pb-3 pt-0" style="line-height: 30px !important;">{{ $row_three->title }}</h1>
                            <p class="what-we-do-description">{!! $row_three->description !!}</p>
                            @if (!empty($row_three->btn_name))
                                <a class="btn-color mt-4" href="{{ $row_three->link }}">{{ $row_three->btn_name }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            <!-- Managed Service end -->
        </div>
    </section>
    <!---------End -------->
    <!----------End--------->
    <!--=====// Blog //=====-->

    <!---------End -------->

    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
@endsection
