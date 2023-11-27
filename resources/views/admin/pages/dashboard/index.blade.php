@extends('admin.master')
@section('content')
    <style>
        .notification_card {
            height: 8rem !important;
        }

        .dasboard_main_card {
            height: 9rem !important;
        }

        .notification_link_area {
            color: gray;
        }

        .notification_link_area:hover {
            color: #ae0a46;
        }

        /* .site_color {
            color: #ae0a46;
        } */

        .site_bg_color {
            background-color: #ae0a46;
        }

        .admin_color {
            color: #247297;
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
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Dashboard</a>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>

                </div>
                <div>
                    <a href="{{ route('leave-application.show',Auth::user()->id) }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>Leave Application</span>
                        </div>
                    </a>
                    <a href="{{ route('noticeboard') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>Notice Board</span>
                        </div>
                    </a>
                    <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                            <span>Attendance</span>
                        </div>
                    </a>
                    {{-- <a href="{{ route('delivery.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                            <span>delivery</span>
                        </div>
                    </a> --}}
                </div>
                {{-- Inner Page Tab --}}
        </section>
        <!-- /page header -->
        <!-- Content area -->
        <div class="container-fluid">
            <div class="row py-2">
                <h5 class="mb-0 text-center mx-auto rounded-0"
                    style="border-bottom: 1px solid #ae0a46; width:13%; background:#ae0a46; color:white;">
                    All Notification</h5>
            </div>
            <div class="row gx-1">
                <div class="col-lg-6 mt-2 ">
                    <div class="container px-1 mb-2">
                        <div class="row gx-2">
                            @if (auth()->check() && in_array('logistics', json_decode(auth()->user()->department, true)))
                                <div class="col-lg-4">
                                    <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                        class=" mb-0 pt-2 text-center">Logistic</h6>
                                    <div class="card notification_card rounded-0 p-2">
                                        <div class="mt-1">
                                            <a href="{{ route('purchase.index') }}" class="d-flex justify-content-between notification_link_area">
                                                <span>Purchase</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">0</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="" class="d-flex justify-content-between notification_link_area">
                                                <span>Pending Delivery</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (auth()->check() && in_array('logistics', json_decode(auth()->user()->department, true)))
                                <div class="col-lg-4">
                                    <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                        class=" mb-0 pt-2 text-center">Product</h6>
                                    <div class="card notification_card rounded-0 p-2">
                                        <div class="mt-1">
                                            <a href="{{ route('sas.index') }}" class="d-flex justify-content-between link_area">
                                                <span>Pending SAS</span>
                                                <span class="badge site_bg_color rounded-0 ms-3 custom-tooltip"
                                                    title="{{ App\Models\Admin\Product::where('action_status', 'listed')->count() }} Products are waiting for SAS creation."
                                                    data-toggle="tooltip">{{ App\Models\Admin\Product::where('action_status', 'listed')->count() }}</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{ route('product-sourcing.index') }}"
                                                class="d-flex justify-content-between link_area">
                                                <span>Approval Pending</span>
                                                <span
                                                    class="badge site_bg_color rounded-0 ms-3">{{ App\Models\Admin\Product::where('action_status', 'seek_approval')->count() }}</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{ route('product.price_notification') }}"
                                                class="d-flex justify-content-between notification_link_area">
                                                <span>Price Update</span>
                                                <span
                                                    class="badge site_bg_color rounded-0 ms-3">{{ $notification_count }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (auth()->check() && in_array('business', json_decode(auth()->user()->department, true)))
                                <div class="col-lg-4">
                                    <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                        class=" mb-0 pt-2 text-center">Sales</h6>
                                    <div class="card notification_card rounded-0 p-2">
                                        <div class="mt-1">
                                            <a href="{{route('rfq.list')}}" class="d-flex justify-content-between notification_link_area">
                                                <span>Pending RFQ</span>
                                                <span class="badge site_bg_color rounded-0 ms-3"> {{ App\Models\Admin\Rfq::where('rfq_type' , 'rfq')->count() }} </span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{route('deal.list')}}" class="d-flex justify-content-between notification_link_area">
                                                <span>Pending Work Order</span>
                                                <span class="badge site_bg_color rounded-0 ms-3"> {{ App\Models\Admin\Rfq::where('status' , 'workorder_uploaded')->count() }} </span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{ route('sales-forcast.index') }}" class="d-flex justify-content-between notification_link_area">
                                                <span>Sales Report</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">0</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="" class="d-flex justify-content-between notification_link_area">
                                                <span>Deal Register</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-2">
                    <div class="container px-1 mb-2">
                        <div class="row gx-2">
                            @if (auth()->check() && in_array('site', json_decode(auth()->user()->department, true)))
                                <div class="col-lg-4">
                                    <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                        class=" mb-0 pt-2 text-center">CRM Main </h6>
                                    <div class="card notification_card rounded-0 p-2">
                                        <div class="mt-1">
                                            <a href="{{route('contact.index')}}" class="d-flex justify-content-between notification_link_area">
                                                <span>Contact</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">
                                                    {{App\Models\Admin\Contact::count()}}
                                                </span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{route('client-support.index')}}" class="d-flex justify-content-between notification_link_area">
                                                <span>Support</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">
                                                    {{App\Models\Client\ClientSupport::count()}}
                                                </span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{route('support-case.index')}}" class="d-flex justify-content-between notification_link_area">
                                                <span>Support Cases</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">
                                                    {{App\Models\Client\SupportCase::count()}}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (auth()->check() && in_array('business', json_decode(auth()->user()->department, true)))
                                <div class="col-lg-4">
                                    <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                        class=" mb-0 pt-2 text-center">Marketing
                                    </h6>
                                    <div class="card notification_card rounded-0 p-2">
                                        <div class="mt-1">
                                            <a href="" class="d-flex justify-content-between notification_link_area">
                                                <span>Marketing</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">15</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="" class="d-flex justify-content-between notification_link_area">
                                                <span>DMAR</span>
                                                <span class="badge site_bg_color rounded-0 ms-3">15</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (auth()->check() && in_array('site', json_decode(auth()->user()->department, true)))
                                <div class="col-lg-4">
                                    <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                        class=" mb-0 pt-2 text-center">Site Content
                                    </h6>
                                    <div class="card notification_card rounded-0 p-2">
                                        <div class="mt-1">
                                            <a href="{{ route('blog.index') }}"
                                                class="d-flex justify-content-between notification_link_area">
                                                <span>Blog</span>
                                                <span
                                                    class="badge bg-secondary rounded-0 ms-3">{{ App\Models\Admin\Blog::count() }}</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{ route('feature.index') }}"
                                                class="d-flex justify-content-between notification_link_area">
                                                <span>Feature</span>
                                                <span
                                                    class="badge bg-secondary rounded-0 ms-3">{{ App\Models\Admin\Feature::count() }}</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{ route('industry.index') }}"
                                                class="d-flex justify-content-between notification_link_area">
                                                <span>Industry</span>
                                                <span
                                                    class="badge bg-secondary rounded-0 ms-3">{{ App\Models\Admin\Industry::count() }}</span>
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <a href="{{ route('solutionDetails.index') }}"
                                                class="d-flex justify-content-between notification_link_area">
                                                <span>Solution</span>
                                                <span
                                                    class="badge bg-secondary rounded-0 ms-3">{{ App\Models\Admin\SolutionDetail::count() }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <h5 class="mb-0 text-center mx-auto bg-secondary"
                    style="border-bottom: 1px solid #247297; width: 13%;
                color: white;">
                    All Status</h5>
            </div>
            <div class="row mt-1">
                <div class="col-lg-3">
                    <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">Site
                        Content</h6>
                </div>
                <div class="col-lg-3">
                    <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">Business
                    </h6>
                </div>
                <div class="col-lg-3">
                    <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">Logistic
                    </h6>
                </div>
                <div class="col-lg-3">
                    <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">CRM</h6>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="javascript:void(0);">
                                    <h6 class="mb-0 text-black">Total Industry & Solutions</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="javascript:void(0);">
                                <button type="button" class="btn  rounded-circle p-1 dashboard_btn">
                                    <i style="color: #247297" class="icon-office icon-1x p-1"></i>
                                </button>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('industry.index') }}">Industries
                                ({{ App\Models\Admin\Industry::count() }})
                            </a>
                            <a href="{{ route('industry.index') }}">
                                <span class="rounded-circle border border-secondary text-center">
                                    <i class="fa fa-plus text-secondary"></i>
                                </span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <a href="{{ route('solutionDetails.index') }}">Total Solutions
                                ({{ App\Models\Admin\SolutionDetail::count() }})
                            </a>
                            <a href="{{ route('solutionDetails.index') }}">
                                <span class="rounded-circle border border-secondary text-center">
                                    <i class="fa fa-plus text-secondary"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="card dasboard_main_card card-body border-0 shadow-none">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="{{ route('all.product') }}">
                                    <h6 class="mb-0 text-primary">Total Products :</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="../full/payable.html">
                                <button type="button" class="btn  rounded-circle dashboard_btn"
                                    style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-solid fa-cart-shopping fa-4"></i>
                                    <i class=" "></i>
                                </button>
                            </a>
                            <a href="{{ route('product-sourcing.index') }}">
                                {{-- <button type="button" class="btn  rounded-circle dashboard_btn" --}}
                                {{-- style="width: 30px; height: 30px"> --}}
                                <h2 class="float-end mb-0" style="color: #247297">
                                    {{ App\Models\Admin\Product::where('product_status', 'product')->where('status', 'active')->count() }}
                                </h2>
                                {{-- </button> --}}
                            </a>
                        </div>
                        <div class="box_details">
                            <a href="{{ route('brand.index') }}">
                                <span class="float-end">Hardware :
                                    {{ App\Models\Admin\Product::where('product_status', 'product')->where('product_type', 'hardware')->where('status', 'active')->count() }}</span>
                                Software :
                                {{ App\Models\Admin\Product::where('product_status', 'product')->where('product_type', 'software')->where('status', 'active')->count() }}
                            </a>
                        </div>
                        <div class="box_details">
                            <a href="{{ route('brand.index') }}">
                                <span class="float-end">{{ App\Models\Admin\Brand::count() }}</span> Brands </a>
                        </div>
                        <div class="box_details">
                            <a href="{{ route('brand.index') }}">
                                <span class="float-end">{{ App\Models\Admin\Category::count() }}</span> Categories
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="../full/payable.html">
                                    <h6 class="mb-0 text-primary">Total Balance</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="../full/payable.html">
                                <button type="button" class="btn  rounded-circle dashboard_btn"
                                    style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-solid fa-scale-balanced fs-4 p-1"></i>
                                </button>
                            </a>
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> Today
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> This Month
                        </div>
                    </div>
                    <br>
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="{{ route('income-expense.ledger') }}">
                                    <h6 class="mb-0 text-primary">Total Expense</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="{{ route('income-expense.ledger') }}">
                                <button type="button" class="btn  rounded-circle dashboard_btn"
                                    style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-regular fa-money-bill-transfer fs-4 p-1"></i>
                                </button>
                            </a>
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> Today
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> This Month
                        </div>
                    </div>
                    <br>
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="{{ route('income-expense.overview') }}">
                                    <h6 class="mb-0 text-primary">Total Income</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="{{ route('income-expense.overview') }}">
                                <button type="button" class="btn  rounded-circle dashboard_btn"
                                    style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-solid fa-money-simple-from-bracket fs-4 p-1"></i>
                                </button>
                            </a>
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> Today
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> This Month
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="{{ route('pending.order') }}">
                                    <h6 class="mb-0 text-primary">Total Order</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="{{ route('pending.order') }}">
                                <button type="button" class="btn  rounded-circle dashboard_btn"
                                    style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-solid fa-bags-shopping fs-4 p-1"></i>
                                </button>
                            </a>
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> Today
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> This Month
                        </div>
                    </div>
                    <br>
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="../full/stock_module.html">
                                    <h6 class="mb-0 text-primary">Stock Report</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="../full/stock_module.html">
                                <button type="button" class="btn  rounded-circle dashboard_btn"
                                    style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-solid fa-arrow-trend-down fs-4 p-1"></i>
                                </button>
                            </a>
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> Today
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span>$</span>
                            </span> This Month
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="{{ route('dashboard.salesreport') }}">
                                    <h6 class="mb-0 text-primary">
                                        <span>Sales Report</span>
                                    </h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="{{ route('dashboard.salesreport') }}">
                                <button type="button" class="btn  rounded-circle" style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-solid fa-bell fs-4 p-1"></i><i
                                        class=""></i>
                                </button>
                            </a>
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span></span>
                            </span> Today's Sale
                        </div>
                        <div class="box_details">
                            <span class="float-end">0 <span></span>
                            </span> This Month's Sale
                        </div>
                    </div>
                    <br>
                    <div class="card dasboard_main_card card-body border-0 shadow-none mb-0">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill title_text_link">
                                <a href="../full/income.html">
                                    <h6 class="mb-0 text-primary">Total RFQ & Deal</h6>
                                </a>
                                {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                            </div>
                            <a href="{{ route('rfq.list') }}">
                                <button type="button" class="btn  rounded-circle dashboard_btn"
                                    style="width: 30px; height: 30px">
                                    <i style="color: #247297" class="fa-solid fa-badge-percent fs-4 p-1"></i>
                                </button>
                            </a>
                        </div>
                        <div class="box_details">
                            <a href="{{ route('rfq.list') }}">
                                <span class="float-end">RFQ :
                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->count() }}</span> Deal :
                                {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->count() }}
                            </a>
                        </div>
                        <div class="box_details">
                            <a href="{{ route('rfq.list') }}">
                                <span class="float-end">Deal :
                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->whereDate('create_date', Carbon\Carbon::today())->count() }}
                                    <span>RFQ :
                                        {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->whereDate('create_date', Carbon\Carbon::today())->count() }}</span>
                                </span> Today's </a>
                        </div>
                        <div class="box_details">
                            <a href="{{ route('rfq.list') }}">
                                <span class="float-end">Deal :
                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}
                                    <span>RFQ :
                                        {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}</span>
                                </span> This Month's </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
    <!-- /content area -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#accordion").click(function() {
                $('.expandable').toggle("slide");
            });
        });
    </script>
@endsection
