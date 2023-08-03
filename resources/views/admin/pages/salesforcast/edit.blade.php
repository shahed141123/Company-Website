@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Contact Management</span>
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
            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="card-body">
                            <form method="post" action="{{ route('sales-forcast.update', $salesforcast->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Sales Forcast Edit Form</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="row mb-3">
                                                            <label class="form-label">RFQ Id</label>
                                                            <select id="rfq_id" name="rfq_id"
                                                                data-placeholder="Select your rfq name"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                @foreach ($rfqs as $rfq)
                                                                    <option @selected($rfq->id == $salesforcast->rfq_id)
                                                                        value="{{ $rfq->id }}">
                                                                        {{ $rfq->name }}
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
                                                                    <option @selected($user->id == $salesforcast->sales_man_id_l1)
                                                                        value="{{ $user->id }}">
                                                                        {{ $user->name }}
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
                                                                    <option @selected($user->id == $salesforcast->sales_man_id_t1)
                                                                        value="{{ $user->id }}">
                                                                        {{ $user->name }}
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
                                                                    <option @selected($user->id == $salesforcast->sales_man_id_t2)
                                                                        value="{{ $user->id }}">
                                                                        {{ $user->name }}
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
                                                            <input type="date" id="date" name="date"
                                                                value="{{ $salesforcast->date }}"
                                                                class="form-control" placeholder="Enter Your date">
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
                                                                    <option @selected($month == $salesforcast->month)
                                                                        value="{{ $month }}">
                                                                        {{ $month }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Quarter </label>
                                                            <select name="" data-placeholder="Select quarter"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($salesforcast->quarter == 'q1') value="q1">
                                                                    Q1</option>
                                                                <option @selected($salesforcast->quarter == 'q2') value="q2">
                                                                    Q2</option>
                                                                <option @selected($salesforcast->quarter == 'q3') value="q3">
                                                                    Q3</option>
                                                                <option @selected($salesforcast->quarter == 'q4') value="q4">
                                                                    Q4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Partner Type </label>
                                                            <select name="partner_type"
                                                                data-placeholder="Select partner type"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($salesforcast->partner_type == 'client')
                                                                    value="client">Client</option>
                                                                <option @selected($salesforcast->partner_type == 'partner')
                                                                    value="partner">Partner</option>
                                                                <option @selected($salesforcast->partner_type == 'direct')
                                                                    value="direct">Direct</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">PQ Reference:</label>
                                                            <input type="text" id="pq_reference"
                                                                name="pq_reference"
                                                                value="{{ $salesforcast->pq_reference }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="50" placeholder="pq_reference">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label">Client Name:</label>
                                                            <input type="text" id="client_name"
                                                                name="client_name"
                                                                value="{{ $salesforcast->client_name }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="100" placeholder="client_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label">Product Name:</label>
                                                            <input type="text" id="product_name"
                                                                name="product_name"
                                                                value="{{ $salesforcast->product_name }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="300" placeholder="client_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Forcast Type </label>
                                                            <select name="forcast_type"
                                                                data-placeholder="Select forcast type"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($salesforcast->forcast_type == 'promising')
                                                                    value="promising">Promising</option>
                                                                <option @selected($salesforcast->forcast_type == 'quoted')
                                                                    value="quoted">Quoted</option>
                                                                <option @selected($salesforcast->forcast_type == 'lost')
                                                                    value="lost">Lost</option>
                                                                <option @selected($salesforcast->forcast_type == 'closed')
                                                                    value="closed">Closed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label">Value: </label>
                                                            <input type="text" id="value" name="value"
                                                                value="{{ $salesforcast->value }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="100" placeholder="Enter Your value"
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-4">
                                                            <label class="form-label">Order Status:</label>
                                                            <input type="text" id="order_status"
                                                                name="order_status"
                                                                value="{{ $salesforcast->order_status }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="100" placeholder="order_status">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Client Price Status </label>
                                                            <select name="client_price_status"
                                                                data-placeholder="Select client_price_status"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($salesforcast->client_price_status == 'adv_received')
                                                                    value="adv_received">Advanced Received
                                                                </option>
                                                                <option @selected($salesforcast->client_price_status == 'not_received')
                                                                    value="not_received">Not Received</option>
                                                                <option @selected($salesforcast->client_price_status == 'half_received')
                                                                    value="half_received">Half Received
                                                                </option>
                                                                <option @selected($salesforcast->client_price_status == 'received')
                                                                    value="received">Received</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Principles Payment Status
                                                            </label>
                                                            <select name="principles_payment_status"
                                                                data-placeholder="Select principles_payment_status"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($salesforcast->principles_payment_status == 'adv_paid')
                                                                    value="adv_paid">Advanced Paid</option>
                                                                <option @selected($salesforcast->principles_payment_status == 'not_paid')
                                                                    value="not_paid">Not Paid</option>
                                                                <option @selected($salesforcast->principles_payment_status == 'half_paid')
                                                                    value="half_paid">Half Paid</option>
                                                                <option @selected($salesforcast->principles_payment_status == 'paid')
                                                                    value="paid">Paid</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label">Date: </label>
                                                            <input type="date" id="delivery_dead_line"
                                                                name="delivery_dead_line"
                                                                value="{{ $salesforcast->delivery_dead_line }}"
                                                                class="form-control"
                                                                placeholder="Enter Your delivery_dead_line">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-4">
                                                            <label class="form-label">Work Order Number:</label>
                                                            <input type="text" id="work_order_number"
                                                                name="work_order_number"
                                                                value="{{ $salesforcast->work_order_number }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="100" placeholder="work_order_number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-4">
                                                            <label class="form-label">Work Order Pdf: </label>
                                                            <input type="file" class="form-control"
                                                                name="work_order_pdf"
                                                                value="{{ $salesforcast->work_order_pdf }}">
                                                            <div class="form-text"><span
                                                                    class="text-danger">Accepts only pdf
                                                                    types</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-4">
                                                            <label class="form-label">Client PO Number:</label>
                                                            <input type="text" id="client_po_number"
                                                                name="client_po_number"
                                                                value="{{ $salesforcast->client_po_number }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="100" placeholder="client_po_number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-4">
                                                            <label class="form-label">Client PO Pdf: </label>
                                                            <input type="file" class="form-control"
                                                                name="client_po_pdf"
                                                                value="{{ $salesforcast->client_po_pdf }}">
                                                            <div class="form-text"><span
                                                                    class="text-danger">Accepts only pdf
                                                                    types</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label">Contact person:</label>
                                                            <input type="text" id="contact_person"
                                                                name="contact_person"
                                                                value="{{ $salesforcast->contact_person }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="100" placeholder="contact_person">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label">Contact number:</label>
                                                            <input type="text" id="contact_number"
                                                                name="contact_number"
                                                                value="{{ $salesforcast->contact_number }}"
                                                                class="form-control maxlength-options"
                                                                maxlength="100" placeholder="contact_number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Probability Status</label>
                                                            <select id="probability_status"
                                                                name="probability_status"
                                                                data-placeholder="Select your probability_status name"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($salesforcast->probability_status == 'medium_controle')
                                                                    value="medium_controle">Medium Controle
                                                                </option>
                                                                <option @selected($salesforcast->probability_status == 'no_controile')
                                                                    value="no_controile">No Controle</option>
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
                                                                <option @selected($salesforcast->quotation_status == 'medium_controle')
                                                                    value="medium_controle">Medium Controle
                                                                </option>
                                                                <option @selected($salesforcast->quotation_status == 'no_controile')
                                                                    value="no_controile">No Controle</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Probability Reason</label>
                                                            <select id="probability_reason"
                                                                name="probability_reason"
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
                                                                <option @selected($salesforcast->quotation_action == 'followed_up')
                                                                    value="followed_up">Followed Up</option>
                                                                <option @selected($salesforcast->quotation_action == 'need_followed_up')
                                                                    value="need_followed_up">Need Followed Up
                                                                </option>
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
                                                                <option @selected($salesforcast->lost_level_one == 'price_complexity')
                                                                    value="price_complexity">Price Complexity
                                                                </option>
                                                                <option @selected($salesforcast->lost_level_one == 'no_controlle')
                                                                    value="no_controlle">No Controlle</option>
                                                                <option @selected($salesforcast->lost_level_one == 'logical')
                                                                    value="logical">Logical</option>
                                                                <option @selected($salesforcast->lost_level_one == 'tander_quote')
                                                                    value="tander_quote">Tander Quote</option>
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
                                                                <option @selected($salesforcast->lost_level_tow == 'need_followed_up')
                                                                    value="need_followed_up">Need Followed Up
                                                                </option>
                                                                <option @selected($salesforcast->lost_level_tow == 'competitive_pricing')
                                                                    value="competitive_pricing">Competitive
                                                                    Pricing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="reset" class="btn btn-sm btn-danger">Reset<i
                                            class="icon-reset"></i></button>
                                    <a href="{{ route('sales-forcast.index') }}" type="submit"
                                        class="btn btn-sm btn-info">Back</a>
                                    <button type="submit"
                                        class="btn btn-sm btn-primary from-prevent-multiple-submits">Submit
                                        <i class="ph-paper-plane-tilt ms-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
