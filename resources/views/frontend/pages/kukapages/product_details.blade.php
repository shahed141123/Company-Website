@extends('frontend.master')
@section('content')
    <style>
        /* Slider Need Here */
        .slick-slider .element-brands {
            height: 480px;
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

        .element-brands {
            margin-right: 20px !important;
        }
    </style>
    @include('frontend.pages.kukapages.partial.page_header')


    <section>

        <div class="container my-5">
            <div class="single-product-container">
                <div class="row g-3">
                    <div class="col-lg-6 col-sm-12 single_product_images">
                        <!-- gallery pic -->
                        <div class="mx-auto d-block">
                            <img id="expand" class="geeks img-fluid rounded mx-auto d-block"
                                src="{{ asset($sproduct->thumbnail) }}">
                        </div>
                        @php
                            $imgs = App\Models\Admin\MultiImage::where('product_id', $sproduct->id)->get();
                        @endphp

                        <div class="img_gallery_wrapper row pt-1">
                            @foreach ($imgs as $data)
                                <div class="col-3">
                                    <img class="img-fluid" src="{{ asset($data->photo) }}" onclick="gfg(this);">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div id="product__slider">
                            <div class="product__slider-main">
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-mg/17587-9726662.webp"
                                        alt="" class="img-responsive"></div>
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-mg/17587-9726664.webp"
                                        alt="" class="img-responsive"></div>
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-mg/17587-9726660.webp"
                                        alt="" class="img-responsive"></div>
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-mg/17587-9726657.webp"
                                        alt="" class="img-responsive"></div>
                            </div>
                            <div class="product__slider-thmb">
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-pc/17587-9726662.jpg"
                                        alt="" class="img-responsive"></div>
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-pc/17587-9726664.jpg"
                                        alt="" class="img-responsive"></div>
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-pc/17587-9726660.jpg"
                                        alt="" class="img-responsive"></div>
                                <div class="slide"><img
                                        src="https://img.directindustry.com/images_di/photo-pc/17587-9726657.jpg"
                                        alt="" class="img-responsive"></div>
                            </div>
                        </div>


                        <div class="brand-product-single-image">
                            <img class="brand-single-image"
                                src="https://img.directindustry.com/images_di/photo-mg/17587-15940085.webp" alt="">
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="single-product-details pt-3">
                            <h4>{{ $sproduct->name }}</h4>
                            <ul class="d-flex align-items-center p-1">
                                <li class="me-2">
                                    <p class="p-0 m-0" style="color: rgb(153, 153, 153);"><i
                                            class="fa-solid fa-tag me-1 single-bp-tag"></i>{{ $sproduct->sku_code }}</p>
                                </li>
                                <li class="me-2">
                                    <p class="p-0 m-0" style="color: rgb(153, 153, 153);"><i
                                            class="fa-solid fa-tag me-1 single-bp-tag"></i>{{ $sproduct->mf_code }}</p>
                                </li>
                                <li class="me-2">
                                    <p class="p-0 m-0" style="color: rgb(153, 153, 153);"><i
                                            class="fa-solid fa-tag me-1 single-bp-tag"></i>{{ $sproduct->product_code }}</p>
                                </li>
                            </ul>
                            <div class="row d-flex align-items-center">
                                <div class="col-sm-4">
                                    <span>Manufactured by:</span>
                                </div>
                                <div class="col-sm-8 d-flex align-items-center">
                                    <h4 class="me-3 p-0 m-0">{{ $sproduct->getBrandName() }}</h4>
                                    {{-- <p class="p-0 m-0"><i class="fa-solid fa-location-dot me-2 text-muted"></i></p> --}}
                                    {{-- <p class="p-0 m-0">Germany</p> --}}
                                </div>
                            </div>
                            {{-- <div class="row gx-0">
                                <div class="col-lg-3">
                                    <div class="rating-brand-product">
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <small class="text-muted"> Feedback on the quality of responses (from 2 buyers)</small>
                                </div>
                            </div> --}}
                            <div class="row mt-5">
                                <div class="row product_quantity_wraper justify-content-between"
                                    style="background-color: transparent !important;">
                                    @if ($sproduct->rfq == 1)
                                        <div class="bg-light d-flex justify-content-between align-items-center"
                                            style="width: 80%;">
                                            <button class="common_button" id="modal_view_left" data-toggle="modal"
                                                data-target="#get_quote_modal" style="width: 35%;">Ask For Price</button>

                                            {{-- <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a> --}}
                                            <div class="need_help col-lg-4 col-sm-12">
                                                <h6 class="m-2">Need Help Ordering?</h6>
                                                <h6>Call <strong>{{ App\Models\Admin\Setting::first()->mobile }}</strong>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-4"
                                            style="width: 80%; background: #f9f6f0;">
                                            <div class="stock-info">
                                                <p tabindex="0" class="prod-stock mb-0"
                                                    id="product-avalialability-by-warehouse">
                                                    <span aria-label="Stock Availability" class="js-prod-available"> <i
                                                            class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                                    @if ($sproduct->qty > 0)
                                                        <span class="text-success"
                                                            style="font-size:17px">{{ $sproduct->qty }}
                                                            in stock</span>
                                                    @else
                                                        <span class="text-danger pb-2"
                                                            style="font-size:17px">{{ ucfirst($sproduct->stock) }}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div>
                                                <p class="list_price mb-0 me-3">Custom Pricing</p>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#askProductPrice">
                                                    <span class="fw-bold" style="color: #ae0a46;">Get A Quote</span>
                                                </a>
                                            </div>
                                        </div>
                                    @elseif ($sproduct->price_status && $sproduct->price_status == 'rfq')
                                        <div class="bg-light d-flex justify-content-between align-items-center"
                                            style="width: 80%;">
                                            <button class="common_button" id="modal_view_left" data-toggle="modal"
                                                data-target="#get_quote_modal" style="width: 35%;">Ask For Price</button>

                                            {{-- <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a> --}}
                                            <div class="need_help col-lg-4 col-sm-12">
                                                <h6 class="m-2">Need Help Ordering?</h6>
                                                <h6>Call <strong>{{ App\Models\Admin\Setting::first()->mobile }}</strong>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-4"
                                            style="width: 80%; background: #f9f6f0;">
                                            <div class="stock-info">
                                                <p tabindex="0" class="prod-stock mb-0"
                                                    id="product-avalialability-by-warehouse">
                                                    <span aria-label="Stock Availability" class="js-prod-available"> <i
                                                            class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                                    @if ($sproduct->qty > 0)
                                                        <span class="text-success"
                                                            style="font-size:17px">{{ $sproduct->qty }}
                                                            in stock</span>
                                                    @else
                                                        <span class="text-danger pb-2"
                                                            style="font-size:17px">{{ ucfirst($sproduct->stock) }}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div>
                                                <p class="list_price mb-0 me-3">Custom Pricing</p>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#askProductPrice">
                                                    <span class="fw-bold" style="color: #ae0a46;">Get A Quote</span>
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        @php
                                            $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                                        @endphp
                                        @if ($cart->where('id', $sproduct->id)->count())
                                            <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                                                <div class="common_button2">
                                                    <a class="text-white" href="javascript:void(0);"> Already in Cart</a>
                                                </div>
                                            </div>
                                        @else
                                            <form action="{{ route('add.cart') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" id="product_id"
                                                    value="{{ $sproduct->id }}">
                                                <input type="hidden" name="name" id="name"
                                                    value="{{ $sproduct->name }}">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between bg-light py-2"
                                                        style="width: 80%;">
                                                        <div class="pro-qty">
                                                            <input type="hidden" name="product_id" id="product_id"
                                                                value="{{ $sproduct->id }}">
                                                            <input type="hidden" name="name" id="name"
                                                                value="{{ $sproduct->name }}">
                                                            <div class="counter">
                                                                <span class="down"
                                                                    onClick='decreaseCount(event, this)'>-</span>
                                                                <input type="text" name="qty" value="1"
                                                                    class="count_field">
                                                                <span class="up"
                                                                    onClick='increaseCount(event, this)'>+</span>

                                                            </div>
                                                        </div>
                                                        <button class="common_button2 ms-3" type="submit">Add to
                                                            Basket</button>
                                                    </div>

                                                </div>
                                            </form>
                                        @endif
                                        <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-5"
                                            style="width: 80%; background: #f9f6f0;">
                                            <div>
                                                @if ($sproduct->rfq != 1)
                                                    <p class="list_price mb-0">List Price</p>
                                                    <div class="product__details__price ">
                                                        @if (!empty($sproduct->discount))
                                                            <p class="mb-0"
                                                                style="font-size: 14px !important; color: #ae0a46;">
                                                                <span
                                                                    style="text-decoration: line-through; color:#ae0a46;">$
                                                                    {{ $sproduct->price }}</span>
                                                                <span style="color: black">$
                                                                    {{ $sproduct->discount }}</span>
                                                                <span style="font-size: 14px;">USD</span>
                                                            </p>
                                                            @php
                                                                $amount = $sproduct->price - $sproduct->discount;
                                                                $discount = ($amount / $sproduct->price) * 100;
                                                            @endphp
                                                            <span class="badge rounded-pill bg-success"
                                                                style="font-size: 14px;">
                                                                {{ round($discount) }}%</span>
                                                        @else
                                                            <p class="mb-0"
                                                                style="font-size: 14px !important; color: #ae0a46;">$
                                                                <span
                                                                    style="font-size: 22px;">{{ $sproduct->price }}</span>
                                                                US
                                                            </p>
                                                        @endif
                                                    </div>
                                                @else
                                                    <div id="tpl-product-detail-order-target"
                                                        class="prod-ordering-section" data-outofstock="Out of stock.">
                                                        <div class="row js-add-to-cart-container">
                                                            <div class="columns small-12 ds-v1 text-center">
                                                                <a type="button" style="font-weight: 600"
                                                                    class="text-danger" data-toggle="modal"
                                                                    data-target="#exampleModalCenter">
                                                                    <h5>This product has sell requirements</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="stock-info">
                                                <p tabindex="0" class="prod-stock mb-0"
                                                    id="product-avalialability-by-warehouse">
                                                    <span aria-label="Stock Availability" class="js-prod-available"> <i
                                                            class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                                    @if ($sproduct->qty > 0)
                                                        <span class="text-success"
                                                            style="font-size:17px">{{ $sproduct->qty }}
                                                            in stock</span>
                                                    @else
                                                        <span class="text-danger pb-2"
                                                            style="font-size:17px">{{ ucfirst($sproduct->stock) }}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div>
                                                <p class="list_price mb-0">Custom Pricing</p>
                                                <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#askProductPrice">
                                                    <span class="fw-bold" style="color: #ae0a46;">Get A Quote</span>
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                {{-- <div class="col-lg-12">
                                    <button class="btns effect02" style="max-width: 290px !important; height: 50px;"><i
                                            class="fa-regular fa-address-book me-2"></i> </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="brand-links me-2">
                                <a href="#" class="p-0 m-0" style="color: #ae0a46;"><i
                                        class="fa-solid fa-heart"></i>
                                    Add to favorites</a>
                            </div>
                            <div>
                                <a href="#" class="ms-2 me-2 p-0 m-0" style="color: #ae0a46;">|</a>
                            </div>
                            <div class="brand-links me-2">
                                <a href="#" class="p-0 m-0" style="color: #ae0a46;"> <i
                                        class="fa-solid fa-heart"></i>
                                    Add to favorites</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            @if (!empty($sproduct->overview))
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <div class="single-product-description" style="font-size: 14px;">
                            <h2 class="description-title">Overview</h2>
                            <div class="container pb-3">
                                <div class="row ps-2">
                                    <div class="col-lg-12 pe-0">
                                        <div class="sc-3fi1by-1 chZLCL">
                                            <div class="description-areas-brand">
                                                {!! $sproduct->overview !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="single-product-description " style="font-size: 14px;">
                        <h2 class="description-title">Specification</h2>
                        <div class="container pb-3 specification-areas-brand">
                            @if (!empty($sproduct->specification))
                                <div class="row gx-1 px-2">
                                    {{-- <div class="col-lg-4">
                                        <div class="p-1 ps-2">Type</div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="p-1 ps-2">articulated</div>
                                    </div> --}}
                                    {!! $sproduct->specification !!}
                                </div>
                            @else
                                <div class="row gx-1 px-2">
                                    No Specification Available.
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product-description" style="font-size: 14px;">
                        <h2 class="description-title">Accessories</h2>
                        <div class="container pb-3">
                            <div class="row ps-2">
                                <div class="col-lg-12 pe-0">
                                    <div class="sc-3fi1by-1 chZLCL">
                                        <div class="description-areas-brand">
                                            @if (!empty($sproduct->accessories))
                                                <p class="text-muted mb-2" style="width: 100% !important;overflow: auto;">
                                                    {!! $sproduct->accessories !!} </p>
                                            @else
                                                <p class="text-muted mb-2"> No Accessories Available</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="single-product-description " style="font-size: 14px;">
                        <h2 class="description-title">Video</h2>
                        <div class="container pb-3 mt-3 video-areas-brand">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                style="width: 100%;height: 228px;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product-description" style="font-size: 14px;">
                        <h2 class="description-title">CATALOGS</h2>
                        <div class="container pb-3">
                            <div class="row mt-3">
                                <div class="col">
                                    <div>
                                        <img src="https://img.directindustry.com/pdf/repository_di/17587/kr-agilus-waterproof-519707_1m.jpg"
                                            height="175px" width="100%" alt="">
                                        <div class="catalog-details text-center">
                                            <p class="m-0 p-1">KR AGILUS Waterproof</p>
                                            <p class="p-1 m-0">2 Pages</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img src="https://img.directindustry.com/pdf/repository_di/17587/kr-agilus-waterproof-519707_1m.jpg"
                                            height="175px" width="100%" alt="">
                                        <div class="catalog-details text-center">
                                            <p class="m-0 p-1">KR AGILUS Waterproof</p>
                                            <p class="p-1 m-0">2 Pages</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img src="https://img.directindustry.com/pdf/repository_di/17587/kr-agilus-waterproof-519707_1m.jpg"
                                            height="175px" width="100%" alt="">
                                        <div class="catalog-details text-center">
                                            <p class="m-0 p-1">KR AGILUS Waterproof</p>
                                            <p class="p-1 m-0">2 Pages</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <h2 class="company-tab-title mb-2 ps-0">
                    <span style="font-size: 20px;">BUYERS WHO LIKED THIS PRODUCT ALSO LIKED</span>
                </h2>
                <div class="col">
                    <div class="slick-slider brand-containers">
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <a class="" href="#">
                                            <img src="https://img.directindustry.com/images_di/logo-pp/L32007.gif"
                                                alt="">
                                        </a>
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <a class="" href="#">
                                            <img src="https://img.directindustry.com/images_di/logo-pp/L32007.gif"
                                                alt="">
                                        </a>
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <a class="" href="#">
                                            <img src="https://img.directindustry.com/images_di/logo-pp/L32007.gif"
                                                alt="">
                                        </a>
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <a class="" href="#">
                                            <img src="https://img.directindustry.com/images_di/logo-pp/L32007.gif"
                                                alt="">
                                        </a>
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <a class="" href="#">
                                            <img src="https://img.directindustry.com/images_di/logo-pp/L32007.gif"
                                                alt="">
                                        </a>
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <a class="" href="#">
                                            <img src="https://img.directindustry.com/images_di/logo-pp/L32007.gif"
                                                alt="">
                                        </a>
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-muted">OTHER KUKA AG PRODUCTS</h4>
                    <h2 class="company-tab-title mb-2 ps-0 bg-transparent">
                        <span style="font-size: 20px;">ROBOT SYSTEMS</span>
                    </h2>
                </div>
                <div class="col-lg-12">
                    <div class="slick-slider brand-containers">
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div class="brand-image-brand">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- History --}}
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="company-tab-title mb-2 ps-0 bg-transparent">
                        <span style="font-size: 20px;">RECENTLY VIEWED PRODUCTS</span>
                    </h2>
                    <a href="#" class="d-flex justify-content-end">
                        <span class="border rounded-pill p-1" style="font-size: 12px;"><i class="fa fa-close me-2 "
                                aria-hidden="true"></i>
                            Clear History</span>
                    </a>
                </div>
                <div class="col-lg-12">
                    <div class="slick-slider brand-containers">
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div
                                        class="brand-image-brand d-flex justify-content-between align-items-center ps-0 pe-2">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                        <div class="">
                                            <a href="#" class="d-flex justify-content-end">
                                                <span class="border text-center rounded-pill p-1"
                                                    style="font-size: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><i
                                                        class="fa fa-close me-2 " style="margin-left: 8px;"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div
                                        class="brand-image-brand d-flex justify-content-between align-items-center ps-0 pe-2">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                        <div class="">
                                            <a href="#" class="d-flex justify-content-end">
                                                <span class="border text-center rounded-pill p-1"
                                                    style="font-size: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><i
                                                        class="fa fa-close me-2 " style="margin-left: 8px;"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div
                                        class="brand-image-brand d-flex justify-content-between align-items-center ps-0 pe-2">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                        <div class="">
                                            <a href="#" class="d-flex justify-content-end">
                                                <span class="border text-center rounded-pill p-1"
                                                    style="font-size: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><i
                                                        class="fa fa-close me-2 " style="margin-left: 8px;"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div
                                        class="brand-image-brand d-flex justify-content-between align-items-center ps-0 pe-2">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                        <div class="">
                                            <a href="#" class="d-flex justify-content-end">
                                                <span class="border text-center rounded-pill p-1"
                                                    style="font-size: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><i
                                                        class="fa fa-close me-2 " style="margin-left: 8px;"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div
                                        class="brand-image-brand d-flex justify-content-between align-items-center ps-0 pe-2">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                        <div class="">
                                            <a href="#" class="d-flex justify-content-end">
                                                <span class="border text-center rounded-pill p-1"
                                                    style="font-size: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><i
                                                        class="fa fa-close me-2 " style="margin-left: 8px;"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div
                                        class="brand-image-brand d-flex justify-content-between align-items-center ps-0 pe-2">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                        <div class="">
                                            <a href="#" class="d-flex justify-content-end">
                                                <span class="border text-center rounded-pill p-1"
                                                    style="font-size: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><i
                                                        class="fa fa-close me-2 " style="margin-left: 8px;"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-brands my-3">
                            <div class="row brand-product-card">
                                <a href="" class="ps-0">
                                    <div
                                        class="brand-image-brand d-flex justify-content-between align-items-center ps-0 pe-2">
                                        <div class="sc-14o3l-0 product-badge-image"
                                            style="background-image: url(https://img.virtual-expo.com/media/ps/images/common/pictos/new-video.png);">
                                        </div>
                                        <div class="">
                                            <a href="#" class="d-flex justify-content-end">
                                                <span class="border text-center rounded-pill p-1"
                                                    style="font-size: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><i
                                                        class="fa fa-close me-2 " style="margin-left: 8px;"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <img alt="articulated robot" loading="lazy" class=" lazyloaded"
                                            src="https://img.directindustry.com/images_di/photo-m2/177103-18243554.jpg">
                                    </div>
                                    <div class="card-description">
                                        <div>
                                            <a class="" href="#" style="font-size: 13px;">
                                                <span class="text-uppercase text-muted">articulated robot</span><br>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                                <span
                                                    class="text-uppercase border text-black badge bg-light rounded-pill">TX2-90</span>
                                            </a>
                                        </div>
                                        <div>
                                            <ul class="brand-taging-area">
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                                <li><i class="fa-solid fa-tag me-2"></i> 6-axis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Related Search --}}
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col bg-light">
                    <div class="">
                        <h4 class="pt-2">Related Searches</h4>
                        <hr class="m-0 p-0 pb-2">
                        <div class="container">
                            <div class="row py-3">
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Welding </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Machine</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Machine</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Machine Welding</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Machine</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Welding Welding </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Machine</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Welding Welding </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="" class="mb-3 me-1 p-1"><i
                                            class="fa-solid fa-angles-right text-danger"></i> Welding Machine</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Brand Logo --}}
    <section>
        <div class="container-fluid brand-logo-area">
            <div class="row">
                <div class="slick-slider-brand-logo">
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(".slick-slider").slick({
            slidesToShow: 4,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
            // dots: false, Boolean
            // arrows: false, Boolean
        });
    </script>
    <script>
        $(".slick-slider-brand-logo").slick({
            slidesToShow: 7,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
            // dots: false, Boolean
            // arrows: false, Boolean
        });
    </script>
    <script>
        if ($('.product__slider-main').length) {
            var $slider = $('.product__slider-main')
                .on('init', function(slick) {
                    $('.product__slider-main').fadeIn(1000);
                })
                .slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                    lazyLoad: 'ondemand',
                    autoplaySpeed: 3000,
                    asNavFor: '.product__slider-thmb'
                });

            var $slider2 = $('.product__slider-thmb')
                .on('init', function(slick) {
                    $('.product__slider-thmb').fadeIn(1000);
                })
                .slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    lazyLoad: 'ondemand',
                    asNavFor: '.product__slider-main',
                    dots: false,
                    centerMode: false,
                    focusOnSelect: true
                });

            //remove active class from all thumbnail slides
            $('.product__slider-thmb .slick-slide').removeClass('slick-active');

            //set active class to first thumbnail slides
            $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

            // On before slide change match active thumbnail to current slide
            $('.product__slider-main').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                var mySlideNumber = nextSlide;
                $('.product__slider-thmb .slick-slide').removeClass('slick-active');
                $('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
            });


            // init slider
            require(['js-sliderWithProgressbar'], function(slider) {

                $('.product__slider-main').each(function() {

                    me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);



                });
            });
            var options = {
                progressbarSelector: '.bJS_progressbar',
                slideSelector: '.bJS_slider',
                previewSlideSelector: '.bJS_previewSlider',
                progressInterval: '',
                onCustomProgressbar: function($slide, $progressbar) {}
            }

            // slick slider options
            // see: https://kenwheeler.github.io/slick/
            var sliderOptions = {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                autoplay: true
            }

            // slick slider options
            // see: https://kenwheeler.github.io/slick/
            var previewSliderOptions = {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: false,
                focusOnSelect: true,
                centerMode: true
            }
        }
    </script>
@endsection
