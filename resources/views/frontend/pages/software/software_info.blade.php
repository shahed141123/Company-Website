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

        /* For Software_info Hover */
    </style>

    <!--======// Header Title //======-->
    @if (!empty($software_info->banner_image))
        <section class="">
            <div>
                <img src="{{ asset('storage/' . $software_info->banner_image) }}" alt="" class="img-fluid">
            </div>
        </section>
    @endif
    <!----------End--------->
    <section class="mt-3">
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
    <section>
        <div class="container-fluid">
            <div class="row gx-3 mx-5">
                <div class="col-lg-8">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="animated-image parbase section">
                                    <div id="solution_image_1">
                                        <img src="https://i.ibb.co/QHJkdmx/ai-generative-hands-keyboard-chatgpt.jpg"
                                            alt="" alt="User talking with AI generated content engine. ChatGPT"
                                            title="AI solutions" class="img-fluid"
                                            style="background-color: rgb(212,208,202);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3>
                                    <span style="border-top: 3px solid black;">Op</span>erationalize data
                                </h3>
                                <p class="software-info-paragraph" style="text-align: justify;">The release of generative AI
                                    tools like ChatGPT unlocked new ways for businesses to increase
                                    productivity, grow revenue and gain a competitive edge. We’ll help you adopt and manage
                                    generative AI to enhance employee-led processes and improve automation.</p>
                                <button class="common_button2 effect02">Explore Our AI Solution</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 465px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://i.ibb.co/q7Lpjcg/software-deployment-icon.png" alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid black;">Op</span>erationalize data
                                    </h3>
                                    <p class="software-info-paragraph" style="text-align: justify;">The release of
                                        generative AI tools like ChatGPT unlocked new ways for businesses to increase
                                        productivity, grow revenue and gain a competitive edge. We’ll help you adopt and
                                        manage
                                        generative AI to enhance employee-led processes and improve automation.</p>
                                    <a href="#" class="cool-link main_color">Explore Our AI Solution <i
                                            class="fa-solid fa-arrow-right-long ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-3 mx-5 mt-3 mb-5">
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://i.ibb.co/q7Lpjcg/software-deployment-icon.png" alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid black;">Op</span>erationalize data
                                    </h3>
                                    <p class="software-info-paragraph" style="text-align: justify;">The release of
                                        generative AI tools like ChatGPT unlocked new ways for businesses to increase
                                        productivity, grow revenue and gain a competitive edge. We’ll help you adopt and
                                        manage
                                        generative AI to enhance employee-led processes and improve automation.</p>
                                    <a href="#" class="cool-link main_color">Explore Our AI Solution <i
                                            class="fa-solid fa-arrow-right-long ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://i.ibb.co/q7Lpjcg/software-deployment-icon.png" alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid black;">Op</span>erationalize data
                                    </h3>
                                    <p class="software-info-paragraph" style="text-align: justify;">The release of
                                        generative AI tools like ChatGPT unlocked new ways for businesses to increase
                                        productivity, grow revenue and gain a competitive edge. We’ll help you adopt and
                                        manage
                                        generative AI to enhance employee-led processes and improve automation.</p>
                                    <a href="#" class="cool-link main_color">Explore Our AI Solution <i
                                            class="fa-solid fa-arrow-right-long ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 460px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://i.ibb.co/q7Lpjcg/software-deployment-icon.png" alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid black;">G</span>enerative AI
                                </h1>
                                <p style="text-align: justify;">The release of generative AI tools like ChatGPT unlocked
                                    new ways for businesses to increase
                                    productivity, grow revenue and gain a competitive edge. We’ll help you adopt and manage
                                    generative AI to enhance employee-led processes and improve automation.</p>
                                <a href="#" class="cool-link main_color">Explore Our AI Solution <i
                                        class="fa-solid fa-arrow-right-long ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======// Feature tab //======-->
    <section>
        <div class="container-fluid" style="padding-left: 4.2rem; padding-right: 4.2rem;">
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
    <!--======// our clint tab //======-->

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
                    <div class="row">
                        <div class="col-xs-12 ">
                            <div class="solurtion_tabing_area">
                                <div class="tabing_menu_area pt-0">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill text-capitalize" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab"
                                                href="#nav-home" role="tab" aria-controls="nav-home"
                                                aria-selected="true">{!! Str::limit($tab_one->title, 15) !!}</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                aria-selected="false">{!! Str::limit($tab_two->title, 15) !!}</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">{!! Str::limit($tab_three->title, 15) !!}</a>
                                            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab"
                                                href="#nav-about" role="tab" aria-controls="nav-about"
                                                aria-selected="false">{!! Str::limit($tab_four->title, 15) !!}</a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="tab-content py-0 px-3 px-sm-0" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-healthcare">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                                @if (!empty($tab_one->badge))
                                                    <h6 class="title-tag text-capitalize">{{ $tab_one->badge }}</h6>
                                                @endif
                                                <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                    {{ $tab_one->title }}</h4>
                                                <div style="text-align: justify">
                                                    <p class="mb-1">{{ $tab_one->header }}</p>
                                                    <p>{!! Str::limit($tab_one->description, 550) !!}</p>
                                                </div>
                                                @if (!empty($tab_one->link))
                                                    <a href="{{ $tab_one->link }}" class="icon-btns">
                                                        <span class="fw-bold">Read Details</span>
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="showcase-industry">
                                                    <img src="{{ asset('storage/' . $tab_one->image) }}" alt="Picture">
                                                    <div class="overlays">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                                @if (!empty($tab_two->badge))
                                                    <h6 class="title-tag text-capitalize">{{ $tab_two->badge }}</h6>
                                                @endif
                                                <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                    {{ $tab_two->title }}</h4>
                                                <div style="text-align: justify">
                                                    <p class="mb-1">{{ $tab_two->header }}</p>
                                                    <p>{!! Str::limit($tab_two->description, 550) !!}</p>
                                                </div>
                                                @if (!empty($tab_two->link))
                                                    <a href="{{ $tab_two->link }}" class="icon-btns">
                                                        <span class="fw-bold">Read Details</span>
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="showcase-industry">
                                                    <img src="{{ asset('storage/' . $tab_two->image) }}" alt="Picture">
                                                    <div class="overlays">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                                @if (!empty($tab_three->badge))
                                                    <h6 class="title-tag text-capitalize">{{ $tab_three->badge }}</h6>
                                                @endif
                                                <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                    {{ $tab_three->title }}</h4>
                                                <div style="text-align: justify">
                                                    <p class="mb-1">{{ $tab_three->header }}</p>
                                                    <p>{!! Str::limit($tab_three->description, 550) !!}</p>
                                                </div>
                                                @if (!empty($tab_three->link))
                                                    <a href="{{ $tab_three->link }}" class="icon-btns">
                                                        <span class="fw-bold">Read Details</span>
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="showcase-industry">
                                                    <img src="{{ asset('storage/' . $tab_three->image) }}"
                                                        alt="Picture">
                                                    <div class="overlays">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-about" role="tabpanel"
                                        aria-labelledby="nav-about-tab">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-sm-12 ps-5 industry_tab_container">
                                                @if (!empty($tab_four->badge))
                                                    <h6 class="title-tag text-capitalize">{{ $tab_four->badge }}</h6>
                                                @endif
                                                <h4 class="home_title_heading text-capitalize text-start pb-2">
                                                    {{ $tab_four->title }}</h4>
                                                <div style="text-align: justify">
                                                    <p class="mb-1">{{ $tab_four->header }}</p>
                                                    <p>{!! Str::limit($tab_four->description, 550) !!}</p>
                                                </div>
                                                @if (!empty($tab_four->link))
                                                    <a href="{{ $tab_four->link }}" class="icon-btns">
                                                        <span class="fw-bold">Read Details</span>
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="showcase-industry">
                                                    <img src="{{ asset('storage/' . $tab_four->image) }}" alt="Picture">
                                                    <div class="overlays">
                                                    </div>
                                                </div>
                                            </div>
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
    @endif

    <!---------End -------->
    <!--=====// Global call section //=====-->
    @if (!empty($software_info))
        <section class="global_call_section">
            <div class="container">
                <!-- content -->
                <div class="global_call_section_content">
                    <div class="home_title" style="width: 100%; margin: 0px;">
                        <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                            <span>{{ \Illuminate\Support\Str::substr($software_info->row_six_title, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($software_info->row_six_title, 1) }}
                        </h5>
                        <p class="home_title_text text-white" style="text-align: left;">{!! $software_info->row_six_short_description !!}</p>
                        @if (!empty($software_info->row_six_btn_name))
                            <div class="business_seftion_button" style="text-align: left;">
                                <a
                                    href="{{ $software_info->row_six_btn_link }}">{{ $software_info->row_six_btn_name }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!---------End -------->
    <!--=======// Popular products //======-->
    <section class="popular_product_section section_padding">
        <div class="container">
            <div class="software_feature_title">
                <h1 class="text-center">Popular Products</h1>
            </div>
            <div class="Container px-0">
                <h3 class="Head" style="font-size:30px;">
                    <a class="common_button3 shop_extra_btn" href="{{ route('shop') }}">Shop
                        <i class="fa fa-arrow-right mx-2"></i>
                    </a>
                    <span class="Arrows"></span>
                </h3>
                <!-- Carousel Container -->
                <div class="SlickCarousel">
                    @if ($products)
                        @foreach ($products as $item)
                            <!-- Item -->
                            <div class="ProductBlock mb-3 mt-3">
                                <div class="Content">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="{{ route('product.details', $item->slug) }}"
                                                        class="image d-flex justify-content-center align-items-center">
                                                        <img class="pic-1" src="{{ asset($item->thumbnail) }}"
                                                            style="width: 180px;height: 180px;"
                                                            alt="{{ $item->name }}">
                                                        <img class="pic-2" src="{{ asset($item->thumbnail) }}"
                                                            style="height: 180px;" alt="{{ $item->name }}">
                                                    </a>
                                                    <ul class="product-links">
                                                        <li><a href="#" data-tip="Quick View"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#productDetails{{ $item->id }}"><i
                                                                    class="fa fa-eye text-white"></i></a>
                                                        </li>
                                                        <li><a href="#" data-tip="View Product"><i
                                                                    class="fa fa-random text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="titles mb-2 ask_for_price website-color text-center"
                                                        style="height: 4.5rem;"><a
                                                            href="{{ route('product.details', $item->slug) }}">{{ Str::limit($item->name, 85) }}</a>
                                                    </h3>
                                                    @if ($item->rfq == 1)
                                                        <div class="price">
                                                            <p class="text-muted text-center" style="height:25px;">
                                                            </p>
                                                            <a href=""
                                                                class="d-flex justify-content-center align-items-center"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#rfq{{ $item->id }}">
                                                                <button class="common_button effect01">
                                                                    Ask For Price
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @elseif ($item->price_status && $item->price_status == 'price')
                                                        <div class="price">
                                                            <p class="text-muted text-center"><small>USD</small>
                                                                {{ number_format($item->price, 2) }} $
                                                            </p>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <form class="" action="{{ route('add.cart') }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="product_id"
                                                                        id="product_id" value="{{ $item->id }}">
                                                                    <input type="hidden" name="name" id="name"
                                                                        value="{{ $item->name }}">
                                                                    <input type="hidden" name="qty" id="qty"
                                                                        value="1">
                                                                    <div data-mdb-toggle="popover" title="Add To Cart Now"
                                                                        data-mdb-content="Add To Cart Now"
                                                                        data-mdb-trigger="hover">
                                                                        <button type="submit"
                                                                            class="common_button effect01">
                                                                            Add to Cart
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="price">
                                                            <p class="text-muted text-center"
                                                                style="text-decoration: line-through;text-decoration-thickness: 2px; text-decoration-color: #ae0a46;">
                                                                USD
                                                                {{ number_format($item->price, 2) }} $
                                                            </p>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <div data-mdb-toggle="popover" title="Your Price"
                                                                    data-mdb-content="Your Price"
                                                                    data-mdb-trigger="hover">
                                                                    <button class="common_button effect01"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#askProductPrice">
                                                                        Your Price
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- Carousel Container -->
                @foreach ($products as $item)
                    <!-- Modal -->
                    <div class="modal fade" id="productDetails{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header py-2" style="background: #ae0a46;">
                                    <h5 class="modal-title text-white" id="staticBackdropLabel">Product Details
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <section class="container py-5">
                                        <div class="row">
                                            <!-- images -->
                                            <div class="col-lg-4 col-sm-12 single_product_images">
                                                <!-- gallery pic -->
                                                <div class="mx-auto d-block">
                                                    <img id="expand" class="geeks img-fluid rounded mx-auto d-block"
                                                        src="{{ asset($item->thumbnail) }}">
                                                </div>
                                                {{-- <div class="img_gallery_wrapper row pt-1">
                                                            <div class="col-3">
                                                                <img class="img-fluid"
                                                                    src="{{ asset($item->thumbnail) }}"
                                                                    onclick="gfg(this);">
                                                            </div>
                                                        </div> --}}
                                            </div>
                                            <!-- content -->
                                            <div class="col-lg-8 col-sm-12 pl-4">
                                                <h3>{{ $item->name }}</h3>
                                                {{-- <h6 class="text-dark product_code">SKU #00017-SW-JIR-002 | MF #00017-SW-JIR-002
                                                            | NG #00017-SW-JIR-002
                                                        </h6> --}}
                                                <div class="row pt-3">
                                                    <div class="col-lg-8">
                                                        <p class="list_price mb-0">List
                                                            Price</p>
                                                        <div class="product__details__price ">
                                                            <p class="mb-0">US $
                                                                {{ $item->price }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="stock-info">
                                                            <p tabindex="0" class="prod-stock"
                                                                id="product-avalialability-by-warehouse">
                                                                <span aria-label="Stock Availability"
                                                                    class="js-prod-available">
                                                                    <i class="fa fa-info-circle text-success"></i>
                                                                    Stock</span>
                                                                <br>
                                                                <span class="badge rounded-pill badge-danger"
                                                                    style="font-size:17px">Unlimited</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div>Tech overview</div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="row product_quantity_wraper justify-content-between"
                                                    style="background-color: transparent !important;">
                                                    <form action="http://127.0.0.1:8000/cart_store" method="post">
                                                        <input type="hidden" name="_token"
                                                            value="eEMopK8dBUi3ynpUBOlxSWb9P4zdUl3oQ030waKb">
                                                        <input type="hidden" name="product_id" id="product_id"
                                                            value="62">
                                                        <input type="hidden" name="name" id="name"
                                                            value="Jira Software Cloud Premium - subscription license (annual) - 100 users">
                                                        <div class="row ">
                                                            <div class="col-lg-12 col-sm-12 d-flex align-items-center">
                                                                <div class="pro-qty">
                                                                    <input type="hidden" name="product_id"
                                                                        id="product_id" value="62">
                                                                    <input type="hidden" name="name" id="name"
                                                                        value="Jira Software Cloud Premium - subscription license (annual) - 100 users">
                                                                    <div class="counter">
                                                                        <span class="down"
                                                                            onclick="decreaseCount(event, this)">-</span>
                                                                        <input type="text" name="qty"
                                                                            value="1" class="count_field">
                                                                        <span class="up"
                                                                            onclick="increaseCount(event, this)">+</span>
                                                                    </div>
                                                                </div>
                                                                <button class="common_button2 ms-3" type="submit">Add to
                                                                    Basket</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Quick View Modal End --}}
                    {{-- Ask For Price Modal Modal --}}
                    <!-- Modal -->
                    <div class="modal fade" id="askProductPrice" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-2" style="background: #ae0a46;">
                                    <h5 class="modal-title text-white" id="staticBackdropLabel">Your Price Form
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container px-0">
                                        <form>
                                            <div class="py-2 px-2 bg-light rounded">
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Email</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="email"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Email"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Mobile</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Mobile Number"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">C Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="comapny"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Company Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Quantity </span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="qty"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Quantity"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Product</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="file" name="custom_image"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Product Image"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <span style="font-size: 12px;">Type Message :</span>
                                                                <textarea class="form-control form-control-sm w-100" id="message" name="message" rows="2"
                                                                    placeholder="Enter Your Name"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer me-2" style="padding: 0px;border: 0px;">
                                    <button class="btn btn-sm" style="background: #ae0a46; color: white;"
                                        role="button">Submit</button>
                                    <!-- HTML !-->
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Ask For Price Modal Modal End --}}
                    {{-- Ask For Price Modal --}}
                    <!-- Modal -->
                    <div class="modal fade" id="rfq{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-2" style="background: #ae0a46;">
                                    <h5 class="modal-title text-white" id="staticBackdropLabel">Ask For Price Form
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container px-0">
                                        <form>
                                            <div class="py-2 px-2 rounded">
                                                <div class="row mb-1">
                                                    <h6 class="mb-0"> {{ $item->name }}</h6>
                                                </div>
                                            </div>
                                            <div class="py-2 px-2 bg-light rounded">
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Email</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="email"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Email"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Mobile</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Mobile Number"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">C Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="comapny"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Company Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Quantity </span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="qty"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Quantity"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Product</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="file" name="custom_image"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Product Image"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <span style="font-size: 12px;">Type Message :</span>
                                                                <textarea class="form-control form-control-sm w-100" id="message" name="message" rows="2"
                                                                    placeholder="Enter Your Name"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer me-2" style="padding: 0px;border: 0px;">
                                    <button class="btn btn-sm" style="background: #ae0a46; color: white;"
                                        role="button">Submit</button>
                                    <!-- HTML !-->
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Ask For Price Modal End --}}
                @endforeach
            </div>
        </div>
    </section>
    <!---------End -------->

    <section>
        <div class="container-fluid" style="padding-left: 4.2rem; padding-right: 4.2rem;">
            <div class="home_title_heading my-5">
                <div class="software_feature_title">
                    <h1 class="text-center pb-3">
                        <span>R</span>eal outcomes. Expert insights.
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row gx-3">
                        <div class="col-lg-6">
                            <div>
                                <div class="container-ingfo">
                                    <img src="https://www.insight.com/content/dam/insight-web/en_US/article-images/2023/how-vivli-is-enabling-scientific-discoveries-to-benefit-global-health-thumb.jpg"
                                        alt="" />
                                    <p>Client Story</p>
                                    <p class="title-info">Wholesale Frontrunner Exceeds Customer Expectations With
                                        99.95% Uptime</p>
                                    <a href="#"> BUTTON </a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="container-ingfo">
                                    <img src="https://www.insight.com/content/dam/insight-web/en_US/article-images/2023/how-vivli-is-enabling-scientific-discoveries-to-benefit-global-health-thumb.jpg"
                                        alt="" />
                                    <p>Client Story</p>
                                    <p class="title-info">Wholesale Frontrunner Exceeds Customer Expectations With
                                        99.95% Uptime</p>
                                    <div class="overlays"></div>
                                    <div class="button">
                                        <a href="#"> BUTTON </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="content-info">
                                        <div class="grid">
                                            <figure class="effect-sadie">
                                                <img height="620px" width="100%"
                                                    src="https://www.insight.com/content/dam/insight-web/en_US/article-images/2023/how-vivli-is-enabling-scientific-discoveries-to-benefit-global-health-thumb.jpg"
                                                    alt="img02" />
                                                <figcaption>
                                                    <p>Client story</p>
                                                    <h4>How Vivli Is Enabling Scientific Discoveries to Benefit Global
                                                        Health</h4>
                                                    <a href="#">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        qaafafasfasfasfasf
                    </div>
                </div>
            </div>
    </section>

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
    <section>
        <div class="container">
            <div class="row gx-4 p-2" style="
                border-top: 1px solid #eee;
    margin-top: 30px;">
                <div class="col-lg-3" style="border-right: 1px solid #eee;">
                    <div class="d-flex align-items-center">
                        <div>
                            <img class="img-fluid" src="https://www.insight.com/content/dam/insight-web/sitesections/home/images/buy-section/buy.jpg" alt="">
                        </div>
                        <a href="#" class="ps-3">
                            <p class="m-0">Buy Product</p>
                            <h6>The latest hardware and software</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3" style="border-right: 1px solid #eee;">
                    <div class="d-flex align-items-center">
                        <div>
                            <img class="img-fluid" src="https://www.insight.com/content/dam/insight-web/sitesections/home/images/buy-section/buy.jpg" alt="">
                        </div>
                        <a href="#" class="ps-3">
                            <p class="m-0">Buy Product</p>
                            <h6>The latest hardware and software</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3" style="border-right: 1px solid #eee;">
                    <div class="d-flex align-items-center">
                        <div>
                            <img class="img-fluid" src="https://www.insight.com/content/dam/insight-web/sitesections/home/images/buy-section/buy.jpg" alt="">
                        </div>
                        <a href="#" class="ps-3">
                            <p class="m-0">Buy Product</p>
                            <h6>The latest hardware and software</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex align-items-center">
                        <div>
                            <img class="img-fluid" src="https://www.insight.com/content/dam/insight-web/sitesections/home/images/buy-section/buy.jpg" alt="">
                        </div>
                        <a href="#" class="ps-3">
                            <p class="m-0">Buy Product</p>
                            <h6>The latest hardware and software</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
