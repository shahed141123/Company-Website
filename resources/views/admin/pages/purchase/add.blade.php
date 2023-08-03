<!-- modal for Save  -->
<form action="{{ route('purchase.store') }}" class="form-validate-jquery" method="post">
    @csrf
    <div id="modal_purchase_order_save" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Purchase Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-3 col-sm-12">
                            <p class="text-info fw-bold" style="border-bottom: 1px solid #247297;">Main Details</p>
                            <div class="py-2 px-2 bg-light rounded">
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>RFQ Name </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="rfq_id" id="rfq_id" class="form-control form-control-sm"
                                            required>
                                            <option value="0">--select--</option>
                                            @foreach ($rfqs as $rfq)
                                                <option value="{{ $rfq->id }}">{{ $rfq->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Details </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="client_details" id="client_details"
                                            placeholder="Client details" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>D Date</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="date" name="delivery_date" id="delivery_date" placeholder=""
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Validity</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="validity" id="validity" placeholder="Validity"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Delivery</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="delivery" placeholder="Delivery"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>License</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="license" id="license" placeholder="License"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p class="text-info fw-bold" style="border-bottom: 1px solid #247297;">PQ & PO Info</p>
                            <div class="py-2 px-2 bg-light rounded">
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Number </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="PQ Number" name="pq_number" id="pq_number" reaquired>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Reference </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="pq_reference" class="form-control form-control-sm"
                                            placeholder="PQ Reference" reaquired>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span> PO Number </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="po_number" id="po_number"
                                            class="form-control form-control-sm" placeholder="PO Number" reaquired>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span> PO Date </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="date" name="po_date" id="po_date"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Reference </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="po_reference" id="po_reference"
                                            class="form-control form-control-sm" placeholder="PO Reference">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span> Penalty </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="penalty" id="penalty" placeholder="Penalty"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p class="text-info fw-bold" style="border-bottom: 1px solid #247297;">Shipping Info</p>
                            <div class="py-2 px-2 bg-light rounded">
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Name</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="shipping_name" id="shipping_name"
                                            placeholder="Shipping Name" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Phone</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="shipping_phone" id="shipping_phone"
                                            placeholder="Shipping Phone" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Address</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="shipping_address" id="shipping_address"
                                            placeholder="Shipping Address" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Email</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="email" name="shipping_email" id="shipping_email"
                                            placeholder="Shipping Email" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Method </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="shipping_method" id="shipping_method"
                                            placeholder="Shipping Method" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Terms </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="shipping_terms" id="shipping_terms"
                                            placeholder="Shipping terms" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p class="text-info fw-bold" style="border-bottom: 1px solid #247297;">Payment Info</p>
                            <div class="py-2 px-2 bg-light rounded">
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Status</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payment_status" id="payment_status"
                                            placeholder="Payment Status" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Amount</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payment_amount_reference"
                                            id="payment_amount_reference" placeholder="Payment Amount Reference"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Fee</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payment_process_fee" id="payment_process_fee"
                                            placeholder="Payment Process Fee" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Reference</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payment_pop_reference" id="payment_pop_reference"
                                            placeholder="Payment Pop Reference" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Date </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payment_date" id="payment_pop_reference"
                                            placeholder="Payment Date " class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Payment </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payment" id="payment" placeholder="Payment"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-info mt-2 fw-bold" style="border-bottom: 1px solid #247297;">Purchase Info</p>
                            <div class="py-2 px-2 bg-light rounded">
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Purchase By </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="purchase_by" id="purchase_by"
                                            class="form-control form-control-sm" placeholder="Purchase By">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Principal Name</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="purchase_name" id="purchase_name"
                                            class="form-control form-control-sm" placeholder="Purchase Name">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Principal Phone</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="principal_phone" id="principal_phone"
                                            class="form-control form-control-sm" placeholder="e.g: 0100 0000 000">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Principal Address</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="principal_address" id="principal_address"
                                            class="form-control form-control-sm" placeholder="e.g: 0100 0000 000">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Principal Email </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="principal_email" id="principal_email"
                                            class="form-control form-control-sm" placeholder="e.g: example@gmail.com">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Payable Account Number </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payable_account_number"
                                            id="payable_account_number" placeholder="Payable Account Number"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-info mt-2 fw-bold" style="border-bottom: 1px solid #247297;">Payable & Billing Info
                            </p>
                            <div class="py-2 px-2 bg-light rounded">
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Payable Account Bank </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payable_account_bank" id="payable_account_bank"
                                            placeholder="Payable Account Bank" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Payable Account Swift </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payable_account_swift" id="payable_account_swift"
                                            placeholder="Payable Account Swift" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Payable Account Route</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="payable_account_route" id="payable_account_route"
                                            placeholder="Payable Account Route" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Billing Name</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="billing_name" id="billing_name"
                                            placeholder="Billing Name" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Billing Phone</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="billing_phone" id="billing_phone"
                                            placeholder="Billing Phone" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Billing Address </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="billing_address" id="billing_address"
                                            placeholder="Billing Address" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <p class="text-info mt-2 fw-bold" style="border-bottom: 1px solid #247297;">Billing Info</p>
                            <div class="py-2 px-2 bg-light rounded">
                                <div class="row mb-1  d-flex align-items-center">
                                    <div class="col-lg-4 col-sm-4 text-start">
                                        <span>Billing Email </span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="email" name="billing_email" id="billing_email"
                                            placeholder="Billing Email" class="form-control form-control-sm">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-info mt-2 fw-bold" style="border-bottom: 1px solid #247297;">Add Purchase Product
                            </p>
                            <div class="py-2 px-2 bg-light rounded  d-flex align-items-center justify-content-center">
                                <div class="row">
                                    <div class="col-lg-12 selection:col-sm-12 selection:text-start">
                                        <button class="btn navigation_btn" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#add_product">
                                            <i class="ph-plus icons_design"></i> Add Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item m-auto" style="width: 70%;">
                        <div id="add_product" class="accordion-collapse collapse"
                            data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <h4 class="text-info fw-bold text-center mb-1 mt-2">Add Product Table</h4>
                                <div class="table-responsive col-md-12">
                                    <table class="table table-bordered col-md-12 product text-center">
                                        <thead>
                                            <tr>
                                                <th style="padding:7px !important;"> Product Name </th>
                                                <th style="padding:7px !important;"> Qty </th>
                                                <th style="padding:7px !important;"> Unit Price</th>
                                                <th style="padding:7px !important;"> <a href="javascript:void(0)"
                                                        class="addRow p-1"><i
                                                            class="ph-plus icons_design text-white"></i></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="repeater">
                                            <tr>

                                                <td> <input type="text" class="form-control form-control-sm"
                                                        name="item_name[]" required></td>
                                                <td> <input type="text" class="form-control form-control-sm"
                                                        name="qty[]"></td>
                                                <td> <input type="text" class="form-control form-control-sm"
                                                        name="unit_price[]">
                                                </td>
                                                <td class="text-center"> <a href="javascript:void(0)"
                                                        class=" removeRow p-1"><i
                                                            class="ph-minus icons_design"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table border">
                                        <tr>
                                            <td width="62%" colspan="2" class="text-center"><strong>Subtotal
                                                    <span class="text-danger"></span></strong> </td>
                                            <td width="30%">
                                                <div class="form-group">
                                                    <input type="text" name="subtotal" id="subtotal"
                                                        placeholder="e.g: 00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Shipping <span
                                                        class="text-danger"></span></strong> </td>
                                            <td>
                                                <div class="form-group">


                                                    <input type="text" name="shipping" id="shipping"
                                                        placeholder="e.g: 00"class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Tax <span
                                                        class="text-danger"></span></strong> </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="text" name="tax" id="tax"
                                                        placeholder="00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Others <span
                                                        class="text-danger"></span></strong> </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="text" name="others" id="others"
                                                        placeholder="Other's" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Total <span
                                                        class="text-danger"></span></strong> </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="text" name="total" id="total"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-end px-4 pb-2">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits" style="padding: 5px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- model-end for save-->
