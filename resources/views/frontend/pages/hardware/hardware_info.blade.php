@extends('frontend.master')
@section('content')
    @if (!empty($hardware_info->row_six_image))
        <style>
            .global_call_section::after {
                background: url('{{ asset('storage/' . $hardware_info->row_six_image) }}');
                content: "";
                position: absolute;
                height: 250px;
                background-position: top center;
                background-repeat: no-repeat;
                background-size: cover;
                /* background-attachment: fixed; */
                width: 100%;
                background-color: #cbc4c3;
                top: 16%;
                left: 0px;
                z-index: -1;
            }
        </style>
    @endif
    <style>
        .datatable-header {
            display: none;
        }

        div.card {
            border: 0;
            margin-bottom: 25px;
            margin-top: 0px;
        }

        .dataTables_info {
            display: none;
        }


        thead {
            display: none;
        }


        .card .card-header .nav-tabs {
            padding: 0;
        }


        .nav-tabs {
            border: 0;
            border-radius: 3px;
        }


        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }


        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }


        .nav-tabs .nav-item .nav-link.active {
            background-color: hsla(0, 0%, 100%, .2);
            transition: background-color .3s .2s;
        }






        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 0;
            border-radius: 3px;
            text-transform: uppercase;
            font-size: 12px;
            border: 0 !important;
            font-weight: 500;
            padding: 27px 25px !important;
            background-color: transparent;
        }


        .nav-pills-custom .nav-link::before {
            display: none;
        }


        .nav-link {
            display: block;
        }


        .nav-tabs .nav-item .material-icons {
            margin: -1px 5px 0 0;
            vertical-align: middle;
        }


        .nav .nav-item {
            position: relative;
        }


        div.card {
            border: 0;
            margin-bottom: 30px;
            margin-top: 0px !important;
        }


        .global_call_section_content {
            max-width: 575px;
            background-color: var(--heading);
            padding: 50px;
            margin-left: -15px;
            margin-top: -10px !important;
        }


        @media screen and (max-width: 992px) {
            #sync2 .item {
                height: 70px;
                padding: 8px 16px !important;
            }

            .brand_img_container {
                width: 350px !important;
                margin: auto;
            }

            .home_title_heading,
            .home_title_text,
            .business_seftion_button,
            .thing_together_wrapper {
                text-align: center !important;
            }

            .home_title_heading p {
                text-align: center !important;
            }

            .global_call_section::after {
                display: none;
            }

            .we_serve_title {
                margin-top: 3rem;
            }

            .footer_top p {
                font-size: 13px !important;
            }

            .footer_nav_list ul {
                text-align: center !important;
            }

            .footer_item_wrapper p {
                text-align: center;
                margin: auto;
            }

            .footer_subscribe {
                margin: auto !important;
            }
        }
    </style>
    <!--======// Header Title //======-->
    @if (!empty($hardware_info))
        <section class="common_product_header"
            style="background-image: linear-gradient(
            rgba(0,0,0,0.8),
            rgba(0,0,0,0.8)
            ),url('{{ asset('storage/' . $hardware_info->banner_image) }}');">
            <div class="container ">
                <h1>{!! $hardware_info->banner_title !!}</h1>
                <p class="text-center text-white">{!! $hardware_info->banner_short_description !!} </p>
                <div class="row ">
                    <!--BUTTON START-->
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="m-4">
                            <a class="common_button2" href="#Contact">Talk to a specialist</a>
                        </div>
                        <div class="m-4">
                            <a class="common_button2"
                                href="{{ $hardware_info->banner_btn_link }}">{{ $hardware_info->banner_btn_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!----------End--------->
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
                    <li class="breadcrumb__item">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">What We Do</span>
                        </span>
                    </li>
                </a>
                <li class="breadcrumb_divider">
                    <span>></span>
                </li>
                <a href="{{ route('hardware.info') }}">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Hardware Info</span>
                        </span>
                    </li>
                </a>
            </ul>
        </div>
    </section>
    <!--======// Feature tab //======-->


    <!--======// Information block tab //======-->
    <section>
        <div class="container">
            <div class="row gx-3">
                <div class="col-lg-8">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="animated-image parbase section">
                                    <div id="solution_image_1">
                                        <img src="{{ isset($hardware_info->row_six_image) && file_exists(public_path('storage/' . $hardware_info->row_six_image)) ? asset('storage/' . $hardware_info->row_six_image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                            alt="{{$hardware_info->row_six_title}}"
                                            title="Software Information NGENIT" class="img-fluid"
                                            style="background-color: rgb(212,208,202);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3>
                                    <span
                                        style="border-top: 3px solid #ae0a46;">{{ \Illuminate\Support\Str::substr($hardware_info->row_six_title, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($hardware_info->row_six_title, 1) }}
                                </h3>
                                <p class="software-info-paragraph" style="text-align: justify;">
                                    {!! $hardware_info->row_six_short_description !!}
                                </p>
                                @if (!empty($hardware_info->row_six_btn_name))
                                    <a href="{{ $hardware_info->row_six_btn_link }}"
                                        class="common_button2 effect02">{{ $hardware_info->row_six_btn_name }}</a>
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
                                    @if (isset($tab_one->image) && file_exists(public_path('storage/' . $tab_one->image)))
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
                                        {!! Str::words($tab_one->description, 55, $end = '...') !!}

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
                            <div class="p-5" style="background-color:#f7f6f5!important; min-height: 465px;">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        @if (isset($tabId->image) && file_exists(public_path('storage/' . $tabId->image)))
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
                                            {!! \Illuminate\Support\Str::words($tabId->description, 55, $end = '.') !!}
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
    <!--======// Information block tab //======-->
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div
                            class="card-header bg-white shadow-sm main-to-depp-gradient-2 p-5 card-header-area border-top-right-r">
                            <div class="d-flex align-items-center">
                                <h4 class="pe-2 text-white">Hardware Related</h4>
                                <h4 class="pe-2 text-white">|</h4>
                                <h4 class="text-white">Categories</h4>
                            </div>
                        </div>
                        <div class="card-header p-5 card-header-area border-bottom-left-r">
                            <div class="row card-row-area">
                                @if (!empty($categories))
                                    @foreach ($categories as $category)
                                        <div class="col-lg-3 mb-2">
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
    <!--======// Nasted tab //======-->
    <div class="section_wp">
        <!--Tab Section-->
        <div class="container mb-5">
            <!-- home title -->
            @if (!empty($hardware_info))
                <div class="nasted_tabbar_title">
                    <div class="software_feature_title">
                        <h1 class="text-center p-3">{{ $hardware_info->row_two_title }}</h1>
                    </div>
                    <p class="home_title_text w-75 mx-auto pb-4">
                        {!! $hardware_info->row_two_short_description !!}
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
                            <div class="row gx-4">
                                @foreach ($brands as $brand)
                                    <div class="col-lg-2 col-sm-12">
                                        <div class="card rounded-0 brand_img_container">
                                            <div class="card-body image_box">
                                                <div class="brand-images">
                                                    <a href="{{ route('brandpage.html', $brand->slug) }}">
                                                        <img src="{{ asset('storage/' . $brand->image) }}"
                                                            class="img-fluid" alt="{{ $brand->title }}"> </a>
                                                </div>
                                            </div>
                                            <div class="card-footer border-0 p-0 m-0">
                                                <div class="brand_btns"
                                                    style="justify-content: center;
                                                      background: #ae0a46;
                                                      color: white;
                                                      font-size: 13px;
                                                      display: flex;">
                                                    <a class="text-white py-2"
                                                        href="{{ route('brandpage.html', $brand->slug) }}">Details
                                                        <i class="fa-solid fa-chevron-right ms-1"></i>
                                                    </a>
                                                    <span class="ms-3 me-3" style="background: #ffff;">||</span>
                                                    <a class="text-white py-2"
                                                        href="{{ route('custom.product', $brand->slug) }}">Shop
                                                        <i class="fa-solid fa-chevron-right ms-1"></i>
                                                    </a>
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
                                <div class="row gx-4">
                                    @php
                                        $related_brands = DB::table('brands')
                                            ->join('products', 'brands.id', '=', 'products.brand_id')
                                            ->join('categories', 'products.cat_id', '=', 'categories.id')
                                            ->where('categories.id', '=', $category->id)
                                            ->select('brands.id', 'brands.title', 'brands.image', 'brands.slug')
                                            ->distinct()
                                            ->paginate(12);
                                    @endphp
                                    @foreach ($related_brands as $related_brand)
                                        <div class="col-lg-2 col-sm-12">
                                            <div class="card rounded-0 brand_img_container">
                                                <div class="card-body image_box">
                                                    <div class="brand-images">
                                                        <a href="{{ route('brandpage.html', $related_brand->slug) }}">
                                                            <img src="{{ asset('storage/' . $related_brand->image) }}"
                                                                class="img-fluid" alt="{{ $related_brand->title }}"> </a>
                                                    </div>
                                                </div>
                                                <div class="card-footer border-0 p-0 m-0">
                                                    <div class="brand_btns"
                                                        style="justify-content: center;
                                                      background: #ae0a46;
                                                      color: white;
                                                      font-size: 13px;
                                                      display: flex;">
                                                        <a class="text-white py-2"
                                                            href="{{ route('brandpage.html', $related_brand->slug) }}">Details
                                                            <i class="fa-solid fa-chevron-right ms-1"></i>
                                                        </a>
                                                        <span class="ms-3 me-3" style="background: #ffff;">||</span>
                                                        <a class="text-white py-2"
                                                            href="{{ route('custom.product', $related_brand->slug) }}">Shop
                                                            <i class="fa-solid fa-chevron-right ms-1"></i>
                                                        </a>
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
    <!--======// Our expert //======-->
    @if (!empty($hardware_info))
        <section class="container mt-3 mb-5">
            <div class="software_feature_title pb-5">
                <h1 class="text-center w-75 mx-auto">{{ $hardware_info->row_four_title }}</h1>
            </div>
            <div class="row d-flex justify-content-start align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <iframe width="545" height="330"
                        src="{{ $hardware_info->row_four_video_link }}?autoplay=1&mute=1" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="home_title">
                        <h6 class="home_title_heading text-start" style="font-size: 30px;">
                            {{ $hardware_info->row_four_sub_title }}
                        </h6>
                        <p class="home_title_text text-start">
                            {{ $hardware_info->row_four_short_description }}</p>
                        <div class="business_seftion_button text-start pt-0">
                            <a class="common_button2"
                                href="{{ $hardware_info->row_four_btn_link }}">{{ $hardware_info->row_four_btn_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!---------End -------->
    <!--======// our clint tab //======-->

    <!--=====// Global call section //=====-->
    
    <!---------End -------->
    <!--=====// Tech solution //=====-->
    @if (count($tech_datas) > 0)
        <div class="section_wp2">
            <div class="container">
                @if (!empty($hardware_info->row_seven_title))
                    <div class="solution_number_wrapper">
                        <!-- title -->
                        @php
                            $sentence2 = $hardware_info->row_seven_title;
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
    <!--=====// We serve //=====-->
    <div class="container pb-5">
        <!-- section title -->
        @if (!empty($hardware_info))
            <div class="clint_help_section_heading_wrapper">
                <!-- title -->
                <h5 class="home_title_heading" style="text-align: left;">
                    <h5 class="home_title_heading" style="text-align: left;">
                        <div class="software_feature_title">
                            <h1 class="text-center pt-4 pb-4 w-75 mx-auto">
                                {{ $hardware_info->row_eight_title }}
                            </h1>
                        </div>
                    </h5>
                    <p class="home_title_text pb-3">
                        <span class="font-weight-bold">{{ $hardware_info->row_eight_short_description }} </span>
                    </p>
            </div>
        @endif
        <!-- section content wrapper -->
        <div class="row mb-4">
            <!-- content -->
            <div class="col-lg-9 col-sm-12">
                <!-- we_serveItem_wrapper -->
                <div class="row gx-2">
                    <!-- item -->
                    @if ($industrys)
                        @foreach ($industrys as $item)
                            <div class="col-lg-3 col-sm-6 mb-2">
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
                <div class="we_serve_title">
                    <p>Private sector</p>
                </div>
                <!-- sidebar list -->
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
    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection
