@extends('admin.master')
@section('content')
    <style>
        .table th,
        table td {
            font-size: 13px !important;
        }


        .product_details:hover {
            color: white;
            cursor: pointer;
        }


        .form-control-sm {
            width: 100%;
            height: 25px;
            padding: 2px;
        }


        @media only screen and (max-width: 390px) {
            .product_sas_title {
                width: 100% !important;
            }
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
                        <a href="{{ route('supplychain') }}" class="breadcrumb-item">Supply Chain</a>
                        <a href="{{ route('product-sourcing.index') }}" class="breadcrumb-item">Sourcing</a>
                        <a href="{{ route('sas.index') }}" class="breadcrumb-item">SAS</a>
                        <span class="breadcrumb-item active">SAS Create</span>
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
            <form action="{{ route('sas.store') }}" method="post" id="sourcing-sas" autocomplete="off">
                @csrf
                <div class="row mb-3 p-0 m-0 d-flex align-items-center" style="border-bottom: 1px solid #d1d1d17f;">
                    <div class="col-lg-5 p-0 col-sm-12">
                        <div class="d-flex justify-content-start">
                            <p class="text-secondary fw-bold p-0 m-0">SAS REF :</p>
                            <p class="p-0 m-0 ms-2">
                                @php
                                    $today = date('dmy');
                                    $lastCode = App\Models\Admin\Sas::where('ref_code', 'like', 'SAS-' . $today . '%')
                                        ->orderBy('id', 'desc')
                                        ->first();

                                    if ($lastCode) {
                                        $lastNumber = explode('-', $lastCode->ref_code)[2];
                                        $newNumber = $lastNumber + 1;
                                    } else {
                                        $newNumber = 1;
                                    }

                                    $refCode = 'SAS-' . $today . '-' . $newNumber;
                                @endphp
                                <input type="hidden" name="ref_code" value="{{ $refCode }}">
                                {{ $refCode }}
                            </p>
                            <p class="text-secondary fw-bold p-0 m-0 ms-2">Price Status :</p>
                            <p class="p-0 m-0 ms-2 fw-bold">
                                {{ ucfirst($product->price_status) }}
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="">
                            <h6 class="text-center text-white bg-secondary py-1 mb-0 product_sas_title">
                                Product SAS Creation</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 p-0 col-sm-12">
                        <div class="d-flex justify-content-end">
                            <p class="text-secondary fw-bold p-0 m-0">Date :</p>
                            <p class="p-0 m-0 ms-2">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                {{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}
                            </p>

                        </div>
                    </div>
                </div>


                <div class="row mt-3 gx-2 ">
                    <div class="col-lg-8 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="bg-secondary p-1 text-white text-center mb-0"> Pricing Sheet</h6>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center mb-2 bg-white px-0 p-2 m-0">
                            <div class="col-lg-6 m-0 px-1">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-9 d-flex">
                                        <p class="fw-bold p-0 m-0"><span class="text-secondary">Item:</span></p>
                                        <p class="fw-bold p-0 text-center m-0 ps-1">
                                            {{ Str::limit($product->name, 44, '...') }}</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="p-0 m-0 d-flex justify-content-end">
                                            <div class="me-1">
                                                <a data-tip="Details" data-bs-toggle="modal"
                                                    data-bs-target="#productDetails"
                                                    class="badge bg-secondary rounded-0 product_details"><i
                                                        class="fa fa-eye "></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{ route('product-sourcing.edit', $product->id) }}"
                                                    target="_blank" class="badge bg-secondary rounded-0 product_details"><i
                                                        class="fa fa-pencil-alt "></i>
                                                </a>
                                            </div>


                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <span class="text-danger fw-bold p-0 m-0 ">Cost Of Goods</span>
                            </div>
                            <div class="col-lg-1 px-0">
                                <span>

                                    <input class="form-control form-control-sm" type="text" name="cog_price"
                                        value="{{ !empty($product->source_two_price) && !empty($product->source_one_price) && $product->source_one_price > $product->source_two_price ? $product->source_two_price : (!empty($product->source_one_price) ? $product->source_one_price : (!empty($product->competetor_one_price) ? $product->competetor_one_price : (!empty($product->competetor_two_price) ? $product->competetor_two_price : ''))) }}"
                                        id="cog_price">
                                </span>
                                {{-- @if ($product->source_one_approval == 1)

                                    <span><input class="form-control form-control-sm" type="text" name="cog_price"
                                            value="{{ $product->source_one_price }}" id="price1"></span>
                                @elseif($product->source_two_approval == 1)
                                    <span><input class="form-control form-control-sm" type="text" name="cog_price"
                                            value="{{ $product->source_two_price }}" id="price2"></span>
                                @else
                                    <span><input class="form-control form-control-sm" type="text" name="cog_price"
                                            id="price2"></span>
                                @endif --}}
                            </div>
                            <div class="col-lg-2">
                                <span class="text-danger fw-bold p-0 m-0">Sales Value</span>
                            </div>
                            <div class="col-lg-1 pe-1 ps-0">
                                <input class="sales_price form-control form-control-sm" type="text" name="sales_price"
                                    disabled value="">
                            </div>
                        </div>
                        <div class="row gx-1">
                            <div class="col-lg-6 mt-2">
                                {{-- Second --}}
                                <div class="row mb-2 bg-white rounded-0 m-0">
                                    <table class="datatable table table-bordered table-hover rounded-0">
                                        <tbody class="tb rounded-0 shadow">
                                            <tr class="  rounded-0" style="background-color: #24729759;">
                                                <td class="" colspan="3">
                                                    <h6 class="mb-0" style="font-size: 13px;">Expenses Table</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:10rem;">Bank & Remittance Charge - (1.5%)</td>
                                                <td width="20%"><input class="multiplyValue form-control form-control-sm"
                                                        type="text" name="bank_charge"></td>
                                                <td width="20%"><input type="text"
                                                        class="result form-control form-control-sm" disabled
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Customs & Duty - (5.0%)</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="customs">
                                                </td>
                                                <td width="20%"><input type="text"
                                                        class="result form-control form-control-sm" disabled
                                                        value="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="60%">HR , Office & Utility Cost- (5.0%)</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="utility_cost">
                                                </td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value="">
                                                </td>
                                            </tr>



                                            <tr>
                                                <td width="60%">Sales / Consult. Comission - (5.0%)</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="sales_comission">
                                                </td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Bank Loan / Liability / Debt - (5.0%)</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="liability">
                                                </td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Loan / Capital / Partner Share - (5%)</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="capital_share"></td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Management Cost - (5%)</td>
                                                <td style="width:20%;"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="management_cost"></td>
                                                <td style="width:20%;"><input class="result form-control form-control-sm management_cost"
                                                        type="text" disabled value=""></td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td width="60%">Tax / AIT / VAT - (10.0%)</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="tax">
                                                </td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Shipping & Handling Cost- (5.0%)</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="shiping_cost">
                                                </td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="row mb-1 bg-white rounded-0 m-0">
                                    <table class="datatable table table-bordered table-hover rounded-0">
                                        <tbody class="tb rounded-0 shadow">
                                            <tr class=" text-white rounded-0" style="background-color: #24729759;">
                                                <td class="text-white" colspan="3">
                                                    <h6 class="mb-0" style="font-size: 13px; color:#11445c;">Offering
                                                        Value Adding</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Promo / Deal / Regular Discounts</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="regular_discounts"></td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value=""></td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Deal Closing / Rebates</td>
                                                <td width="20%"><input
                                                        class="multiplyValue form-control form-control-sm" type="text"
                                                        name="rebates"></td>
                                                <td width="20%"><input class="result form-control form-control-sm"
                                                        type="text" disabled value=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row mb-1 bg-white rounded-0 m-0">
                                    <table class="datatable table table-bordered table-hover rounded-0">
                                        <tbody class="tb rounded-0 shadow">
                                            <tr class="rounded-0" style="background-color: #24729759;">
                                                <td colspan="3" class="">
                                                    <h6 class="mb-0" style="font-size: 13px; color:#11445c;">Other
                                                        Income</h6>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td style="width:60%;">Net Profit - (5%)</td>
                                                <td style="width:20%;"><input
                                                        class="form-control form-control-sm" type="text" value=""
                                                        name="net_profit" disabled></td>
                                                <td style="width:20%;"><input class="form-control form-control-sm" name="net_profit_amount"
                                                        type="text" disabled value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Gross Profit (%)</td>
                                                <td style="width:20%;"><input
                                                        class="gross_profit_subtot form-control form-control-sm"
                                                        type="text" name="gross_profit" disabled value="">
                                                </td>
                                                <td style="width: 20%;"><input type="text" name="gross_profit_amount"
                                                        class="additional_subtot form-control form-control-sm" disabled
                                                        value="">
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                {{-- Second --}}

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="p-1 text-white text-center mb-0" style="background: #87143e;">Competetitors &
                                    Comparison</h6>
                            </div>
                        </div>
                        <div class="py-2 p-2 bg-white m-0 border d-flex justify-content-between"
                            style="margin-top: 7px !important;">
                            <div>
                                <span>Lowest Source</span>
                            </div>

                            <div>
                                <span>{{ !empty($product->source_two_price) && $product->source_one_price > $product->source_two_price ? $product->source_two_price : $product->source_one_price }}</span>
                            </div>
                            <div>
                                <span>Lowest Competetor</span>
                            </div>
                            <div>
                                <span>{{ $product->competetor_one_price > $product->competetor_two_price ? $product->competetor_two_price : $product->competetor_one_price }}</span>
                            </div>
                        </div>
                        <div class="card rounded-0 mt-3">
                            <div class="card-header p-1 rounded-0" style="background: #d3aebb;">
                                <h6 class="mb-0 text-start" style="color: #580f29; font-size: 13px;">Competetitors Details
                                </h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-center datatable table-bordered table-hover ">
                                        <thead>
                                            <tr class="bg-light text-black">
                                                <th>Name</th>
                                                <th>Compttr. Price</th>
                                                <th>Our Price</th>
                                                <th>Diff.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="{{ $product->competetor_one_link }}" target="_blank">
                                                        {{ $product->competetor_one_name }}
                                                    </a>
                                                </td>
                                                <td>{{ $product->competetor_one_price }} <input type="hidden"
                                                        id="competetor_price1"
                                                        value="{{ $product->competetor_one_price }}"></td>
                                                <td>
                                                    <h6 id="ourprice1"></h6>
                                                </td>
                                                <td>
                                                    <h6 id="difference1"></h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="{{ $product->competetor_two_link }}" target="_blank">
                                                        {{ $product->competetor_two_name }}
                                                    </a>
                                                </td>
                                                <td>{{ $product->competetor_two_price }}<input type="hidden"
                                                        id="competetor_price2"
                                                        value="{{ $product->competetor_two_price }}"></td>
                                                <td>
                                                    <h6 id="ourprice2"></h6>
                                                </td>
                                                <td>
                                                    <h6 id="difference2"></h6>
                                                </td>
                                            </tr>



                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card rounded-0 mt-2" style="margin-top: -2px !important;">
                                <div class="card-header p-1 rounded-0" style="background: #d3aebb;">
                                    <h6 class="mb-0 text-start" style="color: #580f29; font-size: 13px;">Sourcing Details
                                    </h6>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-center datatable table-bordered table-hover ">
                                            <thead>
                                                <tr class="bg-light text-black">
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Estmt. Time</th>
                                                    <th>Country</th>
                                                </tr>
                                            <tbody>
                                                <tr>

                                                    <td><a href="{{ $product->source_one_link }}" target="_blank">
                                                            {{ $product->source_one_name }}</a>
                                                    </td>
                                                    <td>{{ $product->source_one_price }} </td>
                                                    <td>
                                                        {{ $product->source_one_estimate_time }}
                                                    </td>
                                                    <td>
                                                        {{ $product->source_one_country }}
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td><a href="{{ $product->source_two_link }}" target="_blank">
                                                            {{ $product->source_two_name }}</a>
                                                    </td>
                                                    <td>{{ $product->source_two_price }} </td>
                                                    <td>
                                                        {{ $product->source_two_estimate_time }}
                                                    </td>
                                                    <td>
                                                        {{ $product->source_two_country }}
                                                    </td>
                                                </tr>



                                            </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-end">
                                <a data-tip="Quick View" data-bs-toggle="modal" data-bs-target="#productReject"
                                    class="btn btn-info rounded-0" style=" width: 105px;">Reject</a>
                                <button type="submit" class="btn btn-info rounded-0"
                                    id="submitbtn"style="width: 105px;">Create
                                    <i class="ph-paper-plane-tilt mx-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- second Row --}}
            </form>
        </div>


        <!-- /Modal area -->
        @include('admin.pages.sas.partial.product_view')
        <!-- /Modal-->





    </div>
@endsection


@once
    @push('scripts')
        <script type="text/javascript">
            $("#sourcing-sas").bind("keypress", function(e) {
                if (e.keyCode == 13) {
                    return false;
                }
            });
            var myForm = $('#sourcing-sas');
            myForm.find('input').on('keyup change', function() {
                // if ($('#source_price').val() == 1) {
                //     var $price = $('#price1').val();
                //     alert($price);
                // } else {
                //     var $price = $('#price2').val();
                // }
                var $price = $('input[name="cog_price"]').val();
                var profit = 0;
                var additional = 0;
                var $sales_price = 0;
                var netProfit = $('input[name="management_cost"]').val();
                // alert(netProfit);
                $('input[name="net_profit"]').val(netProfit);
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
                var difference1 = parseFloat($sales_price) - parseFloat($('#competetor_price1').val());
                var difference2 = parseFloat($sales_price) - parseFloat($('#competetor_price2').val());


                var profit = parseFloat((profit).toFixed(2));
                var additional = parseFloat((additional).toFixed(2));
                var $sales_price = parseFloat(($sales_price).toFixed(2));
                var difference1 = parseFloat((difference1).toFixed(2));
                var difference2 = parseFloat((difference2).toFixed(2));




                //alert($sales_price);
                $('.gross_profit_subtot').val(profit);
                $('.additional_subtot').val(additional);
                $('.sales_price').val($sales_price);
                $('#ourprice1').html($sales_price);
                $('#ourprice2').html($sales_price);
                $('#difference1').html(difference1);
                $('#difference2').html(difference2);
                $('input[name="net_profit_amount"]').val($('.management_cost').val());

            });
        </script>
    @endpush
@endonce
