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

                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="single-product-details pt-3">
                            <h4>{{ $sproduct->name }}</h4>
                            <ul class="d-flex align-items-center p-1">
                                <li class="me-1">
                                    <p class="p-0 m-0" style="color: rgb(134, 134, 134);font-size: 13px;"><i
                                            class="fa-solid fa-tag me-1 single-bp-tag"></i>{{ $sproduct->sku_code }}</p>
                                </li>
                                <li class="me-1">
                                    <p class="p-0 m-0" style="color: rgb(134, 134, 134);font-size: 13px;"><i
                                            class="fa-solid fa-tag me-1 single-bp-tag"></i>{{ $sproduct->mf_code }}</p>
                                </li>
                                <li class="me-1">
                                    <p class="p-0 m-0" style="color: rgb(134, 134, 134);font-size: 13px;"><i
                                            class="fa-solid fa-tag me-1 single-bp-tag"></i>{{ $sproduct->product_code }}</p>
                                </li>
                            </ul>
                            <div class="row p-2">
                                {!! $sproduct->short_desc !!}
                            </div>
                            <div class="row d-flex align-items-center gx-0">
                                <div class="col-sm-4">
                                    <span class="fw-bold">Manufactured by:</span>
                                </div>
                                <div class="col-sm-8 d-flex align-items-center">
                                    <h4 class="me-3 p-0 m-0">{{ $sproduct->getBrandName() }}</h4>
                                    {{-- <p class="p-0 m-0"><i class="fa-solid fa-location-dot me-2 text-muted"></i></p> --}}
                                    {{-- <p class="p-0 m-0">Germany</p> --}}
                                </div>
                            </div>

                            {{-- <div class="row mt-5"> --}}
                            <div class="row product_quantity_wraper justify-content-between mt-5"
                                style="background-color: transparent !important;">
                                @if ($sproduct->rfq == 1)
                                    <div class="row justify-content-between align-items-center">
                                        {{-- <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a> --}}
                                        <div class="need_help col-lg-5 col-sm-12">
                                            <button class="common_button" id="modal_view_left" data-toggle="modal"
                                                data-target="#get_quote_modal" style="width: 100%;">Ask For Price</button>
                                        </div>
                                        <div class="need_help col-lg-7 col-sm-12">
                                            <h6 class="m-2">Need Help Ordering?</h6>
                                            <h6>Call <strong>{{ App\Models\Admin\Setting::first()->mobile }}</strong>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-4"
                                        style="width:100%; background: #f4efe4;">
                                        <div class="stock-info">
                                            <p tabindex="0" class="prod-stock mb-0"
                                                id="product-avalialability-by-warehouse">
                                                <span aria-label="Stock Availability" class="js-prod-available"> <i
                                                        class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                                @if ($sproduct->qty > 0)
                                                    <span class="text-success" style="font-size:17px">{{ $sproduct->qty }}
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
                                    <div class="row justify-content-between align-items-center">
                                        {{-- <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a> --}}
                                        <div class="need_help col-lg-5 col-sm-12">
                                            <button class="common_button" id="modal_view_left" data-toggle="modal"
                                                data-target="#get_quote_modal" style="width: 100%;">Ask For Price</button>
                                        </div>
                                        <div class="need_help col-lg-7 col-sm-12">
                                            <h6 class="m-2">Need Help Ordering?</h6>
                                            <h6>Call <strong>{{ App\Models\Admin\Setting::first()->mobile }}</strong>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-4"
                                        style="width:100%; background: #f4efe4;">
                                        <div class="stock-info">
                                            <p tabindex="0" class="prod-stock mb-0"
                                                id="product-avalialability-by-warehouse">
                                                <span aria-label="Stock Availability" class="js-prod-available"> <i
                                                        class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                                @if ($sproduct->qty > 0)
                                                    <span class="text-success" style="font-size:17px">{{ $sproduct->qty }}
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
                                        style="width: 100%; background: #f4efe4;">
                                        <div>
                                            @if ($sproduct->rfq != 1)
                                                <p class="list_price mb-0">List Price</p>
                                                <div class="product__details__price ">
                                                    @if (!empty($sproduct->discount))
                                                        <p class="mb-0"
                                                            style="font-size: 14px !important; color: #ae0a46;">
                                                            <span style="text-decoration: line-through; color:#ae0a46;">$
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
                                                            <span style="font-size: 22px;">{{ $sproduct->price }}</span>
                                                            US
                                                        </p>
                                                    @endif
                                                </div>
                                            @else
                                                <div id="tpl-product-detail-order-target" class="prod-ordering-section"
                                                    data-outofstock="Out of stock.">
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
                                            <a href="" data-bs-toggle="modal" data-bs-target="#askProductPrice">
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
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>

            </div>
            @if (!empty($sproduct->overview))
                <div class="row ">
                    <div class="col-lg-6">
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
                </div>
            @endif
            <div class="row mb-5">
                @if (!empty($sproduct->accessories))
                    <div class="col-lg-6">
                        <div class="single-product-description" style="font-size: 14px;">
                            <h2 class="description-title">Accessories</h2>
                            <div class="container pb-3">
                                <div class="row ps-2">
                                    <div class="col-lg-12 pe-0">
                                        <div class="sc-3fi1by-1 chZLCL">
                                            <div class="description-areas-brand">
                                                @if (!empty($sproduct->accessories))
                                                    <p class="text-muted mb-2"
                                                        style="width: 100% !important;overflow: auto;">
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
                @endif
            </div>
            @if (count($documents) > 0)
                <div class="row mb-5">
                    @if (count($documents) > 4)
                        <div class="col-lg-6">
                            <div class="single-product-description " style="font-size: 14px;">
                                <h2 class="description-title">Video</h2>
                                <div class="container pb-3 mt-3 video-areas-brand">
                                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                        style="width: 100%;height: 228px;"></iframe>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (count($documents) > 0)
                        <div class="col-lg-6">
                            <div class="single-product-description" style="font-size: 14px;">
                                <h2 class="description-title">CATALOGS</h2>
                                <div class="container pb-3">
                                    <div class="row mt-3">
                                        @foreach ($documents as $document)
                                            <div class="col-lg-6">
                                                <div>
                                                    <embed class="pdf_image" src="{{asset('storage/files/'.$document->document)}}" width="100%" height="175px" />
                                                    {{-- <img src=""
                                                        height="175px" width="100%" alt=""> --}}
                                                    <div class="catalog-details text-center">
                                                        <p class="m-0 p-1">{{$document->title}}</p>
                                                        {{-- <p class="p-1 m-0">2 Pages</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            <div class="row mb-5">
                <h2 class="company-tab-title mb-5 ps-0">
                    <span style="font-size: 20px;">BUYERS WHO LIKED THIS PRODUCT ALSO LIKED</span>
                </h2>
                <div class="col">
                    <div class="slick-slider brand-containers">

                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <div class="custom-col-5 col-sm-6 col-md-4 px-4">
                                    <div class="card rounded-0"
                                        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                        <div class="card-body" style="height:22rem;">
                                            {{-- <div class="new-video">
                                                <div class="icon-small video"></div>
                                            </div> --}}
                                            <div class="image-section">
                                                <img src="{{ file_exists($product->thumbnail) ? asset($product->thumbnail) : asset('upload/no_image.jpg') }}"
                                                    alt="" width="100%" height="210px;">
                                            </div>

                                            <div class="content-section text-center py-3 px-2">
                                                <a href="{{ route('product.details', $product->slug) }}">
                                                    <p class="pb-0 mb-0 text-muted brandpage_product_title">
                                                        {{ Str::limit($product->name, 85) }}</p>
                                                </a>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $product->getBrandName() }}</span>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $product->getCategoryName() }}</span>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $product->sku_code }}</span>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $product->product_code }}</span>
                                                @if ($product->price_status == 'price' && !empty($product->price))
                                                    <span style="font-size: 14px"><i class="fa-solid fa-tag ms-2"></i> USD
                                                        {{ $product->price }}</span>
                                                @endif
                                                {{-- <span style="font-size: 10px"><i class="fa-solid fa-tag"></i> KR 4 AGILUS</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h4 class="text-muted">Other {{ $sproduct->getBrandName() }} Products</h4> --}}
                    <h2 class="company-tab-title mb-5 ps-0 bg-transparent fw-bold text-muted">
                        <span style="font-size: 24px;">Other {{ $sproduct->getBrandName() }} Products</span>
                    </h2>
                </div>
                <div class="col-lg-12">
                    <div class="slick-slider brand-containers">
                        @if (count($brand_products) > 0)
                            @foreach ($brand_products as $brand_product)
                                <div class="custom-col-5 col-sm-6 col-md-4 px-4">
                                    <div class="card rounded-0"
                                        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                        <div class="card-body" style="height:22rem;">
                                            {{-- <div class="new-video">
                                                <div class="icon-small video"></div>
                                            </div> --}}
                                            <div class="image-section">
                                                <img src="{{ file_exists($brand_product->thumbnail) ? asset($brand_product->thumbnail) : asset('upload/no_image.jpg') }}"
                                                    alt="" width="100%" height="210px;">
                                            </div>

                                            <div class="content-section text-center py-3 px-2">
                                                <a href="{{ route('product.details', $brand_product->slug) }}">
                                                    <p class="pb-0 mb-0 text-muted brandpage_product_title">
                                                        {{ Str::limit($brand_product->name, 85) }}</p>
                                                </a>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $brand_product->getBrandName() }}</span>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $brand_product->getCategoryName() }}</span>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $brand_product->sku_code }}</span>
                                                <span class="brandpage_product_span"><i class="fa-solid fa-tag"></i>
                                                    {{ $brand_product->product_code }}</span>
                                                @if ($brand_product->price_status == 'price' && !empty($brand_product->price))
                                                    <span style="font-size: 14px"><i class="fa-solid fa-tag ms-2"></i> USD
                                                        {{ $brand_product->price }}</span>
                                                @endif
                                                {{-- <span style="font-size: 10px"><i class="fa-solid fa-tag"></i> KR 4 AGILUS</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- History --}}
    {{-- <section>
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
    </section> --}}
    {{-- Related Search --}}
    <section>
        <div class="container mb-3 related_search_card">
            <div class="row">
                <div class="col">
                    <div class="p-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="company-tab-title">
                                    <span style="font-size: 20px; background-color: #eeeeee;">Related Searches</span>
                                </h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row py-3">
                                @foreach ($related_search['categories'] as $related_category)
                                    <div class="col-sm-3">
                                        <a href="{{ route('category.html', $related_category->slug) }}"
                                            class="related_search_links"><i
                                                class="fa-solid fa-angles-right text-danger"></i>
                                            {{ $related_category->title }} </a>
                                    </div>
                                @endforeach
                                @foreach ($related_search['brands'] as $key => $related_brand)
                                    @if ($key === 4)
                                    @break
                                @endif
                                <div class="col-sm-3">
                                    <a href="{{ route('brand.overview', $related_brand->slug) }}"
                                        class="related_search_links"><i
                                            class="fa-solid fa-angles-right text-danger"></i>
                                        {{ $related_brand->title }} </a>
                                </div>
                            @endforeach
                            @foreach ($related_search['solutions'] as $related_solution)
                                @if (!empty($related_solution->slug))
                                    <div class="col-sm-3">
                                        <a href="{{ route('solution.details', $related_solution->slug) }}"
                                            class="related_search_links"><i
                                                class="fa-solid fa-angles-right text-danger"></i>
                                            {{ $related_solution['name'] }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($related_search['industries'] as $related_industry)
                                @if (!empty($related_industry->slug))
                                    <div class="col-sm-3">
                                        <a href="{{ route('industry.details', $related_industry->slug) }}"
                                            class="related_search_links"><i
                                                class="fa-solid fa-angles-right text-danger"></i>
                                            {{ $related_industry['title'] }} </a>
                                    </div>
                                @endif
                            @endforeach
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
                @if ($related_search['brands'])
                    @foreach ($related_search['brands'] as $brand_logo)
                        <div class="element-brands-logo">
                            <a href="">
                                <img src="{{ asset('storage/' . $brand_logo->image) }}"
                                    alt="{{ $brand_logo->title }}" width="100px" height="60px">
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</section>



<!-- left modal -->
<div class="modal modal_outer fade" id="get_quote_modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel2">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">


        <div class="modal-content">

            <div class="modal-header py-2" style="background: #ae0a46;color: white;">
                <h5 class="modal-title text-white">Get a Quote</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if (Auth::guard('client')->user())
                <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card mx-4">
                        <div class="card-body px-4 py-2">
                            <div class="row border" style="font-size: 0.8rem;">
                                <div class="col-lg-3 pl-2">{{ Auth::guard('client')->user()->name }}</div>
                                <div class="col-lg-4" style="margin: 5px 0px">
                                    {{ Auth::guard('client')->user()->email }}</div>
                                <div class="col-lg-4" style="margin: 5px 0px">
                                    {{ Auth::guard('client')->user()->phone }}
                                    <div class="form-group" id="Rfquser" style="display:none">
                                        <input type="text" required="" class="form-control form-control-sm"
                                            id="phone" name="phone"
                                            value="{{ Auth::guard('client')->user()->phone }}"
                                            placeholder="Phone Number" style="font-size: 0.8rem;">
                                    </div>
                                </div>
                                <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);"
                                        id="editRfquser"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                            </div>
                        </div>

                    </div>
                    <input type="hidden" name="product_id" value="{{ $sproduct->id }}">
                    <input type="hidden" name="client_id" value="{{ Auth::guard('client')->user()->id }}">
                    <input type="hidden" name="client_type" value="client">
                    <input type="hidden" name="name" value="{{ Auth::guard('client')->user()->name }}">
                    <input type="hidden" name="email" value="{{ Auth::guard('client')->user()->email }}">
                    {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone}}"> --}}
                    <div class="modal-body get_quote_view_modal_body">


                        <div class="form-row">

                            <div class="form-group col-sm-4 m-0">

                                <input type="text" class="form-control form-control-sm mt-4" id="contact"
                                    name="company_name" value="{{ Auth::guard('client')->user()->company_name }}"
                                    placeholder="Company Name" style="font-size: 0.7rem;">
                            </div>
                            <div class="form-group col-sm-4 m-0">

                                <input type="number" class="form-control form-control-sm mt-4" id="contact"
                                    name="qty" placeholder="Quantity" style="font-size: 0.7rem;">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="m-0" for="image" style="font-size: 0.7rem;">Upload Image</label>
                                <input type="file" name="image" class="form-control form-control-sm"
                                    id="image" accept="image/*" style="font-size: 0.7rem;" />
                                <div class="form-text" style="font-size:11px;">Only png, jpg, jpeg images</div>

                            </div>

                            <div class="form-group col-sm-12 border text-white" style="background: #f9f6f0">
                                <h6 class="text-center pt-1">Product Name : {{ $sproduct->name }}</h6>
                            </div>

                            <div class="form-group col-sm-12">

                                <textarea class="form-control form-control-sm" id="message" name="message" rows="1"
                                    placeholder="Additional Information..."></textarea>
                            </div>

                            <div class="form-group  col-sm-12 px-3 mx-3">
                                <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                <label for="call">Also Please Call Me</label>

                            </div>
                            <div class="form-group col-sm-12 px-3 mx-3 message g-recaptcha"
                                data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i
                                    class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>

                </form>
            @elseif (Auth::guard('partner')->user())
                <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card mx-4">
                        <div class="card-body p-4">
                            <div class="row border">
                                <div class="col-lg-3 pl-2">Name: {{ Auth::guard('partner')->user()->name }}</div>
                                <div class="col-lg-4" style="margin: 5px 0px">
                                    {{ Auth::guard('partner')->user()->primary_email_address }}</div>
                                <div class="col-lg-4" style="margin: 5px 0px">
                                    {{ Auth::guard('partner')->user()->company_number }}</div>
                                <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);"
                                        id="editRfqpartner"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="product_id" value="{{ $sproduct->id }}">
                    <input type="hidden" name="client_type" value="partner">
                    <input type="hidden" name="partner_id" value="{{ Auth::guard('partner')->user()->id }}">
                    <input type="hidden" name="name" value="{{ Auth::guard('partner')->user()->name }}">
                    <input type="hidden" name="email"
                        value="{{ Auth::guard('partner')->user()->primary_email_address }}">
                    {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone_number}}"> --}}
                    <div class="modal-body get_quote_view_modal_body">

                        <div class="form-group col-sm-12 border text-white" style="background: #f9f6f0">
                            <h6 class="text-center pt-1 bg-white">Product Name : {{ $sproduct->name }}</h6>
                        </div>
                        <div class="row" id="Rfqpartner" style="display:none">
                            <div class="form-group col-sm-6">
                                <input type="text" required="" class="form-control form-control-sm"
                                    id="phone" name="phone"
                                    value="{{ Auth::guard('partner')->user()->company_number }}"
                                    placeholder="Company Phone Number">
                            </div>
                            <div class="form-group  col-sm-6">
                                <label for="contact">Company Name </label>
                                <input type="text" class="form-control form-control-sm" id="contact"
                                    name="company_name" required
                                    value="{{ Auth::guard('partner')->user()->company_name }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-sm-6">

                                <input type="number" class="form-control form-control-sm" id="contact"
                                    name="qty" placeholder="Quantity">
                            </div>
                            <div class="form-group  col-sm-6">
                                <label for="contact">Upload Image </label>
                                <input type="file" name="image" class="form-control form-control-sm"
                                    id="image" accept="image/*" />
                                <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images
                                </div>
                            </div>

                            <div class="form-group  col-sm-12">
                                <textarea class="form-control form-control-sm" id="message" name="message" rows="1"
                                    placeholder="Additional Text.."></textarea>
                            </div>

                            <div class="form-group  col-sm-12 px-3 mx-3">
                                <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                <label for="call">Also Please Call Me</label>
                            </div>
                            <div class="form-group col-sm-12 px-3 mx-3 message g-recaptcha"
                                data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i
                                    class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>

                </form>
            @else
                <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $sproduct->id }}">
                    {{-- <input type="hidden" name="client_type" value="random"> --}}
                    <div class="modal-body get_quote_view_modal_body">
                        <div class="form-row">
                            <div class="form-group col-sm-12 border text-white" style="background: #f9f6f0">
                                <h6 class="text-center pt-1">Product Name : {{ $sproduct->name }}</h6>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" required=""
                                    id="name" name="name">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" required="" class="form-control form-control-sm"
                                    id="email" name="email">
                            </div>
                            <div class="form-group  col-sm-6">
                                <label for="contact">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" required="" class="form-control form-control-sm"
                                    id="phone" name="phone">
                            </div>

                            <div class="form-group  col-sm-6">
                                <label for="contact">Company Name </label>
                                <input type="text" class="form-control form-control-sm" id="contact"
                                    name="company_name">
                            </div>
                            <div class="form-group  col-sm-6">
                                <label for="contact">Quantity </label>
                                <input type="number" class="form-control form-control-sm" id="contact"
                                    name="qty">
                            </div>
                            <div class="form-group  col-sm-6">
                                <label for="contact">Custom Image </label>
                                <input type="file" name="image" class="form-control form-control-sm"
                                    id="image" accept="image/*" />
                                <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images
                                </div>
                            </div>

                            <div class="form-group  col-sm-12">
                                <label for="message">Type Message</label>
                                <textarea class="form-control form-control-sm" id="message" name="message" rows="4"></textarea>
                            </div>

                            <div class="form-group  col-sm-12 px-3 mx-3">
                                <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                <label for="call">Also Please Call Me</label>
                            </div>
                            <div class="form-group col-sm-12 px-3 mx-3 message g-recaptcha"
                                data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit
                                &nbsp;<i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>

                </form>
            @endif

        </div><!-- //modal-content -->

    </div><!-- modal-dialog -->
</div>
<!-- modal -->
<!-- //left modal -->



@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $(".slick-slider").slick({
            slidesToShow: 4,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 768, // Breakpoint for mobile devices
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        // You can adjust other settings for mobile devices here
                    }
                }
            ]
            // dots: false, Boolean
            // arrows: false, Boolean
        });
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
<script>
    function gfg(imgs) {
        var expandImg = document.getElementById("expand");
        var imgText = document.getElementById("geeks");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>

<script>
    //----- Quantity
    function increaseCount(a, b) {
        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
    }

    function decreaseCount(a, b) {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
        }
    }
</script>

<script>
    //---- Sidebar Tab Product


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>


<script>
    $(document).ready(function() {
        $('#editRfquser').click(function() {
            $("#Rfquser").toggle(this.checked);
        });

    });
</script>
@endsection
