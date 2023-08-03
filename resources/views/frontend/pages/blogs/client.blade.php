@extends('frontend.master')
@section('content')
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->

    <!--==============Single blog image==================-->
    <section class="container">
        <div class="assetType">
            <a href="#">Client story</a>
        </div>
        <div class="headline">
            <h1>{{ $story[0]->title }}</h1>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-12 text-center">
                    {{-- <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/blog_img.jpg')}}" alt=""> --}}
                    <img class="img-fluid"
                        src="{{ $story[0]->image ? asset('storage/Client/' . $story[0]->image) : asset('assets/frontend/image/Logo/logo.png') }}"
                        alt="">

                </div>
            </div>
            <div class="byTopics col-12">
                <span style="padding: 0px 10px; float: right;">{{ $story[0]->created_at }}</span>
                <div class="bySocial">
                    <ul class="social-icon-links" style="float: right;">
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="container">
        <div class="row content_wrapper">
            <div class="col-8 blog_text_area">
                {!! $story[0]->description !!}
            </div>
        </div>

    </section>

    <!-- top product section end -->

    @include('frontend.footer');
@endsection
