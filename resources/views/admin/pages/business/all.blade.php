
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
                        <h3 class="text-center w-50 mx-auto" style="color: #247297; border-bottom: 1px solid #247297;">
                            Business</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="">
                            <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">
                                Sales</h6>
                            <div class="card card-body border-0 shadow-none mb-0"
                                style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="row text-start mb-3 d-flex align-items-center">
                                    <div class="flex-fill title_text_link col-sm-6">
                                        <a href="http://127.0.0.1:8000/admin/expense">
                                            <h6 class="mb-0 text-primary">Total Sales Value</h6>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="http://127.0.0.1:8000/admin/expense">
                                            <span class="text-danger"><i class="ph-trend-down me-2"></i> 8.02%</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button"
                                            class="btn rounded-circle p-2 text-white shadow-lg
                                            bg-secondary dashboard_btn chart_btn" style="width: 30px; height: 30px; font-size: 14px;">
                                            <span class="mb-0">18%</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <span class="text-center text-secondary">Total Monthly</span>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row text-end">
                                                <div class="col-sm-6">
                                                    <span class="text-center text-secondary">QTY</span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span class="text-center text-secondary">Ration</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-light p-1">
                                        <div class="box_details pb-1  p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Sales Value</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row text-end">
                                                        <div class="col-sm-6">
                                                            <span class="text-center text-secondary">50</span>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span class="text-center text-secondary">60</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box_details border-top pt-1 p-1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span>Ration </span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row text-end">
                                                        <div class="col-sm-6">
                                                            <span class="text-center text-warning">50</span>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span class="text-center text-warning">60</span>
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
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Marketing </h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="row text-start mb-3 d-flex align-items-center">
                                        <div class="flex-fill title_text_link col-sm-6">
                                            <a href="http://127.0.0.1:8000/admin/expense">
                                                <h6 class="mb-0 text-primary">Total Marketing</h6>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="http://127.0.0.1:8000/admin/expense">
                                                <span class="text-success"><i class="ph-trend-up"></i> 2.43%</span>
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="http://127.0.0.1:8000/admin/expense">
                                                <button type="button"
                                                    class="btn rounded-circle p-2 text-white shadow-lg bg-secondary dashboard_btn"
                                                    style="width: 30px; height: 30px; font-size: 14px;">
                                                    <span class="mb-0">18%</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <div class="box_details pb-1 bg-light p-1">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <span>DMAR </span>
                                                </div>
                                                <div class="col-lg-6"> <span class="text-success ms-2">
                                                        <i class="ph-arrow-up fs-base lh-base align-top"></i>
                                                        (+16.2%)
                                                    </span>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p class="p-0 m-0 main_text_color value text-end"
                                                        style="font-size: 30px">
                                                        <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box_details border-top pt-1 p-1">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <span>CMAR </span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span class="text-danger ms-2">
                                                        <i class="ph-arrow-down fs-base lh-base align-top"></i>
                                                        (-4.9%)
                                                    </span>
                                                </div>
                                                <div class="col-lg-3 ">
                                                    <p class="p-0 m-0 main_text_color value text-end"
                                                        style="font-size: 30px">
                                                        <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box_details pb-1 bg-light p-1">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <span>EMAR </span>
                                                </div>
                                                <div class="col-lg-6"> <span class="text-success ms-2">
                                                        <i class="ph-arrow-up fs-base lh-base align-top"></i>
                                                        (+16.2%)
                                                    </span>
                                                </div>
                                                <div class="col-lg-3 text-end">
                                                    <p class="p-0 m-0 main_text_color value text-end"
                                                        style="font-size: 30px">
                                                        <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Product Showcase</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill title_text_link">
                                            <a href="http://127.0.0.1:8000/admin/expense">
                                                <h6 class="mb-0 text-primary">Total Show</h6>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="http://127.0.0.1:8000/admin/expense">
                                                <button type="button"
                                                    class="btn rounded-circle p-3 text-white shadow-lg bg-secondary dashboard_btn"
                                                    style="width: 30px; height: 30px">
                                                    <span class="mb-0">330</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box_details pb-1 bg-light p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>Knowledge </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="p-0 m-0 main_text_color value text-end" style="font-size: 30px">
                                                    <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_details border-top pt-1 p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="col-lg-6">
                                                    <span>Present</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="p-0 m-0 main_text_color value text-end" style="font-size: 30px">
                                                    <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_details pb-1 bg-light p-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>Showcase BD</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="p-0 m-0 main_text_color value text-end" style="font-size: 30px">
                                                    <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Quick Link</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 2 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 2 (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 3 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 3 (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 4 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 4 (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 5 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 5 (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 5 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 5 (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 5 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 5 (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 5 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 5 (+)
                                        </a>
                                    </div>
                                    <div class="box_details d-flex justify-content-between">
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Homepage 5 (+)
                                        </a>
                                        <a href="" style="color: #247297; font-size: 12px;">
                                            Learnmore Page 5 (+)
                                        </a>
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






