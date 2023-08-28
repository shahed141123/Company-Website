@extends('frontend.master')
@section('content')

    <!--======// Banner Section //======-->
    @if (!empty($home->branner1) && !empty($home->branner2) && !empty($home->branner3))
        <section>
            <div class="Advance-Slider">
                <!-- Item -->
                @if (!empty($home->branner1))
                    <div class="item">
                        <div class="img-fill">
                            <img src="{{ asset('storage/' . $home->branner1) }}" alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img" src="{{ asset('storage/' . $home->branner1) }}" alt="">
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
                            <img src="{{ asset('storage/' . $home->branner2) }} " alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img" src="{{ asset('storage/' . $home->branner2) }}" alt="">
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
                            <img src="{{ asset('storage/' . $home->branner3) }} " alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img" src="{{ asset('storage/' . $home->branner3) }}" alt="">
                                </div>
                                <div class="info w-50 mb-3">
                                    @if ($home->banner3_title)
                                        <div>
                                            <h3><strong>{{ $home->banner3_title }}</strong></h3>
                                            <h5 class="text-white my-4 w-75 mx-auto">
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
    @if (!empty($home))
        <section>
            <div class="container px-4">
                <div class="row gx-5 mx-auto banner_bottom_box">
                    <div class="col px-2">
                        @if (!empty($home->btn1_title))
                            <div class="border bg-light custom_shadow px-3 home_banner_card">
                                <h2 class="text-center home_banner_card_title">{{ $home->btn1_title }}</h2>
                                <div class="home_card_button">
                                    <a class="effect01" href="{{ $home->btn1_link }}">{{ $home->btn1_name }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col px-2">
                        <div class="border bg-light custom_shadow px-3 home_banner_card">
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
        <section class="container pt-4">
            <!-- home title -->
            <div class="row my-3">
                @if ($home)
                    <div class="home_banner_bottom_title w-75 mx-auto py-3 ">
                        <h6 class="home_title_heading pb-2"
                            style="font-size: 24px;line-height: 28px; text-transform: capitalize"> {{ $home->header1 }}
                        </h6>
                        <p class="home_title_text" style="font-size: 16px !important">{{ $home->header2 }}</p>
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
                            <img src="{{ asset('storage/requestImg/' . $feature3->logo) }}" alt="" height="80px"
                                width="85px">
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
                                {{ App\Models\Admin\Product::count() }}
                                <small>products</small>
                            </strong>
                            and
                            <strong style="font-family: 'Poppins', sans-serif;font-size:18px;">
                                {{ App\Models\Admin\Brand::count() }}
                                <small>brands</small>
                            </strong>
                            at your service, we can provide you with the tools
                            you need to succeed. Additionally, you may easily ask your exact requirements or contact us at
                            anytime.
                        </p>
                        <div class="mt-5 home_shop_button">
                            <a href="{{ route('shop.html') }}" class="common_button effect01">Shop Now</a>
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

    <!--=======// Popular products //======-->
    <section>
        <div class="container">
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
                                                                <small class="price-usd">USD</small>
                                                                $ --.-- 
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
                                                        {{-- @elseif ($item->price_status && $item->price_status == 'price') --}}
                                                    @elseif ($item->price_status && $item->price_status == 'rfq')
                                                        <div class="price">
                                                            <p class="text-muted text-center">
                                                                <small class="price-usd">USD</small>
                                                                $ --.-- 
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
                                                    @elseif ($item->price_status && $item->price_status == 'offer_price')
                                                        <div class="price">
                                                            <p class="text-muted text-center"
                                                                style="text-decoration: line-through;text-decoration-thickness: 2px; text-decoration-color: #ae0a46;">
                                                                <small class="price-usd">USD</small> $ {{ number_format($item->price, 2) }} 
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
                                                    @else
                                                        <div class="price">
                                                            <p class="text-muted text-center"><small class="price-usd">USD</small>
                                                                $ {{ number_format($item->price, 2) }} 
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

    <!--======// Learn clint history //======-->
    @if (!empty($story1) | !empty($story2) | !empty($story3) | !empty($story4))
        <section class="account_benefits_section_wp mt-3">
            <div class="container">
                <!-- title -->
                <div class="section_title story_title">
                    <h3 class="title_top_heading">Our Few Services at Clients.</h3>
                </div>

                <div class="row d-flex justify-content-center">
                    <!--------item------->
                    @if (!empty($story1))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story1->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story1->image) }}"
                                        alt="{{ $story1->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story1->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story1->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                    <!--------item------->
                    @if (!empty($story2))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story2->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story2->image) }}"
                                        alt="{{ $story2->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story2->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story2->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                    <!--------item------->
                    @if (!empty($story3))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story3->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story3->image) }}"
                                        alt="{{ $story3->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story3->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story3->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                    <!--------item------->
                    @if (!empty($story4))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story4->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story4->image) }}"
                                        alt="{{ $story4->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story4->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story4->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- button -->
                <div class="learn_clint_history_btn">
                    <a href="{{ route('all.story') }}">See all client stories</a>
                </div>
            </div>
        </section>
    @endif
    <!---------End -------->

    <!--======// Magazine Section //======-->
    @if (!empty($techglossy))
        <section class="account_benefits_section_wp mt-3">
            <div class="container">
                <div class="row magazine_section">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}"
                            alt="{{ $techglossy->badge }}" style="border-radius:15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 account_benefits_section">
                        <h3 class="title_top_heading">Tech Journal</h3>
                        <h4 style="font-size:24px;font-weight:400;">{{ $techglossy->badge }}</h4>
                        <h4 class="pb-2">{{ $techglossy->title }}</h4>
                        <p>{{ $techglossy->header }}</p>

                        <div class="my-3 col-lg-6 px-0">
                            <div class="d-flex flex-column justify-content-center">
                                {{-- @php
                                    $tag = $techglossy->tags;
                                    $tags = explode(',', $tag);
                                @endphp
                                <div class="btn-group pt-1">
                                    @foreach ($tags as $item)
                                         <button type="button"
                                            class="btn tag_btn ml-1 px-1"></button>
                                        { <ul class="p-0 m-0">
                                                <li class="d-flex">
                                                    {{ ucwords($item) }}
                                                </li>
                                            </ul>
                                    @endforeach

                                </div> --}}
                                <a href="{{ route('techglossy.details', $techglossy->id) }}"
                                    class="common_button2 effect01 text-white">Read the Journal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!----------End--------->

    <!--======// our success section //======-->
    @if (!empty($success1) && !empty($success2) && !empty($success3))
        <section class="container">
            <div class="our_success_wrapper">
                <!-- title -->
                <div class="section_title">
                    <h3 class="title_top_heading py-5">Our Success Starts With Our Culture.</h3>
                </div>
                <!-- wrapper -->

                <div class="row">
                    <!-- item -->
                    @if (!empty($success1))
                        <div class="col-lg-4 col-sm-12">
                            <div class="our_success_item">
                                <p class="our_success_item_title">{{ $success1->title }}</p>
                                <div class="our_success_item_body" style="height: 14rem; border: none;">
                                    {{ $success1->description }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- item -->
                    @if (!empty($success2))
                        <div class="col-lg-4 col-sm-12">
                            <div class="our_success_item">
                                <p class="our_success_item_title our_success_item_title2">{{ $success2->title }}</p>
                                <div class="our_success_item_body" style="height: 14rem; border: none;">
                                    {{ $success2->description }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- item -->
                    @if (!empty($success3))
                        <div class="col-lg-4 col-sm-12">
                            <div class="our_success_item">
                                <p class="our_success_item_title our_success_item_title3">{{ $success3->title }}</p>
                                <div class="our_success_item_body" style="height: 14rem; border: none;">
                                    {{ $success3->description }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </section>
    @endif
    <!---------End -------->
@endsection
