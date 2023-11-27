@extends('frontend.master')
@section('content')
    <style>
        /* Must be in this page */
        nav>.nav.nav-tabs {
            background: none;
        }

        nav>div a.nav-item.nav-link.active:after {

            content: none !important;
        }

        .letter_content_item .letter_content_title {
            font-weight: 600;
            padding-left: 14px;
        }

        /* Must be in this page */

        /* tab */
        .container .title {
            color: #3c4858;
            text-decoration: none;
            margin-top: 30px;
            margin-bottom: 25px;
            min-height: 32px;
        }

        .container .title h3 {
            font-size: 25px;
            font-weight: 300;
        }

        div.card {
            border: 0;
            margin-bottom: 30px;
            margin-top: 30px;
            border-radius: 6px;
            color: rgba(0, 0, 0, .87);
            background: #fff;
            width: 100%;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
        }

        div.card.card-plain {
            background: transparent;
            box-shadow: none;
        }

        div.card .card-header {
            border-radius: 3px;
            padding: 5px 15px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: -30px;
            border: 0;
            background: linear-gradient(60deg, #eee, #bdbdbd);
        }

        .card-plain .card-header:not(.card-avatar) {
            margin-left: 0;
            margin-right: 0;
        }

        .div.card .card-body {
            padding: 15px 30px;
        }

        div.card .card-header-primary {
            background: linear-gradient(60deg, #ab47bc, #7b1fa2);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
        }

        div.card .card-header-danger {
            background: linear-gradient(60deg, #ef5350, #d32f2f);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(244, 67, 54, .6);
        }

        .card-nav-tabs .card-header {
            margin-top: -30px !important;
        }

        .card .card-header .nav-tabs {
            padding: 0;
        }

        .nav-tabs {
            border: 0;
            border-radius: 3px;
            padding: 0 15px;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-tabs .nav-item {
            margin: 2px;
        }

        .nav-tabs .nav-item .nav-link.active {
            background-color: hsla(0, 0%, 100%, .2);
            transition: background-color .3s .2s;
        }

        .nav-tabs .nav-item .nav-link {
            border: 0 !important;
            color: #fff !important;
            font-weight: 500;
        }

        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 2px;
            border-radius: 3px;
            line-height: 24px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 10px 15px;
            background-color: transparent;
            transition: background-color .3s 0s;
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

        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 0;
            border-radius: 3px;
            line-height: 23px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 3px 7px 3px !important;
            padding: 10px 15px;
            background-color: transparent;
            transition: background-color .3s 0s;
        }

        .multi_tab_content ul li a {
            color: #000000;
            font-weight: 400
        }

        /* Most Important */
        .brand-images {
            display: inline;
            justify-content: center;
            align-items: center;
        }

        .image_box {
            display: flex;
            align-items: center;
            height: 155px;
            justify-content: center;
            padding: 20px;
        }

        .image_box_features {
            display: flex;
            align-items: center;
            height: 140px;
            justify-content: center;
            padding: 20px;
        }

        .brand-links a {
            color: #ae0a46 !important;
        }

        .brand-links a:hover {
            color: #020202 !important;
        }

        .brand_img_container {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
        }

        nav>div a.nav-item.nav-link,
        nav>div a.nav-item.nav-link.active {
            border: none;
            padding: 10px 21px !important;
            color: #fff !important;
            background: #ae0a46;
            border-radius: 0;
            text-align: start;
            width: 50px;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header pb-5" style="background-image:url('{{ asset('frontend/images/Brand.jpg') }}');">
        <div class="container ">
            <h1>Shop By Brands</h1>
            <p class="text-center text-white">Through our deep partnerships with trusted brands, <br> Ngen IT offers a
                comprehensive catalog of software for business. </p>
            <div class="row mb-5">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="">
                        <div class="">
                            <a href="{{ route('shop.html') }}" class="common_button2">Go To Shop <i
                                    class="fa-solid fa-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <section>
        {{-- Top Brands --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="home_title_heading">Top Brands</h5>
                </div>
            </div>
            <div class="row">
                @foreach ($top_brands as $top_brand)
                    <div class="col-lg-2 col-sm-12">
                        <div class="card rounded-0 brand_img_container">
                            <div class="card-body image_box">
                                <div class="brand-images">
                                    <a href="{{ route('brand.overview', $top_brand->slug) }}">
                                        <img src="{{ asset('storage/' . $top_brand->image) }}" class="img-fluid"
                                            alt=""> </a>
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
                                        href="{{ route('brand.overview', $top_brand->slug) }}">Details
                                        <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                    <span class="ms-3 me-3" style="background: #ffff;">||</span>
                                    <a class="text-white py-2" href="{{ route('custom.product', $top_brand->slug) }}">Shop
                                        <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $top_brands->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        {{-- Features --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="home_title_heading">Featured Brands</h5>
                </div>
            </div>
            <div class="row">
                @foreach ($featured_brands as $featured_brand)
                    <div class="col-lg-2 col-sm-12">
                        <div class="card rounded-0 brand_img_container">
                            <div class="card-body image_box_features">
                                <div class="brand-images">
                                    <a href="{{ route('brand.overview', $featured_brand->slug) }}">
                                        <img src="{{ asset('storage/' . $featured_brand->image) }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $featured_brands->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--======// Explore all the brands Ngen It has to offer. //====-->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="text-center py-3">
                    <h2>Explore all the <strong>Brands</strong> Ngen It offers. </h2>
                </div>
                <div class="col-lg-12 ">
                    <div class="row mb-1">
                        <div class="col-lg-10 offset-lg-1">
                            <nav>
                                <div class="row">
                                    <div class="nav nav-tabs nav-fill p-0" id="nav-tab" role="tablist">
                                        {{-- <a class="nav-item nav-link " id="nav-healthcare" data-toggle="tab"
                                            href="#all" role="tab" aria-controls="nav-home"
                                            aria-selected="true">All</a>
                                        <a class="nav-item nav-link" id="nav-healthcare" data-toggle="tab" href="#a"
                                            role="tab" aria-controls="nav-home" aria-selected="true">A</a>

                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#b"
                                            role="tab" aria-controls="nav-profile" aria-selected="false">B</a> --}}

                                        <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab"
                                            href="#all" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">All</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#a"
                                            role="tab" aria-controls="nav-contact" aria-selected="false">A</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#b"
                                            role="tab" aria-controls="nav-contact" aria-selected="false">B</a>

                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#c"
                                            role="tab" aria-controls="nav-contact" aria-selected="false">C</a>

                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#d"
                                            role="tab" aria-dontrols="nav-contact" aria-selected="false">D</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#e" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">E</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#f" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">F</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#g" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">G</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#h" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">H</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#i" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">I</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#j" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">J</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#k" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">K</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#l" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">L</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#m" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">M</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#n" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">N</a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="nav nav-tabs nav-fill p-0" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#o" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">O</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#p" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">P</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#q" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Q</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#r" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">R</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#s" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">S</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#t" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">T</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#u" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">U</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#v" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">V</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#w" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">W</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#x" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">X</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#y" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Y</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#z" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Z</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="tab-content py-3 bg-light border mt-3 rounded px-2 ps-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel"
                            aria-labelledby="nav-healthcare">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_A">
                                    {{-- <h2 class="letter_content_title">All</h2> --}}
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (!empty($item->slug))
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="a" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_A">
                                    <h2 class="letter_content_title">A</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'a')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="b" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_B">
                                    <h2 class="letter_content_title">B</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'b')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="c" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_C">
                                    <h2 class="letter_content_title">C</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'c')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="d" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_D">
                                    <h2 class="letter_content_title">D</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'd')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="e" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_E">
                                    <h2 class="letter_content_title">E</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'e')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="f" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_F">
                                    <h2 class="letter_content_title">F</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'f')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="g" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_G">
                                    <h2 class="letter_content_title">G</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'g')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="h" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_H">
                                    <h2 class="letter_content_title">H</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'h')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="i" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_I">
                                    <h2 class="letter_content_title">I</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'i')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="j" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_J">
                                    <h2 class="letter_content_title">J</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'j')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="k" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_K">
                                    <h2 class="letter_content_title">K</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'k')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="l" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_L">
                                    <h2 class="letter_content_title">L</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'l')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="m" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_M">
                                    <h2 class="letter_content_title">M</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'm')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="n" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_N">
                                    <h2 class="letter_content_title">N</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'n')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="o" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_O">
                                    <h2 class="letter_content_title">O</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'o')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="p" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_P">
                                    <h2 class="letter_content_title">P</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'p')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="q" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_Q">
                                    <h2 class="letter_content_title">Q</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'q')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="r" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_R">
                                    <h2 class="letter_content_title">R</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'r')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="s" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_S">
                                    <h2 class="letter_content_title">S</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 's')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="t" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_T">
                                    <h2 class="letter_content_title">T</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 't')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="u" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_U">
                                    <h2 class="letter_content_title">U</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'u')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="v" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_V">
                                    <h2 class="letter_content_title">V</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'v')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="w" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_W">
                                    <h2 class="letter_content_title">W</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'w')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="x" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_X">
                                    <h2 class="letter_content_title">X</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'x')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="y" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_Y">
                                    <h2 class="letter_content_title">Y</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'y')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="z" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_Z">
                                    <h2 class="letter_content_title">Z</h2>
                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if (strtolower($item->title[0]) === 'z')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('brand.overview', $item->slug) }}">{{ $item->title }}</a>
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
