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
                        <span class="breadcrumb-item active">Sales Achievement</span>
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
                        <div class="col-lg-8">
                            <h5 class="text-center">Set Achievement for Deal - {{$rfq->rfq_code}}</h5>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('sales-achievement.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Deals
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body px-3">
                            <form method="post" action="{{ route('sales-achievement.store') }}" enctype="multipart/form-data" class="achievement-calculate">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="rfq_id" value="{{$rfq->id}}">
                                    <input type="hidden" name="deal_type" value="{{$rfq->deal_type}}">
                                    <div class="col-lg-4">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background: gray; padding-top:8px;padding-bottom:8px;">
                                                        <th class="text-center text-white" colspan="4" style="font-size:22px !important; padding-top:8px !important;padding-bottom:8px !important;"> Client Details</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">
                                                            Client Type: {{ucfirst($rfq->client_type)}}
                                                        </th>
                                                        <th width="25%">
                                                            Name: {{ucfirst($rfq->name)}}
                                                        </th>
                                                        <th width="50%">
                                                            Email: {{ucfirst($rfq->email)}}
                                                        </th>


                                                    </tr>
                                                    <tr>
                                                        <th width="25%">
                                                            Company Name: {{ucfirst($rfq->company_name)}}
                                                        </th>
                                                        <th width="25%">Designation : {{ucfirst($rfq->designation)}}</th>
                                                        <th width="50%">Address : {{ucfirst($rfq->address)}}</th>

                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="expand-switch" style="background: gray; padding-top:8px;padding-bottom:8px;">

                                                        <th width="76%" colspan="2" class="text-white" style="border:none; font-size:22px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                            <i class="icon fa fa-plus mx-3"></i> Order Details</th>
                                                        <th width="24%" class="text-center" style="border:none;">
                                                            <a href="javascript:void(0);" class="text-white" title="Show SAS"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#show-sas">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        </th>
                                                    </tr>

                                                </thead>
                                                <tbody class="expand-div d-none">
                                                    @if (count($products) > 0)
                                                        <tr class="text-center">
                                                            <td width="60%"> Product Name</td>
                                                            <td width="20%"> Quantity </td>
                                                            <td width="20%"> Sale Price </td>
                                                        </tr>

                                                        @foreach ($products as $item)
                                                        <tr>
                                                            <th><a href="javascript:void(0);" title="{{$item->item_name}}">{{ Str::limit($item->item_name,28) }}</a></th>
                                                            <th>{{$item->qty}}</th>
                                                            <th>{{$item->sub_total_cost}}</th>
                                                        </tr>
                                                        @endforeach
                                                    @else

                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr style="background: gray; padding-top:8px;padding-bottom:8px;">
                                                        <th class="text-center text-white" colspan="2" style="font-size:22px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                            Sales Details</th>
                                                    </tr>

                                                    <tr>
                                                        <th> <p class="m-0"><strong>Deal Type : {{ucfirst($rfq->deal_type)}}</strong></p> <input class="deal_type_value" name="deal_type_value" type="hidden" value="{{$deal_type_value}}"></th>
                                                        <th colspan="2"> <p class="m-0"><strong>Total Amount : &nbsp; &nbsp; $ {{ $sourcing->grand_total }}</strong></p></th>

                                                    </tr>

                                                    <tr>
                                                        <th width="33%">
                                                            @php
                                                                for ($m = 1; $m <= 12; $m++) {
                                                                    $months[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                                                }
                                                            @endphp
                                                            <div class="row m-0">
                                                                <div class="col-sm-12">
                                                                    <h6 class="mb-0">Month <span class="text-danger">*</span></h6>
                                                                </div>
                                                                <div class="form-group text-secondary col-sm-12">
                                                                    <select name="month" class="form-select"
                                                                        data-placeholder="Choose month " required>
                                                                        <option></option>
                                                                        @foreach ($months as $month)
                                                                            <option
                                                                                value="{{ Str::lower($month) }}">{{ $month }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>



                                                        </th>
                                                        <th width="33%">
                                                            <div class="row m-0">
                                                                <div class="col-sm-12">
                                                                    <h6 class="mb-0">Quarter <span class="text-danger">*</span></h6>
                                                                </div>
                                                                <div class="form-group text-secondary col-sm-12">
                                                                    <select name="quarter" class="form-select"
                                                                        data-placeholder="Chose Quarter " required>
                                                                        <option></option>
                                                                        <option value="q1">Q1</option>
                                                                        <option value="q2">Q2</option>
                                                                        <option value="q3">Q3</option>
                                                                        <option value="q4">Q4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th width="33%">

                                                                <div class="col-sm-12">
                                                                    <h6 class="mb-0">Fiscal Year</h6>
                                                                </div>
                                                                <div class="form-group col-sm-12 text-secondary">
                                                                    <input type="text" name="fiscal_year" id="datepicker"
                                                                        class="yearselect form-control" />
                                                                </div>
                                                            
                                                        </th>

                                                    </tr>


                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th width="10%">Assigned Manager</th>
                                                    <th width="9%">Quoted Amount</th>
                                                    <th width="5%">Shared Quote Percentage (%)</th>
                                                    <th width="13%">Shared Quote Amount</th>
                                                    <th width="13%">Closed Ratio</th>
                                                    <th width="5%">Profit Margin (%)</th>
                                                    <th width="11%">Effort</th>
                                                    <th width="9%">Performance Look</th>
                                                    <th width="5%">Rating</th>
                                                    <th width="5%">Incentive Percentage (%)</th>
                                                    <th width="13%">Incentive Amount</th>
                                                </tr>

                                                <tr>
                                                    <td>{{App\Models\User::where('id', $rfq->sales_man_id_L1)->value('name')}} <input type="hidden" name="sales_man_id_L1" value="{{$rfq->sales_man_id_L1}}"></td>
                                                    <td>{{ $sourcing->grand_total }} <input type="hidden" name="total_quoted_amount" value="{{ $sourcing->grand_total }}"></td>
                                                    <td><input class="form-control" type="text" name="shared_quote_percentage_L1"></td>
                                                    <td><input class="form-control" type="text" name="shared_quote_amount_L1" readonly></td>
                                                    <td><input class="form-control" type="text" name="closed_ratio_L1" readonly></td>
                                                    <td><input class="form-control text-center" type="text" name="profit_margin_L1" value="{{($sourcing->net_profit_percentage)*10}}" readonly></td>
                                                    <td>
                                                        <select class="form-select" name="effort_L1" required>
                                                                <option></option>
                                                                @foreach ($efforts as $item)
                                                                    <option value="{{$item->effort}}">{{$item->effort}} %</option>
                                                                @endforeach
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" type="text" name="perform_look_L1" readonly></td>
                                                    <td><input class="form-control" type="text" name="rating_L1" readonly></td>
                                                    <td><input class="form-control incentive_percentage_L1" type="text" name="incentive_percentage_L1" value="0.00" readonly></td>
                                                    <td><input class="form-control" type="text" name="incentive_amount_L1" readonly></td>
                                                </tr>
                                                @if ($rfq->sales_man_id_T1)
                                                    <tr>
                                                        <td>{{App\Models\User::where('id', $rfq->sales_man_id_T1)->value('name')}} <input type="hidden" name="sales_man_id_T1" value="{{$rfq->sales_man_id_T1}}"></td>
                                                        <td>{{ $sourcing->grand_total }}</td>
                                                        <td><input class="form-control" type="text" name="shared_quote_percentage_T1"></td>
                                                        <td><input class="form-control" type="text" name="shared_quote_amount_T1" readonly></td>
                                                        <td><input class="form-control" type="text" name="closed_ratio_T1" readonly></td>
                                                        <td><input class="form-control text-center" type="text" name="profit_margin_T1" value="{{($sourcing->net_profit_percentage)*10}}" readonly></td>
                                                        <td>
                                                            <select class="form-select" name="effort_T1" required>
                                                                <option></option>
                                                                @foreach ($efforts as $item)
                                                                    <option value="{{$item->effort}}">{{$item->effort}} %</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input class="form-control" type="text" name="perform_look_T1" readonly></td>
                                                        <td><input class="form-control" type="text" name="rating_T1" readonly></td>
                                                        <td><input class="form-control" type="text" name="incentive_percentage_T1" readonly></td>
                                                        <td><input class="form-control" type="text" name="incentive_amount_T1" readonly></td>
                                                    </tr>
                                                @endif
                                                @if ($rfq->sales_man_id_T2)
                                                    <tr>
                                                        <td>{{App\Models\User::where('id', $rfq->sales_man_id_T2)->value('name')}} <input type="hidden" name="sales_man_id_T2" value="{{$rfq->sales_man_id_T2}}"></td>
                                                        <td>{{ $sourcing->grand_total }}</td>
                                                        <td><input class="form-control" type="text" name="shared_quote_percentage_T2"></td>
                                                        <td><input class="form-control" type="text" name="shared_quote_amount_T2" readonly></td>
                                                        <td><input class="form-control" type="text" name="closed_ratio_T2" readonly></td>
                                                        <td><input class="form-control text-center" type="text" name="profit_margin_T2" value="{{($sourcing->net_profit_percentage)*10}}" readonly></td>
                                                        <td>
                                                            <select class="form-select" name="effort_T2" required>
                                                                <option></option>
                                                                @foreach ($efforts as $item)
                                                                    <option value="{{$item->effort}}">{{$item->effort}} %</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input class="form-control" type="text" name="perform_look_T2" readonly></td>
                                                        <td><input class="form-control" type="text" name="rating_T2" readonly></td>
                                                        <td><input class="form-control" type="text" name="incentive_percentage_T2" readonly></td>
                                                        <td><input class="form-control" type="text" name="incentive_amount_T2" readonly></td>
                                                    </tr>
                                                @endif


                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-info">Submit <i class="mx-2 ph-paper-plane"></i></button>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /content area -->
        <!-- /inner content -->

        <div id="show-sas" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title">SAS Details : {{ $rfq->rfq_code }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body border br-7">
                        <div class="content">

                            <div class="center d-none">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="regular" value="1" id="flexRadioDefault1" {{ $rfq->regular == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Regular Discount
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="special" value="1" id="flexRadioDefault1" {{ $rfq->special == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Special Discount
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tax_status" value="1" id="flexRadioDefault1" {{ $rfq->tax_status == '1' ? 'checked' : '' }}>
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
                                                            <th class="text-white">RFQ Code :  {{ $rfq->rfq_code }}
                                                                <input type="hidden" name="rfq_code" value="{{ $rfq->rfq_code }}">
                                                                <input type="hidden" name="rfq_id" value="{{ $rfq->id }}">
                                                            </th>
                                                            <th class="text-white">SAS Create Date :
                                                                {{$rfq->create_date}}

                                                            </th>
                                                            <th class="text-white text-center">
                                                                This Deal is for our @if ($rfq->client_type == 'partner')
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
                                                            <th width="10%" class="rg_discount d-none">Regular Discount</th>
                                                            <th width="10%" class="rg_discount d-none">Discounted Sales Price</th>
                                                            <th width="10%">Unit Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($products as $item)

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


                                                            <td class="border-none" width="45%" colspan="3">Sub Total</td>

                                                            <td class="border-none">
                                                                {{ $sourcing->sub_total_cost }}
                                                            </td>
                                                            <td class="rg_discount d-none border-none"></td>
                                                            <td class="rg_discount d-none border-none">{{ $sourcing->sub_total_discounted_sales }}</td>

                                                            <td class="border-none">{{ $sourcing->sub_total_sales }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="text-center table table-bordered table-hover">
                                                    <thead>
                                                        <tr class="special_discount d-none">
                                                            <th class="border-none" colspan="5" width="67%">Special Discount</th>
                                                            <th class="border-none">{{ $sourcing->special_discount }}  %</th>
                                                            <th class="border-none">{{ $sourcing->special_discounted_sales }}</th>
                                                        </tr>
                                                        <tr class="tax d-none">

                                                            <th class="border-none" colspan="5" width="67%">Tax/VAT</th>
                                                            <th class="border-none">{{ $sourcing->tax }}  %</th>
                                                            <th class="border-none">{{ $sourcing->tax_sales }}</th>
                                                        </tr>
                                                        <tr>

                                                            <th class="border-none" colspan="5" width="67%">Grand Total (With Everything)</th>
                                                            <th class="border-none" width="18%"></th>

                                                            <th class="border-none" width="15%">{{ $sourcing->grand_total }}</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>

                                            <div class="m-auto" style="width:60%;">
                                                <table class="text-center table table-bordered table-hover">
                                                    <tbody class="tb accordion padding text-center" id="accordion_expanded">
                                                        <tr class="bg-dark accordion_expense">
                                                            <td class="text-white" colspan="3">
                                                                <i class="ph-arrow-down"></i>&nbsp;&nbsp; Expenses
                                                            </td>
                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none" >Bank & Remittance Charge - (1.5%)</td>
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
                                                            <td class="border-none">Sales / Consultancy Comission - (5.0%)</td>
                                                            <td class="border-none">{{ $sourcing->sales_comission }} %
                                                            </td>
                                                        </tr>

                                                        <tr class="body_expense" style="display: none;">
                                                            <td class="border-none">Bank Loan / Liability / Debt - (5.0%)</td>
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
                                                            <td class="border-none">Loan / Capital / Partner Share - (5%)</td>
                                                            <td class="border-none">{{ $sourcing->capital_share }} %</td>
                                                        </tr>

                                                        <tr class="body_other" style="display: none;">
                                                            <td class="border-none">Management Cost - (5%)</td>
                                                            <td class="border-none">{{ $sourcing->management_cost }} %</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="border-none">Gross Profit (%) between Sales and Cost</td>
                                                            <td class="border-none">{{ $sourcing->gross_profit_subtotal }} %</td>
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

    </div>
@endsection

@once
@push('scripts')
<script>
    $('.client_select').on('change', function() {

            var client_value = $(this).find(":selected").val() ;

            if (client_value == 'client') {
                $(".client_display").removeClass("d-none");
                $(".partner_display").addClass("d-none");

            }
            else if (client_value == 'partner'){
                $(".partner_display").removeClass("d-none");
                $(".client_display").addClass("d-none");

            }
            else {
                $(".partner_display").addClass("d-none");
                $(".client_display").addClass("d-none");
            }

        });
</script>




<script type="text/javascript">

    $(document).ready(function(){

    });

</script>



<script>
    $('select[name="client_type"]').on('change', function(){
            var client_type = $(this).val();

            if (client_type == 'partner') {
                $('select[name="client_id"]').val('').change();
            }else if(client_type == 'client'){
                $('select[name="partner_id"]').val('').change();
            }else {
                $('select[name="client_id"]').val('').change();
                $('select[name="partner_id"]').val('').change();
            }

    });
</script>

<script>
    $('select[name="client_type"]').on('change', function(){
            var client_type = $(this).find(":selected").val();
            //alert(client_type)

                if (client_type == 'partner') {
                    $('.partner_account').removeClass('d-none');
                    $('.client_account').addClass('d-none');
                    $('select[name="partner_id"]').on('change', function(){
                        var partner = $('select[name="partner_id"]').find(":selected").val();
                        if (partner != null) {
                            $('.partner_account').addClass('d-none');
                            $('input[name="password"]').val('');
                        } else {
                            $('.partner_account').removeClass('d-none');
                        }
                    });
            }
            if(client_type  == 'client'){
                $('.client_account').removeClass('d-none');
                $('.partner_account').addClass('d-none');
                    $('select[name="client_id"]').on('change', function(){
                        var client = $('select[name="client_id"]').find(":selected").val();
                        if (client != null) {
                            $('.client_account').addClass('d-none');
                            $('input[name="password"]').val('');
                        } else {
                            $('.client_account').removeClass('d-none');
                        }
                    });
            }

    });

    $('.account').on('click', function(){
        if ($('.account').is(':checked')) {
        $('.user_password').removeClass('d-none');
        } else {
           $('.user_password').addClass('d-none');
        }
    });


    $("input[name='phone']").on('keyup change', function() {
        var password = $("input[name='phone']").val();
        $("input[name='password']").val(password);
    });
</script>

<script>
    $(document).ready(function() {
            $(".expand-switch").on('click', function(){
                //$("#additionalExpand").toggle();
                if ($(".expand-div").hasClass('d-none')) {
                    $(".expand-div").removeClass('d-none');
                    $(".icon").removeClass('fa-plus');
                    $(".icon").addClass('fa-minus');
                } else {
                    $(".expand-div").addClass('d-none');
                    $(".icon").removeClass('fa-minus');
                    $(".icon").addClass('fa-plus');
                }


            });


        });
</script>

@endpush
@endonce
