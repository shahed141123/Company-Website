@extends('frontend.master')
@section('content')
    @if (!empty($learnmore->background_image))
        <style>
            .global_call_section::after {
                background: url('{{ asset('storage/' . $learnmore->background_image) }}');
                content: "";
                position: absolute;
                height: 250px;
                background-position: top center;
                background-repeat: no-repeat;
                background-size: cover;
                /* background-attachment: fixed; */
                width: 100%;
                background-color: #cbc4c3;
                top: 16%;
                left: 0px;
                z-index: -1;
            }

            .datatable-header {
                display: none;
            }
        </style>
    @endif
    <style>
        .datatable-header {
            display: none;
        }

        .dataTables_info {
            display: none;
        }

        thead {
            display: none;
        }

        .card .card-header .nav-tabs {
            padding: 0;
        }

        .nav-tabs {
            border: 0;
            border-radius: 3px;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-item .nav-link.active {
            background-color: hsla(0, 0%, 100%, .2);
            transition: background-color .3s .2s;
        }



        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 0;
            border-radius: 3px;
            text-transform: uppercase;
            font-size: 12px;
            border: 0 !important;
            font-weight: 500;
            padding: 27px 25px !important;
            background-color: transparent;
        }

        .nav-pills-custom .nav-link::before {
            display: none;
        }

        .nav-link {
            display: block;
        }

        .nav-tabs .nav-item .material-icons {
            margin: -1px 5px 0 0;
            vertical-align: middle;
        }

        .nav .nav-item {
            position: relative;
        }
    </style>



    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: url('{{ asset('frontend/images/hardware_common.jpg') }}');">
        <div class="container ">
            <h1>Hardware Solution for Business</h1>
            <p class="text-center text-white">Our hardware optimization solutions will help your business <br> run smarter so
                that you can serve your customers more effectively.</p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('contact') }}">Talk with our specialist</a>
                    </div>
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('hardware.info') }}">Details </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--=======// Popular products //======-->
    <section class="popular_product_section section_padding">
        <div class="container">
            <div class="software_feature_title">
                <h1 class="text-center">Random Products</h1>
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
                                                                {{-- <form class="" action="{{ route('add.cart') }}" method="post">
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
                                                                        <button type="button"
                                                                            class="common_button effect01 add_to_cart">
                                                                            Add to Cart
                                                                        </button>
                                                                    </div>
                                                                </form> --}}

                                                                {{-- <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                                                                    <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                                                                    <input type="hidden" name="qty" id="qty" value="1"> --}}
                                                                <div data-mdb-toggle="popover" title="Add To Cart Now"
                                                                    class="cart_button{{ $item->id }}"
                                                                    data-mdb-content="Add To Cart Now"
                                                                    data-mdb-trigger="hover">
                                                                    <button type="button"
                                                                        class="common_button effect01 add_to_cart"
                                                                        data-id="{{ $item->id }}"
                                                                        data-name="{{ $item->name }}" data-quantity="1">
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
                @include('frontend.pages.home.rfq_modal')
            </div>
        </div>
    </section>
    <!---------End -------->
    <!--======// Category Slider //======-->
    <section class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center text-capitalize fw-bold" style="color: #ae0a46;">Explore our Hardware Related
                    Brands.
                </h2>
                <p class="text-center">We partner with top manufacturers to<br> bring you the best Hardware solutions to
                    optimize your business and industry.</p>
            </div>
        </div>
        <div class="row">
            <div class="px-0" style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px">
                <div id="sync2" class="owl-carousel owl-theme">
                    <div class="item">
                        <h1># All Category</h1>
                    </div>
                    @foreach ($categories as $index => $category)
                        <div class="item">
                            <h1>{{ $category->title }}</h1>
                        </div>
                    @endforeach

                </div>

                <div id="sync1" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row gx-0">
                            @foreach ($brands as $brand)
                                <div class="col-lg-3 col-md-2 col-sm-4">
                                    <div class="ag-offer_item"
                                        style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                                        <div class="ag-offer_visible-item">
                                            <div class="ag-offer_img-box d-felx justify-content-center mx-auto">
                                                <img src="{{ asset('storage/' . $brand->image) }}" class="ag-offer_img"
                                                    alt="{{ $brand->title }}" width="150px" height="150px" />
                                            </div>
                                        </div>
                                        <div class="ag-offer_hidden-item">
                                            <div class="mx-auto">
                                                <div class="brand_btns"
                                                    style="justify-content: center;background: #ae0a46;padding: 7px;color: white;font-size: 16px;display: flex;">
                                                    <a class="text-white"
                                                        href="{{ route('brandpage.html', $brand->slug) }}">Details
                                                        | </a>
                                                    <a class="text-white ms-1"
                                                        href="{{ route('custom.product', $brand->slug) }}"><span>Shop</span>
                                                    </a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12 col-md-12 col-sm-12 text-end mt-2 px-4"
                                style="padding-top: 1rem; color: #ae0a46;">
                                <a class="text-site" href="{{ route('all.brand') }}">See
                                    More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @foreach ($categories as $index => $category)
                        <div class="item">
                            <div class="row gx-0">
                                @php
                                    $related_brands = DB::table('brands')
                                        ->join('products', 'brands.id', '=', 'products.brand_id')
                                        ->join('categories', 'products.cat_id', '=', 'categories.id')
                                        ->where('categories.id', '=', $category->id)
                                        ->select('brands.id', 'brands.title', 'brands.image', 'brands.slug')
                                        ->distinct()
                                        ->paginate(12);
                                @endphp
                                @foreach ($related_brands as $related_brand)
                                    <div class="col-lg-3 col-md-2 col-sm-4">
                                        <div class="ag-offer_item"
                                            style="border: 1px dotted rgb(179, 179, 179); margin: 0.15rem!important;">
                                            <div class="ag-offer_visible-item">
                                                <div class="ag-offer_img-box d-felx justify-content-center mx-auto">
                                                    <img src="{{ asset('storage/' . $related_brand->image) }}"
                                                        class="ag-offer_img" alt="{{ $related_brand->title }}"
                                                        width="150px" height="150px" />
                                                </div>
                                            </div>
                                            <div class="ag-offer_hidden-item">
                                                <div class="mx-auto">
                                                    <div class="brand_btns"
                                                        style="justify-content: center;background: #ae0a46;padding: 7px;color: white;font-size: 16px;display: flex;">
                                                        <a class="text-white"
                                                            href="{{ route('brandpage.html', $related_brand->slug) }}">Details
                                                            | </a>
                                                        <a class="text-white ms-1"
                                                            href="{{ route('custom.product', $related_brand->slug) }}"><span>Shop</span>
                                                        </a>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12 col-md-12 col-sm-12 text-end mt-2 px-4"
                                    style="padding-top: 1rem; color: #ae0a46;">
                                    <a class="text-site" href="{{ route('category.html', $category->slug) }}">See
                                        More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>




    <!--======// Nasted tab //======-->
    <div class="container">
        <div class="nasted_tabbar_title py-3">
            <h5>Explore our hardware solution for your Businesses.</h5>
            <p class="home_title_text">We partner with top manufacturers to bring you the best hardware solutions to
                optimize your business and industry.</p>
        </div>
        <div class="card card-nav-tabs p-0 rounded-0">
            <div class="card-header-primary" style="background-color: #ae0a46;">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs row gx-0" data-tabs="tabs">
                            <li class="nav-item col-lg-3">
                                <a class="nav-link py-3 active" href="#categories" data-toggle="tab">
                                    Categories
                                </a>
                            </li>
                            <li class="col-lg-3 nav-item">
                                <a class="nav-link py-3" href="#brand" data-toggle="tab">
                                    Brand
                                </a>
                            </li>
                            <li class="col-lg-3 nav-item">
                                <a class="nav-link py-3" href="#industry" data-toggle="tab">
                                    Industry
                                </a>
                            </li>
                            <li class="col-lg-3 nav-item">
                                <a class="nav-link py-3" href="#solution" data-toggle="tab">
                                    Solution
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="tab-content">
                    <div class="tab-pane active" id="categories">
                        {{-- Categories Sub Tab --}}
                        <section>
                            <div class="container p-0">
                                <div class="row gx-0">
                                    <div class="col-md-3">
                                        <!-- Tabs nav -->
                                        <div class="nav flex-column nav-pills nav-pills-custom bg-white active"
                                            id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            @foreach ($categories as $key => $item)
                                                @if (count($item->subCathardwareProducts) > 0)
                                                    <a class="nav-link dicover_tab_sub rounded-0 {{ $key == 0 ? 'active' : '' }}"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#category-{{ $item->id }}" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">
                                                        <span
                                                            class="font-weight-bold small text-uppercase text-start">{{ $item->title }}</span>
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <!-- Tabs content -->
                                        <div class="tab-content p-0" id="v-pills-tabContent">
                                            @foreach ($categories as $key => $item)
                                                @if (count($item->subCathardwareProducts) > 0)
                                                    <div class="tab-pane fade p-2 rounded-0 bg-white {{ $key == 0 ? 'active show' : '' }}"
                                                        id="category-{{ $item->id }}" role="tabpanel"
                                                        aria-labelledby="v-pills-profile-tab">
                                                        <div class="panel">
                                                            <div class="panel-heading">
                                                                <div
                                                                    class="row p-0 d-flex justify-content-center align-items-center">
                                                                    <div class="col-lg-9">
                                                                    </div>
                                                                    <div class="col-lg-3 text-right">
                                                                        <form action=" ">
                                                                            <div class="btn_group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Search">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body table-responsive">
                                                                <div id="product-table">
                                                                    <table class="table productDT">
                                                                        <tbody>
                                                                            @foreach ($item->subCathardwareProducts as $key => $product)
                                                                                @if ($key === 12)
                                                                                @break
                                                                            @endif
                                                                            <tr>
                                                                                <td>{{ ++$key }}</td>
                                                                                <td class="text-left px-2">
                                                                                    <a
                                                                                        href="{{ route('product.details', $product->slug) }}">{{ Str::limit($product->name, 70) }}</a>
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <small
                                                                                        style="font-size:8px;">USD</small>
                                                                                    <strong>${{ number_format($product->price, 2) }}</strong>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane" id="brand">
                    {{-- Brand Sub Tab --}}
                    <section>
                        <div class="container p-0">
                            <div class="row gx-0">
                                <div class="col-md-3">
                                    <!-- Tabs nav -->
                                    <div class="nav flex-column nav-pills nav-pills-custom bg-white active"
                                        id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        @foreach ($brands as $key => $item)
                                            @if (count($item->brandhardwareProducts) > 0)
                                                <a class="nav-link dicover_tab_sub rounded-0 {{ $key == 0 ? 'active' : '' }}"
                                                    id="v-pills-home-tab" data-toggle="pill"
                                                    href="#category-{{ $item->id }}" role="tab"
                                                    aria-controls="v-pills-home" aria-selected="true">
                                                    <span
                                                        class="font-weight-bold small text-uppercase text-start">{{ $item->title }}</span>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-9 p-0">
                                    <!-- Tabs content -->
                                    <div class="tab-content p-0" id="v-pills-tabContent">
                                        @foreach ($brands as $key => $item)
                                            @if (count($item->brandhardwareProducts) > 0)
                                                <div class="tab-pane fade p-2 rounded-0 bg-white {{ $key == 0 ? 'active show' : '' }}"
                                                    id="category-{{ $item->id }}" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <div
                                                                class="row p-0 d-flex justify-content-center align-items-center">
                                                                <div class="col-lg-9">
                                                                </div>
                                                                <div class="col-lg-3 text-right">
                                                                    <form action=" ">
                                                                        <div class="btn_group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body table-responsive">
                                                            <div id="product-table">
                                                                <table class="table productDT">
                                                                    <tbody>
                                                                        @foreach ($item->brandhardwareProducts as $key => $product)
                                                                        @if ($key === 12)
                                                                                    @break
                                                                                @endif
                                                                            <tr>
                                                                                <td>{{ ++$key }}</td>
                                                                                <td class="text-left px-2">
                                                                                    <a
                                                                                        href="{{ route('product.details', $product->slug) }}">{{ Str::limit($product->name, 70) }}</a>
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <small
                                                                                        style="font-size:8px;">USD</small>
                                                                                    <strong>${{ number_format($product->price, 2) }}</strong>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane" id="industry">
                    {{-- Industry Sub Tab --}}
                    <section>
                        <div class="container p-0">
                            <div class="row gx-0">
                                <div class="col-md-3">
                                    <!-- Tabs nav -->
                                    <div class="nav flex-column nav-pills nav-pills-custom bg-white" id="v-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        @foreach ($industrys as $indkey => $item)
                                            <a class="nav-link dicover_tab_sub rounded-0 {{ $indkey === 0 ? 'active' : '' }}"
                                                id="v-pills-home-tab" data-toggle="pill"
                                                href="#industry-{{ $item->id }}" role="tab"
                                                aria-controls="v-pills-home" aria-selected="true">
                                                <span
                                                    class="font-weight-bold small text-uppercase">{{ $item->title }}
                                                </span>
                                            </a>
                                        @endforeach


                                    </div>
                                </div>
                                <div class="col-md-9 p-0">
                                    <!-- Tabs content -->
                                    <div class="tab-content p-0" id="v-pills-tabContent">
                                        @foreach ($industrys as $indkey => $item)
                                            @php
                                                $product_ids = App\Models\Admin\MultiIndustry::where('industry_id', $item->id)->pluck('product_id');

                                                $industry_products = App\Models\Admin\Product::whereIn('id', $product_ids)
                                                    ->where('product_status', 'product')
                                                    ->where('product_type', 'hardware')
                                                    ->limit(12)
                                                    ->get(['id', 'name', 'price', 'slug']);
                                                $industry_product_count = count($industry_products);
                                            @endphp
                                            {{-- @if ($industry_product_count > 0) --}}
                                            <div class="tab-pane fade rounded-0 p-2 bg-white {{ $indkey === 0 ? 'active show' : '' }}"
                                                id="industry-{{ $item->id }}" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab">
                                                <div class="panel">
                                                    <div class="panel-heading pt-2">
                                                        <div
                                                            class="row p-0 d-flex justify-content-center align-items-center">
                                                            <div class="col-lg-9">

                                                            </div>
                                                            <div class="col-lg-3 text-right">
                                                                <form action=" ">
                                                                    <div class="btn_group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel-body table-responsive">
                                                        <div id="product-table">
                                                            <table class="table productDT">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="5%">Sl</th>
                                                                        <th width="77%">Product Name
                                                                        </th>
                                                                        <th width="18%">Price</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @if ($industry_product_count > 0)
                                                                        @foreach ($industry_products as $key => $item)
                                                                            <tr>
                                                                                <td>{{ ++$key }}
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <a
                                                                                        href="{{ route('product.details', $item->slug) }}">
                                                                                        {{ Str::limit($item->name, 80) }}
                                                                                    </a>
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <small
                                                                                        style="font-size:8px;">USD</small>
                                                                                    <strong>$
                                                                                        {{ number_format($item->price, 2) }}</strong>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @else
                                                                        <tr>
                                                                            <h6 class="text-cnter">No Product Available
                                                                            </h6>
                                                                        </tr>
                                                                    @endif

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @else --}}

                                            {{-- @endif --}}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane" id="solution">
                    {{-- Solution Sub Tab --}}
                    <section>
                        <div class="container p-0">
                            <div class="row gx-0">
                                <div class="col-md-3">
                                    <!-- Tabs nav -->
                                    <div class="nav flex-column nav-pills nav-pills-custom bg-white" id="v-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        @foreach ($solutions as $solkey => $item)
                                            @php
                                                $solution_products = $item->solutionhardwareProducts; // Eager load the associated products with product_status and product_type filters applied
                                                $solution_product_count = count($solution_products);
                                            @endphp


                                            <a class="nav-link dicover_tab_sub rounded-0 {{ $solkey === 0 ? 'active' : '' }}"
                                                id="v-pills-home-tab" data-toggle="pill"
                                                href="#solution-{{ $item->id }}" role="tab"
                                                aria-controls="v-pills-home" aria-selected="true">
                                                <span
                                                    class="font-weight-bold small text-uppercase">{{ $item->name }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-9 p-0">
                                    <!-- Tabs content -->
                                    <div class="tab-content p-0" id="v-pills-tabContent">
                                        @foreach ($solutions as $solkey => $item)
                                            {{-- @if ($solution_product_count > 0) --}}
                                            <div class="tab-pane fade rounded-0 p-2 bg-white {{ $solkey === 0 ? 'active show' : '' }}"
                                                id="solution-{{ $item->id }}" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab">
                                                <div class="panel">
                                                    <div class="panel">
                                                        <div class="panel-heading pt-2">
                                                            <div
                                                                class="row p-0 d-flex justify-content-center align-items-center">
                                                                <div class="col-lg-9">

                                                                </div>
                                                                <div class="col-lg-3 text-right">
                                                                    <form action=" ">
                                                                        <div class="btn_group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel-body table-responsive">
                                                            <div id="product-table">
                                                                <table class="table productDT">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="5%">Sl</th>
                                                                            <th width="77%">Product Name</th>
                                                                            <th width="18%">Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        @if ($solution_product_count > 0)
                                                                            @foreach ($solution_products as $key => $item)
                                                                                @if ($key === 12)
                                                                                    @break
                                                                                @endif
                                                                                <tr>
                                                                                    <td>{{ ++$key }}
                                                                                    </td>
                                                                                    <td class="text-left">
                                                                                        <a
                                                                                            href="{{ route('product.details', $item->slug) }}">
                                                                                            {{ Str::limit($item->name, 80) }}
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-left">
                                                                                        <small
                                                                                            style="font-size:8px;">USD</small>
                                                                                        <strong>$
                                                                                            {{ number_format($item->price, 2) }}</strong>
                                                                                    </td>

                                                                                </tr>
                                                                            @endforeach
                                                                        @else
                                                                            <tr>
                                                                                <h6 class="text-cnter">No Product
                                                                                    Available</h6>
                                                                            </tr>
                                                                        @endif

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @endif --}}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="container mt-5 mb-5">
    <div class="software_feature_title pb-3">
        <h1 class="text-center ">Our Expertise in Hardware</h1>
    </div>
    <div class="row d-flex justify-content-start align-items-center">
        <div class="col-lg-6 col-sm-6">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/dnoRa83hy8w?autoplay=1&mute=1"
                title="Our Expertise" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture; camera; microphone; display-capture" allowfullscreen
                allowtransparency="true" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="home_title">
                <h5 class="home_title_heading" style="text-align: left;"> Innovation, quality and satisfaction are our
                    aim</h5>
                <p class="home_title_text" style="text-align: left;">ecom Instruments is an innovative company that is
                    characterized by its integrity, professionalism, high levels of expertise and reliability in
                    realizing demanding projects in the field of a rugged environment. Ensuring maximum quality in
                    development, production and service is our way of maintaining our promise to you - the best possible
                    safety for your everyday operations!
                </p>
                <div class="business_seftion_button d-flex justify-content-start">
                    <button class="common_button2" href="{{ route('contact') }}">Talk to a specialist</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------End -------->
