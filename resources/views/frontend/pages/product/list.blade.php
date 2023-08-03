<header class="product_showing shadow-lg px-2 py-2 mb-2">
    <div class="form-inline d-flex justify-content-between align-items-center">
        <span class="mr-md-auto">
            {{ is_countable($products) && count($products) > 0 ? $products->count() : 'No' }} Items found
        </span>
        <div class="d-flex align-items-center">
            <div class="me-2 ml-2">
                <select class="show form-select rounded-0 product_btn_dropdown" name="show"
                    data-placeholder="Results Per Page" onchange="perpageFilter();" aria-label="Default select example">
                    <option value="">Default Show</option>
                    <option value="10" @selected(!empty($_GET['show']) && $_GET['show'] == '10')>
                        Per Page: 10</option>
                    <option value="15" @selected(!empty($_GET['show']) && $_GET['show'] == '15')>
                        Per Page: 15</option>
                    <option value="25" @selected(!empty($_GET['show']) && $_GET['show'] == '25')>
                        Per Page: 25</option>
                    <option value="50" @selected(!empty($_GET['show']) && $_GET['show'] == '50')>
                        Per Page: 50</option>
                </select>
            </div>
            <div class="me-2 ml-2">
                <select class="form-select rounded-0" name="sortBy" onchange="sortByFilter();"
                    data-placeholder="Results Per Page" aria-label="Default select example">
                    <option value="">Default Sorting</option>
                    <option value="titleASC" @selected(!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC')>Ascending By Name
                    </option>
                    <option value="titleDESC" @selected(!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC')>Descending By Name
                    </option>
                    <option value="priceASC" @selected(!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC')> Price (Low to High)
                    </option>
                    <option value="priceDESC" @selected(!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC')> Price (High to Low)
                    </option>
                    <option value="newProduct" @selected(!empty($_GET['sortBy']) && $_GET['sortBy'] == 'newProduct')> New Products
                    </option>
                    <option value="priceAvailable" @selected(!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceAvailable')> Price Available
                    </option>
                </select>
            </div>
        </div>
    </div>
</header>
<div class="d-flex justify-content-center row">

    @if (count($products) > 0)
        <!-- First Product Start -->
        @foreach ($products as $product)
            <div class="col-md-12 col-sm-12">
                <div class="row m-0 p-2  rounded-0  bg-white rounded-0 d-flex align-items-center"
                    style="border-bottom: 2px solid #dee2e6;">
                    <div class="col-md-3 mt-1 ">
                        <img class="img-fluid img-responsive rounded-0 product-image"
                            src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-9 col-sm-12">
                                <a href="{{ route('product.details', ['id' => $product->slug]) }}">
                                    <h4 class="my-3" style="color: #ae0a46;">
                                        {{ $product->name }}</h4>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                @if ($product->qty > 0)
                                    <h6 class="text-success font-number text-end"
                                        style="font-size:16px; text-transform:capitalize;">
                                        <i class="fa-solid fa-circle-check" style="font-size:15px !important;"></i> in
                                        stock
                                    </h6>
                                @else
                                    <h6 class="text-end text-success"
                                        style="font-size:20px; text-transform:capitalize;">
                                        {{ ucfirst($product->stock) }}</h6>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-1 col-sm-12">
                                <div>
                                    <span style="font-size: 14px;">
                                        SKU #: {{ $product->sku_code }} |
                                        MF #: {{ $product->mf_code }} |
                                        <br> NG #: {{ $product->product_code }}
                                    </span>
                                    <br>
                                    {{-- <p>
                                        {!! Str::limit($product->short_desc, 180) !!}
                                    </p> --}}
                                </div>
                            </div>
                            <div class="col-lg-6 text-center mt-1 col-sm-12">
                                <div class="text-end">
                                    @if ($product->rfq != 1)
                                        @if (!empty($product->discount))
                                            <h3 class="mr-1 font-number text-end">$
                                                {{ $product->discount }}</h3>
                                            <span class="strike-text">$
                                                {{ $product->price }}</span>
                                        @else
                                            <div class="d-flex justify-content-end align-items-center">
                                                <small class="text-info me-2" style="font-size: 18px;">USD</small>
                                                <h4 class="mr-1 font-number text-end">$
                                                    {{ $product->price }}</h4>
                                            </div>
                                        @endif
                                    @endif

                                </div>
                                @if ($product->rfq != 1)
                                    <div class="row gx-0 d-flex align-items-center justify-content-end">
                                        <div class="col-lg-6">
                                            <div class="qty-container d-flex justify-content-end"
                                                style="margin-right: -0.5rem;
                                                    position: relative;
                                                    z-index: 999;">
                                                <input type="text" name="qty" value="1" class="input-qty" />
                                                <span class="d-flex flex-column">
                                                    <button class="qty-btn-plus btn rounded-0 text-white qty-btn"
                                                        type="button"><i class="fa fa-chevron-up"></i></button>
                                                    <button class="qty-btn-minus btn rounded-0 text-white qty-btn mr-1"
                                                        type="button"><i class="fa fa-chevron-down"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="d-flex justify-content-end cart_quantity_button{{ $product->id }}">
                                                <a href="javascript:void(0);"
                                                    class="common_button effect01 add_to_cart_quantity"
                                                    data-id="{{ $product->id }}" data-name="{{ $product->name }}"
                                                    style="padding:10px 8px;">Add to Basket</a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-end">
                                        <a href="{{ route('product.details', $product->slug) }}"
                                            class="common_button effect01">Details</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
        <!-- First Product End -->
    @else
        <div class="col-md-12 col-sm-12">
            <div class="row m-0 p-2 shadow-lg bg-white border rounded d-flex align-items-center">
                <h4 class="text-danger text-center">No Product Found. Search again.
                </h4>
            </div>
        </div>
    @endif

</div>

@if (count($products) > 9)
    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
        <ul class="pagination" id="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
@endif
