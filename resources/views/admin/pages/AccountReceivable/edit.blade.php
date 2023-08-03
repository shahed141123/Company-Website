@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Accounts Receivable</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <!-- Tab start -->
                <div class="card-body">
                    <div class="row">
                        <form method="post" action="{{ route('account-receivable.update', $accountsReceivable->id) }}"
                            class="form-validate-jquery" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-xs table-bordered table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="rfq_id"> RFQ Name <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="rfq_id" id="rfq_id"
                                                        class="form-control form-control-sm" required>
                                                        <option>--select--</option>
                                                        @foreach ($rfqs as $rfq)
                                                            <option @selected($accountsReceivable->rfq_id == $rfq->id)
                                                                value="{{ $rfq->id }}"> {{ $rfq->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="payment_type"> Payment Type <strong
                                                            class="text-danger">*</strong> </label>
                                                    <select name="payment_type" id="payment_type"
                                                        class="form-control form-control-sm" required>
                                                        <option>--select--</option>
                                                        <option @selected($accountsReceivable->payment_type == 'creditable') value="creditable">Creditable
                                                        </option>
                                                        <option @selected($accountsReceivable->payment_type == 'bank_loan') value="bank_loan">Bank Loan
                                                        </option>
                                                        <option @selected($accountsReceivable->payment_type == 'personal_loan') value="personal_loan">Personal
                                                            Loan</option>
                                                        <option @selected($accountsReceivable->payment_type == 'rol') value="rol"> Rol </option>
                                                        <option @selected($accountsReceivable->payment_type == 'capital') value="capital"> Capital
                                                        </option>
                                                        <option @selected($accountsReceivable->payment_type == 'inter_company') value="inter_company"> Inter
                                                            Company </option>
                                                        <option @selected($accountsReceivable->payment_type == 'Bad_debts') value="Bad_debts"> Bad Debts
                                                        </option>
                                                        <option @selected($accountsReceivable->payment_type == 'interest') value="interest"> Interest
                                                        </option>
                                                        <option @selected($accountsReceivable->payment_type == 'profit_share') value="profit_share"> Profit
                                                            Share </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="po_date"> PO Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" value="{{ $accountsReceivable->po_date }}"
                                                        name="po_date" id="po_date" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="due_date"> Due Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" value="{{ $accountsReceivable->due_date }}"
                                                        name="due_date" id="due_date" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_po_number"> PO Client Number <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text"
                                                        value="{{ $accountsReceivable->client_po_number }}"
                                                        name="client_po_number" id="client_po_number"
                                                        placeholder="PO Client Numbe" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_name"> Client Name <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" value="{{ $accountsReceivable->client_name }}"
                                                        name="client_name" id="client_name" placeholder="Client Name"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_po"> Client PO <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="file" value="{{ $accountsReceivable->client_po }}"
                                                        name="client_po" id="client_po">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="invoice"> Invoice <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="file" value="{{ $accountsReceivable->invoice }}"
                                                        name="invoice" id="invoice">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_amount">Client Amount<strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" value="{{ $accountsReceivable->client_amount }}"
                                                        name="client_amount" id="client_amount"
                                                        class="form-control form-control-sm" placeholder="00.00">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_payment_status"> Client Payment Status </label>
                                                    <select name="client_payment_status" id="client_payment_status"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option @selected($accountsReceivable->client_payment_status == 'advance_paid') value="advance_paid">Advance
                                                            Paid</option>
                                                        <option @selected($accountsReceivable->client_payment_status == 'not_paid') value="not_paid"> Not Paid
                                                        </option>
                                                        <option @selected($accountsReceivable->client_payment_status == 'half_paid') value="half_paid">Half Paid
                                                        </option>
                                                        <option @selected($accountsReceivable->client_payment_status == 'paid') value="paid">Paid</option>
                                                        <option @selected($accountsReceivable->client_payment_status == 'delayed') value="delayed">Delayed
                                                        </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_payment_value"> Client Payment Value <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text"
                                                        value="{{ $accountsReceivable->client_payment_value }}"
                                                        name="client_payment_value" id="client_payment_value"
                                                        class="form-control form-control-sm" placeholder=""
                                                        placeholder="00.00">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_money_receipt"> Client Money Receipt <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text"
                                                        value="{{ $accountsReceivable->client_money_receipt }}"
                                                        name="client_money_receipt" id="client_money_receipt"
                                                        placeholder="PO Number" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div class="form-group">
                                                    <label for="credit_days">Credit Days </label>
                                                    <input type="text" value="{{ $accountsReceivable->credit_days }}"
                                                        name="credit_days" id="credit_days"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="text-end mt-3 mb-2">
                                <button type="reset" class="btn btn-sm btn-danger mx-2">Reset<i
                                        class="icon-reset"></i></button>
                                <a href="{{ route('account-receivable.index') }}" type="submit"
                                    class="btn btn-sm btn-info mx-2">Back</a>
                                <button type="submit"
                                    class="btn btn-sm btn-primary from-prevent-multiple-submits mx-2">Submit
                                    <i class="ph-paper-plane-tilt ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end cart body -->
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Initialize
        const validator = $('.form-validate-jquery').validate({
            ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
            errorClass: 'validation-invalid-label',
            successClass: 'validation-valid-label',
            validClass: 'validation-valid-label',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            success: function(label) {
                label.addClass('validation-valid-label').text('success.'); // remove to hide Success message
            },
            // Different components require proper error label placement
            errorPlacement: function(error, element) {
                // Input with icons and Select2
                if (element.hasClass('select2-hidden-accessible')) {
                    error.appendTo(element.parent());
                }
                // Input group, form checks and custom controls
                else if (element.parents().hasClass('form-control-feedback') || element.parents().hasClass(
                        'form-check') || element.parents().hasClass('input-group')) {
                    error.appendTo(element.parent().parent());
                }
                // Other elements
                else {
                    error.insertAfter(element);
                }
            },
            rules: {
                client_po_number: {
                    number: true
                },
                client_po: {
                    number: true
                },
                client_amount: {
                    number: true
                },
                client_payment_value: {
                    number: true
                },
                client_money_receipt: {
                    number: true
                },
                credit_days: {
                    number: true
                },
            },
        });
    </script>
@endpush
