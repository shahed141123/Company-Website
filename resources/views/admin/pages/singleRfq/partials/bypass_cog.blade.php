<div class="cogCalculation">
    <div class="table-responsive">
        <table id="myTable" class="table table-borderd" style="font-size: 13px !important">
            <thead>
                <tr style="background-color: #f5f5f;color: black;font-size: 15px;">
                    <th width="3%" class="text-center table-title-font">
                        <a class="border-0 p-0 bg-transparent text-primary" onclick="addRfqCalculationTableRow()">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </th>
                    <th width="3%" class="text-center table-title-font">Sl </th>
                    <th width="14%" class="text-center table-title-font">Item</th>
                    <th width="4%" class="text-center table-title-font">Qty</th>
                    <th width="7%" class="text-center table-title-font">Pr. Cost</th>
                    {{-- <th width="3%" class="text-center table-title-font">Year</th> --}}
                    {{-- <th width="7%" class="text-center table-title-font">Pr. Disc.</th> --}}
                    <th width="7%" class="text-center table-title-font">Total (In <span class="currency">TK</span> )
                    </th>
                    <th width="6%" class="text-center table-title-font">Office</th>
                    <th width="6%" class="text-center table-title-font">Profit</th>
                    <th width="6%" class="text-center table-title-font">Others</th>
                    <th width="6%" class="text-center table-title-font">Remittence</th>
                    <th width="6%" class="text-center table-title-font">Packing</th>
                    <th width="6%" class="text-center table-title-font">Customs</th>
                    {{-- <th width="7%" rowspan="2" class="text-center table-title-font">Subtotal
                    </th> --}}
                    <th width="7%" class="text-center table-title-font">Tax
                    </th>
                    <th width="7%" rowspan="2" class="text-center table-title-font">SubTotal(<span
                            class="currency">TK</span> )

                    </th>
                    {{-- EU Price --}}
                    <th width="12%" colspan="2" class="text-center table-title-font">
                        Partner Price (In <span class="currency">TK</span> )
                    </th>
                </tr>
                <tr style="background-color: #EAF1DD">
                    <th class="text-center" colspan="6"></th>
                    <th class="text-center">
                        <input class="form-control form-control-sm text-center office_cost_percentage percentage"
                            name="office_cost_percentage" type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm text-center profit_percentage percentage"
                            name="profit_percentage" type="number" value="" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm text-center others_cost_percentage percentage"
                            name="others_cost_percentage" type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm text-center remittence_percentage percentage"
                            name="remittence_percentage" type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm text-center packing_percentage percentage"
                            name="packing_percentage" type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm text-center custom_percentage percentage"
                            name="custom_percentage" type="number" value="0" placeholder="0%">
                    </th>
                    <th class="text-center">
                        <input class="form-control form-control-sm text-center tax_vat_percentage percentage"
                            type="number" value="0" name="tax_vat_percentage" placeholder="0%">
                    </th>
                    {{-- <th class="text-center">Dis%</th> --}}
                    <th class="text-center">Per Unit</th>
                    <th class="text-center">Unit Total</th>
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
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput text-start"
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
                            <td><input type="text" name="principal_unit_total_amount[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput principal_unit_total_amount"
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
                            <td><input type="text" name="unit_remittence[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_packing[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>

                            <td><input type="text" name="unit_customs[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_tax_vat[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_subtotal[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td><input type="text" name="unit_final_price[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                            <td class="text-center"><input type="text" name="unit_final_total_price[]"
                                    class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                    value="0">
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr> No Data Available</tr>
                @endif

            </tbody>

            <tfoot>
                <tr class="text-black vat_display special_discount" style="font-size: 13px; display:none;">
                    <th class="text-end pe-5" colspan="5"
                        style="font-size: 18px;background-color: #e2e1e1; color: #000">
                        Sub Total:</th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_principal_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #983c3c">
                        <input type="text" name="sub_total_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_remittance"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_packing"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_customs"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_tax"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" style="background-color: #e2e1e1; color: #fff">
                        ---
                    </th>
                    <th class="text-center text-center" colspan="2"
                        style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="sub_total_final_total_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                </tr>
                <tr class="special_discount" style="display:none;">
                    <th class="text-end pe-5" colspan="5"
                        style="font-size: 15px;background-color: #e2e1e1; color: #000">
                        <div class="d-flex align-items-center justify-content-end">
                            Special Discount: <input type="text" name="special_discount_percentage"
                                style="width: 5%;border-bottom: 1px solid rgb(218, 201, 201);margin: 0px 19px;"
                                class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                value="0"> %
                        </div>
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_principal_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #983c3c">
                        <input type="text" name="special_discount_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_remittance"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_packing"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_customs"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_tax"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" style="background-color: #e2e1e1; color: #fff">
                        ---
                    </th>
                    <th class="text-center text-center" colspan="2"
                        style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="special_discount_final_total_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                </tr>
                <tr class="vat_display" style="display:none;">
                    <th class="text-end pe-5" colspan="5"
                        style="font-size: 15px;background-color: #e2e1e1; color: #000">
                        <div class="d-flex align-items-center justify-content-end">
                            Vat / GST: <input type="text" name="vat_percentage"
                                style="width: 5%;border-bottom: 1px solid rgb(218, 201, 201);margin: 0px 19px;"
                                class="form-control form-control-sm bg-transparent rfqcalculationinput"
                                value="0"> %
                        </div>
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_principal_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #983c3c">
                        <input type="text" name="vat_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_remittance"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_packing"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_customs"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_tax"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" style="background-color: #e2e1e1; color: #fff">
                        ---
                    </th>
                    <th class="text-center text-center" colspan="2"
                        style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="vat_final_total_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                </tr>
                <tr class="text-black" style="font-size: 13px;">
                    <th class="text-end pe-5" colspan="5"
                        style="font-size: 18px;background-color: #e2e1e1; color: #000">
                        Grand Total:</th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_principal_amount"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #983c3c">
                        <input type="text" name="total_office_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_profit"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_others_cost"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_remittance"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_packing"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_customs"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_tax"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center" style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_subtotal"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                    <th class="text-center text-center" style="background-color: #e2e1e1; color: #fff">
                        ----
                    </th>
                    <th class="text-center text-center" colspan="2"
                        style="background-color: #e2e1e1; color: #fff">
                        <input type="text" name="total_final_total_price"
                            class="form-control form-control-sm bg-transparent rfqcalculationinput" value="0">
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
