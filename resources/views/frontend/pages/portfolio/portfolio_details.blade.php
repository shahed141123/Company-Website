@extends('frontend.master')
@section('content')
    <style>
        .project_details_area {
            margin-left: -5rem;
            z-index: 999;
        }

        .project_description {
            background: #FFF;
            border-bottom: 3px solid #ae0a46;
        }

        /* Project Gallery */
        .masonry:after {
            content: "";
            display: table;
            clear: both;
        }

        .masonry .grid-sizer,
        .masonry_block {
            width: 100%;
        }

        .masonry_block {
            float: left;
            padding: 20px 20px;
            border-radius: 25px;
        }

        .masonry-folio {
            position: relative;
            overflow: hidden;
            box-shadow: 1px 4px 15px 1px rgba(0, 0, 0, 0.2);
            border-radius: 1rem;
        }

        .masonry_thum img {
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            border-radius: 1rem;
        }

        .masonry_thum a {
            display: block;
        }

        .masonry_thum a::before {
            display: block;
            background-color: rgba(0, 0, 0, 0.8);
            content: "";
            opacity: 0;
            visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            z-index: 1;
            border-radius: 1rem;
        }

        .masonry_thum a::after {
            display: block;
            height: 30px;
            width: 30px;
            line-height: 30px;
            margin-left: -15px;
            margin-top: -15px;
            position: absolute;
            left: 50%;
            top: 50%;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            z-index: 1;
            border-radius: 1rem;
            border-top: 1px solid #d7dce1;
            border-left: 3px solid #d7dce1;
        }

        .masonry_text {
            position: absolute;
            left: 0;
            bottom: 8rem;
            padding: 0 1.5rem;
            z-index: 2;
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            -ms-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .masonry_title {
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 1;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.2rem;
            margin: 0 0 0.3rem 0;
        }

        .masonry_cat {
            color: rgba(255, 255, 255, 0.5);
            font-size: 1rem;
            font-weight: 200;
            line-height: 1.714;
            margin-bottom: 0;
        }

        .masonry_caption {
            display: none;
        }

        .masonry_project-link {
            display: block;
            color: #ffffff;
            text-align: center;
            z-index: 500;
            top: 3rem;
            left: 2rem;
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            -ms-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        .masonry_project-link::before {
            display: in-line;
            position: relative;
            top: -2.5rem;
            left: 50%;
        }

        .masonry_project-link:hover,
        .masonry_project-link:focus,
        .masonry_project-link:active {
            font-size: 1.1rem;
            color: #ffffff;
            -webkit-transform: translate3d(0, 100%, 0);
            -ms-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            display: block;
            background-color: transparent;
        }

        /* on hover
     * ----------------------------------------------- */
        .masonry-folio:hover .masonry_thum a::before {
            opacity: 1;
            visibility: visible;
        }

        .masonry-folio:hover .masonry_thum a::after {
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .masonry-folio:hover .masonry_thum img {
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
        }

        .masonry-folio:hover .masonry_project-link,
        .masonry-folio:hover .masonry_text {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .masonry_project-link:hover a {
            text-decoration: underline;
        }



        .project_feature h5 {
            color: #ae0a46;
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            word-wrap: break-word;
        }

        .project_feature p {
            font-size: 14px;
            text-align: justify;
            word-wrap: break-word;
        }

        .feature_area {
            border-bottom: 3px solid #ae0a46;
            transition: all 0.2s;
            height: 100%;
        }

        .feature_area:hover {
            border-bottom: 0px solid #ae0a46;
            border-top: 3px solid #ae0a46;
        }

        .carousel-control-prev {
            /* position: absolute; */
            left: 3%;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            padding: 6px;
            color: #fff;
            text-align: center;
            background: #ae0a46;
            border: 0;
            opacity: .5;
            transition: opacity .15s ease;
            height: 30px;
        }

        .carousel-control-next {
            /* position: absolute; */
            left: 6%;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            padding: 6px;
            color: #fff;
            text-align: center;
            background: #ae0a46;
            border: 0;
            opacity: .5;
            transition: opacity .15s ease;
            height: 30px;
        }

        .testimonial_btn {
            margin-left: 2rem;
        }

        @media only screen and (max-width: 992px) {
            .s-works {
                padding-top: 15rem;
                padding-bottom: 15rem;
            }
        }

        @media only screen and (max-width: 768px) {

            .masonry_title,
            .masonry_cat {
                font-size: 1.3rem;
            }
        }

        @media only screen and (max-width: 576px) {
            .s-works {
                padding-top: 12rem;
            }

            .masonry-wrap {
                padding: 0 35px;
            }

            .masonry_block {
                float: none;
                width: 100%;
            }

            .masonry_title,
            .masonry_cat {
                font-size: 1.4rem;
            }
        }
    </style>
    <!--======// Project Banner //======-->
    <section class="common_product_header"
        style="background-image:linear-gradient(
          rgba(0,0,0,0.8),
          rgba(0,0,0,0.8)
          ), url('{{asset('storage/'.$portfolio->banner_image)}}');">
        <div class="container ">
            <h1>{{$portfolio->banner_title}}</h1>
            <p class="text-center text-white">{{$portfolio->banner_short_desc}} </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{$portfolio->banner_btn_link}}">{{$portfolio->banner_btn_name}}</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!----------End--------->
    <!--======// About Project //======-->
    <section>
        <div class="container my-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="project_image">
                        <img class="img-fluid rounded" src="{{asset('storage/'.$portfolio->row_one_image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 project_details_area">
                    <div class="project_description shadow-lg p-3">
                        <h1>{{$portfolio->row_one_title}}</h1>
                        <p style="font-size: 14px;">{!!$portfolio->row_one_description!!}</p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{$portfolio->row_one_btn_link}}">{{$portfolio->row_one_btn_name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======// Project Gallery //======-->
    <section>
        <div class="container pb-5">
            <div class="py-3 text-center">
                <h2>
                    <span style="border-top:2px solid #ae0a46;">
                        {{ \Illuminate\Support\Str::substr($portfolio->gallery_title, 0, 2) }}</span>{{ \Illuminate\Support\Str::substr($portfolio->gallery_title, 2) }}
                    {{-- <span style="border-bottom:2px solid #ae0a46;">ery</span> --}}
                </h2>
            </div>
            <div class="container">

                <div class="text-center mb-1">
                    {{-- <h2 class="project_card_title">Product Showcase</h2> --}}
                    <h5>{!! $portfolio->gallery_short_desc !!}</h5>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">

                        <div class="masonry_block">
                            <div class="masonry-folio">
                                <div class="masonry_thum">
                                    <a href="{{asset('storage/'.$portfolio->gallery_image_one)}}"
                                        class="glightbox" data-gallery="edu-gallery"></a>
                                    <img src="{{asset('storage/'.$portfolio->gallery_image_one)}}"
                                        class="img-fluid" alt="image" style="height:250px;width:100%"/>

                                    <a href="{{asset('storage/'.$portfolio->gallery_image_one)}}"
                                        class="glightbox" data-gallery="edu-gallery"></a>

                                    <a href="{{asset('storage/'.$portfolio->gallery_image_one)}}"
                                        class="glightbox" data-gallery="edu-gallery"></a>
                                </div>

                                <div class="masonry_text">
                                    <h3 class="masonry_title">{{$portfolio->gallery_image_one_title}}</h3>
                                    <p class="masonry_cat">{{$portfolio->gallery_image_one_short_description}}</p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end masonry_block -->

                    <div class="col-lg-4">

                        <div class="masonry_block">
                            <div class="masonry-folio">
                                <div class="masonry_thum">
                                    <a href="{{asset('storage/'.$portfolio->gallery_image_two)}}"
                                        class="glightbox" data-gallery="edu-gallery2"></a>
                                    <img src="{{asset('storage/'.$portfolio->gallery_image_two)}}"
                                        class="img-fluid" alt="image" style="height:250px;width:100%"/>

                                    <a href="{{asset('storage/'.$portfolio->gallery_image_two)}}"
                                        class="glightbox" data-gallery="edu-gallery2"></a>

                                    <a href="{{asset('storage/'.$portfolio->gallery_image_two)}}"
                                        class="glightbox" data-gallery="edu-gallery2"></a>
                                </div>

                                <div class="masonry_text">
                                    <h3 class="masonry_title">{{$portfolio->gallery_image_two_title}}</h3>
                                    <p class="masonry_cat">{{$portfolio->gallery_image_two_short_description}}</p>

                                </div>
                            </div>
                        </div>
                        <!-- end masonry_block -->
                    </div>

                    <div class="col-lg-4">

                        <div class="masonry_block">
                            <div class="masonry-folio">
                                <div class="masonry_thum">
                                    <a href="{{asset('storage/'.$portfolio->gallery_image_three)}}"
                                        class="glightbox" data-gallery="edu-gallery3">
                                        <img src="{{asset('storage/'.$portfolio->gallery_image_three)}}"
                                            class="img-fluid" alt="image" style="height:250px;width:100%"/>
                                    </a>

                                    <a href="{{asset('storage/'.$portfolio->gallery_image_three)}}"
                                        class="glightbox" data-gallery="edu-gallery3"></a>

                                    <a href="{{asset('storage/'.$portfolio->gallery_image_three)}}"
                                        class="glightbox" data-gallery="edu-gallery3"></a>
                                </div>

                                <div class="masonry_text">
                                    <h3 class="masonry_title">{{$portfolio->gallery_image_three_title}}</h3>
                                    <p class="masonry_cat">{{$portfolio->gallery_image_three_short_description}}</p>

                                </div>
                            </div>
                        </div>
                        <!-- end masonry_block -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======// Project Feature //======-->
    <section>
        <div class="container">
            <div class="py-3">
                <h3>
                    <span style="border-top:2px solid #ae0a46;">Pro</span>ject Featu<span
                        style="border-bottom:2px solid #ae0a46;">res</span>
                </h3>
            </div>
            <div class="row pb-5 pt-4">
                @if (!empty($portfolio->feature_one_title))
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="shadow-lg p-3 rounded feature_area">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                            <div class="project_feature">
                                <h5>{{$portfolio->feature_one_title}}</h5>
                                <p class="">{{$portfolio->feature_one_description}} </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($portfolio->feature_two_title))
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="shadow-lg p-3 rounded feature_area">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                            <div class="project_feature">
                                <h5>{{$portfolio->feature_two_title}}</h5>
                                <p class="">{{$portfolio->feature_two_description}} </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($portfolio->feature_three_title))
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="shadow-lg p-3 rounded feature_area">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                            <div class="project_feature">
                                <h5>{{$portfolio->feature_three_title}}</h5>
                                <p class="">{{$portfolio->feature_three_description}} </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($portfolio->feature_four_title))
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="shadow-lg p-3 rounded feature_area">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                            <div class="project_feature">
                                <h5>{{$portfolio->feature_four_title}}</h5>
                                <p class="">{{$portfolio->feature_four_description}} </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======//Client Sayes About Project//======-->
    {{-- @if (count($clients) > 0)
        <section>
            <div class="container">
                <div class="py-3 text-center">
                    <h3>
                        <span style="border-top:2px solid #ae0a46;">Cli</span>ent Say About Proj<span
                            style="border-bottom:2px solid #ae0a46;">ect</span>
                    </h3>
                </div>
                <div class="row">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                        data-bs-interval="false">
                        <div class="carousel-inner">
                            @foreach ($clients as $item)
                                <div class="carousel-item active">
                                    <div class="container mt-5 mb-5">
                                        <div class="row g-2">
                                            @foreach ($clients as $client)
                                                <div class="col-md-4">
                                                    <div class="card p-3 text-center px-4 border-0 shadow-sm">
                                                        <div class="user-image">
                                                            <img src="{{asset('storage/'.$client->image)}}"
                                                                class="rounded-circle" width="80">
                                                        </div>
                                                        <div class="user-content">
                                                            <h5 class="mb-0">{{$client->name}}</h5>

                                                            <p>{!!$client->description!!}</p>
                                                        </div>
                                                        @if ($client->star_mark == 1)
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>

                                                            </div>
                                                        @endif
                                                        @if ($client->star_mark == 2)
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>

                                                            </div>
                                                        @endif
                                                        @if ($client->star_mark == 3)
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>

                                                            </div>
                                                        @endif
                                                        @if ($client->star_mark == 4)
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        @endif
                                                        @if ($client->star_mark == 5)
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="testimonial_btn">
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon text-black" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif --}}
    <!----------End--------->
@endsection
@push('scripts')
  <script>
        /* eslint-disable */

        var config = Zooming.config(),
        TRANSITION_DURATION_DEFAULT = config.transitionDuration,
        TRANSITION_DURATION_SLOW = 1.0,
        TRANSITION_DURATION_FAST = 0.2,
        BG_COLOR_DEFAULT = config.bgColor,
        BG_COLOR_DARK = '#000',
        ENABLE_GRAB_DEFAULT = config.enableGrab,
        ACTIVE_CLASS = 'button-primary',

        btnFast = document.getElementById('btn-fast'),
        btnSlow = document.getElementById('btn-slow'),
        btnDark = document.getElementById('btn-dark'),
        btnNoGrab = document.getElementById('btn-no-grab');

        function isActive(el) {
        return el.classList.contains(ACTIVE_CLASS);
        }

        function activate(el) {
        el.classList.add(ACTIVE_CLASS);
        }

        function deactivate(el) {
        el.classList.remove(ACTIVE_CLASS);
        }

        function fast() {
        var t;
        if (isActive(btnFast)) {
            t = TRANSITION_DURATION_DEFAULT;
            deactivate(btnFast);
        } else {
            t = TRANSITION_DURATION_FAST;
            activate(btnFast);
            deactivate(btnSlow);
        }

        Zooming.config({ transitionDuration: t });
        }

        function slow() {
        var t;
        if (isActive(btnSlow)) {
            t = TRANSITION_DURATION_DEFAULT;
            deactivate(btnSlow);
        } else {
            t = TRANSITION_DURATION_SLOW;
            activate(btnSlow);
            deactivate(btnFast);
        }

        Zooming.config({ transitionDuration: t });
        }

        function dark() {
        var c;
        if (isActive(btnDark)) {
            c = BG_COLOR_DEFAULT;
            deactivate(btnDark);
        } else {
            c = BG_COLOR_DARK;
            activate(btnDark);
        }

        Zooming.config({ bgColor: c });
        }

        function noGrab() {
        var enable;
        if (isActive(btnNoGrab)) {
            enable = ENABLE_GRAB_DEFAULT;
            deactivate(btnNoGrab);
        } else {
            enable = !ENABLE_GRAB_DEFAULT;
            activate(btnNoGrab);
        }

        Zooming.config({ enableGrab: enable });
        }
  </script>
@endpush
