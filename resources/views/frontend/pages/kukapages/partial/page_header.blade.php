<style>
    .main-header {
        position: relative;
    }

    .drpdown_menu {
        z-index: 1021;
    }


    body {
        background-color: #f6f6f6;
    }

    @media (min-width: 1300px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1250px;
        }
    }

    @media (min-width: 1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1350px;
        }
    }

    @media (min-width: 1500px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1450px;
        }
    }
</style>
<style>
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 9999;
    }

    .sticky+.content {
        padding-top: 102px;
    }
</style>
<section>
    <div class="brand-page-banner">
        {{-- <div class="row">
            <div class="col p-0 m-0">  style="background-image: url('{{ asset('storage/' . $brandpage->banner_image) }}')"
                <h3 class="text-center text-white">{{ $brandpage->header }}</h3>
            </div>
        </div> --}}
        <img src="{{ isset($brandpage->banner_image) && file_exists(asset('storage/' . $brandpage->banner_image)) ? asset('storage/' . $brandpage->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
            alt="">
    </div>
    <div class="container">
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
    </div>
</section>
<section class="header" id="myHeader">
    <div class="brand-page-header-container container">
        <div class="row d-lg-flex align-items-center">
            <div class="col-lg-2 col-sm-12 me-3 extra-d-flex">
                {{-- <img id="stand-logo" src="{{ asset('storage/' . $brandpage->brand_logo) }}" alt="{{ $brand->title }} - logo"
                    height="58px"> --}}
                <img id="stand-logo" class="img-fluid"
                    src="{{ isset($brandpage->brand_logo) && file_exists(asset('storage/' . $brandpage->brand_logo))
                        ? asset('storage/' . $brandpage->brand_logo)
                        : asset('frontend/images/no-brand-logo.jpg') }}"
                    alt="{{ $brand->title }} - logo" style="box-shadow: none;">
            </div>
            <div class="col-lg-1 col-sm-12 extra-d-flex">
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    {{-- <img class="stand-header-icons video-corporate"
                        src="https://img.directindustry.com/media/ps/images/common/stand/video-icon.gif"
                        alt="video corpo"> --}}
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
            <div class="col-lg-8 col-sm-12 extra-d-flex">
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
