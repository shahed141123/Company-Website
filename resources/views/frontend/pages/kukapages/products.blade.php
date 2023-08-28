@extends('frontend.master')
@section('content')
    @include('frontend.pages.kukapages.partial.page_header')


    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h3>All {{ ucfirst($brand->title) }} Products</h3>
                    {{-- <h2 class="company-tab-title">
                        <span style="font-size: 20px;">ROBOT SYSTEMS</span>
                    </h2> --}}
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
            <div class="container">
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
                        <div class="custom-col-5 col-sm-6 col-md-4 px-3">
                            <div class="card rounded-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                <div class="card-body" style="height:22rem;">
                                    <div class="new-video">
                                        <div class="icon-small video"></div>
                                    </div>
                                    <div class="image-section">
                                        <img src="{{ file_exists($product->thumbnail) ? asset($product->thumbnail) : asset('upload/no_image.jpg') }}"
                                            alt="" width="100%" height="180px;">
                                    </div>

                                    <div class="content-section text-center py-3">
                                        <a href="{{ route('product.details', $product->slug) }}">
                                            <p class="pb-0 mb-0 text-muted">{{ Str::limit($product->name, 70) }}</p>
                                        </a>
                                        <span style="font-size: 10px"><i class="fa-solid fa-tag"></i>
                                            {{ $product->getBrandName() }}</span>
                                        @if ($product->price_status == 'price')
                                            <span style="font-size: 14px"><i class="fa-solid fa-tag ms-2"></i> USD
                                                {{ $product->price }}</span>
                                        @endif
                                        {{-- <span style="font-size: 10px"><i class="fa-solid fa-tag"></i> KR 4 AGILUS</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        @endforeach
        @foreach ($solutions as $solution)
            <div class="container">
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
                        <div class="custom-col-5 col-sm-6 col-md-4 px-3">
                            <div class="card rounded-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                <div class="card-body" style="height:22rem;">
                                    <div class="new-video">
                                        <div class="icon-small video"></div>
                                    </div>
                                    <div class="image-section">
                                        <img src="{{ file_exists($product->thumbnail) ? asset($product->thumbnail) : asset('upload/no_image.jpg') }}"
                                            alt="" width="100%" height="180px;">
                                    </div>

                                    <div class="content-section text-center py-3">
                                        <a href="{{ route('product.details', $product->slug) }}">
                                            <p class="pb-0 mb-0 text-muted">{{ Str::limit($product->name, 70) }}</p>
                                        </a>
                                        <span style="font-size: 10px"><i class="fa-solid fa-tag"></i>
                                            {{ $product->getBrandName() }}</span>
                                        @if ($product->price_status == 'price')
                                            <span style="font-size: 14px"><i class="fa-solid fa-tag ms-2"></i> USD
                                                {{ $product->price }}</span>
                                        @endif
                                        {{-- <span style="font-size: 10px"><i class="fa-solid fa-tag"></i> KR 4 AGILUS</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        @endforeach
    </section>

    <section>
        <div class="container mb-3">
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
@endsection
