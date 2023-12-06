@extends('frontend.master')
@section('content')
@section('styles')
    <meta property="og:title" content="NGen IT Ltd.">
    <!--<meta property="og:description" content="Description of your blog post">-->
    <meta property="og:image" content="{{ asset('storage/' . $home->branner1) }}">
    <!--<meta property="og:url" content="URL to your blog post">-->
@endsection
<!--======// Banner Section //======-->
@if (!empty($home->branner1) && !empty($home->branner2) && !empty($home->branner3))
    <section>
        <div class="Advance-Slider">
            <!-- Item -->
            @if (!empty($home->branner1))
                <div class="item">
                    <div class="img-fill">
                        <img class="dots-img"
                            src="{{ isset($home->branner1) && file_exists(public_path('storage/' . $home->branner1)) ? asset('storage/' . $home->branner1) : asset('frontend/images/banner-demo.png') }}"
                            alt="">
                        <div class="contain-wrapper">
                            <div class="dots-contain">
                                <img class="dots-img"
                                    src="{{ isset($home->branner1) && file_exists(public_path('storage/' . $home->branner1)) ? asset('storage/' . $home->branner1) : asset('frontend/images/banner-demo.png') }}"
                                    alt="">
                            </div>
                            <div class="info w-50 mb-3">
                                @if ($home->banner1_title)
                                    <div>
                                        <h3><strong>{{ $home->banner1_title }}</strong></h3>
                                        <h5 class="text-white my-4 w-75 mx-auto">
                                            {{ $home->banner1_short_description }}
                                        </h5>
                                    </div>
                                @endif
                                @if ($home->banner1_button_link)
                                    <div class="my-4">
                                        <a class="common_button2"
                                            href="{{ $home->banner1_button_link }}">{{ $home->banner1_button_name }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- // Item -->

            <!-- Item -->
            @if (!empty($home->branner2))
                <div class="item">
                    <div class="img-fill">
                        <img src="{{ isset($home->branner2) && file_exists(public_path('storage/' . $home->branner2)) ? asset('storage/' . $home->branner2) : asset('frontend/images/banner-demo.png') }} "
                            alt="">
                        <div class="contain-wrapper">
                            <div class="dots-contain">
                                <img class="dots-img"
                                    src="{{ isset($home->branner2) && file_exists(public_path('storage/' . $home->branner2)) ? asset('storage/' . $home->branner1) : asset('frontend/images/banner-demo.png') }}"
                                    alt="">
                            </div>
                            <div class="info w-50 mb-3">
                                @if ($home->banner2_title)
                                    <div>
                                        <h3><strong>{{ $home->banner2_title }}</strong></h3>
                                        <h5 class="text-white my-4 w-75 mx-auto">
                                            {{ $home->banner2_short_description }}
                                        </h5>
                                    </div>
                                @endif
                                @if ($home->banner2_button_link)
                                    <div class="my-4">
                                        <a class="common_button2"
                                            href="{{ $home->banner2_button_link }}">{{ $home->banner2_button_name }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- // Item -->

            <!-- Item -->
            @if (!empty($home->branner3))
                <div class="item">
                    <div class="img-fill">
                        <img src="{{ isset($home->branner3) && file_exists(public_path('storage/' . $home->branner3)) ? asset('storage/' . $home->branner3) : asset('frontend/images/banner-demo.png') }} "
                            alt="">
                        <div class="contain-wrapper">
                            <div class="dots-contain">
                                <img class="dots-img"
                                    src="{{ isset($home->branner3) && file_exists(public_path('storage/' . $home->branner3)) ? asset('storage/' . $home->branner1) : asset('frontend/images/banner-demo.png') }}"
                                    alt="">
                            </div>
                            <div class="info w-lg-50 mb-3">
                                @if ($home->banner3_title)
                                    <div>
                                        <h3><strong>{{ $home->banner3_title }}</strong></h3>
                                        <h5 class="text-white my-4 w-lg-75 mx-auto">
                                            {{ $home->banner3_short_description }}
                                        </h5>
                                    </div>
                                @endif
                                @if ($home->banner3_button_link)
                                    <div class="my-4">
                                        <a class="common_button2"
                                            href="{{ $home->banner3_button_link }}">{{ $home->banner3_button_name }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- // Item -->

        </div>
    </section>
@endif
{{-- Banner Bottom Card --}}
@if (!empty($home->btn1_title) && !empty($home->btn2_title))
    <section>
        <div class="container px-4">
            <div class="row gx-5 mx-auto banner_bottom_box">
                <div class="col px-2">
                    @if (!empty($home->btn1_title))
                        <div class="border bg-light custom_shadow px-lg-3 px-sm-1 home_banner_card">
                            <h2 class="text-center home_banner_card_title">{{ $home->btn1_title }}</h2>
                            <div class="home_card_button">
                                <a class="effect01" href="{{ $home->btn1_link }}">{{ $home->btn1_name }}</a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col px-2">
                    <div class="border bg-light custom_shadow px-lg-3 px-sm-1 home_banner_card">
                        <h2 class="text-center home_banner_card_title">{{ $home->btn2_title }}</h2>
                        <div class="home_card_button">
                            <a class="effect01" href="{{ $home->btn2_link }}">{{ $home->btn2_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!---------End -------->

<!--======// Business section //======-->
@if (!empty($feature1) && !empty($feature2) && !empty($feature3) && !empty($feature4) && !empty($feature5))
    <section class="container">
        <!-- home title -->
        <div class="row">
            @if ($home)
                <div class="home_banner_bottom_title w-75 mx-auto py-3 ">
                    <h6 class="home_title_heading home_banner_bt-title pb-2"> {{ $home->header1 }}
                    </h6>
                    <p class="home_title_text">{{ $home->header2 }}</p>
                </div>
            @endif
        </div>
        <!-- business content -->


        <div class="row d-flex justify-content-center">
            @if (!empty($feature1))
                <div class="custom_col-2 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('storage/requestImg/' . $feature1->logo) }}" alt="" height="80px"
                            width="85px">
                        <h5 class="business_services">{{ Str::limit($feature1->badge, 30) }}</h5>
                    </div>
                    <div class="feature_description">
                        <p class="feature_descrip">{{ Str::limit($feature1->header, 80) }}</p>
                    </div>
                    <a href="{{ route('feature.details', $feature1->id) }}" class="business_item_button">
                        <span>Learn More</span>
                        <span class="business_item_button_icon">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                    </a>
                </div>
            @endif


            @if (!empty($feature2))
                <div class="custom_col-2 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('storage/requestImg/' . $feature2->logo) }}" alt="" height="80px"
                            width="85px">
                        <h5>{{ Str::limit($feature2->badge, 30) }}</h5>
                    </div>
                    <div class="feature_description">
                        <p class="feature_descrip">{{ Str::limit($feature2->header, 80) }}</p>
                    </div>
                    <a href="{{ route('feature.details', $feature2->id) }}" class="business_item_button">
                        <span>Learn More</span>
                        <span class="business_item_button_icon">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                    </a>
                </div>
            @endif


            @if (!empty($feature3))
                <div class="custom_col-2 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('storage/requestImg/' . $feature3->logo) }}" alt=""
                            height="80px" width="85px">
                        <h5>{{ Str::limit($feature3->badge, 30) }}</h5>
                    </div>
                    <div class="feature_description">
                        <p class="feature_descrip">{{ Str::limit($feature3->header, 80) }}</p>
                    </div>
                    <a href="{{ route('feature.details', $feature3->id) }}" class="business_item_button">
                        <span>Learn More</span>
                        <span class="business_item_button_icon">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                    </a>
                </div>
            @endif


            @if (!empty($feature4))
                <div class="custom_col-2 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('storage/requestImg/' . $feature4->logo) }}" alt=""
                            height="80px" width="85px">
                        <h5>{{ Str::limit($feature4->badge, 30) }}</h5>
                    </div>
                    <div class="feature_description">
                        <p class="feature_descrip">{{ Str::limit($feature4->header, 80) }}</p>
                    </div>
                    <a href="{{ route('feature.details', $feature4->id) }}" class="business_item_button">
                        <span>Learn More</span>
                        <span class="business_item_button_icon">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                    </a>
                </div>
            @endif


            @if (!empty($feature5))
                <div class="custom_col-2 col-md-6 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('storage/requestImg/' . $feature5->logo) }}" alt=""
                            height="80px" width="85px">
                        <h5>{{ Str::limit($feature5->badge, 30) }}</h5>
                    </div>
                    <div class="feature_description">
                        <p class="feature_descrip">{{ Str::limit($feature5->header, 80) }}</p>
                    </div>
                    <a href="{{ route('feature.details', $feature5->id) }}" class="business_item_button">
                        <span>Learn More</span>
                        <span class="business_item_button_icon">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                    </a>
                </div>
            @endif
        </div>
        <!-- button -->
        <div class="business_seftion_button mb-5">
            <a class="effect01" href="{{ route('learn.more') }}">Learn More</a>
        </div>
    </section>
@endif
<!---------End -------->
<!--======// Magazine Section //======-->
<section>
    <div class="container">
        @if (!empty($techglossy))
            <div class="row bg-white mt-5 mb-5 magazine_content">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="holder-main-text ps-5">
                                {{-- <h6>{{ $techglossy->badge }}</h6> --}}
                                <h6 class="title-tag text-capitalize">{{ $techglossy->badge }}</h6>
                                <h2>
                                    {{ $techglossy->title }}
                                </h2>
                                <p class="pt-0 mt-0 w-lg-75 w-sm-100" style="text-align: justify">
                                    {!! Str::words(strip_tags($techglossy->short_des), 35) !!}
                                    {{-- {{ $techglossy->header }} --}}
                                </p>
                                <a href="{{ route('techglossy.details', $techglossy->id) }}"
                                    class="common_button2 text-white">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 d-lg-block d-sm-none">
                            <div class="showcase-industry-bottom" style="position: relative; overflow: hidden;">
                                <!-- Add a pseudo-element for the overlay -->
                                <div class="gradient-overlay"></div>
                                <img class="img-fluid overlays-img"
                                    src="{{ isset($techglossy->image) && file_exists(public_path('storage/' . $techglossy->image)) ? asset('storage/' . $techglossy->image) : asset('frontend/images/banner-demo.png') }}"
                                    alt="Picture" style="border-top-right-radius: 60px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<!----------End--------->
<!--=======// Shop product //======-->
<section class="pt-5 learn_more">
    <div class="container py-4">
        <div class="row">
            <!-- content -->
            <div class="col-lg-8 col-sm-12">
                <div class="home_shop_product_wrapper home_shop_product">
                    <h5> Shop Products and Hardware</h5>
                    <p class="text-justify w-75 w-sm-100">
                        Among More than
                        <strong style="font-family: 'Poppins', sans-serif; font-size:20px;">
                            {{ $productCount }}
                            <small>products</small>
                        </strong>
                        and
                        <strong style="font-family: 'Poppins', sans-serif;font-size:18px;">
                            {{ $brandCount }}
                            <small>brands</small>
                        </strong>
                        at your service, we can provide you with the tools
                        you need to succeed. Additionally, you may easily ask your exact requirements or contact us at
                        anytime.
                    </p>
                    <div class="mt-5 home_shop_button">
                        <a href="{{ route('shop.html') }}" class="common_button effect01">Explore Shop</a>
                    </div>
                </div>
            </div>
            <!-- product brand -->
            <div class="col-lg-4 col-sm-12 product_brand">
                <div>

                    <div class="">
                        <a href="{{ route('all.category') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Product Categories ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=" pt-2">
                        <a href="{{ route('all.brand') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Brands ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=" pt-2">
                        <a href="{{ route('software.common') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Software ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=" pt-2">
                        <a href="{{ route('hardware.common') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Hardware ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!---------End -------->
<!--=======// Client Story //======-->
@if (!empty($story1) | !empty($story2) | !empty($story3) | !empty($story4))
    <section>
        <div class="container my-4 mb-5">
            <h2 class="text-center">Our <span class="main_color">Client</span> Story</h2>
            <div class="row">
                @if (!empty($story1))
                    <div class="col-lg-3">
                        <div class="client_story_box">
                            <div class="details-color-1 details-titles pt-4 ps-4 pb-3">
                                <p class="pb-5">{{ $story1->badge }}</p>
                            </div>
                            <div class="grid-river">
                                <figure class="effect-oscar">
                                    {{-- <img src="{{ asset('storage/' . $cardsection2->image) }}" alt="img09" /> --}}
                                    <img src="{{ isset($story1->image) && file_exists(public_path('storage/' . $story1->image)) ? asset('storage/' . $story1->image) : asset('frontend/images/banner-demo.png') }} "
                                        alt="">
                                    <figcaption>
                                        <h6> {{ Str::words($story1->title, 10) }}</h6>
                                        <p>{{ Str::words($story1->header, 10) }}</p>
                                        <h5 class="download-hover-btn">
                                            <a class="text-white"
                                                href="{{ route('story.details', $story1->id) }}">Read Story <i
                                                    class="fa-solid fa-chevron-right"
                                                    style="font-size: 12px;"></i></a>
                                        </h5>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($story2))
                    <div class="col-lg-3">
                        <div class="client_story_box">
                            <div class="details-color-1 details-titles pt-4 ps-4 pb-3">
                                <p class="pb-5">{{ $story2->badge }}</p>
                            </div>
                            <div class="grid-river">
                                <figure class="effect-oscar">
                                    {{-- <img src="{{ asset('storage/' . $cardsection2->image) }}" alt="img09" /> --}}
                                    <img src="{{ isset($story2->image) && file_exists(public_path('storage/' . $story2->image)) ? asset('storage/' . $story2->image) : asset('frontend/images/banner-demo.png') }} "
                                        alt="">
                                    <figcaption>
                                        <h6> {{ Str::words($story2->title, 10) }}</h6>
                                        <p>{{ Str::words($story2->header, 10) }}</p>
                                        <h5 class="download-hover-btn">
                                            <a class="text-white"
                                                href="{{ route('story.details', $story2->id) }}">Read Story <i
                                                    class="fa-solid fa-chevron-right"
                                                    style="font-size: 12px;"></i></a>
                                        </h5>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($story3))
                    <div class="col-lg-3">
                        <div class="client_story_box">
                            <div class="details-color-1 details-titles pt-4 ps-4 pb-3">
                                <p class="pb-5">{{ $story3->badge }}</p>
                            </div>
                            <div class="grid-river">
                                <figure class="effect-oscar">
                                    {{-- <img src="{{ asset('storage/' . $cardsection2->image) }}" alt="img09" /> --}}
                                    <img src="{{ isset($story3->image) && file_exists(public_path('storage/' . $story3->image)) ? asset('storage/' . $story3->image) : asset('frontend/images/banner-demo.png') }} "
                                        alt="">
                                    <figcaption>
                                        <h6> {{ Str::words($story3->title, 10) }}</h6>
                                        <p>{{ Str::words($story3->header, 10) }}</p>
                                        <h5 class="download-hover-btn"></i></a>
                                            <a class="text-white"
                                                href="{{ route('story.details', $story3->id) }}">Read Story <i
                                                    class="fa-solid fa-chevron-right"
                                                    style="font-size: 12px;"></i></a>
                                        </h5>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($story4))
                    <div class="col-lg-3">
                        <div class="client_story_box">
                            <div class="details-color-1 details-titles pt-4 ps-4 pb-3">
                                <p class="pb-5">{{ $story4->badge }}</p>
                            </div>
                            <div class="grid-river">
                                <figure class="effect-oscar">
                                    {{-- <img src="{{ asset('storage/' . $cardsection2->image) }}" alt="img09" /> --}}
                                    <img src="{{ isset($story4->image) && file_exists(public_path('storage/' . $story4->image)) ? asset('storage/' . $story4->image) : asset('frontend/images/banner-demo.png') }} "
                                        alt="">
                                    <figcaption>
                                        <h6> {{ Str::words($story4->title, 10) }}</h6>
                                        <p>{{ Str::words($story4->header, 10) }}</p>
                                        <h5 class="download-hover-btn">
                                            <a class="text-white"
                                                href="{{ route('story.details', $story4->id) }}">Read Story <i
                                                    class="fa-solid fa-chevron-right"
                                                    style="font-size: 12px;"></i></a>
                                        </h5>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
<!--=======// Popular products //======-->
<section>
    <div class="container p-0">
        <div class="Container mt-5 px-0">
            <h3 class="Head" style="font-size:30px;">Random Products <span class="Arrows"></span></h3>
            <!-- Carousel Container -->
            <div class="SlickCarousel">
                @if ($products)
                    @foreach ($products as $item)
                        <!-- Item -->
                        <div class="ProductBlock mb-3 mt-3">
                            <div class="Content">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="custom-product-grid">
                                            <div class="custom-product-image">
                                                <a href="{{ route('product.details', $item->slug) }}" class="image">
                                                    <img class="pic-1" src="{{ asset($item->thumbnail) }}">
                                                </a>
                                                <ul class="custom-product-links">
                                                    <li><a href="#"><i class="fa fa-random text-white"></i></a>
                                                    </li>
                                                    <li><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#productDetails{{ $item->id }}"><i
                                                                class="fa fa-search text-white"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="custom-product-content">
                                                <a href="{{ route('product.details', $item->slug) }}">
                                                    <h3 class="custom-title"> {{ Str::words($item->name, 10) }}</h3>
                                                </a>

                                                @if ($item->rfq == 1)
                                                    <div>
                                                        <div class="price py-3">
                                                            {{-- <small class="price-usd">USD</small>
                                                            --.-- $ --}}
                                                        </div>
                                                        <a href=""
                                                            class="d-flex justify-content-center align-items-center"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#rfq{{ $item->id }}">
                                                            <button class="common_button effect01">
                                                                Ask For Price
                                                            </button>
                                                        </a>
                                                    </div>
                                                @elseif ($item->price_status && $item->price_status == 'rfq')
                                                    <div>
                                                        <div class="price py-3">
                                                            {{-- <small class="price-usd">USD</small>
                                                        --.-- $ --}}
                                                        </div>
                                                        <a href=""
                                                            class="d-flex justify-content-center align-items-center"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#rfq{{ $item->id }}">
                                                            <button class="common_button effect01">
                                                                Ask For Price
                                                            </button>
                                                        </a>
                                                    </div>
                                                @elseif ($item->price_status && $item->price_status == 'offer_price')
                                                    <div>
                                                        <div class="price py-3">
                                                            <small class="price-usd">USD</small>
                                                            $ {{ number_format($item->price, 2) }}
                                                        </div>
                                                        <a href=""
                                                            class="d-flex justify-content-center align-items-center"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#rfq{{ $item->id }}">
                                                            <button class="common_button effect01"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#askProductPrice">
                                                                Your Price
                                                            </button>
                                                        </a>
                                                    </div>
                                                @else
                                                    <div>
                                                        <div class="price py-3">
                                                            <small class="price-usd">USD</small>
                                                            $ {{ number_format($item->price, 2) }}
                                                        </div>
                                                        <a href="" data-mdb-toggle="popover"
                                                            title="Add To Cart Now"
                                                            class="cart_button{{ $item->id }}"
                                                            data-mdb-content="Add To Cart Now"
                                                            data-mdb-trigger="hover">
                                                            <button type="button"
                                                                class="common_button effect01 add_to_cart"
                                                                data-id="{{ $item->id }}"
                                                                data-name="{{ $item->name }}" data-quantity="1">
                                                                Add to Cart
                                                            </button>
                                                        </a>
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
<!---------End -------->
<!---------Our Success Section-------->
<section>
    <div class="container my-4 mb-5">
        <h2 class="text-center pb-4">Our Success <span class="main_color">Starts With</span> Our Culture.</h2>
        <div class="row success-area">
            @if (!empty($success1->title))
                <div class="col-lg-4">
                    <!---------Column  Content -------->
                    <div class="success-area-content success-area-content-first">
                        <div class="success-divider-one"></div>
                        <h4 class="success-divider-title-one pb-2">{{ $success1->title }}</h4>
                        <p>{{ $success1->description }}</p>
                    </div>
                </div>
            @endif
            @if (!empty($success2->title))
                <div class="col-lg-4">
                    <!---------Column  Content -------->
                    <div class="success-area-content">
                        <div class="success-divider-two"></div>
                        <h4 class="success-divider-title-two pb-2">{{ $success2->title }}</h4>
                        <p>{{ $success2->description }}</p>
                    </div>
                </div>
            @endif
            @if (!empty($success3->title))
                <div class="col-lg-4">
                    <!---------Column  Content -------->
                    <div class="success-area-content">
                        <div class="success-divider-three"></div>
                        <h4 class="success-divider-title-three pb-2">{{ $success3->title }} </h4>
                        <p>{{ $success3->description }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<!---------End -------->
@endsection
