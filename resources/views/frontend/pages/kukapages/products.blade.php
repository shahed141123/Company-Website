@extends('frontend.master')
@section('content')
    <style>
        .company-tab-title span {
            background-color: #f6f6f6
        }
    </style>
    @include('frontend.pages.kukapages.partial.page_header')
    <section class="header" id="myHeader">
        <div class="container mb-5 pb-3">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h2 class="company-tab-title">
                        <span>All {{ ucfirst($brand->title) }} Products</span>
                    </h2>
                </div>
            </div>
            <div class="allProducts">
                <div class="row text-center" id="spinner" style="display: none; font">
                    <i class="fa fa-spinner fa-spin text-success"></i> Loading...
                </div>
                @include('frontend.pages.kukapages.partial.product_pagination')

            </div>
        </div>
        @foreach ($industries as $industry)
            @if (count($industry->products) > 0)
                <div class="container mb-5 pb-3">
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <h2 class="company-tab-title">
                                <span style="font-size: 20px;">{{ ucfirst($brand->title) }} Products for
                                    {{ ucfirst($industry->title) }} Industry</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        @foreach ($industry->products as $product)
                            <div class="custom-col-5 col-sm-6 col-md-4 px-4">
                                <div class="card rounded-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    <div class="card-body" style="height:22rem;">
                                        {{-- <div class="new-video">
                                            <div class="icon-small video"></div>
                                        </div> --}}
                                        <div class="image-section">
                                            <img src="{{ file_exists($product->thumbnail) ? asset($product->thumbnail) : asset('frontend/images/brandPage-prod-no-img(376-282).png') }}"
                                                alt="" width="100%" height="180px;">
                                        </div>

                                        <div class="content-section text-center py-3">
                                            <a href="{{ route('product.details', $product->slug) }}">
                                                <p class="pb-0 mb-0 text-muted brandpage_product_title">
                                                    {{ Str::limit($product->name, 85) }}</p>
                                            </a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            @endif
        @endforeach
        @foreach ($solutions as $solution)
            @if (count($solution->products) > 0)
                <div class="container mb-5 pb-3">
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <h2 class="company-tab-title">
                                <span style="font-size: 20px;">{{ ucfirst($brand->title) }} Products for
                                    {{ ucfirst($solution->name) }} Industry</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        @foreach ($solution->products as $product)
                            <div class="custom-col-5 col-sm-6 col-md-4 px-4 mb-3">
                                <div class="card rounded-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    <div class="card-body" style="height:22rem;">
                                        {{-- <div class="new-video">
                                            <div class="icon-small video"></div>
                                        </div> --}}
                                        <div class="image-section">
                                            <img src="{{ file_exists($product->thumbnail) ? asset($product->thumbnail) : asset('frontend/images/brandPage-prod-no-img(376-282).png') }}"
                                                alt="" width="100%" height="180px;">
                                        </div>

                                        <div class="content-section text-center py-3">
                                            <a href="{{ route('product.details', $product->slug) }}">
                                                <p class="pb-0 mb-0 text-muted brandpage_product_title">
                                                    {{ Str::limit($product->name, 85) }}</p>
                                            </a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>

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
                                @foreach ($related_search['brands'] as $related_brand)
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
    <!---------End -------->
@endsection
@section('scripts')
    {{-- <script>
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    getData(page);
                }
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                event.preventDefault();

                var myurl = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];

                getData(page);
            });
        });

        function getData(page) {
            $.ajax({
                    url: '?page=' + page,
                    type: "get",
                    datatype: "html",
                })
                .done(function(data) {
                    $(".allProducts").empty().html(data);
                    location.hash = page;
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('No response from server');
                })
            }
    </script> --}}
    <script>
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    getData(page);
                }
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();

                var myurl = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];

                showSpinner(); // Show the spinner while loading

                getData(page);
            });
        });

        function showSpinner() {
            $('#spinner').show();
        }

        function hideSpinner() {
            $('#spinner').hide();
        }

        function getData(page) {
            $.ajax({
                    url: '?page=' + page,
                    type: "get",
                    datatype: "html",
                })
                .done(function(data) {
                    $(".allProducts").empty().html(data);
                    location.hash = page;
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('No response from server');
                })
                .always(function() {
                    hideSpinner(); // Hide the spinner after loading
                });
        }
    </script>
    <script>
    // Wait for the DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        // Find the element with the class 'fixed-section'
        var elementToRemoveClassFrom = document.querySelector('.fixed-section');

        // Check if the element is found before attempting to remove the class
        if (elementToRemoveClassFrom) {
            // Remove the class 'fixed-section'
            elementToRemoveClassFrom.classList.remove('fixed-section');
        }
    });
</script>
@endsection
