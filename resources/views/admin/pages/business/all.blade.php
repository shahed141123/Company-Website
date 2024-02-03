@extends('admin.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <style>
        .accordion {
            --accordion-border-width: 0px !important;
        }

        .section-border {
            border-bottom: 0.5px solid #acdaf063;
        }

        .card_title {
            text-align: left !important;
        }

        .target {
            display: none;
        }

        .Hide {
            display: none;
        }
    </style>
    <div class="content-wrapper">
        <div class="content p-0">
            <!-- Page header -->
            <section class="shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Page Destination/ BreadCrumb --}}
                    <div class="page-header-content d-lg-flex ">
                        <div class="d-flex px-2">
                            <div class="breadcrumb py-2">
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                <a href="" class="breadcrumb-item"><span
                                        class="breadcrumb-item active">Business</span></a>
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
                        <a href="{{ route('rfq-manage.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-truck-field me-1" style="font-size: 12px;"></i>
                                <span>RFQ Management</span>
                            </div>
                        </a>
                        <a href="{{ route('deal.create') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-truck-field me-1" style="font-size: 12px;"></i>
                                <span>Deal Create</span>
                            </div>
                        </a>
                        <a href="{{ route('sales-dashboard.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                                <span> Sales</span>
                            </div>
                        </a>
                        <a href="{{ route('marketing-dashboard.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                                <span>Marketing</span>
                            </div>
                        </a>
                        <a href="{{ route('show-case-video.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-user-tie me-1" style="font-size: 12px;"></i>
                                <span>Showcase</span>
                            </div>
                        </a>
                    </div>
            </section>
            <!-- /page header -->
            <div class="container-fluid my-2">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h3 class="text-center w-50 mx-auto" style="color: #247297;">
                            Business</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="">
                            <h6  class="m-0 p-1 text-center" style="color: #fff; border-bottom: 1px solid #247297;background: #247297;"> Sales</h6>
                            <div class="card rounded-0">
                                <div class="card-body rounded-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <a href="http://127.0.0.1:8000/admin/expense">
                                                    <h6 class="mb-0 text-black">Total Sales</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="http://127.0.0.1:8000/admin/expense" class="text-muted"> 5,000TK</span></a>
                                                    <i class="ph-trend-down me-2 text-danger"></i>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn rounded-circle p-3 text-white shadow-lg
                                                        bg-secondary dashboard_btn chart_btn"
                                                        style="width: 30px; height: 30px; font-size: 14px;">
                                                        <span class="mb-0">18%</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2 text-info">Current Month <span class="text-black">(Jan)</span></p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-info small-font-size m-0 p-1">QTY</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Target</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Achiev</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-end text-info small-font-size m-0 pe-2 p-1">Ration</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Solution --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Sales Solution</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">20</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">15^</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>18%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Web --}}
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Sales Web</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">20</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">15^</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-up pe-1 text-succsess"></i>23%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Training --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Sales Training</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">20</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">15^</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-up pe-1 text-succsess"></i>18%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Software development --}}
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Sales Development</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">20</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">15^</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>22%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="">
                            <h6  class="m-0 p-1 text-center" style="color: #fff; border-bottom: 1px solid #247297;background: #247297;"> Marketing</h6>
                            <div class="card rounded-0">
                                <div class="card-body rounded-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <a href="http://127.0.0.1:8000/admin/expense">
                                                    <h6 class="mb-0 text-black">Total Marketing</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="http://127.0.0.1:8000/admin/expense" class="text-muted"> 24%</span></a>
                                                    <i class="ph-trend-down me-2 text-danger"></i>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn rounded-circle p-3 text-white shadow-lg
                                                        bg-secondary dashboard_btn chart_btn"
                                                        style="width: 30px; height: 30px; font-size: 14px;">
                                                        <span class="mb-0">58%</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2 text-info">Current Month <span class="text-black">(Jan)</span></p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Target</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Achiev</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-info small-font-size m-0 pe-2 p-1">Ration</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Solution --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">DMAR</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-danger small-font-size m-0 p-1">(-4.9%)</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>100%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Web --}}
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">CMAR</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">(+16.2%)</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-up pe-1 text-succsess"></i>125%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Training --}}
                                        <div class="pb-4">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">EMAR</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">(+16.2%)</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-up pe-1 text-succsess"></i>165%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="">
                            <h6  class="m-0 p-1 text-center" style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Client RFQ</h6>
                            <div class="card rounded-0">
                                <div class="card-body rounded-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <a href="http://127.0.0.1:8000/admin/expense">
                                                    <h6 class="mb-0 text-black">Total RFQ</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="http://127.0.0.1:8000/admin/expense" class="text-muted"> 58%</span></a>
                                                    <i class="ph-trend-up me-2 text-success"></i>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn rounded-circle p-3 text-white shadow-lg
                                                        bg-secondary dashboard_btn chart_btn"
                                                        style="width: 30px; height: 30px; font-size: 14px;">
                                                        <span class="mb-0">88%</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2 text-info">Current Month <span class="text-black">(Jan)</span></p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Pending</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Done</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-info small-font-size m-0 p-1">Win/Lose</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Solution --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Total RFQ</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">3</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-up pe-1 text-succsess"></i>100%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Web --}}
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Total Deals</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">1</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>125%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Training --}}
                                        <div class="pb-4">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Close By</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">4</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>165%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="">
                            <h6  class="m-0 p-1 text-center" style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Product Showcase</h6>
                            <div class="card rounded-0">
                                <div class="card-body rounded-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <a href="http://127.0.0.1:8000/admin/expense">
                                                    <h6 class="mb-0 text-black">Total Show</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="http://127.0.0.1:8000/admin/expense" class="text-muted"> 20%</span></a>
                                                    <i class="ph-trend-up me-2 text-success"></i>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn rounded-circle p-3 text-white shadow-lg
                                                        bg-secondary dashboard_btn chart_btn"
                                                        style="width: 30px; height: 30px; font-size: 14px;">
                                                        <span class="mb-0" style="font-size: 10px">2200 PCS</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2 text-info">Details<span class="text-black">(Jan)</span></p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Approved</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1">Rejected</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-info small-font-size m-0 p-1">Ratio</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Solution --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Knowledge</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">3</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-up pe-1 text-succsess"></i>100%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Web --}}
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Present</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">1</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>125%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Training --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Brochure</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">4</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>165%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Training --}}
                                        <div class="">
                                            <div class="box_details bg-light">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Features</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-secondary small-font-size m-0 p-1">4</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>165%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="">
                            <h6  class="m-0 p-1 text-center" style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Traning & Certificate</h6>
                            <div class="card rounded-0">
                                <div class="card-body rounded-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <a href="http://127.0.0.1:8000/admin/expense">
                                                    <h6 class="mb-0 text-black">Total</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="http://127.0.0.1:8000/admin/expense" class="text-muted"> 30%</span></a>
                                                    <i class="ph-trend-up me-2 text-success"></i>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn rounded-circle p-3 text-white shadow-lg
                                                        bg-secondary dashboard_btn chart_btn"
                                                        style="width: 30px; height: 30px; font-size: 14px;">
                                                        <span class="mb-0" style="font-size: 10px"><i class="fa-solid fa-user-check text-white"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2 text-info">This Month <span class="text-black">(Jan)</span></p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="text-end text-info small-font-size m-0 pe-2 p-1">Ratio</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Solution --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6">
                                                        <p class="m-0 ps-2">Traning</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-up pe-1 text-succsess"></i>100%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Web --}}
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6">
                                                        <p class="m-0 ps-2">Certificate</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>125%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Training --}}
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6">
                                                        <p class="m-0 ps-2">Partnership</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>165%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="box_details bg-light">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6">
                                                        <p class="m-0 ps-2">Others</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="text-end text-secondary small-font-size m-0 pe-2 p-1"><i class="ph ph-arrow-down pe-1 text-danger"></i>165%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="">
                            <h6  class="m-0 p-1 text-center" style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Quick Link</h6>
                            <div class="card rounded-0">
                                <div class="card-body rounded-0">
                                    <div class="pt-1">
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Learn More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">Home <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" class="ps-1 text-info">About <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="data">
                        <!-- Basic columns -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-center">Monthly Sales Report</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="columns_basic"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /basic columns -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.data').hide()
        jQuery('.chart_btn').on('click', function() {
            jQuery('.data').toggle();
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.Show').click(function() {
                $('.target').show(200);
                $('.Show').hide(0);
                $('.Hide').show(0);
            });
            $('.Hide').click(function() {
                $('.target').hide(500);
                $('.Show').show(0);
                $('.Hide').hide(0);
            });
            $('.toggle').click(function() {
                $('.target').toggle('slow');
            });
        });
    </script>
@endpush
