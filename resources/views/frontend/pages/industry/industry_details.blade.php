@extends('frontend.master')
@section('content')
    <style>
        .gradient_bg {
            background-image: linear-gradient(to right top, #cb3a6f, #dd2467, #9f0940, #98083d, #91083a, #c7024a, #9f023c, #970a3d, #98083d, #9f0940, #a70a43, #ae0a46);
        }
    </style>
    <style>
        .arrow-box-fuchsia {
            position: relative;
            background: #3e332d;
            text-align: center;
            min-height: 40px;
            padding: 5px;
            margin-top: 5px;
        }

        .arrow-box-fuchsia:after {

            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            border-top: solid 15px #3e332d;
            border-left: solid 30px transparent;
            border-right: solid 30px transparent;
            top: 100%;
            margin-left: -30px;
        }

        .arrow-box-pink {
            position: relative;
            background: #d40e8c;
            text-align: center;
            min-height: 40px;
            padding: 5px;
            margin-top: 30px;
        }

        .arrow-box-pink:after {

            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            border-top: solid 15px #d40e8c;
            border-left: solid 30px transparent;
            border-right: solid 30px transparent;
            top: 100%;
            margin-left: -30px;
        }

        .arrow-box-light-purple {
            position: relative;
            background: #b01c87;
            text-align: center;
            min-height: 40px;
            padding: 5px;
            margin-top: 30px;
        }

        .arrow-box-light-purple:after {

            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            border-top: solid 15px #b01c87;
            border-left: solid 30px transparent;
            border-right: solid 30px transparent;
            top: 100%;
            margin-left: -30px;
        }

        .arrow-box-purple {
            position: relative;
            background: #582873;
            text-align: center;
            min-height: 40px;
            padding: 5px;
            margin-top: 5px;
        }

        .arrow-box-purple:after {

            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-top: solid 15px #582873;
            border-left: solid 30px transparent;
            border-right: solid 30px transparent;
            top: 100%;
            margin-left: -30px;
        }

        .content-box {
            background: #fff;
            border: 2px solid #d4d0ca;
            margin-top: -2px;
            min-height: 180px;
            text-align: center;
            padding: 40px 10px 0px 10px;
        }

        .underline {
            display: inline;
            position: relative;
            overflow: hidden;
        }

        .underline:after {
            content: "";
            position: absolute;
            z-index: 1;
            right: 0;
            width: 0;
            bottom: -5px;
            background: #ae0a46;
            height: 3px;
            transition-property: width;
            transition-duration: 0.4s;
            transition-timing-function: ease-out;
        }

        .underline:hover:after,
        .underline:focus:after,
        .underline:active:after {
            left: 0;
            right: auto;
            width: 100%;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header" style="background-image: url({{ asset('storage/' . $industry->image) }}); height:23rem;">
        <div class="container">
            <div>
                {{-- <h1>{{ $industry->title }}</h1>
                <h2 class="mb-2">{{ $industry->industryPage->header }}</h2> --}}
            </div>
            <div class="d-flex justify-content-center">
                {{-- <a class="common_button2"
                    href="{{ $industry->industryPage->btn_one_link }}">{{ $industry->industryPage->btn_one_name }}</a> --}}
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

                <a href="{{ route('all.industry') }}">
                    <li class="breadcrumb__item ">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Industries We Serve</span>
                        </span>
                    </li>
                </a>
                <li class="breadcrumb_divider">
                    <span>></span>
                </li>

                <a href="#">
                    <li class="breadcrumb__item active">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">{{ $industry->title }}</span>
                        </span>
                    </li>
                </a>

            </ul>
        </div>
    </section>
    <!--======// Modern finance //======-->
    @if (!empty($industry->industryPage->rowOne))
        <section class="container section_padding">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="section_text_wrapper">
                        <h4>{{ $industry->industryPage->rowOne->title }}</h4>
                        <p style="text-align: justify;">{!! $industry->industryPage->rowOne->short_des !!}</p>

                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="industry_single_help_list">
                        <h5>{{ $industry->industryPage->rowOne->list_title }}</h5>
                        <ul>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $industry->industryPage->rowOne->list_one }}</a>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $industry->industryPage->rowOne->list_two }}</a>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $industry->industryPage->rowOne->list_three }}</a>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $industry->industryPage->rowOne->list_four }}</a>
                                </div>
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
                <h3 class="section_title">
                    Featured Solutions Related to This Industries
                </h3>

            </div>
            <!--Content Wrapper-->
            <div class="row d-flex justify-content-center pt-3">
                {{-- <div class="col-lg-3 col-md-6">
                    @if ($industry->industryPage && $industry->industryPage->solutionCardOne)
                        <a href="{{ route('solution.details', $industry->industryPage->solutionCardOne->slug) }}">
                            <div class="product_veiw_details_item_image">
                                <img src="{{ asset('storage/'.$industry->industryPage->solutionCardOne->image) }}"
                                    alt="" width="150px" height="150px">
                            </div>
                            <!-- content -->
                            <div class="product_veiw_details_item_content">
                                <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                                    {{ $industry->industryPage->solutionCardOne->name ?? 'N/A' }}</p>
                                <p class="text-center" style="font-size: 15px;">
                                    {{ $industry->industryPage->solutionCardOne->header ?? 'N/A' }}</p>
                            </div>
                        </a>
                    @else
                        <p>No Solution Card One Found</p>
                    @endif
                </div> --}}
                @php
                    $solutionCards = [$industry->industryPage->solutionCardOne, $industry->industryPage->solutionCardTwo, $industry->industryPage->solutionCardThree, $industry->industryPage->solutionCardFour];
                @endphp

                {{-- @foreach ($solutionCards as $card)
                    @if ($card)
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('solution.details', ['id' => $card->slug]) }}">
                                <div class="product_veiw_details_item_image">
                                    <img src="{{ asset('storage/' . $card->banner_image) }}" alt=""
                                        width="150px" height="150px">
                                </div>
                                <!-- content -->
                                <div class="product_veiw_details_item_content">
                                    <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                                        {{ $card->name }}</p>
                                    <p class="text-center" style="font-size: 15px;">
                                        {{ $card->header }}</p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach --}}
                @foreach ($solutionCards as $item)
                    <div class="col-md-3 col-sm-4 mb-3">
                        <div class="box shadow-lg rounded">
                            <img class="img-fluid" src="{{ asset('storage/' . $item->banner_image) }}"
                                style=" height: 270px;">
                            <div class="box-content">
                                <h3 class="text-white">{{ Str::limit($item->name, 25) }}</h3>
                                <span class="post">{!! Str::limit($item->header, 120) !!}</span>
                                <a href="{{ route('solution.details', $item->slug) }}" class="common_button2"
                                    style="border-radius: 5px; padding:10px 15px !important;">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======// Gradian Background //======-->

    <!----------End--------->
    <!--=======// Building resilient IT //=====-->
    @if (!empty($industry->industryPage->rowThree))
        <section class="py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h4 style="font-size:32px">{{ $industry->industryPage->rowThree->title }}</h4>
                        <p>{!! $industry->industryPage->rowThree->description !!}</p>
                        @if (!empty($industry->industryPage->rowThree->link))
                            <a href="{{ $industry->industryPage->rowThree->link }}"
                                class="common_button2">{{ $industry->industryPage->rowThree->btn_name }}</a>
                        @else
                        @endif

                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $industry->industryPage->rowThree->image) }}"
                            alt="" style="height: 300px;width: 580px;border-radius: 15px;">
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (!empty($industry->industryPage))
        <div class="insight-layout section">
            <div class="callout" style="">
                <div class="callout-inner">
                    <div class="row">
                        <div class="columns small-10 small-centered medium-12">
                            <div class="-column-1 parsys">
                                <div class="text content-base global-base section">

                                    <div class=" aria-text">
                                        <div class="medium-10 small-11 text-center" style="margin: 0 auto;">
                                            <h2 style="font-weight: 400; margin: 0 0 10.0px; padding-top: 0;"><span
                                                    class="beTopLine">{{ substr($industry->industryPage->row_four_title, 0, 2) }}</span>{{ substr($industry->industryPage->row_four_title, 2) }}
                                            </h2>
                                            <p>{{ $industry->industryPage->row_four_header }}</p>
                                        </div>

                                    </div>

                                </div>
                                <div class="insight-layout section">
                                    <div style="">
                                        <div class="columns small-10 small-centered">
                                            <div class="-column-1 parsys">
                                                <div class="insight-layout section">
                                                    <div class="row" style="">
                                                        <div
                                                            class="columns col-lg-6 small-11 small-centered medium-uncentered">
                                                            <div class="-column-1 parsys">
                                                                <div class="anything content-base global-base section">
                                                                    <div class="arrow-box-fuchsia">
                                                                        <h3 style="color: #fff;">
                                                                            {{ $industry->industryPage->row_four_col_one_title }}
                                                                        </h3>
                                                                    </div>
                                                                    <div class="clearfix content-box">
                                                                        <p>{{ $industry->industryPage->row_four_col_one_header }}
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div
                                                            class="columns col-lg-6 small-11 small-centered medium-uncentered">
                                                            <div class="-column-2 parsys">
                                                                <div class="anything content-base global-base section">
                                                                    <div class="arrow-box-fuchsia">
                                                                        <h3 style="color: #fff;">
                                                                            {{ $industry->industryPage->row_four_col_two_title }}
                                                                        </h3>
                                                                    </div>
                                                                    <div class="clearfix content-box">
                                                                        <p>{{ $industry->industryPage->row_four_col_two_header }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="anything content-base global-base section">

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    @endif

    @if (!empty($industry->industryPage->rowFive))
        <section class="py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $industry->industryPage->rowFive->image) }}"
                            alt="" style="height: 300px;width: 580px;border-radius: 15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h4 style="font-size:32px">{{ $industry->industryPage->rowFive->title }}</h4>
                        <p>{!! $industry->industryPage->rowFive->description !!}</p>
                        @if (!empty($industry->industryPage->rowFive->link))
                            <a href="{{ $industry->industryPage->rowFive->link }}"
                                class="common_button2">{{ $industry->industryPage->rowFive->btn_name }}</a>
                        @else
                        @endif

                    </div>

                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->
    <!--======// Solution feature //======-->

    <!----------End--------->
    @if (!empty($industry->industryPage->footer_title))
        <section class="gradient_bg" style="">
            <div class="container">
                <div class="call_to_action_text py-4">
                    <h4 class="section_title">{{ $industry->industryPage->footer_title }}</h4>
                    <p>{{ $industry->industryPage->footer_header }}</p>
                </div>
            </div>
        </section>
    @endif
    <!--======// Solution feature //======-->
    @if (!empty($techglossy))
        <section class="account_benefits_section_wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid rounded" src="{{ asset('storage/' . $techglossy->image) }}"
                            alt="{{ $techglossy->badge }}" style="height: 350px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 account_benefits_section">
                        <h5>{{ $techglossy->badge }}</h5>
                        <p>{{ $techglossy->title }}</p>
                        <a href="{{ route('techglossy.details', $techglossy->id) }}" class="common_button">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <br>
    <!-------------End--------->
    @if (count($solutions) > 0)
        <section class="related_posts_wrapper">
            <div class="container">
                <div class="py-3">
                    <h1 class="text-center"> Solutions Related to this Industry</h1>
                </div>

                <div class="row">
                    <!--------item------->
                    @if ($solutions)
                        @foreach ($solutions as $item)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="related-item">
                                    <a href="{{ route('solution.details', $item->id) }}">
                                        <img class="img-fluid" src="{{ asset('storage/' . $item->banner_image) }}"
                                            width="300px" alt="" style="height: 160px;">
                                        <h4>{{ App\Models\Admin\Industry::where('id', $item->industry_id)->value('title') }}
                                            </h6>
                                            <h3><strong>{{ $item->name }}</strong></h3>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>

            </div>
        </section>
    @endif
    <section>
        <div class="container">
            <div class="Container mt-5 px-0">
                <h3 class="Head" style="font-size:30px;">Products Related to this Industry<span class="Arrows"></span>
                </h3>
                <!-- Carousel Container -->
                <div class="SlickCarousel">
                    @if ($products)
                        @foreach ($products as $item)
                            <!-- Item -->
                            <div class="ProductBlock mb-3 mt-3">
                                <div class="Content">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="{{ route('product.details', $item->slug) }}"
                                                        class="image d-flex justify-content-center align-items-center">
                                                        <img class="pic-1" src="{{ asset($item->thumbnail) }}"
                                                            style="width: 180px;height: 180px;"
                                                            alt="{{ $item->name }}">
                                                        <img class="pic-2" src="{{ asset($item->thumbnail) }}"
                                                            style="height: 180px;" alt="{{ $item->name }}">
                                                    </a>

                                                    <ul class="product-links">
                                                        <li><a href="#" data-tip="Quick View"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#productDetails{{ $item->id }}"><i
                                                                    class="fa fa-eye text-white"></i></a>
                                                        </li>
                                                        <li><a href="#" data-tip="View Product"><i
                                                                    class="fa fa-random text-white"></i></a></li>
                                                    </ul>


                                                </div>
                                                <div class="product-content">
                                                    <h3 class="titles mb-2 ask_for_price website-color text-center"
                                                        style="height: 4.5rem;"><a
                                                            href="{{ route('product.details', $item->slug) }}">{{ Str::limit($item->name, 85) }}</a>
                                                    </h3>
                                                    @if ($item->rfq == 1)
                                                        <div class="price">
                                                            <p class="text-muted text-center">
                                                                <small>USD</small>
                                                                --.-- $
                                                            </p>
                                                            <a href=""
                                                                class="d-flex justify-content-center align-items-center"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#rfq{{ $item->id }}">
                                                                <button class="common_button effect01">
                                                                    Ask For Price
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @elseif ($item->price_status && $item->price_status == 'price')
                                                        <div class="price">
                                                            <p class="text-muted text-center"><small>USD</small>
                                                                {{ number_format($item->price, 2) }} $
                                                            </p>
                                                            <div class="d-flex justify-content-center align-items-center">

                                                                <div data-mdb-toggle="popover" title="Add To Cart Now"
                                                                    class="cart_button{{ $item->id }}"
                                                                    data-mdb-content="Add To Cart Now"
                                                                    data-mdb-trigger="hover">
                                                                    <button type="button"
                                                                        class="common_button effect01 add_to_cart"
                                                                        data-id="{{ $item->id }}"
                                                                        data-name="{{ $item->name }}"
                                                                        data-quantity="1">
                                                                        Add to Cart</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="price">
                                                            <p class="text-muted text-center"
                                                                style="text-decoration: line-through;text-decoration-thickness: 2px; text-decoration-color: #ae0a46;">
                                                                USD {{ number_format($item->price, 2) }} $
                                                            </p>
                                                            <div class="d-flex justify-content-center align-items-center">


                                                                <div data-mdb-toggle="popover" title="Your Price"
                                                                    data-mdb-content="Your Price"
                                                                    data-mdb-trigger="hover">
                                                                    <button class="common_button effect01"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#askProductPrice">
                                                                        Your Price
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- Carousel Container -->
                @include('frontend.pages.home.rfq_modal')
            </div>
        </div>
    </section>
    <!--======// Featured content //======-->
    @if (count($storys) > 0)
        <section class="related_posts_wrapper">
            <div class="container">
                <div class="related_posts_title">
                    <h1 class="text-center">Storys Related to this Industry</h1>
                </div>
                <div class="row">
                    <!--------item------->
                    @foreach ($storys as $item)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="related-item">
                                <a href="{{ route('blog.details', $item->id) }}">
                                    <img class="img-fluid" src="{{ asset('storage/requestImg/' . $item->image) }}"
                                        alt="" style="height:140px; ">
                                    <h4>{{ $item->badge }}</h6>
                                        <h3>
                                            <strong>{{ $item->title }}</strong>
                                        </h3>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->
@endsection
