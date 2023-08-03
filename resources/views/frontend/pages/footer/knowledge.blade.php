@extends('frontend.master')

@section('content')
    @include('frontend.header')
    <!--========Header Title==========-->
    <section class="header_title_content_resources"
        style="background-image:url('{{ asset('assets/frontend/image/desktop-shop-hero.jpg') }}')">
        <h1>Find the answers you need.</h1>
        <div class="content_resources_search col-lg-12 d-flex justify-content-center">
            <form action="">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
    <!----------Header Title End--------->
    <br><br>
    <!--========Content Wrapper==========-->
    <section class="container">
        <p><strong>120 </strong><i>results matched your search</i></p><br>
        <!--item-->
        <div class="row faq-answers">
            <div class="col-lg-6 col-sm-12">
                <a href="#">myInsight Procurement Account Customization</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">IT Procurement Dashboard | Supply Chain Dashboard</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">What Browsers Does Insight.com Support?</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">June 2022 Release Notes: Improved Invoice Pages and Simplified Reporting</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">April 2022 Release Notes: Enhanced Design and Data Access
                </a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">myInsight Procurement Account Customization</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">IT Procurement Dashboard | Supply Chain Dashboard</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">What Browsers Does Insight.com Support?</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">June 2022 Release Notes: Improved Invoice Pages and Simplified Reporting</a>
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#">April 2022 Release Notes: Enhanced Design and Data Access
                </a>
                <hr>
            </div>

        </div>
        <!------------------Pagination------------------->
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item mr-4">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item ml-4">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <hr>
    <!----------Explore our knowledge----------------->
    <section class="container">
        <div class="row explore_knowledge_wrapper">
            <div class="col-12">
                <h2 class="title_h2">Explore our knowledge base.</h2>
            </div>
            <!--------myInsight FAQ item------->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/faqs.png') }}" alt="">
                    </div>
                    <h4>myInsight FAQ</h4>
                    <ul>
                        <li><a href="">Learn about account creation, ordering, shipping, leasing, payment plans and
                                more.</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>

                </div>
            </div>
            <!--------myInsight updates item------->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/blog.png') }}" alt="">
                    </div>
                    <h4>myInsight updates</h4>
                    <ul>
                        <li><a href="">Read about the latest insight.com updates, enhancements and release notes.</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End-->
    <!-----------Popular published answers---------------->
    <section class="popular_published_answers_wrapper">
        <div class="container">
            <div>
                <h2 class="title_h2">Popular published answers</h2>
            </div>
            <!--item-->
            <div class="row faq-answers">
                <div class="col-lg-6 col-sm-12">
                    <a href="#">What Browsers Does Insight.com Support?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">Insight Cloud Management Platform Customer FAQs</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">How to enable and use the approval dashboards</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">Can I edit a quote?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">What does "pending approval" mean?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">How do I unsubscribe from Insight’s email newsletter?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">What are the standard delivery times for FedEx and UPS? Expanded help topic</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">Will shipping delays impact my order?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">How do I check the status of my order?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">Order status messages</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">Does Insight offer any payment plans or other payment options?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">What should I do if I forgot my username or password?</a>
                    <hr>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a href="#">How do I return an item?</a>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-----------Browse by topic---------------->
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title_h2">Browse by topic</h2>
            </div>
            <!--------MUsing item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/using-your-account.png') }}" alt="">
                    </div>
                    <h4>Using your account</h4>
                    <ul>
                        <li><a href="">Account creation</a></li>
                        <li><a href="">Change preferences</a></li>
                        <li><a href="">Reset your password</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>

                </div>
            </div>
            <!--------Managing item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/managing-orders.png') }}" alt="">
                    </div>
                    <h4>Managing orders </h4>
                    <ul>
                        <li><a href="">Order status</a></li>
                        <li><a href="">Stock status</a></li>
                        <li><a href="">Cancelling an order</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>

                </div>
            </div>
            <!--------Shopping item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/shipping-information.png') }}" alt="">
                    </div>
                    <h4>Shopping for products</h4>
                    <ul>
                        <li><a href="">Placing an order</a></li>
                        <li><a href="">Quotations</a></li>
                        <li><a href="">Order tracking</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>

                </div>
            </div>
            <!--------Pricing item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/pricing-payments.png') }}" alt="">
                    </div>
                    <h4>Pricing & payments</h4>
                    <ul>
                        <li><a href="">Payment options</a></li>
                        <li><a href="">Leasing options</a></li>
                        <li><a href="">Find paid invoices</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>

                </div>
            </div>
            <!--------Electronic item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/electronic-invoicing.png') }}" alt="">
                    </div>
                    <h4>Product Processing</h4>
                    <ul>
                        <li><a href="">Payment history</a></li>
                        <li><a href="">Online quotations and</a></li>
                        <li><a href="">purchasing</a></li>
                        <li><a href="">Electronic invoicing</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="#">Learn more</a>
                    </div>

                </div>
            </div>
            <!--------Eommerce item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/e-commerce-guides.png') }}" alt="">
                    </div>
                    <h4>E-commerce guides</h4>
                    <ul>
                        <li><a href="">Orders</a></li>
                        <li><a href="">Stock</a></li>
                        <li><a href="">Delivery</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>
                </div>
            </div>
            <!--------Shipping item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/shipping-information.png') }}" alt="">
                    </div>
                    <h4>Shipping information</h4>
                    <ul>
                        <li><a href="">Delivery options</a></li>
                        <li><a href="">Shipping to differlint address</a></li>
                        <li><a href="">Estimated delivery date</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>
                </div>
            </div>
            <!--------Privacy item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/privacy-policies.png') }}" alt="">
                    </div>
                    <h4>Privacy & policies</h4>
                    <ul>
                        <li><a href="">Return a damaged item</a></li>
                        <li><a href="">Return an item for a refund</a></li>
                        <li><a href="">Return policy</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>
                </div>
            </div>
            <!--------Cloud management item------->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-thumb">
                    <div class="card-img d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/image/icon/privacy-policies.png') }}" alt="">
                    </div>
                    <h4>Cloud management platform</h4>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Invoices</a></li>
                        <li><a href="">Entitlements</a></li>
                    </ul>
                    <div class="d-flex justify-content-center order_tracking_btn mb-4">
                        <a href="">Learn more</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!---------Terms and Conditions--------->
    <section class="terms_conditions_wrapper">
        <div class="container">
            <div>
                <h2 class="title_h2 mb-2">Terms and Conditions and Policies</h2>
                <p class="text-center mb-4">View our policies on everything from terms of sale to product returns.</p>
            </div>
            <!--List-->
            <ul class="row terms_list">
                <li class="col-6"><a href="#">Privacy Policy</a></li>
                <li class="col-6"><a href="#">Insight Connected Platform™ Terms of Service</a></li>
                <li class="col-6"><a href="#">Product returns — Terms and Conditions</a></li>
                <li class="col-6"><a href="#">Insight Daily Q Terms of Service</a></li>
                <li class="col-6"><a href="#">Return Policy</a></li>
                <li class="col-6"><a href="#">Terms of Sale — Cloud Services (Insight Public Sector)</a></li>
                <li class="col-6"><a href="#">Site Terms of Use</a></li>
                <li class="col-6"><a href="#">Terms of Sale — Products & Services</a></li>
                <li class="col-6"><a href="#">Stock status explanations</a></li>
                <li class="col-6"><a href="#">Terms of Sale — Products (Insight Public Sector)</a></li>
                <li class="col-6"><a href="#">Vendor Code of Conduct</a></li>
                <li class="col-6"><a href="#">Terms of Sale — Services (Insight Public Sector)</a></li>
                <li class="col-6"><a href="#">Terms of Purchase</a></li>
                <li class="col-6"><a href="#">Supplemental Terms and Conditions Relating to Azure Billing</a></li>
                <li class="col-6"><a href="#">Terms of Sale — Cloud Services</a></li>
            </ul>
        </div>
    </section>
    <!----------Content End--------->
    @include('frontend.footer')
@endsection
