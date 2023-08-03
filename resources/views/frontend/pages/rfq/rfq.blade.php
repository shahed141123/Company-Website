@extends('frontend.master')
@section('content')
    <!--========// Contact us banner //========-->
    <section class="contact_banner" style="background-image: url({{ asset('/') }}frontend/images/contact/contact.jpg);">
        <!-- content -->
        <div class="contact_banner_content">
            <h2 class="banner_contact_title">RFQ Section</h2>
        </div>
    </section>
    <!--------- End -------->

    <!--========// Contact body//========-->
    <div class="container section_padding">
        <!-- wrapper -->
        <div class="row m-0">

            <!----// left content //----->
            <div class="col-lg-6 col-sm-12">
                <div class="contact_left_content">
                    <p class="contact_left_title">Need immediate assistance?</p>
                    <p class="contact_left_text">Get assistance with tracking an order, requesting a quote, contacting your
                        account representative and more by <a href="tel:01723507989">phone</a> or <a href="">over
                            chat</a>.</p>

                    <!-- contact left phone -->
                    <div class="contact_anything_wrapper">
                        <!-- call -->
                        <div class="contact_call">
                            <div class="contact_call_title">Call us</div>
                            <div class="contact_call_number"> 01971-424220</div>
                        </div>

                        <!-- contact chat -->
                        <div class="contact_call contact_chat">
                            <div class="contact_call_title">Chat now</div>
                            <a href="" class="contact_chat_button"> <span> <i class="fa-solid fa-message"></i>
                                </span> <span> Chat with us</span> </a>
                        </div>
                    </div>

                    <!-- contact global -->
                    <div class="contact_global">
                        <div class="contact_global_title">NGentIt global headquarters</div>
                        <!-- adress -->
                        <div class="gloabal_content_address">
                            <span>Panthapath, Dhaka 1215</span>
                        </div>

                        <!-- contact call or email -->

                        <div class="global_contact_phone">
                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Billing & invoice: </span> <a href="tel:01971-424220">01971-424220</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Information and sales:</span> <a href="tel:01971-424220">01971-424220</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>OneCall support:</span> <a href="tel:01971-424220">01971-424220</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Returns:</span> <a href="tel:01971-424220">01971-424220</a>
                            </div>
                        </div>

                        <!-- location button -->
                        <a href="" class="product_button">View all NGentIt office locations</a>

                    </div>
                </div>
            </div>
            <!----// Right Contact from //----->
            <div class="col-lg-6 col-sm-12 p-0">
                <!-- form Sidebar -->
                <form action="{{ route('rfq.store') }}" method="POST">
                    @csrf
                    <div class="row specialist_contect_form">
                        <h4 class="col-12">RFQ</h4>
                        <!-- item -->
                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <select name="sales_man_id" id="" class="form_input">
                                <option value="">Select sales man</option>
                                @foreach ($sales_mans as $sales_man)
                                    <option value="{{ $sales_man->id }}">{{ $sales_man->name }}</option>
                                @endforeach
                            </select>
                            <label class="form_label" for="">Sales Man Id: </label>
                        </div>

                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="text" name="name" placeholder="Name" required>
                            <label class="form_label" for="">Name: *</label>
                        </div>

                        <!-- item -->
                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="email" placeholder="email" name="email" required>
                            <label class="form_label" for="">Email: *</label>
                        </div>


                        <!-- item -->
                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="text" placeholder="Phone" name="phone" required>
                            <label class="form_label" for="">Phone: *</label>
                        </div>

                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="text" placeholder="company_name" name="company_name">
                            <label class="form_label" for="">Company Name: </label>
                        </div>

                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="text" placeholder="license" name="license">
                            <label class="form_label" for="">License: </label>
                        </div>

                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="text" placeholder="registration_id" name="registration_id">
                            <label class="form_label" for="">Registration Id: </label>
                        </div>

                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="text" placeholder="pcn_number" name="pcn_number">
                            <label class="form_label" for="">Pcn Number: </label>
                        </div>

                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <input class="form_input" type="text" placeholder="authorization" name="authorization">
                            <label class="form_label" for="">Authorization: </label>
                        </div>
                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <select name="message_type" id="" class="form_input">
                                <option value="dawda">dwad</option>
                            </select>
                            <label class="form_label" for="">Message Type: </label>
                        </div>

                        <div class="solution_form_item_wp col-lg-12 col-sm-12">
                            <textarea class="form_input" name="message" id="" rows="2"
                                placeholder="To better assist you, please describe how we can help."></textarea>
                            <label class="form_label" for="">Message</label>
                        </div>

                        <div class="solution_form_item_wp col-lg-6 col-sm-12">
                            <select name="status" id="" class="form_input">
                                <option value="Pending">Pending</option>
                                <option value="Replied">Replied</option>
                            </select>
                            <label class="form_label" for="">status: </label>
                        </div>

                        <div class="d-flex">
                            <!-- checkbox input -->
                            <div class="" style="margin-right: 10px;">
                                <input type="checkbox">
                            </div>
                            <!-- content -->
                            <div class="checkBox_content">By checking this box, I consent to receive Insight marketing
                                emails. We respect your privacy and will not share your personal information with any
                                other company, person or identity.</div>
                        </div>


                        <!-- submit button -->
                        <div>
                            <button href="#" class="common_button2 ml-2 mt-4">Hear from a specialist</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
