@extends('frontend.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        .global_call_section::after {
            background: url('{{ asset('storage/' . $learnmore->background_image) }}');
            content: "";
            position: absolute;
            height: 230px;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            /* background-attachment: fixed; */
            width: 100%;
            background-color: #cbc4c3;
            top: 25%;
            left: 0px;
            z-index: -1;
        }

        .outcome_smail_bussiness_title h2 {
            font-family: "klinic-slab", "Helvetica Neue", "Helvetica", Helvetica, Arial,
                sans-serif;
        }

        .global_call_section_content {
            max-width: 575px;
            background-color: var(--heading);
            padding: 50px;
            margin-left: -15px;
            margin-top: 1.9rem;
        }

        .word {
            position: absolute;
            opacity: 0;
            font-size: 38px;
        }

        .letter {
            display: inline-block;
            position: relative;
            float: left;
            transform: translateZ(25px);
            transform-origin: 50% 50% 25px;
            font-weight: 400 !important;
        }


        .letter.out {
            transform: rotateX(90deg);
            transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            font-weight: 400 !important;
        }


        .letter.behind {
            transform: rotateX(-90deg);
            font-weight: 400 !important;
        }


        .letter.in {
            transform: rotateX(0deg);
            transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-weight: 400 !important;
        }


        .wisteria {
            color: #ae0a46;
        }


        .belize {
            color: #ae0a46;
        }


        .pomegranate {
            color: #ae0a46;
        }


        .green {
            color: #ae0a46;
        }


        .midnight {
            color: #ae0a46;
        }


        .normal_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 300 !important;
        }


        .animated_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 400 !important;
        }


        /* Extra Section */
        .ag-format-container {
            width: 1142px;
            margin: 0 auto;
        }




        .ag-offer-block {
            padding: 35px 0 20px
        }


        .ag-offer_list {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start
        }


        .ag-offer_item {
            width: 33.33%;


            overflow: hidden;


            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;


            position: relative;
        }


        .ag-offer_item:not(:nth-child(1)):not(:nth-child(2)):not(:nth-child(3)) {
            border-top: 1px solid #ae0a46;
        }


        .ag-offer_item:not(:nth-child(3n)) {
            border-right: 1px solid #ae0a46;
        }


        .ag-offer_item:nth-child(1) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }


        .ag-offer_item:nth-child(2) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }


        .ag-offer_item:nth-child(3) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }


        .ag-offer_item:nth-child(4) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }


        .ag-offer_item:nth-child(5) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }


        .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }


        .ag-offer_item:hover .ag-offer_visible-item {
            opacity: 0;


            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);


            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }


        .ag-offer_visible-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;


            height: 100%;
            width: 100%;
            padding: 35px 40px;


            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;


            -webkit-transition: .4s .3s;
            -moz-transition: .4s .3s;
            -o-transition: .4s .3s;
            transition: .4s .3s;
        }


        .ag-offer_img {
            height: 64px;
            width: 64px;
            margin: 0 15px 0 0;
        }


        .ag-offer_title {
            font-size: 22px;


            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }


        .ag-offer_hidden-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;


            padding: 30px;


            opacity: 0;


            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;


            -webkit-transform: rotate(180deg) scale(0);
            -moz-transform: rotate(180deg) scale(0);
            -ms-transform: rotate(180deg) scale(0);
            -o-transform: rotate(180deg) scale(0);
            transform: rotate(180deg) scale(0);


            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }


        .ag-offer_item:hover .ag-offer_hidden-item {
            opacity: 1;


            -webkit-transform: rotate(0deg) scale(1);
            -moz-transform: rotate(0deg) scale(1);
            -ms-transform: rotate(0deg) scale(1);
            -o-transform: rotate(0deg) scale(1);
            transform: rotate(0deg) scale(1);


            -webkit-transition-delay: .3s;
            -moz-transition-delay: .3s;
            -o-transition-delay: .3s;
            transition-delay: .3s;
        }


        .ag-offer_text {
            max-width: 100%;


            opacity: 0;


            font-size: 14px;
            color: #FFF;


            -webkit-transition: .3s .5s;
            -moz-transition: .3s .5s;
            -o-transition: .3s .5s;
            transition: .3s .5s;
        }


        .ag-offer_item:hover .ag-offer_text {
            opacity: 1;
        }


        .ag-offer_btn {
            display: block;
            padding: 10px 20px;
            border: 2px solid #FFF;


            position: absolute;
            top: 50%;
            left: 50%;


            white-space: nowrap;
            font-size: 25px;
            color: #FFF;


            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;


            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }


        .ag-offer_btn:hover {
            border: 2px solid #0000d1;
            background-color: #FFF;


            text-decoration: none;
            color: #0000d1;
        }


        /*  */
        .box {
            font-family: 'Mandali', sans-serif;
            text-align: center;
            overflow: hidden;
            position: relative;
        }


        .box:before,
        .box:after {
            content: "";
            background: rgba(11, 11, 12, 0.85);
            width: 200%;
            height: 200%;
            opacity: .75;
            transform: skew(45deg) translateX(100%);
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 1;
            transition: all .6s ease;
        }


        .box:after {
            transform: skew(45deg) translateX(-100%);
            top: 0;
            left: 0;
            right: auto;
            bottom: auto;
            z-index: 0;
        }


        .box:hover:before,
        .box:hover:after {
            transform: skew(45deg) translateX(0);
        }


        .box img {
            width: 100%;
            height: auto;
            transition: all 0.35s;
        }


        .box:hover img {
            opacity: 0.5;
        }


        .box-content {
            color: #fff;
            width: 85%;
            opacity: 0;
            transform: translateX(-50%) translateY(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transition: all 0.6s ease;
        }


        .box:hover .box-content {
            opacity: 1;
        }


        .box .title {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 3px;
        }


        .box .post {
            font-size: 14px;
            font-weight: 200;
            letter-spacing: 1px;
            text-transform: capitalize;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 10px;
            display: block;
        }


        .box .icon {
            padding: 0;
            margin: 0;
            list-style: none;
        }


        .box .icon li {
            margin: 0 3px;
            display: inline-block;
        }


        .box .icon li a {
            color: #EA2027;
            background: #fff;
            font-size: 16px;
            line-height: 34px;
            width: 34px;
            height: 34px;
            display: block;
            transition: all 0.35s;
        }


        .box .icon li a:hover {
            color: #fff;
            background: #EA2027;
        }


        /* New Box Design */
        .wedo-cards__container {
            max-width: 1200px;
            margin: 50px auto;
        }


        @media screen and (min-width: 992px) {
            .wedo-cards__container {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                gap: 15px;
            }
        }


        .wedo-cards__item {
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            -webkit-box-shadow: 0 13px 27px -5px hsla(240deg, 30%, 28%, 0.25), 0 8px 16px -8px hsla(0deg, 0%, 0%, 0.3), 0 -6px 16px -6px hsla(0deg, 0%, 0%, 0.03);
            box-shadow: 0 13px 27px -5px hsla(240deg, 30%, 28%, 0.25), 0 8px 16px -8px hsla(0deg, 0%, 0%, 0.3), 0 -6px 16px -6px hsla(0deg, 0%, 0%, 0.03);
            position: relative;
            top: 0;
            -webkit-transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            margin-bottom: 20px;
            text-align: left;
        }


        @media screen and (min-width: 992px) {
            .wedo-cards__item {
                width: 100%;
                margin: 0;
                min-height: 475px;
            }


            .wedo-cards__item:hover,
            .wedo-cards__item:focus {
                top: -40px;
                -webkit-transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
                transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            }


            .wedo-cards__item:hover .wedo-cards__content,
            .wedo-cards__item:focus .wedo-cards__content {
                top: 0;
                height: 110%;
                padding: 10%;
                -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
                transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            }


            .wedo-cards__item:hover .wedo-cards__heading,
            .wedo-cards__item:focus .wedo-cards__heading {
                margin-bottom: 20px;
            }


            .wedo-cards__item:hover .wedo-cards__sub-heading,
            .wedo-cards__item:focus .wedo-cards__sub-heading {
                opacity: 1;
                height: auto;
                -webkit-transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
                transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
                -webkit-transition-delay: 0.3s;
                transition-delay: 0.3s;
            }
        }


        .wedo-cards__content {
            padding: 20px;
            margin-top: 200px;
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(174, 10, 70, 0.8)), color-stop(rgba(168, 11, 110, 0.8)), to(rgba(88, 40, 115, 0.8)));
            background-image: linear-gradient(90deg, rgba(174, 10, 70, 0.8), rgba(168, 11, 110, 0.8), rgba(88, 40, 115, 0.8));
        }


        @media screen and (min-width: 992px) {
            .wedo-cards__content {
                padding: 3% 10%;
                text-align: center;
                margin: 0;
                position: absolute;
                width: 100%;
                top: 70%;
                -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
                transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            }
        }


        .wedo-cards__heading,
        .wedo-cards__sub-heading {
            color: #fff;
            line-height: 1.5em;
            margin: 0;
        }


        .wedo-cards__heading {
            font-size: 36px;
            margin: 0;
        }


        .wedo-cards__sub-heading {
            font-size: 18px;
        }


        @media screen and (min-width: 992px) {
            .wedo-cards__sub-heading {
                font-size: 18px;
                opacity: 0;
                height: 0;
                overflow: hidden;
                -webkit-transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
                transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            }
        }


        .wedo-cards__cta {
            background-color: #fff;
            padding: 19px 35px 18px;
            -webkit-appearance: none;
            display: inline-block;
            margin-top: 10px;
            color: #ae0a46;
            border: 2px solid #5f5753;
            font-size: 14px;
            font-weight: 400;
        }


        @media screen and (min-width: 992px) {
            .wedo-cards__cta {
                margin-top: 10%;
            }
        }


        .wedo-cards__cta:hover,
        .wedo-cards__cta:focus {
            background-color: #5f5753;
            color: #fff;
        }


        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }




        /* */
        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }


            .ag-offer_item {
                width: 100%;
                margin: 0 0 30px;
                border: 0 none !important;
                border-bottom: 1px solid #c1c1c1 !important;
            }


            .ag-offer_visible-item {
                padding: 0 20px 30px;


                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -moz-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }


            .ag-offer_item:hover .ag-offer_visible-item {
                opacity: 1;


                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }


            .ag-offer_hidden-item {
                padding: 0 20px 20px;


                opacity: 1;


                position: static;


                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }


            .ag-offer_item:nth-child(1) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(2) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(3) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(4) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(5) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
                background-color: transparent;
            }


            .ag-offer_item:hover .ag-offer_text {
                opacity: 1;
            }


            .ag-offer_title {
                font-weight: bold;
            }


            .ag-offer_text {
                opacity: 1;


                font-size: 18px;
                color: #000;
            }


            .ag-offer_btn {
                border: 2px solid #0000d1;
                background-color: #000080;


                position: static;


                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }


        }


        @media only screen and (max-width: 639px) {}


        @media only screen and (max-width: 479px) {}


        @media (min-width: 768px) and (max-width: 979px) {
            .ag-format-container {
                width: 750px;
            }


        }


        @media (min-width: 980px) and (max-width: 1161px) {
            .ag-format-container {
                width: 960px;
            }


        }
    </style>
    {{-- For Only Tab --}}
    <style>
        .tab-content {
            background: transparent !important;
            line-height: 25px;
            padding: 0px;
        }

        .nav-tabs .nav-link,
        .nav-tabs .nav-item .nav-link {
            /* background-color: #ae0a46; */
            border: 1px solid #ae0a46 !important;
            padding: 2px 20px 4px !important;
            border-radius: 20px;
            font-size: 11.0px;
            font-weight: 400 !important;
            color: #ae0a46 !important;
            margin: 0 !important;
            text-transform: uppercase;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            background-color: #ae0a46 !important;
            border: 1px solid #ae0a46 !important;
            padding: 2px 20px 4px !important;
            border-radius: 20px;
            font-size: 11.0px;
            font-weight: 400 !important;
            color: #fff !important;
            margin: 0 !important;
            text-transform: uppercase;
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border: 1px solid #ae0a46 !important;
            /* padding: 2px 20px 1px !important; */
            border-radius: 20px;
            font-size: 11.0px;
            font-weight: 400 !important;
            /* color: #ffffff !important; */
            margin: 0 !important;
            text-transform: uppercase;
        }

        .extra_button_learn_more {
            color: #fff;
            padding: 2px 20px 3px;
            display: inline-block;
            background: #A80B6E;
            border-radius: 20px;
            text-transform: uppercase;
            font-size: 11.0px;
            font-weight: 400;
        }
    </style>


    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.8)
        ),url('{{ asset('storage/' . $learnmore->image_banner) }}');">
        {{-- style="background-image: url('{{ asset('storage/' . $learnmore->image_banner) }}');"> --}}
        <div>
            <div class="">
                <div class="container ">
                    {{-- <h1 class="text-capitalize w-50 mx-auto">{{ $learnmore->title }}.</h1> --}}
                    <div class="outcome_assetType mb-4">
                        <a href="#">{{ $learnmore->badge }}</a>
                    </div>
                    @php
                        $sentence = $learnmore->title;

                        $words = str_word_count($sentence, 1);

                        // Get the last word of the sentence using the end() function
                        $last_word = end($words);

                        // Get the second last word of the sentence using the array_slice() and end() functions
                        $last_two_words = array_slice($words, -2, 1);
                        $second_last_word = end($last_two_words);

                        // Get the third last word of the sentence using the array_slice() and end() functions
                        $last_three_words = array_slice($words, -3, 1);
                        $third_last_word = end($last_three_words);
                        //$fourth_last_word = end(array_slice($words, -4, 1));

                        // Calculate the length of the last two words combined
                        $last_three_words_length = strlen($third_last_word) + strlen($second_last_word) + strlen($last_word) + 3; // +2 to account for the spaces between words

                        // Use the substr() function to remove the last two words from the sentence
                        $manipulated_sentence = substr($sentence, 0, -$last_three_words_length);
                        //dd($manipulated_sentence);
                    @endphp
                    <h1 class="text-capitalize w-50 mx-auto">{{ $manipulated_sentence }}</h1>
                    <h2 class="text-white text-center" style=" font-size: 30px; margin-left: -220px;">
                        <span class="normal_text text-capitalize">{{ $third_last_word }} {{ $second_last_word }}</span>
                        <span class="word wisteria ml-2 normal_text fw-bold"> {{ $last_word }}</span>
                        <span class="word wisteria ml-2 normal_text fw-bold"> {{ $last_word }}</span>
                        <span class="word belize ml-2 normal_text fw-bold"> {{ $last_word }}</span>
                        <span class="word pomegranate ml-2 normal_text fw-bold"> {{ $last_word }}</span>


                    </h2>
                    <div class="row ">
                        <!--BUTTON START-->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="m-4">
                                <a class="common_button2" href="{{ route('contact') }}">Hear from our team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--=======// Techincal Expertise //========-->
    <section>
        <div class="container py-3">
            <div class="row py-2">
                <h2 class="text-center text-capitalize py-2">{{ $learnmore->header_one }}</h2>
                <p class="text-center py-1">{{ $learnmore->header_two }}</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="wedo-cards__container">
                        <div class="wedo-cards__item"
                            style="background-image: url('{{ asset('frontend/images/Frame 4 (4).jpg') }}');">
                            <div class="wedo-cards__content">
                                <h3 class="wedo-cards__heading">{{ Str::limit($learnmore->box_one_title, 18) }}</h3>
                                <p class="wedo-cards__sub-heading">{!! $learnmore->box_one_short_des !!}.
                                    <a class="wedo-cards__cta" href="{{ $learnmore->box_one_link }}">Explore
                                        {{ $learnmore->box_one_title }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wedo-cards__container">
                        <div class="wedo-cards__item"
                            style="background-image: url('{{ asset('frontend/images/Frame 4 (5).jpg') }}');">
                            <div class="wedo-cards__content">
                                <h3 class="wedo-cards__heading">{{ Str::limit($learnmore->box_two_title, 18) }}</h3>
                                <p class="wedo-cards__sub-heading">{!! $learnmore->box_two_short_des !!}
                                    <a class="wedo-cards__cta" href="{{ $learnmore->box_two_link }}">Explore
                                        {{ $learnmore->box_two_title }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wedo-cards__item mt-5"
                        style="background-image: url('{{ asset('frontend/images/Frame 4 (6).jpg') }}');">
                        <div class="wedo-cards__content">
                            <h3 class="wedo-cards__heading">{{ Str::limit($learnmore->box_three_title, 18) }}</h3>
                            <p class="wedo-cards__sub-heading">{!! $learnmore->box_three_short_des !!}
                                <a class="wedo-cards__cta" href="{{ $learnmore->box_three_link }}">Explore
                                    {{ $learnmore->box_three_title }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======// Techincal Expertise //========-->
    <!--======// our clint tab //======-->
    <section>
        <div class="container rounded-lg bg-light">
            <div class="row">
                <div class="text-center mt-5">
                    <h3>{{ $learnmore->success_story_title }}</h3>
                    <p>
                        <span class=""><a href="{{ route('all.story') }}" class="fw-bold"
                                style="color: #ae0a46;">View all client
                                stories →</a>
                        </span>
                    </p>
                </div>
                <div>
                    <ul class="nav nav-tabs d-flex justify-content-center border-0 mt-3" id="myTab" role="tablist">
                        @if (!empty($story1->badge))
                            @php
                                $tags_1 = explode(',', $story1->tags);
                            @endphp
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home"
                                    style="padding: 18px 20px 20px !important;"
                                    aria-selected="true">{{ $story1->badge }}</button>
                            </li>
                        @endif
                        @if (!empty($story2->badge))
                            @php
                                $tags_2 = explode(',', $story2->tags);
                            @endphp
                            <li class="nav-item ms-2" role="presentation">
                                <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    style="padding: 18px 20px 20px !important;"
                                    aria-selected="false">{{ $story2->badge }}</button>
                            </li>
                        @endif
                        @if (!empty($story3->badge))
                            @php
                                $tags_3 = explode(',', $story3->tags);
                            @endphp
                            <li class="nav-item ms-2" role="presentation">
                                <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact"
                                    style="padding: 18px 20px 20px !important;"
                                    aria-selected="false">{{ $story3->badge }}</button>
                            </li>
                        @endif
                    </ul>
                    

                    <div class="tab-content mt-5 mb-3" id="myTabContent">
                        @if (!empty($story1->badge))
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-5">
                                        <img class="img-fluid rounded-pill"
                                            src="{{ asset('storage/' . $story1->image) }}" alt="">
                                        {{-- <img class="img-fluid rounded-pill" src="{{ asset('storage/' . $story1->image) }}" alt=""> --}}
                                    </div>
                                    <div class="col-lg-7">
                                        <h2>{{ $story1->title }}</h2>
                                        <p>{{ $story1->header }}</p>
                                        <div class="text-start p-2">
                                            <a class="common_button2 effect01"
                                                href="{{ route('story.details', $story1->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($story2->badge))
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-5">
                                        {{-- <img class="img-fluid rounded-pill" src="{{ asset('storage/' . $story2->image) }}" alt=""> --}}
                                        <img class="img-fluid rounded-pill"
                                            src="{{ asset('storage/' . $story2->image) }}" alt="">
                                    </div>
                                    <div class="col-lg-7">
                                        <h2>{{ $story2->title }}</h2>
                                        <p>{{ $story2->header }}</p>
                                        <div class="text-start p-2">
                                            <a class="common_button2 effect01"
                                                href="{{ route('story.details', $story1->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($story3->badge))
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-5">
                                        {{-- <img class="img-fluid rounded-pill" src="{{ asset('storage/' . $story2->image) }}" alt=""> --}}
                                        <img class="img-fluid rounded-pill"
                                            src="{{ asset('storage/' . $story3->image) }}" alt="">
                                    </div>
                                    <div class="col-lg-7">
                                        <h2>{{ $story3->title }}</h2>
                                        <p>{{ $story3->header }}</p>
                                        <div class="text-start p-2">
                                            <a class="common_button2 effect01"
                                                href="{{ route('story.details', $story1->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->
    <!--=====// Global call section //=====-->
    <section class="global_call_section section_padding">
        <div class="container">
            <!-- content -->
            @php
                $sentence = $learnmore->consult_title;
            @endphp
            <div class="global_call_section_content">
                <div class="home_title" style="width: 100%; margin: 0px;">
                    <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                        <span>{{ \Illuminate\Support\Str::substr($sentence, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence, 1) }}


                    </h5>
                    <p class="home_title_text text-white" style="text-align: left;">{{ $learnmore->consult_short_des }}
                    </p>
                    <div class="business_seftion_button" style="text-align: left;">
                        <a href="{{ route('contact') }}">Explore business outcomes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->

    {{-- <section>
        <div class="container mt-5 mb-5">
            <div class="row mt-5 mb-5">
                <div class="col-lg-6">
                    <div>
                        <img class="img-fluid"
                            src="https://www.insight.com/content/dam/insight-web/en_US/article-images/gated-content/the-path-to-digital-transformation/the-path-to-digital-transformation-report-thumbnail.png"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="marginB20"><span class="extra_button_learn_more">Analyst report</span></p>
                    <h2>The No. 1 technology initiative for 2023 is optimization.</h2>
                    <p>Leading organizations are preparing for the future through three IT initiatives — data and
                        application modernization, platform performance and security integrations. Discover insights,
                        roadblocks and solutions for success in our 2023 survey report.</p>
                    <div class="home_card_button text-start p-2">
                        <a class="effect01" href="">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====// We serve //=====-->
    <div class="container pb-5">
        <!-- section title -->
        <div class="clint_help_section_heading_wrapper">
            <!-- title -->
            <h5 class="home_title_heading" style="text-align: left;">
                <h5 class="home_title_heading" style="text-align: left;">
                    <div class="software_feature_title">
                        <h1 class="text-center pt-4 pb-4">
                            Industries We Serve
                        </h1>
                    </div>
                </h5>
                <p class="home_title_text">
                    <span class="font-weight-bold">{{ $learnmore->industry_header }} </span>
                </p>
        </div>
        <!-- section content wrapper -->
        <div class="row mb-4">
            <!-- content -->
            <div class="col-lg-9 col-sm-12">
                <!-- we_serveItem_wrapper -->
                <div class="row">
                    <!-- item -->


                    @if ($industrys)
                        @foreach ($industrys as $item)
                            <div class="col-lg-3 col-sm-6 p-1">
                                <div class="we_serve_item">
                                    <a href="{{ route('industry.details', $item->id) }}">
                                        <div class="we_serve_item_image">
                                            <img src="{{ asset('storage/' . $item->logo) }}" alt="">
                                        </div>
                                        <div class="we_serve_item_text">{{ $item->title }}</div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
            <!-- sidebar -->
            <div class="col-lg-3 col-sm-12">

                <!-- sidebar list -->
                <div>
                    @if ($random_industries)
                        @foreach ($random_industries as $item)
                            <div class="pt-2">
                                <a href="{{ route('industry.details', $item->id) }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h5 class="text-white brand_side_text">{{ $item->title }} ›</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
    </div>
    <!---------End -------->


    <section class="container mt-3">
        <div class="outcome_smail_bussiness_title">
            <!-- <hr class="lineTop"> -->
            <h2>{!! $learnmore->footer !!}</h2>
            <hr class="lineBottom">
        </div>
    </section>


    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection
@once
    @section('styles')
        <style>
            .word {
                position: absolute;
                opacity: 0;
                font-size: 38px;
            }


            .active,
            .collapsible:focus {
                border-top: none !important;
                border-left: none !important;
                border-right: none !important;
            }
        </style>
    @endsection
    @section('scripts')
        {{-- text animation Learn More Page --}}
        <script>
            var words = document.getElementsByClassName('word');
            var wordArray = [];
            var currentWord = 0;


            words[currentWord].style.opacity = 1;
            for (var i = 0; i < words.length; i++) {
                splitLetters(words[i]);
            }


            function changeWord() {
                var cw = wordArray[currentWord];
                var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
                for (var i = 0; i < cw.length; i++) {
                    animateLetterOut(cw, i);
                }


                for (var i = 0; i < nw.length; i++) {
                    nw[i].className = 'letter behind';
                    nw[0].parentElement.style.opacity = 1;
                    animateLetterIn(nw, i);
                }


                currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
            }


            function animateLetterOut(cw, i) {
                setTimeout(function() {
                    cw[i].className = 'letter out';
                }, i * 80);
            }


            function animateLetterIn(nw, i) {
                setTimeout(function() {
                    nw[i].className = 'letter in';
                }, 340 + (i * 80));
            }


            function splitLetters(word) {
                var content = word.innerHTML;
                word.innerHTML = '';
                var letters = [];
                for (var i = 0; i < content.length; i++) {
                    var letter = document.createElement('span');
                    letter.className = 'letter';
                    letter.innerHTML = content.charAt(i);
                    word.appendChild(letter);
                    letters.push(letter);
                }


                wordArray.push(letters);
            }


            changeWord();
            setInterval(changeWord, 4000);
        </script>
        {{-- text animation --}}
    @endsection
@endonce
