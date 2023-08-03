@extends('frontend.master')
@section('content')
    <style>
        .main_color {
            color: #ae0a46;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url('{{ asset('storage/requestImg/' . $techglossy->image) }}');">
        <div class="container ">
            <h1 class="text-capitalize w-50 mx-auto">{{ $techglossy->badge }}</h1>
            <p class="text-center text-white">Tech Glossary</p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->

    <!--=======// Content //=======-->
    <section class="container section_padding">
        <div class="row mb-3">
            <div class="byTopics col-9">
                <p>By <a href="javascript:void(0);">{{ $techglossy->created_by }}</a> <span> /
                    </span><span>{{ date('d-m-Y', strtotime($techglossy->created_at)) }}</span>
                </p>
            </div>
            <div class="bySocial col-3">
                <ul class="social-icon-links pull-right" style="font-size: 1.5rem;">
                    {!! Share::page(url('/techglossy/' . $techglossy->id . '/details'))->facebook()->twitter()->whatsapp() !!}
                </ul>
            </div>
        </div>
        <div class="row content_wrapper">
            <!---------/// Content & blog ///-------->
            <div class="col-lg-12 col-sm-12 tech_glossary_area_left">

                <h5>{{ $techglossy->title }}</h5>
                @php
                    $tag = $techglossy->tags;
                    $tags = explode(',', $tag);
                @endphp
                @foreach ($tags as $item)
                    <p class="main_color">{{ ucwords($item) }}</p>
                @endforeach

                <p>{!! $techglossy->header !!}</p>



                {{-- <button class="common_button2">Learn more about aglle</button> --}}
            </div>
            <!---------/// Sidebar more ///------------>
        </div>
        <div class="row content_wrapper">
            <div class="col-lg-12 col-sm-12 tech_glossary_area_left">

                <blockquote
                    style="padding: 20px 30px 20px 25px; border-left: 5px solid #af0e2e;border-right: 5px solid #af0e2e; background-color: #f7f6f5;">
                    <p>{!! $techglossy->short_des !!}</p>
                </blockquote>
                <p>{!! $techglossy->long_des !!}</p>
            </div>
            {{-- <div class="area-text">
            <h3 class="callout">{!!$techglossy->footer!!}</h3>
        </div> --}}
        </div>
    </section>
    <!--------- End--------->

    <!--=======// Single blog related Postes //=======-->
    <section class="related_posts_wrapper">
        <div class="container">
            <div class="related_posts_title">
                <h1 class="text-center">Featured Techglossies By Ngen It</h1>
            </div>

            <div class="row">
                <!--------item------->
                @foreach ($storys as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="related-item">
                            <a href="{{ route('techglossy.details', $item->id) }}">
                                <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}" alt=""
                                    style=" width:250px; height:150px;">
                                <h4>{{ $item->badge }}</h6>
                                    <h3><strong>{{ Str::limit($item->title, 55) }}</strong></h3>
                            </a>

                        </div>
                    </div>
                @endforeach
                <!--------item------->

            </div>

        </div>
    </section>
    <!--------- End--------->
@endsection














