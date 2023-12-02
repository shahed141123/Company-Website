@extends('frontend.master')
@section('content')

    <!--=========Content Wrapper=============-->
    <div class="content_wrapper">
        <!--Sidebar Wrapper-->
        <div id="mySidebar">
            <!--Sidebar-->
            <div class="row">
                <div class="col-lg-2"></div>
            </div>
            <div class="user_dashboard_sidebar_title">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-end">
                            <p onclick="userDashboardSidebarClicked()"
                                class="rounded-0 shadow-lg text-white btn btn-sm sidebar-triger"><i
                                    class="fa-solid fa-chevron-left fa-sm"></i></p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        {{-- Profile & Sibebar Triger --}}
                        <div class="d-flex justify-content-center">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <label for="fileToUpload">
                                    <div class="profile-pictures"
                                        style="background-image: url('https://randomuser.me/api/portraits/med/men/65.jpg')">
                                        <span class="glyphicon glyphicon-camera"></span>
                                        <span><i class="fa-solid fa-user-pen" style="font-size: 36px;"></i></span>
                                    </div>
                                </label>
                                <input type="File" name="fileToUpload" id="fileToUpload">
                            </form>
                        </div>
                        {{-- Profile & Sibebar Triger End --}}
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center align-content-center">
                        <div class="text-center">
                            <h5 class="main_color">Victoria Davidsons</h5>
                            <p class="text-muted">Head of UX</p>
                            <p>Welcome back <br> <span class="main_color">motiur.cmt@gmail.com</span></p>
                            <a href="#" class="common_button_logout mb-2">Logout - Not You?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user_dashboard_sidebar_nav">
                <a href="#" class="d-flex align-items-center">
                    <p class="p-0 pt-1 m-0"><i class="ph-user me-2"></i></p>
                    <p class="p-0 m-0">My profile</p>
                </a>
                {{-- With Badge Start --}}
                <a href="#" class="d-flex align-items-center justify-content-between">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <p class="p-0 pt-1 m-0"><i class="ph-calendar me-2"></i></p>
                        </div>
                        <div class="col-lg-6 col-sm-12 p-0">
                            <p class="p-0 m-0">Deal</p>
                        </div>
                    </div>
                    <div>
                        <p class="p-0 m-0 me-2 d-flex justify-content-end">
                            <span class="badge bg-white rounded-circle profile-count-badge"
                                style="width: 10px; height: 10px;">0</span>
                        </p>
                    </div>
                </a>
                {{-- With Badge End --}}
                <a href="#" class="d-flex align-items-center">
                    <p class="p-0 pt-1 m-0"><i class="ph-envelope me-2"></i></p>
                    <p class="p-0 m-0">RFQ</p>
                </a>
                <a href="#" class="d-flex align-items-center">
                    <p class="p-0 pt-1 m-0"><i class="ph-shopping-cart me-2"></i></p>
                    <p class="p-0 m-0">Orders</p>
                </a>
                <a href="#" class="d-flex align-items-center">
                    <p class="p-0 pt-1 m-0"><i class="ph ph-currency-circle-dollar me-2"></i></p>
                    <p class="p-0 m-0">Offer Price</p>
                </a>
                <a href="#" class="d-flex align-items-center">
                    <p class="p-0 pt-1 m-0"><i class="ph ph-tag-chevron me-2"></i></p>
                    <p class="p-0 m-0">Product Draft</p>
                </a>
                <hr>
                <a href="#" class="d-flex align-items-center">
                    <p class="p-0 pt-1 m-0"><i class="ph-sign-out  me-2"></i></p>
                    <p class="p-0 m-0">Log Out</p>
                </a>
                {{-- <p class="accordion-heading">Tools<span class="plusminus float-right mr-4">+</span></p>
                <div class="accordion-body" style="display: none;">
                    <a href="#">Saved Carts / Order Templates</a>
                </div>
                <p class="accordion-heading">Personalization<span class="plusminus float-right mr-4">+</span></p>
                <div class="accordion-body" style="display: none;">
                    <a href="#">Personal Product List</a>
                    <a href="#">User Subsciptions</a>
                    <a href="#">User Profile</a>
                </div> --}}
            </div>
        </div>
        <!--Content Wrapper-->
        <div class="d-flex">
            <div id="userSideButton_wrapper">
                <button class="sidebarButtonStyle sidebar-triger" onclick="userDashboardSidebarClicked()"><i
                        class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div id="Content_Wrapper">
                <!--Content-->
                <section class="client_dashboard_content_wp">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 client_dashboard_welcome_section">
                            <h2>Welcome to my NGen it</h2>
                            <p>Welcome to myInsight myInsight is a global platform for optimizing your technology supply
                                chain. Here you can discover, purchase and manage your hardware, software and cloud
                                solutions. Our dedicated account management team is also available to provide the highest
                                level of personalized service and customer satisfaction.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 client_dashboard_blog">
                            <h2>Order management</h2>
                            <ul>
                                <li>Get procurement support from your dedicated rep.</li>
                                <li>Determine <a href="">company standards</a> for products.</li>
                                <li>Set <a href="">customizable approval workflows.</a></li>
                                <li>Create and assign user <a href="">roles and permissions.</a></li>
                                <a href="#" class="common_button_dashboard mt-4">Learn more</a>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 client_dashboard_blog">
                            <h2>Shopping</h2>
                            <ul>
                                <li>Source technology solutions from thousands of partners.</li>
                                <li>Get exclusive pricing, reduced shipping rates and <a href="">customizable product
                                        catalogs.</a></li>
                                <li>Create <a href=""> order templates and quotes</a>to save for later.</li>
                                <li>Transition from<a href="">tactical to strategic procurement</a> and
                                    implementation.</li>
                                <a href="#" class="common_button_dashboard mt-4">Learn more</a>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        //---------Sidebar list Show Hide----------
        $(document).ready(function() {
            $(".accordion-heading").click(function() {
                if ($(".accordion-body").is(':visible')) {
                    $(".accordion-body").slideUp(600);
                    $(".plusminus").text('+')
                } else {
                    $(this).next(".accordion-body").slideDown(600);
                    $(this).children(".plusminus").text('-');
                }
            });
        });
    </script>
@endsection
