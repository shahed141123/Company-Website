@extends('admin.master')
@section('content')
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        a {
            color: #3d3d3d;
            text-decoration: none;
        }

        p {
            font-family: "Poppins", sans-serif;
        }

        .fade-setting {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.5s ease, max-height 0.5s ease;
            display: none;
        }

        .fade-setting.show {
            opacity: 1;
            max-height: 500px;
            /* Adjust this value as needed */
        }

        .nav-link.actives {
            background-color: black;
        }

        .form-setting {
            padding: 9px 11px !important;
        }

        .form-setting:focus {
            border-radius: 0;
            border: 0;
            /* background-color: #e7e7e78c; */
            color: black;
            font-size: 11px;
            font-weight: 500;
            margin: 0px 0px;
        }

        @media only screen and (min-width: 620px) {
            .u-row {
                width: 600px !important;
            }

            @media print {
                body {
                    background: none;
                }
            }
        }
    </style>
    <!-- Inner content -->
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content d-lg-flex border-top justify-content-between align-items-center shadow-sm">
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
                <div class="d-lg-block d-sm-none">
                    <a href="{{ route('rfq.list') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                            <span>RFQ List</span>
                        </div>
                    </a>
                    <a href="{{ route('deal.list') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                            <span>Deal List</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content p-0" style="overflow: hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-12 p-2" style="background: #eee;">
                        <div class="d-lg-block d-sm-none">
                            {{-- For Large Device --}}
                            <ul class="nav nav-tabs flex-column border-0" id="myTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <input type="radio" name="tabs" id="tab0-radio" class="nav-radio visually-hidden"
                                        data-bs-toggle="tab" data-bs-target="#tab0" role="tab" aria-controls="tab0"
                                        aria-selected="true">
                                    <label class="nav-link" for="tab0-radio" style="padding: 17px;">Status</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input type="radio" name="tabs" id="tab1-radio" class="nav-radio visually-hidden"
                                        data-bs-toggle="tab" data-bs-target="#tab1" role="tab" aria-controls="tab1"
                                        aria-selected="false">
                                    <label class="nav-link" for="tab1-radio" style="padding: 17px;">RFQ Details</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input type="radio" name="tabs" id="tab2-radio" class="nav-radio visually-hidden"
                                        data-bs-toggle="tab" data-bs-target="#tab2" role="tab" aria-controls="tab2"
                                        aria-selected="false">
                                    <label class="nav-link" for="tab2-radio" style="padding: 17px;">Regular Process</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input type="radio" name="tabs" id="tab3-radio" class="nav-radio visually-hidden"
                                        data-bs-toggle="tab" data-bs-target="#tab3" role="tab" aria-controls="tab3"
                                        aria-selected="false">
                                    <label class="nav-link active" for="tab3-radio" style="padding: 17px;">Bypass
                                        Process</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input type="radio" name="tabs" id="tab4-radio" class="nav-radio visually-hidden"
                                        data-bs-toggle="tab" data-bs-target="#tab4" role="tab" aria-controls="tab4"
                                        aria-selected="false">
                                    <label class="nav-link" for="tab4-radio" style="padding: 17px;">Department Wise
                                        Actions</label>
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
                    <div class="col-lg-10 p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-content bg-white mt-0 pt-0" id="myTabContent">
                                    <div class="tab-pane fade" id="tab0" role="tabpanel"
                                        aria-labelledby="tab1-tab">
                                        <div class="card rounded-0">
                                            <div class="card-header p-1 rounded-0" style="background-color: #247297;">
                                                <h4 class="text-center m-0 text-white fw-normal">
                                                    {{ $rfq_details->rfq_code }}</h4>
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
                                                                        <a href="javascript:void(0);"
                                                                            class="text-primary mx-3 mx-3"
                                                                            data-bs-toggle="modal"
                                                                            title="View & Assign Sales Manager"
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
                                                                        class="text-success mx-3 mx-3"
                                                                        title="Convert To Deal">
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
                                                                        class="text-warning mx-3 mx-3"
                                                                        title="Approve Sas">
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
                                                                    <a href="javascript:void(0);"
                                                                        class="text-primary mx-3 mx-3"
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
                                                                    <a href="javascript:void(0);"
                                                                        class="text-primary mx-2" data-bs-toggle="modal"
                                                                        title="Upload Work order"
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
                                                                    <a href="javascript:void(0);"
                                                                        class="text-primary mx-3 mx-3"
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
                                                                    <a href="javascript:void(0);"
                                                                        class="text-primary mx-3 mx-3"
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
                                    <div class="tab-pane fade" id="tab1" role="tabpanel"
                                        aria-labelledby="tab1-tab">
                                        <div class="card rounded-0">
                                            <div class="card-header rounded-0 p-0">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5">
                                                        <ul class="nav nav-tabs border-0 d-flex justify-content-start align-items-center"
                                                            style="padding-top: 0px;padding-bottom: 1px;">
                                                            <li class="nav-item mb-0 me-1">
                                                                <a href="#client_details"
                                                                    class=" nav-link active cat-tab1 p-1"
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
                                                        <h5 class="m-0 p-0 ps-5 fw-normal" style="color: #247297;">RFQ
                                                            Details</h5>
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
                                                                        <th width="20%">Company Name</th>
                                                                        <th width="15%">Phone Number</th>
                                                                        <th width="25%" class="text-center">Assigned
                                                                            Sales Manager
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
                                                                        {{-- <td>
                                                                            @if ($rfq_details->rfqProducts->sum('qty') > 0)
                                                                                {{ $rfq_details->rfqProducts->sum('qty') }}
                                                                            @else
                                                                                {{ $rfq_details->qty }}
                                                                            @endif
                                                                        </td> --}}
                                                                        <td>{{ $rfq_details->phone }}</td>
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
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> Product Name</th>
                                                                            <th> Quantity </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if ($rfq_details->rfqProducts->count() > 0)
                                                                            @foreach ($rfq_details->rfqProducts as $product)
                                                                                <tr class="text-black bg-white">
                                                                                    <td>{{ $product->product_name }}</td>
                                                                                    <td>{{ $product->qty }}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @else
                                                                            <tr> No Data Available</tr>
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                                <!-- Product Details Table -->
                                                                {{-- @if (!empty($sourcing->grand_total))
                                                                    <table class="table table-bordered"
                                                                        style="width: 100%;height: auto;">
                                                                        <thead>
                                                                            <tr class="expand-switch1"
                                                                                style="padding-top: 8px;padding-bottom: 8px; background-color: #247297 !important;">
                                                                                <th width="86%" colspan="4" class="text-white"
                                                                                    style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                                                    <i class="icon1 fa fa-minus mx-3"></i> Product
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

                                                                        <tbody class="expand-div1">
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
                                                                                        {{ Str::words($item->item_name, 30) }}
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
                                                                        <table class="table table-bordered mt-2 expand-div1">
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
                                                                @endif --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel"
                                        aria-labelledby="tab2-tab">
                                        <div class="card rounded-0 mb-0">
                                            <div class="card-header rounded-0 p-1" style="background-color: #247297;">
                                                <h4 class="m-0 p-0 text-center text-white fw-normal">Regular Process</h4>
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
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center border ">
                                                                    <div class="ps-2">
                                                                        <span>Deal</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#modal_sale_profit_loss">
                                                                            <i class="ph-plus-circle ph-1x"></i> Edit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pt-1 pb-1">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center border">
                                                                    <div class="ps-2">
                                                                        <span>Deal SAS</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
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
                                                                        <span>Quotation Send</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quotation-send-{{ $rfq_details->rfq_code }}">
                                                                            <i class="ph-airplane-tilt ph-1x me-1"></i>
                                                                            @if ($rfq_details->status == 'assigned')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'deal_created')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'sas_created')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'sas_approved')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'quoted')
                                                                                Resend
                                                                            @elseif ($rfq_details->status == 'workorder_uploaded')
                                                                                Resend
                                                                            @elseif ($rfq_details->status == 'invoice_sent')
                                                                                Resend
                                                                            @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                                                Resend
                                                                            @else
                                                                                Send
                                                                            @endif
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pt-1 pb-1">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center border">
                                                                    <div class="ps-2">
                                                                        <span>Invoice Send</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice-send-{{ $rfq_details->rfq_code }}">
                                                                            <i class="ph-airplane-tilt ph-1x me-1"></i>
                                                                            @if ($rfq_details->status == 'assigned')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'deal_created')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'sas_created')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'sas_approved')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'quoted')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'workorder_uploaded')
                                                                                Send
                                                                            @elseif ($rfq_details->status == 'invoice_sent')
                                                                                Resend
                                                                            @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                                                                Resend
                                                                            @else
                                                                                Send
                                                                            @endif
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
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
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
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
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
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
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
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
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
                                                                        <button type="button"
                                                                            class="btn navigation_btn me-0"
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
                                    <div class="tab-pane fade show active border-0 text-center" id="tab3"
                                        role="tabpanel" aria-labelledby="tab3-tab">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <a href="{{ route('single-rfq.quoation_mail', $rfq_details->rfq_code) }}"
                                                    target="_blank" class="text-center main_color fw-bolder">Go to Direct
                                                    Quotation</a>
                                            </div>
                                            <ul class="nav nav-tabs d-flex justify-content-center align-items-center border-0"
                                                id="myTab" role="tablist">
                                                <li class="nav-item mb-0" role="presentation">
                                                    <button class="nav-link" id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home" type="button" role="tab"
                                                        aria-controls="home" aria-selected="true">
                                                        Quotation
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-0" role="presentation">
                                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profile" type="button" role="tab"
                                                        aria-controls="profile" aria-selected="false">
                                                        Cost Of Goods
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-0" role="presentation">
                                                    <button class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                                        data-bs-target="#messages" type="button" role="tab"
                                                        aria-controls="messages" aria-selected="false">
                                                        Source
                                                    </button>
                                                </li>
                                                <li class="nav-item mb-0" role="presentation">
                                                    <button class="nav-link" id="setting">
                                                        <i class="fa-solid fa-gear" style="font-size: 23.6px;"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <div id="mysetting">
                                                <div class="fade-setting show" id="setting-show">
                                                    <div class="row align-items-center justify-content-center">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <div class="table-responsive">
                                                                    <table class="table table-primary">
                                                                        <tbody>
                                                                            <tr class="">
                                                                                <td>
                                                                                    <select name=""
                                                                                        class="form-select" id=""
                                                                                        name="currency">
                                                                                        <option selected>Currency</option>
                                                                                        <option value="">Euro ()
                                                                                        </option>
                                                                                        <option value="">Doller ($)
                                                                                        </option>
                                                                                        <option value="">Pound ()
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="email"
                                                                                        class="form-control form-control-sm form-setting border"
                                                                                        name="rate"
                                                                                        id="exampleFormControlInput1"
                                                                                        placeholder="Currency Rate">
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox" value=""
                                                                                            id="flexCheckDefault"
                                                                                            name="tax_vat">
                                                                                        <label class="form-check-label"
                                                                                            for="flexCheckDefault">
                                                                                            TAX/VAT/GST
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="email"
                                                                                        class="form-control form-control-sm form-setting border"
                                                                                        name="tax_vat_value"
                                                                                        id="exampleFormControlInput1"
                                                                                        placeholder="Tax Vat Value">
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            name="principal_disc"
                                                                                            value=""
                                                                                            id="flexCheckDefault">
                                                                                        <label
                                                                                            class="form-check-label  w-100"
                                                                                            for="flexCheckDefault">
                                                                                            Principal Disc
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="email"
                                                                                        class="form-control form-control-sm form-setting border"
                                                                                        name="principal_disc_value"
                                                                                        id="exampleFormControlInput1"
                                                                                        placeholder="Principal Discount">
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            name="partner_disc"
                                                                                            value=""
                                                                                            id="flexCheckDefault">
                                                                                        <label class="form-check-label"
                                                                                            for="flexCheckDefault">
                                                                                            Partner Disc
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td><input type="email"
                                                                                        class="form-control form-control-sm form-setting border"
                                                                                        name="partner_disc_value"
                                                                                        id="exampleFormControlInput1"
                                                                                        placeholder="Partner Discount">
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane " id="home" role="tabpanel"
                                                    aria-labelledby="home-tab">
                                                    <form action="">
                                                        <table cellpadding="0" cellspacing="0"
                                                            style="border-collapse: collapse;width: 100%;max-width: 750px;margin: 0 auto;background-color: #f4f4f4;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                                            <tr>
                                                                <td>
                                                                    <!-- Your email content goes here -->
                                                                    <section
                                                                        style="margin-top: 0rem;margin-bottom: 0rem;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                                                        <!-- Email Header Start -->
                                                                        <div class="wrapper"
                                                                            style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px">
                                                                            <!-- Email Header Start -->
                                                                            <div>
                                                                                <table id="u_body"
                                                                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;background-color: #ae0a46;"
                                                                                    cellpadding="0" cellspacing="0">
                                                                                    <tbody style="min-width: 20rem">
                                                                                        <tr
                                                                                            style="vertical-align: top;display: flex;justify-content: space-between;align-items: center;padding: 15px;">
                                                                                            <td style="border: 0">
                                                                                                <a href="https://ngenitltd.com"
                                                                                                    target="_blank">
                                                                                                    <img src="https://i.ibb.co/qMMpQMj/Logo-White.png"
                                                                                                        alt="Ngen IT"
                                                                                                        title="Ngen IT"
                                                                                                        style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 7.5rem; padding-left: 18px;"
                                                                                                        width="60" />
                                                                                                </a>
                                                                                            </td>
                                                                                            <td style="border: 0">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                    value=" NGEN IT PTE. LTD."
                                                                                                    style="font-size: 1.125rem;font-weight: 600;margin-bottom: 0;color: #fff; padding: 0px 18px !important;">

                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                    value=" REG-NO: 20437861K"
                                                                                                    style="font-size: 16px; margin-bottom: 3px; color: #eee; padding: 0px 18px !important;">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <!-- Email Header End -->
                                                                            <!-- Email User Info Start -->
                                                                            <div>
                                                                                <table
                                                                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;overflow: hidden;">
                                                                                    <tbody style="min-width: 20rem">
                                                                                        <tr style="vertical-align: top">
                                                                                            <td
                                                                                                style="padding: 0rem 1.875rem; text-align: left">
                                                                                                <div>
                                                                                                    <div
                                                                                                        style="padding-top: 1.25rem;padding-left: 0;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent"
                                                                                                            value=" Kawsar Khan"
                                                                                                            style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent"
                                                                                                            value=" Samsung"
                                                                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent"
                                                                                                            value=" khandker@gmail.com"
                                                                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent"
                                                                                                            value=" 01754348949"
                                                                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent"
                                                                                                            value=" Dhaka, Bangladesh"
                                                                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td
                                                                                                style="width: 0.125rem;background: #eee;padding: 0px;height: 10rem;margin: 0px;position: relative;right: -30px;top: 15px;">
                                                                                                <p></p>
                                                                                            </td>
                                                                                            <td
                                                                                                style="padding: 0rem 1.875rem; text-align: right">
                                                                                                <div>
                                                                                                    <div
                                                                                                        style="padding-top: 1.25rem;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent text-end"
                                                                                                            value=" Price Quotation"
                                                                                                            style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent text-end"
                                                                                                            value=" Date : 01 January 2024"
                                                                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent text-end"
                                                                                                            value=" PQ#: NG-BD/Genexis/RV/231021"
                                                                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm bg-transparent text-end"
                                                                                                            value=" PQR#: MEO-P021(T10)-W(L1)"
                                                                                                            style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <!-- Email User Info End -->
                                                                            <!-- Main Content Start -->
                                                                            <div
                                                                                style="overflow-x: auto;padding-left: 1.875rem;padding-right: 1.875rem;padding-top: 0.9375rem;padding-bottom: 0.9375rem;">
                                                                                <table id="myTable"
                                                                                    style="border-collapse: collapse;width: 100%;border: 1px solid #eee;">
                                                                                    <thead>
                                                                                        <tr
                                                                                            style="background-color: #e5e5e5;color: #3d3d3d;border: 1px solid #eee;font-size: 13px;">
                                                                                            <th
                                                                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                                                                <button
                                                                                                    class="btn btn-primary rounded-0"
                                                                                                    onclick="addRow()"><i
                                                                                                        class="fa-solid fa-plus"></i></button>
                                                                                            </th>
                                                                                            <th
                                                                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                                                                SL</th>
                                                                                            <th
                                                                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                                                                Product Description</th>
                                                                                            <th
                                                                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                                                                Qty</th>
                                                                                            <th
                                                                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                                                                Unit Price</th>
                                                                                            <th
                                                                                                style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                                                                                Total ($)</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr
                                                                                            style="text-align: start;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                                                            <td
                                                                                                style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                                                                <button
                                                                                                    class="btn btn-danger rounded-0"
                                                                                                    onclick="deleteRow(this)"><i
                                                                                                        class="fa-regular fa-trash-can"></i></button>
                                                                                            </td>
                                                                                            <td
                                                                                                style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                                                                1</td>
                                                                                            <td
                                                                                                style="border: 1px solid #eee; padding: 8px; width: 40%">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent"
                                                                                                    value="Citrix Virtual Apps and Desktops Advanced Edition"
                                                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                            </td>
                                                                                            <td
                                                                                                style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-center"
                                                                                                    value="460"
                                                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                            </td>
                                                                                            <td
                                                                                                style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-center"
                                                                                                    value="218"
                                                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                            </td>
                                                                                            <td
                                                                                                style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                    value="$100,174.20"
                                                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <!--  -->
                                                                                <div
                                                                                    style="display: flex; justify-content: end">
                                                                                    <table
                                                                                        style="border-collapse: collapse;width: 100%;font-size: 13px;border: 1px solid #eee;">
                                                                                        <tr
                                                                                            style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;">
                                                                                            <th
                                                                                                style="width: 85%;text-align: end;padding: 0.5rem;color: #3d3d3d;font-weight: 400;">
                                                                                                Sub Total
                                                                                            </th>
                                                                                            <th
                                                                                                style="width: 15%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                    value="$85,148.1"
                                                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div>
                                                                                    <div
                                                                                        style="display: flex; justify-content: end">
                                                                                        <table
                                                                                            style="border-collapse: collapse;width: 100%;border: none;">
                                                                                            <tr
                                                                                                style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                                                                <td
                                                                                                    style="width: 85%;text-align: end;padding: 10px;color: #3d3d3d;">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-end"
                                                                                                        value="Special Discount - 10 %"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                                <td
                                                                                                    style="width: 15%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-end"
                                                                                                        value="-5,008.71"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div
                                                                                    style="display: flex; justify-content: end">
                                                                                    <table
                                                                                        style="border: 1px solid #eee;border-collapse: collapse;background-color: #eee;width: 100%;font-size: 13px;">
                                                                                        <tr
                                                                                            style="text-align: end;padding: 0.5rem;border: 1px solid #eee;color: #3d3d3d;font-size: 13px;">
                                                                                            <th
                                                                                                style="width: 85%;text-align: end;padding: 0.5rem;color: #3d3d3d;border: none;">
                                                                                                Grand Total
                                                                                            </th>
                                                                                            <th
                                                                                                style="width: 15%;text-align: end;padding: 0.5rem;color: #3d3d3d;text-align: end;border-left: 1px solid #eee;">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                    value="$85,148.1"
                                                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div
                                                                                    style="display: flex;justify-content: end;margin-top: 1rem;margin-bottom: 1rem;">
                                                                                    <table
                                                                                        style="border-collapse: collapse;width: 60%;margin: auto;font-size: 13px;border: 1px solid #eee;">
                                                                                        <tr
                                                                                            style="width: 6%;text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border-bottom: 1px solid #eee;">
                                                                                            <th
                                                                                                style="text-align: center;padding: 0.5rem;color: #3d3d3d;font-weight: 400;">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm bg-transparent text-center"
                                                                                                    value="GST - 8% Not included. It may apply."
                                                                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div>
                                                                                    <div>
                                                                                        <table
                                                                                            style="margin-top: 0.5rem;border: 1px solid #eee;border-collapse: collapse;width: 100%;">
                                                                                            <tr
                                                                                                style="text-align: start;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                                                                                <th colspan="2"
                                                                                                    style="text-align: center;padding: 0.5rem;background-color: #e5e5e5;color: #3d3d3d;border: 1px solid #eee;">
                                                                                                    Terms & Conditions
                                                                                                </th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td
                                                                                                    style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Validity :"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                                <td
                                                                                                    style="padding: 0.3125rem 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">

                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-center"
                                                                                                        value=" 7 Day from the PQ date on regular price.Offer may change on the bank forex rate"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td
                                                                                                    style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">

                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Payment :"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                                <td
                                                                                                    style="padding: 2px 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="100% Advanced payment with Work Order. Order cannot be cancelled once issues"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">

                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td
                                                                                                    style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">

                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Delivery :"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                                <td
                                                                                                    style="padding: 2px 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Payment must be made through Telegraphic Transfer (TT) or Wire Transfer"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td
                                                                                                    style="padding: 0.3125rem 10px;font-size: 13px;color: #3d3d3d;font-weight: 600;width: 20%;">

                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Installation :"
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                                <td
                                                                                                    style="padding: 2px 10px;font-size: 13px;font-family: 'Raleway', sans-serif;color: #3d3d3d;">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="We may reject order on any dispute in
                                                                                            principal price
                                                                                            or product non-availability."
                                                                                                        style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Main Content End -->
                                                                            <!-- Column Area -->
                                                                            <div>
                                                                                <table id="u_body"
                                                                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                                                                                    cellpadding="0" cellspacing="0">
                                                                                    <tbody style="min-width: 320px">
                                                                                        <tr>
                                                                                            <td style="padding: 0">
                                                                                                <table
                                                                                                    style="width: 100%; border-collapse: collapse">
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td
                                                                                                                style="padding: 0.9375rem;padding-left: 1.875rem;padding-right: 1.875rem;background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);background-size: cover;">
                                                                                                                <table
                                                                                                                    style="width: 100%; border-collapse: collapse">
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td
                                                                                                                                style="border: 1px solid transparent;text-align: start;color: #ffffff;">
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                                                                                    value="Thank You"
                                                                                                                                    style="font-size: 13px;font-weight: 600;margin: 0;color: #000; padding: 0px !important;"">
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                                                                                    value="Kawsar  Khan"
                                                                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    class="form-control form-control-sm bg-transparent text-start"
                                                                                                                                    value="Manager, Business"
                                                                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                style="text-align: end; color: #ffffff; border: 1px solid transparent;">
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                                                    value="sales@ngenitltd.com"
                                                                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                                                    value="+880 156845 986"
                                                                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                                                                    value="+880 156845 987"
                                                                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <!-- Column Area End -->
                                                                            <!-- Email Footer -->
                                                                            <div>
                                                                                <table id="u_body"
                                                                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                                                                                    cellpadding="0" cellspacing="0">
                                                                                    <tbody style="min-width: 320px">
                                                                                        <tr>
                                                                                            <div
                                                                                                style="text-align: center;background-color: #ae0a46;padding: 0.9375rem;">
                                                                                                <a class=""
                                                                                                    href="www.ngenitltd.com"
                                                                                                    style="color: #ffff;font-size: 1.125rem;text-align: center;letter-spacing: 4px;">www.ngenitltd.com</a>
                                                                                            </div>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <!-- Email Footer End-->
                                                                        </div>
                                                                        <!-- ... -->
                                                                    </section>
                                                                </td>

                                                            </tr>
                                                        </table>
                                                        <div>
                                                            <div class="d-flex justify-content-center align-items-center py-3">
                                                                <div>
                                                                    <div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                Send With Attachment.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-center align-items-center py-3 pt-0">
                                                                <button type="submit" class="btn navigation_btn"><i
                                                                        class="fa-solid fa-person-circle-check pe-2"></i>
                                                                    Submit for Approval</button>
                                                                <button type="submit" class="btn navigation_btn"><i
                                                                        class="fa-regular fa-circle-check pe-2"></i>Send
                                                                    Quotation</button>
                                                                {{-- <button type="submit" class="btn navigation_btn"><i
                                                                                                                                   class="fa-regular fa-circle-check pe-2"></i>Resend</button>
                                                                                                                           <button type="submit" class="btn navigation_btn"><i
                                                                                                                                   class="fa-regular fa-circle-check pe-2"></i>Share On
                                                                                                                               What's App</button> --}}
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane show active" id="profile" role="tabpanel"
                                                    aria-labelledby="profile-tab">
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table id="myTable" class="table table-borderd"
                                                                style="font-size: 10px !important">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-white"
                                                                            style="background-color: #5B0F00">
                                                                            <button
                                                                                class="border-0 p-0 bg-transparent text-white"
                                                                                onclick="addTableRow()"><i
                                                                                    class="fa-solid fa-plus"></i></button>
                                                                        </th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #5B0F00">Sl </th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #5B0F00">Item</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #5B0F00">Qty</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Pr. Cost</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Year</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Total</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000"
                                                                            class="text-center">Pr. Disc.</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Total</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Office</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Profit</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Others</th>
                                                                        <th rowspan="2" class="text-center"
                                                                            style="background-color: #EA9999">Subtotal</th>
                                                                        <th class="text-white text-center"
                                                                            style="background-color: #800000">Tax/Vat/GST
                                                                        </th>
                                                                        <th rowspan="2" class="text-white"
                                                                            style="background-color: #CC0000">EU Price</th>
                                                                        <th colspan="2" class="text-white text-center"
                                                                            style="background-color: #800000">Partner Price
                                                                        </th>
                                                                    </tr>
                                                                    <tr style="background-color: #EAF1DD">
                                                                        <th class="text-end pe-3" colspan="5"></th>
                                                                        <th class="text-center pe-3">0%</th>
                                                                        <th class="text-center">10%</th>
                                                                        <th class="text-center">10%</th>
                                                                        <th class="text-center">10%</th>
                                                                        <th class="text-center">10%</th>
                                                                        <th class="text-center">10%</th>
                                                                        <th class="text-center">10%</th>
                                                                        <th class="textc-center">11%</th>
                                                                        <th class="text-center">Dis%</th>
                                                                        <th class="text-center">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="table_bottom_area"
                                                                    style="background-color: #D9D9D9">
                                                                    <tr class="">
                                                                        <td>
                                                                            <button
                                                                                class="border-0 p-0 text-danger bg-transparent"
                                                                                onclick="deleteRow(this)"
                                                                                title="Add List Items"><i
                                                                                    class="fa-regular fa-trash-can"></i></button>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="OPC UA Tunneller (UA+DA+HDA+A&E)"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="$4230"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td class="text-center"><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td class="text-center"><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Tk.537,210"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody class="table_bottom_area"
                                                                    style="background-color: #CCCCCC">
                                                                    <tr class="">
                                                                        <td>
                                                                            <button
                                                                                class="border-0 p-0 bg-transparent text-white"
                                                                                title="Add List Amount"
                                                                                onclick="AddTableRowTwoBottom()"><i
                                                                                    class="fa-regular fa-plus"></i></button>
                                                                        </td>
                                                                        <td>-</td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                        <td colspan="2" class="text-center">
                                                                            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th class="text-center pe-3" colspan="6"
                                                                            style="background-color: #A6A6A6; color: #fff">
                                                                            Total:</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #A6A6A6; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #BFBFBF; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #BFBFBF; color: #983c3c">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #BFBFBF; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #BFBFBF; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #BFBFBF; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #666666; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3"
                                                                            style="background-color: #434343; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3 text-center"
                                                                            style="background-color: #434343; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                        <th class="text-end pe-3 text-center"
                                                                            colspan="2"
                                                                            style="background-color: #434343; color: #fff">
                                                                            Tk. 1,510,340</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="messages" role="tabpanel"
                                                    aria-labelledby="messages-tab">
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table class="table table-borderd"
                                                                style="font-size: 12px !important">
                                                                <thead class="text-white"
                                                                    style="background-color: #800000 !important;">
                                                                    <tr>
                                                                        <th>Sl #</th>
                                                                        <th>Item</th>
                                                                        <th>Source 1</th>
                                                                        <th>Price In BDT</th>
                                                                        <th>Source 2</th>
                                                                        <th>Price In BDT</th>
                                                                        <th>Source 3</th>
                                                                        <th>Price In BDT</th>
                                                                        <th>Source 4</th>
                                                                        <th>Price In BDT</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="table-group-divider">
                                                                    <tr class="">
                                                                        <td>1</td>
                                                                        <td>"Dell Latitude Rugged 5430 Laptop: 11th Gen.
                                                                        </td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>12,305 TK</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot class="table-group-divider"
                                                                    style="background-color: #BFBFBF !important;">
                                                                    <tr class="">
                                                                        <td>1</td>
                                                                        <td>"Dell Latitude Rugged 5430 Laptop: 11th Gen.
                                                                        </td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>Hp Store</td>
                                                                        <td>12,305 TK</td>
                                                                        <td>12,305 TK</td>
                                                                    </tr>
                                                                </tfoot>
                                                                <tfoot>

                                                                </tfoot>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel"
                                        aria-labelledby="tab4-tab">
                                        <div class="card rounded-0 mb-0">
                                            <div class="card-header rounded-0 p-1" style="background-color: #247297;">
                                                <h4 class="m-0 p-0 text-center text-white fw-normal">Department Wise
                                                    Actions</h4>
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
                                                                    <span class="badge bg-success">Accounts
                                                                        Completed</span>
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
                                                                            <button type="button"
                                                                                class="btn navigation_btn me-0"
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
        <script>
            function toggleVisibility() {
                var settingShow = document.getElementById('setting-show');
                var button = document.getElementById('setting');
                if (settingShow.classList.contains('show')) {
                    settingShow.classList.remove('show');
                    // Delay setting display to 'none' to allow transition to complete
                    setTimeout(function() {
                        settingShow.style.display = 'none';
                        button.classList.remove('active');
                    }, 500); // Duration should match the transition time
                } else {
                    settingShow.style.display = 'block';
                    // Trigger reflow to ensure the transition occurs
                    settingShow.offsetHeight; // Force reflow
                    settingShow.classList.add('show');
                    button.classList.add('active');
                }
            }

            document.getElementById('setting').addEventListener('click', toggleVisibility);
        </script>
        <script>
            function AddTableRowTwoBottom() {
                var tableBodies = document.getElementsByClassName("table_bottom_area");
                var tableBody = tableBodies[tableBodies.length - 1]; // Select the last tbody
                var newRow = tableBody.insertRow(tableBody.rows.length);
                newRow.innerHTML =
                    `
            <tr class="">
                <td>
                    <button class="border-0 p-0 bg-transparent text-danger rounded-0" onclick="deleteTableRowTwo(this)" title="Delete List Amount"><i class="fa-regular fa-trash-can"></i></button>
                </td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="-"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Packing Charge"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="0"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="$0"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="$0"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="170 TK"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td class="text-center"><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                <td colspan="2" class="text-center"><input type="text"
                                                                                                        class="form-control form-control-sm bg-transparent text-start"
                                                                                                        value="Tk.30,480"
                                                                                                        style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
            </tr>
        `;
            }

            function deleteTableRowTwo(btn) {
                var row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }
        </script>
        <script>
            function addTableRow() {
                var table = document.getElementsByClassName("table-borderd")[0].getElementsByTagName('tbody')[0];
                var newRow = table.insertRow(table.rows.length);
                newRow.innerHTML =
                    `
        <td>
            <button class="border-0 p-0 bg-transparent text-danger rounded-0" onclick="deleteTableRow(this)" title="Delete List Items"><i class="fa-regular fa-trash-can"></i></button>
        </td>
        <td>${table.rows.length}</td>
        <td>
            <input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        <td><input type="text"
                                                                                class="form-control form-control-sm bg-transparent text-start"
                                                                                value="Remitance"
                                                                                style="font-size: 10px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
        `;
            }

            function deleteTableRow(btn) {
                var row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }
        </script>

        <script>
            function addRow() {
                var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
                var newRow = table.insertRow(table.rows.length);
                newRow.innerHTML =
                    `<td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><button class="btn btn-danger rounded-0" onclick="deleteRow(this)"><i class="fa-regular fa-trash-can"></i></button></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;">${table.rows.length}</td>
                                <td style="border: 1px solid #eee; padding: 8px; width: 40%"><input type="text" class="form-control form-control-sm bg-transparent" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><input type="text" class="form-control form-control-sm bg-transparent text-center" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><input type="text" class="form-control form-control-sm bg-transparent text-center" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>
                                <td style="border: 1px solid #eee;padding: 0.5rem;text-align: center;"><input type="text" class="form-control form-control-sm bg-transparent text-end" value="" style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;"></td>`;
            }

            function deleteRow(btn) {
                var row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }
        </script>
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
