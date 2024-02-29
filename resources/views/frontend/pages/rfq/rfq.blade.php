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
            padding: 20px;
            width: 33%;
            text-align: center;
            background-color: #eee;
        }

        #multi_step_form .container #multistep_nav .progress_holder_custom {
            padding: 20px;
            width: 33%;
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

        @supports (-webkit-appearance: none) or (-moz-appearance: none) {
            .checkbox-wrapper-13 input[type=checkbox] {
                --active: #275EFE;
                --active-inner: #fff;
                --focus: 2px rgba(39, 94, 254, .3);
                --border: #BBC1E1;
                --border-hover: #275EFE;
                --background: #fff;
                --disabled: #F6F8FF;
                --disabled-inner: #E1E6F9;
                -webkit-appearance: none;
                -moz-appearance: none;
                height: 21px;
                outline: none;
                display: inline-block;
                vertical-align: top;
                position: relative;
                margin: 0;
                cursor: pointer;
                border: 1px solid var(--bc, var(--border));
                background: var(--b, var(--background));
                transition: background 0.3s, border-color 0.3s, box-shadow 0.2s;
            }

            .checkbox-wrapper-13 input[type=checkbox]:after {
                content: "";
                display: block;
                left: 0;
                top: 0;
                position: absolute;
                transition: transform var(--d-t, 0.3s) var(--d-t-e, ease), opacity var(--d-o, 0.2s);
            }

            .checkbox-wrapper-13 input[type=checkbox]:checked {
                --b: var(--active);
                --bc: var(--active);
                --d-o: .3s;
                --d-t: .6s;
                --d-t-e: cubic-bezier(.2, .85, .32, 1.2);
            }

            .checkbox-wrapper-13 input[type=checkbox]:disabled {
                --b: var(--disabled);
                cursor: not-allowed;
                opacity: 0.9;
            }

            .checkbox-wrapper-13 input[type=checkbox]:disabled:checked {
                --b: var(--disabled-inner);
                --bc: var(--border);
            }

            .checkbox-wrapper-13 input[type=checkbox]:disabled+label {
                cursor: not-allowed;
            }

            .checkbox-wrapper-13 input[type=checkbox]:hover:not(:checked):not(:disabled) {
                --bc: var(--border-hover);
            }

            .checkbox-wrapper-13 input[type=checkbox]:focus {
                box-shadow: 0 0 0 var(--focus);
            }

            .checkbox-wrapper-13 input[type=checkbox]:not(.switch) {
                width: 21px;
            }

            .checkbox-wrapper-13 input[type=checkbox]:not(.switch):after {
                opacity: var(--o, 0);
            }

            .checkbox-wrapper-13 input[type=checkbox]:not(.switch):checked {
                --o: 1;
            }

            .checkbox-wrapper-13 input[type=checkbox]+label {
                display: inline-block;
                vertical-align: middle;
                cursor: pointer;
                margin-left: 4px;
            }

            .checkbox-wrapper-13 input[type=checkbox]:not(.switch) {
                border-radius: 7px;
            }

            .checkbox-wrapper-13 input[type=checkbox]:not(.switch):after {
                width: 5px;
                height: 9px;
                border: 2px solid var(--active-inner);
                border-top: 0;
                border-left: 0;
                left: 7px;
                top: 4px;
                transform: rotate(var(--r, 20deg));
            }

            .checkbox-wrapper-13 input[type=checkbox]:not(.switch):checked {
                --r: 43deg;
            }
        }

        .checkbox-wrapper-13 * {
            box-sizing: inherit;
        }

        .checkbox-wrapper-13 *:before,
        .checkbox-wrapper-13 *:after {
            box-sizing: inherit;
        }

        /* [type="checkbox"]:checked,
                        [type="checkbox"]:not(:checked) {
                            position: absolute;
                            left: 0px;
                            top: 6px;
                        } */

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
            background: black;
            border: 0;
            width: 20px;
            height: 20px;
        }

        .custom-radio label {
            /* Add your styles for the label containing the radio button and text */
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
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mx-auto">
                    <!-- Nav tabs -->
                    <div class="d-flex justify-content-center align-items-center pb-4 pt-5">
                        <ul class="nav nav-tabs nav-tabs-rfq" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <label class="nav-link active rounded-0 custom-radio" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <input type="radio" class="form-check-input me-2"
                                        aria-label="Select RFQ with Product Selection" name="rfqType" checked>
                                    RFQ WITH PRODUCT SELECTION
                                    <div class="d-flex align-items-center pt-2">
                                        <img class="me-3" width="50px" src="https://i.ibb.co/Tc9HNjK/Asset-4-5x-8.png"
                                            alt="">
                                        RFQ with product selection streamlines <br>
                                         procurement by offering a user-friendly <br>
                                        interface, facilitating efficient requests <br>
                                         for quotes tailored to specific product <br>
                                        requirements.
                                    </div>
                                </label>
                            </li>
                            <li class="nav-item" role="presentation">
                                <label class="nav-link rounded-0 custom-radio" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <input type="radio" class="form-check-input me-2"
                                        aria-label="Select Custom Request for Quote" name="rfqType">
                                    CUSTOM REQUEST FOR QUOTE
                                    <div class="d-flex align-items-center pt-2">
                                        <img class="me-3" width="50px" src="https://i.ibb.co/Tc9HNjK/Asset-4-5x-8.png"
                                            alt="">
                                        RFQ WITH PRODUCT SELECTION <br>
                                        RFQ WITH PRODUCT SELECTION <br>
                                        RFQ WITH PRODUCT SELECTION
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>



                    <!-- Tab panes -->
                    <div class="tab-content pt-5">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="" id="yourFormIdss" action="" method="post" novalidate>
                                <div id="multi_step_form">
                                    <div class="container p-0 mb-5">
                                        <div id="multistep_nav">
                                            <div class="progress_holder progress_holder_custom">
                                                Product QUERY
                                            </div>
                                            <div class="progress_holder progress_holder_custom">
                                                QUERY DETAILS
                                            </div>
                                            <div class="progress_holder progress_holder_custom">
                                                Company DETAILS
                                            </div>
                                        </div>
                                        <fieldset class="step" id="step1">
                                            <div class="container">
                                                <div class="row mb-4">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div class="">
                                                                <h5>Chose should you enter product query details here?</h5>
                                                                <p>Describing query details will enable suppliers to prepare
                                                                    a
                                                                    proposal perfectly suited to your needs. Your query
                                                                    details
                                                                    remain
                                                                    confidential. Only the suppliers we select will have
                                                                    access to
                                                                    the
                                                                    information.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="repeater-default">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-12 d-flex align-items-center">
                                                                    <div class=""
                                                                        style="width: 5%; margin-top: 10px;">
                                                                        <div class="mt-4">
                                                                            <span class="p-2" data-repeater-create=""
                                                                                style=" font-size: 18px;padding: 5px 10px !important;color: white;cursor: pointer;background-color: #ae0a46; border-radius: 5px;">
                                                                                <i class="fa-solid fa-plus"></i> <span
                                                                                    class="glyphicon glyphicon-plus"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div style="width: 97%">
                                                                        <div data-repeater-list="car" class="drag">
                                                                            <div data-repeater-item=""
                                                                                class="row gx-2 align-items-center me-4">
                                                                                <div class="col-lg-10">
                                                                                    <div class="searchInput">
                                                                                        <label
                                                                                            class="control-label pb-2">Product
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm border-0 rounded-1"
                                                                                            placeholder="Product"
                                                                                            onkeyup="showSuggestions(event)">
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
                                                                                <div
                                                                                    class="col-lg-2 d-flex justify-content-between align-items-center">
                                                                                    <div style="width: 95%">
                                                                                        <label
                                                                                            class="control-label pb-2">Quantity</label>
                                                                                        <input type="number"
                                                                                            name="qty" value=""
                                                                                            class="form-control form-control-sm border-0 rounded-1">
                                                                                    </div>
                                                                                    <div class="mt-4 ms-2"
                                                                                        style="width: 5%; margin-top: 30px !important;">
                                                                                        <span data-repeater-delete=""
                                                                                            style=" font-size: 18px;padding: 5px 10px;color: white;cursor: pointer;background-color: #ae0a46; border-radius: 5px;">
                                                                                            <i
                                                                                                class="fa-solid fa-trash"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 text-end">
                                                            <button type="button"
                                                                class="nextStep btn-color mb-2">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <fieldset class="step" id="step2">
                                            <div class="prevStep btn-color mb-2 ms-3">Prev</div>
                                            <div class="container pb-4">
                                                <div class="row mb-4">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div>
                                                                <p>Why is it important to enter your company information?
                                                                </p>
                                                                <p>Entering precise company information ensures you will
                                                                    receive
                                                                    the quotation.</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Budget Ammount <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="number" name="email"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="exampleFormControlInput1"
                                                                        placeholder="Your Budget" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Closing Date<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="date" name="company_name"
                                                                        class="form-control form-control-sm border-0 rounded-1"
                                                                        id="exampleFormControlInput1"
                                                                        placeholder="Closing Date" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Select Stage<span
                                                                            class="text-danger">*</span></label>
                                                                    <select class="form-select form-select-sm"
                                                                        aria-label="Default select example">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">Budget Stage</option>
                                                                        <option value="2">Tore Stage</option>
                                                                        <option value="3">RFQ Stage</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Status<span
                                                                            class="text-danger">*</span></label>
                                                                    <select class="form-select form-select-sm"
                                                                        aria-label="Default select example">
                                                                        <option selected>Select A Status</option>
                                                                        <option value="1">Quicke</option>
                                                                        <option value="2">Slow Step</option>
                                                                        <option value="3">Normal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-check text-start ps-0">
                                                                    <div class="checkbox-wrapper-13">
                                                                        <input id="c1-13" type="checkbox">
                                                                        <label for="c1-13">Would you like to have a
                                                                            brochure
                                                                            created? Please let me know if you need
                                                                            assistance with
                                                                            designing a brochure.</label>
                                                                    </div>
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
                                                <div class="row m-1 pb-4">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div>
                                                                <p>Why is it important to enter your QUERY information?</p>
                                                                <p>Entering precise QUERY information ensures you will
                                                                    receive
                                                                    the quotation.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Name</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Your Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Email</label>
                                                            <input type="numnber"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Phone Number</label>
                                                            <input type="numnber"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Your Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">City</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Enter City">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Zip Code</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Enter Zip Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Company Name</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Enter Company Name">
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
                                                    <div class="col-lg-12">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div class="">
                                                                <h5>Chose should you enter complete query details here?</h5>
                                                                <p>Describing query details will enable suppliers to prepare
                                                                    a
                                                                    proposal perfectly suited to your needs. Your query
                                                                    details
                                                                    remain confidential. Only the suppliers we select will
                                                                    have
                                                                    access to
                                                                    the information.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="control-label pb-1">Category</label> <br>
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
                                                                <label class="control-label pb-1">Brand</label> <br>
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
                                                                <label class="control-label pb-1">Industry</label> <br>
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
                                                                <label class="control-label pb-1">Don't Find Suitable
                                                                    Option ?
                                                                    Enter Your Custom Query</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                                                    <div class="col-lg-12">
                                                        <div class="row mb-4">
                                                            <div class="col-lg-12">
                                                                <div class="d-flex p-4 px-0">
                                                                    <div class="me-2">
                                                                        <i class="fa-solid fa-circle-question main_color"
                                                                            style="font-size: 35px;"></i>
                                                                    </div>
                                                                    <div>
                                                                        <p>Why is it important to enter your QUERY
                                                                            information?</p>
                                                                        <p>Entering precise QUERY information ensures you
                                                                            will
                                                                            receive
                                                                            the quotation.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Budget Ammount <span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="number" name="email"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                id="exampleFormControlInput1"
                                                                                placeholder="Your Budget" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Closing Date<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="date" name="company_name"
                                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                                id="exampleFormControlInput1"
                                                                                placeholder="Closing Date" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Select Stage<span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="form-select form-select-sm"
                                                                                aria-label="Default select example">
                                                                                <option selected>Open this select menu
                                                                                </option>
                                                                                <option value="1">Budget Stage
                                                                                </option>
                                                                                <option value="2">Tore Stage</option>
                                                                                <option value="3">RFQ Stage</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Status<span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="form-select form-select-sm"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select A Status</option>
                                                                                <option value="1">Quicke</option>
                                                                                <option value="2">Slow Step</option>
                                                                                <option value="3">Normal</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-check text-start ps-0">
                                                                            <div class="checkbox-wrapper-13">
                                                                                <input id="c1-13" type="checkbox">
                                                                                <label for="c1-13">Would you like to
                                                                                    have a
                                                                                    brochure
                                                                                    created? Please let me know if you need
                                                                                    assistance with
                                                                                    designing a brochure.</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                                <div class="row m-1 pb-4">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex p-4 px-0">
                                                            <div class="me-2">
                                                                <i class="fa-solid fa-circle-question main_color"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                            <div>
                                                                <p>Why is it important to enter your QUERY information?</p>
                                                                <p>Entering precise QUERY information ensures you will
                                                                    receive
                                                                    the quotation.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Name</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Your Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Email</label>
                                                            <input type="numnber"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Phone Number</label>
                                                            <input type="numnber"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Your Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">City</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Enter City">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Zip Code</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Enter Zip Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group pt-2">
                                                            <label for="" class="pb-1">Company Name</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 rounded-1"
                                                                placeholder="Enter Company Name">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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
            if (event.target.matches('.searchInput input')) {
                showSuggestions(event.target);
            }
        });

        function showSuggestions(inputElement) {
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
            if (!event.target.matches('.suggestionList li') && !event.target.matches('.searchInput input')) {
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
        document.addEventListener('keyup', function(event) {
            if (event.target.matches('.searchInput input')) {
                showSuggestions(event.target);
            }
        });

        function showSuggestions(inputElement) {
            let parentRepeaterItem = inputElement.closest('[data-repeater-item]');
            let suggestionsList = parentRepeaterItem.querySelector(".suggestionList");
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
            if (!event.target.matches('.suggestionList li') && !event.target.matches('.searchInput input')) {
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
        // SETUP
        // /////////////////////////////////
        // assign names to things we'll need to use more than once
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
    <script>
        var repeater = $('.repeater-default').repeater({
            initval: 1,
        });


        jQuery(".drag").sortable({
            axis: "y",
            cursor: 'pointer',
            opacity: 0.5,
            placeholder: "row-dragging",
            delay: 150,
            update: function(event, ui) {
                console.log('repeaterVal');
                console.log(repeater.repeaterVal());
                console.log('serializeArray');
                console.log($('form').serializeArray());
            }
        }).disableSelection();
    </script>
    <script>
        function toggleSection(showId, hideId) {
            // Show the section with the specified ID
            document.getElementById(showId).style.display = 'block';

            // Hide the section with the other ID
            document.getElementById(hideId).style.display = 'none';
        }
    </script>
@endsection
