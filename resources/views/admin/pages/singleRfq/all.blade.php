@extends('admin.master')
@section('content')
    <style>
        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px;
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #247297;
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #247297;
            ;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 42px;
            position: relative;
            border-radius: 100%;
            background: #ddd;
            color: #ff2b00;
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }
    </style>

    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


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
            <h4 class="text-center" style="color: #247297;">{{ $rfq_details->rfq_code }}</h4>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
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
                                                    <i class="icon-user-check icon-1x" style="color: #247297;"></i>
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


            <div class="row  mx-2 rounded " id="exTab3">
                <div class="d-flex justify-content-center align-items-center p-0 w-25 mx-auto"
                    style="border-bottom: 1px solid #247297;">
                    <ul class="nav nav-tabs border-0 d-flex justify-content-center">
                        <li class="nav-item ">
                            <a href="#client_details" class=" nav-link active cat-tab1 p-1" data-bs-toggle="tab">
                                <p class="m-0 p-1">
                                    Client Details <span class="ms-2">|</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#product_details" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                <p class="m-0 p-1">
                                    Product Details <span class="ms-2">|</span></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row rounded px-2 mt-1">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="client_details">
                        <div class="d-flex align-items-center py-2">
                            {{-- Add Details Start --}}
                            <div class="text-success nav-link cat-tab3"
                                style="position: relative;
                                z-index: 999;
                                margin-bottom: -40px;">
                                {{-- <a href="{{ route('knowledge.create') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add Solution Details">
                                            <i class="ph-plus icons_design"></i> </span>
                                        <span class="ms-1" style="color: #247297;">Add</span>
                                    </div>
                                </a> --}}
                                <div class="text-center" style="margin-left: 520px">
                                    <h5 class="ms-1" style="color: #247297;">RFQ Details</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                        </div>
                        {{-- Save Table --}}
                        <table class="table sourcingDT border table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th width="10%">Client Type</th>
                                    <th width="20%">Name</th>
                                    <th width="15%">Company Name</th>
                                    <th width="10%">Asking Quantity </th>
                                    <th width="15%">Phone Number</th>
                                    <th width="10%">Total Price</th>
                                    <th width="10%" class="text-center">Assigned Sales Manager (L1) </th>
                                    <th width="10%" class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{ ucfirst($rfq_details->client_type) }}</td>
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
                        <div class="table-responsive text-center w-50 mx-auto">

                            @if (!empty($sourcing->grand_total))
                                <table class="table table-bordered" style="width: 100%;height: auto;">
                                    <thead>
                                        <tr class="expand-switch1" style=" padding-top:8px;padding-bottom:8px;">
                                            <th width="86%" colspan="4" class="text-white"
                                                style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                <i class="icon1 fa fa-plus mx-3"></i> Product Details
                                            </th>


                                            <th width="14%" class="text-center" style="border:none;">
                                                @if ($rfq_details->status == 'rfq_created')
                                                @elseif ($rfq_details->status == 'assigned')

                                                @elseif ($rfq_details->status == 'deal_created')
                                                @else
                                                    <a href="javascript:void(0);" class="text-white" title="Show SAS"
                                                        data-bs-toggle="modal" data-bs-target="#show-sas">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                @endif
                                            </th>
                                        </tr>

                                    </thead>

                                    <tbody class="expand-div1 d-none">
                                        <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                            <th width="40%">Product Description</th>
                                            <th width="14%">Quantity</th>

                                            @if ($rfq_details->regular == '1')
                                                <th width="10%" class="rg_discount d-none">Discount </th>
                                                <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                            @else
                                                <th width="10%" class="rg_unit">Unit Price </th>
                                            @endif

                                            <th width="15%">Unit Total</th>
                                        </tr>

                                        @foreach ($deal_products as $key => $item)
                                            <tr>
                                                <td>
                                                    <a class="text-black"
                                                        title="{{ $item->item_name }}">{{ Str::limit($item->item_name, 28) }}</a>
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->qty }}</td>
                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none">
                                                        {{ $item->regular_discount }} % </th>
                                                    <th width="10%" class="rg_discount d-none">
                                                        {{ number_format($item->sales_price / $item->qty, 2) }}
                                                    </th>
                                                @else
                                                    <th width="10%" class="rg_unit">
                                                        {{ number_format($item->sales_price / $item->qty, 2) }}
                                                    </th>
                                                @endif

                                                <td class="text-center">$
                                                    {{ $item->sales_price }}</td>
                                            </tr>
                                        @endforeach


                                        <tr>
                                            <th> </th>

                                            @if ($rfq_details->regular == '1')
                                                <th width="10%" class="rg_discount d-none"></th>
                                                <th width="10%" class="rg_discount d-none"></th>
                                            @else
                                                <th width="10%" class="rg_unit"></th>
                                            @endif
                                            <td class="text-center"> Sub Total </td>
                                            <td class="text-center"> $
                                                {{ $sourcing->sub_total_sales }}</td>
                                        </tr>
                                        @if ($rfq_details->special == '1')
                                            <tr class="special_discount">
                                                <th> </th>
                                                @if ($rfq_details->regular == '1')
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                    <th width="10%" class="rg_discount d-none"></th>
                                                @else
                                                    <th width="10%" class="rg_unit"></th>
                                                @endif
                                                <td class="text-center">
                                                    Special discount </td>
                                                <td class="text-center">
                                                    {{ $sourcing->special_discount }} %</td>
                                                <td class="text-center"> $
                                                    {{ $sourcing->special_discounted_sales }}</td>
                                            </tr>
                                        @endif



                                        <tr>
                                            <th> </th>
                                            @if ($rfq_details->regular == '1')
                                                <th width="10%" class="rg_discount d-none"></th>
                                                <th width="10%" class="rg_discount d-none"></th>
                                            @else
                                                <th width="10%" class="rg_unit"></th>
                                            @endif
                                            <th class="text-center"> Total </th>
                                            <td class="text-center">
                                                $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                        </tr>
                                    </tbody>



                                </table>
                                @if ($rfq_details->tax_status == '1')
                                    <table class="table table-bordered mt-2 expand-div1 d-none">
                                        <th colspan="3" width="80%"> Tax / VAT</td>
                                        <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                        <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}</td>
                                        </tr>

                                    </table>
                                @endif
                            @else
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="expand-switch" style="padding-top:8px;padding-bottom:8px;">
                                            <th width="100%" colspan="2" class="text-white"
                                                style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                <i class="icon3 fa fa-plus mx-3"></i> Product Details
                                            </th>
                                            <th width="100%" class="text-center" style="border:none;">
                                                @if ($rfq_details->status == 'rfq_created')
                                                @elseif ($rfq_details->status == 'assigned')

                                                @elseif ($rfq_details->status == 'deal_created')
                                                @else
                                                    <a href="javascript:void(0);" class="text-white" title="Show SAS"
                                                        data-bs-toggle="modal" data-bs-target="#show-sas">
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

            <div class="container">
                <div class="row gx-1">
                  <div class="col">
                    <div class="text-center main_bg py-2 text-white">
                        <span>Sales</span>
                        @if ($rfq_details->rfq_type == 'accounts')
                            <span class="badge bg-success">Sale Completed</span>
                        @elseif ($rfq_details->rfq_type == 'purchase')
                            <span class="badge bg-success">Sale Completed</span>
                        @else
                            <span class="badge bg-warning">On Going</span>
                        @endif
                    </div>
                    <div class="bg-white">
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Sales Profit Loss</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
                                        data-bs-target="#modal_sale_profit_loss">
                                        <i class="ph-plus-circle ph-1x"></i> Add
                                    </button>
                                    @include('admin.pages.singleRfq.sales-modal')
                                </div>
                            </div>
                        </div>
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Sales Forecast</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
                                        data-bs-target="#modal_sale_forecast">
                                        <i class="ph-plus-circle ph-1x"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Commercial Documents</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
                                        data-bs-target="#modal_commercial_documents">
                                        <i class="ph-plus-circle ph-1x"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Commercial Documents</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
                                        data-bs-target="#modal_commercial_documents">
                                        <i class="ph-plus-circle ph-1x"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center main_bg py-2 text-white">
                        <span>Accounts</span>
                        &nbsp;
                        @if ($rfq_details->rfq_type == 'purchase')
                            <span class="badge bg-success">Accounts Completed</span>
                        @elseif ($rfq_details->rfq_type == 'accounts')
                            <span class="badge bg-warning">On Going</span>
                        @else
                        @endif
                    </div>
                    <div class="bg-white">
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Accounts Profit Loss</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
                                        data-bs-target="#modal_account_profitLoss">
                                        <i class="ph-plus-circle ph-1x"></i> Add
                                    </button>
                                    @include('admin.pages.singleRfq.accounts-modal')
                                </div>
                            </div>
                        </div>
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Payable</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
                                        data-bs-target="#modal_account_payable">
                                        <i class="ph-plus-circle ph-1x"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Receivable</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
                                        data-bs-target="#modal_account_receivable">
                                        <i class="ph-plus-circle ph-1x"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center main_bg py-2 text-white">
                        <span>Purchase</span>
                    </div>
                    <div class="bg-white">
                        <div class="px-3 pt-1 pb-1">
                            <div class="row d-flex align-items-center border ">
                                <div class="col-sm-8">
                                    <span>Receivable</span>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" class="btn navigation_btn" data-bs-toggle="modal"
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
    <!-- /content area -->
    <!-- /inner content -->

    </div>

    <!-------Modals----->

    <!---Deal Show modal--->
    <div id="show-deals-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                    @endphp
                    <h5 class="modal-title">Deal Details : {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7 p-1 m-0">


                    <div class="row mb-3">
                        <div class="card">

                            <div class="row">
                                <table class="table table-bordered table-striped p-1">
                                    <thead>
                                        <tr>
                                            <th>
                                                Client Type : {{ ucfirst($rfq_details->client_type) }}
                                            </th>
                                            <th>
                                                Name : {{ ucfirst($rfq_details->name) }}
                                            </th>
                                            <th>
                                                Company Name : {{ ucfirst($rfq_details->company_name) }}
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Asking Quantity : @if (App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') > 0)
                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                @else
                                                    {{ $rfq_details->qty }}
                                                @endif
                                            </th>
                                            <th>Phone Number : {{ $rfq_details->phone }}</th>
                                            <th>
                                                Total Price : $
                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Assigned Sales Manager (L1) :
                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
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

                                            </th>
                                            <th>
                                                Status : <span
                                                    class="badge bg-success p-1">{{ ucfirst($rfq_details->status) }}</span>


                                            </th>
                                            <th></th>
                                        </tr>

                                    </thead>
                                </table>
                            </div>
                            <div class="row">
                                <table class="table table-bordered table-striped p-1">
                                    <thead>
                                        @if (count($deal_products) > 0)
                                            <tr>
                                                <th> Product Name</th>
                                                <th> Quantity </th>
                                                <th> Sale Price </th>
                                            </tr>

                                            @foreach ($deal_products as $item)
                                                <tr class="bg-gray text-white">
                                                    <th>{{ $item->item_name }}</th>
                                                    <th>{{ $item->qty }}</th>
                                                    <th>{{ $item->sub_total_cost }}</th>
                                                </tr>
                                            @endforeach
                                        @else
                                        @endif
                                    </thead>
                                </table>
                            </div>

                        </div>
                    </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Deal Show modal--->

    <!---Assign Manager modal--->
    <div id="assign-manager-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                    @endphp
                    <h5 class="modal-title">Assign Sales Manager For RFQ No : {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7 px-3  m-0">

                    <form method="post" action="{{ route('assign.salesman', $rfq_details->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <span class="text-info fw-bold">Client Details</span>
                                <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-4">
                                            <span class="text-info"> Client Type</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            @if (!empty($rfq_details->client_type))
                                                :{{ ucfirst($rfq_details->client_type) }}
                                            @else
                                                : Online
                                            @endif
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-4">
                                            <span class="text-info"> Name </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            : {{ ucfirst($rfq_details->name) }}
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <span class="text-info"> Company </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            : {{ ucfirst($rfq_details->company_name) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <span class="text-info fw-bold">Client Details Part 2</span>
                                <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">

                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-4">
                                            <span class="text-info">Quantity </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            : {{ $rfq_details->qty }}
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-4">
                                            <span class="text-info">Phone </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            : {{ $rfq_details->phone }}
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <span class="text-info">Called </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <span class="">:</span>
                                            @if ($rfq_details->call == 1)
                                                Need To be Called.
                                            @else
                                            @endif
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <span class="text-info fw-bold">Assigne Sales Manager</span>
                                <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">
                                    {{--  --}}
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <span class="text-info"> Product </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            :
                                            {{ App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name') }}
                                        </div>
                                    </div>
                                    <div class="row  d-flex align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <span>Assigne </span>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="me-2">:</span><a href="javascript:void(0);"
                                                class="btn navigation_btn editRfquser">
                                                <div class="d-flex align-items-center ">
                                                    <i class="ph-note-pencil me-1" style="font-size: 10px;"></i>
                                                    <span>Now </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    {{--  --}}


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 Rfquser mt-2" style="display:none">
                                <span class="text-info fw-bold">Sales Manager</span>
                                <div class="py-2 px-2 bg-light rounded" style="border-top: 1px solid #247297;">
                                    <div class="row  p-2 ">
                                        <div class="col-lg-4">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-sm-4">
                                                    <span>Leader - L1</span>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="sales_man_id_L1" class="form-control select"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-sm-4">
                                                    <span>Team - T1</span>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="sales_man_id_T1" class="form-control select"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-sm-4">
                                                    <span>Team - T2</span>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="sales_man_id_T2"
                                                        class="form-control form-select-sm select"
                                                        data-container-css-class="select-sm" data-placeholder="Chose Type"
                                                        required>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0 pb-2 pe-3">
                            <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                style="padding: 4px 9px;">Submit</button>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Assign Manager modal--->

    <!---Send Quotation modal--->
    <div id="quotation-send-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                    @endphp
                    <h5 class="modal-title">Send Quotation : {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border p-1 m-0">

                    <form method="post" action="{{ route('quotation.send', $rfq_details->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="card">
                                <div class="row">
                                    <table class="table table-bordered table-striped p-1">
                                        <thead>
                                            <tr>
                                                <th> Product Name</th>
                                                <th> Quantity </th>
                                                <th> Sale Price </th>
                                            </tr>

                                            @if ($deal_products)
                                                @foreach ($deal_products as $item)
                                                    <tr class="bg-gray text-white">
                                                        <th>{{ $item->item_name }}</th>
                                                        <th>{{ $item->qty }}</th>
                                                        <th>{{ $item->sub_total_cost }}</th>
                                                    </tr>
                                                @endforeach
                                            @endif



                                        </thead>
                                    </table>
                                </div>
                                <div class="row">
                                    <table class="table table-bordered table-striped p-1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Client Type : {{ ucfirst($rfq_details->client_type) }}
                                                </th>
                                                <th>
                                                    Name : {{ ucfirst($rfq_details->name) }}
                                                </th>
                                                <th>
                                                    Company Name : {{ ucfirst($rfq_details->company_name) }}
                                                </th>
                                            </tr>
                                            {{-- <tr>
                                                        <th colspan="3" style="background: #7e7d7c">
                                                            <p class="text-center pt-1 text-white">Product Name : {{App\Models\Admin\DealSas::where('id' , $rfq_details->product_id)->value('name')}}</p>
                                                        </th>
                                                    </tr> --}}
                                            <tr>
                                                <th>Asking Quantity :
                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                </th>
                                                <th>Phone Number : {{ $rfq_details->phone }}</th>
                                                <th>
                                                    Total Price : $
                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Assigned Sales Manager (L1) :
                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
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

                                                </th>
                                                <th>
                                                    Status : <span
                                                        class="badge bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" style="background: #7e7d7c">
                                                    <p class="text-center pt-1 text-white">Send Quotation To : <input
                                                            type="email" name="email" id=""
                                                            value="{{ $rfq_details->email }}"></p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button type="submit" class="btn btn-primary">Send Quotation <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Send Quotation modal--->


    <!---Send Invoice modal--->
    <div id="invoice-send-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                    @endphp
                    <h5 class="modal-title">Send Invoice For {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7 m-0 p-1">
                    <form method="post" action="{{ route('invoice.send', $rfq_details->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="card">
                                <div class="table-responsive">

                                    @if (!empty($sourcing->grand_total))
                                        <table class="table table-bordered" style="width: 100%;height: auto;">


                                            <tbody>
                                                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                    <th width="40%">Product Description</th>
                                                    <th width="14%">Quantity</th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">Discount </th>
                                                        <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">Unit Price </th>
                                                    @endif

                                                    <th width="15%">Unit Total</th>
                                                </tr>

                                                @foreach ($deal_products as $key => $item)
                                                    <tr>
                                                        <td>
                                                            <a class="text-black"
                                                                title="{{ $item->item_name }}">{{ Str::limit($item->item_name, 28) }}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $item->qty }}</td>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ $item->regular_discount }} % </th>
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @else
                                                            <th width="10%" class="rg_unit">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @endif

                                                        <td class="text-center">$
                                                            {{ $item->sales_price }}</td>
                                                    </tr>
                                                @endforeach


                                                <tr>
                                                    <th> </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td class="text-center"> Sub Total </td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->sub_total_sales }}</td>
                                                </tr>
                                                @if ($rfq_details->special == '1')
                                                    <tr class="special_discount">
                                                        <th> </th>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                        @else
                                                            <th width="10%" class="rg_unit"></th>
                                                        @endif
                                                        <td class="text-center">
                                                            Special discount </td>
                                                        <td class="text-center">
                                                            {{ $sourcing->special_discount }} %</td>
                                                        <td class="text-center"> $
                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                    </tr>
                                                @endif



                                                <tr>
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <th class="text-center"> Total </th>
                                                    <td class="text-center">
                                                        $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                                </tr>
                                            </tbody>



                                        </table>

                                        @if ($rfq_details->tax_status == '1')
                                            <table class="table table-bordered mt-2 expand-div1 d-none">
                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}
                                                </td>
                                                </tr>

                                            </table>
                                        @endif

                                    @endif
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header m-0 p-0" style="background: black;">
                                    <h6 class="mb-0 text-center p-0 text-white">Send Invoice</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="m-0 text-center">Work Order No </h6>
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="work_order_no"
                                                    value="{{ $rfq_details->work_order_no }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="m-0 text-center">Email Id to Send Invoice</h6>
                                            </div>
                                            <div class="col-sm-12 m-auto" style="width:60%;">
                                                <input type="text" class="form-control" name="email"
                                                    value="{{ $rfq_details->email }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary text-center">
                                <button type="submit" class="btn btn-primary">Send Invoice <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Send Invoice modal--->

    <!---Show SAS modal--->
    @if ($sourcing != null)
        <div id="show-sas" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title">SAS Details : {{ $rfq_details->rfq_code }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body border br-7 p-1 m-0">
                        <div class="content">

                            <div class="center d-none">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="regular" value="1"
                                        id="flexRadioDefault1" {{ $rfq_details->regular == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Regular Discount
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="special" value="1"
                                        id="flexRadioDefault1" {{ $rfq_details->special == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Special Discount
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tax_status" value="1"
                                        id="flexRadioDefault1" {{ $rfq_details->tax_status == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tax / VAT
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="m-auto" style="width:80%;">
                                            <div class="bg-dark mb-2">
                                                <table class="text-center table table-hover br-7">
                                                    <thead>
                                                        <tr class="br-7">
                                                            <th class="text-white">RFQ Code :
                                                                {{ $rfq_details->rfq_code }}
                                                                <input type="hidden" name="rfq_code"
                                                                    value="{{ $rfq_details->rfq_code }}">
                                                                <input type="hidden" name="rfq_id"
                                                                    value="{{ $rfq_details->id }}">
                                                            </th>
                                                            <th class="text-white">SAS Create Date :
                                                                {{ $rfq_details->create_date }}

                                                            </th>
                                                            <th class="text-white text-center">
                                                                This Deal is for our @if ($rfq_details->client_type == 'partner')
                                                                    Partner
                                                                @else
                                                                    Client
                                                                @endif
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="table-responsive">


                                            <div class="mb-2">
                                                <table class="text-center table table-bordered table-hover mb-3">
                                                    <thead>
                                                        <tr class="bg-gray">
                                                            <th width="40%">Item Name</th>
                                                            <th width="10%">Quantity</th>
                                                            <th width="10%">Unit Price</th>
                                                            <th width="10%">Cost (Cog Price)</th>
                                                            <th width="10%" class="rg_discount d-none">Regular Discount
                                                            </th>
                                                            <th width="10%" class="rg_discount d-none">Discounted Sales
                                                                Price</th>
                                                            <th width="10%">Unit Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($deal_products as $item)
                                                            <tr class="thd">
                                                                <td class="border-none">
                                                                    {{ $item->item_name }}
                                                                </td>

                                                                <td class="border-none">
                                                                    {{ $item->qty }}
                                                                </td>
                                                                <td class="border-none">
                                                                    {{ $item->unit_price }}
                                                                </td>
                                                                <td class="border-none">
                                                                    {{ $item->cog_price }}
                                                                </td>
                                                                <td class="rg_discount d-none border-none">
                                                                    {{ $item->regular_discount }}
                                                                </td>

                                                                <td class="rg_discount d-none border-none">
                                                                    {{ $item->discounted_sales }}
                                                                </td>
                                                                <td class="border-none">
                                                                    {{ $item->sales_price }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        <tr>


                                                            <td class="border-none" width="45%" colspan="3">Sub
                                                                Total</td>

                                                            <td class="border-none">
                                                                {{ $sourcing->sub_total_cost }}
                                                            </td>
                                                            <td class="rg_discount d-none border-none"></td>
                                                            <td class="rg_discount d-none border-none">
                                                                {{ $sourcing->sub_total_discounted_sales }}</td>

                                                            <td class="border-none">{{ $sourcing->sub_total_sales }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="text-center table table-bordered table-hover">
                                                    <thead>
                                                        <tr class="special_discount d-none">
                                                            <th class="border-none" colspan="5" width="67%">Special
                                                                Discount</th>
                                                            <th class="border-none">{{ $sourcing->special_discount }} %
                                                            </th>
                                                            <th class="border-none">
                                                                {{ $sourcing->special_discounted_sales }}</th>
                                                        </tr>
                                                        <tr class="tax d-none">

                                                            <th class="border-none" colspan="5" width="67%">Tax/VAT
                                                            </th>
                                                            <th class="border-none">{{ $sourcing->tax }} %</th>
                                                            <th class="border-none">{{ $sourcing->tax_sales }}</th>
                                                        </tr>
                                                        <tr>

                                                            <th class="border-none" colspan="5" width="67%">Grand
                                                                Total (With Everything)</th>
                                                            <th class="border-none" width="18%"></th>

                                                            <th class="border-none" width="15%">
                                                                {{ $sourcing->grand_total }}</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>

                                            <div class="m-auto" style="width:60%;">
                                                <table class="text-center table table-bordered table-hover">
                                                    <tbody class="tb accordion padding text-center"
                                                        id="accordion_expanded">
                                                        <tr class="bg-dark accordion_expense">
                                                            <td class="text-white" colspan="3">
                                                                <i class="ph-arrow-down"></i>&nbsp;&nbsp; Expenses
                                                            </td>
                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none">Bank & Remittance Charge - (1.5%)</td>
                                                            <td class="border-none">{{ $sourcing->bank_charge }}%
                                                            </td>

                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none">Customs & Duty - (5.0%)</td>
                                                            <td class="border-none">{{ $sourcing->customs }} %
                                                            </td>

                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none">HR , Office & Utility Cost- (5.0%)</td>
                                                            <td class="border-none">{{ $sourcing->utility_cost }} %
                                                            </td>

                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none">Shipping & Handling Cost- (5.0%)</td>
                                                            <td class="border-none">{{ $sourcing->shiping_cost }} %
                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none">Sales / Consultancy Comission - (5.0%)
                                                            </td>
                                                            <td class="border-none">{{ $sourcing->sales_comission }} %
                                                            </td>
                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none">Bank Loan / Liability / Debt - (5.0%)
                                                            </td>
                                                            <td class="border-none">{{ $sourcing->liability }} %
                                                            </td>
                                                        </tr>

                                                        <tr class="bg-dark accordion_offer">
                                                            <td class="border-none text-white" colspan="3">
                                                                <i class="ph-arrow-down"></i>&nbsp;&nbsp;
                                                                Offering Value Adding
                                                            </td>
                                                        </tr>

                                                        <tr class="body_offer" style="display: none;">
                                                            <td class="border-none">Deal Closing / Rebates</td>
                                                            <td class="border-none">{{ $sourcing->rebates }} %
                                                            </td>
                                                        </tr>

                                                        <tr class="bg-dark accordion_other">
                                                            <td class="border-none text-white" colspan="3">
                                                                <i class="ph-arrow-down"></i>&nbsp;&nbsp;
                                                                Other Income
                                                            </td>
                                                        </tr>

                                                        <tr class="body_other" style="display: none;">
                                                            <td class="border-none">Loan / Capital / Partner Share - (5%)
                                                            </td>
                                                            <td class="border-none">{{ $sourcing->capital_share }} %</td>
                                                        </tr>

                                                        <tr class="body_other" style="display: none;">
                                                            <td class="border-none">Management Cost - (5%)</td>
                                                            <td class="border-none">{{ $sourcing->management_cost }} %
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="border-none">Gross Profit (%) between Sales and Cost
                                                            </td>
                                                            <td class="border-none">
                                                                {{ $sourcing->gross_profit_subtotal }} %</td>
                                                            <td class="border-none">$
                                                                {{ $sourcing->gross_profit_amount }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-none">Net Profit - (5%)</td>
                                                            <td class="border-none">
                                                                {{ $sourcing->net_profit_percentage }} %
                                                            </td>
                                                            <td class="border-none">$ {{ $sourcing->net_profit_amount }}
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
                    </div>


                </div>
            </div>
        </div>
    @endif
    <!---Show SAS modal--->

    <!---Work Order Upload modal--->
    @if ($sourcing)
        <div id="Work-order-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        @php
                            $rfq = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                            $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                            $sourcing = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->first();
                        @endphp
                        <h5 class="modal-title">Upload Your Work Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body border br-7 p-1 m-0">

                        <form method="post" action="{{ route('work-order.upload', $rfq_details->rfq_code) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <table class="table table-bordered"
                                                style="width: 100%;
                                                        height: auto;">
                                                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                    <th>SL #
                                                    </th>
                                                    <th>Product
                                                        Description</th>
                                                    <th>Quantity
                                                    </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">Discount </th>
                                                        <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">Unit Price </th>
                                                    @endif

                                                    <th width="15%">Total
                                                    </th>
                                                </tr>

                                                @foreach ($deal_products as $key => $item)
                                                    <tr>
                                                        <td> {{ ++$key }}
                                                        </td>

                                                        <td>
                                                            {{ $item->item_name }}</td>
                                                        <td class="text-center">
                                                            {{ $item->qty }}</td>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ $item->regular_discount }} % </th>
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @else
                                                            <th width="10%" class="rg_unit">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @endif

                                                        <td class="text-center">$
                                                            {{ $item->sales_price }}</td>
                                                    </tr>
                                                @endforeach


                                                <tr>
                                                    <th> </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td colspan="2" class="text-center"> Sub Total </td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->sub_total_sales }}</td>
                                                </tr>
                                                @if ($rfq_details->special == '1')
                                                    <tr class="special_discount">
                                                        <th> </th>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                        @else
                                                            <th width="10%" class="rg_unit"></th>
                                                        @endif
                                                        <td class="text-center">
                                                            Special discount </td>
                                                        <td class="text-center">
                                                            {{ $sourcing->special_discount }} %</td>
                                                        <td class="text-center"> $
                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                    </tr>
                                                @endif



                                                <tr>
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <th colspan="2" class="text-center"> Total </th>
                                                    <td class="text-center">
                                                        $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                                </tr>

                                                <!-- <tr>
                                                                                                                                        <th colspan="2" width="40%"> In Words: </th> <th colspan="5" width="60%"> <small> <b> Thirty One Lac sixty Four Thousand and Four Hundred Twenty One Taka Only (w/o Tax / VAT) </b> </small> </th>
                                                                                                                                        </tr> -->


                                            </table>


                                            @if ($rfq_details->tax_status == '1')
                                                <table class="table table-bordered mt-2">
                                                    <th colspan="3" width="80%"> Tax / VAT</td>
                                                    <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                    <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}
                                                    </td>
                                                    </tr>

                                                </table>
                                            @endif
                                        </div>

                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <table class="table table-bordered"
                                                style="background: offset; width:60%; margin:auto;">

                                                <thead>
                                                    <tr class="border-none">
                                                        <th class="border-none" colspan="3"
                                                            style="background: offset; width:60%; margin:auto;">
                                                            <label for="clientPO" style="font-size:16px;">Work Order
                                                                (Pdf)</label>
                                                            <input class="form-control" type="file" name="client_po"
                                                                id="clientPO">
                                                            <span class="text-info">
                                                                * Accepts PDF only</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <button type="submit" class="btn btn-primary">Upload <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    @endif
    <!---Work Order Upload modal--->

    <!---Proof of Payment modal--->
    <div id="proofpayment-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                    @endphp
                    <h5 class="modal-title">Proof of Payment For {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7 p-1 m-0">
                    <form method="post" action="{{ route('payment-proof.upload', $rfq_details->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="card">
                                <div class="table-responsive">

                                    @if (!empty($sourcing->grand_total))
                                        <table class="table table-bordered" style="width: 100%;height: auto;">


                                            <tbody>
                                                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                    <th width="40%">Product Description</th>
                                                    <th width="14%">Quantity</th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">Discount </th>
                                                        <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">Unit Price </th>
                                                    @endif

                                                    <th width="15%">Unit Total</th>
                                                </tr>

                                                @foreach ($deal_products as $key => $item)
                                                    <tr>
                                                        <td>
                                                            <a class="text-black"
                                                                title="{{ $item->item_name }}">{{ Str::limit($item->item_name, 28) }}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $item->qty }}</td>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ $item->regular_discount }} % </th>
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @else
                                                            <th width="10%" class="rg_unit">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @endif

                                                        <td class="text-center">$
                                                            {{ $item->sales_price }}</td>
                                                    </tr>
                                                @endforeach


                                                <tr>
                                                    <th> </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td class="text-center"> Sub Total </td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->sub_total_sales }}</td>
                                                </tr>
                                                @if ($rfq_details->special == '1')
                                                    <tr class="special_discount">
                                                        <th> </th>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                        @else
                                                            <th width="10%" class="rg_unit"></th>
                                                        @endif
                                                        <td class="text-center">
                                                            Special discount </td>
                                                        <td class="text-center">
                                                            {{ $sourcing->special_discount }} %</td>
                                                        <td class="text-center"> $
                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                    </tr>
                                                @endif



                                                <tr>
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <th class="text-center"> Total </th>
                                                    <td class="text-center">
                                                        $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                                </tr>
                                            </tbody>



                                        </table>

                                        @if ($rfq_details->tax_status == '1')
                                            <table class="table table-bordered mt-2 expand-div1 d-none">
                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}
                                                </td>
                                                </tr>

                                            </table>
                                        @endif

                                    @endif
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header m-0 p-0" style="background: black;">
                                    <h6 class="mb-0 text-center p-0 text-white">Upload Proof of Payment</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="m-0 text-center">Payment Slip (PDF) </h6>
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control" name="client_po_pdf">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary text-center">
                                <button type="submit" class="btn btn-primary">Upload <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Proof of Payment modal--->
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.sourcingDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });
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