<!--======// our clint tab //======-->
<section class="clint_tab_section">
    <div class="container">
        <div class="clint_tab_content pb-3">
            <!-- home title -->
            <div class="home_title mt-3">
                <div class="software_feature_title">
                    <h1 class="text-center ">Contents</h1>
                </div>
                <p class="home_title_text">See how we’ve helped organizations of all sizes <span
                        class="font-weight-bold">across every industry</span>
                    <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh
                    experiences.inde
                </p>
            </div>
            <!-- Client Tab Start -->
            @if (!empty($story1) && !empty($story2) && !empty($story3))
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                    aria-selected="true">{{ $story1->badge }}</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">{{ $story2->badge }}</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">{{ $story3->badge }}</a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about"
                                    aria-selected="false">{{ $story4->badge }}</a>
                            </div>
                        </nav>
                        @php
                            $tags_1 = explode(',', $story1->tags);
                            $tags_2 = explode(',', $story2->tags);
                            $tags_3 = explode(',', $story3->tags);
                            $tags_4 = explode(',', $story4->tags);
                        @endphp
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image">
                                            <img src="{{ asset('storage/' . $story1->image) }}" alt=""
                                                style="height: 230px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story1->title }}
                                        </h5>
                                        <p>{{ $story1->header }}</p>
                                        <div class="home_card_button p-2">
                                            <a class="effect01" href="{{ route('blog.details', $story1->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image">
                                            <img src="{{ asset('storage/' . $story2->image) }}" alt=""
                                                style="height: 230px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story2->title }}
                                        </h5>
                                        <p>{{ $story2->header }}</p>
                                        <div class="home_card_button p-2">
                                            <a class="effect01" href="{{ route('blog.details', $story2->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image">
                                            <img src="{{ asset('storage/' . $story3->image) }}" alt=""
                                                style="height: 230px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story3->title }}
                                        </h5>
                                        <p>{{ $story3->header }}</p>
                                        <div class="home_card_button p-2">
                                            <a class="effect01" href="{{ route('story.details', $story3->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image">
                                            <img src="{{ asset('storage/' . $story4->image) }}" alt=""
                                                style="height: 230px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story4->title }}
                                        </h5>
                                        <p>{{ $story4->header }}</p>
                                        <div class="home_card_button p-2">
                                            <a class="effect01" href="{{ route('story.details', $story4->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- Client Tab End -->
        </div>
    </div>
