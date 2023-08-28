@extends('frontend.master')

@section('content')
    <style>
        .counter span {
            display: block;
            margin-top: -27px;
            font-size: 25px;
            padding: 0 10px;
            cursor: pointer;
            color: #d51a5f;
            user-select: none;
        }

        .card {
            margin: auto;
            max-width: 1100px;
            width: 100%;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 1rem;
            border: transparent;
        }

        @media(max-width:767px) {
            .card {
                margin: 3vh auto;
            }
        }

        .cart {
            background-color: #fff;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
            padding: 0px;
        }

        @media(max-width:767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem;
            }
        }

        .summary {
            background-color: #f5f5f5;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 2vh;
            color: rgb(65, 65, 65);
        }

        @media(max-width:767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem;
            }
        }

        .summary .col-2 {
            padding: 0;
        }

        .summary .col-10 {
            padding: 0;
        }

        .row {
            margin: 0;
        }

        .title {
            padding: 10px;
            border-top-left-radius: 0.85rem;

        }

        .title b {
            font-size: 1.5rem;
            color: #fff !important;
        }

        .main {
            margin: 0;
            padding: 2vh 0;
            width: 100%;
        }

        .col-2,
        .col {
            padding: 0 1vh;
        }

        a {
            padding: 0;
        }

        .close {
            margin-left: auto;
            font-size: 0.7rem;
        }

        /* img {
            width: 3.5rem;
        } */

        .back-to-shop {
            margin-right: 1rem;
            margin-top: 1rem;
        }

        hr {
            margin-top: 1.25rem;
        }

        form {
            padding: 0.1vh 0;
        }

        select {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1.5vh 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            background-color: #ae0a46 !important;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none;
        }

        .btn:hover {
            color: white;
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        #code {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }
    </style>

    <!--======// Header Title //======-->
    <section class="common_product_header p-0"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.8)
        ),url('https://tapcom-live.ams3.cdn.digitaloceanspaces.com/media/cache/bb/74/bb749b579a0f712fb8ab4065645e8918.jpg');">
        <div class="container ">
            <h1>My Cart</h1>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('contact') }}">Talk to a Specialist</a>
                    </div>
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('shop') }}">Check Our Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    {{-- Cart Section Start --}}
    <div class="card mt-4 mb-4">
        <div class="row cart_product">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-white fw-bold"></div>
                    </div>
                </div>
                {{-- Header Title --}}
                <div class="row border-top px-3">
                    <div class="table-responsive main align-items-center">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th width="18%">Product</th>
                                    <th width="25%">Item Name</th>
                                    <th width="15%">Unit Price</th>
                                    <th width="17%">QTY</th>
                                    <th width="15%">Unit Total</th>
                                    <th width="10%">
                                        {{-- <form method="get" action="{{ route('cart.destroy') }}"> --}}
                                        <a href="javascript:void(0);" class="text-danger" onClick='emptyCart(event)'>Empty
                                            Cart</a>
                                        {{-- </form> --}}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart_details as $item)
                                    @php
                                        $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                    @endphp
                                    <tr class="text-center">
                                        <td style="vertical-align: middle;">
                                            <img class="img-fluid"
                                                src="{{ $item->options->has('image') ? $item->options->image : '' }}"
                                                alt="{{ $item->name }}">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <a class="text-primary" href="{{ route('product.details', $slug) }}"
                                                title="{{ $item->name }}">
                                                {{ Str::limit($item->name, 22) }}
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">$ {{ number_format($item->price, 2) }}</td>
                                        <td style="vertical-align: middle;">
                                            <form class="myForm">
                                                <input type="hidden" id="price" name="price"
                                                    value="{{ $item->price }}">
                                                <div class="pro-qty mb-2" style="width: 5.5rem">
                                                    <div class="counter" style="width: 2rem">
                                                        <input name="rowID" type="hidden" id="rowID"
                                                            value="{{ $item->rowId }}">
                                                        <span class="down" id="{{ $item->rowId }}"
                                                            onClick='decreaseCount(event, this, this.id)'>-</span>
                                                        <input type="text" name="qty" value="{{ $item->qty }}"
                                                            style="width: 1.5rem;" readonly>
                                                        <span class="up" id="{{ $item->rowId }}"
                                                            onClick='increaseCount(event, this, this.id)'>+</span>
                                                    </div>
                                                </div>
                                                {{-- <a href="javascript:void(0);" class="common_button2 p-1 mt-1" id="update">Update</a> --}}
                                            </form>
                                        </td>
                                        <td style="vertical-align: middle;">$
                                            {{ number_format($item->price * $item->qty, 2) }}</td>
                                        <td style="vertical-align: middle;">
                                            <a href="javascript:void();" class="text-danger" id="{{ $item->rowId }}"
                                                onClick='deleteRow(event, this, this.id)'>
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Header Title End --}}
                <div class="d-flex justify-content-end  mb-2">
                    <div class="back-to-shop">
                        <a href="{{ route('shop') }}">&leftarrow; <span class="text-danger fw-bold"
                                style="font-size: 16px">Back to
                                shop</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5 class="text-center"><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">Sub Total</div>
                    <div class="col text-right">$ {{ number_format(Cart::subtotal(), 2) }}</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Tax Estimate</div>
                    <div class="col text-right">$ 0.00</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Shipping Cost</div>
                    <div class="col text-right">$ 0.00</div>
                </div>
                <hr>
                <div class="row" style=" padding: 1vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">$ {{ number_format(Cart::total(), 2) }}</div>
                </div>
                <div class="d-flex justify-content-center pt-5">
                    <a href="{{ route('checkout') }}" class="btn product_btn">CHECKOUT</a>
                </div>
            </div>
        </div>

    </div>
    <!--=======// Popular products //======-->

    @if (count($products) > 0)
        <section>
            <div class="container">
                <div class="Container mt-5 px-0">
                    <h3 class="Head" style="font-size:30px;">Related Products <span class="Arrows"></span></h3>
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
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center">
                                                                    <form class="" action="{{ route('add.cart') }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id"
                                                                            id="product_id" value="{{ $item->id }}">
                                                                        <input type="hidden" name="name"
                                                                            id="name" value="{{ $item->name }}">
                                                                        <input type="hidden" name="qty"
                                                                            id="qty" value="1">
                                                                        <div data-mdb-toggle="popover"
                                                                            title="Add To Cart Now"
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
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center">


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
                    @foreach ($products as $item)
                        <!-- Modal -->
                        <div class="modal fade" id="productDetails{{ $item->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header py-2" style="background: #ae0a46;">
                                        <h5 class="modal-title text-white" id="staticBackdropLabel">Product Details
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section class="container py-5 pb-0">
                                            <div class="row">
                                                <!-- images -->
                                                <div class="col-lg-4 col-sm-12 single_product_images">
                                                    <!-- gallery pic -->
                                                    <div class="mx-auto d-block">
                                                        <img id="expand"
                                                            class="geeks img-fluid rounded mx-auto d-block"
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
                                                                        <input type="hidden" name="name"
                                                                            id="name"
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
                                                                    <button class="common_button2 ms-3" type="submit">Add to Basket</button>
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
    @endif
    <!---------End -------->
    {{-- Cart Section end --}}
