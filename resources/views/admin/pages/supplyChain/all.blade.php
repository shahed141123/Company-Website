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
            <div class="container-fluid my-2">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h3 class="text-center w-50 mx-auto" style="color: #247297; border-bottom: 1px solid #247297;">
                            Supply Chain</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        {{-- Sourcing --}}
                        <div class="">
                            <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">
                                Pending Drafts</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                {{-- Start --}}
                                <div class="mb-2">
                                    <p class="p-0 m-0" style="border-bottom: 1px solid #247297;">Pending Drafts</p>
                                    <div class="bg-light p-1">
                                        {{-- Content Area --}}
                                        <div class="box_details pb-1  p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Today</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="p-0 m-0 text-warning text-end">10</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Content 2 --}}
                                        <div class="box_details border-top pt-1 p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Monthly</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="p-0 m-0 text-warning text-end">10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Start --}}
                                <div class="mb-2">
                                    <p class="p-0 m-0" style="border-bottom: 1px solid #247297;">Pending Drafts</p>
                                    <div class="bg-light p-1">
                                        {{-- Content Area --}}
                                        <div class="box_details pb-1  p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Today</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="p-0 m-0 text-warning text-end">10</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Content 2 --}}
                                        <div class="box_details border-top pt-1 p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Monthly</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="p-0 m-0 text-warning text-end">10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Start --}}
                                <div>
                                    <p class="p-0 m-0" style="border-bottom: 1px solid #247297;">Pending Drafts</p>
                                    <div class="bg-light p-1">
                                        {{-- Content Area --}}
                                        <div class="box_details pb-1  p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Today</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="p-0 m-0 text-warning text-end">10</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Content 2 --}}
                                        <div class="box_details border-top pt-1 p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Monthly</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="p-0 m-0 text-warning text-end">10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            {{-- Sourcing --}}
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Sourcing </h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Sourcing</h6>
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
                            {{-- Purchase --}}
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Purchase</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Purchase</h6>
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
                            {{-- Delivery --}}
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Delivery</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Delivery</h6>
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
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Order</h6>
                                <div class="card card-body border-0 shadow-none mb-0 "
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">

                                    <div class="d-flex align-items-center mb-3">
                                        {{-- Title --}}
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Order</h6>
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
                        <div class="row mt-2">
                            {{-- Quick Link Heading --}}
                            <div style="width: 3%">
                                <h5 style="transform: rotate(-90deg);
                                width: 8rem;
                                position: relative;
                                top: 30px;left: -50px;color: #247297;"
                                    class="p-0 m-0">Quick Link</h5>
                            </div>
                            {{-- Quick Link Content Start --}}
                            <div class="col-lg-4">
                                <div class="card card-body shadow-none mb-0 p-3"
                                    style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-left: 1px solid #247297;">
                                    <div class="p-1 bg-light">
                                        <div class="box_details d-flex justify-content-between">
                                            <a href="{{route('brand.index')}}" style="color: #247297; font-size: 14px; ">
                                                Brand <a href="{{route('brand.index')}}" style="color: #247297; font-size: 14px;">( <i class="fa fa-plus"></i> )</a>
                                            </a>
                                            <a href="{{route('category.index')}}" style="color: #247297; font-size: 14px; ">
                                                Category <a href="{{route('category.index')}}" style="color: #247297; font-size: 14px;">( <i class="fa fa-plus"></i> )</a>
                                            </a>
                                        </div>
                                        <div class="box_details d-flex justify-content-between">
                                            <a href="{{route('product-sourcing.index')}}" style="color: #247297; font-size: 14px; ">
                                                Sourcing <a href="{{route('product-sourcing.create')}}" style="color: #247297; font-size: 14px;">( <i class="fa fa-plus"></i> )</a>
                                            </a>
                                            <a href="" style="color: #247297; font-size: 14px;">
                                                {{-- Learnmore Page --}}
                                            </a>
                                        </div>
                                        {{-- <div class="box_details d-flex justify-content-between">
                                            <a href="" style="color: #247297; font-size: 14px; ">
                                                Homepage
                                            </a>
                                            <a href="" style="color: #247297; font-size: 14px;">
                                                Learnmore Page
                                            </a>
                                        </div>
                                        <div class="box_details d-flex justify-content-between">
                                            <a href="" style="color: #247297; font-size: 14px; ">
                                                Homepage
                                            </a>
                                            <a href="" style="color: #247297; font-size: 14px;">
                                                Learnmore Page
                                            </a>
                                        </div> --}}
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
