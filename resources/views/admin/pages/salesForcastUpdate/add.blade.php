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
                        <span class="breadcrumb-item active"> Sales Forcast Management</span>
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
                            <h5 class="text-center">Add Sales Forcast Form</h5>
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
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div id="table1" class="card cardTd">

                                <div class="card-body">
                                    <form method="post" action="{{ route('sales-forcast.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
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
                                                        <option value="{{ $rfq->id }}">RFQ Code: {{ $rfq->rfq_code }}; Client Name: {{ $rfq->name }} </option>
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
                                                        <option value="{{ $user->id }}">{{ $user->name }} </option>
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
                                                        <option value="{{ $user->id }}">{{ $user->name }} </option>
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
                                                        <option value="{{ $user->id }}">{{ $user->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Date </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="date" name="date" class="form-control maxlength"
                                                    maxlength="100" />
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
                                                        <option value="{{ $monthValue }}">{{ $monthName }}</option>
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
                                                    <option value="q1">Q1</option>
                                                    <option value="q2">Q2</option>
                                                    <option value="q3">Q3</option>
                                                    <option value="q4">Q4</option>
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
                                                    <option value="client">Client</option>
                                                    <option value="partner">Partner</option>
                                                    <option value="direct">Direct</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Pq_reference </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="pq_reference" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client_name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="client_name" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Product_name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="product_name" class="form-control maxlength"
                                                    maxlength="100" />
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
                                                    <option value="promising">Promising</option>
                                                    <option value="quoted">Quoted</option>
                                                    <option value="lost">Lost</option>
                                                    <option value="closed">Closed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Value </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="value" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Order_status </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="order_status" class="form-control maxlength"
                                                    maxlength="100" />
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
                                                    <option value="adv_received">Adv Received</option>
                                                    <option value="not_received">Not Received</option>
                                                    <option value="half_received">Half Received</option>
                                                    <option value="received">Received</option>
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
                                                    <option value="adv_paid">Adv Paid</option>
                                                    <option value="not_paid">Not Paid</option>
                                                    <option value="half_paid">Half Paid</option>
                                                    <option value="paid">Paid</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Delivery_dead_line </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="date" name="delivery_dead_line"
                                                    class="form-control maxlength" maxlength="100" />
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
                                                    <option value="promising">Promising</option>
                                                    <option value="quoted">Quoted</option>
                                                    <option value="lost">Lost</option>
                                                    <option value="closed">Closed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Work_order_number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="work_order_number"
                                                    class="form-control maxlength" maxlength="100" />
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
                                                <input type="text" name="client_po_number"
                                                    class="form-control maxlength" maxlength="100" />
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
                                                <input type="text" name="contact_person"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Contact_number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="contact_number"
                                                    class="form-control maxlength" maxlength="100" />
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
                                                    <option value="medium_controle">Medium Controle</option>
                                                    <option value="no_controle">No Controle</option>
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
                                                    <option value="medium_controle">Medium Control</option>
                                                    <option value="no_controle">No Control</option>
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
                                                    <option value="tender_quote">By Teaner Quote</option>
                                                    <option value="pending_mgt_approval"> Pending Mngt. Approval</option>
                                                    <option value="backdoor_client">Difficult/Backdoor Client</option>
                                                    <option value="client_complexity">Price/Client Complexity</option>
                                                    <option value="no_control">No Control</option>
                                                    <option value="medium_control">Medium Control</option>
                                                    <option value="full_control">Full Control</option>
                                                    <option value="high_competition">High Competition</option>
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
                                                    <option value="followed_up">Followed Up</option>
                                                    <option value="need_followed_up">Need Followed Up</option>
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
                                                    <option value="price_complexity">Price Complexity</option>
                                                    <option value="no_controlle">No Controlle</option>
                                                    <option value="logical">Logical</option>
                                                    <option value="tander_quote">Tander Quote</option>
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
                                                    <option value="need_followed_up">Need Followed Up</option>
                                                    <option value="competitive_pricing">Competitive Pricing</option>
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
