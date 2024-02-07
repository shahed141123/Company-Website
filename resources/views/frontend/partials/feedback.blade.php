<style>
.extra-btns {
    font-size: 18px;
    letter-spacing: 1px;
    position: fixed;
    left: 0;
    top: 50%;
    transform: translateY(-50%) rotate(-90deg);
    transform-origin: left center;
    background-color: var(--primary-color);
    color: white;
    padding: 46px 23px 10px;
    border: none;
    margin-top: 220px;
    z-index: 950;
    border-radius: 0;
    width: 367px;
    text-align: center;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
}

    .extra-btns:hover {
        border: 1px solid #fa025df4;
        background-color: #fa025df4;
        color: #ffff;
        transition: 0.5s ease-in;
    }

    .btn-check:checked+.btn,
    .btn.active,
    .btn.show,
    .btn:first-child:active,
    :not(.btn-check)+.btn:active {
        color: var(--bs-btn-active-color);
        background-color: #ae0a46;
        border-color: #ae0a46;
        border-color: #ae0a46;
    }

    .offcanvas {
        position: fixed;
        top: 50%;
        width: 50%;
        height: 50vh;
        transform: translate(0, 50%);
    }

    /* Initial state */
    .extra-btns .fa-arrow-up {
        display: none;
    }

    /* Show up arrow when button is active */
    .extra-btns.active .fa-arrow-up {
        display: inline-block;
    }

    /* Hide down arrow when button is active */
    .extra-btns.active .fa-arrow-down {
        display: none;
    }


    .icon-container {
        /* background-color: #ae0a46; */
        padding: 10px;
        border-radius: 7px;
        /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
    }

    .custom-btn {
        background: #ae0a46;
        color: white;
        padding: 15px 25px;
        border-radius: 5px;
        border: 1 px solid #ae0a46;
    }

    .custom-btn:hover {
        background: white;
        border: 1px solid #ae0a46;
        color: #ae0a46;
        padding: 15px 25px;
        border-radius: 5px;
    }
</style>
<section>
    <a class="extra-btns" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"
        id="offcanvasTrigger">
        Quote Your Product<i class="fa-solid fa-arrow-down ps-2"></i><i class="fa-solid fa-arrow-up ps-2"></i>
    </a>

    <div class="offcanvas offcanvas-start"
    style="width: 50%; height: 40vh; transform: translate(0, 85%); border-top-right-radius: 20px; border-bottom-right-radius: 20px; background: url('https://img.freepik.com/free-vector/white-background-with-blue-tech-hexagon_1017-19366.jpg') no-repeat center center / cover;"
        tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <a href="{{ route('rfq') }}">
            <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 pb-5 pt-3">
                            <h4 class="m-0 text-center main_color fw-bold">Make Request For Quote</h4>
                            <p class="text-center p-0 m-0 pt-2">Tell us what you need, and we'll provide the best price.
                            </p>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card shadow-sm" style="border: 1px solid #eee;">
                                <div class="card-body">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <div class="icon-container">
                                            <img class="img-fluid" width="80px" src="https://i.ibb.co/NNWQ583/11.png"
                                                alt="">
                                        </div>
                                        <div class="text-center pt-3">
                                            <h6>Describe Your <br> Project Requirements</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card shadow-sm" style="border: 1px solid #eee;">
                                <div class="card-body">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <div class="icon-container">
                                            <img class="img-fluid" width="80px" src="https://i.ibb.co/zbqrcXX/13.png"
                                                alt="">
                                        </div>
                                        <div class="text-center pt-3">
                                            <h6>We Check The Right <br> Products & Prices For You</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card shadow-sm" style="border: 1px solid #eee;">
                                <div class="card-body">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <div class="icon-container">
                                            <img class="img-fluid" width="80px" src="https://i.ibb.co/6DgcD6F/12.png"
                                                alt="">
                                        </div>
                                        <div class="text-center pt-3">
                                            <h6>Review The Quation & <br> Complete Your Purchase</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>

