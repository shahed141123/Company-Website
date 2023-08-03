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
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="" class="breadcrumb-item"><span class="breadcrumb-item active">Accounts
                                    Finance</span></a>
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
                    <a href="{{ route('account-payable.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                            <span> Accounts Payable</span>
                        </div>
                    </a>
                    <a href="{{ route('account-receivable.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                            <span>Accounts Receivable</span>
                        </div>
                    </a>
                    <a href="{{ route('account-profit-loss.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-user-tie me-1" style="font-size: 12px;"></i>
                            <span>Accounts Profit Loss</span>
                        </div>
                    </a>
                    <a href="{{ route('expense.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-cog me-1" style="font-size: 12px;"></i>
                            <span>Expense</span>
                        </div>
                    </a>
                    <a href="{{ route('expense-category.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-gallery-thumbnails me-1" style="font-size: 12px;"></i>
                            <span>Expense Category</span>
                        </div>
                    </a>
                    <a href="{{ route('expense-type.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-gallery-thumbnails me-1" style="font-size: 12px;"></i>
                            <span>Expense Type</span>
                        </div>
                    </a>
                </div>
        </section>
        <!-- /page header -->
        <section>
            <div class="container my-2">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h3 class="text-center w-50 mx-auto" style="color: #247297; border-bottom: 1px solid #247297;">
                            Accounts Finance</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Payable</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('account-payable.index') }}">
                                                <h6 class="mb-0 text-primary">Total Accounts Payable</h6>
                                            </a>
                                        </div>
                                        <a href="{{ route('account-payable.index') }}">
                                            <button type="button" class="btn  rounded-circle dashboard_btn"
                                                style="width: 30px; height: 30px">
                                                <i style="color: #247297" class="fa-brands fa-cc-amazon-pay fs-4 p-1"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Month
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Year
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Receivable</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('account-receivable.index') }}">
                                                <h6 class="mb-0 text-primary">Total Accounts Receivable</h6>
                                            </a>
                                        </div>
                                        <a href="{{ route('account-receivable.index') }}">
                                            <button type="button" class="btn  rounded-circle dashboard_btn"
                                                style="width: 30px; height: 30px">
                                                <i style="color: #247297" class="fa-solid fa-inbox-in fs-4 p-1"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Month
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Year
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Accounts Profit Loss</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('account-profit-loss.index') }}">
                                                <h6 class="mb-0 text-primary">Total Accounts Profit Loss</h6>
                                            </a>
                                        </div>
                                        <a href="{{ route('account-profit-loss.index') }}">
                                            <button type="button" class="btn  rounded-circle dashboard_btn"
                                                style="width: 30px; height: 30px">
                                                <i style="color: #247297"
                                                    class="fa-solid fa-chart-line-down fs-4 p-1"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Month
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Year
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Expense</h6>
                                <div class="card card-body border-0 shadow-none mb-0 "
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('expense.index') }}">
                                                <h6 class="mb-0 text-primary">Total Expense</h6>
                                            </a>
                                            {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                                        </div>
                                        <a href="{{ route('expense.index') }}">
                                            <button type="button" class="btn  rounded-circle dashboard_btn"
                                                style="width: 30px; height: 30px">
                                                <i style="color: #247297" class="fa-solid fa-castle fs-4 p-1"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Month
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Year
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Income</h6>
                                <div class="card card-body border-0 shadow-none mb-0"
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('income.index') }}">
                                                <h6 class="mb-0 text-primary">Total Income</h6>
                                            </a>
                                            {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                                        </div>
                                        <a href="{{ route('income.index') }}">
                                            <button type="button" class="btn  rounded-circle dashboard_btn"
                                                style="width: 30px; height: 30px">
                                                <i style="color: #247297" class="fa-solid fa-inboxes fs-4 p-1"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Month
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Year
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h6 style="color: #247297; border-bottom: 1px solid #247297;"
                                    class=" mb-0 pt-2 text-center">Balance</h6>
                                <div class="card card-body border-0 shadow-none mb-0 "
                                    style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill title_text_link">
                                            <a href="{{ route('income-expense.ledger') }}">
                                                <h6 class="mb-0 text-primary">Total Balance</h6>
                                            </a>
                                            {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                                        </div>
                                        <a href="{{ route('income-expense.ledger') }}">
                                            <button type="button" class="btn  rounded-circle dashboard_btn"
                                                style="width: 30px; height: 30px">
                                                <i style="color: #247297" class="fa-solid fa-scale-balanced fs-4 p-1"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Month
                                    </div>
                                    <div class="box_details">
                                        <span class="float-end" style="color: #247297;">0 <span>$</span>
                                        </span> This Year
                                    </div>
                                </div>
                            </div>
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
