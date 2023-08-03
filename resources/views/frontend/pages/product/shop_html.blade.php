@extends('frontend.master')
@section('content')

    <style>
        .iconbox {
            padding: 20px 5px !important;
        }

        .main_color {
            background-color: #ae0a46 !important;
            color: white !important;


        }

        .iconbox-icon {
            background: transparent;
            /* box-shadow: 0 0px 0px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%); */
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            margin: 13px auto;
            display: flex;
            width: 100px;
            height: 100px;
            justify-content: center;
            margin-top: -65px;
            align-items: center;
        }

        /* tab */
        small {
            font-size: 75%;
            color: #777;
            font-weight: 400;
        }


        .container .title {
            color: #3c4858;
            text-decoration: none;
            margin-top: 30px;
            margin-bottom: 25px;
            min-height: 32px;
        }


        .container .title h3 {
            font-size: 25px;
            font-weight: 300;
        }


        div.card {
            border: 0;
            margin-bottom: 30px;
            margin-top: 30px;
            border-radius: 6px;
            color: rgba(0, 0, 0, .87);
            background: #fff;
            width: 100%;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
        }


        div.card.card-plain {
            background: transparent;
            box-shadow: none;
        }


        div.card .card-header {
            border-radius: 3px;
            padding: 5px 15px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: -30px;
            border: 0;
            background: linear-gradient(60deg, #eee, #bdbdbd);
        }


        .card-plain .card-header:not(.card-avatar) {
            margin-left: 0;
            margin-right: 0;
        }


        .div.card .card-body {
            padding: 15px 30px;
        }


        div.card .card-header-primary {
            background: linear-gradient(60deg, #ab47bc, #7b1fa2);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
        }


        div.card .card-header-danger {
            background: linear-gradient(60deg, #ef5350, #d32f2f);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(244, 67, 54, .6);
        }




        .card-nav-tabs .card-header {
            margin-top: -30px !important;
        }


        .card .card-header .nav-tabs {
            padding: 0;
        }


        .nav-tabs {
            border: 0;
            border-radius: 3px;
            padding: 0 15px;
        }

        /* <!---custom25-05-23----> */
        .common_product_technolgy_deals_wrapper {
            border-top: 1px solid silver;
            border-bottom: 1px solid silver;
        }

        .account_benefits_section_wp {
            padding-bottom: 40px;
            padding-top: 40px;
            background: #f7f6f5;

        }

        .featureinfo_title {
            height: 3.4rem;
        }

        .iconbox-icon img {
            width: 150px;
            height: 145px;
            margin: 10px 0px 10px 0px;
            border-radius: 0% !important;
        }

        :root {
            --main-color: #ae0a46;
        }

        .demo {
            background-color: #eee;
        }

        .serviceBox {
            color: var(--main-color);
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 10px 15px 30px;
            /* position: relative; */
            z-index: 1;
        }

        .serviceBox:hover:after {
            background: #880736;
            color: white;
        }

        .main_color {
            background-color: #ae0a46 !important;
            color: white !important;

        }

        .serviceBox:hover::before {
            background: #880736;

        }

        .serviceBox:hover {
            color: white !important;
        }

        .serviceBox:before,
        .serviceBox:after {
            content: "";
            background: linear-gradient(to left bottom, #eee, #fff, #fff);
            border-radius: 15px;
            position: absolute;
            top: 45px;
            left: 15px;
            right: 0px;
            bottom: 4px;
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        .serviceBox:after {
            background: var(--main-color);
            width: 50%;
            height: 50%;
            border-radius: 0 0 20px 0;
            box-shadow: none;
            top: auto;
            left: auto;
            bottom: 0;
            right: 0;
            z-index: -2;
        }

        .serviceBox .service-icon {
            color: var(--main-color);
            background: #fff;
            line-height: 77px;
            width: 80px;
            height: 80px;
            margin: 0 0 30px;
            border-radius: 50px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), 0 0 0 3px var(--main-color);
        }

        .serviceBox .title {
            font-size: 19px;
            font-weight: 600;
            text-transform: capitalize;
            margin: 0 10px 10px;
        }

        .serviceBox .description {
            color: #888;
            font-size: 14px;
            line-height: 22px;
            text-align: justify;
            margin: 0 15px;
        }

        .serviceBox.golden {
            --main-color: #ae0a46;
        }

        .serviceBox.golden:hover {
            --main-color: #880736;
        }

        /* Brand Box */
        .box {
            font-family: 'Signika', sans-serif;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .box:before {
            content: '';
            background: linear-gradient(#ae0a46, #880736);
            height: 100%;
            width: 100%;
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            transition: all 0.5s ease 0s;
        }

        .box:hover:before {
            border-radius: 100% 0 0 0;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
        }

        .box img {
            width: 100px;
            height: 65px;
        }

        .box .box-content {
            color: #fff;
            width: 85%;
            opacity: 0;
            transform: translateX(-50%);
            position: absolute;
            bottom: -20px;
            left: 50%;
            z-index: 2;
            transition: all 0.6s ease;
        }

        .box:hover .box-content {
            opacity: 1;
            bottom: 20px;
        }

        .box .title {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin: 0 0 3px;
        }

        .box .post {
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: block;
        }

        .box .icon {
            padding: 0;
            margin: 0;
            list-style: none;
            right: 0px;
            top: 0px;
        }

        .box .icon li {
            margin: 4px 0;
            transform: scale(0);
            transition: all 0.3s ease 0s;
        }

        .box:hover .icon li {
            transform: scale(1);
        }

        .box .icon li a {
            background-color: rgba(255, 255, 255, 0.2);
            font-size: 15px;
            line-height: 33px;
            width: 33px;
            height: 33px;
            display: block;
            transition: all 0.35s;
        }

        .box .icon li a:hover {
            color: #104627;
            background: #fff;
            box-shadow: 3px 3px 1px rgba(255, 255, 255, .4);
        }

        .iconbox {
            width: 175px;
            background: #ffffff;
            background-color: #ffffff;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 6px 6px;
            text-align: right;
            display: block;
            margin-top: 60px;
            margin-bottom: 15px;
        }

        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }

        @media only screen and (max-width: 1199px) {
            .serviceBox {
                margin: 0 0 30px;
            }
        }

        ul {
            list-style-type: circle;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.8)
        ),url('https://img.freepik.com/free-vector/dark-blue-waves-dots-abstract-background_79603-879.jpg'); background-size: cover">
        <div class="container ">
            <h1>Ready For Shop</h1>
            <p class="text-center text-white">Explore our Products By categories, Brands to see<br> options for hardware,
                software and accessories. </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('shop') }}">Online Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->


    <!--=======Popular products Begin=======-->
    <section class="popular_product_section section_padding">
        <div class="container">
            <div class="software_feature_title">
                <h1 class="text-center">Popular Products</h1>
            </div>
            <div class="Container px-0">
                <h3 class="Head" style="font-size:30px;">
                    <a class="common_button3" href="{{ route('shop') }}">Shop
                        <i class="fa fa-arrow-right mx-2"></i>
                    </a>
                    <span class="Arrows"></span>
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
                                                            style="width: 180px;height: 180px;" alt="{{ $item->name }}">
                                                        <img class="pic-2" src="{{ asset($item->thumbnail) }}"
                                                            style="height: 180px;" alt="{{ $item->name }}">
                                                    </a>

                                                    <ul class="product-links">
                                                        <li><a href="#" data-tip="Quick View" data-bs-toggle="modal"
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
                                                            <p class="text-muted text-center" style="height:25px;">
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
                                                                <form class="" action="{{ route('add.cart') }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="product_id" id="product_id"
                                                                        value="{{ $item->id }}">
                                                                    <input type="hidden" name="name" id="name"
                                                                        value="{{ $item->name }}">
                                                                    <input type="hidden" name="qty" id="qty"
                                                                        value="1">
                                                                    <div data-mdb-toggle="popover" title="Add To Cart Now"
                                                                        data-mdb-content="Add To Cart Now"
                                                                        data-mdb-trigger="hover">
                                                                        <button type="submit"
                                                                            class="common_button effect01">
                                                                            Add to Cart
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="price">
                                                            <p class="text-muted text-center"
                                                                style="text-decoration: line-through;text-decoration-thickness: 2px; text-decoration-color: #ae0a46;">
                                                                USD
                                                                {{ number_format($item->price, 2) }} $
                                                            </p>
                                                            <div class="d-flex justify-content-center align-items-center">


                                                                <div data-mdb-toggle="popover" title="Your Price"
                                                                    data-mdb-content="Your Price" data-mdb-trigger="hover">
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
                @foreach ($products as $item)
                    <!-- Modal -->
                    <div class="modal fade" id="productDetails{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header py-2" style="background: #ae0a46;">
                                    <h5 class="modal-title text-white" id="staticBackdropLabel">Product Details
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <section class="container py-5">
                                        <div class="row">
                                            <!-- images -->
                                            <div class="col-lg-4 col-sm-12 single_product_images">
                                                <!-- gallery pic -->
                                                <div class="mx-auto d-block">
                                                    <img id="expand" class="geeks img-fluid rounded mx-auto d-block"
                                                        src="{{ asset($item->thumbnail) }}">
                                                </div>

                                                {{-- <div class="img_gallery_wrapper row pt-1">
                                                            <div class="col-3">
                                                                <img class="img-fluid"
                                                                    src="{{ asset($item->thumbnail) }}"
                                                                    onclick="gfg(this);">
                                                            </div>
                                                        </div> --}}
                                            </div>
                                            <!-- content -->
                                            <div class="col-lg-8 col-sm-12 pl-4">
                                                <h3>{{ $item->name }}</h3>
                                                {{-- <h6 class="text-dark product_code">SKU #00017-SW-JIR-002 | MF #00017-SW-JIR-002
                                                            | NG #00017-SW-JIR-002
                                                        </h6> --}}
                                                <div class="row pt-3">
                                                    <div class="col-lg-8">
                                                        <p class="list_price mb-0">List
                                                            Price</p>
                                                        <div class="product__details__price ">
                                                            <p class="mb-0">US $
                                                                {{ $item->price }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="stock-info">
                                                            <p tabindex="0" class="prod-stock"
                                                                id="product-avalialability-by-warehouse">
                                                                <span aria-label="Stock Availability"
                                                                    class="js-prod-available">
                                                                    <i class="fa fa-info-circle text-success"></i>
                                                                    Stock</span>
                                                                <br>
                                                                <span class="badge rounded-pill badge-danger"
                                                                    style="font-size:17px">Unlimited</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div>Tech overview</div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="row product_quantity_wraper justify-content-between"
                                                    style="background-color: transparent !important;">
                                                    <form action="http://127.0.0.1:8000/cart_store" method="post">
                                                        <input type="hidden" name="_token"
                                                            value="eEMopK8dBUi3ynpUBOlxSWb9P4zdUl3oQ030waKb">
                                                        <input type="hidden" name="product_id" id="product_id"
                                                            value="62">
                                                        <input type="hidden" name="name" id="name"
                                                            value="Jira Software Cloud Premium - subscription license (annual) - 100 users">
                                                        <div class="row ">
                                                            <div class="col-lg-12 col-sm-12 d-flex align-items-center">
                                                                <div class="pro-qty">
                                                                    <input type="hidden" name="product_id"
                                                                        id="product_id" value="62">
                                                                    <input type="hidden" name="name" id="name"
                                                                        value="Jira Software Cloud Premium - subscription license (annual) - 100 users">
                                                                    <div class="counter">
                                                                        <span class="down"
                                                                            onclick="decreaseCount(event, this)">-</span>
                                                                        <input type="text" name="qty"
                                                                            value="1" class="count_field">
                                                                        <span class="up"
                                                                            onclick="increaseCount(event, this)">+</span>

                                                                    </div>
                                                                </div>
                                                                <button class="common_button2 ms-3" type="submit">Add to
                                                                    Basket</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Quick View Modal End --}}
                    {{-- Ask For Price Modal Modal --}}
                    <!-- Modal -->
                    <div class="modal fade" id="askProductPrice" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-2" style="background: #ae0a46;">
                                    <h5 class="modal-title text-white" id="staticBackdropLabel">Your Price Form
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container px-0">
                                        <form>
                                            <div class="py-2 px-2 bg-light rounded">
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Email</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="email"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Email"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Mobile</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Mobile Number"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">C Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="comapny"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Company Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Quantity </span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="qty"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Quantity"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Product</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="file" name="custom_image"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Product Image"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <span style="font-size: 12px;">Type Message :</span>
                                                                <textarea class="form-control form-control-sm w-100" id="message" name="message" rows="2"
                                                                    placeholder="Enter Your Name"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer me-2" style="padding: 0px;border: 0px;">
                                    <button class="btn btn-sm" style="background: #ae0a46; color: white;"
                                        role="button">Submit</button>
                                    <!-- HTML !-->
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Ask For Price Modal Modal End --}}

                    {{-- Ask For Price Modal --}}
                    <!-- Modal -->
                    <div class="modal fade" id="rfq{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-2" style="background: #ae0a46;">
                                    <h5 class="modal-title text-white" id="staticBackdropLabel">Ask For Price Form
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container px-0">
                                        <form>
                                            <div class="py-2 px-2 rounded">
                                                <div class="row mb-1">
                                                    <h6 class="mb-0"> {{ $item->name }}</h6>
                                                </div>
                                            </div>
                                            <div class="py-2 px-2 bg-light rounded">

                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Email</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="email"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Email"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Mobile</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="name"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Mobile Number"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">C Name</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="comapny"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Company Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Quantity </span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="number" name="qty"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Your Quantity"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div
                                                                class="col-sm-4 d-flex justify-content-between align-items-center">
                                                                <span style="font-size: 12px;">Product</span>
                                                                <span style="font-size: 12px;"> :</span>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="file" name="custom_image"
                                                                    class="form-control form-control-sm w-100"
                                                                    maxlength="100" placeholder="Enter Product Image"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <span style="font-size: 12px;">Type Message :</span>
                                                                <textarea class="form-control form-control-sm w-100" id="message" name="message" rows="2"
                                                                    placeholder="Enter Your Name"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer me-2" style="padding: 0px;border: 0px;">
                                    <button class="btn btn-sm" style="background: #ae0a46; color: white;"
                                        role="button">Submit</button>
                                    <!-- HTML !-->
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Ask For Price Modal End --}}
                @endforeach

            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!--========Shop by category=======-->
    <section class="clint_tab_section my-5">
        <div class="container">
            <div class="clint_tab_content pb-3">
                <!-- home title -->
                <div class="home_title mt-3 mb-3">
                    <div class="software_feature_title">
                        <h1 class="text-center ">By Categories</h1>
                    </div>
                    <p class="home_title_text">See how we’ve helped organizations of all sizes
                        <span class="font-weight-bold">across every industry</span>
                        <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.
                    </p>
                </div>
                <!-- Client Tab Start -->
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background: none;">
                                <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#all"
                                    role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#software"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Software</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#hardware"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Hardware</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#training"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Training & Books</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row">

                                    @if ($all_categories)
                                        @foreach ($all_categories as $item)
                                            <div class="col-md-3 col-sm-6 my-4">
                                                <a href="{{ route('category.html', $item->slug) }}">
                                                    <div class="serviceBox">
                                                        <div class="service-icon">
                                                            <img class="img-fluid"
                                                                src="{{ asset('storage/' . $item->image) }}"
                                                                style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                        </div>
                                                        <p class="">{{ $item->title }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="tab-pane fade show" id="software" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row">

                                    @if ($software_categories)
                                        @foreach ($software_categories as $item)
                                            <div class="col-md-3 col-sm-6 my-4">
                                                <a href="{{ route('category.html', $item->slug) }}">
                                                    <div class="serviceBox">
                                                        <div class="service-icon">
                                                            <img class="img-fluid"
                                                                src="{{ asset('storage/' . $item->image) }}"
                                                                style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                        </div>
                                                        <p class="">{{ $item->title }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="tab-pane fade" id="hardware" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="container">
                                            <div class="row">

                                                @if ($hardware_categories)
                                                    @foreach ($hardware_categories as $item)
                                                        <div class="col-md-3 col-sm-6 my-4">
                                                            <a href="{{ route('category.html', $item->slug) }}">
                                                                <div class="serviceBox">
                                                                    <div class="service-icon">
                                                                        <img class="img-fluid"
                                                                            src="{{ asset('storage/' . $item->image) }}"
                                                                            style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                                    </div>
                                                                    <p class="">{{ $item->title }}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 my-4">
                                        <div class="container">
                                            <div class="row">
                                                @if ($training_categories)
                                                    @foreach ($training_categories as $item)
                                                        <div class="col-md-3 col-sm-6">
                                                            <a href="{{ route('category.html', $item->slug) }}">
                                                                <div class="serviceBox">
                                                                    <div class="service-icon">
                                                                        <img class="img-fluid"
                                                                            src="{{ asset('storage/' . $item->image) }}"
                                                                            alt=""
                                                                            style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                                    </div>
                                                                    <p class="">{{ $item->title }}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Tab End -->
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--======// Our expert //======-->
    <section class="account_benefits_section_wp py-5">
        <div class="container">
            @if ($techglossy)
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}"
                            alt="{{ $techglossy->badge }}" style="height: 300px; border-radius:15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 account_benefits_section">

                        <h4 style="font-size:24px;font-weight:400;">{{ $techglossy->badge }}</h4>
                        <h4 class="pb-2">{{ $techglossy->title }}</h4>
                        <p>{{ $techglossy->header }}</p>

                        <ul>
                            @php
                                $tag = $techglossy->tags;
                                $tags = explode(',', $tag);
                            @endphp
                            @foreach ($tags as $item)
                                <li>{{ ucwords($item) }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('blog.details', $techglossy->id) }}" class="common_button">Read Details</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!---------End -------->
    <!-----Transform your devices----->

    <!--=====Need Help Finding Prodcut======-->
    <section class="need_help_finding_prodcut"
        style="background-image:url('{{ asset('frontend/images/help-background-imges.jpg') }}')">
        <div class="container">
            <h2>Need Help To Find <br> The Right Products?</h2>
            {{-- <h3>Our product selectors and configurators will pinpoint the right item for your organization. These
                easy-to-use Insight Intelligent Technology™ tools let you choose your needs and requirements, and then
                generate the results that are the best match.</h3> --}}
            <div class="d-flex justify-content-center">
                <a href="{{ route('shop') }}" class="finding_product_btn">Explore our configurators</a>
            </div>

        </div>
    </section>
    <!------Need Help Finding End---->

    <!--===== Technolgy Deals======-->
    <section class="common_product_technolgy_deals_wrapper py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('frontend/images/technology-deals.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 technolgy_deals_blog">
                    <h2>Unbeatable technology deals</h2>
                    <p>Explore <a href="{{ route('custom.product', 'deals') }}">deals,</a> <a
                            href="{{ route('custom.product', 'refurbished') }}">refurbished products</a> and limited-time
                        offers. From laptops to cables, accessories and printers, we offer the technology you need at
                        affordable prices — you gain the option of discounted pricing from a variety of brands.</p><br>
                    <a href="{{ route('shop') }}" class="common_button">Shop & Save</a>
                </div>
            </div>
        </div>
    </section>

    <!----Technolgy Deals End---->

    <!--========Shop by Brands=======-->
    <div class="container">
        <div class="home_title mt-3 mb-3">
            <div class="software_feature_title">
                <h1 class="text-center ">By Brands</h1>
            </div>
            <p class="home_title_text">See how we’ve helped organizations of all sizes
                <span class="font-weight-bold">across every industry</span>
                <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh
                experiences.
            </p>
        </div>
        <div class="row mt-5 mb-5">
            @if ($brands)
                @foreach ($brands as $item)
                    @php
                        $brand = App\Models\Admin\Brand::where('id', $item->brand_id)
                            ->select('brands.image', 'brands.title', 'brands.slug')
                            ->first();
                    @endphp
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="iconbox">
                            <div class="iconbox-icon">
                                {{-- <img src="{{ asset('storage/requestImg/' . App\Models\Admin\Brand::where('id', $item->brand_id)->value('image')) }}" --}}
                                <img src="{{ asset('storage/' . $brand->image) }}" alt="" width="70px"
                                    height="50px">
                            </div>
                            <div class="featureinfo">
                                <h4 class="text-center">{{ Str::limit($item->title, 15) }}</h4>
                                <div class="d-flex justify-content-center px-3">
                                    <div class="brand_btns"
                                        style="justify-content: center;
                                    background: #ae0a46;
                                    padding: 7px;
                                    color: white;
                                    font-size: 13px;
                                    display: flex;">
                                        <a class="text-white"
                                            href="{{ route('brandpage.html', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">Details
                                            | </a>
                                        <a class="text-white ms-1"
                                            href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}"><span
                                                class="">Shop</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <img src="{{asset('storage/'.$brand->image)}}" alt="">
                            </div>
                            <div class="featureinfo">
                                <h4 class="text-center featureinfo_title">{{$brand->title}}</h4>
                                <div class="d-flex justify-content-between">

                                    <div>
                                        <a class="btn btn-light p-1 " href="{{route('brandpage.html',$brand->slug)}}" style="font-size: 12px;">Details</a>
                                    </div>
                                    <div>
                                        <a class="btn btn-light p-1 main_color" href="{{route('custom.product',$brand->slug)}}" style="font-size: 12px;">Shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            @endif

        </div>

    </div>
    <!--========Shop by Brands=======-->

    <!--========Page Contact Form=======-->
    @include('frontend.partials.footer_contact')
    <!--========Page Contact Form=======-->

@endsection
