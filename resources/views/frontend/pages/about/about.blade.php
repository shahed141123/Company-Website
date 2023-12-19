@extends('frontend.master')
@section('content')
    <style>
        .tab_btn_icon {
            padding-top: none;
        }
    </style>

    <!--======// Header Title //======-->
    @if (!empty($about->banner_image))
        <section>
            <div>
                <img class="page_top_banner"
                    src="{{ !empty($about->banner_image) && file_exists(public_path('storage/' . $about->banner_image)) ? asset('storage/' . $about->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
                    alt="NGEN IT Software">
            </div>
        </section>
    @endif
    <!----------End--------->
    @if (!empty($row1))
        <section>
            <div class="container">
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
                        <div class="about-column-first">
                            <h2 class="about-title">{{ $row1->title }}</h2>
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
                    <span class="pt-3 ps-0 mb-3 d-flex align-items-center justify-content-start ms-2"
                        style="border-bottom: 2px solid #ae0a46; font-size: 20px;">
                        <div
                            style="background: #ae0a46;
                color: white;
                padding: 10px; display: flex; align-items: center;">
                            <span>{{ $row2->badge }}</span>
                        </div>
                    </span>
                    <div class="col-lg-12">
                        <div class="about-column-first">
                            <h2 class="about-title">{{ $row2->title }}</h2>
                            <p> {!! $row2->description !!} </p>
                            @if (!empty($row2->btn_name))
                                <div class="btn_left">
                                    <a class="theme-btn one" href="{{ $row2->link }}">{{ $row2->btn_name }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!--======// CEO Details Section //======-->

    @if (!empty($about->ceo_title))
        <section class="spacer learn_more py-lg-3">
            <div class="container py-lg-5 py-4">
                <div class="about_seo_wrapper">
                    <!-- image -->
                    <div class="about_seo_imgage">
                        <img src="{{ isset($about->ceo_image) && file_exists(public_path('storage/' . $about->ceo_image)) ? asset('storage/' . $about->ceo_image) : asset('frontend/images/no-row-img(580-326).png') }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="about_seo_content">
                        <div class="about_seo_text">
                            <h4 class="text-black">{{ $about->ceo_title }}</h4>
                            <p class="text-black">{{ $about->ceo_short_description }}</p>
                            @if (!empty($about->ceo_button_link))
                                <div class="pt-5">
                                    <a href="{{ $about->ceo_button_link }}"
                                        class="product_button">{{ $about->ceo_button_name }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif
    @if (!empty($about->video_link))
        <section class="container">
            <div class="software_feature_title pb-5">
                <h1 class="text-center ">{{ $about->video_section_title }}</h1>
            </div>
            <div class="row d-flex justify-content-start align-items-center">
                <div class="col-lg-6 col-sm-6">
                    {{-- <iframe width="645" height="363" id="id-about-player"
                        src="{{$about->video_link}}?autoplay=1&controls=0&mute=1&loop=1&playlist=29BQhSVPFpo"
                        frameborder="0" style="pointer-events: none">
                    </iframe> --}}
                    <iframe class="ytplayer-player" id="id-about-player" allowfullscreen="1" allow="autoplay"
                        title="YouTube video player"
                        src="{{$about->video_link}}?iv_load_policy=3&modestbranding=0&autoplay=1&controls=0&rel=0&showinfo=0&wmode=opaque&branding=0&autohide=0&loop=1&rel=0&enablejsapi=1&mute=1"
                        {{-- src="{{$about->video_link}}?iv_load_policy=3&modestbranding=0&autoplay=1&controls=0&rel=0&showinfo=0&wmode=opaque&branding=0&autohide=0&loop=1&rel=0&enablejsapi=1&origin=https%3A%2F%2Fhub.youth.gov.ae&widgetid=1&mute=1" --}}
                        width="650" height="365" frameborder="0" style="left: 0">
                    </iframe>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="home_title p-lg-4 p-0">
                        <h5 class="home_title_heading-about">
                            {{ $about->video_row_title }}
                        </h5>
                        <p class="home_title_text-about pt-4">
                            {{ $about->video_row_short_description }}</p>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (!empty($row3))
        <section>
            <div class="container py-5">
                <div class="row d-flex align-items-center gx-1">
                    <span class="d-flex justify-center p-0" style="border-bottom: 2px solid #ae0a46; font-size: 20px;">
                        <div style="background:#ae0a46;color:white;padding: 10px; display: flex; align-items: center;">
                            <span>{{ $row3->badge }}</span>
                        </div>
                    </span>
                    <div class="col-lg-10 mt-lg-5 mt-00">
                        <div class="text-start about_seo_text">
                            <h2 class="">{{ $row3->title }}</h2>
                            <p>{!! $row3->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center mt-lg-3 mt-0">
                        <div class="container">
                            <div class="row">
                                <h4 class="mb-3 mt-2"><span style="border-top: 3px solid #ae0a46;">All</span> Brochures
                                </h4>
                                @foreach ($pdfs as $pdf)
                                    <div class="col-lg-12 mb-2">
                                        <a href="{{ asset('storage/files/' . $pdf->document) }}" type="button"
                                            class="btn-white pdf_btn me-2">
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

@push('scripts')
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
@endpush
