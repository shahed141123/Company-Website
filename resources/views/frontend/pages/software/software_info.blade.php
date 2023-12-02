@extends('frontend.master')
@section('content')
    @if (!empty($software_info->row_six_image))
        <style>
            .global_call_section::after {
                background: url('{{ asset('storage/' . $software_info->row_six_image) }}');
                content: "";
                position: absolute;
                height: 250px;
                background-position: top center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                background-color: #cbc4c3;
                top: 13%;
                left: 0px;
                z-index: -1;
            }
        </style>
    @endif
    <style>
        .animated-image {
            padding: 30% 20% 20% 30%;
            margin: -30% -20% -20% -30%;
            border-radius: 0 0 0% 50%;
            overflow: hidden;
            animation: border-radius-right 12s ease-in-out infinite;
            animation-delay: 8s;
        }

        .animated-image>div {
            padding: 30% 20% 20% 30%;
            margin: -30% -20% -20% -30%;
            border-radius: 0 0 100% 0;
            overflow: hidden;
            animation: border-radius-left 20s ease-in-out infinite;
            transform: rotate(25deg) translateX(2%);
        }

        .animated-image img {
            transform: rotate(calc(25deg * -1)) translateY(-2%);
            height: 370px;
        }

        @keyframes border-radius-left {
            0% {
                border-radius: 0 0 100% 0%;
            }

            50% {
                border-radius: 0 0 50% 0%;
            }

            100% {
                border-radius: 0 0 100% 0%;
            }
        }

        @keyframes border-radius-right {
            0% {
                border-radius: 0 0 0% 50%;
            }

            50% {
                border-radius: 0 0 0% 90%;
            }

            100% {
                border-radius: 0 0 0% 50%;
            }
        }

        p {
            font-family: "Allumi Std Extended";
            /* font-family: "Klinic Slab"; */
        }

        .software-info-paragraph {
            font-size: 16px;
            font-weight: 100;
            line-height: 24px;
            text-rendering: optimizeLegibility;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .software-info-title {
            color: #222;
            font-size: 24px;
            font-weight: 400;
        }

        .blogs-area-bottom:hover {
            transform: scale(1.2);
            transition: all 0.5s;
        }

        /* For Software_info Hover */
        .hover {
            overflow: hidden;
            position: relative;
            padding-bottom: 60%;
        }

        .hover-overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 90;
            transition: all 0.4s;
        }

        .hover img {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.3s;
        }

        .hover-content {
            position: relative;
            z-index: 99;
        }


        /* DEMO 2 ============================== */
        .hover-2 .hover-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1));
        }

        .hover-2-title {
            position: absolute;
            top: 65%;
            left: 5%;
            text-align: start;
            width: 100%;
            z-index: 99;
            transition: all 0.3s;
        }

        .hover-3-title {
            position: absolute;
            top: 75%;
            left: 5%;
            text-align: start;
            width: 100%;
            z-index: 99;
            transition: all 0.3s;
        }

        .hover-2-description {
            width: 100%;
            position: absolute;
            bottom: 0;
            opacity: 0;
            left: 5%;
            text-align: start;
            z-index: 99;
            transition: all 0.3s;
        }

        .hover-2:hover .hover-2-title {
            transform: translateY(-1.5rem);
        }

        .hover-3:hover .hover-3-title {
            transform: translateY(-0.5rem);
        }

        .hover-2:hover .hover-2-description {
            bottom: 0.5rem;
            opacity: 1;
        }

        .hover-2:hover .hover-overlay {
            background: #ae0a46;
            height: 150px;
            position: absolute;
            top: 55%;
        }




        /* DEMO 4 ============================== */
        .hover-second {
            overflow: hidden;
            position: relative;
            padding-bottom: 60%;
            height: 38.5rem;
        }

        .hover-overlay-second {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 90;
            transition: all 0.4s;
        }

        .hover-second img {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.3s;
            height: 38.5rem
        }

        .hover-content {
            position: relative;
            z-index: 99;
        }



        .hover-4 .hover-overlay-second {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1));
        }

        .hover-4 .hover-4-title {
            position: absolute;
            bottom: 5%;
            left: 5%;
            text-align: start;
            width: 100%;
            z-index: 99;
            transition: all 0.3s;
        }

        .hover-4 .hover-4-description {
            width: 100%;
            position: absolute;
            top: 95%;
            opacity: 0;
            left: 5%;
            text-align: start;
            z-index: 99;
            transition: all 0.3s;
        }

        .hover-4:hover .hover-4-title {
            transform: translateY(-1.5rem);
        }

        .hover-4:hover .hover-4-description {
            bottom: 0.5rem;
            opacity: 1;
        }

        .hover-4:hover .hover-overlay-second {
            background: #ae0a46;
            height: 150px;
            position: absolute;
            top: 76%;
        }
    </style>

    <!--======// Header Title //======-->
    @if (!empty($software_info->banner_image))
        <section class="">
            <div>
                <img src="{{ asset('storage/' . $software_info->banner_image) }}" alt="">
                {{-- <img src="{{ !empty($software_info->banner_image) && file_exists(asset('storage/' . $software_info->banner_image)) ? asset('storage/' . $software_info->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
                    alt=""> --}}
            </div>
        </section>
    @endif
    <!----------End--------->
    <section class="pt-1">
        <div class="container my-3 mt-4">
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
                <a href="{{ route('software.info') }}">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Software Info</span>
                        </span>
                    </li>
                </a>
            </ul>
        </div>
    </section>
    <!--======// Information Section //======-->
    <section><!--=====// Global call section //=====-->
        <div class="container">
            <div class="row gx-3">
                <div class="col-lg-8">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="animated-image parbase section">
                                    <div id="solution_image_1">
                                        <img src="{{ asset('storage/' . $software_info->row_six_image) }}"
                                            alt="" alt="User talking with AI generated content engine. ChatGPT"
                                            title="Software Information NGENIT" class="img-fluid"
                                            style="background-color: rgb(212,208,202);">
                                        {{-- <img src="{{ isset($software_info->row_six_image) && file_exists(asset('storage/' . $software_info->row_six_image)) ? asset('storage/' . $software_info->row_six_image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                            alt="" alt="User talking with AI generated content engine. ChatGPT"
                                            title="Software Information NGENIT" class="img-fluid"
                                            style="background-color: rgb(212,208,202);"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3>
                                    <span
                                        style="border-top: 3px solid #ae0a46;">{{ \Illuminate\Support\Str::substr($software_info->row_six_title, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($software_info->row_six_title, 1) }}
                                </h3>
                                <p class="software-info-paragraph" style="text-align: justify;">
                                    {!! $software_info->row_six_short_description !!}
                                </p>
                                @if (!empty($software_info->row_six_btn_name))
                                    <a href="{{ $software_info->row_six_btn_link }}"
                                        class="common_button2 effect02">{{ $software_info->row_six_btn_name }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if ($tab_one)
                    <div class="col-lg-4">
                        <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    @if (isset($tab_one->image) && file_exists(asset('storage/' . $tab_one->image)))
                                        <div>
                                            <img class="pb-4" width="80px"
                                                src="{{ asset('storage/' . $tab_one->image) }}" alt="">
                                        </div>
                                    @endif
                                    <h1 class="software-info-title">
                                        <span
                                            style="border-top: 3px solid #ae0a46;">{{ \Illuminate\Support\Str::substr($tab_one->title, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($tab_one->title, 1) }}
                                    </h1>
                                    <p class="software-info-paragraph" style="text-align: justify;">
                                        {!! $tab_one->description !!}
                                    </p>
                                    @if (!empty($tab_one->btn_name))
                                        <a href="{{ $tab_one->link }}"
                                            class="common_button2 effect02">{{ $tab_one->btn_name }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row gx-3 mt-3 mb-5">
                @if ($tabIds)
                    @foreach ($tabIds as $tabId)
                        <div class="col-lg-4">
                            <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        @if (isset($tabId->image) && file_exists(asset('storage/' . $tabId->image)))
                                            <div>
                                                <img class="pb-4" width="80px"
                                                    src="{{ asset('storage/' . $tabId->image) }}" alt="">
                                            </div>
                                        @endif
                                        <h1 class="software-info-title">
                                            <span
                                                style="border-top: 3px solid #ae0a46;">{{ \Illuminate\Support\Str::substr($tabId->title, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($tabId->title, 1) }}
                                        </h1>
                                        <p class="software-info-paragraph" style="text-align: justify;">
                                            {!! $tabId->description !!}
                                        </p>
                                        @if (!empty($tabId->btn_name))
                                            <a href="{{ $tabId->link }}"
                                                class="common_button2 effect02">{{ $tabId->btn_name }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--======// Feature tab //======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="card">
                        <div
                            class="card-header bg-white shadow-sm main-to-depp-gradient-2 p-5 card-header-area border-top-right-r">
                            <div class="d-flex align-items-center">
                                <h4 class="pe-2 text-white">Software Related</h4>
                                <h4 class="pe-2 text-white">|</h4>
                                <h4 class="text-white">Categories</h4>
                            </div>
                        </div>
                        <div class="card-header p-5 card-header-area border-bottom-left-r">
                            <div class="row card-row-area">
                                @if (!empty($categories))
                                    @foreach ($categories as $category)
                                        <div class="col-lg-3 mb-4">
                                            <a href="{{ route('category.html', $category->slug) }}"
                                                style="cursor: pointer;">
                                                <div class="p-4 shadow-sm bg-white">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icons_area pe-2">
                                                            <img src="{{ asset('storage/' . $category->image) }}"
                                                                alt="" height="60px" width="60px">
                                                        </div>
                                                        <div class="text_area">
                                                            {{ $category->title }}
                                                        </div>
                                                    </div>
                                                    <div class="text_area text-end">
                                                        <a href="{{ route('category.html', $category->slug) }}"><i
                                                                class="fa-solid fa-plus"></i></a>
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
            </div>
        </div>
    </section>

    <!----------End--------->
    <!--======// Our expert //======-->
    @if (!empty($software_info))
        <section class="container mt-3 mb-5">
            <div class="software_feature_title pb-5">
                <h1 class="text-center ">{{ $software_info->row_four_title }}</h1>
            </div>
            <div class="row d-flex justify-content-start align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <iframe width="545" height="330"
                        src="{{ $software_info->row_four_video_link }}?autoplay=1&mute=1" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <h5 class="home_title_heading" style="text-align: left;">
                            {{ $software_info->row_four_sub_title }}
                        </h5>
                        <p class="home_title_text pt-3" style="text-align: left;">
                            {{ $software_info->row_four_short_description }}</p>
                        <div class="pt-3">
                            <a class="common_button2"
                                href="{{ $software_info->row_four_btn_link }}">{{ $software_info->row_four_btn_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--======// Nasted tab //======-->
    <div class="section_wp">
        <!--Tab Section-->
        <div class="container mb-5">
            <!-- home title -->
            @if (!empty($software_info))
                <div class="nasted_tabbar_title">
                    <div class="software_feature_title">
                        <h1 class="text-center p-3">{{ $software_info->row_two_title }}</h1>
                    </div>
                    <p class="home_title_text pb-4">
                        {!! $software_info->row_two_short_description !!}
                    </p>
                </div>
            @endif
            <!-- Tab Area Start -->
            <div class="row">
                <div class="px-0" style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px">
                    <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                            <h1># All Category</h1>
                        </div>
                        @foreach ($categories as $index => $category)
                            <div class="item">
                                <h1>{{ $category->title }}</h1>
                            </div>
                        @endforeach

                    </div>

                    <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row gx-0">
                                @foreach ($brands as $brand)
                                    <div class="col-lg-3 col-md-2 col-sm-4">
                                        <div class="ag-offer_item"
                                            style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                                            <div class="ag-offer_visible-item">
                                                <div class="ag-offer_img-box d-felx justify-content-center mx-auto">
                                                    <img src="{{ asset('storage/' . $brand->image) }}"
                                                        class="ag-offer_img" alt="{{ $brand->title }}" width="150px"
                                                        height="150px" />
                                                </div>
                                            </div>
                                            <div class="ag-offer_hidden-item">
                                                <div class="mx-auto">
                                                    <div class="brand_btns"
                                                        style="justify-content: center;background: #ae0a46;padding: 7px;color: white;font-size: 16px;display: flex;">
                                                        <a class="text-white"
                                                            href="{{ route('brandpage.html', $brand->slug) }}">Details
                                                            | </a>
                                                        <a class="text-white ms-1"
                                                            href="{{ route('custom.product', $brand->slug) }}"><span>Shop</span>
                                                        </a>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12 col-md-12 col-sm-12 text-end mt-2 px-4"
                                    style="padding-top: 1rem; color: #ae0a46;">
                                    <a class="text-site" href="{{ route('all.brand') }}">See
                                        More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @foreach ($categories as $index => $category)
                            <div class="item">
                                <div class="row gx-0">
                                    @php
                                        $related_brands = DB::table('brands')
                                            ->join('products', 'brands.id', '=', 'products.brand_id')
                                            ->join('sub_categories', 'products.sub_cat_id', '=', 'sub_categories.id')
                                            ->where('sub_categories.id', '=', $category->id)
                                            ->select('brands.id', 'brands.title', 'brands.image', 'brands.slug')
                                            ->distinct()
                                            ->paginate(12);
                                    @endphp
                                    @foreach ($related_brands as $related_brand)
                                        <div class="col-lg-3 col-md-2 col-sm-4">
                                            <div class="ag-offer_item"
                                                style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                                                <div class="ag-offer_visible-item">
                                                    <div class="ag-offer_img-box d-felx justify-content-center mx-auto">
                                                        <img src="{{ asset('storage/' . $related_brand->image) }}"
                                                            class="ag-offer_img" alt="{{ $related_brand->title }}"
                                                            width="150px" height="150px" />
                                                    </div>
                                                </div>
                                                <div class="ag-offer_hidden-item">
                                                    <div class="mx-auto">
                                                        <div class="brand_btns"
                                                            style="justify-content: center;background: #ae0a46;padding: 7px;color: white;font-size: 16px;display: flex;">
                                                            <a class="text-white"
                                                                href="{{ route('brandpage.html', $related_brand->slug) }}">Details
                                                                | </a>
                                                            <a class="text-white ms-1"
                                                                href="{{ route('custom.product', $related_brand->slug) }}"><span>Shop</span>
                                                            </a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-end mt-2 px-4"
                                        style="padding-top: 1rem; color: #ae0a46;">
                                        <a class="text-site" href="{{ route('category.html', $category->slug) }}">See
                                            More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!---------End -------->

    @if (!empty($software_info))
        <section class="clint_tab_section my-5 ">
            <div class="container">
                <div class="clint_tab_content pb-3">
                    <!-- home title -->
                    <div class="home_title mt-3">
                        <div class="software_feature_title">
                            <h1 class="text-center ">{{ $software_info->row_five_title }} </h1>
                        </div>
                        <p class="home_title_text solution_para py-3 pb-4 mb-1">{!! $software_info->row_five_short_description !!}
                        </p>
                    </div>
                    <!-- Client Tab Start -->
                    <div class="row my-5">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                        @if (!empty($tech_glossy1->title))
                                        <div>
                                            <div class="hover hover-2 text-white rounded">
                                                <img src="{{ !empty($tech_glossy1->image) && file_exists(asset('storage/' . $tech_glossy1->image)) ? asset('storage/' . $tech_glossy1->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                                    alt="">
                                                <div class="hover-overlay"></div>
                                                <div class="hover-2-content px-5 py-4">
                                                    <p class="hover-2-title text-uppercase font-weight-bold mb-0">
                                                        <span class="font-weight-light">{{$tech_glossy1->badge}}</span>
                                                        <br>
                                                        <span style="font-size: 20px; margin-right: 44px;">
                                                            {{$tech_glossy1->title}}
                                                        </span>
                                                    </p>

                                                    <p class="hover-2-description text-uppercase mb-0">
                                                        <a href="{{route('techglossy.details',$tech_glossy1->title)}}" class="text-white">read more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if (!empty($tech_glossy2->title))
                                            <div class="mt-4">
                                                <div class="hover hover-2 text-white rounded">
                                                    <img src="{{ isset($tech_glossy2->image) && file_exists(asset('storage/' . $tech_glossy2->image)) ? asset('storage/' . $tech_glossy2->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                                        alt="">
                                                    <div class="hover-overlay"></div>
                                                    <div class="hover-2-content px-5 py-4">
                                                        <p class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                                class="font-weight-light">{{$tech_glossy2->badge}} </span> <br>
                                                            <span style="font-size: 20px; margin-right: 44px;">
                                                                {{$tech_glossy2->title}}
                                                            </span>
                                                        </p>

                                                        <p class="hover-2-description text-uppercase mb-0">
                                                            <a href="{{route('techglossy.details',$tech_glossy2->title)}}" class="text-white">read more</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @if (!empty($tech_glossy3->title))
                                    <div class="col-lg-6">
                                        <div class="hover-4 hover-second  text-white rounded">
                                            <img class="img-fluid"
                                                src="{{ isset($tech_glossy3->image) && file_exists(asset('storage/' . $tech_glossy3->image)) ? asset('storage/' . $tech_glossy3->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                                alt="">
                                            <div class="hover-overlay-second"></div>
                                            <div class="hover-4-content px-5 py-4">
                                                <p class="hover-4-title text-uppercase font-weight-bold mb-0">
                                                    <span class="font-weight-light">{{$tech_glossy3->badge}} </span> <br>
                                                    <span style="font-size: 20px; margin-right: 44px;">
                                                        {{$tech_glossy3->title}}
                                                    </span>
                                                </p>
                                                <p class="hover-4-description text-uppercase mb-0">
                                                    <a href="{{route('techglossy.details',$tech_glossy3->title)}}" class="text-white">read more</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                                <h3>
                                    <span style="border-top: 3px solid #ae0a46;">Fe</span>atured Content
                                </h3>

                                @if ($blogs)
                                    @foreach ($blogs as $blog)
                                        <div class="py-3">
                                            <a href="{{route('blog.details',$blog->id)}}">
                                                <p class="mb-0 pb-2">{{$blog->badge}}</p>
                                                <h6>{{$blog->title}}</h6>
                                            </a>
                                        </div>
                                        <hr class="m-1">
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                    <!-- Client Tab End -->
                </div>
            </div>
        </section>
    @endif




    <!--=====// Tech solution //=====-->
    {{-- @if (count($tech_datas) > 0)
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
    @endif --}}
    <!---------End -------->
    <!--=====// Bootom Blogs section //=====-->
    <section>
        <div class="container">
            <div class="row gx-4 p-2" style="margin-top: 30px;margin-bottom:30px;">
                {{-- <div class="col-lg-3" style="border-right: 1px solid #eee;">
                    <div class="d-flex align-items-center">
                        <a href="" class="blogs-area-bottom">
                            <div>
                                <img class="img-fluid"
                                    src="https://www.insight.com/content/dam/insight-web/sitesections/home/images/buy-section/buy.jpg"
                                    alt="">
                            </div>
                        </a>
                        <a href="#" class="ps-3">
                            <p class="m-0">Buy Product</p>
                            <h6>The latest hardware and software</h6>
                        </a>
                    </div>
                </div> --}}
                {{-- style="margin-bottom: 20px; box-shadow: 0px 3px 4px 0px #e6e6e5;" --}}
                @if (count($tech_datas) > 0)
                    @foreach ($tech_datas as $item)
                        <div class="col-lg-3 mb-5" style="margin-bottom: 40px;">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)"
                                    class="d-flex blogs-area-bottom justify-content-center align-items-center"
                                    style="width:90px;">
                                    {{-- <div> --}}
                                    <h1 class="mb-0" style="color:#ae0a46; font-family:cursive;">{{ $item->header }}
                                    </h1>
                                    {{-- <img class="img-fluid"
                                            src="https://www.insight.com/content/dam/insight-web/sitesections/home/images/buy-section/buy.jpg"
                                            alt=""> --}}
                                    {{-- </div> --}}
                                </a>
                                <a href="javascript:void(0)" class="ps-3">
                                    <p class="m-0">{{ $item->footer }}</p>
                                    <h6>{{ $item->short_description }}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!---------End -------->
    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection
@push('scripts')
    <script type="text/javascript">
        const scrollContainer = document.querySelector(".sub_tabs_button");
        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });
    </script>
@endpush
