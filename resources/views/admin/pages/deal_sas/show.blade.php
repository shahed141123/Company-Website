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
                        <span class="breadcrumb-item active">SAS</span>
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

                <div class="row">

                    <div class="col-lg-11">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="text-center sasDT table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="3">RFQ Code: </th>
                                                <th colspan="2">SAS Create Date</th>
                                            </tr>
                                            <tr>

                                                <td colspan="3">{{ $rfq->rfq_code }}
                                                    <input type="hidden" name="rfq_code" value="{{ $rfq->rfq_code }}">
                                                    <input type="hidden" name="rfq_id" value="{{ $rfq->id }}">
                                                </td>

                                                <input type="hidden" name="create" value="{{ \Carbon\Carbon::now() }}">
                                                <td colspan="2">{{ \Carbon\Carbon::now() }}</td>
                                            </tr>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Cost (Cog Price)</th>
                                                <th>Sales Price</th>
                                            </tr>
                                            @foreach ($products as $item)
                                                <tr class="thd">
                                                    <td>{{ $item->item_name }}</td>
                                                        <input type="hidden" name="item_name[]" value="{{ $item->item_name }}">
                                                        <td>
                                                            <input type="hidden" name="qty[]" value="{{ $item->qty }}" id="qty">
                                                            {{ $item->qty }}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="unit_price[]" id="unit_price" value="{{ $item->unit_price }}">
                                                        </td>
                                                        <td>
                                                            <input class="cog_price" type="text" name="cog_price[]" value="{{ $item->cog_price }}">
                                                        </td>

                                                    <td><input class="sales_price" type="text"
                                                            name="sales_price[]" readonly value="{{ $item->sales_price }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th></th>

                                                <th colspan="2">Sub Total</th>

                                                <th><input type="text" name="sub_total_cost" readonly value="{{ $sourcing->sub_total_cost }}"></th>
                                                <th><input type="text" name="sub_total_sales" readonly value="{{ $sourcing->sub_total_sales }}"></th>
                                            </tr>
                                            <tr>

                                                <th colspan="2">Special Discount</th>
                                                <th><input type="text" name="special_discount" value="{{ $sourcing->special_discount }}"></th>
                                                <th><input type="text" name="discounted_cost" readonly value="{{ $sourcing->discounted_cost }}"></th>
                                                <th><input type="text" name="discounted_sales" readonly value="{{ $sourcing->discounted_sales }}"></th>
                                            </tr>
                                        </thead>

                                        <tbody class="tb">


                                            <tr class="bg-dark text-white">
                                                <td class="text-white" colspan="3">Expenses</td>
                                            </tr>
                                            <tr>
                                                <td >Bank & Remittance Charge - (1.5%)</td>
                                                <td >
                                                    <input class="multiplyValue" type="text" name="bank_charge" value="{{ $sourcing->bank_charge }}">
                                                </td>
                                                <td width="20%">
                                                    <input type="text" class="result" readonly value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Customs & Duty - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="customs" value="{{ $sourcing->customs }}">
                                                </td>
                                                <td width="20%"><input type="text" class="result" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Tax / AIT / VAT - (10.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="tax" value="{{ $sourcing->tax }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">HR , Office & Utility Cost- (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="utility_cost" value="{{ $sourcing->utility_cost }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Shipping & Handling Cost- (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="shiping_cost" value="{{ $sourcing->shiping_cost }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="60%">Sales / Consultancy Comission - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue"
                                                        value="{{ $sourcing->sales_comission }}" type="text"
                                                        name="sales_comission">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Bank Loan / Liability / Debt - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="liability" value="{{ $sourcing->liability }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr class="bg-dark">
                                                <td class="text-white" colspan="3">Offering Value Adding</td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Promo / Deal / Regular Discounts</td>
                                                <td width="20%"><input class="multiplyValue"
                                                        value="{{ $sourcing->regular_discounts }}" type="text"
                                                        name="regular_discounts"></td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Deal Closing / Rebates</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="rebates" value="{{ $sourcing->rebates }}"></td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="bg-dark text-white">Other Income</td>

                                            </tr>
                                            <tr>
                                                <td width="60%">Loan / Capital / Partner Share - (5%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="capital_share" value="{{ $sourcing->capital_share }}"></td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Management Cost - (5%)</td>
                                                <td style="width:20%;"><input class="multiplyValue" type="text"
                                                        name="management_cost" value="{{ $sourcing->management_cost }}">
                                                </td>
                                                <td style="width:20%;"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Net Profit - (5%)</td>
                                                <td style="width:20%;"><input class="multiplyValue" type="text"
                                                        name="net_profit" value="{{ $sourcing->net_profit }}"></td>
                                                <td style="width:20%;"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Gross Profit (%) between Sales and Cost</td>
                                                <td style="width:20%;">TK. <input class="gross_profit_subtot"
                                                        type="text" name="gross_profit" readonly
                                                        value="{{ $sourcing->gross_profit }}"></td>
                                                <td style="width: 20%;">TK. <input type="text"
                                                        class="additional_subtot" readonly
                                                        value="{{ $sourcing->net_profit }}">
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
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $("input[name='unit_price[]']").on('mouseover change', function() {


                var mult = 0;
                // for each row:
                $("tr.thd").each(function () {
                    // get the values from this row:
                    var unit_price = $("input[name='unit_price[]']" , this).val();
                    var $qty = $("input[name='qty[]']" , this).val();

                    var $total = ($qty * 1) * (unit_price * 1);
                    // set total for the row
                    $(this).find(".cog_price").val($total);
                    mult += $total;
                });
                $("input[name='sub_total_cost']").val(mult);

                    ///discount calculation
                    if (($("input[name='special_discount']").val()) == 0) {

                    } else {

                        var discount = $("input[name='special_discount']").val();
                        var subtotal_cost = $("input[name='sub_total_cost']").val();
                        var subtotal_sales = $("input[name='sub_total_sales']").val();

                        var discounted_cost = parseFloat(subtotal_cost) - parseFloat(((subtotal_cost * discount) / 100).toFixed(3));
                        var discounted_sales = parseFloat(subtotal_sales) - parseFloat(((subtotal_sales * discount) / 100).toFixed(3));
                        if (isNaN(discounted_sales)) {
                            var discounted_sales = 0;
                        } else {
                            var discounted_sales = discounted_sales;
                        }


                        $("input[name='discounted_cost']").val(parseFloat((discounted_cost).toFixed(2)));
                        $("input[name='discounted_sales']").val(parseFloat((discounted_sales).toFixed(2)));
                    }
                    ///discount calculation

            });

            $('.multiplyValue').on('mouseover change', function() {


                var $price = $("input[name='sub_total_cost']").val();

                var profit = 0;
                var additional = 0;
                var $sales_price = 0;
                // for each row:
                $("tbody.tb tr").each(function() {
                    // get the values from this row:
                    var $value = $('.multiplyValue', this).val();

                    var $result = parseFloat((($price * $value) / 100).toFixed(3));
                    // set total for the row
                    $('.result', this).val($result);


                    var $mlval = parseFloat($('.multiplyValue', this).val());
                    profit += isNaN($mlval) ? 0 : $mlval;
                    var $stval = parseFloat($result);
                    additional += isNaN($stval) ? 0 : $stval;

                    //mult += $total;


                });
                var $additional = additional;
                var $sales_price = parseFloat($price) + parseFloat($additional);


                var profit = parseFloat((profit).toFixed(2));
                var additional = parseFloat((additional).toFixed(2));
                var $sales_price = parseFloat(($sales_price).toFixed(2));



                //alert($sales_price);
                $('.gross_profit_subtot').val(profit);
                $('.additional_subtot').val(additional);
                $('.sales_price').val($sales_price);


                var sales_mult = 0;
                // for each row:
                $("tr.thd").each(function () {
                    // get the values from this row:

                    var unit_price = $("input[name='unit_price[]']" , this).val();
                    var $qty = $("input[name='qty[]']" , this).val();
                    //alert(unit_price);
                    var cost_total = ($qty * 1) * (unit_price * 1);
                    // set total for the row
                    var sales_total = parseFloat((additional).toFixed(2)) + parseFloat((cost_total).toFixed(2));
                    $(this).find(".sales_price").val((sales_total).toFixed(2));
                    sales_mult += sales_total;
                });
                $("input[name='sub_total_sales']").val((sales_mult).toFixed(2));

                    ///discount calculation
                    if (($("input[name='special_discount']").val()) == 0) {

                    } else {

                        var discount = $("input[name='special_discount']").val();
                        var subtotal_cost = $("input[name='sub_total_cost']").val();
                        var subtotal_sales = $("input[name='sub_total_sales']").val();

                        var discounted_cost = parseFloat(subtotal_cost) - parseFloat(((subtotal_cost * discount) / 100).toFixed(3));
                        var discounted_sales = parseFloat(subtotal_sales) - parseFloat(((subtotal_sales * discount) / 100).toFixed(3));
                        if (isNaN(discounted_sales)) {
                            var discounted_sales = 0;
                        } else {
                            var discounted_sales = discounted_sales;
                        }


                        $("input[name='discounted_cost']").val(parseFloat((discounted_cost).toFixed(2)));
                        $("input[name='discounted_sales']").val(parseFloat((discounted_sales).toFixed(2)));
                    }
                    ///discount calculation

            });

            $("input[name='special_discount']").on('mouseover change', function() {
                var discount = $(this).val();
                var subtotal_cost = $("input[name='sub_total_cost']").val();
                var subtotal_sales = $("input[name='sub_total_sales']").val();

                var discounted_cost = parseFloat(subtotal_cost) - parseFloat(((subtotal_cost * discount) / 100).toFixed(3));
                var discounted_sales = parseFloat(subtotal_sales) - parseFloat(((subtotal_sales * discount) / 100).toFixed(3));
                if (isNaN(discounted_sales)) {
                    var discounted_sales = 0;
                } else {
                    var discounted_sales = discounted_sales;
                }
                $("input[name='discounted_cost']").val(parseFloat((discounted_cost).toFixed(2)));
                $("input[name='discounted_sales']").val(parseFloat((discounted_sales).toFixed(2)));
            });

            //*
        </script>

<script>
    $(document).ready(function(){
    $(".allow_numeric").on("input", function(evt) {
    var self = $(this);
    self.val(self.val().replace(/\D/g, ""));
    if ((evt.which < 48 || evt.which > 57))
    {
        evt.preventDefault();
    }
    });

    $(".multiplyValue").on("input", function(evt) {
    var self = $(this);
    self.val(self.val().replace(/[^0-9\.]/g, ''));
    if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57))
    {
        evt.preventDefault();
    }
    });

    $("input[name='special_discount']").on("input", function(evt) {
    var self = $(this);
    self.val(self.val().replace(/[^0-9\.]/g, ''));
    if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57))
    {
        evt.preventDefault();
    }
    });

    });

</script>
    @endpush
@endonce
