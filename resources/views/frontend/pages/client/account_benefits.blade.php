@extends('frontend.master')

@section('content')


    <!--========Header Title==========-->
    <section class="account_benefits_header"
        style="background-image:url('{{ asset('assets/frontend/image/buy-category-hero.jpg') }}');
    ">
        <div class="container">
            <h1>Tools to optimize your technology investments</h1>
            <h3>It's easy to purchase, deploy and manage the technology your business needs with myInsight self-service
                e-procurement tools.</h3>
        </div>

    </section>
    <!----------Header Title End--------->

    <!--======Challenges do you face=====-->
    <section class="container">
        <div class="challenges_face_title">
            <h3>What supply chain challenges do you face?</h3>
            <p>Our Insight Intelligent Technology™ tools within myInsight can help.</p>
        </div>
        <div class="row">
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4"
                        src="{{ asset('assets/frontend/image/account_benifit/icon-hardware-software.png') }}" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">I need hardware and software to equip my business.</a>
                </div>
            </div>
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4" src="{{ 'assets/frontend/image/account_benifit/personalization-icon.png' }}"
                        alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">I need to standardize purchasing and manage user roles.</a>
                </div>
            </div>
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4"
                        src="{{ 'assets/frontend/image/account_benifit/purchasing-options-icon.png' }}" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">My procurement process is complicated and lengthy.</a>
                </div>
            </div>
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4" src="{{ 'assets/frontend/image/account_benifit/dashboards-icon.png' }}"
                        alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">I want real-time visibility into my invoices and orders.</a>
                </div>
            </div>
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4"
                        src="{{ 'assets/frontend/image/account_benifit/order-tracking-and-reporting-icon.png' }}"
                        alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">I need to analyze my IT spending and order reporting.</a>
                </div>
            </div>
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4" src="{{ 'assets/frontend/image/account_benifit/sam-tools-icon.png' }}"
                        alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">I need hardware and software to equip my business.</a>
                </div>
            </div>
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4"
                        src="{{ 'assets/frontend/image/account_benifit/renewals-management-icon.png' }}" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">I need hardware and software to equip my business.</a>
                </div>
            </div>
            <!--Supply item-->
            <div class="col-lg-3 col-sm-6 challenges_face_icon">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid mb-4"
                        src="{{ 'assets/frontend/image/account_benifit/cloud-management-icon-faq.png' }}" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">I need hardware and software to equip my business.</a>
                </div>
            </div>
        </div>
    </section>
    <!-----------------End-------------->


    <!--==========Procurement platform (1)=========-->
    <section class="account_benefits_section_wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Procurement platform</h3>
                    <p>Strategic purchasing starts with aligning business goals and technology needs. Our data-driven tools,
                        deep partnerships with leading technology providers and technical experts ensure you get the right
                        solutions.</p>
                    <p>With a myInsight procurement platform account, you’ll be able to:</p>

                    <ul>
                        <li>Shop thousands of hardware solutions.</li>
                        <li>Access software from leading developers.</li>
                        <li>Manage purchases, renewals, costs and more.</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid" src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (4).jpg' }}"
                        alt="">
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->


    <!--==========Account customization (2)=========-->
    <section class="account_benefits_section_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Account customization</h3>
                    <p>Our <a href="#">customization capabilities</a> give you complete control over user access and
                        roles in your company portal. Tailoring a catalog for your business ensures you’re investing in the
                        right technology.</p>
                    <p>Whether you’re setting preferences for an individual user account, group or the entire company,
                        you'll have:</p>

                    <ul>
                        <li>Role-based permissions for every feature</li>
                        <li>Company standards of preferred products</li>
                        <li>Customized order templates</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid"
                        src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (5).jpg' }}" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->
    <!--==========Procurement platform (3)=========-->
    <section class="account_benefits_section_wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid"
                        src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (1).jpg' }}" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Approval workflows</h3>
                    <p>Reducing bottlenecks around purchase and approval management will save time and money. Automate your
                        processes with defined approvals based on dollar amounts. And create order fields for custom data,
                        such as cost centers, department codes and order notes.</p>
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->


    <!--==========Dashboards (4)=========-->
    <section class="account_benefits_section_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Dashboards</h3>
                    <p>Streamline your purchasing tasks with real-time data displayed on a <a href="#"> single
                            dashboard </a>specific to your procurement role. You can tailor the view for fast insights into
                        the most recent purchases, invoices, order statuses, pending approvals and more with intuitive
                        drag-and-drop functionality.</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid"
                        src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (2).jpg' }}" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->
    <!--==========Order tracking & reporting (5)=========-->
    <section class="account_benefits_section_wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid"
                        src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (1).jpg' }}" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Order tracking & reporting</h3>
                    <p>Our procurement analytics tool helps you make strategic hardware, software and cloud buying decisions
                        with 360-degree views of your purchases. Examine canned, custom, and ad hoc reports on orders,
                        products, inventory and more.</p>
                    <p>From shipped item to invoice, it's easy to track the status of your orders and stay up to date.</p>

                    <ul>
                        <li>Shop thousands of hardware solutions.</li>
                        <li>Access software from leading developers.</li>
                        <li>Manage purchases, renewals, costs and more.</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--==========Software asset management (6)=========-->
    <section class="account_benefits_section_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Account customization</h3>
                    <p>Our Software Asset Management (SAM) solution lets you provision and monitor licenses, so you only pay
                        for what you need. By providing a seamless experience for tracking, analyzing and managing your
                        software rights, you can ensure compliance and save on licensing costs.</p>
                    <p>The Enterprise License Dashboard will help you analyze your licensing entitlements and compliance
                        posture. And the Enterprise License Manager streamlines the process of reassigning licenses.</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid"
                        src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (6).jpg' }}" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--=========Renewals & warranty management (7)=========-->
    <section class="account_benefits_section_wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid"
                        src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (3).jpg' }}" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Renewals & warranty management</h3>
                    <p>Easily track upcoming renewals and maintenance contracts from any vendor with our Renewals & Warranty
                        Manager tool. A comprehensive view will help you reduce costs while accelerating your renewals
                        process.</p>
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--==========Cloud Management Platform (8)=========-->
    <section class="account_benefits_section_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Cloud Management Platform</h3>
                    <p>Enabling collaboration, security and automation through cloud solutions is simple with our Cloud
                        Management Platform. In a single tool, you can easily shop for cloud products and add-ons, assign
                        licenses and analyze consumption.</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid"
                        src="{{ 'assets/frontend/image/account_benifit/account_benifits_flow (5).jpg' }}" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button href="" class="common_button2">Watch the demo</button>
                <button href="" class="common_button">Learn more</button>
                <a href=""><span style="display: block; text-align: center;"><i
                            class="fa-solid fa-angle-up"></i></span><span>top</span></a>
            </div>
        </div>
    </section>
    <!-------------End--------->
    <!--==========Cloud Management Platform (9)=========-->
    <section class="account_benefits_section_wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3 style="border: none;">Streamlining the procurement process</h3>
                    <p>Seamlessly accessing and managing best-fit technology resources is crucial to supporting and growing
                        your business. Learn how advanced tools help optimize your supply chain to fulfill that mission.</p>
                    <button href="" class="common_button my-4">Read the guide</button>
                </div>
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3 style="border: none;">Related content</h3>
                    <p>Enabling collaboration, security and automation through cloud solutions is simple with our Cloud
                        Management Platform. In a single tool, you can easily shop for cloud products and add-ons, assign
                        licenses and analyze consumption.</p>
                    <ul>
                        <li><a href="#">Top 5 Benefits of IT E-procurement </a>infographic</li>
                        <li><a href="#">Better Supply Chain Management Starts With E-procurement </a>blog</li>
                        <li><a href="#">Insight.com Account Features </a>ebook</li>
                        <li><a href="#">E-procurement on the Fast Track </a>podcast</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-start py-4">

            </div>
        </div>
    </section>
    <!-------------End--------->


@endsection
