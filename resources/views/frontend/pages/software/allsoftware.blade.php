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
        </style>
    @endif
    <!--======// Header custom-Title //======-->
    <section class="common_product_header"
        style="background-image: url('{{ asset('frontend/images/software_common.jpg') }}');">
        <div class="container ">
            <h1><strong>Softwares for Your Business</strong></h1>
            <p class="text-center text-white" style="font-size: 15px;">Explore our wide selection of software products and
                services <br> created to simplify and improve your business processes </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('software.info') }}">More Details </a>
                    </div>
                    <div class="m-4">
                        <a class="common_button2" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->
    <!--======// Information Section //======-->
    <section>
        <div class="container mt-4">
            <div class="row gx-3">
                <div class="col-lg-8">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 465px;">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="animated-image parbase section">
                                    <div id="solution_image_1">
                                        <img src="https://www.insight.com/content/dam/insight-web/sitesections/solutions/images/ai-generative-hands-keyboard-chatgpt.jpg"
                                            alt="" alt="User talking with AI generated content engine. ChatGPT"
                                            title="Software Information NGENIT" class="img-fluid"
                                            style="background-color: rgb(212,208,202);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3>
                                    <span style="border-top: 3px solid #ae0a46;">G</span>enerative AI
                                </h3>
                                <p class="software-info-paragraph" style="text-align: justify;">
                                    The release of generative AI tools like ChatGPT unlocked new ways for businesses to
                                    increase productivity, grow revenue and gain a competitive edge. We’ll help you adopt
                                    and manage generative AI to enhance employee-led processes and improve automation.
                                </p>
                                <a href="#" class="common_button2 effect02 cool-link">Explore our data solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 465px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://www.insight.com/content/dam/insight-web/sitesections/solutions/icons/goals/software-deployment-icon.png"
                                        alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid #ae0a46;">O</span>perationalize data
                                </h1>
                                <p class="software-info-paragraph" style="text-align: justify;">
                                    Data is the foundation for success — offering real-time insights that can fundamentally
                                    improve operations. Develop an ecosystem that increases data visibility and flexibility.

                                </p>
                                <a href="#" class="common_button2 effect02 cool-link">Explore our data solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-3 mt-3">
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 465px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://www.insight.com/content/dam/insight-web/sitesections/solutions/icons/goals/software-deployment-icon.png"
                                        alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid #ae0a46;">O</span>perationalize data
                                </h1>
                                <p class="software-info-paragraph" style="text-align: justify;">
                                    Data is the foundation for success — offering real-time insights that can fundamentally
                                    improve operations. Develop an ecosystem that increases data visibility and flexibility.

                                </p>
                                <a href="#" class="common_button2 effect02 cool-link">Explore our data solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 465px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://www.insight.com/content/dam/insight-web/sitesections/solutions/icons/goals/software-deployment-icon.png"
                                        alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid #ae0a46;">O</span>perationalize data
                                </h1>
                                <p class="software-info-paragraph" style="text-align: justify;">
                                    Data is the foundation for success — offering real-time insights that can fundamentally
                                    improve operations. Develop an ecosystem that increases data visibility and flexibility.

                                </p>
                                <a href="#" class="common_button2 effect02 cool-link">Explore our data solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-5" style="background-color:#f7f6f5!important; min-height: 465px;">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div>
                                    <img class="pb-4" width="80px"
                                        src="https://www.insight.com/content/dam/insight-web/sitesections/solutions/icons/goals/software-deployment-icon.png"
                                        alt="">
                                </div>
                                <h1 class="software-info-title">
                                    <span style="border-top: 3px solid #ae0a46;">O</span>perationalize data
                                </h1>
                                <p class="software-info-paragraph" style="text-align: justify;">
                                    Data is the foundation for success — offering real-time insights that can fundamentally
                                    improve operations. Develop an ecosystem that increases data visibility and flexibility.

                                </p>
                                <a href="#" class="common_button2 effect02 cool-link">Explore our data solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                                                <button class="common_button effect01 popular_product-button">
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
                                                                <button class="common_button effect01 popular_product-button">
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
    <!---======= Nested Tab ======--->
    <section>
        <div class="container my-5">
            <div class="nasted_tabbar_title py-3">
                <h5>Discover Our Extensive Range of Software Products and Categories</h5>
                <p class="home_title_text">Investigate Our Extensive Selection of Cutting-Edge Software Solutions and
                    Categories</p>
            </div>
            <!-- Tabs with icons on Card -->
            <div style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="card card-nav-tabs p-0 rounded-0 border-0 shadow-lg">
                    <div class="card-header-primary" style="background-color: #ae0a46;">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs row gx-0" data-tabs="tabs">
                                    <li class="nav-item col-lg-3">
                                        <a class="nav-link py-3 active" href="#categories" data-toggle="tab"> Categories
                                        </a>
                                    </li>
                                    <li class="col-lg-3 nav-item">
                                        <a class="nav-link py-3" href="#brand" data-toggle="tab"> Brand </a>
                                    </li>
                                    <li class="col-lg-3 nav-item">
                                        <a class="nav-link py-3" href="#industry" data-toggle="tab"> Industry </a>
                                    </li>
                                    <li class="col-lg-3 nav-item">
                                        <a class="nav-link py-3" href="#solution" data-toggle="tab"> Solution </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-header m-0 shadow-lg">
                        <div class="row gx-0">
                            <div class="col-md-3">
                                <div>
                                    <form action=" ">
                                        <div class="btn_group">
                                            <input type="text" class="form-control" placeholder="Search"
                                                style="height: 41px;">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr class="py-2">
                                                <td class="py-2" width="3.8%">Sl</td>
                                                <td class="py-2" width="85.5%" class="text-left px-2">
                                                    Name
                                                </td>
                                                <td class="py-2" class="text-left">
                                                    Price
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-conten m-0">
                    <div class="tab-pane active" id="categories">
                        <div class="container p-0">
                            <div class="row gx-1">
                                <div class="col-md-3 p-0">
                                    <div class="nav flex-column nav-pills nav-pills-custom bg-white active"
                                        id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        @foreach ($categories as $key => $item)
                                            @if (count($item->subCatsoftwareProducts) > 0)
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
                                    <div class="tab-content p-0" id="v-pills-tabContent">
                                        @foreach ($categories as $key => $item)
                                            @if (count($item->subCatsoftwareProducts) > 0)
                                                <div class="tab-pane fade rounded-0 bg-white {{ $key == 0 ? 'active show' : '' }}"
                                                    id="category-{{ $item->id }}" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">
                                                    <div class="panel">
                                                        {{-- Heading End --}}
                                                        <div class="panel-body table-responsive">
                                                            <div class="table-responsive">
                                                                <table class="table productDT2">
                                                                    <tbody>
                                                                        @foreach ($item->subCatsoftwareProducts as $key => $product)
                                                                            @if ($key === 12)
                                                                            @break
                                                                        @endif
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                {{ ++$key }}
                                                                            </td>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!---------End -------->
