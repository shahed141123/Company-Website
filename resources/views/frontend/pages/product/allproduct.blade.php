@extends('frontend.master')
@section('content')
@include('frontend.pages.product.partials.filtering_style')


@if (!empty($bannerImage))
<section>
    <div>
        <img class="page_top_banner"
            src="{{ !empty($bannerImage) && file_exists(public_path('storage/' . $bannerImage)) ? asset('storage/' . $bannerImage) : asset('frontend/images/no-banner(1920-330).png') }}"
            alt="NGEN IT Shop">
    </div>
</section>
@else
<section class="banner_single_page mb-4" style="background-image:url('{{ asset('frontend/images/custom_shop.jpg') }}');
        background-color: black;
        background-repeat: no-repeat;
        background-size: cover;
        height:300px;">

    <div class="container">
        <div class="single_banner_content">
            <!-- image -->
            <div class="single_banner_image text-center">
                <img src="{{ asset('storage/' . $cat->image) }}" alt="" height="130px" width="150px"
                    style="margin-top:4rem;">
            </div>
            <!-- heading -->
            <h1 class="single_banner_heading text-center text-white">{{ $cat->title }}</h1>

        </div>
    </div>
</section>
@endif

<section class="header d-lg-block d-sm-none mt-2" id="myHeader">
    <div class="brand-page-header-container container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-sm-6">
                <div>
                    {{-- <img id="stand-logo" class="img-fluid" height=""
                        src="{{ !empty($brand_logo) && file_exists(public_path('storage/' . $brand_logo)) ? asset('storage/' . $brand_logo) : asset('frontend/images/no-banner(1920-330).png') }}"
                        alt="{{ $cat->title }} - logo"> --}}
                    <img id="stand-logo" class="img-fluid" src="https://i.ibb.co/jTykrMy/Apple-Logo.png" alt="">
                </div>
            </div>

            <div class="col-lg-10 col-sm-12">
                <div class="d-flex justify-content-end">
                    {{-- Show Default Dropdown --}}
                    <div class="dropdown pe-3">
                        <button class="border-0 bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Show <i class="fas fa-caret-down rotate-icon text-muted"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    {{-- Sort By Dropdown --}}
                    <div class="dropdown pe-3">
                        <button class="border-0 bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By <i class="fas fa-caret-down rotate-icon text-muted"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-lg-block d-sm-none">
                <div>
                    <div class="accordion shadow-none my-4" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="category">
                                <button class="accordion-button py-3 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#category" aria-expanded="false" aria-controls="category">
                                    Categories
                                </button>
                            </h2>
                            <div id="category" class="accordion-collapse collapse" aria-labelledby="category"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body p-2">
                                    <div>
                                        <div class="categories-check pt-2">
                                            <label class="control control--checkbox">
                                                Software & License
                                                <input type="checkbox" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                        <div class="categories-check pt-2">
                                            <label class="control control--checkbox">
                                                License
                                                <input type="checkbox" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                        <div class="categories-check pt-2">
                                            <label class="control control--checkbox">
                                                Software
                                                <input type="checkbox" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="manufacturers">
                                <button class="accordion-button py-3 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#manufacturers" aria-expanded="false" aria-controls="manufacturers">
                                    Manufacturers
                                </button>
                            </h2>
                            <div id="manufacturers" class="accordion-collapse collapse" aria-labelledby="manufacturers"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body p-2">
                                    asdasd
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="price-range">
                                <button class="accordion-button py-3 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#price-range" aria-expanded="false" aria-controls="price-range">
                                    Price Range
                                </button>
                            </h2>
                            <div id="price-range" class="accordion-collapse collapse" aria-labelledby="price-range"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body p-2">
                                    {{-- Price Slider --}}
                                    <div class="price-input">
                                        <div class="field">
                                            <span>Min</span>
                                            <input type="number" class="input-min" value="2500">
                                        </div>
                                        <div class="separator">-</div>
                                        <div class="field">
                                            <span>Max</span>
                                            <input type="number" class="input-max" value="7500">
                                        </div>
                                    </div>
                                    <div class="slider">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000" value="2500"
                                            step="100">
                                        <input type="range" class="range-max" min="0" max="10000" value="7500"
                                            step="100">
                                    </div>
                                    {{-- Price Slider End --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div>
                    <div class="card">
                        <div class="card-body row align-items-center">
                            <div class="col-lg-3">
                                {{-- Product Image --}}
                                <img class="img-fluid"
                                    src="https://www.pax8.com/en-us/wp-content/uploads/sites/4/2022/02/Pax8_Acronis_blue.png"
                                    alt="">
                            </div>
                            <div class="col-lg-9">
                                {{-- PRoduct Title --}}
                                <div>
                                    <h5 class="product-titles">Acronis Access - subscription license (annual) - 1 user
                                    </h5>
                                </div>
                                <div>
                                    <p class="m-0 product-ids">SKU #: 0003-SW-ACR-003 | MF #: AAEBEFENS11 | NG #:
                                        AAEBEFENS11</p>
                                </div>
                                {{-- Product Info --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var isMobile = window.innerWidth <= 768; // Adjust the threshold as needed

        var header, container, sticky;

        if (isMobile) {
            header = document.getElementById("mobileHeader");
            container = document.querySelector(".mobile-brand-page-header-container");
            sticky = header.offsetTop;
        } else {
            header = document.getElementById("myHeader");
            container = document.querySelector(".brand-page-header-container");
            sticky = header.offsetTop;
        }

        window.onscroll = function() {
            handleScroll(header, container, sticky);
        };

        function handleScroll(header, container, sticky) {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                container.classList.remove("container");
                container.classList.add("container-fluid");
            } else {
                header.classList.remove("sticky");
                container.classList.remove("container-fluid");
                container.classList.add("container");
            }
        }
    });
</script>
<script>
    const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

</script>
@endsection