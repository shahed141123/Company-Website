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
            <form action="{{ route('deal-sas.store') }}" method="post" class="calculate">
                @csrf
                <div class="container-fluid">
                    <div class="row mb-3 p-0 m-0 d-flex align-items-center" style="border-bottom: 1px solid #d1d1d17f;">
                        <div class="col-lg-4 p-0 col-sm-12">
                            <div class="d-flex justify-content-start">
                                <p class=" p-0 m-0">
                                    This Deal is for our @if ($rfq->client_type == 'partner')
                                        <span class="text-secondary fw-bold">Partner</span>
                                    @else
                                        <span class="text-secondary fw-bold">Client</span>
                                    @endif
                                </p>
                            </div>
                            <div class="d-flex">
                                <div class="form-check w-100">
                                    <input class="form-check-input" type="checkbox" name="regular" value="1"
                                        style="width: 15px;
                                    height: 15px; float: none;"
                                        id="flexRadioDefault1" {{ $rfq->regular == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Regular Discount
                                    </label>
                                </div>
                                <div class="form-check w-100">
                                    <input class="form-check-input" type="checkbox" name="special" value="1"
                                        style="width: 15px;
                                    height: 15px; float: none;"
                                        id="flexRadioDefault2" {{ $rfq->special == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Special Discount
                                    </label>
                                </div>
                                <div class="form-check w-100">
                                    <input class="form-check-input" type="checkbox" name="tax_status" value="1"
                                        style="width: 15px;
                                    height: 15px; float: none;"
                                        id="flexRadioDefault3" {{ $rfq->tax_status == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Tax / VAT
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="d-flex justify-content-center">
                                <h6 class="text-center text-white bg-secondary py-1 mb-0 product_sas_title"
                                    style="position: absolute; top: 67px; padding: 14px;">
                                    Deal SAS For RFQ Code : {{ $rfq->rfq_code }}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 col-sm-12">
                            <div class="d-flex justify-content-end">
                                <p class="text-secondary fw-bold p-0 m-0">Date :</p>
                                <p class="p-0 m-0 ms-2">
                                    <input type="hidden" name="product_id" value="404">
                                    19/07/2023 13:28:33
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive calculate">
                                <div class="mb-2">
                                    <table class="text-center table table-bordered table-hover mb-1 bg-white border">
                                        <thead class="">
                                            <tr class="bg-gray">
                                                <th width="18%">Item Name</th>
                                                <th width="5%">Quantity</th>
                                                <th width="5%">Unit Price</th>
                                                <th width="10%">Cost (Cog Price)</th>
                                                <th width="10%" class="rg_discount d-none">Regular Discount (%)</th>
                                                <th width="10%">Discounted Sales Price</th>
                                                <th width="5%">Unit Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr class="thd">
                                                    <td class="border-none">
                                                        {{ $item->item_name }}
                                                        <input class="form-control form-control-sm" type="hidden"
                                                            name="id[]" value="{{ $item->id }}">
                                                        <input type="hidden" name="item_name[]"
                                                            value="{{ $item->item_name }}">
                                                    </td>
                                                    <td class="border-none">
                                                        <input class="form-control form-control-sm" type="hidden"
                                                            name="qty[]" value="{{ $item->qty }}" id="qty">
                                                        {{ $item->qty }}
                                                    </td>
                                                    <td class="border-none">
                                                        <input class="form-control form-control-sm" type="text"
                                                            name="unit_price[]" id="unit_price"
                                                            value="{{ $item->unit_price }}">
                                                    </td>
                                                    <td class="border-none">
                                                        <input class="cog_price form-control form-control-sm"
                                                            type="text" name="cog_price[]">
                                                    </td>
                                                    <td class="rg_discount d-none border-none ">
                                                        <input class="regular_discount form-control form-control-sm"
                                                            type="text" name="regular_discount[]">
                                                    </td>
                                                    <td class="border-none"><input
                                                            class="discounted_sales form-control form-control-sm"
                                                            type="text" name="discounted_sales[]" disabled>
                                                    </td>
                                                    <td class="border-none">
                                                        <input class="sales_price form-control form-control-sm"
                                                            type="text" name="sales_price[]" disabled>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td class="border-none"></td>
                                                <td class="border-none" colspan="2">Sub Total</td>
                                                <td class="border-none"><input class="form-control form-control-sm"
                                                        type="text" name="sub_total_cost" disabled></td>
                                                <td class="rg_discount d-none border-none"></td>
                                                <td class="border-none"><input class="form-control form-control-sm"
                                                        type="text" name="sub_total_discounted_sales" disabled></td>
                                                <td class="border-none"><input class="form-control form-control-sm"
                                                        type="text" name="sub_total_sales" disabled></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="text-center table table-bordered table-hover mb-5 border-0 bg-white">
                                        <thead>
                                            {{-- Special Discount --}}
                                            <tr class="special_discount d-none bg-white text-muted">
                                                <td class="p-0 text-end border-bottom-0 pe-2">Special Discount</td>
                                                <td class="p-1 border-0 text-end d-flex align-items-center">
                                                    <input class="form-control form-control-sm" type="text"
                                                        name="special_discount" value="0"> <span
                                                        class="ms-2">%</span>
                                                </td>
                                                <td class="p-1 text-end border-bottom-0">
                                                    <input class="form-control form-control-sm" type="text"
                                                        name="special_discounted_sales" disabled>
                                                </td>
                                            </tr>
                                            {{-- Tax Vat --}}
                                            {{-- <tr class="special_discount d-none bg-white text-muted">
                                                <td class="p-0 text-end border-bottom-0 pe-2">Special Discount</td>
                                                <td class="p-1 border-0 text-end d-flex align-items-center">
                                                    <input class="form-control form-control-sm" type="text"
                                                        name="special_discount" value="0"> <span
                                                        class="ms-2">%</span>
                                                </td>
                                                <td class="p-1 text-end border-bottom-0">
                                                    <input class="form-control form-control-sm" type="text"
                                                        name="special_discounted_sales" disabled>
                                                </td>
                                            </tr> --}}
                                            <tr class="tax d-none bg-white text-muted">
                                                <td class="p-0 text-end border-bottom-0 pe-2">Tax/VAT</td>
                                                <td class="p-1 border-0 text-end d-flex align-items-center">
                                                    <input class="form-control form-control-sm" type="text"
                                                        name="tax" value="0"> <span class="ms-2">%</span>
                                                </td>
                                                <td class="p-1 text-end border-bottom-0">
                                                    <input class="form-control form-control-sm" type="text"
                                                        name="tax_sales" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-0 bg-white text-muted text-end p-1" width="67%">
                                                    Grand Total
                                                    (With Everything)</td>
                                                <td class="border-0 bg-white text-muted p-1" width="15%"><input
                                                        class="form-control form-control-sm" type="text"
                                                        name="grand_total" disabled></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-1">
                        <div class="col-lg-6">
                            <table class="text-start table table-bordered table-hover">
                                <tbody class="tb padding">
                                    <tr class="accordion_expense" style="background-color: #24729759;">
                                        <td class="" style="color:#11445c;" colspan="3">Expenses
                                        </td>
                                    </tr>
                                    <tr class="body_expense">
                                        <td width="60%" class="border-none">Bank & Remittance Charge -
                                            (1.5%)</td>
                                        <td width="20%" class="border-none"><input
                                                class="multiplyValue form-control form-control-sm" type="text"
                                                name="bank_charge"></td>
                                        <td width="20%" class="border-none"><input type="text"
                                                class="result form-control form-control-sm" disabled value="">
                                        </td>
                                    </tr>
                                    <tr class="body_expense">
                                        <td class="border-none">Customs & Duty - (5.0%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="customs">
                                        </td>
                                        <td class="border-none"><input type="text"
                                                class="result form-control form-control-sm" disabled value="">
                                        </td>
                                    </tr>
                                    <tr class="body_expense">
                                        <td class="border-none">HR , Office & Utility Cost- (5.0%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="utility_cost">
                                        </td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" disabled value="">
                                        </td>
                                    </tr>
                                    <tr class="body_expense">
                                        <td class="border-none">Shipping & Handling Cost- (5.0%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="shiping_cost">
                                        </td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" disabled value="">
                                        </td>
                                    </tr>
                                    <tr class="body_expense">
                                        <td class="border-none">Sales / Consultancy Comission - (5.0%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="sales_comission">
                                        </td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" disabled value="">
                                        </td>
                                    </tr>
                                    <tr class="body_expense">
                                        <td class="border-none">Bank Loan / Liability / Debt - (5.0%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="liability">
                                        </td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" disabled value="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="text-start table table-bordered table-hover">
                                <tbody class="tb padding" id="accordion_expanded">
                                    <tr class="accordion_offer" style="background-color: #24729759;">
                                        <td class="" style="color:#11445c;" colspan="3">
                                            Offering Value Adding
                                        </td>
                                    </tr>
                                    <tr class="body_offer">
                                        <td class="border-none">Deal Closing / Rebates</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="rebates"></td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" disabled value=""></td>
                                    </tr>
                                    <tr class="accordion_other" style="background-color: #24729759;">
                                        <td colspan="3" class="" style="color:#11445c; height: 26px;">
                                            Other Income
                                        </td>
                                    </tr>
                                    <tr class="body_other">
                                        <td class="border-none">Loan / Capital / Partner Share - (5%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="capital_share"></td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" disabled value=""></td>
                                    </tr>
                                    <tr class="body_other">
                                        <td class="border-none">Management Cost - (5%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="management_cost"></td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" disabled value=""></td>
                                    </tr>
                                    <tr>
                                        <td class="border-none">Gross Profit (%) Sales and Cost</td>
                                        <td class="border-none">%
                                            <input class="gross_profit_subtotal form-control form-control-sm"
                                                type="text" name="gross_profit_subtotal" disabled value="">
                                        </td>
                                        <td class="border-none">
                                            <p class="p-0 m-0">TK</p><input type="text"
                                                class="additional_subtot form-control form-control-sm"
                                                name="gross_profit_amount" disabled value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-none">Net Profit - (5%)</td>
                                        <td class="border-none"><input class="multiplyValue form-control form-control-sm"
                                                type="text" name="net_profit_percentage"></td>
                                        <td class="border-none"><input class="result form-control form-control-sm"
                                                type="text" name="net_profit_amount" disabled value=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row text-end mt-2">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-info rounded-0" id="submitbtn"
                                style="width: 150px;">Create SAS
                                <i class="ph-paper-plane-tilt mx-2"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection
