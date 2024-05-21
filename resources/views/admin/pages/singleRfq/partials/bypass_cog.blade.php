<div class="cogCalculation">
    <div class="table-responsive">
        <table id="myTable" class="table table-borderd" style="font-size: 13px !important">
            <thead>
                <tr style="background-color: #f5f5f;color: black;font-size: 15px;">
                    <th width="3%" class="text-center table-title-font">
                        <a class="border-0 p-0 bg-transparent text-white" onclick="addRfqCalculationTableRow()"><i
                                class="fa-solid fa-plus"></i></a>
                    </th>
                    <th width="3%" class="text-center table-title-font">Sl </th>
                    <th width="14%" class="text-center table-title-font">Item</th>
                    <th width="4%" class="text-center table-title-font">Qty</th>
                    <th width="7%" class="text-center table-title-font">Pr. Cost</th>
                    <th width="3%" class="text-center table-title-font">Year</th>
                    <th width="7%" class="text-center table-title-font">Pr. Disc.</th>
                    <th width="7%" class="text-center table-title-font">Total (In TK)</th>
                    <th width="6%" class="text-center table-title-font">Office</th>
                    <th width="6%" class="text-center table-title-font">Profit</th>
                    <th width="6%" class="text-center table-title-font">Others</th>
                    {{-- <th width="7%" rowspan="2" class="text-center table-title-font">Subtotal
                    </th> --}}
                    <th width="7%" class="text-center table-title-font">Tax/Vat/GST
                    </th>
                    <th width="7%" rowspan="2" class="text-center table-title-font">Sub Total</th> {{--EU Price --}}
                    <th width="12%" colspan="2" class="text-center table-title-font">
                        Partner Price
                    </th>
                </tr>
                <tr style="background-color: #EAF1DD">
                    <th class="text-center" colspan="6"></th>
                    <th class="text-center"><input class="form-control form-control-sm principal_discount_percentage"
                            type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center"></th>
                    <th class="text-center">
                        <input class="form-control form-control-sm office_cost_percentage" name="office_cost_percentage"
                            type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm profit_percentage" name="profit_percentage"
                            type="number" value="" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm others_cost_percentage" name="others_cost_percentage"
                            type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm tax_vat_percentage" type="number" value="0"
                            placeholder="0%">
                    </th>
                    <th class="text-center">Dis%</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody class="table_bottom_area text-center">
                @if ($rfq_details->rfqProducts->count() > 0)
                    @foreach ($rfq_details->rfqProducts as $product)
                        <tr class="thd">
                            <td>
                                <a class="border-0 p-0 text-danger bg-transparent"
                                    onclick="deleteRfqCalculationRow(this)" title="Add List Items"><i
                                        class="fa-regular fa-trash-can"></i></a>
                            </td>
                            <td>{{ $loop->iteration }}</td>
                            <td><input type="text" name="product_name[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="{{ $product->product_name }}" style="">
                            </td>
                            <td><input type="text" name="qty[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="{{ $product->qty }}">
                            </td>
                            <td><input type="text" name="principal_cost[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput principal_cost"
                                    value="0">
                            </td>
                            <td><input type="text" name="year[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="1">
                            </td>
                            <td><input type="text" name="principal_discount_amount[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput principal_discount_amount"
                                    value="0">
                            </td>
                            <td><input type="text" name="principal_unit_total_amount_taka[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput principal_unit_total_amount_taka"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_office_cost[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_profit[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_others_cost[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            {{-- <td><input type="text" name="unit_subtotal[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td> --}}
                            <td><input type="text" name="unit_tax_vat[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_eu_price[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_partner_discount[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td class="text-center"><input type="text" name="unit_partner_price[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr> No Data Available</tr>
                @endif

            </tbody>
            <tbody class="table_bottom_area text-center" style="background-color: #e7e7e7">
                <tr class="">
                    <td>-</td>
                    <td>-</td>
                    <td class="text-black">
                        Remittance
                    </td>
                    <td><input type="text" name="remittence_qty"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="remittence_principal_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="remittence_year"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="remittence_principal_discount_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="remittence_principal_unit_total_amount_taka"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="remittence_unit_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="remittence_unit_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="remittence_unit_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    {{-- <td><input type="text" name="remittence_unit_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td> --}}
                    <td><input type="text" name="remittence_unit_tax_vat"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="remittence_unit_eu_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="remittence_unit_partner_discount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td class="text-center"><input type="text" name="remittence_unit_partner_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                </tr>
                <tr class="">
                    <td>-</td>
                    <td>-</td>
                    <td class="text-black">
                        Packing Charge
                    </td>
                    <td><input type="text" name="packing_charge_qty"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="packing_charge_principal_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="packing_charge_year"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="packing_charge_principal_discount_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="packing_charge_principal_unit_total_amount_taka"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="packing_charge_unit_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="packing_charge_unit_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="packing_charge_unit_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    {{-- <td><input type="text" name="packing_charge_unit_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td> --}}
                    <td><input type="text" name="packing_charge_unit_tax_vat"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="packing_charge_unit_eu_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="packing_charge_unit_partner_discount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td class="text-center"><input type="text"name="packing_charge_unit_partner_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                </tr>
                <tr class="">
                    <td>-</td>
                    <td>-</td>
                    <td class="text-black">
                        Customs / CnF
                    </td>
                    <td><input type="text" name="custom_qty"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="custom_principal_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="custom_year"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="custom_principal_discount_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="custom_principal_unit_total_amount_taka"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="custom_unit_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="custom_unit_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="custom_unit_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    {{-- <td><input type="text" name="custom_unit_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td> --}}
                    <td><input type="text" name="custom_unit_tax_vat"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="custom_unit_eu_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="custom_unit_partner_discount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td class="text-center"><input type="text" name="custom_unit_partner_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                </tr>
                <tr class="">
                    <td>-</td>
                    <td>-</td>
                    <td class="text-black">
                        Freight / Logistics
                    </td>
                    <td><input type="text" name="freight_qty"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="freight_principal_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="freight_year"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="1">
                    </td>
                    <td><input type="text" name="freight_principal_discount_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="freight_principal_unit_total_amount_taka"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="freight_unit_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="freight_unit_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="freight_unit_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    {{-- <td><input type="text" name="freight_unit_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td> --}}
                    <td><input type="text" name="freight_unit_tax_vat"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="freight_unit_eu_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td><input type="text" name="freight_unit_partner_discount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                    <td class="text-center"><input type="text" name="freight_unit_partner_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="text-black vat_display" style="font-size: 13px; display:none;">
                    <th class="text-center" colspan="7"
                        style="font-size: 20px;background-color: #A6A6A6; color: #000">
                        Sub Total:</th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="principal_sub_total_amount_taka"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #983c3c">
                        <input type="text" name="sub_total_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="sub_total_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="sub_total_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    {{-- <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="sub_total_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th> --}}
                    <th class="text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="sub_total_tax_vat"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="sub_total_eu_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="sub_total_partner_discount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" colspan="2"
                        style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="sub_total_partner_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                </tr>
                <tr class="vat_display" style="display:none;">
                    <th class="text-center" colspan="7"
                        style="font-size: 15px;background-color: #BFBFBF; color: #000">
                        <div class="d-flex align-items-center justify-content-center">
                            Vat / GST: <input type="text" name="vat_percentage" style="width: 15%;border: 1px solid red;margin: 0px 19px;"
                                class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                value="0"> %
                        </div>
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="vat_principal_amount_taka"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #983c3c">
                        <input type="text" name="vat_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="vat_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="vat_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    {{-- <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="vat_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th> --}}
                    <th class="text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="vat_tax_vat"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="vat_eu_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" style="background-color: #a9a9a9; color: #fff">
                        {{-- <input type="text" name="vat_partner_discount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0"> --}}
                            --
                    </th>
                    <th class="text-center text-center" colspan="2"
                        style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="vat_partner_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                </tr>
                <tr class="text-black" style="font-size: 13px;">
                    <th class="text-center" colspan="7"
                        style="font-size: 20px;background-color: #A6A6A6; color: #000">
                        Total:</th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="principal_total_amount_taka"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #983c3c">
                        <input type="text" name="total_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="total_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="total_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    {{-- <th class="text-center" style="background-color: #BFBFBF; color: #fff">
                        <input type="text" name="total_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th> --}}
                    <th class="text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="total_tax_vat"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="total_eu_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="total_partner_discount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" colspan="2"
                        style="background-color: #a9a9a9; color: #fff">
                        <input type="text" name="total_partner_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
