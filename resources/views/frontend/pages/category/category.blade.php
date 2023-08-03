@extends('frontend.master')
@section('content')

    <style>
            .card:hover {
                /* transform: scale(1.1); */
                transition: all 0.5s ease-in-out;
                cursor: pointer;
            }

            .card-body {
                padding: 0.5rem;
            }

            .card-body .description {
                font-size: 0.78rem;
                padding-bottom: 8px;
            }

            div.h6,
            h6 {
                margin: 0;
            }

            .product .fa-star {
                font-size: 0.9rem;
            }

            .rebate {
                font-size: 0.9rem;
            }

            .btn.btn-primary {
                background-color: #ae0a46;
                color: #fff;
                border: 1px solid #ae0a46;
                border-radius: 7px;
                font-weight: 800;
                /* width: 95px; */
            }

            .btn.btn-primary:hover {
                background-color: #ae0a46e8 !important;
            }

            .card-img-top {
                width: 192px;
                height: 132px;
                object-fit: contain;
                margin: 0 11%;
            }

            .clear {
                clear: both;
            }

            .btn.btn-success {
                visibility: hidden;
            }

            @media(min-width:992px) {

                .filter,
                #mobile-filter {
                    display: none;
                }
            }

            @media(min-width:768px) and (max-width:991px) {

                .radio,
                .checkbox {
                    padding: 6px 10px;
                    width: 49%;
                    float: left;
                    margin: 5px 5px 5px 0px;
                }

                .filter,
                #mobile-filter {
                    display: none;
                }
            }

            @media(min-width:576px) and (max-width:767px) {
                #sidebar {
                    width: 35%;
                }

                #products {
                    width: 65%;
                }

                .filter,
                #mobile-filter {
                    display: none;
                }

                .h3+.ml-auto {
                    margin: 0;
                }
            }

            @media(max-width:575px) {
                .wrapper {
                    padding: 10px;
                }

                .h3 {
                    font-size: 1.3rem;
                }

                #sidebar {
                    display: none;
                }

                #products {
                    width: 100%;
                    float: none;
                }

                #products {
                    padding: 0;
                }

                .clear {
                    float: left;
                    width: 80%;
                }

                .btn.btn-success {
                    visibility: visible;
                    margin: 10px 0px;
                    color: #fff;
                    padding: 0.2rem 0.1rem;
                    width: 20%;
                }

                .green-label {
                    width: 50%;
                }

                .btn.text-success {
                    padding: 0;
                }

                .content,
                #mobile-filter {
                    clear: both;
                }
            }
        .common_button3 {
            padding: 5px 22px;
            cursor: pointer;
            font-family: "Allumi Std Extended";
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            background-color: #fff;
            color: #ae0a46;
            transition: 0.3s;
            outline: none;
            border: none;
        }

        .word {
            position: absolute;
            opacity: 0;
            font-size: 38px;
        }

        .letter {
            display: inline-block;
            position: relative;
            float: left;
            transform: translateZ(25px);
            transform-origin: 50% 50% 25px;
            font-weight: 400 !important;
        }

        .letter.out {
            transform: rotateX(90deg);
            transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            font-weight: 400 !important;
        }

        .letter.behind {
            transform: rotateX(-90deg);
            font-weight: 400 !important;
        }

        .letter.in {
            transform: rotateX(0deg);
            transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-weight: 400 !important;
        }

        .wisteria {
            color: #ae0a46;
        }

        .belize {
            color: #ae0a46;
        }

        .pomegranate {
            color: #ae0a46;
        }

        .green {
            color: #ae0a46;
        }

        .midnight {
            color: #ae0a46;
        }

        .normal_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 300 !important;
        }

        .animated_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 400 !important;
        }

        /* Extra Section */
        .ag-format-container {
            width: 1142px;
            margin: 0 auto;
        }


        .ag-offer-block {
            padding: 35px 0 20px
        }

        .ag-offer_list {
            padding: 0px;
            margin: 0px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .ag-offer_item {
            width: 100%;
            overflow: hidden;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            position: relative;
        }

        /* .ag-offer_item:not(:nth-child(1)):not(:nth-child(2)):not(:nth-child(3)) {
                border-top: 1px solid #ae0a46;
            }

            .ag-offer_item:not(:nth-child(3n)) {
                border-right: 1px solid #ae0a46;
            } */

        .ag-offer_item:nth-child(1) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(2) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(3) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(4) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(5) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:hover .ag-offer_visible-item {
            opacity: 0;

            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);

            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }

        .ag-offer_visible-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;

            height: 100%;
            width: 100%;
            /* padding: 10px 20px; */

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            -webkit-transition: .4s .3s;
            -moz-transition: .4s .3s;
            -o-transition: .4s .3s;
            transition: .4s .3s;
        }

        .ag-offer_img {
            height: 100px;
            width: 120px;
            margin: 0 0px 0 0;
        }

        .ag-offer_title {
            font-size: 15px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .ag-offer_hidden-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;

            padding: 30px;

            opacity: 0;

            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            -webkit-transform: rotate(180deg) scale(0);
            -moz-transform: rotate(180deg) scale(0);
            -ms-transform: rotate(180deg) scale(0);
            -o-transform: rotate(180deg) scale(0);
            transform: rotate(180deg) scale(0);

            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .ag-offer_item:hover .ag-offer_hidden-item {
            opacity: 1;

            -webkit-transform: rotate(0deg) scale(1);
            -moz-transform: rotate(0deg) scale(1);
            -ms-transform: rotate(0deg) scale(1);
            -o-transform: rotate(0deg) scale(1);
            transform: rotate(0deg) scale(1);

            -webkit-transition-delay: .3s;
            -moz-transition-delay: .3s;
            -o-transition-delay: .3s;
            transition-delay: .3s;
        }

        .ag-offer_text {
            max-width: 100%;

            opacity: 0;

            font-size: 14px;
            color: #FFF;

            -webkit-transition: .3s .5s;
            -moz-transition: .3s .5s;
            -o-transition: .3s .5s;
            transition: .3s .5s;
        }

        .ag-offer_item:hover .ag-offer_text {
            opacity: 1;
        }

        .ag-offer_btn {
            display: block;
            padding: 10px 20px;
            border: 2px solid #FFF;

            position: absolute;
            top: 50%;
            left: 50%;

            white-space: nowrap;
            font-size: 25px;
            color: #FFF;

            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;

            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .ag-offer_btn:hover {
            border: 2px solid #0000d1;
            background-color: #FFF;

            text-decoration: none;
            color: #0000d1;
        }

        /*  */
        .box {
            font-family: 'Mandali', sans-serif;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .box:before,
        .box:after {
            content: "";
            background: rgba(11, 11, 12, 0.85);
            width: 200%;
            height: 200%;
            opacity: .75;
            transform: skew(45deg) translateX(100%);
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 1;
            transition: all .6s ease;
        }

        .box:after {
            transform: skew(45deg) translateX(-100%);
            top: 0;
            left: 0;
            right: auto;
            bottom: auto;
            z-index: 0;
        }

        .box:hover:before,
        .box:hover:after {
            transform: skew(45deg) translateX(0);
        }

        .box img {
            width: 100%;
            height: auto;
            transition: all 0.35s;
        }

        .box:hover img {
            opacity: 0.5;
        }

        .box-content {
            color: #fff;
            width: 85%;
            opacity: 0;
            transform: translateX(-50%) translateY(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transition: all 0.6s ease;
        }

        .box:hover .box-content {
            opacity: 1;
        }

        .box .title {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 3px;
        }

        .box .post {
            font-size: 14px;
            font-weight: 200;
            letter-spacing: 1px;
            text-transform: capitalize;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 10px;
            display: block;
        }

        .box .icon {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .box .icon li {
            margin: 0 3px;
            display: inline-block;
        }

        .box .icon li a {
            color: #EA2027;
            background: #fff;
            font-size: 16px;
            line-height: 34px;
            width: 34px;
            height: 34px;
            display: block;
            transition: all 0.35s;
        }

        .box .icon li a:hover {
            color: #fff;
            background: #EA2027;
        }

        .borders_right {
            border-right: 1px solid !important;
        }

        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }


        /*  */
        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

            .ag-offer_item {
                width: 100%;
                margin: 0 0 30px;
                border: 0 none !important;
                border-bottom: 1px solid #c1c1c1 !important;
            }

            .ag-offer_visible-item {
                padding: 0 20px 30px;

                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -moz-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .ag-offer_item:hover .ag-offer_visible-item {
                opacity: 1;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

            .ag-offer_hidden-item {
                padding: 0 20px 20px;

                opacity: 1;

                position: static;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

            .ag-offer_item:nth-child(1) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(2) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(3) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(4) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(5) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
                background-color: transparent;
            }

            .ag-offer_item:hover .ag-offer_text {
                opacity: 1;
            }

            .ag-offer_title {
                font-weight: bold;
            }

            .ag-offer_text {
                opacity: 1;

                font-size: 18px;
                color: #000;
            }

            .ag-offer_btn {
                border: 2px solid #0000d1;
                background-color: #000080;

                position: static;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

        }

        @media only screen and (max-width: 639px) {}

        @media only screen and (max-width: 479px) {}

        @media (min-width: 768px) and (max-width: 979px) {
            .ag-format-container {
                width: 750px;
            }

        }

        @media (min-width: 980px) and (max-width: 1161px) {
            .ag-format-container {
                width: 960px;
            }

        }
    </style>
    <!-- banner single page start -->
    <section class="banner_single_page py-3" style="background-image:url('{{ asset('storage/' . $category->banner_image) }}');background-color: black;background-repeat: no-repeat;background-size: cover;height:300px;">

        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image text-center">
                    {{-- <img class="my-3" src="{{ asset('storage/' . $category->image) }}" alt="" height="100px" width="100px"> --}}
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading text-center text-white mb-4" style="margin-top: 4.5rem;">{{ $category->title }}</h1>
                {{-- <p class="single_banner_text">{{ $data->h2 }}</p> --}}
                <div class="single_buttton_wrapper text-center mb-2">
                    <a href="{{ route('custom.product', $category->slug) }}" class="common_button2">Shop all
                        {{ $category->title }}</a>

                </div>
            </div>
        </div>
    </section>

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

                <a href="{{ route('all.category') }}">
                    <li class="breadcrumb__item ">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">All Category</span>
                        </span>
                    </li>
                </a>
                @if ($condition == 'category')
                    <li class="breadcrumb_divider">
                        <span>></span>
                    </li>

                    <a href="#">
                        <li class="breadcrumb__item active">
                            <span class="breadcrumb__inner">
                                <span class="breadcrumb__title">{{ $category->title }}</span>
                            </span>
                        </li>
                    </a>
                @elseif ($condition == 'subcategory')
                    <li class="breadcrumb_divider">
                        <span>></span>
                    </li>

                    <a href="{{ route('category.html',$cat_title->slug) }}">
                        <li class="breadcrumb__item ">
                            <span class="breadcrumb__inner">
                                <span class="breadcrumb__title">{{ $cat_title->title }}</span>
                            </span>
                        </li>
                    </a>
                    <li class="breadcrumb_divider">
                        <span>></span>
                    </li>

                    <a href="#">
                        <li class="breadcrumb__item active">
                            <span class="breadcrumb__inner">
                                <span class="breadcrumb__title">{{ $category->title }}</span>
                            </span>
                        </li>
                    </a>
                @else
                    <li class="breadcrumb_divider">
                        <span>></span>
                    </li>

                    <a href="{{ route('category.html',$cat_title->slug) }}">
                        <li class="breadcrumb__item">
                            <span class="breadcrumb__inner">
                                <span class="breadcrumb__title">{{ $cat_title->title }}</span>
                            </span>
                        </li>
                    </a>
                    <li class="breadcrumb_divider">
                        <span>></span>
                    </li>

                    <a href="{{ route('category.html',$sub_cat_title->slug) }}">
                        <li class="breadcrumb__item">
                            <span class="breadcrumb__inner">
                                <span class="breadcrumb__title">{{ $sub_cat_title->title }}</span>
                            </span>
                        </li>
                    </a>
                    <li class="breadcrumb_divider">
                        <span>></span>
                    </li>

                    <a href="#">
                        <li class="breadcrumb__item active">
                            <span class="breadcrumb__inner">
                                <span class="breadcrumb__title">{{ $category->title }}</span>
                            </span>
                        </li>
                    </a>
                @endif

            </ul>
        </div>
    </section>


    <!-- Sub Category section-->
    @if (!empty($sub_cats) && count($sub_cats) > 0)
        <section>
            <div class="ag-offer-block container">
                <div class="common_product_item_title">
                    <h3>Display Sub Categories for {{ $category->title }}</h3>
                </div>
                <div class="ag-format-container row">
                    @foreach ($sub_cats as $key => $item)
                        <div class="ag-offer_list col-lg-3">
                            <div class="ag-offer_item p-2 py-3" style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                                <div class="ag-offer_visible-item">
                                    <div class="ag-offer_img-box px-2">
                                        <img src="{{ asset('storage/requestImg/' . $item->image) }}" class="ag-offer_img"
                                            alt="{{ $item->title }}" style="width:75px !important;height:75px !important;"/>
                                    </div>
                                    <div class="ag-offer_title">
                                        <p>{{ Str::limit($item->title, 45) }}</p>
                                    </div>
                                </div>
                                <div class="ag-offer_hidden-item">
                                    <div class="mx-auto">
                                        <a href="{{route('category.html',$item->slug)}}" class="common_button3">
                                            Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if (!empty($sub_sub_cats) && count($sub_sub_cats) > 0)
                        @foreach ($sub_sub_cats as $key => $item)
                            <div class="ag-offer_list col-lg-3">
                                <div class="ag-offer_item p-2 py-3" style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                                    <div class="ag-offer_visible-item">
                                        <div class="ag-offer_img-box px-2">
                                            <img src="{{ asset('storage/requestImg/' . $item->image) }}" class="ag-offer_img"
                                                alt="{{ $item->title }}" style="width:75px !important;height:75px !important;"/>
                                        </div>
                                        <div class="ag-offer_title">
                                            <p>{{ Str::limit($item->title, 45) }}</p>
                                        </div>
                                    </div>
                                    <div class="ag-offer_hidden-item">
                                        <div class="mx-auto">
                                            <a href="{{route('category.html',$item->slug)}}" class="common_button3">
                                                Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    @endif
    <!-- Sub Category section-->

    <!--======// Top Brand //=====-->
    @if (!empty($brands) && count($brands) > 0)
        <section>
            <div class="ag-offer-block container">
                <div class="common_product_item_title">
                    <h3>Related Brands for {{ $category->title }}</h3>
                </div>
                <div class="ag-format-container row">
                    @foreach ($brands as $key => $item)
                    <div class="ag-offer_list col-lg-2 col-md-2 col-sm-4">
                        <div class="ag-offer_item" style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                            <div class="ag-offer_visible-item">
                                <div class="ag-offer_img-box d-felx justify-content-center mx-auto">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="ag-offer_img"  alt="{{ $item->title }}" width="150px"
                                        height="150px" />
                                </div>
                            </div>
                            <div class="ag-offer_hidden-item">
                                <div class="mx-auto">
                                    <div class="brand_btns" style="justify-content: center;
                                    background: #ae0a46;
                                    padding: 7px;
                                    color: white;
                                    font-size: 13px;
                                    display: flex;">
                                        <a class="text-white" href="{{ route('brandpage.html', $item->slug) }}">Details | </a>
                                        <a class="text-white ms-1" href="{{ route('custom.product', $item->slug) }}"><span class="">Shop</span> </a>
                                    </div>
                                    {{-- <a href="{{ route('custom.product', $item->slug) }}" class="common_button3">
                                        Shop
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!----------End--------->

    <!---Products Section-->

    @if (!empty($products) && count($products) > 0)
        <section class="container">
            <div class="tech_deals_section_content" id="tech_deal">
                <!-- section title -->
                <div class="tech_deals_featured_item_title">
                    <h3>Featured Products for {{ $category->title }}</h3>
                    {{-- <p>Discover our latest discounts and limited-time offers on the technology brands and devices your business trusts.</p> --}}
                </div>
                <!-- wrapper -->
                <div class="row">
                    <!-- product_item -->


                    @foreach ($products as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 p-0 pb-1">
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
                                            <p class="text-muted text-center">
                                                <small>USD</small>
                                                --.-- $
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
                    @endforeach


                </div>
            </div>
            <!------------------Pagination------------------->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $products->links() }}
                    </ul>

                </nav>
            </div>
        </section><br>

    @endif
    <!---Products Section-->











@endsection
