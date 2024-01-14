@extends('frontend.master')
@section('content')
    <style>
        select {
            display: none !important;
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

        #multi_step_form .container #multistep_nav .activated_step {
            background-color: #ae0a46;
            color: white;
        }

        #multi_step_form .container fieldset.step {
            position: relative;
            padding: 10px;
        }

        #multi_step_form .container fieldset.step .nextStep {
            position: absolute;
            right: 5px;
            bottom: 5px;
            padding: 10px;
            width: 100px;
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
            <div class="row align-items-center py-4">
                <div class="col-lg-12 pb-4">
                    <h2 class="text-center">Make Your RFQ Here !</h2>
                    <p class="p-0 m-0 text-center">Choose Your RFQ BY:</p>
                </div>
                <div class="col-lg-4 col-offset-4 m-auto ">
                    <form action="">
                        <select id="rfqSelect" name="search">
                            <option>Search...</option>
                            <option value="1">One <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="2">Two <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="3">Three <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="container my-5">
                <div class="col-lg-8 col-offset-2 m-auto">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card border-0 p-4" style="background-color: #eee; height: 220px;">
                                <div class="card-header border-0 bg-transparent d-flex justify-content-center">
                                    <img width="100px" src="https://i.ibb.co/Tc9HNjK/Asset-4-5x-8.png" alt="">
                                </div>
                                <div class="card-body">
                                    <p class="text-center text-black" style="font-size: 14px;font-weight: 300;">DESCRIBE
                                        YOUR PURCHASE PROJECT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 p-4" style="background-color: #eee; height: 220px;">
                                <div class="card-header border-0 bg-transparent d-flex justify-content-center">
                                    <img width="100px" src="https://i.ibb.co/RDmjj32/Asset-5-5x-8.png" alt="">
                                </div>
                                <div class="card-body">
                                    <p class="text-center text-black" style="font-size: 14px;font-weight: 300;">WE SELECT
                                        THE BEST SUPPLIERS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 p-4" style="background-color: #eee; height: 220px;">
                                <div class="card-header border-0 bg-transparent d-flex justify-content-center">
                                    <img width="100px" src="https://i.ibb.co/zm36Ccz/Asset-6-5x-8.png" alt="">
                                </div>
                                <div class="card-body">
                                    <p class="text-center text-black" style="font-size: 14px;font-weight: 300;">COMPARE
                                        QUOTATIONS & PURCHASE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row showing-row">
                <div class="col-lg-12">
                    <form action="" id="yourFormIdss" action="" method="post" novalidate>
                        <div id="multi_step_form">
                            <div class="container p-0 mb-5">
                                <div id="multistep_nav">
                                    <div class="progress_holder">
                                        Your Needs
                                    </div>
                                    <div class="progress_holder">
                                        Product Details
                                    </div>
                                    <div class="progress_holder">
                                        Company Details
                                    </div>
                                    {{-- <div class="progress_holder">
                                        Finish
                                    </div> --}}
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
                                                        <h5>Chose should you enter complete project details here?</h5>
                                                        <p>Describing project details will enable suppliers to prepare a
                                                            proposal perfectly suited to your needs. Your project details
                                                            remain
                                                            confidential. Only the suppliers we select will have access to
                                                            the
                                                            information.</p>
                                                        <div>
                                                            <div class="d-flex">
                                                                <div>
                                                                    <p>Describe your project in detail here. Include for
                                                                        example: the context, your progress, the desired
                                                                        level
                                                                        of quality, etc.</p>
                                                                </div>
                                                                <div id="the-count" class="text-danger">
                                                                    <span>*</span>
                                                                    <span id="current">0</span>
                                                                    <span id="maximum">/ 300</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row pb-4">
                                                    <div class="col-lg-12 mb-2">
                                                        <textarea class="form-control" rows="3" name="the-textarea" id="the-textarea" maxlength="300"
                                                            placeholder="Start Typin..." autofocus></textarea>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Quantity <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" name="qty" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: 5"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Budget<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" name="budget" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: 5,000"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Delivery city <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="delivery_city"
                                                                class="form-control" id="exampleFormControlInput1"
                                                                placeholder="E.g: London" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Decision period <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" name="decision_period"
                                                                class="form-control" id="exampleFormControlInput1"
                                                                placeholder="E.g: 2" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label for="exampleFormControlInput1"
                                                                class="form-label">Select Product Category<span
                                                                    class="text-danger">*</span></label>
                                                        <select id="rfqSelectsss" name="search">
                                                            <option>Search...</option>
                                                            <option value="1">One <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="2">Two <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="3">Three <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                            <option value="4">Four <i class="fa-solid fa-file-circle-plus"></i></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="nextStep btn-color">Next</button>
                                </fieldset>
                                <fieldset class="step" id="step2">
                                    <div class="prevStep btn-color">Prev</div>
                                    <div class="container pb-4">
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <div class="d-flex p-4 px-0">
                                                    <div class="me-2">
                                                        <i class="fa-solid fa-circle-question main_color"
                                                            style="font-size: 35px;"></i>
                                                    </div>
                                                    <div>
                                                        <p>Why is it important to enter your contact information?</p>
                                                        <p>Entering precise contact information ensures you will receive
                                                            the
                                                            quotation.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                Email <span class="text-danger">*</span></label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                placeholder="E.g: youremail@mail.com" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                Company Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="company_name"
                                                                class="form-control" id="exampleFormControlInput1"
                                                                placeholder="E.g: company name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                First Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="first_name" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: Your Name"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                Last Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="last_name" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                placeholder="E.g: Your Last Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">City<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="city" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: City"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Cell
                                                                Phone<span class="text-danger">*</span></label>
                                                            <input type="text" name="phone" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                placeholder="E.g: Cell Phone" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="nextStep btn-color">Next</button>
                                </fieldset>
                                <fieldset class="step" id="step3">
                                    <div class="prevStep btn-color">Prev</div>
                                    <div class="container p-0">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <img width="350px"
                                                    src="https://static.wixstatic.com/media/b99d36_8fa88e6afeae4ef4ae76b8e3d19d6a1b~mv2.gif"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="text-center">All fields have been successfully filled up. <br>
                                                    Now, submit the RFQ</p>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-end pe-0">

                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="nextStep btn-color">Submit</button>
                                </fieldset>
                                {{-- <fieldset class="step" id="step4">

                                </fieldset> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h6 style="width: 15%;">Custom Product RFQ</h6>
                        <div style="border-top: 1px solid #eee; padding: -2px; width: 75%"></div>
                        <a href="javascript:void()" class="default-show"
                            style="border: 1px solid #ae0a46;
                        text-align: center;
                        color: #ffff;
                        padding: 0px 18px;
                        background: #ae0a46;">Default
                            RFQ</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form action="" id="yourFormId" action="" method="post" novalidate>
                        <div id="multi_step_form">
                            <div class="container p-0 mb-5">
                                <div id="multistep_nav">
                                    <div class="progress_holder">
                                        Your Needs
                                    </div>
                                    <div class="progress_holder">
                                        Product Details
                                    </div>
                                    <div class="progress_holder">
                                        Company Details
                                    </div>
                                    {{-- <div class="progress_holder">
                                        Finish
                                    </div> --}}
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
                                                        <h5>Why should you enter complete project details here?</h5>
                                                        <p>Describing project details will enable suppliers to prepare a
                                                            proposal perfectly suited to your needs. Your project details
                                                            remain
                                                            confidential. Only the suppliers we select will have access to
                                                            the
                                                            information.</p>
                                                        <div>
                                                            <div class="d-flex">
                                                                <div>
                                                                    <p>Describe your project in detail here. Include for
                                                                        example: the context, your progress, the desired
                                                                        level
                                                                        of quality, etc.</p>
                                                                </div>
                                                                <div id="the-count" class="text-danger">
                                                                    <span>*</span>
                                                                    <span id="current">0</span>
                                                                    <span id="maximum">/ 300</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row pb-4">
                                                    <div class="col-lg-12 mb-2">
                                                        <textarea class="form-control" rows="3" name="the-textarea" id="the-textarea" maxlength="300"
                                                            placeholder="Start Typin..." autofocus></textarea>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Quantity <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" name="qty" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: 5"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Budget<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" name="budget" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: 5,000"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Delivery city <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="delivery_city"
                                                                class="form-control" id="exampleFormControlInput1"
                                                                placeholder="E.g: London" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Decision period <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" name="decision_period"
                                                                class="form-control" id="exampleFormControlInput1"
                                                                placeholder="E.g: 2" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="nextStep btn-color">Next</button>
                                </fieldset>
                                <fieldset class="step" id="step2">
                                    <div class="prevStep btn-color">Prev</div>
                                    <div class="container pb-4">
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <div class="d-flex p-4 px-0">
                                                    <div class="me-2">
                                                        <i class="fa-solid fa-circle-question main_color"
                                                            style="font-size: 35px;"></i>
                                                    </div>
                                                    <div>
                                                        <p>Why is it important to enter your contact information?</p>
                                                        <p>Entering precise contact information ensures you will receive
                                                            the
                                                            quotation.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                Email <span class="text-danger">*</span></label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                placeholder="E.g: youremail@mail.com" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                Company Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="company_name"
                                                                class="form-control" id="exampleFormControlInput1"
                                                                placeholder="E.g: company name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                First Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="first_name" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: Your Name"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Your
                                                                Last Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="last_name" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                placeholder="E.g: Your Last Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">City<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="city" class="form-control"
                                                                id="exampleFormControlInput1" placeholder="E.g: City"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Cell
                                                                Phone<span class="text-danger">*</span></label>
                                                            <input type="text" name="phone" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                placeholder="E.g: Cell Phone" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="nextStep btn-color">Next</button>
                                </fieldset>
                                <fieldset class="step" id="step3">
                                    <div class="prevStep btn-color">Prev</div>
                                    <div class="container p-0">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <img width="350px"
                                                    src="https://static.wixstatic.com/media/b99d36_8fa88e6afeae4ef4ae76b8e3d19d6a1b~mv2.gif"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="text-center">All fields have been successfully filled up. <br>
                                                    Now, submit the RFQ</p>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-end pe-0">

                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="nextStep btn-color">Submit</button>
                                </fieldset>
                                {{-- <fieldset class="step" id="step4">

                                </fieldset> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
            // When the select option changes
            $('#rfqSelect').change(function() {
                // If the selected value is not the default
                if ($(this).val() !== "Search...") {
                    // Show the showing-row
                    $('.showing-row').show();
                    // Hide the form when showing-row is visible
                    $('#yourFormId').hide();
                } else {
                    // Hide the showing-row if the default is selected
                    $('.showing-row').hide();
                    // Show the form when showing-row is hidden
                    $('#yourFormId').show();
                }
            });

            // Click event for the "Default RFQ" link
            $('.default-show').click(function() {
                // Toggle the visibility of showing-row
                $('.showing-row').toggle();

                // Toggle the visibility of the form based on showing-row visibility
                $('#yourFormId').toggle(!$('.showing-row').is(':visible'));
            });
        });
    </script>

    <script>
        function create_custom_dropdowns() {
            $('select').each(function(i, select) {
                if (!$(this).next().hasClass('dropdown-select')) {
                    $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') +
                        '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                    var dropdown = $(this).next();
                    var options = $(select).find('option');
                    var selected = $(this).find('option:selected');
                    dropdown.find('.current').html(selected.data('display-text') || selected.text());
                    options.each(function(j, o) {
                        var display = $(o).data('display-text') || '';
                        var optionText = $(o).text();
                        var iconHtml = '<i class="fas fa-file-circle-plus text-end"></i>';
                        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ?
                                'selected' : '') + '" data-value="' + $(o).val() +
                            '" data-display-text="' + display + '">' + optionText + iconHtml + '</li>');
                    });
                }
            });

            $('.dropdown-select ul').before(
                '<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>'
            );
        }

        // Event listeners

        // Open/close
        $(document).on('click', '.dropdown-select', function(event) {
            if ($(event.target).hasClass('dd-searchbox')) {
                return;
            }
            $('.dropdown-select').not($(this)).removeClass('open');
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).find('.option').attr('tabindex', 0);
                $(this).find('.selected').focus();
            } else {
                $(this).find('.option').removeAttr('tabindex');
                $(this).focus();
            }
        });

        // Close when clicking outside
        $(document).on('click', function(event) {
            if ($(event.target).closest('.dropdown-select').length === 0) {
                $('.dropdown-select').removeClass('open');
                $('.dropdown-select .option').removeAttr('tabindex');
            }
            event.stopPropagation();
        });

        function filter() {
            var valThis = $('#txtSearchValue').val();
            $('.dropdown-select ul > li').each(function() {
                var text = $(this).text();
                (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
            });
        };
        // Search

        // Option click
        $(document).on('click', '.dropdown-select .option', function(event) {
            $(this).closest('.list').find('.selected').removeClass('selected');
            $(this).addClass('selected');
            var text = $(this).data('display-text') || $(this).text();
            $(this).closest('.dropdown-select').find('.current').text(text);
            $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        });

        // Keyboard events
        $(document).on('keydown', '.dropdown-select', function(event) {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[
                0]);
            // Space or Enter
            //if (event.keyCode == 32 || event.keyCode == 13) {
            if (event.keyCode == 13) {
                if ($(this).hasClass('open')) {
                    focused_option.trigger('click');
                } else {
                    $(this).trigger('click');
                }
                return false;
                // Down
            } else if (event.keyCode == 40) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    focused_option.next().focus();
                }
                return false;
                // Up
            } else if (event.keyCode == 38) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                        '.list .option.selected')[0]);
                    focused_option.prev().focus();
                }
                return false;
                // Esc
            } else if (event.keyCode == 27) {
                if ($(this).hasClass('open')) {
                    $(this).trigger('click');
                }
                return false;
            }
        });

        $(document).ready(function() {
            create_custom_dropdowns();
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
                // if ($('fieldset.current').attr('id') == 'step4') {
                //     $('.progress_holder:nth-child(4)').addClass('activated_step');
                // }
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
            //if ($(previous_fs).attr('id') == 'step4') {
            //  $('.progress_holder:nth-child(5)').removeClass('activated_step');
            // }
        });
    </script>
    {{-- For Text Counting Max Length 300 --}}
    <script>
        $('textarea').keyup(function() {

            var characterCount = $(this).val().length,
                current = $('#current'),
                maximum = $('#maximum'),
                theCount = $('#the-count');

            current.text(characterCount);


            /*This isn't entirely necessary, just playin around*/
            if (characterCount < 70) {
                current.css('color', '#666');
            }
            if (characterCount > 70 && characterCount < 90) {
                current.css('color', '#6d5555');
            }
            if (characterCount > 90 && characterCount < 100) {
                current.css('color', '#793535');
            }
            if (characterCount > 100 && characterCount < 120) {
                current.css('color', '#841c1c');
            }
            if (characterCount > 120 && characterCount < 139) {
                current.css('color', '#8f0001');
            }

            if (characterCount >= 140) {
                maximum.css('color', '#8f0001');
                current.css('color', '#8f0001');
                theCount.css('font-weight', 'bold');
            } else {
                maximum.css('color', '#666');
                theCount.css('font-weight', 'normal');
            }
        });
    </script>

@endsection