</section>
<!---------End -------->
<!--=====// Global call section //=====-->
@if (!empty($learnmore))
    <section class="global_call_section section_padding">
        <div class="container">
            <!-- content -->
            @php
                $sentence = $learnmore->consult_title;
            @endphp
            <div class="global_call_section_content mt-0">
                <div class="home_title" style="width: 100%; margin: 0px;">
                    <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                        <span>{{ \Illuminate\Support\Str::substr($sentence, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence, 1) }}
                    </h5>
                    <p class="home_title_text text-white" style="text-align: left;">
                        {{ $learnmore->consult_short_des }}
                    </p>
                    <div class="business_seftion_button" style="text-align: left;">
                        <a href="{{ route('whatwedo') }}">Explore our Business</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!---------End -------->
<!--=====// Tech solution //=====-->
<div class="section_wp2">
    <div class="container">
        <div class="solution_number_wrapper">
            <!-- title -->
            <h5 class="home_title_heading" style="text-align: left;">
                <div class="software_feature_title">
                    <h1 class="text-center pb-3">
                        <span>T</span>echnology Solutions
                    </h1>
                </div>
            </h5>
        </div>
        <!-- tech wrapper -->
        <div class="row">
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">33k+</p>
                    <p class="tech_solution_text">hardware, software & cloud partners</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">44k+</p>
                    <p class="tech_solution_text">Ngen It teammates worldwide</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">7.5k+</p>
                    <p class="tech_solution_text">sales & service delivery professionals</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">19</p>
                    <p class="tech_solution_text">countries with Ngen It operations</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">Top 1%</p>
                    <p class="tech_solution_text">Ngen It is in the top 1% of all Microsoft partners</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">#1</p>
                    <p class="tech_solution_text">on the Channel Futures MSP 501</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">#7</p>
                    <p class="tech_solution_text">on Fortune World’s Most Admired Companies for IT services</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">#373</p>
                    <p class="tech_solution_text">on the Fortune 500</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------End -------->
