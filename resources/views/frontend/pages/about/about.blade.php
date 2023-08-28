@extends('frontend.master')
@section('content')
    <style>
        .tab_btn_icon {
            padding-top: none;
        }
    </style>

    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: url('{{ asset('frontend/images/custom_shop.jpg') }}'); padding: 100px 0px !important;">
        <div class="container ">
            <h1><strong>About Us</strong></h1>
            <p class="text-center text-white" style="font-size: 15px;">{{ $about->title }} </p>
        </div>
    </section>


    <!----------End--------->
    @if (!empty($row1))
        <section>
            <div class="container">
                <div class="row py-3">
                    <h3 class="text-center w-50 mx-auto">
                        {{ $row1->banner_short_description }}
                    </h3>
                </div>
                <div class="row d-flex align-items-center mt-4">
                    <span class="text-start pt-3 ps-0 mb-3 d-flex align-items-center ms-2"
                        style="border-bottom: 2px solid #ae0a46; font-size: 20px;">
                        <div style="background: #ae0a46; color: white; padding: 10px; display: flex; align-items: center;">
                            <span>{{ $row1->badge }}</span>
                        </div>
                    </span>
                    {{-- <div class="col-lg-6 mt-3">
                        <img class="img-fluid " src="{{ asset('storage/' . $row1->image) }}" alt="">
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="">
                            <h2>{{ $row1->title }}</h2>
                            <p> {!! $row1->description !!} </p>
                            @if (!empty($row1->btn_name))
                                <div class="btn_left">
                                    <a class="theme-btn one" href="{{ $row1->link }}">{{ $row1->btn_name }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (!empty($row2))
        <section>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <span class="text-start pt-3 ps-0 mb-3 d-flex align-items-center justify-content-start ms-2"
                        style="border-bottom: 2px solid #ae0a46; font-size: 20px;">
                        <div
                            style="background: #ae0a46;
                color: white;
                padding: 10px; display: flex; align-items: center;">
                            <span>{{ $row2->badge }}</span>
                        </div>
                    </span>
                    <div class="col-lg-12">
                        <div class="text-start">
                            <h2>{{ $row2->title }}</h2>
                            <p> {!! $row2->description !!} </p>
                            @if (!empty($row2->btn_name))
                                <div class="btn_left">
                                    <a class="theme-btn one" href="{{ $row2->link }}">{{ $row2->btn_name }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 mt-3 d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('storage/' . $row2->image) }}" alt=""
                            style="width: 360px;">
                    </div> --}}
                </div>
            </div>
        </section>
    @endif

    <!--======// CEO Details Section //======-->
    {{-- <section>
        <div class="call_to_action" style="background-image: url(images/hardware/calltoaction.jpg);">
            <div class="container">
                <!-- about seo -->
                <div class="about_seo_wrapper">
                    <!-- image -->
                    <div class="about_seo_imgage">
                        <img src="https://www.millicom.com/media/5004/odilon-almeida-fg.png" alt="">
                    </div>
                    <!-- content -->
                    <div class="about_seo_content">
                        <div class="about_seo_text">
                            <h4 class="text-black">Our goal at NGen IT is to make meaningful connections that positively
                                impact the lives of
                                the people we serve, including our clients, partners and teammates.</h4>
                            <span class="text-black">Md Rasel sir</span> <br>
                            <span class="text-black fw-bold">CEO NGenit</span>
                            <div class="pt-5">
                                <a href="" class="product_button">Meet our leadership</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @if (!empty($about->video_link))
        <section class="container mt-3 mb-5">
            <div class="software_feature_title pb-5">
                <h1 class="text-center ">{{ $about->row_four_title }}</h1>
            </div>
            <div class="row d-flex justify-content-start align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <iframe width="545" height="330" src="{{ $about->video_link }}?autoplay=1&mute=1" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="home_title">
                        <h5 class="home_title_heading" style="text-align: left;">
                            {{ $about->video_row_title }}
                        </h5>
                        <p class="home_title_text" style="text-align: left;">
                            {{ $about->video_row_short_description }}</p>
                        {{-- <div class="business_seftion_button text-center">
                            <a class="common_button2"
                                href="{{ $software_info->row_four_btn_link }}">{{ $software_info->row_four_btn_name }}</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (!empty($row3))
        <section>
            <div class="container py-5">
                <div class="row d-flex align-items-center gx-1">
                    <span class="text-start pt-3 ps-0 mb-3 d-flex align-items-center justify-content-start ms-2"
                        style="border-bottom: 2px solid #ae0a46; font-size: 20px;">
                        <div style="background:#ae0a46;color:white;padding: 10px; display: flex; align-items: center;">
                            <span>{{ $row3->badge }}</span>
                        </div>
                    </span>
                    <div class="col-lg-10">
                        <div class="text-start">
                            <h2>{{ $row3->title }}</h2>
                            <p>{!! $row3->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="container">
                            <div class="row">
                                <h4 class="mb-3">All Profiles</h4>
                                @foreach ($pdfs as $pdf)
                                    <div class="col-lg-12 mb-2">
                                        <a href="{{ asset('storage/files/' . $pdf->document) }}" type="button"
                                            class="effect02 pdf_btn me-2">
                                            <span class="btn-label"><i class="ph-download-simple fw-bolder me-2"></i></i>
                                                {{ $pdf->button_name }}
                                            </span>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                @if (!empty($row3->btn_name))
                    <div class="col-lg-2 mt-3">
                        <div class="btn_left">
                            <a class="theme-btn one" href="{{ $row3->link }}">{{ $row3->btn_name }}</a>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endif
    <!----------End--------->

    <!--======// Location Area End //======-->

    <!--======// Office Location Area Area Start //======-->

    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection

<script>
    $(document).ready(function() {
        $('.counter-value').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3500,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
