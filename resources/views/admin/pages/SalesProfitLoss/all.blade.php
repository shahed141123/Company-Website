@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <div class="content-inner">
            <!-- Page header -->
            <div class="page-header page-header-light shadow">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <h4 class="page-title mb-0">
                            Sales - <span class="fw-normal">Profit Loss</span>
                        </h4>
                        <a href="#page_header"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /page header -->
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
            <!-- Content area -->
            <div class="content">
                <!-- Table components -->
                <div class="card m-auto w-50 mb-3 p-2">
                    <table class="table  table-bordered table-xs table-responsive">
                        <tr>
                            <th colspan="7">
                                <h5 class="mb-0 text-center"> Sales Profit & Loss
                                    {{-- <button type="button" class="bg-teal float-end text-white" data-bs-toggle="modal"
                                        data-bs-target="#modal_sale_profit_loss"> <i
                                            class="ph-plus-circle ph-1x"></i></button> --}}
                                </h5>
                            </th>
                        </tr>
                        <tr class="text-center">
                            <th class="bg-primary text-white">Total Sales </th>
                            <th class="bg-success text-white"> Profit </th>
                            <th class="bg-secondary text-white"> % </th>
                        </tr>
                        <tr class="text-center">
                            <td class="bg-primary text-white"> {{ $grandTotalSum }}</td>
                            <td class="bg-success text-white"> {{ $netProfitSum }}</td>
                            <td class="bg-secondary text-white"> {{ $netProfitPercentageSum }} %</td>
                        </tr>
                    </table>
                </div>
                <!-- Basic modal for profit save -->
                {{-- <form action="{{ route('sales-profit-loss.store') }}" class="form-validate-jquery-profit-loss"
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
                                            <td>
                                                <div class="form-group">
                                                    <label for="rfq_id"> RFQ ID <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="rfq_id" id="rfq_id"
                                                        class="form-control form-control-sm" required>
                                                        <option value="0">--select--</option>
                                                        @foreach ($dealSasWithRfqs as $dealSasWithRfq)
                                                            <option value="{{ $dealSasWithRfq->rfqsId }}">
                                                                {{ e($dealSasWithRfq->rfq_code) . ',' . ' ' . 'Client Name:' . ' ' . e($dealSasWithRfq->name) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="clientType"> Client Type <strong
                                                            class="text-danger">*</strong> </label>
                                                    <select name="client_type" id="clientType"
                                                        class="form-control form-control-sm" required>
                                                        <option value="">--select--</option>
                                                        <option value="client"> Client </option>
                                                        <option value="partner"> Partner </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="itemDescription"> Item Description <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="item_description" id="itemDescription"
                                                        placeholder="Item Description" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="SalesAmount">Sales <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="sales" id="SalesAmount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="CostAmount">Cost <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="cost" id="CostAmount" placeholder="00.00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupPersentage"> Gross Markup Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="gross_markup_persentage"
                                                        id="grossMarkupPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupAmount"> Gross Markup Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="gross_markup_amount" id="grossMarkupAmount"
                                                        placeholder="00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="netProfitPersentage"> Net profit Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_persentage"
                                                        id="netProfitPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="NetprofitAmount"> Net profit Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_amount" id="NetprofitAmount"
                                                        placeholder="00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="profit"> Profit <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="profit" id="profit" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label for="loss"> Loss <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="loss" id="loss" placeholder="00"
                                                        class="form-control form-control-sm">
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
                </form> --}}
                <!-- model-end -->
                <!-- Basic modal for profit Update -->
                {{-- <form action="" class="form-validate-jquery-profit-loss" method="post"
                    enctype="multipart/form-data">
                    <div id="modal_sale_profit_loss_update" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Sales Profit and Loss Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-bordered table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="RFQID"> RFQ ID <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="rfq_id" id="RFQID"
                                                        class="form-control form-control-sm" required>
                                                        <option value="0">--select--</option>
                                                        <option value="1"> Q1</option>
                                                        <option value="2"> Q2 </option>
                                                        <option value="3"> Q3</option>
                                                        <option value="4"> Q4 </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="clientType"> Client Type <strong
                                                            class="text-danger">*</strong> </label>
                                                    <select name="client_type" id="clientType"
                                                        class="form-control form-control-sm" required>
                                                        <option value="">--select--</option>
                                                        <option value="client"> Client </option>
                                                        <option value="partner"> Partner </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="itemDescription"> Item Description <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="item_description" id="itemDescription"
                                                        placeholder="Item Description"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="SalesAmount">Sales <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="sales" id="SalesAmount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="CostAmount">Cost <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="cost" id="CostAmount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupPersentage"> Gross Markup Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="gross_markup_persentage"
                                                        id="grossMarkupPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupAmount"> Gross Markup Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="gross_markup_amount"
                                                        id="grossMarkupAmount" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="netProfitPersentage"> Net profit Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_persentage"
                                                        id="netProfitPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="NetprofitAmount"> Net profit Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_amount" id="NetprofitAmount"
                                                        placeholder="00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="profit"> Profit <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="profit" id="profit" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label for="loss"> Loss <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="loss" id="loss" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> --}}
                <!-- model-Update end -->
                <div class="card">
                    <!-- tab menu start-->
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#js-January-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                                role="tab" tabindex="-1">
                                January
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                February
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="March" tabindex="-1">
                                March
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                April
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-May-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                May
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-June-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                June
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                July
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                August
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                September
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                October
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                November
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                December
                            </a>
                        </li>
                    </ul>
                    <!-- tab menu end -->
                    <!-- monthly table view start  -->
                    <div class="card-body">
                        <div class="tab-content table-responsive">
                            <div class="tab-pane fade active show" id="js-January-tab" role="tabpanel">
                                <table class="table january table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '01')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-February-tab" role="tabpanel">
                                <table class="table february table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '02')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                                <table class="table march table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '03')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                                <table class="table april table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '04')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                                <table class="table may table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '05')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                                <table class="table june table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '06')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                                <table class="table july table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '07')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                                <table class="table august table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '08')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                                <table class="table september table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '09')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-October-tab" role="tabpanel">
                                <table class="table october table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '10')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                                <table class="table november table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '11')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                                <table class="table december table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Create Date</th>
                                            <th style="width:20%;">Client Type</th>
                                            <th style="width:15%;">Sales Amount</th>
                                            <th style="width:15%;">Profit</th>
                                            <th style="width:10%;">Percentage </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealSasWithRfqs as $key => $dealSasWithRfq)
                                            @if (date('m', strtotime($dealSasWithRfq->create_date)) == '12')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->create_date }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->client_type }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->grand_total }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_amount }}</td>
                                                    <td>
                                                        {{ $dealSasWithRfq->net_profit_percentage }}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- monthly table view End  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
    </div>
    <!-- /inner content -->
    </div>
@endsection






@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="rfq_id"]').on('change', function() {
                var rfq_id = $(this).val();
                if (rfq_id) {
                    $.ajax({
                        url: `{{ url('rfq/details') }}/ ${id}`,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('input[name="name"]').val(data.rfq.name);
                            // $('input[name="email"]').val(data.email);
                            // $('input[name="phone"]').val(data.phone);
                            // $('input[name="address"]').val(data.address);
                            //$('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                        },

                    });
                }
            });
            $('.january, .february, .march, .april, .may, .june, .july, .august, .september, .october, .november, .december')
                .DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [5],
                    }, ],
                });
        });
    </script>
@endpush
