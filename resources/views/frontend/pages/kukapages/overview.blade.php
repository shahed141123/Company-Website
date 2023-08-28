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
        .img-fluid{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .row-title{
            color:#555;
            font-size: 32px;
        }

        /* Need Here End*/
    </style>
    @include('frontend.pages.kukapages.partial.page_header')
    <section>
        <div class="brand-page-content container">
            <div class="brand-page-content-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-3" style="color:#555;">{{ ucfirst($brand->title) }}</h3>
                        @if (!empty($row_one))
                            <h2 class="company-tab-title mb-2">
                                <span style="font-size: 20px;">{{ $row_one->title }}</span>
                            </h2>
                            <p class="mt-4">
                                {!! $row_one->description !!}
                            </p>
                        @endif
                    </div>
                </div>
                {{-- <div class="row mt-4">
                    <div class="col">
                        <div class="slick-slider">
                            <div class="element">
                                <iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen="" style="width: 100%; height: 100%;"></iframe>
                            </div>
                            <div class="element">
                                <iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen="" style="width: 100%; height: 100%;"></iframe>
                            </div>
                            <div class="element">
                                <iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen="" style="width: 100%; height: 100%;"></iframe>
                            </div>
                            <div class="element">
                                <iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen="" style="width: 100%; height: 100%;"></iframe>
                            </div>
                            <div class="element">
                                <iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen="" style="width: 100%; height: 100%;"></iframe>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @if (!empty($row_three))
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('storage/' . $row_three->image) }}" alt=""
                                style="height: 300px;width: 580px;border-radius: 7px 55px 7px 55px;">
                        </div>
                        <div class="col-lg-6 col-sm-12 ">
                            <h4 class="row-title">{{ $row_three->title }}</h4>
                            <p class="text-justify">{!! $row_three->description !!}</p>

                            @if (!empty($row_three->link))
                                <a href="{{ $row_three->link }}" class="common_button">{{ $row_three->btn_name }}</a>
                            @else
                            @endif

                        </div>

                    </div>
                @endif

                <div class="my-5">
                    <div class="container">
                        <!-- section title -->
                        <div class="col-lg-10 offset-1">
                            <h3 class="section_title mx-auto">{{ $brandpage->row_one_title }} </h3>
                            <p class="mx-auto" style="text-align: center;">{{ $brandpage->row_one_header }} </p>
                        </div>
                        <!-- wrapper -->
                        <div class="row pt-2">
                            <!-- item -->
                            @if ($card1)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title">{{ $card1->title }}</p>
                                        <p class="software_chose_item_text">{!! Str::limit($card1->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card2)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title">{{ $card2->title }}</p>
                                        <p class="software_chose_item_text">{!! Str::limit($card2->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                            <!-- item -->
                            @if ($card3)
                                <div class="col-lg-4 col-sm-12">
                                    <div class="software_chose_item">
                                        <p class="software_chose_item_title">{{ $card3->title }}</p>
                                        <p class="software_chose_item_text">{!! Str::limit($card3->short_des, 140) !!}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

            @if (!empty($brandpage->row_six_image))
                <div class="call_to_action my-5"
                    style="background-image: url('{{ asset('storage/' . $brandpage->row_six_image) }}');background-attachment: scroll;">
                    <div class="container">
                        <div class="call_to_action_text w-75 mx-auto">
                            <h4 class="">{{ $brandpage->row_six_title }}</h4>
                            <p>{{ $brandpage->row_six_header }}</p>
                            {{-- <div class="d-flex justify-content-center">
                        <a href="route" class="common_button3 text-center">Contact us to buy</a>
                    </div> --}}
                        </div>

                    </div>
                </div>
            @endif

            <div class="brand-page-content-inner">
                @if (!empty($row_four))
                    <section class="py-4 my-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <h4 class="row-title">{{ $row_four->title }}</h4>
                                    <p>{!! $row_four->description !!}</p>
                                    @if (!empty($row_four->link))
                                        <a href="{{ $row_four->link }}"
                                            class="common_button2">{{ $row_four->btn_name }}</a>
                                    @else
                                    @endif

                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <img class="img-fluid" src="{{ asset('storage/' . $row_four->image) }}" alt=""
                                        style="height: 300px;width: 580px;border-radius: 55px 7px 55px 7px;">
                                </div>
                            </div>
                        </div>
                    </section>
                @endif





                @if (!empty($row_five))
                    <section class="my-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <img class="img-fluid" src="{{ asset('storage/' . $row_five->image) }}"
                                        style="height: 300px;width: 580px;border-radius: 7px 55px 7px 55px;">
                                </div>
                                <div class="col-lg-6 col-sm-12 pl-4 section_text_wrapper">
                                    <h4 class="row-title">{{ $row_five->title }}</h4>
                                    <p>{!! $row_five->description !!}</p>
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


        // Image Slider Demo:
        // https://codepen.io/vone8/pen/gOajmOo
    </script>
@endsection
