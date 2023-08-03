@extends('frontend.master')

@section('content')
    <style>
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
            padding: 0px 0 20px;
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
            padding: 10px 20px;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            -webkit-transition: .4s .3s;
            -moz-transition: .4s .3s;
            -o-transition: .4s .3s;
            transition: .4s .3s;
        }

        .ag-offer_img {
            height: 64px;
            width: 64px;
            margin: 0 15px 0 0;
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
    <!--======// Header Title //======-->
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image:url('{{asset('frontend/images/category.jpg')}}');">
        <div class="container ">
            <h1>Shop for Categories</h1>
            {{-- <p class="text-center text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic nihil neque <br>
                maxime debitis in nulla amet maiores veniam consequuntur placeat?</p> --}}
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{route('shop')}}">Go to Shop</a>
                    </div>
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
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">All Categories</span>
                        </span>
                    </li>
                </a>

            </ul>
        </div>
    </section>
    <!----------End--------->

    <!--======// Top Brand //=====-->

    <section>
        <div class="ag-offer-block container">
            <h3 class="text-center py-3">All Categories</h3>
            <div class="ag-format-container row">
                @foreach ($categorys as $item)
                    <div class="ag-offer_list col-lg-3" >
                        <div class="ag-offer_item" style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                            <div class="ag-offer_visible-item">
                                <div class="ag-offer_img-box">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="ag-offer_img"
                                        alt="" width="100px" height="100px"/>
                                </div>
                                <div class="ag-offer_title">
                                    <p>{{ Str::limit($item->title, 30) }}</p>
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
            </div>
        </div>
    </section>
     <!----------End--------->
    <!--======// Featured Sub Categories //=====-->
    <section>
        <div class="ag-offer-block container">
            <h3 class="text-center py-3">All Sub Categories</h3>
            <div class="ag-format-container row">
                @foreach ($sub_cats as $item)
                    @php
                        $slug = App\Models\Admin\SubCategory::where('id', $item->id)->value('slug');
                    @endphp
                    <div class="ag-offer_list col-lg-3">
                        <div class="ag-offer_item" style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                            <div class="ag-offer_visible-item">
                                <div class="ag-offer_img-box">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="ag-offer_img"
                                        alt="" width="100px" height="100px" />
                                </div>
                                <div class="ag-offer_title">
                                    <p>{{ Str::limit($item->title, 45) }}</p>
                                </div>
                            </div>
                            <div class="ag-offer_hidden-item">
                                <div class="mx-auto">
                                    <a href="{{ route('category.html', $slug) }}" class="common_button3">
                                        Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($sub_sub_cats as $item)
                    @php
                        $slug = App\Models\Admin\SubSubCategory::where('id', $item->id)->value('slug');
                    @endphp
                    <div class="ag-offer_list col-lg-3">
                        <div class="ag-offer_item" style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                            <div class="ag-offer_visible-item">
                                <div class="ag-offer_img-box">
                                    <img src="{{ asset('storage/requestImg/' . $item->image) }}" class="ag-offer_img"
                                        alt="{{ $item->title }}" width="100px" height="100px" />
                                </div>
                                <div class="ag-offer_title">
                                    <p>{{ Str::limit($item->title, 45) }}</p>
                                </div>
                            </div>
                            <div class="ag-offer_hidden-item">
                                <div class="mx-auto">
                                    <a href="{{route('custom.product',$slug)}}" class="common_button3">
                                        Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--------- End -------->

    <!--========// Related Product Begin //==========-->
    {{-- <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Related Products</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products as $item)
                        <div class="product_item">
                            <!-- image -->
                            <div class="product_item_thumbnail">
                                <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="150px"
                                    height="113px">
                            </div>

                            <!-- product content -->
                            <div class="product_item_content">
                                <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name"
                                    style="height: 3rem;">{{ Str::limit($item->name, 50) }}</a>

                                @if ($item->rfq != 1)
                                    <!-- price -->
                                    <div class="product_item_price">
                                        <span class="price_currency">USD</span>
                                        @if (!empty($item->discount))
                                            <span class="price_currency_value"
                                                style="text-decoration: line-through; color:red">$
                                                {{ $item->price }}</span>
                                            <span class="price_currency_value" style="color: black">$
                                                {{ $item->discount }}</span>
                                        @else
                                            <span class="price_currency_value">$ {{ $item->price }}</span>
                                        @endif
                                    </div>

                                    <!-- button -->
                                    @php
                                        $cart = Cart::content();
                                        $exist = $cart->where('id', $item->id);
                                        //dd($cart->where('image' , $item->thumbnail )->count());
                                    @endphp
                                    @if ($cart->where('id', $item->id)->count())
                                        <a href="javascript:void(0);" class="common_button2 p-0 py-2 px-1 pb-2"
                                            style="height: 2.5rem"> Already in Cart</a>
                                    @else
                                        <form action="{{ route('add.cart') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" id="product_id"
                                                value="{{ $item->id }}">
                                            <input type="hidden" name="name" id="name"
                                                value="{{ $item->name }}">
                                            <input type="hidden" name="qty" id="qty" value="1">
                                            <button type="submit" class="product_button">Add to Basket</button>
                                        </form>
                                    @endif
                                @else
                                    <div class="product_item_price">
                                        <span class="price_currency_value">---</span>
                                    </div>
                                    <a class="product_button"
                                        href="{{ route('product.details', $item->slug) }}">Details</a>
                                @endif
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section> --}}
    <!-------End-------->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="text-center py-3">
                    <h2>Explore all the <strong>Categorys</strong> Ngen It has to offer.</h2>
                </div>
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill p-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#all"
                                role="tab" aria-controls="nav-home" aria-selected="true">All</a>

                            <a class="nav-item nav-link" id="nav-healthcare" data-toggle="tab" href="#a"
                                role="tab" aria-controls="nav-home" aria-selected="true">A</a>

                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#b"
                                role="tab" aria-controls="nav-profile" aria-selected="false">B</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#c"
                                role="tab" aria-controls="nav-contact" aria-selected="false">C</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#d"
                                role="tab" aria-dontrols="nav-contact" aria-selected="false">D</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#e"
                                role="tab" aria-controls="nav-contact" aria-selected="false">E</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#f"
                                role="tab" aria-controls="nav-contact" aria-selected="false">F</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#g"
                                role="tab" aria-controls="nav-contact" aria-selected="false">G</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#h"
                                role="tab" aria-controls="nav-contact" aria-selected="false">H</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#i"
                                role="tab" aria-controls="nav-contact" aria-selected="false">I</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#j"
                                role="tab" aria-controls="nav-contact" aria-selected="false">J</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#k"
                                role="tab" aria-controls="nav-contact" aria-selected="false">K</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#l"
                                role="tab" aria-controls="nav-contact" aria-selected="false">L</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#m"
                                role="tab" aria-controls="nav-contact" aria-selected="false">M</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#n"
                                role="tab" aria-controls="nav-contact" aria-selected="false">N</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#o"
                                role="tab" aria-controls="nav-contact" aria-selected="false">O</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#p"
                                role="tab" aria-controls="nav-contact" aria-selected="false">P</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#q"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Q</a>

                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 ps-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel"
                            aria-labelledby="nav-healthcare">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_A">
                                    {{-- <h2 class="letter_content_title">All</h2> --}}

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                <li class="col-lg-3 col-sm-6"><a
                                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                <li class="col-lg-3 col-sm-6"><a
                                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                <li class="col-lg-3 col-sm-6"><a
                                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                <li class="col-lg-3 col-sm-6"><a
                                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="a" role="tabpanel" aria-labelledby="nav-healthcare">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_A">
                                    <h2 class="letter_content_title">A</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'A')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'A')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'A')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'A')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_B">
                                    <h2 class="letter_content_title">B</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'B')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'B')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'B')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'B')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_C">
                                    <h2 class="letter_content_title">C</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'C')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'C')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'C')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'C')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_D">
                                    <h2 class="letter_content_title">D</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'D')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'D')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'D')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'D')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="e" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_E">
                                    <h2 class="letter_content_title">E</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'E')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'E')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'E')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'E')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_F">
                                    <h2 class="letter_content_title">F</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'F')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'F')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'F')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'F')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="g" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content">
                                <div class="letter_content_item" id="brand_G">
                                    <h2 class="letter_content_title">G</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'G')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'G')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'G')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'G')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="h" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_H">
                                    <h2 class="letter_content_title">H</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'H')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'H')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'H')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'H')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="i" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_I">
                                    <h2 class="letter_content_title">I</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'I')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'I')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'I')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'I')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="j" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_J">
                                    <h2 class="letter_content_title">J</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'J')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'J')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'J')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'J')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="k" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_K">
                                    <h2 class="letter_content_title">K</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'K')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'K')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'K')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'K')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="l" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_L">
                                    <h2 class="letter_content_title">L</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'L')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'L')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'L')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'L')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="m" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_M">
                                    <h2 class="letter_content_title">M</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'M')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'M')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'M')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'M')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="n" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_N">
                                    <h2 class="letter_content_title">N</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'N')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'N')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'N')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'N')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="o" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_O">
                                    <h2 class="letter_content_title">O</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'O')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'O')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'O')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'O')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_P">
                                    <h2 class="letter_content_title">P</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'P')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'P')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'P')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'P')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="q" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_Q">
                                    <h2 class="letter_content_title">Q</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'Q')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'Q')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'Q')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'Q')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="r" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_R">
                                    <h2 class="letter_content_title">R</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'R')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'R')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'R')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'R')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="s" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_S">
                                    <h2 class="letter_content_title">S</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'S')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'S')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'S')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'S')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_T">
                                    <h2 class="letter_content_title">T</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'T')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'T')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'T')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'T')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="u" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_U">
                                    <h2 class="letter_content_title">U</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'U')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'U')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'U')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'U')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_V">
                                    <h2 class="letter_content_title">V</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'V')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'V')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'V')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'V')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="w" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_W">
                                    <h2 class="letter_content_title">W</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'W')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'W')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'W')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'W')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="z" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_Z">
                                    <h2 class="letter_content_title">Z</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'Z')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_cats as $item)
                                                @if ($item->title[0] == 'Z')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_cats as $item)
                                                @if ($item->title[0] == 'Z')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            @foreach ($sub_sub_sub_cats as $item)
                                                @if ($item->title[0] == 'Z')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
