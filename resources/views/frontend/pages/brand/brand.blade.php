@extends('frontend.master')


@section('content')
    <style>
        .iconbox {
            padding: 20px 5px !important;
        }
        .main_color {
            background-color: #ae0a46 !important;
            color: white !important;


        }
        .iconbox-icon {
            background: transparent;
            /* box-shadow: 0 0px 0px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%); */
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            margin: 13px auto;
            display: flex;
            width: 100px;
            height: 100px;
            justify-content: center;
            margin-top: -65px;
            align-items: center;
        }
        /* tab */
        small {
            font-size: 75%;
            color: #777;
            font-weight: 400;
        }


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
            margin-bottom: -1px;
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
            margin: 0;
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


        .main_color h2 {
            color: #ae0a46;
        }


        .iconbox-icon img {
            width: 150px;
            height: 145px;
            margin: 10px 0px 10px 0px;
            border-radius: 0% !important;
        }


        /* Top Brand Btn */
        :root {
            --border-size: 0.125rem;
            --duration: 250ms;
            --ease: cubic-bezier(0.215, 0.61, 0.355, 1);
            --font-family: monospace;
            --color-primary: white;
            --color-secondary: black;
            --color-tertiary: dodgerblue;
            --shadow: rgba(0, 0, 0, 0.1);
            --space: 1rem;
        }
        .multi-button {
            display: flex;
            width: 100%;
            box-shadow: var(--shadow) 4px 4px;
        }
        .multi-button button {
            flex-grow: 1;
            cursor: pointer;
            position: relative;
            padding: 5px;
            /* border: var(--border-size) solid black; */
            color: var(--color-secondary);
            background-color: var(--color-primary);
            font-size: 12px;
            text-transform: capitalize;
            text-shadow: var(--shadow) 2px 2px;
            transition: flex-grow var(--duration) var(--ease);
        }
        .multi-button button+button {
            border-left: var(--border-size) solid black;
            margin-left: calc(var(--border-size) * -1);
        }
        .multi-button button:hover,
        .multi-button button:focus {
            flex-grow: 2;
            color: white;
            outline: none;
            text-shadow: none;
            background-color: #ae0a46;
            border: none;
        }
        .multi-button button:focus {
            outline: var(--border-size) dashed var(--color-primary);
            outline-offset: calc(var(--border-size) * -3);
        }
        .multi-button:hover button:focus:not(:hover) {
            flex-grow: 1;
            color: var(--color-secondary);
            background-color: var(--color-primary);
            outline-color: var(--color-tertiary);
        }
        .multi-button button:active {
            transform: translateY(var(--border-size));
        }
        .iconbox_fe {
            background: #ffffff;
            background-color: #ffffff;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 0px 0px 0px;
            padding: 20px 25px;
            text-align: right;
            display: block;
            margin-top: 0px;
            margin-bottom: 15px;
        }
        .iconbox-icon a img:hover {
        transform: scale(1.1);
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
                            <a href="{{ route('shop.html') }}" class="common_button2">Go To Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->


    <!--======// Top Brand //=====-->
    <section>
        <div class="container">
            <div class="home_title mt-5">
                <h5 class="home_title_heading">Top Brands</h5>
                <p class="home_title_text"></p>
            </div>








            <div class="row">
                {{-- first brand --}}
                @foreach ($top_brands as $item)
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="iconbox">
                            <div class="iconbox-icon">
                                {{-- <img src="{{ asset('storage/requestImg/' . App\Models\Admin\Brand::where('id', $item->brand_id)->value('image')) }}" --}}
                                <img src="{{ asset('storage/requestImg/' . App\Models\Admin\Brand::where('id', $item->brand_id)->value('image')) }}"
                                    alt="" width="70px" height="50px">
                            </div>
                            <div class="featureinfo">
                                <h4 class="text-center">{{ Str::limit($item->title, 10) }}</h4>
                                <div class="d-flex justify-content-center px-3">
                                    <div class="brand_btns" style="justify-content: center;
                                    background: #ae0a46;
                                    padding: 7px;
                                    color: white;
                                    font-size: 13px;
                                    display: flex;">
                                        <a class="text-white" href="{{ route('brandpage.html', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">Details | </a>
                                        <a class="text-white ms-1" href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}"><span class="">Shop</span> </a>
                                    </div>
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
    </section>
    <!--------- End -------->




    <!--======// Feature Brand //=====-->
    <section>
        <div class="container pt-5">
            <div class="home_title pb-5">
                <h5 class="home_title_heading">Featured Brands</h5>
                {{-- <p class="home_title_text">Our Features Brand Are Here.</p> --}}
            </div>
            <div class="row mt-5">
                {{-- first brand --}}
                @foreach ($featured_brands as $item)
                    <div class="col-lg-2 col-md-3 col-sm-12 ">
                        <div class="iconbox_fe">
                            <div class="iconbox-icon">
                                <a href="{{ route('custom.product', $item->slug) }}">
                                    <img src="{{ asset('storage/requestImg/' . $item->image) }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--------- End -------->


    <!--======// Explore all the brands Ngen It has to offer. //====-->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="text-center py-3">
                    <h2>Explore all the <strong>Brands</strong> Ngen It has to offer.</h2>
                </div>
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill p-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#all"
                                role="tab" aria-controls="nav-home" aria-selected="true">All</a>


                            <a class="nav-item nav-link" id="nav-healthcare" data-toggle="tab" href="#a" role="tab"
                                aria-controls="nav-home" aria-selected="true">A</a>


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
                        </div>
                    </nav>
                    <div class="tab-content py-3 bg-light mt-3 rounded px-2 ps-4" id="nav-tabContent">
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
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="b" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <div class="multi_tab_content ">
                                <div class="letter_content_item" id="brand_B">
                                    <h2 class="letter_content_title">B</h2>


                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'B')
                                                    <li class="col-lg-3 col-sm-6">
                                                        <a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
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
                        <div class="tab-pane fade show" id="d" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="f" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="h" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="j" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="l" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="n" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="p" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="r" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="t" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="v" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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
                        <div class="tab-pane fade show" id="z" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
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






