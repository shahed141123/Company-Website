@extends('frontend.master')
@section('content')
    <style>
        #query-rfq {
            display: none;
            /* Initially hide both sections */
        }

        .rfq_box {
            background-color: #fff;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .form-select {
            border-color: #eee;
            outline: 0;
            box-shadow: 0 0 0 0.25rem transparent;
        }

        .form-select:focus {
            border-color: #eee;
            outline: 0;
            box-shadow: 0 0 0 0.25rem transparent;
        }

        .dropdown-select {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
            background-color: #fff;
            border: solid 1px #eee;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            float: left;
            font-size: 14px;
            font-weight: normal;
            height: auto;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 30px;
            position: relative;
            text-align: left !important;
            transition: all 0.2s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            width: auto;


        }


        .dropdown-select:focus {
            background-color: #fff;
            border: 1px solid #eee;
        }


        .dropdown-select:hover {
            background-color: #fff;
        }


        .dropdown-select:active,
        .dropdown-select.open {
            background-color: #fff !important;
            border-color: #bbb;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
        }


        .dropdown-select:after {
            height: 0;
            width: 0;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #777;
            -webkit-transform: origin(50% 20%);
            transform: origin(50% 20%);
            transition: all 0.125s ease-in-out;
            content: '';
            display: block;
            margin-top: -2px;
            pointer-events: none;
            position: absolute;
            right: 10px;
            top: 50%;
        }


        .dropdown-select.open:after {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }


        .dropdown-select.open .list {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            pointer-events: auto;
        }


        .dropdown-select.open .option {
            cursor: pointer;
        }


        .dropdown-select.wide {
            width: 100%;
        }


        .dropdown-select.wide .list {
            left: 0 !important;
            right: 0 !important;
        }


        .dropdown-select .list {
            box-sizing: border-box;
            transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
            -webkit-transform: scale(0.75);
            transform: scale(0.75);
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
            background-color: #fff;
            padding: 3px 0;
            opacity: 0;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 999;
            max-height: 250px;
            overflow: auto;
            border: 1px solid #ddd;
        }


        .dropdown-select .list:hover .option:not(:hover) {
            background-color: transparent !important;
        }


        .dropdown-select .dd-search {
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem;
        }


        .dropdown-select .dd-searchbox {
            width: 100%;
            border: 1px solid #ae0a46;
            border-color: #ae0a46;
            outline: none;
        }


        .dropdown-select .dd-searchbox:focus {
            border-color: #ae0a46;
        }


        .dropdown-select .list ul {
            padding: 0;
        }


        .dropdown-select .option {
            cursor: default;
            font-weight: 400;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 29px;
            text-align: left;
            transition: all 0.2s;
            list-style: none;
        }


        .dropdown-select .option:hover,
        .dropdown-select .option:focus {
            background-color: #f6f6f6 !important;
        }


        .dropdown-select .option.selected {
            font-weight: 600;
            color: #ae0a46;
        }


        .dropdown-select .option.selected:focus {
            background: #f6f6f6;
        }


        .dropdown-select a {
            color: #aaa;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }


        .dropdown-select a:hover {
            color: #666;
        }


        #multi_step_form {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
        }


        #multi_step_form .container #multistep_nav {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
        }


        #multi_step_form .container #multistep_nav .progress_holder {
            padding: 10px;
            width: 33.3%;
            text-align: center;
            background-color: #eee;
        }

        #multi_step_form .container #multistep_nav .progress_holder_custom {
            padding: 10px;
            width: 33.3%;
            text-align: center;
            background-color: #eee;
        }


        #multi_step_form .container #multistep_nav .activated_step {
            background-color: #ae0a46;
            color: white;
        }


        #multi_step_form .container fieldset.step {
            position: relative;
            padding: 10px;
            padding-bottom: 50px;
        }


        #multi_step_form .container fieldset.step .nextStep {
            position: absolute;
            right: 25px;
            bottom: 5px;
            padding: 10px;
            width: 100px;
            color: white !important;
            background-color: #ae0a46 !important;
            border: 1px solid #ae0a46 !important;
        }

        #multi_step_form .container fieldset.step .nextStep:hover {
            position: absolute;
            right: 25px;
            padding: 10px;
            width: 100px;
            background-color: transparent !important;
            color: #ae0a46 !important;
            border: 1px solid #ae0a46 !important;
        }


        #multi_step_form .container fieldset.step .prevStep {
            position: absolute;
            left: 5px;
            bottom: 5px;
            padding: 10px;
            width: 100px;
        }


        #multi_step_form .container fieldset.step:not(:first-of-type) {
            display: none;
        }


        .showing-row {
            display: none;
        }


        #yourFormId {
            display: block;
            /* Initially show the form */
        }

        .checkbox-wrapper-1 *,
        .checkbox-wrapper-1 ::after,
        .checkbox-wrapper-1 ::before {
            box-sizing: border-box;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted {
            margin: 0;
            width: 0;
            height: 0;
            display: inline;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted+label:before {
            content: "";
            display: inline-block;
            vertical-align: top;
            height: 1.15em;
            width: 1.15em;
            margin-top: 5px;
            margin-right: 0.6em;
            color: rgba(0, 0, 0, 0.275);
            border: solid 0.06em;
            box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em inset, 0 0 0 0.07em transparent inset;
            border-radius: 0.2em;
            background: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xml:space="preserve" fill="white" viewBox="0 0 9 9"><rect x="0" y="4.3" transform="matrix(-0.707 -0.7072 0.7072 -0.707 0.5891 10.4702)" width="4.3" height="1.6" /><rect x="2.2" y="2.9" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 12.1877 2.9833)" width="6.1" height="1.7" /></svg>') no-repeat center, white;
            background-size: 0;
            will-change: color, border, background, background-size, box-shadow;
            transform: translate3d(0, 0, 0);
            transition: color 0.1s, border 0.1s, background 0.15s, box-shadow 0.1s;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted:enabled+label:active:before {
            box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset;
            background-color: #f0f0f0;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:checked+label:before {
            background-color: #3B99FC;
            background-size: 0.75em;
            color: rgba(0, 0, 0, 0.075);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:checked:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted:checked:enabled+label:active:before {
            background-color: #0a7ffb;
            color: rgba(0, 0, 0, 0.275);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:focus+label:before {
            box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset, 0 0 0 3.3px rgba(65, 159, 255, 0.55), 0 0 0 5px rgba(65, 159, 255, 0.3);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:focus:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted:focus+label:active:before {
            box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset, 0 0 0 3.3px rgba(65, 159, 255, 0.55), 0 0 0 5px rgba(65, 159, 255, 0.3);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:disabled+label:before {
            opacity: 0.5;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark+label:before {
            color: rgba(255, 255, 255, 0.275);
            background-color: #222;
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xml:space="preserve" fill="rgba(34, 34, 34, 0.999)" viewBox="0 0 9 9"><rect x="0" y="4.3" transform="matrix(-0.707 -0.7072 0.7072 -0.707 0.5891 10.4702)" width="4.3" height="1.6" /><rect x="2.2" y="2.9" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 12.1877 2.9833)" width="6.1" height="1.7" /></svg>');
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted.dark:enabled+label:active:before {
            background-color: #444;
            box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(255, 255, 255, 0.1) inset;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked+label:before {
            background-color: #a97035;
            color: rgba(255, 255, 255, 0.075);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked:enabled+label:active:before {
            background-color: #c68035;
            color: rgba(0, 0, 0, 0.275);
        }

        /* For Multi Select */
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #ae0a46;
            color: white;
            border: 1px solid #ae0a46;
            border-radius: 0px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 4px;
            padding: 0 5px 4px;
        }

        .select2-container--default .select2-selection--multiple {
            background-color: white;
            border: 1px solid #eee;
            border-radius: 0px;
            cursor: text;
            padding: 0px 0px 6px;
        }

        .select2-dropdown {
            background-color: white;
            border: 0px;
            border-radius: 0px;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            z-index: 1051;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .form-control {
            border: 1px solid #eee;
        }

        .nav-tabs-rfq {
            display: flex !important;
            align-items: center;
        }

        /* Add your custom styles for radio buttons here */
        .custom-radio input[type="radio"] {
            background: #ae0a46;
            border: 0;
            width: 16px;
            height: 16px;
            border: 2px solid #e1e1e1;
        }

        .custom-radio label {
            /* Add your styles for the label containing the radio button and text */
        }

        .form-check-input:focus {
            border-color: transparent;
            outline: 0;
            box-shadow: none;
        }

        .repeater-add {
            position: relative;
            z-index: 5;
            top: -51px;
            width: 30px !important;
            right: 50px;
            background: transparent;
            color: white;
            border: 0;
        }

        .repeater-delete {
            background: transparent;
            color: white;
            border: 0;
        }

        .nav-tabs .nav-item .nav-link.active {
            font-size: 16px;
            font-weight: 400;
            cursor: pointer;
        }

        .nav-tabs .nav-link,
        .nav-tabs .nav-item .nav-link {
            font-size: 16px;
            cursor: pointer;
            font-weight: 400;
        }

        .nav-tabs .nav-item {
            margin: 0px;
        }

        .nav-tabs .nav-link,
        .nav-tabs .nav-item .nav-link:hover {
            border: 1px solid #ae0a46;
        }
    </style>
    <style>
        /* Add your additional styles here */
        .rfq_box1,
        .rfq_box2 {
            background-image: url('https://i.pinimg.com/originals/96/03/b3/9603b3ad189fa4d29a3a7b2a33c5cd45.jpg');
            transition: box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .changing-class {
            background-color: #ae0a46;
            background-image: none;
            border: 1px solid #ae0a46;
            color: white;
        }

        .rfq-text {
            border-bottom: 2px solid #ae0a46;
        }
    </style>
    <!--======// Header Title //======-->
    <section>
        <div>
            <img class="page_top_banner" src="http://127.0.0.1:8000/frontend/images/no-banner(1920-330).png"
                alt="NGEN IT All Brands">
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="p-0 m-0 text-center pt-4">Select <span class="main_color rfq-text">RFQ</span> Options</h2>
            <div class="row gx-2">
                <div class="col-lg-8 offset-lg-2 mx-auto">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-rfq px-0 mt-5 d-flex justify-content-center align-items-center w-100"
                        id="myTab" role="tablist">
                        <li class="nav-item" role="presentation" style="width: 49%; margin-right: 8px;">
                            <label class="nav-link active rounded-0 custom-radio" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                <input type="radio" class="form-check-input me-2"
                                    aria-label="Select RFQ with Product Selection" name="rfqType" checked>
                                RFQ by Product Selection
                            </label>
                        </li>
                        <li class="nav-item" role="presentation" style="width: 50%">
                            <label class="nav-link rounded-0 custom-radio" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <input type="radio" class="form-check-input me-2"
                                    aria-label="Select Custom Request for Quote" name="rfqType">
                                RFQ by Case Scenario
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-offset-lg-2 m-auto">
                    <div class="row gx-3 my-2">
                        <div class="col-lg-6 pe-0">
                            <div class="p-3 rfq_box1 text-start active-background me-2">
                                <div class="d-flex justify-content-between">
                                    <img width="120px" height="70px" src="https://i.ibb.co/zm36Ccz/Asset-6-5x-8.png"
                                        alt="">
                                    <div class="ps-4">
                                        <p class="" style="text-align: justify;">
                                            Easy Selection of Products & quantity by typing in
                                            the below input box. Supporting Information to make sure of quotation accuracy.
                                            Provide your information to give your further assistance
                                        </p>
                                    </div>
                                </div>
                                {{-- <a href="javascript:void()" class="custom_rfq">
                                </a> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 ps-0">
                            <div class="p-3 rfq_box2 text-start">
                                <div class="d-flex justify-content-between">
                                    <img width="120px" height="70px" src="https://i.ibb.co/Tc9HNjK/Asset-4-5x-8.png"
                                        alt="">
                                    <div class="ps-4">
                                        <p class="" style="text-align: justify;">
                                            You can create custom RFQ by providing your current scenario Or, project
                                            requirements. Based on your choice of Brand, Products we may talk to you further
                                            or directly quote you with a suggested solution.
                                        </p>
                                    </div>
                                </div>
                                {{-- <a href="javascript:void()" class="query_rfq" >
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="col-lg-10 offset-lg-1 mx-auto">
                    <div class="tab-content pt-2">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="" id="repeater-form" action="" method="post" novalidate>
                                <div id="multi_step_form">
                                    <div class="container p-0 mb-5">
                                        <div id="multistep_nav">
                                            <div class="progress_holder progress_holder_custom">
                                                PRODUCT QUERY
                                            </div>
                                            <div class="progress_holder progress_holder_custom">
                                                Supporting Information
                                            </div>
                                            <div class="progress_holder progress_holder_custom">
                                                Contact Information
                                            </div>
                                        </div>
                                        <fieldset class="step" id="step1">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-10 offset-lg-1 mx-auto">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i
                                                                    class="fa-solid fa-circle-question main_color"style="font-size: 35px;"></i>
                                                            </div>
                                                            <div class="">
                                                                <p>Select right products by writing initials or full
                                                                    product name in the below box. Also, mention the
                                                                    quantity in right box. You can add as many as product
                                                                    input box by clicking in the left '+' symbol
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9  mx-auto">
                                                        <div class="repeater">
                                                            <div data-repeater-list="items">
                                                                <div data-repeater-item class="mb-3">
                                                                    <div class="row gx-2">
                                                                        <div class="col-lg-8">
                                                                            <div class="searchInput">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 ps-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                                            placeholder="Product Title"
                                                                                            id="productSearchInput">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="resultBox">
                                                                                    <ul class="suggestionList"
                                                                                        style="display: none;">
                                                                                        @foreach ($products as $product)
                                                                                            <li>{{ $product->name }}
                                                                                            </li>
                                                                                        @endforeach
                                                                                        <!-- Add other list items here -->
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 d-flex">
                                                                            <div style="width: 90%">
                                                                                <input type="text" name="qty"
                                                                                    value=""
                                                                                    placeholder="Enter Product Qty"
                                                                                    class="form-control form-control-sm border-0" />
                                                                            </div>
                                                                            <div style="width: 10%" class="ms-2">
                                                                                <button data-repeater-delete type="button"
                                                                                    class="repeater-delete ps-5">
                                                                                    <img width="20px"
                                                                                        src="https://i.ibb.co/qr49zm6/Asset-1-2x-8.png"
                                                                                        alt="">
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <button data-repeater-create type="button"
                                                                        class="repeater-add">
                                                                        <img width="15px"
                                                                            src="https://i.ibb.co/yQgJTTh/Asset-2-2x-8.png"
                                                                            alt="">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-8 offset-lg-2 mx-auto">
                                                        <div>
                                                            <button type="button"
                                                                class="nextStep btn-color mb-2 me-4">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <fieldset class="step" id="step2">
                                            <div class="prevStep btn-color mb-2 ms-3">Prev</div>
                                            <div class="container pb-4">
                                                <div class="row mb-4">
                                                    <div class="col-lg-10 offset-lg-1 mx-auto">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div>
                                                                <p>Provide your simple information that helps us to work
                                                                    with you a proper manner and help you in cost effective
                                                                    purchasing
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Tentative Budget <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="number" name="email"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="exampleFormControlInput1"
                                                                        placeholder="Input Budget Value here" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Tentative Close Date<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="date" name="company_name"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="exampleFormControlInput1"
                                                                        placeholder="mmm/dd/yyyy" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Which stage is your project now
                                                                        ?<span class="text-danger">*</span></label>
                                                                    <select class="form-select form-select-sm"
                                                                        aria-label="Default select example">
                                                                        <option selected>Select Project Status</option>
                                                                        <option value="1">Budget Stage</option>
                                                                        <option value="2">Tore Stage</option>
                                                                        <option value="3">RFQ Stage</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Do you Need Installation / Local
                                                                        Support ?<span class="text-danger">*</span></label>
                                                                    <select class="form-select form-select-sm"
                                                                        aria-label="Default select example">
                                                                        <option selected>Select Option here</option>
                                                                        <option value="1">Quicke</option>
                                                                        <option value="2">Slow Step</option>
                                                                        <option value="3">Normal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="checkbox-wrapper-1">
                                                                    <input id="example-1" class="substituted"
                                                                        type="checkbox" aria-hidden="true" />
                                                                    <label for="example-1">Do you need Brochures /
                                                                        Presentations? Do you need further
                                                                        discussions ?</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="nextStep btn-color mb-2">Next</button>
                                        </fieldset>
                                        <fieldset class="step" id="step3">
                                            <div class="prevStep btn-color mb-2 ms-3">Prev</div>
                                            <div class="container p-0 pb-4">
                                                <div class="row">
                                                    <div class="col-lg-10 offset-lg-1 mx-auto">
                                                        <div class="row m-1 pb-4">
                                                            <div class="col-lg-12 mx-auto">
                                                                <div class="d-flex p-4 px-0">
                                                                    <div class="me-2">
                                                                        <i class="fa-solid fa-circle-question main_color"
                                                                            style="font-size: 35px;"></i>
                                                                    </div>
                                                                    <div>
                                                                        <p>Please write your contact details for further
                                                                            communication needed !</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">Name</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your full name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for=""
                                                                        class="pb-1">Designation</label>
                                                                    <input type="text" name="designation"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your designation">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">Email Id</label>
                                                                    <input type="email"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your official domain/email id">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">Contact
                                                                        Number</label>
                                                                    <input type="numnber"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your mobile number">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">Company
                                                                        Name</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Your company name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">Company
                                                                        Address</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input company address">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">City</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input city name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">Zip Code</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input zip code">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="" class="pb-1">Country</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="input Country Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="nextStep btn-color mb-2">Submit</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="" id="yourFormIdss" action="" method="post" novalidate>
                                <div id="multi_step_form">
                                    <div class="container p-0 mb-5">
                                        <div id="multistep_nav">
                                            <div class="progress_holder progress_holder_custom">
                                                CUSTOM PRODUCT QUERY
                                            </div>
                                            <div class="progress_holder progress_holder_custom">
                                                QUERY DETAILS
                                            </div>
                                            <div class="progress_holder progress_holder_custom">
                                                COMPANY DETAILS
                                            </div>
                                        </div>
                                        <fieldset class="step" id="step1">
                                            <div class="container">
                                                <div class="row mb-4">
                                                    <div class="col-lg-10 offset-lg-1 mx-auto">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div class="">
                                                                <h5>Create Custom Query
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 offset-lg-1 mx-auto">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="control-label pb-1">Choose Product
                                                                    Category</label> <br>
                                                                <select class="multiSelect" multiple="multiple"
                                                                    style="width: 100%;">
                                                                    @foreach ($categorys as $category)
                                                                        <option value="{{ $category->id }}">
                                                                            {{ $category->title }}
                                                                        </option>
                                                                    @endforeach
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="control-label pb-1">Choose Preferred
                                                                    Brands</label> <br>
                                                                <select class="multiSelect" multiple="multiple"
                                                                    style="width: 100%;">
                                                                    @foreach ($brands as $brand)
                                                                        <option value="{{ $brand->id }}">
                                                                            {{ $brand->title }}
                                                                        </option>
                                                                    @endforeach
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="control-label pb-1">Select Industry</label>
                                                                <br>
                                                                <select class="multiSelect" multiple="multiple"
                                                                    style="width: 100%;">
                                                                    @foreach ($industrys as $industry)
                                                                        <option value="{{ $industry->id }}">
                                                                            {{ $industry->title }}
                                                                        </option>
                                                                    @endforeach
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12 pt-4">
                                                                {{-- <div class="checkbox-wrapper-1">
                                                                    <input id="example-1" class="substituted"
                                                                        type="checkbox" aria-hidden="true" />
                                                                    <label for="example-1">Do you need Brochures /
                                                                        Presentations? Do you need further
                                                                        discussions ?</label>
                                                                </div> --}}
                                                                <label class="control-label pb-1">Write your Case Scenario
                                                                    / Project Requirements :</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="nextStep btn-color mb-2">Next</button>
                                        </fieldset>
                                        <fieldset class="step" id="step2">
                                            <div class="prevStep btn-color mb-2 ms-3">Prev</div>
                                            <div class="container pb-4">
                                                <div class="row mb-4">
                                                    <div class="col-lg-10 offset-lg-1 mx-auto">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div>
                                                                <p>Provide your simple information that helps us to work
                                                                    with you a proper manner and help you in cost effective
                                                                    purchasing
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Tentative Budget <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="number" name="email"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="exampleFormControlInput1"
                                                                        placeholder="Input Budget Value here" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Tentative Close Date<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="date" name="company_name"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="exampleFormControlInput1"
                                                                        placeholder="mmm/dd/yyyy" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Which stage is your project now
                                                                        ?<span class="text-danger">*</span></label>
                                                                    <select class="form-select form-select-sm"
                                                                        aria-label="Default select example">
                                                                        <option selected>Select Project Status</option>
                                                                        <option value="1">Budget Stage</option>
                                                                        <option value="2">Tore Stage</option>
                                                                        <option value="3">RFQ Stage</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Do you Need Installation / Local
                                                                        Support ?<span class="text-danger">*</span></label>
                                                                    <select class="form-select form-select-sm"
                                                                        aria-label="Default select example">
                                                                        <option selected>Select Option here</option>
                                                                        <option value="1">Quicke</option>
                                                                        <option value="2">Slow Step</option>
                                                                        <option value="3">Normal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="checkbox-wrapper-1">
                                                                    <input id="example-1" class="substituted"
                                                                        type="checkbox" aria-hidden="true" />
                                                                    <label for="example-1">Do you need Brochures /
                                                                        Presentations? Do you need further
                                                                        discussions ?</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="nextStep btn-color mb-2">Next</button>
                                        </fieldset>
                                        <fieldset class="step" id="step3">
                                            <div class="prevStep btn-color mb-2 ms-3">Prev</div>
                                            <div class="container p-0 pb-4">
                                                <div class="col-lg-10 offset-lg-1 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-10 offset-lg-1 mx-auto">
                                                            <div class="row m-1 pb-4">
                                                                <div class="col-lg-12 mx-auto">
                                                                    <div class="d-flex p-4 px-0">
                                                                        <div class="me-2">
                                                                            <i class="fa-solid fa-circle-question main_color"
                                                                                style="font-size: 35px;"></i>
                                                                        </div>
                                                                        <div>
                                                                            <p>Please write your contact details for further
                                                                                communication needed !</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for="" class="pb-1">Name</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Input your full name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for=""
                                                                            class="pb-1">Designation</label>
                                                                        <input type="text" name="designation"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Input your designation">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for="" class="pb-1">Email
                                                                            Id</label>
                                                                        <input type="email"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Input your official domain/email id">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for="" class="pb-1">Contact
                                                                            Number</label>
                                                                        <input type="numnber"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Input your mobile number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for="" class="pb-1">Company
                                                                            Name</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Your company name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for="" class="pb-1">Company
                                                                            Address</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Input company address">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for="" class="pb-1">City</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Input city name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for="" class="pb-1">Zip
                                                                            Code</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="Input zip code">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group pt-2">
                                                                        <label for=""
                                                                            class="pb-1">Country</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                            placeholder="input Country Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="nextStep btn-color mb-2">Submit</button>
                                        </fieldset>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- jQuery Repeater -->
    <script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    {{-- Form Repeater --}}
    <script>
        $(document).ready(function() {
            $("#repeater-form").repeater({
                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },
            });
        });
    </script>
    {{-- Multi Select --}}
    <script>
        // Initialize Select2
        $(document).ready(function() {
            $('.multiSelect').select2({
                placeholder: 'Select Options',
                allowClear: true
            });
        });
    </script>
    {{-- For Search --}}
    <script>
        document.addEventListener('keyup', function(event) {
            if (event.target.matches('#productSearchInput')) {
                showSuggestions(event);
            }
        });

        function showSuggestions(event) {
            let inputElement = event.target;
            let suggestionsList = inputElement.parentElement.querySelector(".suggestionList");
            let suggestions = suggestionsList.getElementsByTagName("li");

            // Iterate through suggestions and show/hide based on user input
            for (let i = 0; i < suggestions.length; i++) {
                let suggestion = suggestions[i].innerText.toLowerCase();
                if (suggestion.startsWith(inputElement.value.toLowerCase())) {
                    suggestions[i].style.display = "block";
                } else {
                    suggestions[i].style.display = "none";
                }
            }

            // Show/hide the suggestion list based on user input
            if (inputElement.value.trim() !== "") {
                suggestionsList.style.display = "block";
            } else {
                suggestionsList.style.display = "none";
            }

            // Add click event listener to dynamically generated suggestions
            suggestionsList.addEventListener('click', function(event) {
                if (event.target.tagName === 'LI') {
                    inputElement.value = event.target.innerText;
                    suggestionsList.style.display = "none";
                }
            });
        }

        document.addEventListener('click', function(event) {
            if (!event.target.matches('.suggestionList li') && !event.target.matches('#productSearchInput')) {
                hideAllSuggestions();
            }
        });

        function hideAllSuggestions() {
            let allSuggestionLists = document.querySelectorAll('.suggestionList');
            allSuggestionLists.forEach(function(suggestionsList) {
                suggestionsList.style.display = "none";
            });
        }
    </script>

    {{-- Select With Search --}}
    <script>
        const csSelector = document.querySelector('#myCustomSelect') // the input, svg and ul as a group
        const csInput = csSelector.querySelector('input')
        const csList = csSelector.querySelector('ul')
        const csOptions = csList.querySelectorAll('li')
        const csIcons = csSelector.querySelectorAll('svg')
        const csStatus = document.querySelector('#custom-select-status')
        const aOptions = Array.from(csOptions)

        // when JS is loaded, set up our starting point
        // if JS fails to load, the custom select remains a plain text input
        // create and set start point for the state tracker
        let csState = "initial"
        // inform assistive tech (screen readers) of the names & roles of the elements in our group
        csSelector.setAttribute('role', 'combobox')
        csSelector.setAttribute('aria-haspopup', 'listbox')
        csSelector.setAttribute('aria-owns', 'custom-select-list') // container owns the list...
        csInput.setAttribute('aria-autocomplete', 'both')
        csInput.setAttribute('aria-controls', 'custom-select-list') // ...but the input controls it
        csList.setAttribute('role', 'listbox')
        csOptions.forEach(function(option) {
            option.setAttribute('role', 'option')
            option.setAttribute('tabindex', "-1") // make li elements keyboard focusable by script only
        })
        // set up a message to keep screen reader users informed of what the custom input is for/doing
        csStatus.textContent = csOptions.length + " options available. Arrow down to browse or start typing to filter.";
        setState('initial');

        // EVENTS
        // /////////////////////////////////
        csSelector.addEventListener('click', function(e) {
            const currentFocus = findFocus()
            switch (csState) {
                case 'initial': // if state = initial, toggleOpen and set state to opened
                    toggleList('Open')
                    setState('opened')
                    break
                case 'opened':
                    // if state = opened and focus on input, toggleShut and set state to initial
                    if (currentFocus === csInput) {
                        toggleList('Shut')
                        setState('initial')
                    } else if (currentFocus.tagName === 'LI') {
                        // if state = opened and focus on list, makeChoice, toggleShut and set state to closed
                        makeChoice(currentFocus)
                        toggleList('Shut')
                        setState('closed')
                    }
                    break
                case 'filtered':
                    // if state = filtered and focus on list, makeChoice and set state to closed
                    if (currentFocus.tagName === 'LI') {
                        makeChoice(currentFocus)
                        toggleList('Shut')
                        setState('closed')
                    } // if state = filtered and focus on input, do nothing (wait for next user input)

                    break
                case 'closed': // if state = closed, toggleOpen and set state to filtered? or opened?
                    toggleList('Open')
                    setState('filtered')
                    break
            }
        })

        csSelector.addEventListener('keyup', function(e) {
            doKeyAction(e.key)
        })

        document.addEventListener('click', function(e) {
            if (!e.target.closest('#myCustomSelect')) {
                // click outside of the custom group
                toggleList('Shut')
                setState('initial')
            }
        })

        // FUNCTIONS
        // /////////////////////////////////

        function toggleList(whichWay) {
            if (whichWay === 'Open') {
                csList.classList.remove('hidden-all')
                csSelector.setAttribute('aria-expanded', 'true')
            } else { // === 'Shut'
                csList.classList.add('hidden-all')
                csSelector.setAttribute('aria-expanded', 'false')
            }
        }

        function findFocus() {
            const focusPoint = document.activeElement
            return focusPoint
        }

        function moveFocus(fromHere, toThere) {
            // grab the currently showing options, which might have been filtered
            const aCurrentOptions = aOptions.filter(function(option) {
                if (option.style.display === '') {
                    return true
                }
            })
            // don't move if all options have been filtered out
            if (aCurrentOptions.length === 0) {
                return
            }
            if (toThere === 'input') {
                csInput.focus()
            }
            // possible start points
            switch (fromHere) {
                case csInput:
                    if (toThere === 'forward') {
                        aCurrentOptions[0].focus()
                    } else if (toThere === 'back') {
                        aCurrentOptions[aCurrentOptions.length - 1].focus()
                    }
                    break
                case csOptions[0]:
                    if (toThere === 'forward') {
                        aCurrentOptions[1].focus()
                    } else if (toThere === 'back') {
                        csInput.focus()
                    }
                    break
                case csOptions[csOptions.length - 1]:
                    if (toThere === 'forward') {
                        aCurrentOptions[0].focus()
                    } else if (toThere === 'back') {
                        aCurrentOptions[aCurrentOptions.length - 2].focus()
                    }
                    break
                default: // middle list or filtered items
                    const currentItem = findFocus()
                    const whichOne = aCurrentOptions.indexOf(currentItem)
                    if (toThere === 'forward') {
                        const nextOne = aCurrentOptions[whichOne + 1]
                        nextOne.focus()
                    } else if (toThere === 'back' && whichOne > 0) {
                        const previousOne = aCurrentOptions[whichOne - 1]
                        previousOne.focus()
                    } else { // if whichOne = 0
                        csInput.focus()
                    }
                    break
            }
        }

        function doFilter() {
            const terms = csInput.value
            const aFilteredOptions = aOptions.filter(function(option) {
                if (option.innerText.toUpperCase().startsWith(terms.toUpperCase())) {
                    return true
                }
            })
            csOptions.forEach(option => option.style.display = "none")
            aFilteredOptions.forEach(function(option) {
                option.style.display = ""
            })
            setState('filtered')
            updateStatus(aFilteredOptions.length)
        }

        function updateStatus(howMany) {
            csStatus.textContent = howMany + " options available."
        }

        function makeChoice(whichOption) {
            const optionTitle = whichOption.querySelector('strong')
            csInput.value = optionTitle.textContent
            moveFocus(document.activeElement, 'input')
            // update aria-selected, if using
        }

        function setState(newState) {
            switch (newState) {
                case 'initial':
                    csState = 'initial'
                    break
                case 'opened':
                    csState = 'opened'
                    break
                case 'filtered':
                    csState = 'filtered'
                    break
                case 'closed':
                    csState = 'closed'
            }
            // console.log({csState})
        }

        function doKeyAction(whichKey) {
            const currentFocus = findFocus()
            switch (whichKey) {
                case 'Enter':
                    if (csState === 'initial') {
                        // if state = initial, toggleOpen and set state to opened
                        toggleList('Open')
                        setState('opened')
                    } else if (csState === 'opened' && currentFocus.tagName === 'LI') {
                        // if state = opened and focus on list, makeChoice and set state to closed
                        makeChoice(currentFocus)
                        toggleList('Shut')
                        setState('closed')
                    } else if (csState === 'opened' && currentFocus === csInput) {
                        // if state = opened and focus on input, close it
                        toggleList('Shut')
                        setState('closed')
                    } else if (csState === 'filtered' && currentFocus.tagName === 'LI') {
                        // if state = filtered and focus on list, makeChoice and set state to closed
                        makeChoice(currentFocus)
                        toggleList('Shut')
                        setState('closed')
                    } else if (csState === 'filtered' && currentFocus === csInput) {
                        // if state = filtered and focus on input, set state to opened
                        toggleList('Open')
                        setState('opened')
                    } else { // i.e. csState is closed, or csState is opened/filtered but other focus point?
                        // if state = closed, set state to filtered? i.e. open but keep existing input?
                        toggleList('Open')
                        setState('filtered')
                    }
                    break

                case 'Escape':
                    // if state = initial, do nothing
                    // if state = opened or filtered, set state to initial
                    // if state = closed, do nothing
                    if (csState === 'opened' || csState === 'filtered') {
                        toggleList('Shut')
                        setState('initial')
                    }
                    break

                case 'ArrowDown':
                    if (csState === 'initial' || csState === 'closed') {
                        // if state = initial or closed, set state to opened and moveFocus to first
                        toggleList('Open')
                        moveFocus(csInput, 'forward')
                        setState('opened')
                    } else {
                        // if state = opened and focus on input, moveFocus to first
                        // if state = opened and focus on list, moveFocus to next/first
                        // if state = filtered and focus on input, moveFocus to first
                        // if state = filtered and focus on list, moveFocus to next/first
                        toggleList('Open')
                        moveFocus(currentFocus, 'forward')
                    }
                    break
                case 'ArrowUp':
                    if (csState === 'initial' || csState === 'closed') {
                        // if state = initial, set state to opened and moveFocus to last
                        // if state = closed, set state to opened and moveFocus to last
                        toggleList('Open')
                        moveFocus(csInput, 'back')
                        setState('opened')
                    } else {
                        // if state = opened and focus on input, moveFocus to last
                        // if state = opened and focus on list, moveFocus to prev/last
                        // if state = filtered and focus on input, moveFocus to last
                        // if state = filtered and focus on list, moveFocus to prev/last
                        moveFocus(currentFocus, 'back')
                    }
                    break
                default:
                    if (csState === 'initial') {
                        // if state = initial, toggle open, doFilter and set state to filtered
                        toggleList('Open')
                        doFilter()
                        setState('filtered')
                    } else if (csState === 'opened') {
                        // if state = opened, doFilter and set state to filtered
                        doFilter()
                        setState('filtered')
                    } else if (csState === 'closed') {
                        // if state = closed, doFilter and set state to filtered
                        doFilter()
                        setState('filtered')
                    } else { // already filtered
                        doFilter()
                    }
                    break
            }
        }
    </script>

    <script>
        // For Step Form
        // start //
        $('.progress_holder:nth-child(1)').addClass('activated_step');


        // Manage next and previous buttons //
        $(".nextStep").click(function() {
            // button is inside fieldset so set current and next vars //
            current_fs = $(this).parents('fieldset');
            next_fs = $(this).parents('fieldset').next();
            // make sure all fields are filled in //
            var empty = current_fs.find("input.required-field").filter(function() {
                return this.value === "";
            });
            if (empty.length) {
                alert('Please fill in all fields.');
            } else {
                //show the next fieldset
                next_fs.fadeIn(150, 'linear').addClass('current');
                //hide the current fieldset with style
                current_fs.fadeOut(0, 'linear').removeClass('current');
                // change nav class //
                if ($('fieldset.current').attr('id') == 'step2') {
                    $('.progress_holder:nth-child(2)').addClass('activated_step');
                }
                if ($('fieldset.current').attr('id') == 'step3') {
                    $('.progress_holder:nth-child(3)').addClass('activated_step');
                }
                if ($('fieldset.current').attr('id') == 'step4') {
                    $('.progress_holder:nth-child(4)').addClass('activated_step');
                }
                if ($('fieldset.current').attr('id') == 'step5') {
                    $('.progress_holder:nth-child(5)').addClass('activated_step');
                }
            }
        });
        $(".prevStep").click(function(e) {
            e.preventDefault();
            current_fs = $(this).parents('fieldset');
            previous_fs = $(this).parents('fieldset').prev();
            //show the previous fieldset
            previous_fs.fadeIn(150, 'linear');
            //hide the current fieldset with style
            current_fs.fadeOut(0, 'linear');


            if ($(previous_fs).attr('id') == 'step1') {
                $('.progress_holder:nth-child(2)').removeClass('activated_step');
            }
            if ($(previous_fs).attr('id') == 'step2') {
                $('.progress_holder:nth-child(3)').removeClass('activated_step');
            }
            if ($(previous_fs).attr('id') == 'step3') {
                $('.progress_holder:nth-child(4)').removeClass('activated_step');
            }
            if ($(previous_fs).attr('id') == 'step4') {
                $('.progress_holder:nth-child(5)').removeClass('activated_step');
            }
        });
    </script>

    {{-- Active Background Color --}}
    <script>
        $(document).ready(function() {
            // Initial setup based on the default active tab
            updateShadowClass();

            // Handle tab changes
            $('input[name="rfqType"]').on('change', function() {
                updateShadowClass();
            });

            // Function to update the shadow class based on the active tab
            function updateShadowClass() {
                if ($('#home-tab').hasClass('active')) {
                    $('.rfq_box1').addClass('changing-class');
                    $('.rfq_box2').removeClass('changing-class');
                } else {
                    $('.rfq_box1').removeClass('changing-class');
                    $('.rfq_box2').addClass('changing-class');
                }
            }
        });
    </script>
@endsection
