@extends('admin.master')
@section('content')
    <style type="text/css">
        .padding {
            padding: 0px !important;
        }

        .quotaed-lbg {
            background: #659EC7 !important;
        }

        .quotaed-ltbg {
            background: #306754 !important;
        }

        .quotaed-rbg {
            background: #4C787E !important;
        }

        .quotaed-rtbg {
            background: #1F6357 !important;
        }

        .customicTable th,
        td {
            border: 1px solid #ddd;
            padding: 3px 3px;
            font-size: 11px;
        }

        .customicTableForecastHead th,
        td {
            border: 1px solid #ddd;
            padding: 5px 5px;
            font-size: 13px;
        }

        .form-select-sm {
            width: 100%;
            height: 30px;
            color: #000;
            padding: 2px;

        }

        .form-control-sm {
            width: 100%;
            height: 30px;
            padding: 2px;
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
                        <a href="#" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Sales Forcast Management</span>
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
            {{-- <form action="{{ route('sales-forcast.store') }}" method="POST" class="from-prevent-multiple-submits"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Sales Forcast Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="row mb-3">
                                            <label class="form-label">RFQ Id</label>
                                            <select id="rfq_id" name="rfq_id" data-placeholder="Select your rfq name"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                @foreach ($rfqs as $rfq)
                                                    <option value="{{ $rfq->id }}">{{ $rfq->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row mb-3">
                                            <label class="form-label">Sales Man ID L1</label>
                                            <select id="sales_man_id_l1" name="sales_man_id_l1"
                                                data-placeholder="Select your sub category name"
                                                class="form-control form-control-select2 sales_man_id_l1">
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row mb-3">
                                            <label class="form-label">Sales Man ID T1</label>
                                            <select id="sales_man_id_t1" name="sales_man_id_t1"
                                                data-placeholder="Select your child category name"
                                                class="form-control form-control-select2 sales_man_id_t1">
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row mb-3">
                                            <label class="form-label">Sales Man ID T2 </label>
                                            <select name="sales_man_id_t2"
                                                data-placeholder="Select your sales_man_id_t2 name"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">Date: </label>
                                            <input type="date" id="date" name="date" class="form-control"
                                                placeholder="Enter Your date">
                                        </div>
                                    </div>
                                    @php
                                        $months = [];
                                        for ($m = 1; $m <= 12; $m++) {
                                            $months[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                        }
                                    @endphp
                                    <div class="col-lg-2">
                                        <div class="row mb-3">
                                            <label class="form-label">Month </label>
                                            <select name="month" data-placeholder="Select month"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                @foreach ($months as $month)
                                                    <option value="{{ $month }}">{{ $month }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row mb-3">
                                            <label class="form-label">Quarter </label>
                                            <select name="quarter" data-placeholder="Select quarter"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                <option value="q1">Q1</option>
                                                <option value="q2">Q2</option>
                                                <option value="q3">Q3</option>
                                                <option value="q4">Q4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row mb-3">
                                            <label class="form-label">Partner Type </label>
                                            <select name="partner_type" data-placeholder="Select partner type"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                <option value="client">Client</option>
                                                <option value="partner">Partner</option>
                                                <option value="direct">Direct</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">PQ Reference:</label>
                                            <input type="text" id="pq_reference" name="pq_reference"
                                                class="form-control maxlength-options" maxlength="50"
                                                placeholder="pq_reference">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Client Name:</label>
                                            <input type="text" id="client_name" name="client_name"
                                                class="form-control maxlength-options" maxlength="100"
                                                placeholder="client_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label">Product Name:</label>
                                            <input type="text" id="product_name" name="product_name"
                                                class="form-control maxlength-options" maxlength="300"
                                                placeholder="client_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row mb-3">
                                            <label class="form-label">Forcast Type </label>
                                            <select name="forcast_type" data-placeholder="Select forcast type"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                <option value="promising">Promising</option>
                                                <option value="quoted">Quoted</option>
                                                <option value="lost">Lost</option>
                                                <option value="closed">Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">Value: </label>
                                            <input type="text" id="value" name="value"
                                                class="form-control maxlength-options" maxlength="100"
                                                placeholder="Enter Your value">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">Order Status:</label>
                                            <input type="text" id="order_status" name="order_status"
                                                class="form-control maxlength-options" maxlength="100"
                                                placeholder="order_status">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row mb-3">
                                            <label class="form-label">Client Price Status </label>
                                            <select name="client_price_status"
                                                data-placeholder="Select client_price_status"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                <option value="adv_received">Advanced Received</option>
                                                <option value="not_received">Not Received</option>
                                                <option value="half_received">Half Received</option>
                                                <option value="received">Received</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row mb-3">
                                            <label class="form-label">Principles Payment Status </label>
                                            <select name="principles_payment_status"
                                                data-placeholder="Select principles_payment_status"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                <option value="adv_paid">Advanced Paid</option>
                                                <option value="not_paid">Not Paid</option>
                                                <option value="half_paid">Half Paid</option>
                                                <option value="paid">Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-4">
                                            <label class="form-label">Date: </label>
                                            <input type="date" id="delivery_dead_line" name="delivery_dead_line"
                                                class="form-control" placeholder="Enter Your delivery_dead_line">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">Work Order Number:</label>
                                            <input type="text" id="work_order_number" name="work_order_number"
                                                class="form-control maxlength-options" maxlength="100"
                                                placeholder="work_order_number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">Work Order Pdf: </label>
                                            <input type="file" class="form-control" name="work_order_pdf">
                                            <div class="form-text"><span class="text-danger">Accepts only pdf types</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">Client PO Number:</label>
                                            <input type="text" id="client_po_number" name="client_po_number"
                                                class="form-control maxlength-options" maxlength="100"
                                                placeholder="client_po_number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">Client PO Pdf: </label>
                                            <input type="file" class="form-control" name="client_po_pdf">
                                            <div class="form-text"><span class="text-danger">Accepts only pdf types</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Contact person:</label>
                                            <input type="text" id="contact_person" name="contact_person"
                                                class="form-control maxlength-options" maxlength="100"
                                                placeholder="contact_person">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Contact number:</label>
                                            <input type="text" id="contact_number" name="contact_number"
                                                class="form-control maxlength-options" maxlength="100"
                                                placeholder="contact_number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="row mb-3">
                                            <label class="form-label">Probability Status</label>
                                            <select id="probability_status" name="probability_status"
                                                data-placeholder="Select your probability_status name"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                <option value="medium_controle">Medium Controle</option>
                                                <option value="no_controile">No Controle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mb-3">
                                            <label class="form-label">Quotation Status</label>
                                            <select id="quotation_status" name="quotation_status"
                                                data-placeholder="Select your sub category name"
                                                class="form-control form-control-select2 quotation_status">
                                                <option></option>
                                                <option value="medium_controle">Medium Controle</option>
                                                <option value="no_controile">No Controle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mb-3">
                                            <label class="form-label">Probability Reason</label>
                                            <select id="probability_reason" name="probability_reason"
                                                data-placeholder="Select your child category name"
                                                class="form-control form-control-select2 probability_reason">
                                                <option></option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="row mb-3">
                                            <label class="form-label">Quotation Action</label>
                                            <select id="quotation_action" name="quotation_action"
                                                data-placeholder="Select your quotation_action name"
                                                class="form-control form-control-select2">
                                                <option></option>
                                                <option value="followed_up">Followed Up</option>
                                                <option value="need_followed_up">Need Followed Up</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mb-3">
                                            <label class="form-label">Lost Level One</label>
                                            <select id="lost_level_one" name="lost_level_one"
                                                data-placeholder="Select your lost_level_one"
                                                class="form-control form-control-select2 ">
                                                <option></option>
                                                <option value="price_complexity">Price Complexity</option>
                                                <option value="no_controlle">No Controlle</option>
                                                <option value="logical">Logical</option>
                                                <option value="tander_quote">Tander Quote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mb-3">
                                            <label class="form-label">Lost Level Tow</label>
                                            <select id="lost_level_tow" name="lost_level_tow"
                                                data-placeholder="Select your lost_level_tow name"
                                                class="form-control form-control-select2 ">
                                                <option></option>
                                                <option value="need_followed_up">Need Followed Up</option>
                                                <option value="competitive_pricing">Competitive Pricing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="reset" class="btn btn-sm btn-danger">Reset<i class="icon-reset"></i></button>
                    <a href="{{ route('sales-forcast.index') }}" type="submit" class="btn btn-sm btn-info">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary from-prevent-multiple-submits">Submit
                        <i class="ph-paper-plane-tilt ms-2"></i>
                    </button>
                </div>
            </form> --}}
            @include('admin.pages.salesforcast.par.sales-forecast-closed')
            @include('admin.pages.salesforcast.par.sales-forecast-lost')
            @include('admin.pages.salesforcast.par.sales-forecast-promising')
            @include('admin.pages.salesforcast.par.sales-forecast-quotation')
        </div>
    </div>


    <!-- /content area -->
    <!-- /inner content -->

    </div>
@endsection
