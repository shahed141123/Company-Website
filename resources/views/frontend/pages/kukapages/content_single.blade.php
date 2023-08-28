@extends('frontend.master')
@section('content')
    <style>
        /* Slider Need Here */
        .slick-slider .element-brands {
            height: 480px;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            margin: 0px 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 20px;
        }

        .slick-slider .slick-disabled {
            opacity: 0;
            pointer-events: none;
        }

        .element-brands {
            margin-right: 20px !important;
        }
    </style>
    <section style="background-color: #F7F7F7;">
        <div class="container-fluid">
            <div class="row">
                <div class="col p-0 m-0">
                    <img class="img-fluid" src="https://img.directindustry.com/images_di/bnr/17587/hd/54819.jpg"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <div class="row d-flex align-items-center">
                <div class="col pt-1">
                    <ul class="d-flex align-items-center brand-bread-crumb p-1">
                        <li><i class="fa-solid fa-house-chimney me-2"></i></li>
                        <li><a href="#">News & Trends</a></li>
                        <li class="bread-crumb-spacer news-color">></li>
                        <li><a href="#" class="news-color">Product Trends</a></li>
                        <li class="bread-crumb-spacer">></li>
                        <li class=""> <a href="#">Robotics - Automation - Industrial IT</a>
                        </li>
                        <li class="bread-crumb-spacer news-color">></li>
                        <li class=""> <a href="#" class="news-color">KUKA AG</a></li>
                        <li class="bread-crumb-spacer">></li>
                        <li class="fw-bold"><a href="#"> Robodonien 2016: LBR iiwa Give Artists</a>
                        </li>
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
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="image-container border-bottom-mcl-7">
                        <img class="img-fluid"
                            src="https://img.directindustry.com/images_di/projects/images-g/robodonien-2016-lbr-iiwa-give-artists-helping-hand-rwth-robot-workshop-119426-15794325.jpg"
                            alt="">
                    </div>
                    <div class="bg-white mt-0 rounded-0 px-5 pt-3">
                        <h3>
                            <span class="main_color">#</span>
                            Product Trends
                        </h3>
                        <h3 class="main_color">
                            Robodonien 2016: LBR iiwa Give Artists A Helping Hand At Rwth Robot Workshop
                        </h3>
                        <h5 class="text-muted">
                            From 16 - 18 September, KUKA was represented by the LBR iiwa at the Robodonien robot art
                            festival. As part of a workshop at the Faculty of Architecture at RWTH Aachen University,
                            visitors had the opportunity to generate foldable elements in a semi-au
                        </h5>
                        <h6 class="pt-2"><span class="fw-bold">LBR IIWA HELPS TO MANUFACTURE COMPONENTS</span><br>
                            The Faculty for Individualized Production in Architecture at RWTH Aachen and KUKA collaborated
                            to produce an intelligent robot helper. Known as DIANA (“Dynamic and Interactive Robotic
                            Assistant for Novel Applications”), the project placed among the finalists at this year’s KUKA
                            Innovation Award. This successful contribution was refined for the Robodonien robot art festival
                            . A KUKA LBR iiwa lightweight robot is part of a traveling pavilion created for a project by
                            students Lukas Mahlendorf and Viktoria Falk under the supervision of Sigrid Brell-Cokcan
                            (Individualized Production) and Linda Hildebrand (Cycle Oriented Construction). The robot
                            functions as an assistant that is controlled by the operator using touch alone. It provides
                            support in constructing foldable elements which can be created from a variety of materials.
                        </h6>
                        <p>
                            <span class="fw-bold pt-3">HUMAN-ROBOT COLLABORATION POSSIBLE WITHOUT PREVIOUS
                                KNOWLEDGE</span><br>
                            At this year’s Robodonien, visitors to a workshop were able to gain hands-on experience with the
                            sensitive seven-axis robot. The robot guided visitors through the assembly tasks. For this, it
                            interacts on a haptic and visual level with its human counterpart. The pre-defined procedure can
                            be modified intuitively by touching and guiding the robot, and the program can be rewound and
                            adapted. This allows the LBR iiwa to quickly and easily learn new assembly positions from its
                            human counterpart. This type of “haptic” programming, which uses neither language nor camera
                            systems, was unveiled to the public by RWTH Aachen University at the Robodonien festival.
                        </p>
                        <p>
                            <span class="fw-bold">VISITORS CAN INTUITIVELY OPERATE THE LIGHTWEIGHT ROBOT </span><br>
                            In the end, the elements produced from the interaction with visitors were used to create a large
                            structure. “The sensitivity and ease of operation make the LBR iiwa the perfect assistant for
                            our project. The option of switching the robot axes to “soft mode” enables a new, intuitive
                            interaction with humans. In this way, the robot learns from the human and the human from the
                            robot with the result that both sides perfect their work sequence, which is then saved for all
                            additional parts”, explains Sigrid Brell-Cokcan.
                        </p>
                        <p class="text-end pb-3">
                            <small> <a href="">More Information <i
                                        class="fa-solid fa-right-from-bracket"></i></a></small>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white">
                        {{-- Profile Details --}}
                        <div class="avatar-news">
                            <img class="rounded-circle pt-3 pb-3"
                                src="https://img.directindustry.com/images_di/projects/images-g/robodonien-2016-lbr-iiwa-give-artists-helping-hand-rwth-robot-workshop-119426-15794325.jpg"
                                alt="" width="110px" height="110px">
                        </div>
                        <div class="px-5 pb-3">
                            <h2 style="color: #ae0a46; text-align: center">Details</h2>
                            <h6>
                                <a href="" data-bs-toggle="modal" data-bs-target="#news-location-modal">
                                    <i class="fa-solid fa-location-dot news-color"></i>
                                    Zugspitzstraße 140, 86165 Augsburg,
                                    Germany
                                </a>
                            </h6>
                            <h6 class="fw-normal text-muted"><i class="fa-solid fa-user news-color"></i> KUKA Roboter</h6>
                            <div class="d-flex justify-content-center flex-column">
                                <h4 class="py-3" style="color: #ae0a46; text-align: center">Keywords</h4>
                                <button type="button" class="common_button2 effect02 rounded-pill">Articulated
                                    robot</button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-3 mt-2">
                        <h5 class="news-color text-center py-3">Associated Trend items</h5>
                        {{-- First Item --}}
                        <div class="mx-3 pb-2">
                            <div class="content-brand">
                                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                    <div class="content-overlay-brand"></div>
                                    <div>
                                        <img class="content-image"
                                            src="https://img.directindustry.com/images_di/projects/images-om/119418-15794264.jpg"
                                            alt="">
                                    </div>
                                    <div>
                                        <p class="pt-2" style="font-size: 12px;text-align:center;">Removing the barriers
                                            to success:
                                            KUKA robots work collaboratively with humans</p>
                                    </div>
                                    <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                        <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                        <hr class="p-1 pt-1 m-0 text-white">
                                        <p>iiQKA is a combination of the new robot operating system and ecosystem from
                                            KUKA,
                                            designed to make the user experience as intuitive, powerful, fast and
                                            scalable as
                                            possible – empowering more people, companies and markets than ever before to
                                            access
                                            and drive the huge advantages robotic automation provides. It will start
                                            with KUKA’s
                                            new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                        <div class="description-footer-brand inline-center text-white">
                                            <a href="#" class="link text-white"><i
                                                    class="fa fa-plus-circle me-2"></i>More information</a>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- Second Item --}}
                        <div class="mx-3 pb-2">
                            <div class="content-brand">
                                <a href="#" target="_blank">
                                    <div class="content-overlay-brand"></div>
                                    <div>
                                        <img class="content-image"
                                            src="https://img.directindustry.com/images_di/projects/images-om/119415-15794155.jpg"
                                            alt="">
                                    </div>
                                    <div>
                                        <p class="pt-2" style="font-size: 12px;text-align:center;">KUKA LBR Med
                                            lightweight robot
                                            certified for integration into a medical product</p>
                                    </div>
                                    <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                        <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                        <hr class="p-1 pt-1 m-0 text-white">
                                        <p>iiQKA is a combination of the new robot operating system and ecosystem from
                                            KUKA,
                                            designed to make the user experience as intuitive, powerful, fast and
                                            scalable as
                                            possible – empowering more people, companies and markets than ever before to
                                            access
                                            and drive the huge advantages robotic automation provides. It will start
                                            with KUKA’s
                                            new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                        <div class="description-footer-brand inline-center text-white">
                                            <a href="#" class="link text-white"><i
                                                    class="fa fa-plus-circle me-2"></i>More information</a>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- Second Item --}}
                        <div class="mx-3 pb-2">
                            <div class="content-brand">
                                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                                    <div class="content-overlay-brand"></div>
                                    <div>
                                        <img class="content-image"
                                            src="https://img.directindustry.com/images_di/projects/images-om/119429-15794414.jpg"
                                            alt="">
                                    </div>
                                    <div>
                                        <p class="pt-2" style="font-size: 12px;text-align:center;">Control Software
                                            KUKA.PLC
                                            mxAutomation 2.1 certified by PLCopen</p>
                                    </div>
                                    <div class="content-details fadeIn-bottom fadeIn-left-brand">
                                        <p class="brand-news-trends-title">iiQKA: The new OS</p>
                                        <hr class="p-1 pt-1 m-0 text-white">
                                        <p>iiQKA is a combination of the new robot operating system and ecosystem from
                                            KUKA,
                                            designed to make the user experience as intuitive, powerful, fast and
                                            scalable as
                                            possible – empowering more people, companies and markets than ever before to
                                            access
                                            and drive the huge advantages robotic automation provides. It will start
                                            with KUKA’s
                                            new cobot LBR iisy in the iiQKA Pre-Laun...</p>
                                        <div class="description-footer-brand inline-center text-white">
                                            <a href="#" class="link text-white"><i
                                                    class="fa fa-plus-circle me-2"></i>More information</a>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-3 mt-2 pb-5">
                        <h5 class="news-color text-center py-3">Products associated</h5>
                        {{-- First Item --}}
                        <div class="mx-3 pb-2 border">
                            <div>
                                <img class="img-fluid"
                                    src="https://img.directindustry.com/images_di/photo-mg/17587-15940099.jpg"
                                    alt="">
                                <div class="text-uppercase text-center">
                                    <p class="text-center text-muted pt-2 pb-0 mb-0">articulated robot</p>
                                    <h4 class="fw-bold">LBR iiwa series</h4>
                                </div>
                            </div>
                        </div>
                        {{-- Second Item --}}
                        <div class="mx-3 pb-2 mt-3 border">
                            <div>
                                <img class="img-fluid"
                                    src="	https://img.directindustry.com/images_di/photo-mg/17587-9726308.jpg"
                                    alt="">
                                <div class="text-uppercase text-center">
                                    <p class="text-center text-muted pt-2 pb-0 mb-0">articulated robot</p>
                                    <h4 class="fw-bold">LBR IIWA 14 R820</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-0 rounded-0 px-5 pt-3 pb-3">
                        <small class="text-muted">*Prices are pre-tax. They exclude delivery charges and customs duties and
                            do
                            not include
                            additional charges for installation or activation options. Prices are indicative only and may
                            vary</small>
                    </div>
                </div>
            </div>
        </div>
        {{-- Brand Logo --}}
        <div class="container-fluid brand-logo-area">
            <div class="row">
                <div class="slick-slider-brand-logo">
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L69508.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                    <div class="element-brands-logo">
                        <img src="https://img.directindustry.com/images_di/logo-pp/L182419.gif"
                            alt="PHC Europe B.V. / PHCbi">
                    </div>
                </div>
            </div>
        </div>
        <!---------End -------->
    </section>
    <!-- Location Modal -->
    <div class="modal fade" id="news-location-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="news-location-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-white rounded-0 p-1 px-3 m-0" style="background-color: #ae0a46;">
                    <h5 class="modal-title text-white" id="news-location-modalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7497253656406!2d90.3746123742085!3d23.791924987183013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73458f06137%3A0x50dcc5d69e174edc!2sShewrapara%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1693200705727!5m2!1sen!2sbd"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".slick-slider-brand-logo").slick({
            slidesToShow: 7,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
            // dots: false, Boolean
            // arrows: false, Boolean
        });
    </script>
@endsection
