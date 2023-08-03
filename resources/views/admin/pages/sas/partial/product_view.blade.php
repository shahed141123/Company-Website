<div class="modal fade" id="productDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header py-2" style="background: #ae0a46;">
                <h5 class="modal-title text-white" id="staticBackdropLabel"> Product Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="container py-2">
                    <div class="row">
                        <!-- images -->
                        <div class="col-lg-4 col-sm-12 single_product_images">
                            <!-- gallery pic -->
                            <div class="mx-auto d-block">
                                <img id="expand" class="geeks img-fluid rounded mx-auto d-block"
                                    src="{{ asset($product->thumbnail) }}">
                            </div>

                            @php
                                $imgs = App\Models\Admin\MultiImage::where('product_id', $product->id)->get();

                            @endphp

                            <div class="img_gallery_wrapper row pt-1">
                                @foreach ($imgs as $data)
                                    <div class="col-3">
                                        <img class="img-fluid" src="{{ asset($data->photo) }}" onclick="gfg(this);">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <div class="row">
                                <h3 class="mb-0">{{ $product->name }}</h3>
                                <p class="text-dark product_code py-1">SKU #{{ $product->sku_code }} | MF
                                    #{{ $product->mf_code }} | NG #{{ $product->product_code }}</p>
                                <p class="text-dark product_code py-1">Brand :
                                    {{ App\Models\Admin\Brand::where('id', $product->brand_id)->value('title') }} |
                                    Category :
                                    {{ App\Models\Admin\Category::where('id', $product->cat_id)->value('title') }} | Sub
                                    Category :
                                    {{ App\Models\Admin\SubCategory::where('id', $product->sub_cat_id)->value('title') }}
                                </p>
                                <div class="mb-1">
                                    <label for="" style="font-weight: 500">Short Description :</label>
                                    <p class="pt-1">{!! $product->short_desc !!}</p>
                                </div>

                                <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2"
                                    style="background: #f9f6f0;">

                                    <div>
                                        <p tabindex="0" class="prod-stock" id="product-avalialability-by-warehouse">
                                            <span aria-label="Stock Availability" class="js-prod-available">Unit Price
                                            </span> <br>
                                            @if (!empty($product->discount))
                                                <span style="text-decoration: line-through; color:#ae0a46;">$
                                                    {{ $product->price }}</span>
                                                <span style="color: black">$ {{ $product->discount }}</span>
                                                <span style="font-size: 14px;">USD</span>
                                            @else
                                                <span style="font-size: 22px;">$ {{ $product->price }}</span>
                                                <span style="font-size: 14px;">USD</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div>
                                        <p tabindex="0" class="prod-stock" id="product-avalialability-by-warehouse">
                                            <span aria-label="Stock Availability" class="js-prod-available"> <i
                                                    class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                            @if ($product->qty > 0)
                                                <span class="text-success" style="font-size:17px">{{ $product->qty }}
                                                    in stock</span>
                                            @else
                                                <span class="text-danger pb-2"
                                                    style="font-size:17px">{{ ucfirst($product->stock) }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div>
                                        <p tabindex="0" class="prod-stock" id="product-avalialability-by-warehouse">
                                            <span aria-label="Stock Availability" class="js-prod-available"> Product
                                                Type :</span> <br>
                                            <span class="text-warning"
                                                style="font-size:17px">{{ ucfirst($product->product_type) }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p tabindex="0" class="prod-stock" id="product-avalialability-by-warehouse">
                                            <span aria-label="Stock Availability" class="js-prod-available"> Price
                                                Notification :</span> <br>
                                            <span class="text-info"
                                                style="font-size:17px">{{ $product->notification_days }} Days</span>
                                        </p>
                                    </div>


                                </div>
                            </div>



                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productReject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-2" style="background: #ae0a46;">
                <h5 class="modal-title text-white" id="staticBackdropLabel"> Product Rejection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="container py-2">
                    <form action="{{ route('sas.reject') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-1">
                            <input type="hidden" name="product_id" value="{{ $product->slug }}">
                            <label>Rejection Note </label>
                            <textarea name="rejection_note" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="w-25 mx-auto">


                                <button type="submit" class="btn btn-primary mx-3" id="submitbtn">Reject<i
                                        class="ph-paper-plane-tilt mx-2"></i></button>
                            </div>
                        </div>
                    </form>


                </section>
            </div>
        </div>
    </div>
</div>

<script>
    function gfg(imgs) {
        var expandImg = document.getElementById("expand");
        var imgText = document.getElementById("geeks");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>
