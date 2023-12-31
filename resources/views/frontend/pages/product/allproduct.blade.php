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
<section class="banner_single_page mb-4" style="background-image:url('{{ asset('frontend/images/custom_shop.jpg') }}');background-color: black;background-repeat: no-repeat;background-size: cover;height:300px;">
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

<section class="header mt-2" id="myHeader">
    <div class="brand-page-header-container container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-sm-6">
                <div>
                    {{-- <img id="stand-logo" class="img-fluid" height=""
                        src="{{ !empty($brand_logo) && file_exists(public_path('storage/' . $brand_logo)) ? asset('storage/' . $brand_logo) : asset('frontend/images/no-banner(1920-330).png') }}"
                        alt="{{ $cat->title }} - logo"> --}}
                    <img id="stand-logos" class="img-fluid" src="https://i.ibb.co/jTykrMy/Apple-Logo.png" alt="">
                </div>
            </div>

            <div class="col-lg-10 col-sm-12">
                <div class="d-flex justify-content-end">
                    {{-- Show Default Dropdown --}}
                    <div>
                        <select class="form-select border-0 bg-transparent" aria-label="Default select example">
                            <option value="">Default Show</option>
                            <option value="7" @if (!empty($_GET['show']) && $_GET['show']=='7' ) selected @endif>
                                Per Page: 7</option>
                            <option value="10" @if (!empty($_GET['show']) && $_GET['show']=='10' ) selected @endif>
                                Per Page: 10</option>
                            <option value="20" @if (!empty($_GET['show']) && $_GET['show']=='20' ) selected @endif>
                                Per Page: 20</option>
                            <option value="40" @if (!empty($_GET['show']) && $_GET['show']=='40' ) selected @endif>
                                Per Page: 40</option>
                        </select>
                    </div>
                    <div>
                        <select class="form-select border-0 bg-transparent" aria-label="Ascending Sorting">
                            <option value="">Ascending</option>
                            <option value="titleASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy']=='titleASC' )
                                selected @endif>By Name
                            </option>
                            <option value="priceASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy']=='priceASC' )
                                selected @endif> By Price
                            </option>
                        </select>
                    </div>

                    <div>
                        <select class="form-select border-0 bg-transparent" aria-label="Descending Sorting">
                            <option value="">Descending</option>
                            <option value="titleDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy']=='titleDESC' )
                                selected @endif>By Name
                            </option>
                            <option value="priceDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy']=='priceDESC' )
                                selected @endif>By Price
                            </option>
                        </select>
                    </div>
                    {{-- <div class="dropdown pe-3">
                        <button class="border-0 bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By <i class="fas fa-caret-down rotate-icon text-muted"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container px-1">
        <div class="row gx-2">
            <div class="col-lg-3 ps-0">
                <div class="mt-4">
                    <form action="">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Search Your Need.."
                                aria-label="Recipient's username">
                            <button type="submit" class="input-group-text srch-btns"
                                style="padding: 10px; border-radius: 0;"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="accordion my-2 border" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#categegories" aria-expanded="true" aria-controls="categegories">
                                Categories
                            </button>
                        </h2>
                        <div id="categegories" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    {{-- Multi check --}}
                                    <div>
                                        {{-- Main --}}
                                        <div class="categories-check py-2">
                                            <label class="control control--checkbox">
                                                Software & License
                                                <input type="checkbox" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                        {{-- SubChild --}}
                                        <div class="ps-3 py-2">
                                            <div class="categories-check p-2">
                                                <label class="control control--checkbox">
                                                    Software & Child
                                                    <input type="checkbox" />
                                                    <div class="control__indicator"></div>
                                                </label>
                                            </div>
                                            <div class="categories-check p-2">
                                                <label class="control control--checkbox">
                                                    Software & Child
                                                    <input type="checkbox" />
                                                    <div class="control__indicator"></div>
                                                </label>
                                            </div>
                                            {{-- Nested Child --}}
                                            <div class="ps-3 py-2">
                                                <div class="categories-check p-2">
                                                    <label class="control control--checkbox">
                                                        Software & Child
                                                        <input type="checkbox" />
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                </div>
                                                <div class="categories-check p-2">
                                                    <label class="control control--checkbox">
                                                        Software & Child
                                                        <input type="checkbox" />
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Single Check--}}
                                    <div class="categories-check pt-2">
                                        <label class="control control--checkbox">
                                            License
                                            <input type="checkbox" />
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>
                                    {{-- End --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#manufacturers" aria-expanded="false" aria-controls="manufacturers">
                                Manufacturers
                            </button>
                        </h2>
                        <div id="manufacturers" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body p-2">
                                <div>
                                    {{-- Multi check --}}
                                    <div>
                                        {{-- Main --}}
                                        <div class="categories-check py-2">
                                            <label class="control control--checkbox">
                                                Software & License
                                                <input type="checkbox" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                        {{-- SubChild --}}
                                        <div class="ps-3 py-2">
                                            <div class="categories-check p-2">
                                                <label class="control control--checkbox">
                                                    Software & Child
                                                    <input type="checkbox" />
                                                    <div class="control__indicator"></div>
                                                </label>
                                            </div>
                                            <div class="categories-check p-2">
                                                <label class="control control--checkbox">
                                                    Software & Child
                                                    <input type="checkbox" />
                                                    <div class="control__indicator"></div>
                                                </label>
                                            </div>
                                            {{-- Nested Child --}}
                                            <div class="ps-3 py-2">
                                                <div class="categories-check p-2">
                                                    <label class="control control--checkbox">
                                                        Software & Child
                                                        <input type="checkbox" />
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                </div>
                                                <div class="categories-check p-2">
                                                    <label class="control control--checkbox">
                                                        Software & Child
                                                        <input type="checkbox" />
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Single Check--}}
                                    <div class="categories-check pt-2">
                                        <label class="control control--checkbox">
                                            License
                                            <input type="checkbox" />
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>
                                    {{-- End --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#price-range" aria-expanded="false" aria-controls="price-range">
                                Price Range
                            </button>
                        </h2>
                        <div id="price-range" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
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
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>
                                {{-- Price Slider End --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12 pe-0">
                <div class="mt-4">
                    <div class="card mb-3"
                        style="border-radius: 0px; border: 0; box-shadow: var(--custom-shadow); background: rgba(255, 255, 255, 0.8) url('https://i.ibb.co/K7D931c/Background-1.jpg') center center/cover no-repeat; position: relative;">
                        <div class="card-body row align-items-center card-mobile">
                            <div class="col-lg-2">
                                {{-- Product Image --}}
                                <img class="img-fluid" style="width: 140px; height: 140px;"
                                    src="http://ngenitltd.com/upload/Products/thumbnail/1785611388291850.jpg" alt="">
                            </div>
                            <div class="col-lg-10">
                                {{-- Product Title --}}
                                <div>
                                    <h5 class="product-titles text-black me-3">Acronis Access - subscription license (annual)
                                        - 1 user,Access - subscription license the (annual) - 1 user
                                    </h5>
                                </div>
                                {{-- id & action --}}
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-mobile">
                                        <div>
                                            <p class="m-0 product-ids text-muted">
                                                <span>SKU #:
                                                    0003-SW-ACR-003</span> |
                                                <span>MF #:
                                                    AAEBEFENS11</span>
                                            </p>
                                        </div>
                                        <div class="pt-lg-3 pt-0 d-flex justify-content-between align-items-center">
                                            <p class="m-0 me-lg-0 me-2 text-mute" style="font-weight: 200;
                                            font-size: 13px;"><i class="fa-solid fa-box-open text-muted pe-1"></i>
                                                Unlimited</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="" class="btn-color me-3 btn-details">Details</a>
                                    </div>
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
{{-- Fir Price range --}}
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
