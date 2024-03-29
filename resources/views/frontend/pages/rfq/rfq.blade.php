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

        .submitbtn {
            position: absolute;
            right: 25px;
            bottom: 5px;
            padding: 10px;
            width: 100px;
            color: white !important;
            background-color: #ae0a46 !important;
            border: 1px solid #ae0a46 !important;
        }

        .submitbtn:hover {
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
            column-gap: 7px;
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
            background: none;
            border: 1px dashed #ae0a46;
            color: #ae0a46;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .nav-tabs .nav-link,
        .nav-tabs .nav-item .nav-link {
            border: 1px solid #adadad;
            color: black;
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
            background-image: none;
            border: 1px dashed #ae0a46;
            color: #ae0a46;
        }

        .rfq-text {
            border-bottom: 2px solid #ae0a46;
        }

        @media only screen and (max-width: 576px) {
            .repeater-add {
                top: -91px;
                right: 18px;
            }

            .repeater-delete {
                padding-left: 0.4rem !important;
            }

            .qtyBox {
                margin-top: 10px;
                margin-left: 16px;
            }

            .productInput {
                width: 82%;
                margin: auto;
            }

            .qtyInput {
                width: 50% !important;
            }
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
                        <li class="nav-item mb-3" role="presentation" style="width: 49%;">
                            <label class="nav-link active rounded-0 custom-radio" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                <input type="radio" class="form-check-input me-2"
                                    aria-label="Select RFQ with Product Selection" name="rfqType" checked>
                                RFQ by Product Selection
                            </label>
                        </li>
                        <li class="nav-item mb-3" role="presentation" style="width: 49%">
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
                            <form id="repeater-form" action="{{ route('rfqCreate') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
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
                                                        <div class="row p-4 px-0 align-items-center">
                                                            <div class="me-2">
                                                                <i
                                                                    class="fa-solid fa-circle-question main_color"style="font-size: 35px;"></i>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">Select right products by writing initials
                                                                    or full product
                                                                    name in the below box. Also, mention the quantity in
                                                                    right box. You can add as many as product input box by
                                                                    clicking in the left '+' symbol
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="repeater">
                                                                <div data-repeater-list="items">
                                                                    <div data-repeater-item class="mb-3">
                                                                        <div class="row gx-2">
                                                                            <div class="col-lg-8 productBox me-3">
                                                                                <div class="row searchInput">
                                                                                    <div class="col-12">
                                                                                        <input type="text"
                                                                                            name="product_name"
                                                                                            class="productInput form-control form-control-sm border-0 rounded-1"
                                                                                            placeholder="Product Title"
                                                                                            id="productSearchInput"
                                                                                            style="width: 95%;">
                                                                                    </div>
                                                                                    <div class="col-12 resultBox">
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
                                                                            <div class="col-lg-3 d-flex qtyBox ms-4">
                                                                                <div class="qtyInput" style="width: 90%">
                                                                                    <input type="number" name="qty"
                                                                                        value=""
                                                                                        placeholder="Enter Product Qty"
                                                                                        class="form-control form-control-sm border-0" />
                                                                                </div>
                                                                                <div style="width: 10%" class="ms-2">
                                                                                    <button data-repeater-delete
                                                                                        type="button"
                                                                                        class="repeater-delete ps-2">
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
                                                            <div class="col-lg-12 pb-4">
                                                                <label for="message" class="control-label pb-1">Custom
                                                                    Message</label>
                                                                <textarea class="form-control" id="message" name="message" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-8 offset-lg-2 mx-auto">
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
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="budget" class="form-label">Tentative
                                                                        Budget</label>
                                                                    <input type="number" name="budget"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="budget"
                                                                        placeholder="Your Approximate Budget">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="delivery_location"
                                                                        class="form-label">Delivery Location <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" name="delivery_location"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="delivery_location"
                                                                        placeholder="Delivery Location">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="country" class="form-label">Your Country
                                                                        <span class="text-danger">*</span></label>
                                                                    <input type="text" name="country"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="country"
                                                                        placeholder="Your Country(Eg:USA, UK, Canada)">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="project_status" class="form-label">Which
                                                                        stage is your project now
                                                                        ?</label>
                                                                    <select class="form-select form-select-sm"
                                                                        name="project_status"
                                                                        data-placeholder="Select Project Status"
                                                                        aria-label="Default select example"
                                                                        id="project_status">
                                                                        <option></option>
                                                                        <option value="budget_stage">Budget Stage</option>
                                                                        <option value="tor_stage">Tor Stage</option>
                                                                        <option value="rfq_stage">RFQ Stage</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="approximate_delivery_time"
                                                                        class="form-label">Approximate Delivery Time
                                                                        ?</label>
                                                                    <select class="form-select form-select-sm"
                                                                        name="approximate_delivery_time"
                                                                        data-placeholder="Select Delivery Time"
                                                                        aria-label="Default select example">
                                                                        <option></option>
                                                                        <option value="less_one_month">Less Than One Month
                                                                        </option>
                                                                        <option value="two_month">Two Months</option>
                                                                        <option value="three_month">Three Months</option>
                                                                        <option value="six_month">Six Months</option>
                                                                        <option value="one_year">One Year</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="checkbox-wrapper-1">
                                                                    <input id="example-1" class="substituted"
                                                                        type="checkbox" aria-hidden="true" name="call"
                                                                        value="1" />
                                                                    <label for="example-1">Do you expect call from Us or
                                                                        Appointment?</label>
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
                                                                    <label for="name" class="pb-1">Name <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" id="name" name="name"
                                                                        value="{{ optional(Auth::guard('client')->user())->name }}"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your full name" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="designation"
                                                                        class="pb-1">Designation</label>
                                                                    <input type="text" id="designation"
                                                                        name="designation"
                                                                        value="{{ optional(Auth::guard('client')->user())->designation }}"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your designation">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="email" class="pb-1">Email Id <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="email" id="email" name="email"
                                                                        value="{{ optional(Auth::guard('client')->user())->email }}"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your official domain/email id"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="phone" class="pb-1">Contact
                                                                        Number</label>
                                                                    <input type="number" id="phone" name="phone"
                                                                        value="{{ optional(Auth::guard('client')->user())->phone }}"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input your mobile number">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="company_name" class="pb-1">Company
                                                                        Name</label>
                                                                    <input type="text" id="company_name"
                                                                        name="company_name"
                                                                        value="{{ optional(Auth::guard('client')->user())->company_name }}"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Your company name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group pt-2">
                                                                    <label for="address" class="pb-1">Company
                                                                        Address</label>
                                                                    <input type="text" id="address" name="address"
                                                                        value="{{ optional(Auth::guard('client')->user())->address }}"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        placeholder="Input company address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="submitbtn btn-color mb-2">Submit</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form id="yourFormIdss" action="{{ route('rfqCreate') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
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
                                                                    name="category[]" style="width: 100%;">
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
                                                                    name="brand[]" style="width: 100%;">
                                                                    @foreach ($brands as $brand)
                                                                        <option value="{{ $brand->id }}">
                                                                            {{ $brand->name }}
                                                                        </option>
                                                                    @endforeach
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="control-label pb-1">Select Industry</label>
                                                                <br>
                                                                {{-- <select class="multiSelect" multiple="multiple"
                                                                    style="width: 100%;"> --}}
                                                                <select class="multiSelect" multiple="multiple"
                                                                    name="industry[]" style="width: 100%;">
                                                                    @foreach ($industrys as $industry)
                                                                        <option value="{{ $industry->id }}">
                                                                            {{ $industry->title }}
                                                                        </option>
                                                                    @endforeach
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12 pt-4">
                                                                <label for="message" class="control-label pb-1">Write
                                                                    your Case Scenario
                                                                    / Project Requirements :</label>
                                                                <textarea class="form-control" id="message" name="message" rows="1"></textarea>
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
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="budget" class="form-label">Tentative
                                                                        Budget</label>
                                                                    <input type="number" name="budget"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="budget"
                                                                        placeholder="Your Approximate Budget">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="delivery_location"
                                                                        class="form-label">Delivery Location <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" name="delivery_location"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="delivery_location"
                                                                        placeholder="Delivery Location">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="country" class="form-label">Your Country
                                                                        <span class="text-danger">*</span></label>
                                                                    <input type="text" name="country"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="country"
                                                                        placeholder="Your Country(Eg:USA, UK, Canada)">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="project_status" class="form-label">Which
                                                                        stage is your project now
                                                                        ?</label>
                                                                    <select class="form-select form-select-sm"
                                                                        name="project_status"
                                                                        data-placeholder="Select Project Status"
                                                                        aria-label="Default select example"
                                                                        id="project_status">
                                                                        <option></option>
                                                                        <option value="budget_stage">Budget Stage</option>
                                                                        <option value="tor_stage">Tor Stage</option>
                                                                        <option value="rfq_stage">RFQ Stage</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="approximate_delivery_time"
                                                                        class="form-label">Approximate Delivery Time
                                                                        ?</label>
                                                                    <select class="form-select form-select-sm"
                                                                        name="approximate_delivery_time"
                                                                        data-placeholder="Select Delivery Time"
                                                                        aria-label="Default select example">
                                                                        <option></option>
                                                                        <option value="less_one_month">Less Than One Month
                                                                        </option>
                                                                        <option value="two_month">Two Months</option>
                                                                        <option value="three_month">Three Months</option>
                                                                        <option value="six_month">Six Months</option>
                                                                        <option value="one_year">One Year</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="checkbox-wrapper-1">
                                                                    <input id="example-1" class="substituted"
                                                                        type="checkbox" aria-hidden="true" name="call"
                                                                        value="1" />
                                                                    <label for="example-1">Do you expect call from Us or
                                                                        Appointment?</label>
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
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group pt-2">
                                                                            <label for="name" class="pb-1">Name
                                                                                <span class="text-danger">*</span></label>
                                                                            <input type="text" id="name"
                                                                                name="name"
                                                                                value="{{ optional(Auth::guard('client')->user())->name }}"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                placeholder="Input your full name"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group pt-2">
                                                                            <label for="designation"
                                                                                class="pb-1">Designation</label>
                                                                            <input type="text" id="designation"
                                                                                name="designation"
                                                                                value="{{ optional(Auth::guard('client')->user())->designation }}"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                placeholder="Input your designation">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group pt-2">
                                                                            <label for="email" class="pb-1">Email Id
                                                                                <span class="text-danger">*</span></label>
                                                                            <input type="email" id="email"
                                                                                name="email"
                                                                                value="{{ optional(Auth::guard('client')->user())->email }}"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                placeholder="Input your official domain/email id"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group pt-2">
                                                                            <label for="phone" class="pb-1">Contact
                                                                                Number</label>
                                                                            <input type="number" id="phone"
                                                                                name="phone"
                                                                                value="{{ optional(Auth::guard('client')->user())->phone }}"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                placeholder="Input your mobile number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group pt-2">
                                                                            <label for="company_name"
                                                                                class="pb-1">Company
                                                                                Name</label>
                                                                            <input type="text" id="company_name"
                                                                                name="company_name"
                                                                                value="{{ optional(Auth::guard('client')->user())->company_name }}"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                placeholder="Your company name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group pt-2">
                                                                            <label for="address" class="pb-1">Company
                                                                                Address</label>
                                                                            <input type="text" id="address"
                                                                                name="address"
                                                                                value="{{ optional(Auth::guard('client')->user())->address }}"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                placeholder="Input company address">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="submitbtn btn-color mb-2">Submit</button>
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


    <script>
        document.addEventListener('keyup', function(event) {
            if (event.target.matches('#productSearchInput')) {
                showSuggestions(event);
            }
        });

        function showSuggestions(event) {
            let inputElement = event.target;
            let parentElement = inputElement.closest('.searchInput'); // Find the parent container
            let suggestionsList = parentElement.querySelector(".suggestionList");

            if (suggestionsList) { // Check if the suggestions list exists
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



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const csSelector = document.querySelector('#myCustomSelect');
            const csInput = csSelector.querySelector('input');
            const csList = csSelector.querySelector('ul');
            const csOptions = Array.from(csList.querySelectorAll('li'));
            const csStatus = document.querySelector('#custom-select-status');
            let csState = "initial";

            initialize();

            function initialize() {
                csSelector.setAttribute('role', 'combobox');
                csSelector.setAttribute('aria-haspopup', 'listbox');
                csSelector.setAttribute('aria-owns', 'custom-select-list');
                csInput.setAttribute('aria-autocomplete', 'both');
                csInput.setAttribute('aria-controls', 'custom-select-list');
                csList.setAttribute('role', 'listbox');

                csOptions.forEach(option => {
                    option.setAttribute('role', 'option');
                    option.setAttribute('tabindex', '-1');
                });

                csStatus.textContent =
                    `${csOptions.length} options available. Arrow down to browse or start typing to filter.`;
                setState('initial');

                csSelector.addEventListener('click', handleClick);
                csSelector.addEventListener('keyup', handleKeyUp);
                document.addEventListener('click', handleOutsideClick);
            }

            function handleClick(event) {
                const currentFocus = document.activeElement;
                switch (csState) {
                    case 'initial':
                        toggleList('Open');
                        setState('opened');
                        break;
                    case 'opened':
                        if (currentFocus === csInput) {
                            toggleList('Shut');
                            setState('initial');
                        } else if (currentFocus.tagName === 'LI') {
                            makeChoice(currentFocus);
                            toggleList('Shut');
                            setState('closed');
                        }
                        break;
                    case 'filtered':
                        if (currentFocus.tagName === 'LI') {
                            makeChoice(currentFocus);
                            toggleList('Shut');
                            setState('closed');
                        }
                        break;
                    case 'closed':
                        toggleList('Open');
                        setState('filtered');
                        break;
                }
            }

            function handleKeyUp(event) {
                doKeyAction(event.key);
            }

            function handleOutsideClick(event) {
                if (!event.target.closest('#myCustomSelect')) {
                    toggleList('Shut');
                    setState('initial');
                }
            }

            function toggleList(whichWay) {
                if (whichWay === 'Open') {
                    csList.classList.remove('hidden-all');
                    csSelector.setAttribute('aria-expanded', 'true');
                } else {
                    csList.classList.add('hidden-all');
                    csSelector.setAttribute('aria-expanded', 'false');
                }
            }

            function findFocus() {
                return document.activeElement;
            }

            function moveFocus(fromHere, toThere) {
                const aCurrentOptions = csOptions.filter(option => option.style.display === '');
                if (aCurrentOptions.length === 0) return;

                if (toThere === 'input') {
                    csInput.focus();
                    return;
                }

                const currentIndex = aCurrentOptions.indexOf(fromHere);
                let nextIndex;
                if (toThere === 'forward') {
                    nextIndex = currentIndex < script aCurrentOptions.length - 1 ? currentIndex + 1 : 0;
                } else {
                    nextIndex = currentIndex > 0 ? currentIndex - 1 : aCurrentOptions.length - 1;
                }
                aCurrentOptions[nextIndex].focus();
            }

            function doFilter() {
                const terms = csInput.value.toUpperCase();
                const aFilteredOptions = csOptions.filter(option => option.innerText.toUpperCase().startsWith(
                    terms));
                csOptions.forEach(option => option.style.display = "none");
                aFilteredOptions.forEach(option => option.style.display = "");
                setState('filtered');
                updateStatus(aFilteredOptions.length);
            }

            function updateStatus(howMany) {
                csStatus.textContent = `${howMany} options available.`;
            }

            function makeChoice(whichOption) {
                csInput.value = whichOption.textContent;
                moveFocus(document.activeElement, 'input');
            }

            function setState(newState) {
                csState = newState;
            }

            function doKeyAction(key) {
                const currentFocus = findFocus();
                switch (key) {
                    case 'Enter':
                        if (csState === 'initial') {
                            toggleList('Open');
                            setState('opened');
                        } else if ((csState === 'opened' || csState === 'filtered') && currentFocus.tagName ===
                            'LI') {
                            makeChoice(currentFocus);
                            toggleList('Shut');
                            setState('closed');
                        } else if ((csState === 'opened' || csState === 'filtered') && currentFocus === csInput) {
                            toggleList('Shut');
                            setState('closed');
                        } else {
                            toggleList('Open');
                            doFilter();
                            setState('filtered');
                        }
                        break;
                    case 'Escape':
                        if (csState === 'opened' || csState === 'filtered') {
                            toggleList('Shut');
                            setState('initial');
                        }
                        break;
                    case 'ArrowDown':
                        if (csState === 'initial' || csState === 'closed') {
                            toggleList('Open');
                            moveFocus(csInput, 'forward');
                            setState('opened');
                        } else {
                            toggleList('Open');
                            moveFocus(currentFocus, 'forward');
                        }
                        break;
                    case 'ArrowUp':
                        if (csState === 'initial' || csState === 'closed') {
                            toggleList('Open');
                            moveFocus(csInput, 'back');
                            setState('opened');
                        } else {
                            moveFocus(currentFocus, 'back');
                        }
                        break;
                    default:
                        if (csState === 'initial') {
                            toggleList('Open');
                            doFilter();
                            setState('filtered');
                        } else if (csState === 'opened' || csState === 'filtered') {
                            doFilter();
                        }
                        break;
                }
            }
        });
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
