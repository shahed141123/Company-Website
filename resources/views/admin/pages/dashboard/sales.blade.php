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
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="" class="breadcrumb-item"><span class="breadcrumb-item active">Sales
                                    Dashboard</span></a>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}

        </section>
        <!-- /page header -->

        <!-- Sales Chain Page -->
        <div class="content pt-0">
            <div class="container-fluid ">
                <div class="row">
                    <h1 class="mb-0 text-center w-25 mx-auto mb-2 text-info"
                        style="color: #247297; border-bottom: 1px solid #247297;">Sales Dashboard</h1>
                </div>
                {{-- Extra Area --}}
                <div class="row">
                    <div class="col-lg-4">
                        <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">
                            Target
                            Vs. Achievement</h6>
                        <div class="card card-body border-0 shadow-none mb-0"
                            style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                            <div class="">
                                <div class="row">
                                    <div class="col-sm-12 bg-light px-1 py-1 rounded">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('salesYearTarget.index') }}">
                                                Year Target
                                            </a>
                                            <a href="{{ route('salesYearTarget.create') }}"><span
                                                    class="rounded-circle border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bg-light px-1 py-1 rounded mt-1">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{route('salesTeamTarget.index')}}">
                                                Individual Target
                                            </a>
                                            <a href="{{route('salesTeamTarget.create')}}"><span
                                                    class="rounded-circle border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bg-light px-1 py-1 rounded mt-1">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('industry.index') }}">
                                                Achievement Summary
                                            </a>
                                            <a href=""><span
                                                    class="rounded-circle border border-secondary text-center">
                                                    <i class="fa fa-plus text-secondary"></i>
                                                </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">
                            Sales Details</h6>
                        <div class="card card-body border-0 shadow-none mb-0"
                            style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                            <div class="row">
                                <div class="col-sm-12 bg-light px-1 py-1 rounded">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('sales-profit-loss.index') }}">
                                            Sales Profit Loss
                                        </a>
                                        <a href="{{ route('sales-profit-loss.create') }}"><span class="rounded-circle border border-secondary text-center">
                                                <i class="fa fa-plus text-secondary"></i>
                                            </span></a>
                                    </div>
                                </div>
                                <div class="col-sm-12 bg-light px-1 py-1 rounded mt-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('rfqOrderStatus.index') }}">
                                            Order Status
                                        </a>
                                        <a href="{{ route('rfqOrderStatus.create') }}"><span class="rounded-circle border border-secondary text-center">
                                                <i class="fa fa-plus text-secondary"></i>
                                            </span></a>
                                    </div>
                                    {{-- </div>
                                <div class="col-sm-12 bg-light px-1 py-1 rounded mt-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('industry.index') }}">
                                            Achievement Summary
                                        </a>
                                        <a href=""><span
                                                class="rounded-circle border border-secondary text-center">
                                                <i class="fa fa-plus text-secondary"></i>
                                            </span></a>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h6 style="color: #247297; border-bottom: 1px solid #247297;" class=" mb-0 pt-2 text-center">
                            RFQ Details</h6>
                        <div class="card card-body border-0 shadow-none mb-0">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-fill title_text_link">
                                    <a href="../full/income.html">
                                        <h6 class="mb-0 text-primary">Total RFQ & Deal</h6>
                                    </a>
                                    {{-- <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span> --}}
                                </div>
                                <a href="{{ route('rfq-manage.index') }}">
                                    <button type="button" class="btn  rounded-circle dashboard_btn"
                                        style="width: 30px; height: 30px">
                                        <i style="color: #247297" class="fa-solid fa-badge-percent fs-4 p-1"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="box_details">
                                <a href="{{ route('rfq-manage.index') }}">
                                    <span class="float-end">RFQ :
                                        {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->count() }}</span> Deal :
                                    {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->count() }}
                                </a>
                            </div>
                            <div class="box_details">
                                <a href="{{ route('rfq-manage.index') }}">
                                    <span class="float-end">Deal :
                                        {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->whereDate('create_date', Carbon\Carbon::today())->count() }}
                                        <span>RFQ :
                                            {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->whereDate('create_date', Carbon\Carbon::today())->count() }}</span>
                                    </span> Today's </a>
                            </div>
                            <div class="box_details">
                                <a href="{{ route('rfq-manage.index') }}">
                                    <span class="float-end">Deal :
                                        {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}
                                        <span>RFQ :
                                            {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}</span>
                                    </span> This Month's </a>
                            </div>
                        </div>
                    </div>
                    <!-- Sales Chain Page -->
                </div>
            </div>
        </div>
    @endsection
