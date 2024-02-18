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
                            <span class="breadcrumb-item active">Supply Chain</span>
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
                    <a href="{{ route('product-sourcing.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>Sourcing</span>
                        </div>
                    </a>
                    <a href="{{ route('sas.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>SAS</span>
                        </div>
                    </a>
                    <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                            <span>Purchase</span>
                        </div>
                    </a>
                    <a href="{{ route('delivery.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                            <span>delivery</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- /page header -->
        <!-- Supply Chain Page -->
        <section>
            <div class="container-fluid">
                <h3 class="text-center pt-3 pb-2">Supply Chain</h3>
                <div class="row">
                    <div class="col-lg-3">
                        {{-- Sourcing --}}
                        <div class="">
                            <h6 class="m-0 p-0 card-main-title text-center">
                                Drafts</h6>
                            <div class="card rounded-0">
                                <div class="card-body" style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    {{-- Start --}}
                                    <div class="mb-2">
                                        <p class="fw-bold p-0 m-0" style="border-bottom: 1px solid #247297;">Pending Drafts</p>
                                        <div class="bg-light p-1">
                                            {{-- Content Area --}}
                                            <div class="box_details pb-1  p-1">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <span>Today</span>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="text-center p-0 m-0"><i
                                                                class="ph-trend-down me-2 text-danger"></i></p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="p-0 m-0 text-warning text-end">10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Content 2 --}}
                                            <div class="box_details border-top pt-1 p-1">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <span>Monthly</span>
                                                    </div>
                                                    <div class="col-lg-4">
                                                         <p class="text-center p-0 m-0"><i
                                                                class="ph-trend-up me-2 text-success"></i></p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="p-0 m-0 text-warning text-end">15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Start --}}
                                    <div class="mb-2">
                                        <p class="fw-bold p-0 m-0" style="border-bottom: 1px solid #247297;">Approved Drafts</p>
                                        <div class="bg-light p-1">
                                            {{-- Content Area --}}
                                            <div class="box_details pb-1  p-1">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <span>Today</span>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="text-center p-0 m-0"><i
                                                               class="ph-trend-up me-2 text-success"></i></p>
                                                   </div>
                                                    <div class="col-lg-4">
                                                        <p class="p-0 m-0 text-warning text-end">20</p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Content 2 --}}
                                            <div class="box_details border-top pt-1 p-1">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <span>Monthly</span>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="text-center p-0 m-0"><i
                                                               class="ph-trend-up me-2 text-success"></i></p>
                                                   </div>
                                                    <div class="col-lg-4">
                                                        <p class="p-0 m-0 text-warning text-end">25</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Start --}}
                                    <div>
                                        <p class="fw-bold p-0 m-0" style="border-bottom: 1px solid #247297;">Rejected Drafts</p>
                                        <div class="bg-light p-1">
                                            {{-- Content Area --}}
                                            <div class="box_details pb-1  p-1">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <span>Today</span>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="text-center p-0 m-0"><i
                                                               class="ph ph-x-circle me-2 text-danger"></i></p>
                                                   </div>
                                                    <div class="col-lg-4">
                                                        <p class="p-0 m-0 text-warning text-end">30</p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Content 2 --}}
                                            <div class="box_details border-top pt-1 p-1">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <span>Monthly</span>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="text-center p-0 m-0"><i
                                                               class="ph ph-x-circle me-2 text-danger"></i></p>
                                                   </div>
                                                    <div class="col-lg-4">
                                                        <p class="p-0 m-0 text-warning text-end">05</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row align-items-center">
                            {{-- Sourcing --}}
                            <div class="col-lg-3">
                                <h6 class="m-0 p-0 card-main-title text-center">Sourcing </h6>
                                <div class="card rounded-0">
                                    <div class="card-body"
                                        style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                        <div class="d-flex align-items-center mb-3">
                                            {{-- Title --}}
                                            <div class="flex-fill title_text_link">
                                                <a href="{{ route('product-sourcing.index') }}">
                                                    <h6 class="mb-0 text-primary">Total Sourcing</h6>
                                                </a>
                                            </div>
                                            <div class="flex-fill title_text_link">
                                                <p class="text-center p-0 m-0"><i
                                                    class="ph ph-arrow-elbow-right me-2 text-danger"></i></p>
                                            </div>
                                            {{-- Value --}}
                                            <div>
                                                <a href="{{ route('product-sourcing.index') }}">
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
                                            <div class="row align-items-center">
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
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <span>Monthly</span>
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
                            {{-- Purchase --}}
                            <div class="col-lg-3">
                                <h6 class="m-0 p-0 card-main-title text-center">Purchase</h6>
                                <div class="card rounded-0">
                                    <div class="card-body"
                                        style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                        <div class="d-flex align-items-center mb-3">
                                            {{-- Title --}}
                                            <div class="flex-fill title_text_link">
                                                <a href="{{ route('purchase.index') }}">
                                                    <h6 class="mb-0 text-primary">Total Purchase</h6>
                                                </a>
                                            </div>
                                            <div class="flex-fill title_text_link">
                                                <p class="text-center p-0 m-0"><i
                                                    class="ph ph-arrow-elbow-right me-2 text-info"></i></p>
                                            </div>
                                            {{-- Value --}}
                                            <div>
                                                <a href="{{ route('purchase.index') }}">
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
                                            <div class="row align-items-center">
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
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <span>Monthly</span>
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
                            {{-- Delivery --}}
                            <div class="col-lg-3">
                                <h6 class="m-0 p-0 card-main-title text-center">Delivery</h6>
                                <div class="card rounded-0">
                                    <div class="card-body"
                                        style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                        <div class="d-flex align-items-center mb-3">
                                            {{-- Title --}}
                                            <div class="flex-fill title_text_link">
                                                <a href="{{ route('delivery.index') }}">
                                                    <h6 class="mb-0 text-primary">Total Delivery</h6>
                                                </a>
                                            </div>
                                            <div class="flex-fill title_text_link">
                                                <p class="text-center p-0 m-0"><i
                                                    class="ph ph-arrow-elbow-right me-2 text-success"></i></p>
                                            </div>
                                            {{-- Value --}}
                                            <div>
                                                <a href="{{ route('delivery.index') }}">
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
                                            <div class="row align-items-center">
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
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <span>Monthly</span>
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
                            <div class="col-lg-3">
                                <h6 class="m-0 p-0 card-main-title text-center">Order</h6>
                                <div class="card rounded-0">
                                    <div class="card-body "
                                        style="border-top-left-radius: 0px;border-top-right-radius: 0px;">

                                        <div class="d-flex align-items-center mb-3">
                                            {{-- Title --}}
                                            <div class="flex-fill title_text_link">
                                                <a href="{{ route('order.tracking') }}">
                                                    <h6 class="mb-0 text-primary">Total Order</h6>
                                                </a>
                                            </div>
                                            <div class="flex-fill title_text_link">
                                                <p class="text-center p-0 m-0"><i
                                                    class="ph ph-arrow-elbow-right-down me-2 text-danger"></i></p>
                                            </div>
                                            {{-- Value --}}
                                            <div>
                                                <a href="{{ route('order.tracking') }}">
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
                                            <div class="row align-items-center">
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
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <span>Monthly</span>
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
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="py-4 d-flex justify-content-center align-items-center"
                                    style="
                                    border: 2px;
                                    border-style: dashed;
                                    border-color: #247297;">
                                    <div>
                                        <a href="{{ route('brand.index') }}" class="btn navigation_btn" style="width: 120px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-plus me-1" style="font-size: 10px;"></i>
                                                <span>Brand</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('category.index') }}" class="btn navigation_btn" style="width: 120px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-plus me-1" style="font-size: 10px;"></i>
                                                <span>Category</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('learnMore.index') }}" class="btn navigation_btn" style="width: 120px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-plus me-1" style="font-size: 10px;"></i>
                                                <span>Learnmore</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('category.index') }}" class="btn navigation_btn" style="width: 120px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-plus me-1" style="font-size: 10px;"></i>
                                                <span>Category</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('brand.index') }}" class="btn navigation_btn" style="width: 120px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-plus me-1" style="font-size: 10px;"></i>
                                                <span>Brand</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- Quick Link Content End --}}
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
