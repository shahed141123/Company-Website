@extends('frontend.master')
@section('content')
    <style>
        /* Search Box Design */
        .h-search-form {
            position: relative;
            padding: 20px;
            text-align: center;
        }

        .h-search-form input {
            width: 85%;
            padding: 0px 22px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            font-size: 16px;
            text-transform: capitalize;
            position: relative;
            color: #333;
            height: 45px;
            background-color: #eee;
        }

        .h-search-form button {
            position: relative;
            right: 70px;
            height: 35px;
            color: #fff;
            background: #ae0a46;
            top: 0;
            border-radius: 50px;
            border: none;
            width: 60px;
        }

        .h-search-form button:hover {
            background: #8f1340;
        }

        /* Accordion Design */
        .accordion-collapse {
            border: 0;
        }

        .accordion-button {
            padding: 0px;
            font-weight: bold;
            border: 0;
            font-size: 18px;
            color: #333333;
            text-align: left;
            border-bottom: 1px solid #ddd;
            background-color: #f6f6f6;
        }

        .accordion-button:focus {
            box-shadow: none;
            border: none;
        }

        .accordion-button:not(.collapsed) {
            background: none;
            color: #dc3545;
        }

        .accordion-body {
            padding: 0px 15px 10px;
            background-color: #f6f6f6;
        }

        .accordion-button::after {
            width: auto;
            height: auto;
            content: "+";
            font-size: 40px;
            background-image: none;
            font-weight: 100;
            color: #ae0a46;
            transform: translateY(-10px);
            height: 40px;
        }

        .accordion-button:not(.collapsed)::after {
            width: auto;
            height: auto;
            background-image: none;
            content: "-";
            font-size: 48px;
            color: #ffff;
            transform: translate(0px, -4px) !important;
            transform: rotate(0deg);
        }

        .accordion-button:not(.collapsed) {
            color: #ffffff !important;
            background-color: #ae0a46 !important;
            box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
            height: 44px;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            position: relative;
            top: 0px;
        }

        /* Checkbox Design start */
        .checkbox-wrapper-46 input[type="checkbox"] {
            display: none;
            visibility: hidden;
        }

        .checkbox-wrapper-46 .cbx {
            margin: auto;
            -webkit-user-select: none;
            user-select: none;
            cursor: pointer;
        }

        .checkbox-wrapper-46 .cbx span {
            display: inline-block;
            vertical-align: middle;
            transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-46 .cbx span:first-child {
            position: relative;
            width: 18px;
            height: 18px;
            border-radius: 3px;
            transform: scale(1);
            vertical-align: middle;
            border: 1px solid #9098A9;
            transition: all 0.2s ease;
        }

        .checkbox-wrapper-46 .cbx span:first-child svg {
            position: absolute;
            top: 3px;
            left: 2px;
            fill: none;
            stroke: #FFFFFF;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 16px;
            stroke-dashoffset: 16px;
            transition: all 0.3s ease;
            transition-delay: 0.1s;
            transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-46 .cbx span:first-child:before {
            content: "";
            width: 100%;
            height: 100%;
            background: #ae0a46;
            display: block;
            transform: scale(0);
            opacity: 1;
            border-radius: 50%;
        }

        .checkbox-wrapper-46 .cbx span:last-child {
            padding-left: 8px;
        }

        .checkbox-wrapper-46 .cbx:hover span:first-child {
            border-color: #ae0a46;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child {
            background: #ae0a46;
            border-color: #ae0a46;
            animation: wave-46 0.4s ease;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child svg {
            stroke-dashoffset: 0;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child:before {
            transform: scale(3.5);
            opacity: 0;
            transition: all 0.6s ease;
        }

        @keyframes wave-46 {
            50% {
                transform: scale(0.9);
            }
        }

        /* Hover Image Show */
        .hiddenimg {
            display: none;
        }

        .hiddentxt {
            font-weight: bold;
            z-index: 99;
        }

        .hiddentxt a {
            text-decoration: none;
            z-index: 99;
        }

        .hiddenclick {
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }

        .hiddenclick a {
            text-decoration: none;
        }

        .hiddenclick a:visited {
            text-decoration: none;
        }

        .hiddentxt:hover~.hiddenimg {
            display: block;
            position: absolute;
            z-index: 2
        }

        .hiddenclickimg {
            display: none;

        }

        .product-card {
            border: 0;
            margin-bottom: 5px !important;
            margin-top: 5px !important;
            border-radius: 6px;
            color: rgba(0, 0, 0, 0.87);
            background: #fff;
            width: 100%;
        }
    </style>
    <section style="margin-top: 4.8rem;">
        <div>
            <img src="{{ asset('frontend/assets/images/solutions-banner.jpg') }}" alt="" class="img-fluid">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-8 offset-lg-2">
                    <div>
                        <div class="h-search-form text-center">
                            <form action="#">
                                <input type="search" name="search" placeholder="Search..">
                                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row my-4 p-2">
                <div class="col-lg-5">
                    <div>
                        <p class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Cat</span>egory
                        </p>
                    </div>
                    <div>
                        <div class="accordion accordion-flush" id="faqlist">
                            <div class="accordion-item mb-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button px-3 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        What is Lorem Ipsum?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-47" type="checkbox" />
                                            <label class="cbx" for="cbx-47"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-48" type="checkbox" />
                                            <label class="cbx" for="cbx-48"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-49" type="checkbox" />
                                            <label class="cbx" for="cbx-49"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-50" type="checkbox" />
                                            <label class="cbx" for="cbx-50"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button px-3 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        What is Lorem Ipsum?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-52" type="checkbox" />
                                            <label class="cbx" for="cbx-52"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-53" type="checkbox" />
                                            <label class="cbx" for="cbx-53"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-54" type="checkbox" />
                                            <label class="cbx" for="cbx-54"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-55" type="checkbox" />
                                            <label class="cbx" for="cbx-55"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button px-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        What is Lorem Ipsum?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-57" type="checkbox" />
                                            <label class="cbx" for="cbx-57"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-58" type="checkbox" />
                                            <label class="cbx" for="cbx-58"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-59" type="checkbox" />
                                            <label class="cbx" for="cbx-59"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-60" type="checkbox" />
                                            <label class="cbx" for="cbx-60"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button px-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                        What is Lorem Ipsum?
                                    </button>
                                </h2>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-62" type="checkbox" />
                                            <label class="cbx" for="cbx-62"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-63" type="checkbox" />
                                            <label class="cbx" for="cbx-63"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-64" type="checkbox" />
                                            <label class="cbx" for="cbx-64"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-65" type="checkbox" />
                                            <label class="cbx" for="cbx-65"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button px-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                        What is Lorem Ipsum?
                                    </button>
                                </h2>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-67" type="checkbox" />
                                            <label class="cbx" for="cbx-67"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-68" type="checkbox" />
                                            <label class="cbx" for="cbx-68"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-69" type="checkbox" />
                                            <label class="cbx" for="cbx-69"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-wrapper-46">
                                            <input class="inp-cbx" id="cbx-67" type="checkbox" />
                                            <label class="cbx" for="cbx-67"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>What is Lorem Ipsum?</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Bra</span>nd
                    </p>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="mb-2"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-center"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-end"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="mb-2"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-center"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-end"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="mb-2"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-center"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-end"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="mb-2"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-center"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-end"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="mb-2"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-center"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-end"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="mb-2"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-center"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-end"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="mb-2"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-center"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2 text-end"><i class="fa-solid fa-diamond me-1 main_color"></i>
                                <span class="hiddentxt">
                                    <a href="#">Acronis</a>
                                </span>
                                <span class="hiddenimg">
                                    <img src="https://seeklogo.com/images/A/acronis-logo-F00F666DAC-seeklogo.com.png"
                                        width="250" />
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <p class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Pro</span>duct
            </p>
            <div>
                <ul class="nav nav-tabs row gx-0" id="myTab" role="tablist">
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="true">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item col-lg-2" role="presentation">
                        <button class="nav-link p-1" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            <div class="card shadow-sm rounded-0 product-card">
                                <div class="card-body">
                                    <img class="img-fluid"
                                        src="http://ngenitltd.com/upload/Products/thumbnail/1757960479662742.png"
                                        alt="">
                                </div>
                                <div class="card-footer p-3 main_bg text-white">Lorem ipsum</div>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row my-4 mx-2" style="background: #eff5f5;">
                <div class="col-lg-12 ms-0 ps-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <img class="img-fluid"
                                        src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <h4 class="main_color">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                            Neque, quo?</h4>
                                        <p class="my-2"><span class="me-1"><i
                                                    class="fa-solid fa-ribbon main_color"></i>003-swacr-003</span> <span
                                                class="me-1"><i
                                                    class="fa-solid fa-ribbon main_color"></i>003-swacr-003</span> <span
                                                class="me-1"><i
                                                    class="fa-solid fa-ribbon main_color"></i>003-swacr-003</span></p>
                                        <p class="mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Eum
                                            minima officia eaque
                                            cupiditate labore! Minima, quo dignissimos exercitationem rem assumenda
                                            asperiores ut recusandae! Aspernatur velit debitis nulla error, modi eius!</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center">
                                        <p class="mb-0">Need Help Ordering?</p>
                                        <p class="mb-0 main_color">Call +88 017 1424 3446</p>
                                    </div>
                                    <div class="my-2 pt-2">
                                        <a href="javascript:void(0)" class="nvabar-toggler common_button2 effect02 w-100"
                                            type="button" data-bs-toggle="offcanvas" data-bs-target="#startOffcanvas"
                                            aria-controls="startOffcanvas">
                                            ASK FOR QUOTATION
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="m-0"><i class="fa-solid fa-circle-info me-1"></i>Stock</p>
                                        <p class="text-danger m-0">Unlimited</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="offcanvas offcanvas-start w-25" tabindex="-1" id="startOffcanvas"
            aria-labelledby="startOffcanvasLabel">
            <div class="offcanvas-header">
                <h3>GET QUOTE</h3>
                <button class="offcanvas-icons btn rounded-circle text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close" style="padding-left: none !important;">
                    <i class="fa-solid fa-xmark" style="font-size: 18px !important;"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('rfq.add') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="py-2 px-2 rounded">
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-between align-items-center">
                                            <span style="font-size: 12px;">Product Name <span
                                                    class="text-danger">*</span></span>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control form-control-sm"
                                                name="product_name" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="py-2 px-2 rounded">
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 12px;">Name <span
                                                            class="text-danger">*</span></span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="text" name="name"
                                                        class="form-control form-control-sm w-100" maxlength="100"
                                                        placeholder="Enter Your Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 12px;">Email <span
                                                            class="text-danger">*</span></span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="email" name="email"
                                                        class="form-control form-control-sm w-100" maxlength="100"
                                                        placeholder="Enter Your Email" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 12px;">Mobile <span
                                                            class="text-danger">*</span></span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="number" name="phone"
                                                        class="form-control form-control-sm w-100" maxlength="100"
                                                        placeholder="Enter Mobile Number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 12px;">Company Name</span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="text" name="comapny"
                                                        class="form-control form-control-sm w-100" maxlength="100"
                                                        placeholder="Enter Company Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 12px;">Quantity </span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="number" name="qty"
                                                        class="form-control form-control-sm w-100" maxlength="100"
                                                        placeholder="Enter Your Quantity">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 12px;">Custom Image</span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="file" name="custom_image"
                                                        class="form-control form-control-sm w-100" maxlength="100"
                                                        placeholder="Enter Product Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span style="font-size: 12px;">Type Message</span>
                                                    <textarea class="form-control form-control-sm w-100" id="message" name="message" rows="2"
                                                        placeholder="Enter Your Name"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" name="call"
                                                    style="position: absolute;
                                                                left: 25px;">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Call Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row px-3 mx-3 message g-recaptcha"
                                        data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-sm w-25"
                                                style="background: #ae0a46; color: white;" role="button">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {{-- On Hover image Show --}}
    <script>
        function vidPlay() {
            $("#video1").get(0).play();
        };

        function vidPause() {
            $("#video1").get(0).pause();
        };
        $(document).ready(function() {
            $("#textToggler").click(function() {
                $(".toggleText").toggle();
            });
        });

        function toggleImage() {
            $(".hiddenclickimg").toggle();
        };
    </script>
@endsection
