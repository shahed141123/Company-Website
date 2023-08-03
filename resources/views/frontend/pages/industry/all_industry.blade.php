@extends('frontend.master')
@section('content')

@if (!empty($learnmore->background_image))
<style>
    .global_call_section::after {
            background: url('{{ asset('storage/' . $learnmore->background_image) }}');
            content: "";
            position: absolute;
            height: 230px;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            /* background-attachment: fixed; */
            width: 100%;
            background-color: #cbc4c3;
            top: 25%;
            left: 0px;
            z-index: -1;
        }
</style>
@endif
    <style>
        .box {
            position: relative;
            width: 100%;
        }

        .our-services {
            margin-top: 75px;
            padding-bottom: 30px;
            padding: 0 15px;
            min-height: auto;
            text-align: center;
            border-radius: 10px;
            background-color: #fff;
            transition: all .4s ease-in-out;
            box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
        }

        .our-services .icon {
            margin-bottom: -21px;
            transform: translateY(-50%);
            text-align: center
        }

        .our-services:hover h4,
        .our-services:hover p {
            color: #fff
        }

        .settings {
            transition: all 0.5s;
        }

        .settings:hover {
            transition: all 0.5s;
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #ae0a46 0%, #ae0a46 100%)
        }

        .icon img {
            background: white;
            border-radius: 50%;
        }

        ul {
            list-style-type: circle;
        }

        .common_button2 {
            padding: 15px 20px;
            cursor: pointer;
            font-family: "Allumi Std Extended";
            font-size: 13px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            background-color: var(--crimson);
            transition: 0.3s;
            outline: none;
            border: none;
            color: white;
        }
    </style>

    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url('https://www.jluxent.com/assets/images/banner.jpg');">
        <div class="container ">
            <h1>Industries We serve</h1>
            <p class="text-center text-white">We combine deep industry experience and technology <br> expertise to solve your
                IT challenges. </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('contact') }}">Talk with our specialist</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <section class="mt-5">
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
                    <li class="breadcrumb__item">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">What We Do</span>
                        </span>
                    </li>
                </a>
                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="{{ route('all.industry') }}">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Industry We Serve</span>
                        </span>
                    </li>
                </a>

            </ul>
        </div>
    </section>
    <!--=====// We serve //=====-->
    <div class="container pb-5">
        <!-- section title -->
        <div class="clint_help_section_heading_wrapper">
            <!-- title -->
            <h5 class="home_title_heading" style="text-align: left;">
                <h5 class="home_title_heading" style="text-align: left;">
                    <div class="software_feature_title">
                        <h1 class="text-center pt-4 pb-4">
                            Industries We Serve
                        </h1>
                    </div>
                </h5>
                <p class="home_title_text">
                    <span class="font-weight-bold">{{ $learnmore->industry_header }} </span>
                </p>
        </div>
        <!-- section content wrapper -->
        <div class="row mb-4">
            <!-- content -->
            <div class="col-lg-9 col-sm-12">
                <!-- we_serveItem_wrapper -->
                <div class="row">
                    <!-- item -->

                    @if ($industrys)
                        @foreach ($industrys as $item)
                            <div class="col-lg-3 col-sm-6">
                                <a href="{{ route('industry.details', $item->slug) }}" class="we_serve_item">
                                    <div class="we_serve_item_image">
                                        <img src="{{ asset('storage/' . $item->logo) }}" alt="">
                                    </div>
                                    <div class="we_serve_item_text">{{ $item->title }}</div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
            <!-- sidebar -->
            <div class="col-lg-3 col-sm-12">

                <div>
                    @if ($random_industries)
                        @foreach ($random_industries as $item)
                            <div class="pt-2">
                                <a href="{{ route('industry.details', $item->slug) }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h5 class="text-white brand_side_text">{{ $item->title }} ›</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!---------End -------->

    <!--======// Industry solution //======-->
    {{-- <div class="container mb-5">
        <div class="text-center mt-5">
            <h1>Our Industry Solution</h1>
        </div>
        <div class="row">
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div> --}}

    <!--======// our clint tab //======-->
    <section class="clint_tab_section">
        <div class="container">
            <div class="clint_tab_content pb-3">
                <!-- home title -->
                <div class="home_title mt-3">
                    <div class="software_feature_title">
                        <h1 class="text-center ">Related Contents</h1>
                    </div>
                    <p class="home_title_text">See how Ngen It has helped organizations of all sizes across every industry
                        maximize the <br> value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.
                    </p>
                </div>
                <!-- Client Tab Start -->
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">{{ $story1->badge }}</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile"
                                    aria-selected="false">{{ $story2->badge }}</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact"
                                    aria-selected="false">{{ $story3->badge }}</a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about" aria-selected="false">{{ $story4->badge }}</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="{{ asset('storage/' . $story1->image) }}"
                                                style="height:200px;width:280px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story1->badge }}
                                        </h5>
                                        <h4 style="text-align: left;">{{ $story1->title }} </h4>
                                        <p class="mb-1">{{ $story1->header }}</p>
                                        <p>{!! Str::limit($story1->short_des, 200) !!}......</p>
                                        <a href="{{ route('blog.details', $story1->id) }}" class="common_button2">Read
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="{{ asset('storage/' . $story2->image) }}"
                                                style="height:200px;width:280px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story2->badge }}
                                        </h5>
                                        <h4 style="text-align: left;">{{ $story2->title }} </h4>
                                        <p class="mb-1">{{ $story2->header }}</p>
                                        <p>{!! Str::limit($story2->short_des, 200) !!}......</p>
                                        <a href="{{ route('blog.details', $story2->id) }}" class="common_button2">Read
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="{{ asset('storage/' . $story3->image) }}"
                                                style="height:200px;width:280px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story3->badge }}
                                        </h5>
                                        <h4 style="text-align: left;">{{ $story3->title }} </h4>
                                        <p class="mb-1">{{ $story3->header }}</p>
                                        <p>{!! Str::limit($story3->short_des, 200) !!}......</p>
                                        <a href="{{ route('story.details', $story3->id) }}" class="common_button2">Read
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="{{ asset('storage/' . $story4->image) }}"
                                                style="height:200px;width:280px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story4->badge }}
                                        </h5>
                                        <h4 style="text-align: left;">{{ $story4->title }} </h4>
                                        <p class="mb-1">{{ $story4->header }}</p>
                                        <p>{!! Str::limit($story4->short_des, 200) !!}......</p>
                                        <a href="{{ route('story.details', $story4->id) }}" class="common_button2">Read
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Tab End -->
            </div>
        </div>
    </section>
    <!---------End -------->



    <!--=====// Global call section //=====-->
    <section class="global_call_section section_padding">
        <div class="container">
            <!-- content -->
            @php
                $sentence = $learnmore->consult_title;
            @endphp
            <div class="global_call_section_content">
                <div class="home_title" style="width: 100%; margin: 0px;">
                    <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                        <span>{{ \Illuminate\Support\Str::substr($sentence, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence, 1) }}

                    </h5>
                    <p class="home_title_text text-white" style="text-align: left;">{{ $learnmore->consult_short_des }}
                    </p>
                    <div class="business_seftion_button" style="text-align: left;">
                        <a href="#Contact">Explore business outcomes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--=====// Tech solution //=====-->
    @if (count($tech_datas) > 0)
        <div class="section_wp2">
            <div class="container">
                @if (!empty($software_info->row_seven_title))
                    <div class="solution_number_wrapper">
                        <!-- title -->
                        @php
                            $sentence2 = $software_info->row_seven_title;
                        @endphp
                        <h5 class="home_title_heading" style="text-align: left;">
                            <div class="software_feature_title">
                                <h1 class="text-center pb-3">
                                    <span>{{ \Illuminate\Support\Str::substr($sentence2, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence2, 1) }}
                                </h1>
                            </div>
                        </h5>
                    </div>
                @endif
                <!-- tech wrapper -->
                <div class="row">
                    <!-- item -->
                    @foreach ($tech_datas as $item)
                        <div class="col-lg-3 col-sm-6">
                            <div class="tech_solution_item">
                                <p class="tech_solution_title">{{ $item->header }}</p>
                                <p class="tech_solution_text">{{ $item->short_description }}</p>
                                <p class="tech_solution_award">{{ $item->footer }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
    <!---------End -------->

    <!--======// Our expert //======-->
    <section class="account_benefits_section_wp">
        <div class="container">
            @if ($techglossy)
                <div class="row magazine_section">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}"
                            alt="{{ $techglossy->badge }}" style="border-radius:15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 account_benefits_section">
                        <h3 style="font-size:24px">{{ $techglossy->badge }}</h3>
                        {{-- <h4 style="font-size:24px;font-weight:400;">{{ $techglossy->badge }}</h4> --}}
                        <h4 class="pb-2">{{ $techglossy->title }}</h4>
                        <p>{{ $techglossy->header }}</p>

                        <div class="my-3 col-lg-6">
                            <div class="d-flex flex-column justify-content-center">
                                @php
                                    $tag = $techglossy->tags;
                                    $tags = explode(',', $tag);
                                @endphp
                                <div class="btn-group pt-1">
                                    @foreach ($tags as $item)
                                        <button type="button"
                                            class="btn tag_btn ml-1 px-1">{{ ucwords($item) }}</button>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <a href="{{ route('techglossy.details', $techglossy->id) }}"
                            class="common_button2 text-white">Read More</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!---------End -------->


    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->

@endsection