<!---======= Category Tab ======--->
<section class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center text-capitalize fw-bold" style="color: #ae0a46;">Explore our Software Related
                Brands.
            </h2>
            <p class="text-center">We partner with top manufacturers to<br> bring you the best Software solutions to
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
                                    ->join('sub_categories', 'products.sub_cat_id', '=', 'sub_categories.id')
                                    ->where('sub_categories.id', '=', $category->id)
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

<section>
    <!--=====// Tech solution //=====-->
    @if (count($tech_datas) > 0)
        <div class="section_wp2">
            <h2 class="text-center text-capitalize fw-bold main_color">Tech solution</h2>
            <p class="text-center pb-4 w-50 mx-auto">We establish strategic partnerships with industry-leading
                manufacturers, ensuring the delivery of superior software solutions meticulously crafted to optimize and
                elevate your business and industry.</p>
            <div class="container">
                @if (!empty($software_info->row_seven_title))
                    <div class="solution_number_wrapper">
                        <!-- title -->
                        @php
                            $sentence2 = $software_info->row_seven_title;
                        @endphp
                        <h5 class="home_title_heading" style="text-align: left;">
                            <div class="software_feature_title">
                                <h1 class="text-center pb-3">
                                    <span>{{ \Illuminate\Support\Str::substr($sentence2, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence2, 1) }}
                                </h1>
                            </div>
                        </h5>
                    </div>
                @endif
                <!-- tech wrapper -->
                <div class="row">
                    <!-- item -->
                    @foreach ($tech_datas as $item)
                        <div class="col-lg-3 col-sm-6">
                            <div class="tech_solution_item">
                                <p class="tech_solution_title">{{ $item->header }}</p>
                                <p class="tech_solution_text">{{ $item->short_description }}</p>
                                <p class="tech_solution_award">{{ $item->footer }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!---------End -------->
</section>
<!--======// our clint tab //======-->
<section class="clint_tab_section">
    <div class="container">
        <div class="clint_tab_content pb-3">
            <!-- home title -->
            <div class="home_title mt-3">
                <div class="software_feature_title">
                    <h1 class="text-center ">Contents</h1>
                </div>
                <p class="home_title_text">Discover how our expertise has benefited organizations of <span
                        class="font-weight-bold">all sizes and industries</span>
                    <br> by maximizing the value of their IT solutions, leveraging emerging technologies, and
                    creating
                    innovative experiences.
                </p>
            </div>
        </div>
    </div>
</section>
<!---------End -------->
<!--=====// We serve //=====-->
<section>
    <div class="container pb-5">
        <!-- section title -->
        <div class="clint_help_section_heading_wrapper">
            <!-- title -->
            <div class="home_title_heading" style="text-align: left;">
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
                    <div class="row gx-2">
                        <!-- item -->
                        @if (!empty($industrys))
                            @foreach ($industrys as $item)
                                <div class="col-lg-3 col-sm-6 mb-2">
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
                    <div class="we_serve_title">
                        <p>Private sector</p>
                    </div>
                    <!-- sidebar list -->
                    <div>
                        @if ($random_industries)
                            @foreach ($random_industries as $item)
                                <div class="pt-2">
                                    <a href="{{ route('industry.details', $item->id) }}">
                                        <div id="fed-bg">
                                            <div class="p-2">
                                                <h5 class="text-white brand_side_text">{{ $item->title }} ›
                                                </h5>
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
    </div>
</section>
<!---------End -------->
<!--=====// Pageform section //=====-->
@include('frontend.partials.footer_contact')
<!---------End -------->
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.productDT0').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0, 1, 2],
            }, ],
        });
        $('.productDT4').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0, 1, 2],
            }, ],
        });
        $('.productDT3').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0, 1, 2],
            }, ],
        });
        $('.productDT2').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0, 1, 2],
            }, ],
        });
    });
</script>
@endsection
