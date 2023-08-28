@extends('frontend.master')
@section('content')
    <style>
        .fa-4x {
            font-size: 4em !important;
        }

        .img-fluid {
            border-radius: 15px;
        }

        .masthead a {
            color: #ae0a46;
        }

        .service_card {
            font-size: 14px !important;
            color: #303030;
        }

        .learn_more {
            padding-bottom: 40px;
            background: #ffffff;
            border-top: 0px solid silver;
            border-bottom: 0px solid silver;
        }
    </style>
    <div class="masthead">
        <div class="container">
            @if (!empty($whatwedo))
                <div class="row align-items-center">
                    <div class="col-lg-7 py-5">
                        <h1 class="mb-4 w-75">{{ $whatwedo->bannner_title }}</h1>
                        <p class="text-white w-75" style="text-align: justify;">{!! $whatwedo->bannner_description !!} </p>
                        <a class="common_button3 py-3" href="{{ route('contact') }}">Talk with us</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="py-5 px-4 masthead-cards">
                            <div style="position: relative; top: -30px;">
                                <div class="d-flex">
                                    <a href="{{ $whatwedo->bannner_btn_one_link }}" class="w-50 pr-3"
                                        style="height: 150px;">
                                        <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                                            <div class="card-body text-center p-4">
                                                <div class="text-center">
                                                    <i class="fa-lightbulb-o "></i>
                                                    <!-- <i class="fa-duotone fa-lightbulb-on "></i> -->
                                                    {{-- <i class="fa-solid fa-lightbulb-on"></i> --}}
                                                    <i class="{{ $whatwedo->bannner_btn_one_icon }} fa-4x my-2"></i>
                                                </div> {{ $whatwedo->bannner_btn_one_name }}
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ $whatwedo->bannner_btn_two_link }}" class="w-50" style="height: 150px;">
                                        <div class="card border-0 border-bottom-blue shadow-lg shadow-hover">
                                            <div class="card-body text-center  p-4">
                                                <div class="text-center">
                                                    <i class="{{ $whatwedo->bannner_btn_two_icon }} fa-4x my-2"></i>
                                                </div> {{ $whatwedo->bannner_btn_two_name }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex">
                                    <a href="{{ $whatwedo->bannner_btn_three_link }}" class="w-50 pr-3"
                                        style="height: 150px;">
                                        <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                                            <div class="card-body text-center  p-4">
                                                <div class="text-center">
                                                    <i class="{{ $whatwedo->bannner_btn_three_icon }} fa-4x my-2"></i>
                                                </div> {{ $whatwedo->bannner_btn_three_name }}
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ $whatwedo->bannner_btn_four_link }}" class="w-50" style="height: 150px;">
                                        <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                                            <div class="card-body text-center  p-4">
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
                    <h5 class="home_title_heading" style="text-align: left;">
                        <div class="software_feature_title">
                            <h1 class="text-center pb-3">
                                <span>{{ \Illuminate\Support\Str::substr($whatwedo->row_one_header, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($whatwedo->row_one_header, 1) }}
                            </h1>
                        </div>
                    </h5>
                    <h4 class="text-center px-5"> {!! $whatwedo->row_one_short_description !!} </h4>
                </div>
            @endif
            {{-- Shop Product Added --}}
            <section class="pt-4 learn_more">
                <div class="container">
                    <div class="row">
                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pb-3">
                            <div class="home_shop_product_wrapper">
                                <h5> Shop Products and Hardware</h5>
                                <p class="text-justify w-75 w-sm-100">
                                    Among More than
                                    <strong style="font-family: 'Poppins', sans-serif; font-size:20px;">
                                        {{ App\Models\Admin\Product::count() }}
                                        <small>products</small>
                                    </strong>
                                    and
                                    <strong style="font-family: 'Poppins', sans-serif;font-size:18px;">
                                        {{ App\Models\Admin\Brand::count() }}
                                        <small>brands</small>
                                    </strong>
                                    at your service, we can provide you with the tools
                                    you need to succeed. Additionally, you may easily ask your exact requirements or contact
                                    us at
                                    anytime.
                                </p>
                                <div class="d-flex justify-content-start mt-5">
                                    <a href="{{ route('shop.html') }}" class="common_button effect01">Online Shop</a>
                                </div>
                            </div>
                        </div>
                        <!-- product brand -->
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-start">
                            <div>
                                <div class="">
                                    <a href="{{ route('hardware.info') }}">
                                        <div id="fed-bg">
                                            <div class="p-2">
                                                <h3 class="text-white brand_side_text">Hardware ›</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=" pt-2">
                                    <a href="{{ route('software.info') }}">
                                        <div id="fed-bg">
                                            <div class="p-2">
                                                <h3 class="text-white brand_side_text">Software ›</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=" pt-2">
                                    <a href="{{ route('all.industry') }}">
                                        <div id="fed-bg">
                                            <div class="p-2">
                                                <h3 class="text-white brand_side_text">Industry ›</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=" pt-2">
                                    <a href="{{ route('all.solution') }}">
                                        <div id="fed-bg">
                                            <div class="p-2">
                                                <h3 class="text-white brand_side_text">Solutions ›</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            {{-- Shop Product Added End --}}
            @if (!empty($whatwedo->row_one_image))
                <div class="row pt-5 pb-5">
                    <div class="col-lg-6 col-md-6" col-sm-12>
                        <div>
                            <img class="img-fluid" src="{{ asset('storage/' . $whatwedo->row_one_image) }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" col-sm-12>
                        <div class="what-we-do_side_text">
                            <h1 class="pb-3" style="line-height: 30px !important;">{{ $whatwedo->row_one_sub_title }}
                            </h1>
                            <p>{!! $whatwedo->row_one_sub_description !!}</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="{{ $whatwedo->row_one_btn_one_link }}">
                                        <p class="text-center shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_one_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_one_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="{{ $whatwedo->row_one_btn_two_link }}">
                                        <p class="text-center shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_two_icon }}-arrow-up"></i>
                                            {{ $whatwedo->row_one_btn_two_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="{{ $whatwedo->row_one_btn_three_link }}">
                                        <p class="text-center shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_three_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_three_name }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="{{ $whatwedo->row_one_btn_four_link }}">
                                        <p class="text-center shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_four_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_four_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="{{ $whatwedo->row_one_btn_five_link }}">
                                        <p class="text-center shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_five_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_five_name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="{{ $whatwedo->row_one_btn_six_link }}">
                                        <p class="text-center shadow px-2 py-4 service_card">
                                            <i class="fa-thin {{ $whatwedo->row_one_btn_six_icon }}"></i>
                                            {{ $whatwedo->row_one_btn_six_name }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <a class="common_button2" href="{{ route('contact') }}">Talk to a specialist</a>
                        </div>
                    </div>
                </div>
            @endif
            <!-- Managed Service Start -->
            @if (!empty($row_two))
                <div class="row pt-5 pb-5">
                    <div class="col-lg-6 col-md-6" col-sm-12>
                        <div class="what-we-do_side_text">
                            {{-- <h1 class="pb-4" style="line-height: 10px !important;">{{$row_two->badge}}</h1> --}}
                            <h1 class="pb-3" style="line-height: 30px !important;">{{ $row_two->title }}</h1>
                            <p>{!! $row_two->description !!}</p>
                            {{-- <div class="">
                                <ul class="" style="list-style-type: circle !important;">
                                    <li class="">As a service</li>
                                    <li class="">Managed storage, backup and recovery</li>
                                    <li class="">Managed cloud, network and compute</li>
                                    <li class="">Managed support</li>
                                    <li class="">Insight Cloud Care</li>
                                </ul>
                            </div> --}}
                            @if (!empty($row_two->btn_name))
                                <a class="common_button2" href="{{ $row_two->link }}">{{ $row_two->btn_name }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" col-sm-12>
                        <div>
                            <img class="img-fluid" src="{{ asset('storage/' . $row_two->image) }}"
                                alt="{{ $row_two->badge }}">
                        </div>
                    </div>
                </div>
            @endif
            <!-- Managed Service end -->
            <!-- Hardware Service Start -->
            @if (!empty($row_three))
                <div class="row pt-5 pb-5">
                    <div class="col-lg-6 col-md-6" col-sm-12>
                        <div>
                            <img class="img-fluid" src="{{ asset('storage/' . $row_three->image) }}"
                                alt="{{ $row_three->badge }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" col-sm-12>
                        <div class="what-we-do_side_text">
                            {{-- <h1 class="pb-4 pt-0" style="line-height: 40px !important;">{{$row_three->badge}}</h1> --}}
                            <h1 class="pb-3 pt-0" style="line-height: 30px !important;">{{ $row_three->title }}</h1>
                            <p>{!! $row_three->description !!}</p>
                            @if (!empty($row_three->btn_name))
                                <a class="common_button2" href="{{ $row_three->link }}">{{ $row_three->btn_name }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            <!-- Managed Service end -->
        </div>
    </section>
    <!----------End--------->
    <!--=====// Blog //=====-->

    <!---------End -------->

    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
@endsection
