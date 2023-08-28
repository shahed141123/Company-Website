<style>
    /* this is new */
    .feedback_upper_modal {
        font-size: 18px;
        cursor: pointer;
        position: fixed;
        bottom: 30%;
        right: -14px;
        background-color: var(--crimson);
        color: white;
        padding: 5px 10px;
        border: none;
        z-index: 1;
        transition: 0.5s;
        transform: rotate(-90deg);
    }


    /* Eit a Custom_style er 1882 number line e ace Please Remove and Add This */
    .openbtnfeedback {
        font-size: 18px;
        cursor: pointer;
        position: fixed;
        bottom: 50%;
        right: -40px;
        background-color: var(--crimson);
        color: white;
        padding: 5px 10px;
        border: none;
        z-index: 1;
        transition: 0.5s;
        transform: rotate(-90deg);
    }

    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #FFED85;
    }
</style>


<section>


    <div id="feedback_Sidebar" class="feedbacksidebar border-0">
        <div class="feedback_header_logo">
            <button class="close_feedback" onclick="feedbackButtonClicked()"><i
                    class="close-btn fas fa-times"></i></button>
            <div class="modal_logo_feedback">
                <img src="{{ asset('frontend') }}/images/ngenit.png" alt="">
            </div>
        </div>
        <div
            style="height: 5px; width:100%; background: linear-gradient(90deg, #ae0a46, #a80b6e 25%, #582873 75%);margin: 5px 0px;">
        </div>
        <div id="feedback" class="d-flex flex-column p-2" style="display: inherit !important;">
            <p>Thank you for assisting us with your feedback in this quick survey. Please take a minute to answer the
                questions below regarding your experience. <br>
                If you are experiencing an issue with your account, orders, or billing and want immediate assistance,
                please use our chat feature. </p>
            <div class="d-flex justify-content-end">
                <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click">continue</button>
            </div>
        </div>


        <div id="feedback_details" class="feedback_details" style="display: none;">
            <p>What topic(s) would you like to provide feedback on?</p>
            <form action="{{ route('feedback.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-center">Product Details and availability</h5>
                        <div class="d-flex justify-content-center">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label
                                    class="full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label
                                    class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label
                                    class="full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label
                                    class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label
                                    class="full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label
                                    class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label
                                    class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label
                                    class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label
                                    class="full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label
                                    class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between m-2">
                    <a class="common_button2 text-center text-white" style="font-size:14px "
                        onclick="feedbackVisible();" value="Click"><i class="fa-solid fa-chevron-left"></i>
                        Previous</a>
                    <a class="common_button2 text-center text-white" style="font-size: 14px" type="submit">Submit<i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
            </form>
        </div>


    </div>

{{-- RFQ Button --}}
    <div class="">
        <button class="feedback_upper_modal" data-bs-toggle="modal" data-bs-target="#rfqModal">RFQ <i
            class="fa-solid fa-question" style="font-size: 15px;"></i></button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="rfqModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header py-2" style="background: #ae0a46;">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Get Quote
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container px-0">
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
                            <div class="py-2 px-2 bg-light rounded">
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
                                <div class="form-group row px-3 mx-3 message g-recaptcha" data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col text-end">
                                    <button type="submit" class="btn btn-sm"
                                        style="background: #ae0a46; color: white;" role="button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- HTML !-->
            </div>
        </div>
    </div>

{{-- RFQ Button --}}



    {{-- Feed Back Button --}}
    <div id="feedback_btn">
        <button id="sidebarButton_fb" class="openbtnfeedback" onclick="feedbackButtonClicked()"><i
                class="fa-solid fa-bullhorn"></i> Feedback</button>
    </div>


</section>
