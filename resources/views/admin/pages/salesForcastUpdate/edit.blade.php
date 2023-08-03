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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Sales Forcast message edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('sales-forcast.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Sales Forcast
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Sales Forcast Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('sales-forcast.update', $salesforcast->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Rfq_id</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="rfq_id" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose Rfq name ">
                                                    <option></option>
                                                    @foreach ($rfqs as $rfq)
                                                        <option @selected($salesforcast->rfq_id == $rfq->id) value="{{ $rfq->id }}">
                                                            RFQ Code: {{ $rfq->rfq_code }}; Client Name: {{ $rfq->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sales_man_id_L1</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="sales_man_id_L1" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man  ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option @selected($salesforcast->sales_man_id_L1 == $user->id) value="{{ $user->id }}">
                                                            {{ $user->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sales_man_id_T1</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="sales_man_id_T1" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option @selected($salesforcast->sales_man_id_T1 == $user->id) value="{{ $user->id }}">
                                                            {{ $user->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sales_man_id_T2</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="sales_man_id_T2" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option @selected($salesforcast->sales_man_id_T2 == $user->id) value="{{ $user->id }}">
                                                            {{ $user->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Date </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="date" value="{{ $salesforcast->date }}" name="date"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Month</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="month" class="form-control select"
                                                    data-placeholder="Choose month">
                                                    <option></option>
                                                    @for ($m = 1; $m <= 12; $m++)
                                                        @php
                                                            $monthObj = Carbon\Carbon::createFromFormat('m', $m);
                                                            $monthName = $monthObj->format('F');
                                                            $monthValue = $monthObj->format('m');
                                                        @endphp
                                                        <option @selected($salesforcast->month == $monthValue) value="{{ $monthValue }}">
                                                            {{ $monthName }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quarter</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="quarter" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    <option @selected($salesforcast->quarter == 'q1') value="q1">Q1</option>
                                                    <option @selected($salesforcast->quarter == 'q2') value="q2">Q2</option>
                                                    <option @selected($salesforcast->quarter == 'q3') value="q3">Q3</option>
                                                    <option @selected($salesforcast->quarter == 'q4') value="q4">Q4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Partner_type</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="partner_type" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    <option @selected($salesforcast->partner_type == 'client') value="client">Client</option>
                                                    <option @selected($salesforcast->partner_type == 'partner') value="partner">Partner</option>
                                                    <option @selected($salesforcast->partner_type == 'direct') value="direct">Direct</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Pq_reference </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->pq_reference }}"
                                                    name="pq_reference" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client_name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->client_name }}"
                                                    name="client_name" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Product_name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->product_name }}"
                                                    name="product_name" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Forcast_type</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="forcast_type" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    <option @selected($salesforcast->forcast_type == 'promising') value="promising">Promising
                                                    </option>
                                                    <option @selected($salesforcast->forcast_type == 'quoted') value="quoted">Quoted</option>
                                                    <option @selected($salesforcast->forcast_type == 'lost') value="lost">Lost</option>
                                                    <option @selected($salesforcast->forcast_type == 'closed') value="closed">Closed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Value </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->value }}" name="value"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Order_status </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->order_status }}"
                                                    name="order_status" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client_price_status</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="client_price_status" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    <option @selected($salesforcast->client_price_status == 'adv_received') value="adv_received">Adv Received
                                                    </option>
                                                    <option @selected($salesforcast->client_price_status == 'not_received') value="not_received">Not Received
                                                    </option>
                                                    <option @selected($salesforcast->client_price_status == 'half_received') value="half_received">Half
                                                        Received</option>
                                                    <option @selected($salesforcast->client_price_status == 'received') value="received">Received
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Principles_payment_status</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="principles_payment_status" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    <option @selected($salesforcast->principles_payment_status == 'adv_paid') value="adv_paid">Adv Paid
                                                    </option>
                                                    <option @selected($salesforcast->principles_payment_status == 'not_paid') value="not_paid">Not Paid
                                                    </option>
                                                    <option @selected($salesforcast->principles_payment_status == 'half_paid') value="half_paid">Half Paid
                                                    </option>
                                                    <option @selected($salesforcast->principles_payment_status == 'paid') value="paid">Paid</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Delivery_dead_line </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="date" value="{{ $salesforcast->delivery_dead_line }}"
                                                    name="delivery_dead_line" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Final_status</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="final_status" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    <option @selected($salesforcast->final_status == 'promising') value="promising">Promising
                                                    </option>
                                                    <option @selected($salesforcast->final_status == 'quoted') value="quoted">Quoted</option>
                                                    <option @selected($salesforcast->final_status == 'lost') value="lost">Lost</option>
                                                    <option @selected($salesforcast->final_status == 'closed') value="closed">Closed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Work_order_number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->work_order_number }}"
                                                    name="work_order_number" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Work_order_pdf </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="file" name="work_order_pdf" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client_po_number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->client_po_number }}"
                                                    name="client_po_number" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client_po_pdf </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="file" name="client_po_pdf" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Contact_person </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->contact_person }}"
                                                    name="contact_person" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Contact_number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesforcast->contact_number }}"
                                                    name="contact_number" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Probability_status</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="probability_status" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose probability_status ">
                                                    <option></option>
                                                    <option @selected($salesforcast->probability_status == 'medium_controle') value="medium_controle">Medium
                                                        Controle</option>
                                                    <option @selected($salesforcast->probability_status == 'no_controle') value="no_controle">No Controle
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quotation_status</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="quotation_status" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales man ">
                                                    <option></option>
                                                    <option @selected($salesforcast->quotation_status == 'medium_controle') value="medium_controle">Medium
                                                        Controle</option>
                                                    <option @selected($salesforcast->quotation_status == 'no_controle') value="no_controle">No Controle
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Probability_reason</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="probability_reason" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose probability_reason ">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quotation_action</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="quotation_action" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose quotation_action ">
                                                    <option></option>
                                                    <option @selected($salesforcast->quotation_action == 'followed_up') value="followed_up">Followed Up
                                                    </option>
                                                    <option @selected($salesforcast->quotation_action == 'need_followed_up') value="need_followed_up">Need
                                                        Followed Up</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Lost_level_one</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="lost_level_one" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose lost_level_one ">
                                                    <option></option>
                                                    <option @selected($salesforcast->lost_level_one == 'price_complexity') value="price_complexity">Price
                                                        Complexity</option>
                                                    <option @selected($salesforcast->lost_level_one == 'no_controlle') value="no_controlle">No Controlle
                                                    </option>
                                                    <option @selected($salesforcast->lost_level_one == 'logical') value="logical">Logical</option>
                                                    <option @selected($salesforcast->lost_level_one == 'tander_quote') value="tander_quote">Tander Quote
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Lost_level_tow</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="lost_level_tow" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose lost_level_tow ">
                                                    <option></option>
                                                    <option @selected($salesforcast->lost_level_tow == 'need_followed_up') value="need_followed_up">Need
                                                        Followed Up</option>
                                                    <option @selected($salesforcast->lost_level_tow == 'competitive_pricing') value="competitive_pricing">
                                                        Competitive Pricing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>
                                    </form>
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
@endsection
