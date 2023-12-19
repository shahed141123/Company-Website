@extends('frontend.master')
@section('content')
    @include('frontend.pages.kukapages.partial.page_header')
    <section class="header" id="myHeader">
        <div class="brand-page-content container nav-bar">
            <div class="px-lg-4 px-sm-3">
                @if (!empty($brandpage->row_six_title))
                    <div class="row brandpage_row pt-0 px-lg-4 pb-lg-0">
                        <div class="col-lg-12">
                            {{-- <h3 class="mb-3 brand-p-title d-lg-block d-sm-none" style="color:#555;">{{ ucfirst($brand->title) }}</h3> --}}

                            {{-- <h3 class="eyebrow_title"></h3> --}}
                            <h5 class="company-tab-title mb-2 border-bottom">
                                <span class="rounded-pill text-black bg-white">{{ $brandpage->row_six_title }}</span>
                            </h5>
                            <p class="company-tab-para pt-3">
                                {!! $brandpage->row_six_header !!}
                            </p>
                        </div>
                    </div>
                @endif
                @if (!empty($row_one))
                    <div class="row brandpage_row">
                        {{-- New One --}}
                        <div class="col-lg-6 col-sm-12 p-0">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid row_right_image"
                                    src="{{ !empty($row_one->image) && file_exists(public_path('storage/' . $row_one->image)) ? asset('storage/' . $row_one->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                    alt="" style="border-radius: 7px 55px 7px 55px;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 company-tab-para">
                            @if (!empty($row_one->badge))
                                <h6 class="eyebrow">{{ $row_one->badge }}</h6>
                            @endif
                            <h3 class="eyebrow_title">{{ $row_one->title }}</h3>
                            <p class="company-tab-para text-justify-align">{!! $row_one->description !!}</p>
                            @if (!empty($row_one->link))
                                <a href="{{ $row_one->link }}" class="btn-color">{{ $row_one->btn_name }}</a>
                            @else
                            @endif
                        </div>
                    </div>
                @endif
                @if (!empty($row_three))
                    <div class="row brandpage_row">
                        {{-- New One --}}

                        <div class="col-lg-6 col-sm-12 company-tab-para">
                            @if (!empty($row_three->badge))
                                <h6 class="eyebrow">{{ $row_three->badge }}</h6>
                            @endif
                            <h3 class="eyebrow_title">{{ $row_three->title }}</h3>
                            <p class="company-tab-para text-justify-align">{!! $row_three->description !!}</p>
                            @if (!empty($row_three->link))
                                <a href="{{ $row_three->link }}" class="btn-color">{{ $row_three->btn_name }}</a>
                            @else
                            @endif
                        </div>
                        <div class="col-lg-6 col-sm-12 ">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid row_left_image"
                                    src="{{ isset($row_three->image) && file_exists(public_path('storage/' . $row_three->image)) ? asset('storage/' . $row_three->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                    alt="" style="border-radius: 55px 7px 55px 7px;">
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($card1))
                    <div class="row brandpage_row">
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
                                <div class="col-lg-4 col-sm-12 company-tab-para">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title company-tab-para text-justify-align">
                                            {{ $card1->title }}</p>
                                        <p class="software_chose_item_text company-tab-para text-justify-align">
                                            {!! Str::limit($card1->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card2)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title company-tab-para text-justify-align">
                                            {{ $card2->title }}</p>
                                        <p class="software_chose_item_text company-tab-para text-justify-align">
                                            {!! Str::limit($card2->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card3)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title company-tab-para text-justify-align">
                                            {{ $card3->title }}</p>
                                        <p class="software_chose_item_text company-tab-para text-justify-align">
                                            {!! Str::limit($card3->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            @if (!empty($brandpage->row_six_image))
                <div class="my-4 pt-lg-4">
                    <img class="img-fluid brandpage_bg_image"
                        src="{{ isset($brandpage->row_six_image) && file_exists(public_path('storage/' . $brandpage->row_six_image)) ? asset('storage/' . $brandpage->row_six_image) : asset('frontend/images/no-row-bg-img(1552-388).png') }}"
                        alt="">
                </div>
            @endif
            <div class="px-lg-4 px-sm-3">
                @if (!empty($row_four))
                    <div class="row brandpage_row">
                        <div class="col-lg-6 col-sm-12 company-tab-para">
                            @if (!empty($row_four->badge))
                                <h6 class="eyebrow">{{ $row_four->badge }}</h6>
                            @endif
                            <h3 class="eyebrow_title">{{ $row_four->title }}</h3>
                            <p class="company-tab-para text-justify-align">{!! $row_four->description !!}</p>
                            @if (!empty($row_four->link))
                                <a href="{{ $row_four->link }}" class="btn-color">{{ $row_four->btn_name }}</a>
                            @else
                            @endif
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid row_left_image"
                                    src="{{ isset($row_four->image) && file_exists(public_path('storage/' . $row_four->image)) ? asset('storage/' . $row_four->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                    alt="" style="border-radius: 55px 7px 55px 7px;">
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($row_five))
                    <div class="row brandpage_row pt-lg-4">
                        <div class="col-lg-6 col-sm-12 company-tab-para">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid row_right_image"
                                    src="{{ isset($row_five->image) && file_exists(public_path('storage/' . $row_five->image)) ? asset('storage/' . $row_five->image) : asset('frontend/images/no-row-img(580-326).png') }}"
                                    style="border-radius: 7px 55px 7px 55px;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 company-tab-para">
                            @if (!empty($row_five->badge))
                                <h6 class="eyebrow">{{ $row_five->badge }}</h6>
                            @endif
                            <h3 class="eyebrow_title">{{ $row_five->title }}</h3>
                            <p class="company-tab-para text-justify-align">{!! $row_five->description !!}</p>
                            @if (!empty($row_five->link))
                                <a href="{{ $row_five->link }}" class="btn-color">{{ $row_five->btn_name }}</a>
                            @else
                            @endif
                        </div>
                    </div>
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
