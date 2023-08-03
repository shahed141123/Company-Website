@if ($sourcing)
    <form action="{{ route('sales-profit-loss.store') }}" class="form-validate-jquery-profit-loss"
        method="post">
        @csrf
        <div id="modal_sale_profit_loss" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sales Profit and Loss </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-xs table-bordered table-responsive">
                            <tr>
                                <td width="20%">
                                    <div class="form-group">
                                        <label for="RFQID"> RFQ ID <strong class="text-danger">*</strong>
                                        </label>
                                        <input type="hidden" name="rfq_id" value="{{$rfq_details->id}}">{{$rfq_details->rfq_code}}
                                    </div>
                                </td>
                                <td width="20%">
                                    <div class="form-group">
                                        <label for="clientType"> Client Type <strong
                                                class="text-danger">*</strong> </label>
                                        <input type="hidden" name="clientType" value="{{$rfq_details->client_type}}">{{$rfq_details->client_type}}
                                    </div>
                                </td>
                                <td width="60%" colspan="2">
                                    <div class="form-group">
                                        <label for="itemDescription"> Item Description <strong
                                                class="text-danger">*</strong> </label>

                                            <textarea name="itemDescription" class="form-control" rows="2">
                                                @foreach ($deal_products as $key => $item)
                                                {{ $item->item_name }}
                                                @endforeach
                                            </textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="sales_price">Sales Price <strong class="text-danger">*</strong>
                                        </label>
                                        <input type="text" name="sales_price" id="sales_price"
                                            value="{{ $sourcing->sub_total_sales }}" class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="cost_price">Cost Price<strong class="text-danger">*</strong>
                                        </label>
                                        <input type="text" name="cost_price" id="cost_price" value="{{ $sourcing->sub_total_cost }}"
                                            class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="grossMarkupPersentage"> Gross Markup Persentage <strong
                                                class="text-danger">*</strong> </label>
                                        <input type="text" name="gross_makup_percentage"
                                            id="grossMarkupPersentage" value="{{ $sourcing->gross_profit_subtotal }}"
                                            class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="grossMarkupAmount"> Gross Markup Amount <strong
                                                class="text-danger">*</strong> </label>
                                        <input type="text" name="gross_makup_ammount" id="grossMarkupAmount"
                                        value="{{ $sourcing->gross_profit_amount }}" class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="netProfitPersentage"> Net profit Percentage <strong
                                                class="text-danger">*</strong> </label>
                                        <input type="text" name="net_profit_percentage"
                                            id="netProfitPersentage" value="{{ $sourcing->net_profit_percentage }}"
                                            class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="NetprofitAmount"> Net profit Amount <strong
                                                class="text-danger">*</strong> </label>
                                        <input type="text" name="net_profit_ammount" id="NetprofitAmount"
                                        value="{{ $sourcing->net_profit_amount }}" class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="profit"> Profit <strong class="text-danger">*</strong>
                                        </label>
                                        <input type="text" name="profit" id="profit" value="{{ $sourcing->net_profit_amount }}"
                                            class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="loss"> Loss <strong class="text-danger">*</strong>
                                        </label>
                                        <input type="text" name="loss" id="loss" placeholder="00"
                                            class="form-control allow_decimal form-control-sm">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endif

@if ($sourcing)
    <form action="{{ route('sales-profit-loss.store') }}" class="form-validate-jquery-profit-loss"
        method="post">
        @csrf
        <div id="modal_sale_forecast" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sales Forecast </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('sales-forcast.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">

                                    <div class="form-group">
                                        <label for="RFQID"> RFQ ID <strong class="text-danger">*</strong>
                                        </label>
                                        <input type="hidden" name="rfq_id" value="{{$rfq_details->id}}">{{$rfq_details->rfq_code}}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Sales_man_id_L1</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Sales_man_id_T1</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Sales_man_id_T2</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Date </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="date" name="date" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Month</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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


                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Quarter</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Partner_type</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Pq_reference </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="pq_reference" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Client_name </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="client_name" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Product_name </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="product_name" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Forcast_type</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Value </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="value" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Order_status </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="order_status" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Client_price_status</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Principles_payment_status</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Delivery_dead_line </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="date" name="delivery_dead_line"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Final_status</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Work_order_number </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="work_order_number"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Work_order_pdf </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="file" name="work_order_pdf" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Client_po_number </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="client_po_number"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Client_po_pdf </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="file" name="client_po_pdf" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Contact_person </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="contact_person"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Contact_number </h6>
                                    </div>
                                    <div class="form-group col-sm-10 text-secondary">
                                        <input type="text" name="contact_number"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Probability_status</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="probability_status" class="form-control select"
                                            data-minimum-results-for-search="Infinity"
                                            data-placeholder="Chose probability_status ">
                                            <option></option>
                                            <option value="medium_controle">Medium Controle</option>
                                            <option value="no_controle">No Controle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Quotation_status</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="quotation_status" class="form-control select"
                                            data-minimum-results-for-search="Infinity"
                                            data-placeholder="Chose sales man ">
                                            <option></option>
                                            <option value="medium_controle">Medium Control</option>
                                            <option value="no_controle">No Control</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Probability_reason</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Quotation_action</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="quotation_action" class="form-control select"
                                            data-minimum-results-for-search="Infinity"
                                            data-placeholder="Chose quotation_action ">
                                            <option></option>
                                            <option value="followed_up">Followed Up</option>
                                            <option value="need_followed_up">Need Followed Up</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Lost_level_one</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
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
                                <div class="col-lg-3">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Lost_level_tow</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-10">
                                        <select name="lost_level_tow" class="form-control select"
                                            data-minimum-results-for-search="Infinity"
                                            data-placeholder="Chose lost_level_tow ">
                                            <option></option>
                                            <option value="need_followed_up">Need Followed Up</option>
                                            <option value="competitive_pricing">Competitive Pricing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endif

@if ($commercial_document)
<div id="modal_commercial_documents" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Commercial Documents </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <table class="table-salecocument-customice">
                        <thead>
                            <tr>

                                <th colspan="8" class="text-center bg-black text-white bg-opacity-75">Client
                                </th>
                                <th colspan="5" class="text-center bg-black text-white bg-opacity-75">
                                    Principal
                                </th>
                            </tr>
                            <tr class="text-center">

                                <th width="7%">PQ</th>
                                <th width="7%">PO</th>
                                <th width="7%">Invoice</th>
                                <th width="7%">Challan</th>
                                <th width="7%">Payment</th>
                                <th width="7%">Mushok</th>
                                <th width="7%">Govt. Chalan</th>
                                <th width="7%">SAS</th>
                                <th width="7%">PQ</th>
                                <th width="7%">PO</th>
                                <th width="7%">Invoice</th>
                                <th width="7%">Challan</th>
                                <th width="7%">Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @if (!empty($commercial_document->client_pq))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->client_po))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->client_invoice))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->client_challan))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->client_payment))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->client_mushok))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->client_govt_challan))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($sourcing)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->principal_pq))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->principal_po))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->principal_invoice))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->principal_challan))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($commercial_document->principal_payment))
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>

                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endif