<section>
    <div class="">
        <button class="feedback_upper_modal d-lg-block d-sm-none" data-bs-toggle="modal" data-bs-target="#rfqModal">RFQ
            <i class="fa-solid fa-question" style="font-size: 14px;"></i>
        </button>
        <button class="feedback_upper_modal d-lg-block d-sm-none" data-bs-toggle="modal" data-bs-target="#rfqModal">RFQ
            <i class="fa-solid fa-question" style="font-size: 14px;"></i>
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="rfqModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2" style="background: #ae0a46;">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Get Quote
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('rfq.add') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-lg-9">
                                    <label class="mb-2" for="product_name">Product Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="product_name" id="product_name"
                                        value="{{ old('product_name') }}" required>
                                </div>
                                <div class="col-lg-3">
                                    <label class="mb-2" for="qty">Custom Quantity</label>
                                    <input type="text" class="form-control" name="qty" id="qty"
                                        value="{{ old('qty') }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-4 mb-3 pe-0">
                                    {{-- <label for="name">Name <span class="text-danger">*</span> </label> --}}
                                    <input type="text" class="form-control rounded-0" required id="name"
                                        name="name" placeholder="Your Name *" />
                                </div>
                                <div class="col-lg-4 mb-3 pe-0">

                                    <input type="number" class="form-control rounded-0" id="phone"
                                        name="phone" placeholder="Your Phone Number *" required />
                                </div>
                                <div class="col-lg-4 mb-3">
                                    {{-- <label for="contact">Company Name </label> --}}
                                    <input type="text" class="form-control rounded-0" id="contact"
                                        name="company_name" placeholder="Your Company Name *" required />
                                </div>
                                <div class="col-lg-5 mb-3 pe-0">
                                    {{-- <label for="email">Email <span class="text-danger">*</span> </label> --}}
                                    <input type="email" required class="form-control rounded-0" id="email"
                                        name="email" placeholder="Your Email *" required />
                                    <span class="text-danger text-start p-0 m-0 email_validation"
                                        style="display: none">Please input valid email</span>
                                </div>
                                <div class="col-lg-7 mb-3">
                                    {{-- <label for="contact">Custom Image </label> --}}
                                    <input type="file" name="image" class="form-control rounded-0"
                                        id="image" accept="image/*" placeholder="Your Custom Image" />
                                </div>
                                <div class="col-lg-12 mb-3">
                                    {{-- <label for="message">Type Message</label> --}}
                                    <textarea class="form-control rounded-0" id="message" name="message" rows="3" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <div class="form-check border-0">
                                        <input class="form-check-input" type="checkbox" value="1"
                                            id="flexCheckDefault" name="call" placeholder="Call Me"
                                            style="left: 3rem;" />
                                        <label class="form-check-label" for="flexCheckDefault"> Call Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group px-3 mx-1 message g-recaptcha w-100"
                                        data-sitekey="{{ config('app.recaptcha_site_key') }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <button type="submit" class="btn rounded-0 p-2"
                                        style="background: #ae0a46; color: white; width:150px; font-size:20px"
                                        role="button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- HTML !-->
            </div>
        </div>
    </div>
