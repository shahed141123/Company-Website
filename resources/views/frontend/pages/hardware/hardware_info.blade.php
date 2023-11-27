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
    @if (!empty($hardware_info))
        <section class="clint_tab_section">
            <div class="container">
                <div class="clint_tab_content pb-3">
                    <!-- home title -->
                    <div class="home_title mt-3">
                        <div class="software_feature_title">
                            <h1 class="text-center">{{ $hardware_info->row_five_title }}</h1>
                        </div>
                        <p class="home_title_text">
                            {!! $hardware_info->row_five_short_description !!}
                        </p>
                    </div>
                    <!-- Client Tab Start -->
                    <div class="row">
                        @if (!empty($tab_one))
                            <div class="col-xs-12 ">
                                <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">{{ $tab_one->title }}</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">{{ $tab_two->title }}</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">{{ $tab_three->title }}</a>
                                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab"
                                            href="#nav-about" role="tab" aria-controls="nav-about"
                                            aria-selected="false">{{ $tab_four->title }}</a>
                                    </div>
                                </nav>
                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-healthcare">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tab_side_image p-0">
                                                    <img src="{{ asset('storage/' . $tab_one->image) }}"
                                                        alt="{{ $tab_one->title }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <h5 class="home_title_heading" style="text-align: left;">
                                                    {{ $tab_one->title }} </h5>
                                                <p>{!! $tab_one->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tab_side_image p-0">
                                                    <img src="{{ asset('storage/' . $tab_two->image) }}"
                                                        alt="{{ $tab_two->title }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <h5 class="home_title_heading" style="text-align: left;">
                                                    {{ $tab_two->title }} </h5>
                                                <p>{!! $tab_two->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tab_side_image p-0">
                                                    <img src="{{ asset('storage/' . $tab_three->image) }}"
                                                        alt="{{ $tab_three->title }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <h5 class="home_title_heading" style="text-align: left;">
                                                    {{ $tab_three->title }} </h5>
                                                <p>{!! $tab_three->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-about" role="tabpanel"
                                        aria-labelledby="nav-about-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tab_side_image p-0">
                                                    <img src="{{ asset('storage/' . $tab_four->image) }}"
                                                        alt="{{ $tab_four->title }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <h5 class="home_title_heading" style="text-align: left;">
                                                    {{ $tab_four->title }} </h5>
                                                <p>{!! $tab_four->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Client Tab End -->
                </div>
            </div>
        </section>
    @endif
    <!--=====// Global call section //=====-->
    @if (!empty($hardware_info))
        <section class="global_call_section section_padding">
            <div class="container">
                <!-- content -->
                <div class="global_call_section_content my-3">
                    <div class="home_title" style="width: 100%; margin: 0px;">
                        <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                            <span>{{ \Illuminate\Support\Str::substr($hardware_info->row_six_title, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($hardware_info->row_six_title, 1) }}
                        </h5>
                        <p class="home_title_text text-white" style="text-align: left;">{!! $hardware_info->row_six_short_description !!}</p>
                        @if (!empty($hardware_info->row_six_btn_name))
                            <div class="business_seftion_button" style="text-align: left;">
                                <a
                                    href="{{ $hardware_info->row_six_btn_link }}">{{ $hardware_info->row_six_btn_name }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif
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
