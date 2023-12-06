@extends('frontend.master')
@section('content')
    @include('frontend.pages.kukapages.partial.page_header')
    <section class="header" id="myHeader">
        <div class="brand-page-content container nav-bar">
            <div class="px-5 brand-p-content">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-3 brand-p-title d-lg-block d-sm-none" style="color:#555;">{{ ucfirst($brand->title) }}</h3>
                        @if (!empty($brandpage->row_six_title))
                            <h5 class="company-tab-title mb-2 border-bottom">
                                <span class="rounded-pill text-black bg-white">{{ $brandpage->row_six_title }}</span>
                            </h5>
                            <p class="mt-4 text-justify-align" style="font-size: 16px;">
                                {!! $brandpage->row_six_header !!}
                            </p>
                        @endif
                    </div>
                </div>
                @if (!empty($row_one))
                    <div class="row no-margin">
                        {{-- New One --}}
                        <div class="col-lg-6 col-sm-12 p-0">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid"
                                    src="{{ !empty($row_one->image) && file_exists(public_path('storage/' . $row_one->image)) ? asset('storage/' . $row_one->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                    alt="" style="border-radius: 7px 55px 7px 55px;">
                                {{-- @php
                                    $imagePath = !empty($row_one->image) && file_exists(public_path('storage/' . $row_one->image)) ? asset('storage/' . $row_one->image) : asset('frontend/images/no-row-img(580-326).png');
                                @endphp

                                <img class="img-fluid" src="{{ $imagePath }}" alt=""
                                    style="border-radius: 7px 55px 7px 55px;"> --}}
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
                                <img class="img-fluid"
                                    src="{{ isset($row_three->image) && file_exists(public_path('storage/' . $row_three->image)) ? asset('storage/' . $row_three->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                    alt="" style="border-radius: 55px 7px 55px 7px;">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="">
                    <div class="container">
                        <!-- section title -->
                        <div class="col-lg-10 offset-1">
                            <h3 class="section_title mx-auto">{{ $brandpage->row_one_title }} </h3>
                            <p class="mx-auto text-justify-align" style="text-align: center;">
                                {{ $brandpage->row_one_header }} </p>
                        </div>
                        <!-- wrapper -->
                        <div class="row pt-2">
                            <!-- item -->
                            @if ($card1)
                                <div class="col-lg-4 col-sm-12 para_text">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title para_text text-justify-align">
                                            {{ $card1->title }}</p>
                                        <p class="software_chose_item_text para_text text-justify-align">
                                            {!! Str::limit($card1->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card2)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title para_text text-justify-align">
                                            {{ $card2->title }}</p>
                                        <p class="software_chose_item_text para_text text-justify-align">
                                            {!! Str::limit($card2->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card3)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title para_text text-justify-align">
                                            {{ $card3->title }}</p>
                                        <p class="software_chose_item_text para_text text-justify-align">
                                            {!! Str::limit($card3->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($brandpage->row_six_image))
                <div class="my-2">
                    <img class="img-fluid"
                        src="{{ isset($brandpage->row_six_image) && file_exists(public_path('storage/' . $brandpage->row_six_image)) ? asset('storage/' . $brandpage->row_six_image) : asset('frontend/images/no-row-bg-img(1552-388).png') }}"
                        alt="">
                </div>
            @endif
            <div class="p-5 pb-0 pt-0">
                @if (!empty($row_four))
                    <section class="">
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
                                        <img class="img-fluid"
                                            src="{{ isset($row_four->image) && file_exists(public_path('storage/' . $row_four->image)) ? asset('storage/' . $row_four->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                            alt="" style="border-radius: 55px 7px 55px 7px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                @if (!empty($row_five))
                    <section class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 para_text">
                                    <div class="d-flex justify-content-center">
                                        <img class="img-fluid"
                                            src="{{ isset($row_five->image) && file_exists(public_path('storage/' . $row_five->image)) ? asset('storage/' . $row_five->image) : asset('frontend/images/no-row-img(580-326).png') }}"
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
