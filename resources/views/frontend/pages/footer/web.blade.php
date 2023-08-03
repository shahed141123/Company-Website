@extends('frontend.master')

@section('content')

@include('frontend.header')
 
 <!--============Content Wrapper=============-->
  <section class="container">
    <div class="row mt-2">
        <!----------conternt Privacy Policy--------->
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="content_web_accessibility">
                <h1>Web accessibility</h1>
                
                <h3>We believe in an open and accessible internet.</h3>

                <p>Ngen it is committed to web accessibility so all visitors can experience and enjoy our site. We’ve taken steps to provide a positive user experience that operates with assistive technology. Yet, we recognize this is an ongoing process, and Ngen it is dedicated to implementing continuous improvements.</p>

                <p>Ngen it.com is regularly monitored and tested by our team, and issues are resolved as they are identified. If you experience challenges while navigating Ngen it.com, or if you have any comments, please fill out the form and our team will contact you.</p>

                <h3>Our web accessibility guidelines</h3>

                <p>Ngen it uses the <a href="#">Web Content Accessibility Guidelines (WCAG) 2.0</a>  as a guiding framework to ensure our content is accessible for all people. These guidelines are recommended by the World Wide Web Consortium and consist of three levels of accessibility measurement: A, AA and AAA. We’ve elected to conform to the AA level of these guidelines to provide inclusive and user-friendly experiences.</p>
                
            </div>
        </div>
        <!----------Sidebar Privacy Policy --------->
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="sidebar_web_accessibility">
                <h3>Connect with our team.</h3>

                <p>Have you identified an issue navigating our website or would like assistance? Our dedicated specialists are available to help visitors explore our content and use our features. We also want to hear your feedback about how we’re doing, so please don’t hesitate to reach out with comments or suggestions. A specialist will be in touch once you fill the form on this page. You can also get immediate assistance by <a href="#">phone</a>  or <a href="#">chat</a>.</p>
                
                <!-- form Sidebar -->
                <div class="row specialist_contect_form">
                    <!-- wrapper -->
                    <!-- item -->
                    <div class="form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="text" placeholder="First Name">
                        <label class="form_label" for="">First Name: *</label>
                    </div>

                    <!-- item -->
                    <div class="form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="text" placeholder="Last Name">
                        <label class="form_label" for="">Last Name: *</label>
                    </div>

                    <!-- item -->
                    <div class="form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="email" placeholder="Business Email">
                        <label class="form_label" for="">Business Email: *</label>
                    </div>
                    
                    <!-- item -->
                    <div class="form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="number" placeholder="Phone">
                        <label class="form_label" for="">Phone: *</label>
                    </div>

                    <!-- item -->
                    <div class="form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="text" placeholder="Company">
                        <label class="form_label" for="">Company *</label>
                    </div>
                    
                    <!-- item -->
                    <div class="form_item_wp col-lg-6 col-sm-12">
                        <select name="" id="" class="form_input">
                            <option value="">Country</option>
                            <option value="">Bangladesh</option>
                            <option value="">India</option>
                            <option value="">Pakistan</option>
                            <option value="">Afganistan</option>
                        </select>
                        <label class="form_label" for="">Country: *</label>
                    </div>

                    <!-- submit button -->
                    <button href="#" class="common_button2 ml-2 mt-4">Hear from a specialist</button>

                </div>
               
            </div>
        </div>
    </div>

</section>

@include('frontend.footer')
@endsection