</section>
<section>
    {{-- Faborite --}}
    <div class="fab-info-icon-wrapper">
        <input id="fab-info-iconCheckbox" type="checkbox" class="fab-info-icon-checkbox" />
        <label class="fab-info-icon" for="fab-info-iconCheckbox">
            <span class="fab-info-icon-dots fab-info-icon-dots-1"></span>
            <span class="fab-info-icon-dots fab-info-icon-dots-2"></span>
            <span class="fab-info-icon-dots fab-info-icon-dots-3"></span>
        </label>
        <div class="fab-info-icon-wheel">
            <a href="{{ route('faq') }}" class="fab-info-icon-action fab-info-icon-action-2" data-title="FAQ">
                <i class="fas fa-book"></i>
            </a>
            <a href="javascript:void(0);" class="fab-info-icon-action fab-info-icon-action-1" data-title="RFQ"
                data-bs-toggle="modal" data-bs-target="#rfqModal">
                {{-- <i class="fas fa-question"></i> --}}

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115.84 110.29"
                    style="height: 35px;
            padding-top: 8px;">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #c0d4e3;
                            }

                            .cls-2 {
                                fill: #98b8d2;
                            }

                            .cls-3 {
                                fill: #d9e6ee;
                            }

                            .cls-4 {
                                fill: #ae0a46;
                            }

                            .cls-5 {
                                fill: none;
                            }
                        </style>
                    </defs>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <path class="cls-1"
                                d="M48.43,86.4A17.49,17.49,0,0,0,50.88,72H65A17.49,17.49,0,0,0,67.41,86.4Z" />
                            <path class="cls-2"
                                d="M64.36,76.4c0,.55,0,1.09.07,1.62h-13a14.41,14.41,0,0,0,.08-1.62,19.11,19.11,0,0,0-.16-2.28h13.2A17.23,17.23,0,0,0,64.36,76.4Z" />
                            <path class="cls-3"
                                d="M115.84,3.63V58.41h-3.42V6.22a2.8,2.8,0,0,0-2.8-2.81H6.21A2.8,2.8,0,0,0,3.42,6.22V58.41H0V3.63A3.64,3.64,0,0,1,3.63,0H112.21A3.64,3.64,0,0,1,115.84,3.63Z" />
                            <path class="cls-3"
                                d="M0,60.45V70.68a3.63,3.63,0,0,0,3.63,3.63H112.21a3.62,3.62,0,0,0,3.62-3.63V60.45Zm61.75,8.33a1.15,1.15,0,0,1-.84.35h-6a1.2,1.2,0,0,1-.84-2,1.23,1.23,0,0,1,.84-.35h6a1.19,1.19,0,0,1,1.19,1.2A1.15,1.15,0,0,1,61.75,68.78Z" />
                            <path class="cls-4"
                                d="M110.37,6.22V58.41H5.46V6.22a.76.76,0,0,1,.75-.76H109.62A.75.75,0,0,1,110.37,6.22Z" />
                            <line class="cls-5" x1="53.73" y1="67.94" x2="62.1" y2="67.94" />
                            <path class="cls-4"
                                d="M62.1,67.94a1.2,1.2,0,0,1-1.19,1.19h-6a1.2,1.2,0,0,1-.85-2,1.24,1.24,0,0,1,.85-.35h6A1.19,1.19,0,0,1,62.1,67.94Z" />
                            <path class="cls-3"
                                d="M36.35,43.53,30.57,33.27H28.09l0,10.24H22.79l.06-26.3,9.87,0a11.44,11.44,0,0,1,5.19,1.08,7.51,7.51,0,0,1,3.22,2.91,7.77,7.77,0,0,1-4.94,11.65l6.27,10.67ZM28.1,29.31h4.4a4.44,4.44,0,0,0,3.21-1,3.87,3.87,0,0,0,1.06-2.88,3.7,3.7,0,0,0-1.05-2.81,4.48,4.48,0,0,0-3.2-1H28.11Z" />
                            <path class="cls-3"
                                d="M63.23,17.29v4.26l-11,0v6.75l8.4,0v4.18l-8.4,0,0,11.11H46.94L47,17.26Z" />
                            <path class="cls-3"
                                d="M86.49,48.27l-4-4.79a14.32,14.32,0,0,1-3.4.41,13.63,13.63,0,0,1-6.77-1.75,12.93,12.93,0,0,1-4.89-4.82,13.48,13.48,0,0,1-1.8-6.95,13.41,13.41,0,0,1,1.83-6.91,12.9,12.9,0,0,1,4.91-4.79A14.15,14.15,0,0,1,86,18.7a12.87,12.87,0,0,1,4.85,4.81,13.4,13.4,0,0,1,1.77,6.92,13.61,13.61,0,0,1-1.5,6.38A12.88,12.88,0,0,1,87,41.49l6,6.8ZM72.09,35a7.22,7.22,0,0,0,2.84,3.07,8.67,8.67,0,0,0,8.38,0,7.3,7.3,0,0,0,2.83-3.06,10.19,10.19,0,0,0,1-4.63,10,10,0,0,0-1-4.62,7.22,7.22,0,0,0-2.82-3,8.17,8.17,0,0,0-4.18-1.07,8.29,8.29,0,0,0-4.2,1,7.2,7.2,0,0,0-2.85,3,9.89,9.89,0,0,0-1,4.61A10.1,10.1,0,0,0,72.09,35Z" />
                            <path class="cls-3"
                                d="M82.23,91.92a.87.87,0,0,1-.78.53H34.39a.87.87,0,0,1-.78-.53.86.86,0,0,1-.06-.61l1.16-4.6a.91.91,0,0,1,.84-.69H80.29a.89.89,0,0,1,.83.69l1.16,4.6A.9.9,0,0,1,82.23,91.92Z" />
                            <line class="cls-5" x1="81.15" y1="110.29" x2="79.61" y2="110.29" />
                        </g>
                    </g>
                </svg>
            </a>

            <a href="{{ route('contact') }}" class="fab-info-icon-action fab-info-icon-action-4"
                data-title="Contact">
                <i class="fas fa-info"></i>
            </a>
            <a href="{{ route('terms.policy') }}" class="fab-info-icon-action fab-info-icon-action-3"
                data-title="Terms & Condition">
                <i class="fas fa-address-book"></i>
            </a>

        </div>
    </div>
</section>
<script>
    document.getElementById('offcanvasTrigger').addEventListener('click', function() {
        document.querySelector('.extra-btns').style.left = '50%'; // Move button to the center
    });

    document.getElementById('offcanvasExample').addEventListener('hidden.bs.offcanvas', function() {
        document.querySelector('.extra-btns').style.left = '0'; // Move button back to the left
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var offcanvasTrigger = document.getElementById('offcanvasTrigger');
        var offcanvasElement = document.getElementById('offcanvasExample');

        offcanvasTrigger.addEventListener('click', function() {
            offcanvasElement.classList.toggle('active');
        });

        offcanvasElement.addEventListener('hidden.bs.offcanvas', function() {
            offcanvasTrigger.classList.remove('active');
        });

        offcanvasElement.addEventListener('shown.bs.offcanvas', function() {
            offcanvasTrigger.classList.add('active');
        });
    });
</script>
{{-- Feed Back Button --}}
