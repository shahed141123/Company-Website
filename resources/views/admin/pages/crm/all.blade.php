@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <span class="breadcrumb-item active">CRM Management</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}

                <!-- Basic tabs -->
                <div>
                    <a href="{{ route('contact.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-address-book me-1" style="font-size: 10px;"></i>
                            <span>Contact </span>
                        </div>
                    </a>
                    <a href="{{ route('support.all') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-handshake-angle me-1" style="font-size: 10px;"></i>
                            <span>Support</span>
                        </div>
                    </a>
                    <a href="{{ route('feedback.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-comments me-1" style="font-size: 10px;"></i>
                            <span>Feedback</span>
                        </div>
                    </a>
                    <a href="" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-comment-alt me-1" style="font-size: 10px;"></i>
                            <span>Livechat</span>
                        </div>
                    </a>
                </div>
        </section>
        <!-- /page header -->
        <!-- Supply Chain Page -->
        <section>
            <div class="container my-2">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h3 class="text-center w-50 mx-auto" style="color: #247297; border-bottom: 1px solid #247297;">CRM
                            Management</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Contact </h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Contact Massage</h6>
                                            </a>
                                        </div>
                                        {{-- Value --}}
                                        <div>
                                            <a href="{{ route('expense.index') }}">
                                                <button type="button"
                                                    class="btn rounded-circle p-3 text-white shadow-lg bg-secondary dashboard_btn"
                                                    style="width: 30px; height: 30px">
                                                    <span class="mb-0">330</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- Content Area --}}
                                    <div class="box_details pb-1 bg-light p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>Today</span>
                                                <p class="p-0 m-0">20</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Content 2 --}}
                                    <div class="box_details border-top pt-1 p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>This Month</span>
                                                <p class="p-0 m-0">30</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Support</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Support Massage</h6>
                                            </a>
                                        </div>
                                        {{-- Value --}}
                                        <div>
                                            <a href="{{ route('expense.index') }}">
                                                <button type="button"
                                                    class="btn rounded-circle p-3 text-white shadow-lg bg-secondary dashboard_btn"
                                                    style="width: 30px; height: 30px">
                                                    <span class="mb-0">330</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- Content Area --}}
                                    <div class="box_details pb-1 bg-light p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>Today</span>
                                                <p class="p-0 m-0">20</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Content 2 --}}
                                    <div class="box_details border-top pt-1 p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>This Month</span>
                                                <p class="p-0 m-0">30</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Feedback</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Feedback Massage</h6>
                                            </a>
                                        </div>
                                        {{-- Value --}}
                                        <div>
                                            <a href="{{ route('expense.index') }}">
                                                <button type="button"
                                                    class="btn rounded-circle p-3 text-white shadow-lg bg-secondary dashboard_btn"
                                                    style="width: 30px; height: 30px">
                                                    <span class="mb-0">330</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- Content Area --}}
                                    <div class="box_details pb-1 bg-light p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>Today</span>
                                                <p class="p-0 m-0">20</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Content 2 --}}
                                    <div class="box_details border-top pt-1 p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>This Month</span>
                                                <p class="p-0 m-0">30</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Live Chat</h6>
                                <div class="card card-body border-0 shadow-none mb-0 "
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">

                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Live Chat Info</h6>
                                            </a>
                                        </div>
                                        {{-- Value --}}
                                        <div>
                                            <a href="{{ route('expense.index') }}">
                                                <button type="button"
                                                    class="btn rounded-circle p-3 text-white shadow-lg bg-secondary dashboard_btn"
                                                    style="width: 30px; height: 30px">
                                                    <span class="mb-0">330</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- Content Area --}}
                                    <div class="box_details pb-1 bg-light p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>Today</span>
                                                <p class="p-0 m-0">20</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Content 2 --}}
                                    <div class="box_details border-top pt-1 p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>This Month</span>
                                                <p class="p-0 m-0">30</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row text-end">
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">10</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <span class="text-secondary">Info</span>
                                                        <p class="p-0 m-0 text-warning">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Quick Link</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 2
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 2
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 3
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 3
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 4
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 4
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 5
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
