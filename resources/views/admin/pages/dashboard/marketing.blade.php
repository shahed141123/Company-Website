@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="" class="breadcrumb-item"><span class="breadcrumb-item active">Marketing Dashboard</span></a>
                        </div>
                        <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
            </div>
        </section>
        <!-- /page header -->
        <!-- Sales Chain Page -->
        <div class="content pt-0">
            <div class="container-fluid ">
                <div class="row mb-5 mt-3">
                    <h1 class="mb-0 text-center w-25 mx-auto mb-2 text-info" style="color: #247297; ">Marketing Dashboard</h1>
                </div>
                {{-- Extra Area --}}
                <div class="row">
                    <div class="col-lg-4">
                        <h6 class="m-0 p-1 text-center"
                            style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">All Module</h6>
                        <div class="card rounded-0">
                            <div class="card-body rounded-0">
                                <div class="row">
                                    <div class="col-sm-12 bg-light px-1 py-1 ">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('cmar.index') }}" class="text-muted">
                                                Marketing CMAR
                                            </a>
                                            <a href="{{ route('cmar.create') }}">
                                                <span class="rounded-0 border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bg-light px-1 py-1  mt-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('marketing-dmar.index') }}" class="text-muted">
                                                Marketing DMAR
                                            </a>
                                            <a href="{{ route('marketing-dmar.create') }}">
                                                <span class="rounded-0 border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bg-light px-1 py-1  mt-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('bulkEmail.index') }}" class="text-muted">
                                                Marketing EMAR
                                            </a>
                                            <a href="">
                                                <span class="rounded-0 border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bg-light px-1 py-1  mt-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('sales-profit-loss.index') }}" class="text-muted">
                                                Sales Profit Loss
                                            </a>
                                            <a href="{{ route('sales-profit-loss.create') }}">
                                                <span class="rounded-0 border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bg-light px-1 py-1  mt-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('rfqOrderStatus.index') }}" class="text-muted">
                                                Order Status
                                            </a>
                                            <a href="{{ route('rfqOrderStatus.create') }}">
                                                <span class="rounded-0 border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RFQ Details Section -->
                    <div class="col-lg-4">
                        <div class="">
                            <h6 class="m-0 p-1 text-center" style="color: #fff; border-bottom: 1px solid #247297;background: #247297;">Client RFQ</h6>
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
                                                    <a href="http://127.0.0.1:8000/admin/expense" class="text-muted">
                                                        58%</span></a>
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
                                                        <p class="m-0 ps-2 text-info">
                                                            Current Month <span class="text-black">(Jan)</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1"> Pending</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-center text-info small-font-size m-0 p-1"> Done</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="text-end text-info small-font-size m-0 p-1"> Win/Lose</p>
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
                                                                <p
                                                                    class="text-center text-secondary small-font-size m-0 p-1">
                                                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->count() }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p
                                                                    class="text-center text-secondary small-font-size m-0 p-1">
                                                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p
                                                                    class="text-end text-secondary small-font-size m-0 pe-2 p-1">
                                                                    <i class="ph ph-arrow-up pe-1 text-succsess"></i>100%
                                                                </p>
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
                                                                <p
                                                                    class="text-center text-secondary small-font-size m-0 p-1">
                                                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p
                                                                    class="text-center text-secondary small-font-size m-0 p-1">
                                                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->count() }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p
                                                                    class="text-end text-secondary small-font-size m-0 pe-2 p-1">
                                                                    <i class="ph ph-arrow-down pe-1 text-danger"></i>125%
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sales Training --}}
                                        <div class="pb-1">
                                            <div class="box_details">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4">
                                                        <p class="m-0 ps-2">Close By</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-4">
                                                                <p
                                                                    class="text-center text-secondary small-font-size m-0 p-1">
                                                                    5</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p
                                                                    class="text-center text-secondary small-font-size m-0 p-1">
                                                                    4</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p
                                                                    class="text-end text-secondary small-font-size m-0 pe-2 p-1">
                                                                    <i class="ph ph-arrow-down pe-1 text-danger"></i>165%
                                                                </p>
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
                                        <div class="pb-1">
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
                    <!-- Sales Chain Page -->
                </div>
            </div>
        </div>
    @endsection
