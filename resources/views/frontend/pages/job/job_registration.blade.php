@extends('frontend.master')
@section('content')
    <!--========// Header Title //========-->
    <section class="apply_job_form_title"
        style="background-image: url('{{ asset('frontend/images/buy-category-hero.jpg') }}'); ">
        <div class="container">
            <div class="d-flex justify-content-center">
                <span></span>
            </div>
            <h1>Registration for a job</h1>
        </div>

    </section>
    <!------- End------->

    <!--=======// Apply For A Job //========-->
    <section class="container">
        <div class="apply_job_form_wrapper">
            <form action="{{ route('job_registration.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!--Personal Details (1)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="" data-toggle="collapse" aria-expanded="true" href="#collapseOne">Personal
                                    Details</a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="name" required placeholder="Your name">
                                    </div>
                                    <div class="col-6">
                                        <input type="email" name="email" required placeholder="Email">
                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="phone_number" required placeholder="Phone number"
                                        maxlength="255" tabindex="0">

                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="address" placeholder="Address">
                                    </div>
                                    <div class="col-6">

                                        <input type="text" name="district" required placeholder="District"
                                            maxlength="255" tabindex="0">

                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="country" required placeholder="Country"
                                            maxlength="255" tabindex="0">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Professional Training (1)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="" data-toggle="collapse" href="#collapseOne">Professional Training</a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-8">
                                        <input type="text" name="training_one_institution"
                                            placeholder="Training Institute name (1)">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="training_one_topic" placeholder="Topics Covered">
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="training_two_institution"
                                            placeholder="Training Institute name (2)">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="training_two_topic" placeholder="Topics Covered">
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="training_three_institution"
                                            placeholder="Training Institute name (3)">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="training_three_topic" placeholder="Topics Covered">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Professional  Details (2)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour">Professional Details</a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="professional_company_name_one"
                                            placeholder="Company Name (Experience 1)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="professional_depertment_one" placeholder="Department">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white">Start Date:</span>
                                        <input type="date" name="professional_start_date_one">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white pl-2">End Date :</span>
                                        <input type="date" name="professional_end_date_one">
                                    </div>
                                    <div class="col-12">
                                        <label class="m-2" for=""></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="professional_company_name_two"
                                            placeholder="Company Name (Experience 1)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="professional_depertment_two"
                                            placeholder="Department">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white">Start Date:</span>
                                        <input type="date" name="professional_start_date_two">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white pl-2">End Date :</span>
                                        <input type="date" name="professional_end_date_two">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Academic Details (2)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour">Academic Details</a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="academic_institution_one"
                                            placeholder="Institute Name (Academic 1)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_degree_one" placeholder="Exam/Degree Title">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_passing_one" placeholder="Year of Passing">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_result_one" placeholder="Result/CGPA">
                                    </div>
                                    <div class="col-12">
                                        <label class="m-2" for=""></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_institution_two"
                                            placeholder="Institute Name (Academic 2)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_degree_two" placeholder="Exam/Degree Title">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_passing_two" placeholder="Year of Passing">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_result_two" placeholder="Result/CGPA">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Skill Set-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSix">Skill Set</a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-4">
                                        <input type="text" name="skill_one" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_two" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_three" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_four" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_five" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_six" placeholder="Skill in">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Extra-Curriculum Activities-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSix">Extra-Curriculum
                                    Activities</a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-4">
                                        <input type="text" name="activity_one" placeholder="Activities One">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_two" placeholder="Activities Two">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_three" placeholder="Activities Three">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_four" placeholder="Activities Four">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_five" placeholder="Activities Five">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_six" placeholder="Activities Six">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Professional Reference-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseEight">Reference Relative</a>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="reference_name_one" placeholder="Name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_organisation_one"
                                            placeholder="Organization">
                                    </div>
                                    <div class="col-6">
                                        <input type="email" name="reference_email_one" placeholder="Email">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_phone_one" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Relative Reference-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseEight">Reference Personal</a>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse mt-2">
                                <!--form item-->
                                <div class="job_apply_form row">
                                    <div class="col-6">
                                        <input type="text" name="reference_name_two" placeholder="Name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_organisation_two"
                                            placeholder="Organization">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_email_two" placeholder="Email">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_phone_two" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job_apply_form row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="cv"><strong class="mt-1 mx-2" style="color: black;">Upload Your CV</strong></label>
                        <input class="form-control p-1" name="resume" type="file" id="cv">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row linkdin_profile_link">
                            <div class="col-4">
                                <label class="text-dark">Linkedin Profile</label>
                            </div>
                            <div class="col-8">
                                <input type="url" name="linkedin" placeholder="https://www.linkedin.com">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="job_submit_btn">Submit</button>
                </div>

            </form>
        </div>
    </section><br>
    <!---------End------->

@endsection
