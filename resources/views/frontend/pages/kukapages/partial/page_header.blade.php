<style>
    .main-header{
            position: relative;
        }
    .drpdown_menu {
        z-index: 1021;
    }


    body {
        background-color: #f6f6f6;
    }

    @media (min-width: 1300px) {

        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 1250px;
        }
    }

    @media (min-width: 1400px) {

        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 1350px;
        }
    }
    @media (min-width: 1500px) {

        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 1450px;
        }
    }
</style>

<section>
    <div class="container-fluid brand-page-banner" style="background-image: url('{{ asset('storage/' . $brandpage->banner_image) }}')">
        <div class="row">
            <div class="col p-0 m-0">
                    <h3 class="text-center text-white">{{ $brandpage->header }}</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col pt-1">
                <ul class="d-flex align-items-center brand-bread-crumb my-2">
                    <li><i class="fa-solid fa-house-chimney me-2"></i></li>
                    <li class="fw-bold"><a href="#">{{ $brand->title }}</a></li>
                    <li class="bread-crumb-spacer">></li>
                    <li> {{ Route::current()->getName() == 'brand.overview' ? 'Overview' : '' }} {{ Route::current()->getName() == 'brand.products' ? 'Products' : '' }} {{ Route::current()->getName() == 'brand.pdf' ? 'Catalogs' : ''}} {{ Route::current()->getName() == 'brand.content' ? 'Contents' : '' }} </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sticky-top">
    <div class="brand-page-header-container container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-2 me-3">
                <img id="stand-logo" src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->title }} - logo" height="58px">
            </div>
            <div class="col-lg-1">
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img class="stand-header-icons video-corporate"
                        src="https://img.directindustry.com/media/ps/images/common/stand/video-icon.gif"
                        alt="video corpo">
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

            <div class="col-lg-8">
                <ul class="d-flex justify-content-start stand-header-nav mb-0">
                    <li class="px-3">
                        <a class="p-2 {{ Route::current()->getName() == 'brand.overview' ? 'active-brands' : '' }}"
                            href="">Company</a>
                    </li>
                    <li class="px-3">
                        <a class="p-2 {{ Route::current()->getName() == 'brand.products' ? 'active-brands' : '' }}"
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