@endsection


@section('scripts')
    <script>
        if ($('#checkout').val() == 0) {
            $('#work').hide();
        }
    </script>

    <script>
        var buttonAdd = document.querySelectorAll('.cart_input')
        var cartUpdateBtn = document.querySelectorAll('.update_button')
        cartUpdateBtn.forEach(element => {
            element.style.cssText = 'all:unset;display:block;cursor:pointer'
        });
    </script>


    <script>
        //----- Quantity
        function increaseCount(a, b, c) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            var cartContainer = $('.cart_product');
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
            let form = $(this).closest('.myForm');
            var rowId = c;
            $.ajax({
                type: 'GET',
                url: "cart-increment/" + rowId,
                //url: route(routeName, { rowId }),
                dataType: 'json',
                success: function(data) {
                    toastr.success('Successfully Updated Your Cart');
                    cartContainer.empty(data);
                    cartContainer.html(data);
                    // window.location.reload();
                }
            });


        }

        // ---------- END CART INCREMENT -----///



        // -------- CART Decrement  --------//

        function decreaseCount(a, b, c) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }

            var form = $(this).closest('.myForm');
            // var rowId = form.find("input[name=rowID]").val();
            var rowId = c;
            var cartContainer = $('.cart_product');
            $.ajax({
                type: 'GET',
                url: "cart-decrement/" + rowId,
                dataType: 'json',
                success: function(data) {
                    toastr.success('Successfully Updated Your Cart');
                    cartContainer.empty(data);
                    cartContainer.html(data);
                }
            });
        }
        // Cart Remove start
        function deleteRow(a, b, c) {

            var form = $(this).closest('.myForm');
            // var rowId = form.find("input[name=rowID]").val();
            var rowId = c;
            var cartContainer = $('.cart_product');
            $.ajax({
                type: 'GET',
                url: "cart-remove/" + rowId,
                dataType: 'json',
                success: function(data) {
                    toastr.success('Successfully Updated Your Cart');
                    cartContainer.empty(data);
                    cartContainer.html(data);
                }
            });
        }
        function emptyCart(event) {

            var form = $(this).closest('.myForm');
            var cartContainer = $('.cart_product');
            $.ajax({
                type: 'GET',
                url: "{{route('cart.destroy')}}",
                dataType: 'json',
                success: function(data) {
                    toastr.warning('Successfully empty Your Cart');
                    cartContainer.empty(data);
                    cartContainer.html(data);
                }
            });
        }



        // Cart Remove End
    </script>
@endsection