<!--=====// We serve //=====-->
<div class="container py-3">
    <!-- section title -->
    <div class="clint_help_section_heading_wrapper">
        <!-- title -->
        <h5 class="home_title_heading" style="text-align: left;">
            <h5 class="home_title_heading" style="text-align: left;">
                <div class="software_feature_title">
                    <h1 class="text-center pt-4 pb-4">
                        Industries We Serve
                    </h1>
                </div>
            </h5>
            @if (!empty($learnmore->industry_header))
                <p class="home_title_text">
                    <span class="font-weight-bold">{{ $learnmore->industry_header }} </span>
                </p>
            @endif
    </div>
    <!-- section content wrapper -->
    <div class="row mb-4">
        <!-- content -->
        <div class="col-lg-9 col-sm-12">
            <!-- we_serveItem_wrapper -->
            <div class="row">
                <!-- item -->
                @if (!empty($industrys))
                    @foreach ($industrys as $item)
                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ route('industry.details', $item->id) }}" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="{{ asset('storage/' . $item->logo) }}" alt="">
                                </div>
                                <div class="we_serve_item_text">{{ $item->title }}</div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- sidebar -->
        <div class="col-lg-3 col-sm-12">
            <!-- sidebar list -->
            <div>
                @if ($random_industries)
                    @foreach ($random_industries as $item)
                        <div class="pt-2">
                            <a href="{{ route('industry.details', $item->id) }}">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h5 class="text-white brand_side_text">{{ $item->title }} ›</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</div>
<!--=====// Pageform section //=====-->
@include('frontend.partials.footer_contact')
<!---------End -------->
@endsection


@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.productDT').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0, 1, 2],
            }, ],
        });
    });
    // $('.slider_hardware').slick({
    //     slidesToShow: 1,
    //     centerMode: true,
    //     centerPadding: "15%",
    //     speed: 500
    // });
    // $(document).ready(function() {});
</script>
@endsection
