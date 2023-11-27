@extends('frontend.master')
@section('content')
    <style>
        .account_benefits_section a {
            color: none !important;
        }

        .gradient_bg {
            background-image: linear-gradient(to right top, #cb3a6f, #dd2467, #9f0940, #98083d, #91083a, #c7024a, #9f023c, #970a3d, #98083d, #9f0940, #a70a43, #ae0a46);
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: url('{{ asset('storage/' . $solution->banner_image) }}');">
        <div class="container">
            <div class="">
                <h1>{{ $solution->name }}</h1>
                <h3>{{ $solution->header }}</h3>
            </div>

            <div class="d-flex justify-content-center">
                <a class="common_button2" href="#Contact">Hear from our team</a>
            </div>
        </div>

    </section>
    <!----------End--------->
    <section class="mt-5">
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

                <a href="{{ route('whatwedo') }}">
                    <li class="breadcrumb__item">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">What We Do</span>
                        </span>
                    </li>
                </a>
                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="{{ route('all.solution') }}">
                    <li class="breadcrumb__item ">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Solutions We Offer</span>
                        </span>
                    </li>
                </a>
                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="#">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">{{ $solution->name }}</span>
                        </span>
                    </li>
                </a>

            </ul>
        </div>
    </section>
    <!--======// Header Title //======-->
    @if (!empty($solution->rowOne))
        <section class="container section_padding">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="section_text_wrapper">
                        <h4>{{ $solution->rowOne->title }}</h4>
                        <p style="text-align: justify;">{!! $solution->rowOne->short_des !!}</p>

                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="industry_single_help_list">
                        <h5>{{ $solution->rowOne->list_title }}</h5>
                        <ul>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $solution->rowOne->list_one }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $solution->rowOne->list_two }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $solution->rowOne->list_three }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $solution->rowOne->list_four }}</a></div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <!----------End--------->

    <!--======// Solution feature //======-->
    <section class="section_wp">
        <div class="container">
            <!--title-->
            <div class="section_text_wrapper">
                <h3 class="section_title">{{ $solution->row_two_title }}</h3>
                <p class="text-center">{{ $solution->row_two_header }}</p>
            </div>
            <!--Content Wrapper-->
            @php
                $cards = [$solution->card1, $solution->card2, $solution->card3, $solution->card4, $solution->card5];
                $cardsections2 = [$solution->card6, $solution->card7, $solution->card8];
            @endphp
            {{-- <div class="row d-flex justify-content-center pt-3">
                <div class="col-lg-4 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $solution->card1->image) }}" alt="" width="150px" height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">{{ $solution->card1->title}}
                        </p>
                        <p class="text-center" style="font-size: 15px;">{{ $solution->card1->short_des}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $card2->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">{{ $card2->title }}
                        </p>
                        <p class="text-center" style="font-size: 15px;">{{ $card2->short_des }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $card3->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                            {{ $card3->title }}</p>
                        <p class="text-center" style="font-size: 15px;">{{ $card3->short_des }}</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center pt-3">
                <div class="col-lg-4 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $card4->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                            {{ $card4->title }}</p>
                        <p class="text-center" style="font-size: 15px;">{{ $card4->short_des }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $card5->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                            {{ $card5->title }} </p>
                        <p class="text-center" style="font-size: 15px;">{{$card5->short_des}}</p>
                    </div>
                </div>
            </div> --}}
            <div class="row d-flex justify-content-center pt-3">
                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="product_veiw_details_item_image">
                            <img src="{{ asset('storage/' . $card->image) }}" alt="" width="150px"
                                height="150px">
                        </div>
                        <!-- content -->
                        <div class="product_veiw_details_item_content">
                            <p class="text-center" style="font-size: 20px; margin: 4px 0px;">{{ $card->title }}
                            </p>
                            <p class="text-center" style="font-size: 15px;">{{ $card->short_des }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!----------End--------->

    <!--======// Gradian Background //======-->
    <section class="gradient_bg" style="">
        <div class="container">
            <div class="call_to_action_text py-4">
                <h4 class="section_title">{{ $solution->row_three_title }}</h4>
                <p>{{ $solution->row_three_header }}</p>
            </div>
        </div>

    </section>
    <!----------End--------->

    <!--=======// Building resilient IT //=====-->
    @if (!empty($solution->rowFour))
        <section class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 account_benefits_section">
                        <h3>{{ $solution->rowFour->title }}</h3>
                        <p class="text-justify">{!! $solution->rowFour->description !!} </p>

                        @if (!empty($solution->rowFour->btn_name))
                            <a href="{{ $solution->rowFour->link }}"
                                class="common_button effect01 mt-4">{{ $solution->rowFour->btn_name }}</a>
                        @endif
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid rounded" src="{{ asset('storage/' . $solution->rowFour->image) }}"
                            alt="" width="540px" height="338px">
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--======// Solution feature //======-->
    <section class="section_wp">
        <div class="container">
            <!--title-->
            <div class="section_text_wrapper">
                <h3 class="section_title">{{ $solution->row_five_title }}</h3>
                <p class="text-center">{{ $solution->row_five_header }}</p>
            </div>
            <!--Content Wrapper-->
            {{-- <div class="row mt-4">
                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $card6->image) }}" alt="" width="150px" height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{ $card6->title }}</p>
                        <p style="font-size: 15px; margin: 4px 0px;">{!! $card6->short_des !!}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $card7->image) }}" alt="" width="150px" height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{ $card7->title }}</p>
                        <p>{{ Str::limit($card7->short_des, 30) }}</p>
                        <p style="font-size: 15px; margin: 4px 0px;">{!! $card7->short_des !!}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/' . $card8->image) }}" alt="" width="150px" height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{ $card8->title }}</p>
                        <p>{{ Str::limit($card8->short_des, 30) }}</p>
                        <p style="font-size: 15px; margin: 4px 0px;">{!! $card8->short_des !!}</p>
                    </div>
                </div>
            </div> --}}

            <div class="row mt-4">
                <!-- item -->
                @foreach ($cardsections2 as $cardsection2)
                    <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                        <!-- image -->
                        <div class="product_veiw_details_item_image">
                            <img src="{{ asset('storage/' . $cardsection2->image) }}" alt="" width="150px"
                                height="150px">
                        </div>
                        <!-- content -->
                        <div class="product_veiw_details_item_content">
                            <p style="font-size: 20px; margin: 4px 0px;">{{ $cardsection2->title }}</p>
                            <p style="font-size: 15px; margin: 4px 0px;">{!! $cardsection2->short_des !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!----------End--------->

    {{-- <!--======// Solution feature //======-->
    <section class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid p-4" src="{{ asset('frontend/images/hardware/solution2.jpg') }}"
                        alt="">
                </div>
                <div class="col-lg-6 col-sm-12 pl-4 section_text_wrapper">
                    <h4>{{ $solution->row_five_title }}</h4>
                    <p>{{ $solution->row_five_header }}</p>

                    <a href="{{ route('shop') }}" class="common_button">Shop now</a>
                </div>
            </div>
        </div>
    </section>
    <!-------------End---------> --}}

    <!--======// Featured content //======-->
    @if (count($solutions) > 0)
        <section class="related_posts_wrapper">
            <div class="container">
                <div class="py-3">
                    <h1 class="text-center">More Solutions You May Check</h1>
                </div>
                <div class="row">
                    <div class="SlickCarousel">
                        <!--------item------->
                        @foreach ($solutions as $item)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="related-item">
                                    <a href="{{ route('solution.details', $item->slug) }}">
                                        <img class="img-fluid" src="{{ asset('storage/' . $item->banner_image) }}"
                                            width="300px" alt="" style="height: 160px;">
                                        <h4>{{ App\Models\Admin\Industry::where('id', $item->industry_id)->value('title') }}
                                        </h4>
                                        <h3><strong>{{ $item->name }}</strong></h3>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->

@endsection
