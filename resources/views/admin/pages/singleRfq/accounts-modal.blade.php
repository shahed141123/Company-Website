    @if ($sourcing)
        <form action="{{ route('account-profit-loss.store') }}" class="form-validate-jquery-profit-loss" method="post"
            enctype="multiple/form-data">
            @csrf
            <div id="modal_account_profitLoss" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Account Profit and Loss </h5>
                            &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-danger float-end"
                                data-bs-toggle="modal" data-bs-target="#show-sas"> <i class="ph-pen"></i> SAS
                            </button>
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
        <!-- model-start -->
        <!-- Basic modal for Closed -->
            <form action="{{ route('account-payable.store') }}" class="form-validate-jquery-payable" method="post"
                enctype="multipart/form-data">
                @csrf
                <div id="modal_account_payable" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Accounts Payable For {{$rfq_details->rfq_code}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-xs table-bordered table-responsive">
                                    <tr>

                                        <input type="hidden" name="rfq_id" value="{{$rfq_details->id}}">

                                        <td width="33%">
                                            <div class="form-group">
                                                <label for="payment_type"> Payment Type <strong
                                                        class="text-danger">*</strong> </label>
                                                <select name="payment_type" id="payment_type"
                                                    class="form-control form-control-sm" required>
                                                    <option>    --select--  </option>
                                                    <option value="creditable">Creditable</option>
                                                    <option value="bank_loan">Bank Loan </option>
                                                    <option value="personal_loan">Personal Loan</option>
                                                    <option value="rol"> Rol </option>
                                                    <option value="capital"> Capital </option>
                                                    <option value="inter_company"> Inter Company </option>
                                                    <option value="Bad_debts"> Bad Debts</option>
                                                    <option value="interest"> Interest </option>
                                                    <option value="profit_share"> Profit Share </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td width="33%">
                                            <div class="form-group">
                                                <label for="invoice"> Invoice <strong class="text-danger">*</strong>
                                                </label>
                                                <input type="file" name="invoice" id="invoice">
                                            </div>
                                        </td>

                                        <td width="33%">
                                            <div class="form-group">
                                                <label for="po_value"> PO Value <strong class="text-danger">*</strong>
                                                </label>
                                                <input type="text" name="po_value" id="po_value"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="due_date"> Due Date <strong class="text-danger">*</strong>
                                                </label>
                                                <input type="date" name="due_date" id="due_date"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="principal_name"> Principal Name <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" name="principal_name" id="principal_name"
                                                    placeholder="Principal" class="form-control form-control-sm">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="principal_po"> Principal PO <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="file" name="principal_po" id="principal_po">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="principal_po_number"> Principal PO Number <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" name="principal_po_number"
                                                    id="principal_po_number" placeholder="PO Number"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="principal_amount"> Principal Amount <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" name="principal_amount" id="principal_amount"
                                                    placeholder="00.00" class="form-control form-control-sm">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="principal_payment_status"> Principal Payment Status
                                                </label>
                                                <select name="principal_payment_status" id="principal_payment_status"
                                                    class="form-control form-control-sm">
                                                    <option value="">--select--</option>
                                                    <option value="advance_paid">Advance Paid</option>
                                                    <option value="not_paid"> Not Paid</option>
                                                    <option value="half_paid">Half Paid</option>
                                                    <option value="paid">Paid</option>
                                                    <option value="delayed">Delayed</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="principal_payment_value"> Principal Payment Value <strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="principal_payment_value"
                                                    id="principal_payment_value" class="form-control form-control-sm">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="delivery_date">Delivery Date </label>
                                                <input type="date" name="delivery_date" id="delivery_date"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="credit_days">Credit Days </label>
                                                <input type="text" name="credit_days" id="credit_days"
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
            </form>
        <!-- model-end -->
    @endif

    @if ($sourcing)
        <!-- Basic modal for Closed -->
            <form action="{{ route('account-receivable.store') }}" class="form-validate-jquery-receivable"
                method="post" enctype="multipart/form-data">
                @csrf
                <div id="modal_account_receivable" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Account Receivable For {{$rfq_details->rfq_code}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-xs table-bordered table-responsive">
                                    <tr>
                                         <input type="hidden" name="rfq_id" value="{{$rfq_details->id}}">

                                        <td width="33%">
                                            <div class="form-group">
                                                <label for="payment_type"> Payment Type <strong
                                                        class="text-danger">*</strong> </label>
                                                <select name="payment_type" id="payment_type"
                                                    class="form-control form-control-sm" required>
                                                    <option value="0">--select--</option>
                                                    <option value="creditable">Creditable</option>
                                                    <option value="bank_loan">Bank Loan </option>
                                                    <option value="personal_loan">Personal Loan</option>
                                                    <option value="rol"> Rol </option>
                                                    <option value="capital"> Capital </option>
                                                    <option value="inter_company"> Inter Company </option>
                                                    <option value="Bad_debts"> Bad Debts</option>
                                                    <option value="interest"> Interest </option>
                                                    <option value="profit_share"> Profit Share </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td width="33%">
                                            <div class="form-group">
                                                <label for="po_date"> PO Date <strong class="text-danger">*</strong>
                                                </label>
                                                <input type="date" name="po_date" id="po_date"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </td>

                                        <td width="33%">
                                            <div class="form-group">
                                                <label for="due_date"> Due Date <strong class="text-danger">*</strong>
                                                </label>
                                                <input type="date" name="due_date" id="due_date"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="client_po_number"> PO Client Number <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" name="client_po_number" id="client_po_number"
                                                    placeholder="PO Client Numbe" class="form-control form-control-sm">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="client_name"> Client Name <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" name="client_name" id="client_name"
                                                    placeholder="Client Name" class="form-control form-control-sm">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="client_po"> Client PO <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="file" name="client_po" id="client_po">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="invoice"> Invoice <strong class="text-danger">*</strong>
                                                </label>
                                                <input type="file" name="invoice" id="invoice">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="client_amount">Client Amount<strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="number" name="client_amount" id="client_amount"
                                                    class="form-control form-control-sm" placeholder="00.00">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label for="client_payment_status"> Client Payment Status </label>
                                                <select name="client_payment_status" id="client_payment_status"
                                                    class="form-control form-control-sm">
                                                    <option value="">--select--</option>
                                                    <option value="advance_paid">Advance Paid</option>
                                                    <option value="not_paid"> Not Paid</option>
                                                    <option value="half_paid">Half Paid</option>
                                                    <option value="paid">Paid</option>
                                                    <option value="delayed">Delayed</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="client_payment_value"> Client Payment Value <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" name="client_payment_value"
                                                    id="client_payment_value" class="form-control form-control-sm"
                                                    placeholder="" placeholder="00.00">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="client_money_receipt"> Client Money Receipt <strong
                                                        class="text-danger">*</strong> </label>
                                                <input type="text" name="client_money_receipt"
                                                    id="client_money_receipt" placeholder="PO Number"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="credit_days">Credit Days </label>
                                                <input type="text" name="credit_days" id="credit_days"
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
            </form>
        <!-- model-end -->
    @endif


