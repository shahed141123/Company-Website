@extends('frontend.master')
@section('content')
    <style>
        /* Need Here */
        .slick-slider .element {
            height: 480px;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            margin: 0px 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 20px;
        }

        .slick-slider .slick-disabled {
            opacity: 0;
            pointer-events: none;
        }


        .img-fluid {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }


        .row-title {
            color: #555;
            font-size: 32px;
        }


        .para_text {
            text-align: justify !important;
        }

        /* For NEw */
        .eyebrow {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 0.44px;
            background-image: -webkit-gradient(linear, left top, right top, color-stop(4%, #4e4fa9), to(#a831d6));
            background-image: -webkit-linear-gradient(left, #4e4fa9 4%, #a831d6 100%);
            background-image: -o-linear-gradient(left, #4e4fa9 4%, #a831d6 100%);
            background-image: linear-gradient(to right, #4e4fa9 4%, #a831d6 100%);
            position: relative;
            text-transform: uppercase;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            margin-bottom: 0.6rem;
            padding-bottom: 5px;
        }


        .eyebrow:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            background-color: #4e4fa9;
            width: calc(100% + 10px);
            height: 4px;
            border-radius: 5px;
        }

        .eyebrow_title {
            font-family: "Allumi Std Extended";
            /* font-family: "Klinic Slab"; */
            text-align: start;
        }

        /* Need Here End*/
    </style>

    @include('frontend.pages.kukapages.partial.page_header')
    <section class="header" id="myHeader">
        <div class="brand-page-content container nav-bar">
            <div class=" px-5 pb-0 pt-0">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-3" style="color:#555;">{{ ucfirst($brand->title) }}</h3>
                        @if (!empty($brandpage->row_six_title))
                            <h5 class="company-tab-title mb-2 border-bottom">
                                <span class="rounded-pill"
                                    style="font-size: 25px; background-color: #ffffff;">{{ $brandpage->row_six_title }}</span>
                            </h5>
                            <p class="mt-4 text-justify-align" style="font-size: 16px;">
                                {!! $brandpage->row_six_header !!}
                            </p>
                        @endif
                    </div>
                </div>
                @if (!empty($row_one))
                    <div class="row my-5 no-margin">
                        {{-- New One --}}
                        <div class="col-lg-6 col-sm-12 ">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid" src="{{ isset($row_one->image) && file_exists(asset('storage/' . $row_one->image)) ? asset('storage/' . $row_one->image) : asset('frontend/images/no-row-img(580-326).png') }}" alt=""
                                    style="border-radius: 7px 55px 7px 55px;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 para_text">
                            @if (!empty($row_one->badge))
                                <h6 class="eyebrow">{{ $row_one->badge }}</h6>
                            @endif
                            <h2 class="eyebrow_title">{{ $row_one->title }}</h2>
                            <p class="para_text text-justify-align">{!! $row_one->description !!}</p>
                            @if (!empty($row_one->link))
                                <a href="{{ $row_one->link }}" class="common_button">{{ $row_one->btn_name }}</a>
                            @else
                            @endif
                        </div>
                    </div>
                @endif
                @if (!empty($row_three))
                    <div class="row mt-4 pt-4 no-margin">
                        {{-- New One --}}

                        <div class="col-lg-6 col-sm-12 para_text">
                            @if (!empty($row_three->badge))
                                <h6 class="eyebrow">{{ $row_three->badge }}</h6>
                            @endif
                            <h2 class="eyebrow_title">{{ $row_three->title }}</h2>
                            <p class="para_text text-justify-align">{!! $row_three->description !!}</p>
                            @if (!empty($row_three->link))
                                <a href="{{ $row_three->link }}" class="common_button">{{ $row_three->btn_name }}</a>
                            @else
                            @endif
                        </div>
                        <div class="col-lg-6 col-sm-12 ">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid" src="{{ isset($row_three->image) && file_exists(asset('storage/' . $row_three->image)) ? asset('storage/' . $row_three->image) : asset('frontend/images/no-row-img(580-326).png') }}" alt=""
                                    style="border-radius: 55px 7px 55px 7px;">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="my-5">
                    <div class="container">
                        <!-- section title -->
                        <div class="col-lg-10 offset-1">
                            <h3 class="section_title mx-auto">{{ $brandpage->row_one_title }} </h3>
                            <p class="mx-auto text-justify-align" style="text-align: center;">{{ $brandpage->row_one_header }} </p>
                        </div>
                        <!-- wrapper -->
                        <div class="row pt-2">
                            <!-- item -->
                            @if ($card1)
                                <div class="col-lg-4 col-sm-12 para_text">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title para_text text-justify-align">{{ $card1->title }}</p>
                                        <p class="software_chose_item_text para_text text-justify-align">{!! Str::limit($card1->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card2)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title para_text text-justify-align">{{ $card2->title }}</p>
                                        <p class="software_chose_item_text para_text text-justify-align">{!! Str::limit($card2->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card3)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title para_text text-justify-align">{{ $card3->title }}</p>
                                        <p class="software_chose_item_text para_text text-justify-align">{!! Str::limit($card3->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($brandpage->row_six_image))
                <div class="my-2">
                    <img class="img-fluid" src="{{ isset($brandpage->row_six_image) && file_exists(asset('storage/' . $brandpage->row_six_image)) ? asset('storage/' . $brandpage->row_six_image) : asset('frontend/images/no-row-bg-img(1552-388).png') }}" alt="">
                </div>
            @endif
            <div class="p-5 pb-0 pt-0">
                @if (!empty($row_four))
                    <section class="py-4 my-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 para_text">
                                    @if (!empty($row_four->badge))
                                        <h6 class="eyebrow">{{ $row_four->badge }}</h6>
                                    @endif
                                    <h2 class="eyebrow_title">{{ $row_four->title }}</h2>
                                    <p class="para_text text-justify-align">{!! $row_four->description !!}</p>
                                    @if (!empty($row_four->link))
                                        <a href="{{ $row_four->link }}"
                                            class="common_button2">{{ $row_four->btn_name }}</a>
                                    @else
                                    @endif
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex justify-content-center">
                                        <img class="img-fluid" src="{{ isset($row_four->image) && file_exists(asset('storage/' . $row_four->image)) ? asset('storage/' . $row_four->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                            alt="" style="border-radius: 55px 7px 55px 7px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                @if (!empty($row_five))
                    <section class="my-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 para_text">
                                    <div class="d-flex justify-content-center">
                                        <img class="img-fluid" src="{{ isset($row_five->image) && file_exists(asset('storage/' . $row_five->image)) ? asset('storage/' . $row_five->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                            style="border-radius: 7px 55px 7px 55px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 para_text">
                                    @if (!empty($row_five->badge))
                                        <h6 class="eyebrow">{{ $row_five->badge }}</h6>
                                    @endif
                                    <h2 class="eyebrow_title">{{ $row_five->title }}</h2>
                                    <p class="para_text text-justify-align">{!! $row_five->description !!}</p>
                                    @if (!empty($row_five->link))
                                        <a href="{{ $row_five->link }}"
                                            class="common_button">{{ $row_five->btn_name }}</a>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            </div>
        </div>
    </section>
    <!---------End -------->
@endsection
@section('scripts')
    <script>
        $(".slick-slider").slick({
            slidesToShow: 1,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
            // dots: false, Boolean
            // arrows: false, Boolean
        });
    </script>
    <script>
    // Wait for the DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        // Find the element with the class 'fixed-section'
        var elementToRemoveClassFrom = document.querySelector('.fixed-section');

        // Check if the element is found before attempting to remove the class
        if (elementToRemoveClassFrom) {
            // Remove the class 'fixed-section'
            elementToRemoveClassFrom.classList.remove('fixed-section');
        }
    });
</script>
@endsection
