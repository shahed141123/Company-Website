<div class="row mt-2" id="products-container">
    @foreach ($products as $product)
        <div class="custom-col-5 col-sm-6 col-md-4 px-4">
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
                            <p class="pb-0 mb-0 text-muted brandpage_product_title">{{ Str::limit($product->name, 85) }}</p>
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
                        {{-- <span style="font-size: 10px"><i class="fa-solid fa-tag"></i> KR 4 AGILUS</span> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center mt-3">
    <div id="pagination-links">
        {!! $products->render() !!}
        {{-- {{ $products->links() }} --}}
    </div>
</div>
