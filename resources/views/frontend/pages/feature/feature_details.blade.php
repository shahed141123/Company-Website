@extends('frontend.master')
@section('content')
    <style>
        .outcome_smail_bussiness_title h2{
                    font-family: "klinic-slab", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif ;
                }
        .global_call_section::after
        {
            background: url('{{asset('storage/'.$learnmore->background_image)}}');
            content: "";
            position: absolute;
            height: 230px;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            width: 100%;
            background-color: #cbc4c3;
            top: 25%;
            left: 0px;
            z-index: -1;
        }
        .global_call_section_content {
            max-width: 575px;
            background-color: var(--heading);
            padding: 50px;
            margin-left: -15px;
            margin-top: 2.4rem;
        }
        .app-contact {
            margin-top: auto;
            font-size: 8px;
            color: #888;
            position: absolute;
            bottom: 40px;
        }
        .service_common_content h3 {
            font-size: 29px;
            opacity: 0.9;
            font-family: "Klinic Slab";
            font-weight: 500;
            font-style: normal;
            color: #222;
            margin: 30px 0px;
        }

    </style>

    <!--======// Guidance and support {1} //======-->
    <section class="mt-3">
        <div class="container my-3">
            <ul class="breadcrumb text-left">

                <a href="{{ route('homepage') }}">
                    <li class="breadcrumb__item breadcrumb__item-firstChild">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Home</span>
                        </span>
                    </li>
                </a>
                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="#">
                    <li class="breadcrumb__item">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Feature Contents</span>
                        </span>
                    </li>
                </a>

                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="#">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">{{ $feature->badge }}</span>
                        </span>
                    </li>
                </a>

            </ul>
        </div>
    </section>

    <section class="section_wp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 service_common_content">
                    <span class="radius_text_button">{{ $feature->badge }}</span>
                    <h3>{{ $feature->title }}</h3>
                    <p>{!! $feature->header !!}</p>
                    <a href="#Contact" class="common_button2">Hear from our team</a>
                </div>
                <div class="col-lg-6 col-sm-12 p-4">
                    <img class="img-fluid" src="{{ asset('storage/' . $feature->image) }}"
                        alt="{{ $feature->badge }}" style="border-radius: 8px;">
                </div>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--======// Modern finance //======-->
    @if ($row_one)
        <section class="container section_padding">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="section_text_wrapper">
                        <h4>{{ $row_one->title }}</h4>
                        <p style="text-align: justify;">{!! $row_one->short_des !!}</p>

                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="industry_single_help_list">
                        <h5>{{$row_one->list_title}}</h5>
                        <ul>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_one }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_two }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_three }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_four }}</a></div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </section>
    @endif

    <!----------End--------->

    <!--=====// Global call section //=====-->
    <section class="global_call_section section_padding mt-2 mb-3">
        <div class="container">
          <!-- content -->
          @php
            $sentence = $feature->row_four_title;
          @endphp
          <div class="global_call_section_content">
            <div class="home_title" style="width: 100%; margin: 0px;">
              <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                <span>{{\Illuminate\Support\Str::substr($sentence, 0, 1)}}</span>{{ \Illuminate\Support\Str::substr($sentence, 1) }}

              </h5>
              <p class="home_title_text text-white" style="text-align: left;">{{$feature->row_four_header}}</p>
              <div class="business_seftion_button" style="text-align: left;">
                <a href="#Contact">Explore Our Business</a>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!---------End -------->

    <!--======// Consulting services {2} //======-->
    @if ($row_two)
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $row_two->image) }}" alt=""
                            style="height:300px; width:530px; border-radius:15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 pr-4 service_common_content">
                        <h4>{{ $row_two->badge }}</h4>
                        <h5>{{ $row_two->title }}</h5>
                        <p>{!! $row_two->description !!}</p>

                        @if (!empty($row_two->btn_name))
                            <a href="{{ $row_two->link }}" class="common_button mt-4">{{ $row_two->btn_name }}</a>
                        @endif

                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-------------End--------->
    <!--======// Call to action //======-->
    <div class="call_to_action my-5"
        style="background-image: linear-gradient(to right top, #ae0a46, #bf0248, #9a083e, #ad0441, #b31a52, #870736, #b70647, #b30243, #db0050, #b91c56, #a40942, #ae0a46)">
        <div class="container">
            <div class="call_to_action_text mx-auto">
                <h4 class="">{{ $feature->row_three_title }}</h4>
                <p>{{ $feature->row_three_header }}</p>
                <div class="d-flex justify-content-center">
                    <a href="{{route('contact')}}" class="common_button3 text-center">Contact us to buy</a>
                </div>
            </div>

        </div>
    </div>
    <!-------------End--------->

    <!--======// Business section //======-->
    <section class="section_wp2">
        <div class="container">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading mb-4 pb-4 callout" style="font-size: 27px;"> {!! $feature->footer !!}</h5>
                <h4 class="section_title py-3 mt-4"><span class="topLine">{{\Illuminate\Support\Str::substr($feature->row_five_title, 0, 1)}}</span>{{ \Illuminate\Support\Str::substr($feature->row_five_title, 1) }}</h4>
                <h5 class="py-3">{!! $feature->row_five_header !!}</h5>
            </div>

            <!-- business content -->
            <div class="business_content_wrapper">
                <!-- business item wrapper -->
                <div class="row solution_business_item">
                    <!-- item -->
                    @if ($features)
                        @foreach ($features as $item)
                            <div class="col-lg-3 col-sm-6">
                                <!-- image -->
                                <div class="business_item_icon">
                                    <img src="{{ asset('storage/' . $item->logo) }}" alt="">
                                </div>

                                <!-- content -->
                                <div class="business_item_content">
                                    <p class="business_item_title">{{ $item->badge }}</p>
                                    <p class="business_item_text text-center">{{ Str::limit($item->header, 55) }}</p>
                                    <a href="{{ route('feature.details', $item->id) }}" class="business_item_button">
                                        <span>Learn More</span>
                                        <span class="business_item_button_icon">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
    </section>
    <!---------End -------->


    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection


