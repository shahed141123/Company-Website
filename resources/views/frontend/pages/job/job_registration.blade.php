@extends('frontend.master')
@section('content')
@section('styles')
    <meta property="og:title" content="NGen IT Job Registration">
    <!--<meta property="og:description" content="Description of your blog post">-->
    <meta property="og:image" content="http://ngenitltd.com/frontend/images/job_registration.jpg">
    <!--<meta property="og:url" content="URL to your blog post">-->
@endsection
<style>
    /* Custom style */
    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
        transform: scale(.7) !important;
    }


    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
    }


    .accordion-button {
        background-color: #f5f5f5;
        /* Background color of accordion buttons */
        color: #333;
        /* Text color of accordion buttons */
        border: none;
        /* Remove border */
    }


    .accordion-button:hover {
        background-color: #e0e0e0;
        /* Background color on hover */
    }


    .accordion-button:focus {
        box-shadow: none;
        /* Remove focus box */
    }


    .accordion-body {
        background-color: #fff;
        /* Background color of accordion content */
        border: 1px solid #ddd;
        /* Add a border to the content */
        padding: 15px;
        /* Adjust padding */
    }


    .trigger_title {
        background: #ae0a46;
        color: white;
    }


    .trigger_title:hover {
        background: #ae0a46;
        color: white;
    }


    label {
        font-size: 14px;
    }
</style>
<!--========// Header Title //========-->
<section class="">
    <div>
        <img src="{{ asset('frontend/images/job_registration.jpg') }}" alt="" class="img-fluid">

        {{-- <h1>Available Jobs</h1>

            <div class="row ">
                <div class="input-group w-50 mx-auto">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn job_search_btn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div> --}}
    </div>
</section>
<!------- End------->


<!--=======// Apply For A Job //========-->
<section>
    <div class="container">
        <h1 class="text-capitalize text-center my-3 main_color">Registration for a job</h1>
        <div class="row">
            <form class="needs-validation" action="{{ route('job_registration.store') }}" method="POST"
                enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row my-3">
                    {{-- First Row --}}
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Third Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#personal-details">Personal
                                    Details</button>
                            </h2>


                            <div id="personal-details" class="accordion-collapse collapse"
                                data-bs-parent="#personal-details">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="name" class="fw-light">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-sm border-0 bg-light"
                                                id="name" name="name" placeholder="E.g : MD Rassel" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Name.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="email" class="fw-light">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control form-control-sm border-0 bg-light"
                                                id="email" name="email" placeholder="E.g : russel@gmail.com"
                                                required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Email.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="phone_number" class="fw-light">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control form-control-sm border-0 bg-light"
                                                id="phone_number" name="phone_number" placeholder="E.g : 014 **** ****"
                                                required>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="address" class="fw-light">Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-sm border-0 bg-light"
                                                id="address" name="address" placeholder="E.g : Dhaka" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Address.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="district" class="fw-light">District <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-sm border-0 bg-light"
                                                id="district" name="district" placeholder="E.g : Dhaka" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your District.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="country" class="fw-light">Country <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light" id="country"
                                                name="country" placeholder="E.g : Dhaka" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Country.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Third Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#personal-details">Professional
                                    Training</button>
                            </h2>


                            <div id="personal-details" class="accordion-collapse collapse"
                                data-bs-parent="#personal-details">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="training_one_institution" class="fw-light">Training-One
                                                Institution Name</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="training_one_institution" name="training_one_institution"
                                                placeholder="E.g : Training With">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="training_one_topic" class="fw-light">Training-One
                                                Topic Name</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="training_one_topic" name="training_one_topic"
                                                placeholder="E.g : Redux Tool-Kit">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="training_two_institution" class="fw-light">Training-Two
                                                Institution Name</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="training_two_institution" name="training_two_institution"
                                                placeholder="E.g : Training With">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="training_two_topic" class="fw-light">Training-Two
                                                Topic Name</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="training_two_topic" name="training_two_topic"
                                                placeholder="E.g: Web Development">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="training_three_institution" class="fw-light">Training-Three
                                                Institution Name</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="training_three_institution" name="training_three_institution"
                                                placeholder="E.g : Training With">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="training_three_topic" class="fw-light">Training-Three
                                                Topic</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="training_three_topic" name="training_three_topic"
                                                placeholder="E.g: Microsoft">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    {{-- 2 Row --}}
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Third Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#professional-details">Professional
                                    Details</button>
                            </h2>
                            <div id="professional-details" class="accordion-collapse collapse">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_company_name_one" class="fw-light">
                                                Company Name-One</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_company_name_one"
                                                name="professional_company_name_one" placeholder="E.g: Ngen It">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_depertment_one" class="fw-light">
                                                Depertment Name-One</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_depertment_one" name="professional_depertment_one"
                                                placeholder="E.g: Web Development">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_start_date_one" class="fw-light">
                                                Start Date-One</label>
                                            <input type="date"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_start_date_one" name="professional_start_date_one"
                                                placeholder="E.g: 10/05/2023">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_end_date_one" class="fw-light"> End
                                                Date-One</label>
                                            <input type="date"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_end_date_one" name="professional_end_date_one"
                                                placeholder="E.g: 10/05/2023">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_company_name_two" class="fw-light">
                                                Company Name-Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_company_name_two"
                                                name="professional_company_name_two" placeholder="E.g: Ngen It">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_depertment_two" class="fw-light">
                                                Depertment Name-Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_depertment_two" name="professional_depertment_two"
                                                placeholder="E.g: Bussiness Development">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_start_date_two" class="fw-light">
                                                Start Date-Two</label>
                                            <input type="date"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_start_date_two" name="professional_start_date_two"
                                                placeholder="E.g: 10/05/2023">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="professional_end_date_two" class="fw-light"> End
                                                Date-Two</label>
                                            <input type="date"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="professional_end_date_two" name="professional_end_date_two"
                                                placeholder="E.g: 10/05/2023">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Fifth Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#professional-details">Academic
                                    Details</button>
                            </h2>
                            <div id="professional-details" class="accordion-collapse collapse">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_institution_one" class="fw-light">
                                                Institution Name-One <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_institution_one" name="academic_institution_one"
                                                placeholder="E.g: Brac University" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Academic Institution-One.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_degree_one" class="fw-light"> Degree Name-One <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_degree_one" name="academic_degree_one"
                                                placeholder="E.g: HSC" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Academic Degree-One.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_passing_one" class="fw-light">Passing Year-One <span
                                                    class="text-danger">*</span></label>
                                            <input type="date"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_passing_one" name="academic_passing_one"
                                                placeholder="E.g: 10/05/2023" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Academic Passing-One.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_result_one" class="fw-light">Result-One <span
                                                    class="text-danger">*</span></label>
                                            <input type="number"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_result_one" name="academic_result_one"
                                                placeholder="E.g: 3.70" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Academic Result-One.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_institution_two" class="fw-light">
                                                Institution Name-Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_institution_two" name="academic_institution_two"
                                                placeholder="E.g: Deffordil University">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_degree_two" class="fw-light">Degree
                                                Name-Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_degree_two" name="academic_degree_two"
                                                placeholder="E.g: BSC">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_passing_two" class="fw-light">Passing
                                                Year-Two</label>
                                            <input type="number"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_passing_two" name="academic_passing_two"
                                                placeholder="E.g: 10/05/2023">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="academic_result_two" class="fw-light">Result
                                                -Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="academic_result_two" name="academic_result_two"
                                                placeholder="E.g: 4.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 3 Row --}}
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Fourth Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#skill-set">Skill Set</button>
                            </h2>
                            <div id="skill-set" class="accordion-collapse collapse">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="skill_one" class="fw-light">Skill-One Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light" id="skill_one"
                                                name="skill_one" placeholder="E.g : Ms Word, React">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="skill_two" class="fw-light">Skill-Two Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light" id="skill_two"
                                                name="skill_two" placeholder="E.g : Ms Execl, Python">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="skill_three" class="fw-light">Skill-Three Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="skill_three" name="skill_three"
                                                placeholder="E.g : Ms Power Point, Fluter">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="skill_four" class="fw-light">Skill-Four Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light" id="skill_four"
                                                name="skill_four" placeholder="E.g : Ms Outlook, Php">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="skill_five" class="fw-light">Skill-Five Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light" id="skill_five"
                                                name="skill_five" placeholder="E.g : Photoshop, Laravel">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="skill_six" class="fw-light">Skill-Six Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light" id="skill_six"
                                                name="skill_six" placeholder="E.g : Illustrator, Ruby">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Six Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#skill-set">Extra-Curriculum
                                    Activities</button>
                            </h2>
                            <div id="skill-set" class="accordion-collapse collapse">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="activity_one" class="fw-light">Activity-One Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="activity_one" name="activity_one"
                                                placeholder="E.g : Singing, Coding">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="activity_two" class="fw-light">Activity-Two Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="activity_two" name="activity_two"
                                                placeholder="E.g : Traveling, Dancing">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="activity_three" class="fw-light">Activity-Three Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="activity_three" name="activity_three"
                                                placeholder="E.g : Bike Riding, Cooking">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="activity_four" class="fw-light">Activity-Four Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="activity_four" name="activity_four"
                                                placeholder="E.g : Craft, Home Decore">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="activity_five" class="fw-light">Activity-Five Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="activity_five" name="activity_five"
                                                placeholder="E.g : Learning, Swimming">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="activity_six" class="fw-light"> Activity-Six Title</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="activity_six" name="activity_six"
                                                placeholder="E.g : Gardening, Free">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 4 Row --}}
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Seven Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#reference-relative">Reference
                                    Relative</button>
                            </h2>
                            <div id="reference-relative" class="accordion-collapse collapse">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_name_one" class="fw-light">Reference Name-One <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_name_one" name="reference_name_one"
                                                placeholder="E.g: Md: Russel" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Reference Name-One.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_organisation_one" class="fw-light">Reference
                                                Organisation Name-One <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_organisation_one" name="reference_organisation_one"
                                                placeholder="E.g: Ngen It" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Reference Organisation-One.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_email_one" class="fw-light">Reference Email-One
                                                <span class="text-danger">*</span></label>
                                            <input type="email"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_email_one" name="reference_email_one"
                                                placeholder="E. g: ngenit@gmail.com" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Reference Email-One.
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_phone_one" class="fw-light">Reference Phone-One
                                                <span class="text-danger">*</span></label>
                                            <input type="number"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_phone_one" name="reference_phone_one"
                                                placeholder="E. g: 014 **** ****" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Reference Phone-One.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 accordion" id="myAccordion">
                        {{-- Eight Accordion --}}
                        <div class="accordion-item mb-3 rounded-0">
                            <h2 class="accordion-header shadow-sm" id="headingThree">
                                <button type="button" class="accordion-button trigger_title collapsed rounded-0"
                                    data-bs-toggle="collapse" data-bs-target="#reference-relative">Reference
                                    Personal</button>
                            </h2>
                            <div id="reference-relative" class="accordion-collapse collapse">
                                <div class="card-body shadow-sm p-3">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_name_two" class="fw-light">Reference Name
                                                -Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_name_two" name="reference_name_two"
                                                placeholder="E.g: Md: Russel">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_organisation_two" class="fw-light">Reference
                                                Organisation Name-Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_organisation_two" name="reference_organisation_two"
                                                placeholder="E.g: Ngen It">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_email_two" class="fw-light">Reference Email
                                                -Two</label>
                                            <input type="text"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_email_two" name="reference_email_two"
                                                placeholder="E. g: ngenit@gmail.com">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="reference_phone_two" class="fw-light">Reference Phone
                                                -Two</label>
                                            <input type="number"
                                                class="form-control form-control-sm border-0 bg-light"
                                                id="reference_phone_two" name="reference_phone_two"
                                                placeholder="E. g: 014 **** ****">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 5 Row --}}
                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-3">
                                <div class="mb-1">
                                    <label for="resume" class="fw-light">Upload Your CV <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control form-control-sm bg-light"
                                        id="resume" name="resume" placeholder="Your Upload Your CV" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter Your Upload Your CV.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-1">
                                    <label for="linkedin" class="fw-light">Linkedin Profile <span
                                            class="text-danger">*</span></label>
                                    <input type="url" class="form-control form-control-sm bg-light"
                                        id="linkedin" name="linkedin"
                                        placeholder=" E.g: https://www.linkedin.com/..." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter Your Linkedin Profile Url.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <button class="job_submit_btn rounded-0" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!---------End------->
@endsection
@section('scripts')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'


        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')


        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }


                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
@endsection
