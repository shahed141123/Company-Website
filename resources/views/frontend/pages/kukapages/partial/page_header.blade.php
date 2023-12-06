<section>
    <div class="brand-page-banner">
        {{-- <div class="row">
            <div class="col p-0 m-0">  style="background-image: url('{{ asset('storage/' . $brandpage->banner_image) }}')"
                <h3 class="text-center text-white">{{ $brandpage->header }}</h3>
            </div>
        </div> --}}
        <img src="{{ !empty($brandpage->banner_image) && file_exists(public_path('storage/' . $brandpage->banner_image)) ? asset('storage/' . $brandpage->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
            alt="">
    </div>
    {{-- <div class="container d-lg-block d-sm-none">
        <div class="row d-lg-flex align-items-center">
            <div class="col pt-1">
                <ul class="d-lg-flex align-items-center brand-bread-crumb my-2">
                    <li><i class="fa-solid fa-house-chimney me-2"></i></li>
                    <li class="fw-bold"><a href="#">{{ $brand->title }}</a></li>
                    <li class="bread-crumb-spacer">></li>
                    <li> {{ Route::current()->getName() == 'brand.overview' ? 'Overview' : '' }}
                        {{ Route::current()->getName() == 'brand.products' ? 'Products' : '' }}
                        {{ Route::current()->getName() == 'brand.pdf' ? 'Catalogs' : '' }}
                        {{ Route::current()->getName() == 'brand.content' ? 'Contents' : '' }}
                        {{ Route::current()->getName() == 'product.details' ? $sproduct->getCategoryName() : '' }}
                    </li>
                    @if (Route::current()->getName() == 'product.details')
                        <li class="bread-crumb-spacer">></li>
                        <li>{{ $sproduct->name }}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div> --}}
</section>
<section class="header d-lg-block d-sm-none" id="myHeader">
    <div class="brand-page-header-container container">
        <div class="row d-lg-flex align-items-center">
            <div class="col-lg-2 col-sm-6 me-3 extra-d-flex">
                <div>
                    <img id="stand-logo" class="img-fluid" height=""
                        src="http://ngenitltd.com/storage/BbXjqfGfxBEJmLGq1697946011.png"
                        alt="{{ $brand->title }} - logo">
                </div>
                {{-- <img id="stand-logo" class="img-fluid" height=""
                    src="{{asset('storage/' . $brandpage->brand_logo)}}"
                    alt="{{ $brand->title }} - logo" style="box-shadow: none;"> --}}
            </div>
            <div class="col-lg-1 col-sm-6 extra-d-flex">
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <span class="text-muted">No video Available</span>
                </a>
                {{-- <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header rounded-0 p-1 px-3 m-0" style="background-color: #ae0a46;">
                                <h5 class="modal-title text-white" id="staticBackdropLabel">Video</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0"
                                    frameborder="0" allowfullscreen="" style="width: 100%; height: 350px;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal End--> --}}
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="common_button2 d-lg-none d-sm-block">
                    <a href="javascript:void(0)" class="dropdown-toggle w-100 text-white" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        Brand Menus
                    </a>
                    <ul class="dropdown-menu drop-items-brand">
                        <li class="px-3">
                            <a class="dropdown-item {{ Route::current()->getName() == 'brand.overview' ? 'active-brands' : '' }}"
                                href="{{ route('brand.overview', $brand->slug) }}">Company</a>
                        </li>
                        <li class="px-3">
                            <a class="dropdown-item {{ in_array(Route::currentRouteName(), ['brand.products', 'product.details']) ? 'active-brands' : '' }}"
                                href="{{ route('brand.products', $brand->slug) }}">Products</a>
                        </li>


                        <li class="px-3">
                            <a class="dropdown-item {{ Route::current()->getName() == 'brand.pdf' ? 'active-brands' : '' }}"
                                href="{{ route('brand.pdf', $brand->slug) }}">Catalogs</a>
                        </li>

                        <li class="px-3">
                            <a class="dropdown-item {{ Route::current()->getName() == 'brand.content' ? 'active-brands' : '' }}"
                                href="{{ route('brand.content', $brand->slug) }}">Tech Contents</a>
                        </li>

                        <li class="px-3 disable-brands border-0">
                            <span>Exibitation</span>
                        </li>
                    </ul>
                </div>



                <ul class="d-lg-flex justify-content-start stand-header-nav mb-0 d-lg-block d-sm-none">
                    <li class="px-3">
                        <a class="p-2 {{ Route::current()->getName() == 'brand.overview' ? 'active-brands' : '' }}"
                            href="{{ route('brand.overview', $brand->slug) }}">Company</a>
                    </li>
                    <li class="px-3">
                        <a class="p-2 {{ in_array(Route::currentRouteName(), ['brand.products', 'product.details']) ? 'active-brands' : '' }}"
                            href="{{ route('brand.products', $brand->slug) }}">Products</a>
                    </li>


                    <li class="px-3">
                        <a class="p-2 {{ Route::current()->getName() == 'brand.pdf' ? 'active-brands' : '' }}"
                            href="{{ route('brand.pdf', $brand->slug) }}">Catalogs</a>
                    </li>

                    <li class="px-3">
                        <a class="p-2 {{ Route::current()->getName() == 'brand.content' ? 'active-brands' : '' }}"
                            href="{{ route('brand.content', $brand->slug) }}">Tech Contents</a>
                    </li>

                    <li class="px-3 disable-brands border-0">
                        <span>Exibitation</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="header d-lg-none d-sm-block" id="myHeader">
    <div class="brand-page-header-container container">
        <div class="row d-lg-flex align-items-center">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <img id="stand-logo" class="img-fluid" height=""
                            src="http://ngenitltd.com/storage/BbXjqfGfxBEJmLGq1697946011.png"
                            alt="{{ $brand->title }} - logo">
                    </div>
                    <div>
                        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <span class="text-muted">No video Available</span>
                        </a>
                        {{-- <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header rounded-0 p-1 px-3 m-0" style="background-color: #ae0a46;">
                                        <h5 class="modal-title text-white" id="staticBackdropLabel">Video</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="https://www.youtube.com/embed/4z2PyfaoiYk?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen="" style="width: 100%; height: 350px;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal End--> --}}
                    </div>
                </div>
                <div>
                    <div>
                        <ul class="d-flex align-items-center justify-content-center">
                            <li class="px-3">
                                <a class="{{ Route::current()->getName() == 'brand.overview' ? 'active-brands' : '' }}"
                                    href="{{ route('brand.overview', $brand->slug) }}">Company</a>
                            </li>
                            <li class="px-3">
                                <a class="{{ in_array(Route::currentRouteName(), ['brand.products', 'product.details']) ? 'active-brands' : '' }}"
                                    href="{{ route('brand.products', $brand->slug) }}">Products</a>
                            </li>
    
    
                            <li class="px-3">
                                <a class="{{ Route::current()->getName() == 'brand.pdf' ? 'active-brands' : '' }}"
                                    href="{{ route('brand.pdf', $brand->slug) }}">Catalogs</a>
                            </li>
    
                            <li class="px-3">
                                <a class="{{ Route::current()->getName() == 'brand.content' ? 'active-brands' : '' }}"
                                    href="{{ route('brand.content', $brand->slug) }}">Contents</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.onscroll = function() {
            myFunction();
        };

        var header = document.getElementById("myHeader");
        var container = document.querySelector(".brand-page-header-container");
        var sticky = header.offsetTop;

        function myFunction() {
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
