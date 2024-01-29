@extends('admin.master')
@section('content')

    <!-- Inner content -->
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">RFQ Management</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="container-fluid ps-0">
                <div class="row">
                    <div class="col-lg-2 col-12">
                        <div class="d-lg-block d-sm-none">
                            {{-- For Large Device --}}
                            <ul class="nav nav-tabs flex-column border-0" id="myTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab"
                                        style="padding: 17px;" data-bs-target="#tab1" type="button" role="tab"
                                        aria-controls="tab1" aria-selected="true">RFQ Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        style="padding: 17px;" type="button" role="tab" aria-controls="tab2"
                                        aria-selected="false" tabindex="-1">Regular Process</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                        style="padding: 17px;" type="button" role="tab" aria-controls="tab3"
                                        aria-selected="false" tabindex="-1">Bypass Process</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4"
                                        style="padding: 17px;" type="button" role="tab" aria-controls="tab4"
                                        aria-selected="false" tabindex="-1">Department Wise Actions</button>
                                </li>
                            </ul>
                        </div>
                        {{-- For Mobile Device --}}
                        <div class="d-lg-none d-sm-block">
                            <ul class="nav nav-tabs border-0 justify-content-center align-items-center" id="myTabs"
                                role="tablist">
                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                        aria-selected="true">RFQ Details</button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2" aria-selected="false"
                                        tabindex="-1">Regular Process</button>
                                </li>
                                <li class="nav-item me-2 mt-2" role="presentation">
                                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                        type="button" role="tab" aria-controls="tab3" aria-selected="false"
                                        tabindex="-1">Bypass Process</button>
                                </li>
                                <li class="nav-item me-2 mt-2" role="presentation">
                                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4"
                                        type="button" role="tab" aria-controls="tab4" aria-selected="false"
                                        tabindex="-1">Department Wise Actions</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-1">

                    </div> --}}
                    <div class="col-lg-10 col-12 p-0">
                        <div class="card rounded-0">
                            <div class="card-header p-1 rounded-0" style="background-color: #247297;">
                                <h4 class="text-center m-0 text-white">{{ $rfq_details->rfq_code }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="height:10rem;">
                                    <div class="track">
                                        @if ($rfq_details->rfq_type == 'rfq')
                                            <div
                                                class="step
                                                {{ $rfq_details->status == 'rfq_created' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'assigned' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'deal_created' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                                ">
                                                <span class="icon">
                                                    @if ($rfq_details->status == 'rfq_created')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'assigned')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'deal_created')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'sas_created')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'sas_approved')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'quoted')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'workorder_uploaded')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'invoice_sent')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                        <i class="fa fa-check"></i>
                                                    @else
                                                        <i class="fa fa-times"></i>
                                                    @endif

                                                </span>
                                                <span class="text">RFQ Created</span>
                                            </div>

                                            <div
                                                class="step
                                                {{ $rfq_details->status == 'assigned' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'deal_created' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                                {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                                ">
                                                <span class="icon">
                                                    @if ($rfq_details->status == 'assigned')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'deal_created')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'sas_created')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'sas_approved')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'quoted')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'workorder_uploaded')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'invoice_sent')
                                                        <i class="fa fa-check"></i>
                                                    @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                        <i class="fa fa-check"></i>
                                                    @else
                                                        <i class="fa fa-times"></i>
                                                    @endif
                                                </span>
                                                <span class="text"> Salesman Assigned</span>
                                                <span class="text">
                                                    @if ($rfq_details->status == 'rfq_created')
                                                        <a href="javascript:void(0);" class="text-primary mx-3 mx-3"
                                                            data-bs-toggle="modal" title="View & Assign Sales Manager"
                                                            data-bs-target="#assign-manager-{{ $rfq_details->rfq_code }}">
                                                            <i class="icon-user-check icon-1x"
                                                                style="color: #247297;"></i>
                                                        </a>
                                                    @endif
                                                </span>
                                            </div>
                                        @endif

                                        <div
                                            class="step
                                            {{ $rfq_details->status == 'deal_created' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                                ">
                                            <span class="icon">
                                                @if ($rfq_details->status == 'deal_created')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'sas_created')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'sas_approved')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'quoted')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'workorder_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'invoice_sent')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    <i class="fa fa-times"></i>
                                                @endif
                                            </span>
                                            <span class="text"> Deal Created </span>
                                            <span class="text">
                                                @if ($rfq_details->status == 'assigned')
                                                    <a href="{{ route('deal.convert', [$rfq_details->id]) }}"
                                                        class="text-success mx-3 mx-3" title="Convert To Deal">
                                                        <i class="icon-pen-plus icon-1x"></i>
                                                    </a>
                                                @endif
                                            </span>
                                        </div>

                                        <div
                                            class="step
                                            {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                            ">
                                            <span class="icon">
                                                @if ($rfq_details->status == 'sas_created')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'sas_approved')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'quoted')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'workorder_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'invoice_sent')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    <i class="fa fa-times"></i>
                                                @endif
                                            </span>
                                            <span class="text">SAS Created</span>
                                            <span class="text">
                                                @if ($rfq_details->status == 'deal_created')
                                                    <a href="{{ route('deal-sas.show', $rfq_details->rfq_code) }}"
                                                        class="text-success mx-3 mx-3" title="Create SAS">
                                                        <i class="icon-file-plus2 icon-1x"></i>
                                                    </a>
                                                @endif
                                            </span>

                                        </div>

                                        <div
                                            class="step
                                            {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                            ">
                                            <span class="icon">
                                                @if ($rfq_details->status == 'sas_approved')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'quoted')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'workorder_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'invoice_sent')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    <i class="fa fa-times"></i>
                                                @endif
                                            </span>
                                            <span class="text"> SAS Approved</span>
                                            <span class="text">
                                                @if ($rfq_details->status == 'sas_created')
                                                    <a href="{{ route('deal-sas.edit', $rfq_details->rfq_code) }}"
                                                        class="text-info mx-2" title="Edit Sas">
                                                        <i class="icon-pencil icon-1x"></i>
                                                    </a>
                                                    <a href="{{ route('dealsasapprove', $rfq_details->rfq_code) }}"
                                                        class="text-warning mx-3 mx-3" title="Approve Sas">
                                                        <i class="mi-check-circle mi-1x"></i>
                                                    </a>
                                                @endif
                                            </span>
                                        </div>

                                        <div
                                            class="step
                                            {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                            ">
                                            <span class="icon">
                                                @if ($rfq_details->status == 'quoted')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'workorder_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'invoice_sent')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    <i class="fa fa-times"></i>
                                                @endif
                                            </span>
                                            <span class="text"> Quotation Sent </span>
                                            <span class="text">
                                                @if ($rfq_details->status == 'sas_approved')
                                                    <a href="javascript:void(0);" class="text-primary mx-3 mx-3"
                                                        data-bs-toggle="modal" title="Send Quotation"
                                                        data-bs-target="#quotation-send-{{ $rfq_details->rfq_code }}">
                                                        <i class="icon-paperplane icon-1x"></i>
                                                    </a>
                                                @endif
                                            </span>
                                        </div>

                                        <div
                                            class="step
                                            {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                            ">
                                            <span class="icon">
                                                @if ($rfq_details->status == 'workorder_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'invoice_sent')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    <i class="fa fa-times"></i>
                                                @endif
                                            </span>
                                            <span class="text">Work Order Uploaded</span>
                                            @if ($rfq_details->status == 'quoted')
                                                <span class="text">
                                                    <a href="javascript:void(0);" class="text-primary mx-2"
                                                        data-bs-toggle="modal" title="Upload Work order"
                                                        data-bs-target="#Work-order-{{ $rfq_details->rfq_code }}">
                                                        <i class="icon-file-plus2"></i>
                                                    </a>

                                                </span>
                                            @endif
                                        </div>



                                        <div
                                            class="step
                                            {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                            {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                            ">
                                            <span class="icon">
                                                @if ($rfq_details->status == 'invoice_sent')
                                                    <i class="fa fa-check"></i>
                                                @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    <i class="fa fa-times"></i>
                                                @endif
                                            </span>
                                            <span class="text">Invoice Sent</span>
                                            <span class="text">
                                                @if ($rfq_details->status == 'workorder_uploaded')
                                                    <a href="javascript:void(0);" class="text-primary mx-3 mx-3"
                                                        data-bs-toggle="modal" title="Send Invoice"
                                                        data-bs-target="#invoice-send-{{ $rfq_details->rfq_code }}">
                                                        <i class="icon-paperplane icon-1x"></i>
                                                    </a>
                                                @endif
                                            </span>
                                        </div>

                                        <div
                                            class="step {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                            ">
                                            <span class="icon">
                                                @if ($rfq_details->status == 'proof_of_payment_uploaded')
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    <i class="fa fa-times"></i>
                                                @endif
                                            </span>
                                            <span class="text">Proof of Payment Uploaded</span>
                                            <span class="text">
                                                @if ($rfq_details->status == 'invoice_sent')
                                                    <a href="javascript:void(0);" class="text-primary mx-3 mx-3"
                                                        data-bs-toggle="modal" title="Send Invoice"
                                                        data-bs-target="#proofpayment-{{ $rfq_details->rfq_code }}">
                                                        <i class="icon-file-plus2 icon-1x"></i>
                                                    </a>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content bg-white mt-0 pt-0" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                            aria-labelledby="tab1-tab">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 p-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <ul class="nav nav-tabs border-0 d-flex justify-content-start align-items-center"
                                                style="padding-top: 0px;padding-bottom: 1px;">
                                                <li class="nav-item mb-0 me-1">
                                                    <a href="#client_details" class=" nav-link active cat-tab1 p-1"
                                                        data-bs-toggle="tab">
                                                        <p class="m-0 p-1">
                                                            Client Details</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-0">
                                                    <a href="#product_details" class=" nav-link cat-tab2 p-1 "
                                                        data-bs-toggle="tab">
                                                        <p class="m-0 p-1">
                                                            Product Details</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <h5 class="m-0 p-0 ps-5" style="color: #247297;">RFQ Details</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="row rounded">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="client_details">
                                                {{-- Save Table --}}
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">Client Type</th>
                                                            <th width="20%">Name</th>
                                                            <th width="15%">Company Name</th>
                                                            <th width="10%">Asking Quantity </th>
                                                            <th width="15%">Phone Number</th>
                                                            <th width="10%">Total Price</th>
                                                            <th width="10%" class="text-center">Assigned Sales Manager
                                                                (L1) </th>
                                                            <th width="10%" class="text-center">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                {{ ucfirst($rfq_details->client_type) }}</td>
                                                            <td> {{ ucfirst($rfq_details->name) }}</td>
                                                            <td> {{ ucfirst($rfq_details->company_name) }}</td>
                                                            <td>
                                                                @if (App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') > 0)
                                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                                @else
                                                                    {{ $rfq_details->qty }}
                                                                @endif
                                                            </td>
                                                            <td>{{ $rfq_details->phone }}</td>
                                                            <td>
                                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                            </td>
                                                            <td>{{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                                <br>
                                                                @if ($rfq_details->sales_man_id_T1)
                                                                    Assigned Sales Manager (T1) :
                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                                    <br>
                                                                @endif
                                                                @if ($rfq_details->sales_man_id_T2)
                                                                    Assigned Sales Manager (T2) :
                                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                                @endif
                                                            </td>
                                                            <td>{{ ucfirst($rfq_details->status) }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show" id="product_details">
                                                <div class="table-responsive text-center">
                                                    <!-- Product Details Table -->
                                                    @if (!empty($sourcing->grand_total))
                                                        <table class="table table-bordered"
                                                            style="width: 100%;height: auto;">
                                                            <thead>
                                                                <tr class="expand-switch1"
                                                                    style="padding-top: 8px;padding-bottom: 8px; background-color: #247297 !important;">
                                                                    <th width="86%" colspan="4" class="text-white"
                                                                        style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                                        <i class="icon1 fa fa-plus mx-3"></i> Product
                                                                        Details
                                                                    </th>
                                                                    <th width="14%" class="text-center"
                                                                        style="border:none;">
                                                                        @if ($rfq_details->status == 'rfq_created')
                                                                        @elseif ($rfq_details->status == 'assigned')

                                                                        @elseif ($rfq_details->status == 'deal_created')
                                                                        @else
                                                                            <a href="javascript:void(0);"
                                                                                class="text-white" title="Show SAS"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#show-sas">
                                                                                <i class="icon-eye"></i>
                                                                            </a>
                                                                        @endif
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody class="expand-div1 d-none">
                                                                <tr class="text-center"
                                                                    style="background-color: rgba(0,0,0,.03);">
                                                                    <th width="40%">Product Description</th>
                                                                    <th width="14%">Quantity</th>

                                                                    @if ($rfq_details->regular == '1')
                                                                        <th width="10%" class="rg_discount d-none">
                                                                            Discount </th>
                                                                        <th width="10%" class="rg_discount d-none">
                                                                            Disc. Unit </th>
                                                                    @else
                                                                        <th width="10%" class="rg_unit">Unit Price
                                                                        </th>
                                                                    @endif

                                                                    <th width="15%">Unit Total</th>
                                                                </tr>

                                                                @foreach ($deal_products as $key => $item)
                                                                    <tr>
                                                                        <td>
                                                                            {{ Str::words($item->item_name, 12) }}
                                                                        </td>
                                                                        <td class="text-center">
                                                                            {{ $item->qty }}
                                                                        </td>
                                                                        @if ($rfq_details->regular == '1')
                                                                            <th width="10%" class="rg_discount d-none">
                                                                                {{ $item->regular_discount }} %
                                                                            </th>
                                                                            <th width="10%" class="rg_discount d-none">
                                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                                            </th>
                                                                        @else
                                                                            <th width="10%" class="rg_unit">
                                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                                            </th>
                                                                        @endif
                                                                        <td class="text-center">$ {{ $item->sales_price }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                                <tr>
                                                                    <th> </th>
                                                                    @if ($rfq_details->regular == '1')
                                                                        <th width="10%" class="rg_discount d-none">
                                                                        </th>
                                                                        <th width="10%" class="rg_discount d-none">
                                                                        </th>
                                                                    @else
                                                                        <th width="10%" class="rg_unit"></th>
                                                                    @endif
                                                                    <td class="text-center"> Sub Total </td>
                                                                    <td class="text-center">$
                                                                        {{ $sourcing->sub_total_sales }}</td>
                                                                </tr>
                                                                @if ($rfq_details->special == '1')
                                                                    <tr class="special_discount">
                                                                        <th> </th>
                                                                        @if ($rfq_details->regular == '1')
                                                                            <th width="10%" class="rg_discount d-none">
                                                                            </th>
                                                                            <th width="10%" class="rg_discount d-none">
                                                                            </th>
                                                                        @else
                                                                            <th width="10%" class="rg_unit"></th>
                                                                        @endif
                                                                        <td class="text-center">Special discount </td>
                                                                        <td class="text-center">
                                                                            {{ $sourcing->special_discount }} %</td>
                                                                        <td class="text-center">$
                                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                                    </tr>
                                                                @endif

                                                                <tr>
                                                                    <th> </th>
                                                                    @if ($rfq_details->regular == '1')
                                                                        <th width="10%" class="rg_discount d-none">
                                                                        </th>
                                                                        <th width="10%" class="rg_discount d-none">
                                                                        </th>
                                                                    @else
                                                                        <th width="10%" class="rg_unit"></th>
                                                                    @endif
                                                                    <th class="text-center"> Total </th>
                                                                    <td class="text-center">$
                                                                        {{ $sourcing->grand_total - $sourcing->tax_sales }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>

                                                        </table>

                                                        <!-- Tax / VAT Table -->
                                                        @if ($rfq_details->tax_status == '1')
                                                            <table class="table table-bordered mt-2 expand-div1 d-none">
                                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                                <td class="text-center" width="10%">
                                                                    {{ $sourcing->tax }}%</td>
                                                                <td class="text-center" width="10%">$
                                                                    {{ $sourcing->tax_sales }}</td>
                                                                </tr>
                                                            </table>
                                                        @endif
                                                    @else
                                                        <!-- Default Product Details Table -->
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr class="expand-switch"
                                                                    style="padding-top: 8px; padding-bottom: 8px; background-color: #247297;">
                                                                    <th width="100%" colspan="2" class="text-white"
                                                                        style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                                        <i class="icon3 fa fa-plus mx-3"></i> Product
                                                                        Details
                                                                    </th>
                                                                    <th width="100%" class="text-center"
                                                                        style="border:none;">
                                                                        @if ($rfq_details->status == 'rfq_created')
                                                                        @elseif ($rfq_details->status == 'assigned')

                                                                        @elseif ($rfq_details->status == 'deal_created')
                                                                        @else
                                                                            <a href="javascript:void(0);"
                                                                                class="text-white" title="Show SAS"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#show-sas">
                                                                                <i class="icon-eye"></i>
                                                                            </a>
                                                                        @endif
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="expand-div d-none">
                                                                <tr class="text-center">
                                                                    <td width="60%"> Product Name</td>
                                                                    <td width="20%"> Quantity </td>
                                                                    <td width="20%"> Sale Price </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><a href="javascript:void(0);"
                                                                            title="{{ App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name') }}">{{ Str::limit(App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name'), 28) }}</a>
                                                                    </th>
                                                                    <th>{{ $rfq_details->qty }}</th>
                                                                    <th></th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 p-1" style="background-color: #247297;">
                                    <h4 class="m-0 p-0 text-center text-white">Regular Process</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="row gx-3 m-3">
                                        <div class="col">
                                            <div class="text-start main_bg text-white p-2">
                                                <span>Sales</span>
                                                @if ($rfq_details->rfq_type == 'accounts')
                                                    <span class="badge bg-success">Sale Completed</span>
                                                @elseif ($rfq_details->rfq_type == 'purchase')
                                                    <span class="badge bg-success">Sale Completed</span>
                                                @else
                                                    <span class="badge bg-warning">On Going</span>
                                                @endif
                                            </div>
                                            <div class="bg-white shadow-sm p-2">
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border ">
                                                        <div class="ps-2">
                                                            <span>Sales Profit Loss</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_sale_profit_loss">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                            @include('admin.pages.singleRfq.sales-modal')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border">
                                                        <div class="ps-2">
                                                            <span>Sales Forecast</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_sale_forecast">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border">
                                                        <div class="ps-2">
                                                            <span>Commercial Documents</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_commercial_documents">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border">
                                                        <div class="ps-2">
                                                            <span>Commercial Documents</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_commercial_documents">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-start main_bg text-white p-2">
                                                <span>Accounts</span>
                                                &nbsp;
                                                @if ($rfq_details->rfq_type == 'purchase')
                                                    <span class="badge bg-success">Accounts Completed</span>
                                                @elseif ($rfq_details->rfq_type == 'accounts')
                                                    <span class="badge bg-warning">On Going</span>
                                                @else
                                                @endif
                                            </div>
                                            <div class="bg-white shadow-sm p-2">
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border ">
                                                        <div class="ps-2">
                                                            <span>Accounts Profit Loss</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_account_profitLoss">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                            @include('admin.pages.singleRfq.accounts-modal')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border ">
                                                        <div class="ps-2">
                                                            <span>Payable</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_account_payable">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border ">
                                                        <div class="ps-2">
                                                            <span>Receivable</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_account_receivable">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-start main_bg text-white p-2">
                                                <span>Purchase</span>
                                            </div>
                                            <div class="bg-white shadow-sm p-2">
                                                <div class="pt-1 pb-1">
                                                    <div class="d-flex justify-content-between align-items-center border">
                                                        <div class="ps-2">
                                                            <span>Receivable</span>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn navigation_btn me-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal_account_receivable">
                                                                <i class="ph-plus-circle ph-1x"></i> Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 p-1" style="background-color: #247297;">
                                    <h4 class="m-0 p-0 text-center text-white">Bypass Process</h4>
                                </div>
                                <div class="card-body p-0">
                                    asdasdasdasdasdasd
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 p-1" style="background-color: #247297;">
                                    <h4 class="m-0 p-0 text-center text-white">Department Wise Actions</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="card-body p-0">
                                        <div class="row gx-3 m-3">
                                            <div class="col">
                                                <div class="text-start main_bg text-white p-2">
                                                    <span>Sales</span>
                                                    @if ($rfq_details->rfq_type == 'accounts')
                                                        <span class="badge bg-success">Sale Completed</span>
                                                    @elseif ($rfq_details->rfq_type == 'purchase')
                                                        <span class="badge bg-success">Sale Completed</span>
                                                    @else
                                                        <span class="badge bg-warning">On Going</span>
                                                    @endif
                                                </div>
                                                <div class="bg-white shadow-sm p-2">
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border ">
                                                            <div class="ps-2">
                                                                <span>Sales Profit Loss</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_sale_profit_loss">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
                                                                @include('admin.pages.singleRfq.sales-modal')
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border">
                                                            <div class="ps-2">
                                                                <span>Sales Forecast</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_sale_forecast">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border">
                                                            <div class="ps-2">
                                                                <span>Commercial Documents</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_commercial_documents">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border">
                                                            <div class="ps-2">
                                                                <span>Commercial Documents</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_commercial_documents">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="text-start main_bg text-white p-2">
                                                    <span>Accounts</span>
                                                    &nbsp;
                                                    @if ($rfq_details->rfq_type == 'purchase')
                                                        <span class="badge bg-success">Accounts Completed</span>
                                                    @elseif ($rfq_details->rfq_type == 'accounts')
                                                        <span class="badge bg-warning">On Going</span>
                                                    @else
                                                    @endif
                                                </div>
                                                <div class="bg-white shadow-sm p-2">
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border ">
                                                            <div class="ps-2">
                                                                <span>Accounts Profit Loss</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_account_profitLoss">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
                                                                @include('admin.pages.singleRfq.accounts-modal')
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border ">
                                                            <div class="ps-2">
                                                                <span>Payable</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_account_payable">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border ">
                                                            <div class="ps-2">
                                                                <span>Receivable</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_account_receivable">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="text-start main_bg text-white p-2">
                                                    <span>Purchase</span>
                                                </div>
                                                <div class="bg-white shadow-sm p-2">
                                                    <div class="pt-1 pb-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center border">
                                                            <div class="ps-2">
                                                                <span>Receivable</span>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn navigation_btn me-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_account_receivable">
                                                                    <i class="ph-plus-circle ph-1x"></i> Add
                                                                </button>
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
                </div>
            </div>
        </div>
        <!-- /content area -->
    </div>
    <!-- /inner content -->

    @include('admin.pages.singleRfq.partials.rfq_manage_modals')
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.rfqDT1').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 4],
                }, ],
            });
            $('.rfqDT2').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 4],
                }, ],
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $('.editRfquser').click(function() {
                    $(".Rfquser").toggle(this.checked);
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $(".expand-switch").on('click', function() {
                    //$("#additionalExpand").toggle();
                    if ($(".expand-div").hasClass('d-none')) {
                        $(".expand-div").removeClass('d-none');
                        $(".icon3").removeClass('fa-plus');
                        $(".icon3").addClass('fa-minus');
                    } else {
                        $(".expand-div").addClass('d-none');
                        $(".icon3").removeClass('fa-minus');
                        $(".icon3").addClass('fa-plus');
                    }


                });


            });
        </script>

        <script>
            $(document).ready(function() {
                $(".expand-switch2").on('click', function() {
                    //$("#additionalExpand").toggle();
                    if ($(".expand-div2").hasClass('d-none')) {
                        $(".expand-div2").removeClass('d-none');
                        $(".icon2").removeClass('fa-plus');
                        $(".icon2").addClass('fa-minus');
                    } else {
                        $(".expand-div2").addClass('d-none');
                        $(".icon2").removeClass('fa-minus');
                        $(".icon2").addClass('fa-plus');
                    }


                });

                $(".expand-switch1").on('click', function() {
                    //$("#additionalExpand").toggle();
                    if ($(".expand-div1").hasClass('d-none')) {
                        $(".expand-div1").removeClass('d-none');
                        $(".icon1").removeClass('fa-plus');
                        $(".icon1").addClass('fa-minus');
                    } else {
                        $(".expand-div1").addClass('d-none');
                        $(".icon1").removeClass('fa-minus');
                        $(".icon1").addClass('fa-plus');
                    }


                });


            });
        </script>
    @endpush
@endonce
