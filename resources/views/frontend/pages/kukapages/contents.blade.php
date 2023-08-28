@extends('frontend.master')
@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col p-0 m-0">
                    <img class="img-fluid" src="https://img.directindustry.com/images_di/bnr/17587/hd/54819.jpg"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-2">
            <div class="row d-flex align-items-center">
                <div class="col pt-1">
                    <ul class="d-flex align-items-center brand-bread-crumb p-1">
                        <li><i class="fa-solid fa-house-chimney me-2"></i></li>
                        <li><a href="#">News &amp; Trends</a></li>
                        <li class="bread-crumb-spacer">></li>
                        <li class="fw-bold">KUKA AG</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container py-3 mb-3" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <img id="stand-logo" src="https://img.directindustry.com/images_di/logo-p/L17587.gif"
                        alt="KUKA AG - logo">
                </div>
                <div class="col-lg-1">
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <img class="stand-header-icons video-corporate"
                            src="https://img.directindustry.com/media/ps/images/common/stand/video-icon.gif"
                            alt="video corpo">
                    </a>
                    <!-- Modal -->
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
                    <!-- Modal End-->

                </div>
                <div class="col-lg-8">
                    <ul class=" d-flex justify-content-start stand-header-nav">
                        <li class="">
                            <a href="">Company</a>
                        </li>
                        <li class="">
                            <a href="#">Products</a>
                        </li>

                        <li class="">
                            <a href="#">Catalogs</a>
                        </li>

                        <li class="active-brands">
                            <a href="#">News &amp; Trends</a>
                        </li>

                        <li class="disable-brands">
                            <span>Exibitation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h2 class="company-tab-title">
                        <span style="font-size: 20px;">Technical brochures</span>
                    </h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <div>
                                    <img class="content-image" src="https://img.directindustry.com/images_di/projects/images-om/129244-16568738.jpg" alt="">
                                </div>
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <img class="content-image" src="https://img.directindustry.com/images_di/projects/images-om/119416-15794242.jpg" alt="">
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <img class="content-image" src="https://img.directindustry.com/images_di/projects/images-om/129244-16568738.jpg" alt="">
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <img class="content-image" src="https://img.directindustry.com/images_di/projects/images-om/119416-15794242.jpg" alt="">
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h2 class="company-tab-title">
                        <span style="font-size: 20px;">All KUKA AG catalogs and technical brochures</span>
                    </h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <div>
                                    <img class="content-image" src="https://source.unsplash.com/HkTMcmlMOUQ" alt="">
                                </div>
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <img class="content-image" src="https://source.unsplash.com/HkTMcmlMOUQ" alt="">
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <img class="content-image" src="https://source.unsplash.com/HkTMcmlMOUQ" alt="">
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="container-area-brand">
                        <div class="content-brand">
                            <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                <div class="content-overlay-brand"></div>
                                <img class="content-image" src="https://source.unsplash.com/HkTMcmlMOUQ" alt="">
                                <div>
                                    <p style="font-size: 12px;text-align:center;">The new OS and Ecosystem from KUKA</p>
                                </div>
                                <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                    <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                    <hr class="p-1 pt-1 m-0 text-white">
                                    <p>iiQKA is a combination of the new robot operating system and ecosystem from KUKA,
                                        designed to make the user experience as intuitive, powerful, fast and scalable as
                                        possible – empowering more people, companies and markets than ever before to access
                                        and drive the huge advantages robotic automation provides. It will start with KUKA’s
                                        new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                    <div class="description-footer-brand inline-center text-white">
                                        <a href="#" class="link text-white"><i class="fa fa-plus-circle me-2"></i>More information</a>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endsection
