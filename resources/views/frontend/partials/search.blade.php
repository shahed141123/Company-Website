<style>
    .search_titles{
        font-size: 17px;
        color: #ae0a46 !important;
        text-transform: capitalize;
    }
</style>


@if (
    (is_countable($brands) && count($brands) > 0) ||
        (is_countable($categorys) && count($categorys) > 0) ||
        (is_countable($solutions) && count($solutions) > 0) ||
        (is_countable($industries) && count($industries) > 0) ||
        (is_countable($products) && count($products) > 0) ||
        (is_countable($blogs) && count($blogs) > 0) ||
        (is_countable($storys) && count($storys) > 0) ||
        (is_countable($tech_glossys) && count($tech_glossys) > 0))
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    @if (is_countable($brands) && count($brands) > 0)
                        <div class="col-lg-6">
                            <h5 class="fw-bold border-bottom">Brands</h5>
                            @foreach ($brands as $brand)
                                <h6><a class="search_titles"
                                        href="{{ route('brandpage.html', $brand->slug) }}">{{ $brand->title }}</a></h6>
                            @endforeach
                        </div>
                    @endif
                    @if (is_countable($categorys) && count($categorys) > 0)
                        <div class="col-lg-6">
                            <h5 class="fw-bold border-bottom">Categorys</h5>
                            @foreach ($categorys as $category)
                                <h6><a class="search_titles"
                                        href="{{ route('category.html', $category->slug) }}">{{ $category->title }}</a>
                                </h6>
                            @endforeach
                            @foreach ($subcategorys as $subcategory)
                                <h6><a class="search_titles"
                                        href="{{ route('category.html', $subcategory->slug) }}">{{ $subcategory->title }}</a>
                                </h6>
                            @endforeach
                            @foreach ($subsubcategorys as $subsubcategory)
                                <h6><a class="search_titles"
                                        href="{{ route('category.html', $subsubcategory->slug) }}">{{ $subsubcategory->title }}</a>
                                </h6>
                            @endforeach
                        </div>
                    @endif


                </div>

                <div class="row mt-2">
                    @if (is_countable($industries) && count($industries) > 0)
                        <div class="col-lg-6">
                            <h5 class="fw-bold border-bottom">Industries</h5>
                            @foreach ($industries as $industrie)
                                <h6><a class="search_titles" href="javascript:void(0);">{{ $industrie->title }}</a>
                                </h6>
                            @endforeach
                        </div>
                    @endif
                    @if (is_countable($solutions) && count($solutions) > 0)
                        <div class="col-lg-6">
                            <h5 class="fw-bold border-bottom">Solutions</h5>
                            @foreach ($solutions as $solution)
                                <h6><a class="search_titles"
                                        href="{{ route('solution.details', $solution->id) }}">{{ $solution->name }}</a>
                                </h6>
                            @endforeach
                        </div>
                    @endif

                </div>

                @if (is_countable($blogs) && count($blogs) > 0)
                    <div class="row mt-2">
                        <h5 class="fw-bold border-bottom">Blogs</h5>
                        @foreach ($blogs as $blog)
                            <h6><a class="search_titles"
                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a></h6>
                        @endforeach
                    </div>
                @endif
                @if (is_countable($storys) && count($storys) > 0)
                    <div class="row mt-2">
                        <h5 class="fw-bold border-bottom">Client storys</h5>
                        @foreach ($storys as $story)
                            <h6><a class="search_titles"
                                    href="{{ route('story.details', $story->id) }}">{{ $story->title }}</a></h6>
                        @endforeach
                    </div>
                @endif
                @if (is_countable($tech_glossys) && count($tech_glossys) > 0)
                    <div class="row mt-2">
                        <h5 class="fw-bold border-bottom">Tech Glossary</h5>
                        @foreach ($tech_glossys as $tech_glossy)
                            <h6><a class="search_titles"
                                    href="{{ route('techglossy.details', $tech_glossy) }}">{{ $tech_glossy->title }}</a>
                            </h6>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-lg-6">
                @if (count($products) > 0)
                    <!-- First Product Start -->
                    @foreach ($products as $product)
                        <div class="row m-0 p-2 rounded-0  bg-white rounded-0 d-flex align-items-center"
                            style="border-bottom: 2px solid #dee2e6;">
                            <div class="col-md-3 mt-1 ">
                                <img class="img-fluid img-responsive rounded-0 product-image"
                                    src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="col-md-9 col-sm-12">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-9 col-sm-12">
                                        <a class="search_titles"
                                            href="{{ route('product.details', ['id' => $product->slug]) }}">
                                            <h6 class="my-3" style="color: #ae0a46;">
                                                {{ $product->name }}</h6>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <div>
                                            @if ($product->qty > 0)
                                                <h6 class="text-success font-number text-end"
                                                    style="font-size:13px; text-transform:capitalize;">
                                                    <i class="fa-solid fa-circle-check"
                                                        style="font-size:15px !important;"></i>
                                                    in
                                                    stock
                                                </h6>
                                            @else
                                                <p class="text-end text-success"
                                                    style="font-size:13px; text-transform:capitalize;">
                                                    {{ ucfirst($product->stock) }}</p>
                                            @endif
                                        </div>
                                        <div>
                                            @if ($product->rfq != 1)
                                                @if (!empty($product->discount))
                                                    <h3 class="mr-1 font-number text-end">$
                                                        {{ $product->discount }}</h3>
                                                    <span class="strike-text">$
                                                        {{ $product->price }}</span>
                                                @else
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <small class="text-info me-2"
                                                            style="font-size: 13px;">USD</small>
                                                        <h5 class="mr-1 font-number text-end">$
                                                            {{ $product->price }}</h5>
                                                    </div>
                                                @endif
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
        </div>
    </div>
@else
    <div class="text-center p-4">
        <h4 style="color: #ae0a46;"> Nothing Found ! Search again.</h4>
    </div>


@endif
