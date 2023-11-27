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
            <form action="{{ route('deal-sas.update',$rfq->rfq_code) }}" method="post" class="calculate">
                @csrf
                @method('PUT')
                <div class="rfq-top">
                    <div class="bg-dark mb-2">
                        <table class="text-center table table-hover br-7">
                            <thead>
                                <tr class="br-7">
                                    <th class="text-white">RFQ Code :  {{ $rfq->rfq_code }}
                                        <input type="hidden" name="rfq_code" value="{{ $rfq->rfq_code }}">
                                        <input type="hidden" name="rfq_id" value="{{ $rfq->id }}">
                                    </th>
                                    <th class="text-white">SAS Create Date :
                                        {{\Carbon\Carbon::parse($rfq->create_date)->format('d/m/Y')}}
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
                <div class="center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="regular" value="1" id="flexRadioDefault1" {{ $rfq->regular == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Regular Discount
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="special" value="1" id="flexRadioDefault2" {{ $rfq->special == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Special Discount
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tax_status" value="1" id="flexRadioDefault3" {{ $rfq->tax_status == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault3">
                          Tax / VAT
                        </label>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-11 my-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">


                                    <div class="mb-2" style="width: 70%; margin: auto;">
                                        <table class="text-center table table-bordered table-hover mb-3">
                                            <thead>
                                                <tr class="bg-gray">
                                                    <th width="18%">Item Name</th>
                                                    <th width="5%">Quantity</th>
                                                    <th width="5%">Unit Price</th>
                                                    <th width="5%">Cost (Cog Price)</th>
                                                    <th width="5%" class="rg_discount d-none">Regular Discount (%)</th>
                                                    <th width="5%">Discounted Sales Price</th>
                                                    <th width="5%">Unit Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $item)

                                                    <tr class="thd">
                                                        <td class="border-none">
                                                            {{-- {{ $item->item_name }} --}}
                                                            <input type="hidden" name="id[]" value="{{ $item->id }}">
                                                            <input type="text" class="w-10" name="item_name[]" value="{{ $item->item_name }}">
                                                        </td>

                                                        <td class="border-none">
                                                            <input type="text" class="w-6" name="qty[]" value="{{ $item->qty }}" id="qty">
                                                            {{-- {{ $item->qty }} --}}
                                                        </td>
                                                        <td class="border-none">
                                                            <input class="w-6" type="text" name="unit_price[]" id="unit_price" value="{{ $item->unit_price }}">
                                                        </td>
                                                        <td class="border-none">
                                                            <input class="cog_price w-6" type="text" name="cog_price[]" value="{{ $item->cog_price }}">
                                                        </td>
                                                        <td class="rg_discount d-none border-none">
                                                            <input class="regular_discount w-6" type="text" name="regular_discount[]" value="{{ $item->regular_discount }}">
                                                        </td>

                                                        <td class="border-none"><input class="discounted_sales w-6" type="text"
                                                                name="discounted_sales[]" value="{{ $item->discounted_sales }}">
                                                        </td>
                                                        <td class="border-none">
                                                            <input class="sales_price w-6" type="text"
                                                            name="sales_price[]" value="{{ $item->sales_price }}">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>


                                                    <td class="border-none" width="45%" colspan="3">Sub Total</td>

                                                    <td class="border-none"><input class="w-6" type="text" name="sub_total_cost" readonly value="{{ $sourcing->sub_total_cost }}"></td>
                                                    <td class="rg_discount d-none border-none"></td>
                                                    <td class="border-none"><input class="w-6" type="text" name="sub_total_discounted_sales" readonly value="{{ $sourcing->sub_total_discounted_sales }}"></td>

                                                    <td class="border-none"><input class="w-6" type="text" name="sub_total_sales" readonly value="{{ $sourcing->sub_total_sales }}"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="text-center table table-bordered table-hover">
                                            <thead>
                                                <tr class="special_discount d-none">
                                                    <th class="border-none" colspan="5" width="67%">Special Discount</th>
                                                    <th class="border-none"><input class="w-6" type="text" name="special_discount" value="{{ $sourcing->special_discount }}">  %</th>
                                                    <th class="border-none"><input class="w-6" type="text" name="special_discounted_sales" readonly value="{{ $sourcing->special_discounted_sales }}"></th>
                                                </tr>
                                                <tr class="tax d-none">

                                                    <th class="border-none" colspan="5" width="67%">Tax/VAT</th>
                                                    <th class="border-none"><input class="w-6" type="text" name="tax" value="{{ $sourcing->tax }}">  %</th>
                                                    <th class="border-none"><input class="w-6" type="text" name="tax_sales" readonly value="{{ $sourcing->tax_sales }}"></th>
                                                </tr>
                                                <tr>

                                                    <th class="border-none" colspan="5" width="67%">Grand Total (With Everything)</th>
                                                    <th class="border-none" width="18%"></th>

                                                    <th class="border-none" width="15%"><input class="w-6" type="text" name="grand_total" readonly value="{{ $sourcing->grand_total }}"></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>


                                    <div class="center">
                                        <table class="text-center table table-bordered table-hover">
                                            <tbody class="tb accordion padding" id="accordion_expanded">


                                                <tr class="bg-dark accordion_expense">
                                                    <td class="text-white" colspan="3">
                                                        <i class="ph-arrow-down"></i>&nbsp;&nbsp; Expenses
                                                    </td>
                                                </tr>


                                                <tr class="body_expense" style="display: none;">
                                                    <td class="border-none" >Bank & Remittance Charge - (1.5%)</td>
                                                    <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                            name="bank_charge" value="{{ $sourcing->bank_charge }}" >
                                                    </td>
                                                    <td class="border-none"><input type="text" class="result w-6" readonly
                                                            value="0">
                                                    </td>
                                                </tr>
                                                <tr class="body_expense" style="display: none;">
                                                    <td class="border-none">Customs & Duty - (5.0%)</td>
                                                    <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                            value="{{ $sourcing->customs }}" name="customs">
                                                    </td>
                                                    <td class="border-none"><input type="text" class="result w-6" readonly
                                                            value="0">
                                                    </td>
                                                </tr>
                                                {{-- <tr class="body_expense" style="display: none;">
                                                    <td class="border-none">Tax / AIT / VAT - (10.0%)</td>
                                                    <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                            name="tax">
                                                    </td>
                                                    <td class="border-none"><input class="result w-6" type="text" readonly
                                                            value="">
                                                    </td>
                                                </tr> --}}
                                                <tr class="body_expense" style="display: none;">
                                                    <td class="border-none">HR , Office & Utility Cost- (5.0%)</td>
                                                    <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                            value="{{ $sourcing->utility_cost }}" name="utility_cost">
                                                    </td>
                                                    <td class="border-none"><input class="result w-6" type="text" readonly
                                                            value="0">
                                                    </td>
                                                </tr>
                                                <tr class="body_expense" style="display: none;">
                                                    <td class="border-none">Shipping & Handling Cost- (5.0%)</td>
                                                    <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                            value="{{ $sourcing->shiping_cost }}" name="shiping_cost">
                                                    </td>
                                                    <td class="border-none"><input class="result w-6" type="text" readonly
                                                            value="0">
                                                    </td>
                                                </tr>

                                                <tr class="body_expense" style="display: none;">
                                                    <td class="border-none">Sales / Consultancy Comission - (5.0%)</td>
                                                    <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                            value="{{ $sourcing->sales_comission }}" name="sales_comission">
                                                    </td>
                                                    <td class="border-none"><input class="result w-6" type="text" readonly
                                                            value="0">
                                                    </td>
                                                </tr>
                                                <tr class="body_expense" style="display: none;">
                                                    <td class="border-none">Bank Loan / Liability / Debt - (5.0%)</td>
                                                    <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                            value="{{ $sourcing->liability }}" name="liability">
                                                    </td>
                                                    <td class="border-none"><input class="result w-6" type="text" readonly
                                                            value="0">
                                                    </td>
                                                </tr>




                                                <tr class="bg-dark accordion_offer">
                                                    <td class="border-none text-white" colspan="3">
                                                        <i class="ph-arrow-down"></i>&nbsp;&nbsp;
                                                        Offering Value Adding
                                                    </td>
                                                </tr>


                                                    {{-- <tr class="body_offer" style="display: none;">
                                                        <td class="border-none">Promo / Deal / Regular Discounts</td>
                                                        <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                                name="regular_discounts"></td>
                                                        <td class="border-none"><input class="result w-6" type="text" readonly
                                                                value=""></td>
                                                    </tr> --}}
                                                    <tr class="body_offer" style="display: none;">
                                                        <td class="border-none">Deal Closing / Rebates</td>
                                                        <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                                name="rebates" value="{{ $sourcing->rebates }}"></td>
                                                        <td class="border-none"><input class="result w-6" type="text" readonly
                                                                value="0">
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
                                                        <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                                name="capital_share" value="{{ $sourcing->capital_share }}"></td>
                                                        <td class="border-none"><input class="result w-6" type="text" readonly
                                                                value="0"></td>
                                                    </tr>
                                                    <tr class="body_other" style="display: none;">
                                                        <td class="border-none">Management Cost - (5%)</td>
                                                        <td class="border-none"><input class="multiplyValue w-6" type="text"
                                                                name="management_cost" value="{{ $sourcing->management_cost }}"></td>
                                                        <td class="border-none"><input class="result w-6" type="text" readonly
                                                                value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="border-none">Gross Profit (%) between Sales and Cost</td>
                                                        <td class="border-none"><input class="gross_profit_subtotal w-6"
                                                                type="text" name="gross_profit_subtotal" readonly value="{{ $sourcing->gross_profit_subtotal }}">%</td>
                                                        <td class="border-none">TK.
                                                            <input type="text" class="additional_subtot w-6" name="gross_profit_amount" readonly value="{{ $sourcing->gross_profit_amount }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-none">Net Profit - (5%)</td>
                                                        <td class="border-none">
                                                            <input class="multiplyValue w-6" type="text"
                                                                name="net_profit_percentage" value="{{ $sourcing->net_profit_percentage }}">
                                                            </td>
                                                        <td class="border-none"><input class="result w-6" type="text" name="net_profit_amount" readonly
                                                                value="{{ $sourcing->net_profit_amount }}">
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
                <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary mx-3" id="submitbtn">
                            Update SAS<i class="ph-paper-plane-tilt mx-2"></i></button>
                    </div>

                </div>

            </form>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
    {{-- <!-- Show Regula Tax and special discount radio -->
        <script>
            $("input[name='regular']").on('change', function() {

                if ($(this).is(":checked")) {
                    $(".rg_discount").removeClass("d-none");
                }

                else {
                    $(".rg_discount").addClass("d-none");
                }

            });
            $("input[name='special']").on('change', function() {

                if ($(this).is(":checked")) {
                    $(".special_discount").removeClass("d-none");
                }

                else {
                    $(".special_discount").addClass("d-none");
                }

            });
            $("input[name='tax_status']").on('change', function() {

                if ($(this).is(":checked")) {
                    $(".tax").removeClass("d-none");
                }

                else {
                    $(".tax").addClass("d-none");
                }

            });

        </script>
    <!-- Show Regula Tax and special discount radio -->

    <!-- Show Tax and special discount div -->
        <script>
            $(document).mouseover(function(event) {

                if ($("input[name='regular']").is(":checked")) {
                    $(".rg_discount").removeClass("d-none");
                }

                else {
                    $(".rg_discount").addClass("d-none");
                }

            });
            $(document).mouseover(function(event) {

                if ($("input[name='special']").is(":checked")) {
                    $(".special_discount").removeClass("d-none");
                }

                else {
                    $(".special_discount").addClass("d-none");
                }

            });
            $(document).mouseover(function(event) {

                if ($("input[name='tax_status']").is(":checked")) {
                    $(".tax").removeClass("d-none");
                }

                else {
                    $(".tax").addClass("d-none");
                }

            });

        </script>
    <!-- Show Tax and special discount div -->

    <!-- Special Discount and Tax calculation -->
        <script type="text/javascript">

            $("input[name='special_discount']").on('keyup change', function() {
                var discount = $(this).val();
                var subtotal_sales = $("input[name='sub_total_sales']").val();
                var grand_total = $("input[name='grand_total']").val();


                var special_discounted_sales = parseFloat(subtotal_sales) - parseFloat(((subtotal_sales * discount) / 100).toFixed(2));

                $("input[name='special_discounted_sales']").val(parseFloat((special_discounted_sales).toFixed(2)));
                $("input[name='grand_total']").val(parseFloat((special_discounted_sales).toFixed(2)));
            });

            $("input[name='tax']").on('keyup change', function() {
                var tax = $(this).val();
                if (isNaN($("input[name='special_discount']").val())) {
                    var subtotal_sales = $("input[name='sub_total_sales']").val();
                } else {
                    var subtotal_sales = parseFloat($("input[name='special_discounted_sales']").val()).toFixed(2)
                }


                var tax_sales = parseFloat(((subtotal_sales * tax) / 100).toFixed(2));
                var grand  =  parseFloat(subtotal_sales) + parseFloat(((subtotal_sales * tax) / 100).toFixed(2));

                $("input[name='tax_sales']").val(parseFloat((tax_sales).toFixed(2)));
                $("input[name='grand_total']").val(parseFloat((grand).toFixed(2)));
            });

            //*
        </script>
    <!-- Special Discount and Tax calculation -->




    <!-- Unit Total calculation -->
        <script>
            $("input[name='unit_price[]']").on('keyup change', function() {


                var mult = 0;
                // for each row:
                $("tr.thd").each(function () {
                    // get the values from this row:
                    var unit_price = $("input[name='unit_price[]']" , this).val();
                    var $qty = $("input[name='qty[]']" , this).val();

                    var $total = ($qty * 1) * (unit_price * 1);
                    // set total for the row
                    $(this).find(".cog_price").val(($total).toFixed(2));
                    $(this).find("input[name='sales_price[]']").val(($total).toFixed(2));
                    mult += $total;
                });
                $("input[name='sub_total_cost']").val((mult).toFixed(2));
                $("input[name='sub_total_sales']").val((mult).toFixed(2));
                $("input[name='grand_total']").val((mult).toFixed(2));

            });
        </script>
    <!-- Unit Total calculation -->

    <!-- Regular Discount calculation -->
        <script>
            $("input[name='regular_discount[]']").on('keyup change', function() {
                var mult = 0;
                // for each row:
                $("tr.thd").each(function () {
                    // get the values from this row:
                    var unit_price = $("input[name='cog_price[]']" , this).val();
                    var regular_discount = $("input[name='regular_discount[]']" , this).val();
                    //var discount = $("input[name='qty[]']" , this).val();

                    // var sales_addition = parseFloat((cog_price)) + parseFloat((cog_addition)) ;
                    //     //alert(sales_addition);
                        if (isNaN($('.gross_profit_subtotal').val())) {
                            var sales_addition = 0;
                        } else {
                            var cog_price = $("input[name='cog_price[]']" , this).val();
                            var gross = $('.gross_profit_subtotal').val();
                            var cog_addition = parseFloat(((cog_price * gross) / 100).toFixed(3));
                            //var sales_addition = parseFloat((cog_price * regular_discount) / 100).toFixed(2);
                        }


                    var $total = parseFloat(unit_price) - parseFloat(((unit_price * regular_discount) / 100).toFixed(3));
                    var total = parseFloat($total) + parseFloat(cog_addition);
                    //alert(total);
                    // set discounted_sales for the row
                    $(this).find("input[name='discounted_sales[]']").val(($total).toFixed(2));
                    $(this).find("input[name='sales_price[]']").val((total).toFixed(2));
                    mult += total;
                });
                $("input[name='sub_total_discounted_sales']").val((mult).toFixed(2));
                $("input[name='sub_total_sales']").val((mult).toFixed(2));
                $("input[name='grand_total']").val((mult).toFixed(2));
            })
        </script>
    <!-- Regular Discount calculation -->

    <!-- Expenses calculation -->
        <script>
            $('.multiplyValue').on('keyup change', function() {

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
                    var $result_value = parseFloat($('.result', this).val());
                    additional += isNaN($result_value) ? 0 : $result_value;

                });


                var profit = parseFloat(profit).toFixed(2);
                var $additional = parseFloat(additional).toFixed(2);

                    $('.gross_profit_subtotal').val(profit);
                    $("input[name='gross_profit_amount']").val($additional);
                    var sales_mult = 0;
                    $("tr.thd").each(function () {
                        // get the values from this row:

                        var cog_price = $("input[name='cog_price[]']" , this).val();
                        var gross = $('.gross_profit_subtotal').val();
                        var cog_addition = parseFloat(((cog_price * gross) / 100).toFixed(3));
                        var sales_addition = parseFloat((cog_price)) + parseFloat((cog_addition)) ;
                        //alert(sales_addition);
                        if (isNaN($("input[name='discounted_sales[]']" , this).val())) {
                            var regular_discount = 0;
                        } else {
                            var regulardiscount = $("input[name='regular_discount[]']" , this).val();
                            var regular_discount = parseFloat((cog_price * regulardiscount) / 100).toFixed(2);
                        }
                        // alert(cog_addition);
                        // alert(cog_price);
                        // alert(regular_discount);

                        // set total for the row

                        var sales_total = parseFloat(sales_addition).toFixed(2) - parseFloat(regular_discount).toFixed(2) ;
                        $(this).find("input[name='sales_price[]']").val((sales_total).toFixed(2));
                        sales_mult += sales_total;
                    });
                    $("input[name='sub_total_sales']").val((sales_mult).toFixed(2));
                    $("input[name='grand_total']").val((sales_mult).toFixed(2));

                    // discount and tax


                var discount = $("input[name='special_discount']").val();
                var subtotal_sales = $("input[name='sub_total_sales']").val();

                if ((("input[name='special_discount']").val()) > 0) {
                    var subtotal_sales = parseFloat($("input[name='special_discounted_sales']").val()).toFixed(2);
                    var special_discounted_sales = parseFloat(subtotal_sales) - parseFloat(((subtotal_sales * discount) / 100).toFixed(2));
                    $("input[name='special_discounted_sales']").val(parseFloat((special_discounted_sales).toFixed(2)));
                    $("input[name='grand_total']").val(parseFloat((special_discounted_sales).toFixed(2)));
                } else {
                    var special_discounted_sales = 0;
                    $("input[name='special_discounted_sales']").val(parseFloat((special_discounted_sales).toFixed(2)));
                    $("input[name='grand_total']").val(parseFloat((subtotal_sales).toFixed(2)));
                }

                var tax = $("input[name='tax']").val();
                var grand_total = parseFloat($("input[name='grand_total']").val()).toFixed(2);
                if ((tax) > 0) {
                    var grand  =  parseFloat(grand_total) + parseFloat(((grand_total * tax) / 100).toFixed(2));
                    $("input[name='tax_sales']").val(parseFloat((tax_sales).toFixed(2)));
                    $("input[name='grand_total']").val(parseFloat((grand).toFixed(2)));
                } else {
                    var tax_sales = 0;
                    var grand_total = parseFloat($("input[name='grand_total']").val()).toFixed(2);
                    $("input[name='tax_sales']").val(parseFloat((tax_sales).toFixed(2)));
                    $("input[name='grand_total']").val(parseFloat((grand_total).toFixed(2)));
                }







            });

        </script>
    <!-- Expenses calculation -->

    <!-- expand table and calculate -->
        <script>
            $( ".accordion_expense" ).click(function() {
                $( ".body_expense" ).toggle();
            });
            $( ".accordion_offer" ).click(function() {
                $( ".body_offer" ).toggle();
            });
            $( ".accordion_other" ).click(function() {
                $( ".body_other" ).toggle();
            });
        </script>--}}


        <script>
            $( "tbody.tb tr" ).click(function() {
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
                    var $result_value = parseFloat($('.result', this).val());
                    additional += isNaN($result_value) ? 0 : $result_value;

                });


                var profit = parseFloat(profit).toFixed(2);
                var $additional = parseFloat(additional).toFixed(2);

                    $('.gross_profit_subtotal').val(profit);
                    $("input[name='gross_profit_amount']").val($additional);
                    var sales_mult = 0;
                    $("tr.thd").each(function () {
                        // get the values from this row:

                        var cog_price = $("input[name='cog_price[]']" , this).val();
                        var gross = $('.gross_profit_subtotal').val();
                        var cog_addition = parseFloat(((cog_price * gross) / 100).toFixed(3));
                        var sales_addition = parseFloat((cog_price)) + parseFloat((cog_addition)) ;
                        //alert(sales_addition);
                        if (isNaN($("input[name='discounted_sales[]']" , this).val())) {
                            var regular_discount = 0;
                        } else {
                            var regulardiscount = $("input[name='regular_discount[]']" , this).val();
                            var regular_discount = parseFloat((cog_price * regulardiscount) / 100).toFixed(2);
                        }
                        // alert(cog_addition);
                        // alert(cog_price);
                        // alert(regular_discount);

                        // set total for the row

                        var sales_total = parseFloat(sales_addition).toFixed(2) - parseFloat(regular_discount).toFixed(2) ;
                        $(this).find("input[name='sales_price[]']").val((sales_total).toFixed(2));
                        sales_mult += sales_total;
                    });
                    $("input[name='sub_total_sales']").val((sales_mult).toFixed(2));
                    //$("input[name='grand_total']").val((sales_mult).toFixed(2));

            });

        </script>

    <!-- expand table and calculate -->


    @endpush
@endonce
