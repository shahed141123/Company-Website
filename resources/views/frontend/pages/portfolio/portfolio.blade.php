@extends('frontend.master')
@section('content')
    {{-- For Portfolio Show Case --}}
    <style>
        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            background-color: #ae0a46 !important;
        }

        @-webkit-keyframes nc-icon-spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @-moz-keyframes nc-icon-spin {
            0% {
                -moz-transform: rotate(0deg);
            }

            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @keyframes nc-icon-spin {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .nav-tabs {
            border: 0;
            padding: 15px 0.7rem;
        }

        .nav-tabs:not(.nav-tabs-neutral)>.nav-item>.nav-link.active {
            box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
        }

        .card .nav-tabs {
            border-top-right-radius: 0.1875rem;
            border-top-left-radius: 0.1875rem;
        }

        .nav-tabs>.nav-item>.nav-link {
            color: #888888;
            margin: 0;
            margin-right: 5px;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 30px;
            font-size: 14px;
            padding: 11px 23px;
            line-height: 1.5;
        }

        .nav-tabs>.nav-item>.nav-link:hover {
            background-color: transparent;
        }

        .nav-tabs>.nav-item>.nav-link.active {
            background-color: #444;
            border-radius: 30px;
            color: #FFFFFF;
        }

        .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
            font-size: 14px;
            position: relative;
            top: 1px;
            margin-right: 3px;
        }

        /* Showcase Card Style */
        .box {
            font-family: 'Signika', sans-serif;
            text-align: center;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        .box:before {
            content: "";
            background: linear-gradient(to right, #ae0a46, #8b0737);
            width: 100%;
            height: 100%;
            border-radius: 15px;
            transform-origin: 100% 0;
            transform: rotate(-90deg);
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.35s ease-in-out;
        }

        .box:hover:before {
            opacity: 0.7;
            transform: rotate(0deg);
        }

        .box img {
            width: 100%;
            height: 250px !important;
        }

        .box .box-content {
            color: #fff;
            width: 100%;
            padding: 15px 5px;
            transform-origin: 100% 0;
            transform: translateX(-50%) translateY(-50%) rotate(-90deg);
            position: absolute;
            top: 50%;
            left: 50%;
            transition: all 0.35s ease-in-out;
        }

        .box:hover .box-content {
            transform: translateX(-50%) translateY(-50%) rotate(0deg);
        }

        .box .title_name {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 0 0 3px;
        }

        .box .post {
            font-size: 14px;
            font-weight: 200;
            letter-spacing: 1px;
            text-transform: capitalize;
            display: block;
            margin: 0 0 10px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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
            color: #fff;
            font-size: 15px;
            line-height: 34px;
            width: 34px;
            height: 34px;
            border: 1px solid #fff;
            display: block;
            position: relative;
            transition: all 0.35s;
        }

        .box .icon li a:hover {
            color: #fff;
            background: rgb(174 10 70);
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }


        .main_color {
            color: #ae0a46;
        }

        .main_bg {
            background-color: #ae0a46;
        }

        .why_chose img {
            width: 60px;
            height: 60px;
        }

        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }

        @media screen and (max-width: 768px) {

            .nav-tabs {
                display: inline-block;
                width: 100%;
                padding-left: 100px;
                padding-right: 100px;
                text-align: center;
            }

            .nav-tabs .nav-item>.nav-link {
                margin-bottom: 5px;
            }
        }


        /* New */
        .box .icon li a {
            background: transparent;
        }

        .nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
            color: #000 !important;
            padding: 25px !important;
            border: 1px solid #eee !important;
        }

        .nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF !important;
            padding: 25px !important;
        }
    </style>

    <!--======// Header Title //======-->
    @if (!empty($portfolio))
        <section class="common_product_header"
            style="background-image: linear-gradient(#ae0a46,#880736);
                clip-path: polygon(0 0, 100% 0%, 100% 80%, 50% 100%, 0 80%); height: 28rem;">
            <div class="container ">
                {{-- <h1>We Design Things With <br> Love And Passion</h1> --}}
                <h1>{{ $portfolio->banner_title }}</h1>

                <div class="row ">
                    <!--BUTTON START-->
                    <p class="text-center text-white pt-5">{{ $portfolio->banner_short_desc }}</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="m-4">
                            <a class="common_button3 py-3"
                                href="{{ $portfolio->banner_btn_link }}">{{ $portfolio->banner_btn_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!----------End--------->
    {{-- Show Case --}}
    @if (is_countable($categories) && count($categories) > 0)
        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cards">
                        <div class="cards-header">
                            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center my-4" role="tablist"
                                data-background-color="orange">


                                @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab"
                                            href="#cat-Tab{{ $category->id }}" role="tab">{{ $category->title }}</a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                        <div class="cards-body">
                            <!-- Tab panes -->

                            <div class="tab-content text-center" style="background: transparent !important;">

                                @foreach ($categories as $category)
                                    @php
                                        $portfolios = App\Models\Admin\PortfolioDetails::where('category_id', $category->id)
                                            ->select('id', 'banner_title', 'gallery_image_one')
                                            ->get();
                                    @endphp
                                    <div class="tab-pane fade {{ $loop->first ? 'active' : '' }} {{ $loop->first ? 'show' : '' }}"
                                        id="cat-Tab{{ $category->id }}" role="tabpanel">
                                        <div class="container">
                                            <div class="row">
                                                @foreach ($portfolios as $item)
                                                    <div class="col-md-3 col-sm-6">

                                                        <div class="box">
                                                            <img src="{{ asset('storage/' . $item->gallery_image_one) }}">
                                                            <div class="box-content mt-2">
                                                                <h3 class="text-white">{{ $item->banner_title }}</h3>
                                                                <span class="post text-white">{{ $category->title }}</span>
                                                                <ul class="icon">
                                                                    <li><a
                                                                            href="{{ route('portfolio.details', $item->id) }}"><i
                                                                                class="fa fa-link"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--=====// Subscription section //=====-->
    {{-- <section class="subscription bg-white my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscription-wrapper">
                        <div
                            class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
                            <h3 class="flex-fill">Subscribe <br> to our newsletter</h3>
                            <form action="#" class="row flex-fill">
                                <div class="col-lg-7 my-md-2 my-2">
                                    <input type="email" class="form-control px-4 border-0 w-100 text-center text-md-left"
                                        id="email" placeholder="Your Email" name="email">
                                </div>
                                <div class="col-lg-5 my-md-2 my-2">
                                    <button type="submit" class="btn btn-primary btn-lg border-0 w-100">Subscribe
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!---------End -------->

    <!--=====// Team section //=====-->
    @if (count($teams) > 0)
        <section>
            <div class="container my-5">
                <div class="team_heading">
                    <div class="py-3">
                        <h3><span style="border-top:2px solid #ae0a46;">Ou</span>r Te<span
                                style="border-bottom:2px solid #ae0a46;">am</span></h3>
                    </div>
                </div>
                <div class="row">

                    @foreach ($teams as $team)
                        <div class="col-md-3 col-sm-6">
                            <div class="our-team">
                                <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->title }}">
                                <div class="team-content">
                                    <h3 class="title_name">{{ $team->title }}</h3>
                                    <span class="post">{{ $team->short_desc }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif
    <!---------End -------->

    @if (!empty($portfolio))
        <section class=""
            style="background-image:url('https://vetsez.com/wp-content/uploads/2020/03/AdobeStock_291217289-copy.jpg');">
            <div class="container-fluid">
                <div class="container px-3 py-5">
                    <div class="title_area">
                        <p><span class="main_bg text-white p-2 rounded-pill">{{ $portfolio->choose_us_badge }}</span></p>
                        <h1>{{ $portfolio->choose_us_title }}</h1>
                        <p class="w-50">{{ $portfolio->choose_us_short_desc }}</p>
                    </div>
                    <div class="row">
                        @if (count($chooses) > 0)
                            @foreach ($chooses as $key => $choose)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="why_chose p-3">
                                        <img class="img-fluid" src="{{ asset('storage/' . $choose->image) }}"
                                            alt="" width="60px" height="60px">
                                        <div>
                                            <p class="text-muted">{{ ++$key }}</p>
                                            <h5>{{ $choose->title }}</h5>
                                            <p style="font-size: 14px; text-align: justify">
                                                {!! $choose->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->

    {{-- Site Portfolio Show Case Start --}}
@endsection
