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
                        <span class="breadcrumb-item active">Accounts Payable</span>
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
            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="card-body">
                            <form method="post" action="{{ route('account-payable.update', $accountsPayable->id) }}"
                                class="form-validate-jquery" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Account Payable Edit Form</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">RFQ Name</label>
                                                            <select id="rfq_id" name="rfq_id"
                                                                data-placeholder="Select your rfq name"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                @foreach ($rfqs as $rfq)
                                                                    <option @selected($rfq->id == $accountsPayable->rfq_id)
                                                                        value="{{ $rfq->id }}">
                                                                        {{ $rfq->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Payment Type </label>
                                                            <select name="payment_type"
                                                                data-placeholder="Select payment type"
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($accountsPayable->payment_type == 'creditable')value="creditable">
                                                                    Creditable</option>
                                                                <option @selected($accountsPayable->payment_type == 'bank_loan')value="bank_loan">
                                                                    Bank Loan</option>
                                                                <option @selected($accountsPayable->payment_type == 'personal_loan')value="personal_loan">
                                                                    Personal Loan</option>
                                                                <option @selected($accountsPayable->payment_type == 'rol') value="rol">Rol
                                                                </option>
                                                                <option @selected($accountsPayable->payment_type == 'capital') value="capital">
                                                                    Capital</option>
                                                                <option @selected($accountsPayable->payment_type == 'inter_company')value="inter_company">
                                                                    Inter Company</option>
                                                                <option @selected($accountsPayable->payment_type == 'Bad_debts')value="Bad_debts">
                                                                    Bad Debts</option>
                                                                <option @selected($accountsPayable->payment_type == 'interest') value="interest">
                                                                    Interest</option>
                                                                <option @selected($accountsPayable->payment_type == 'profit_share')value="profit_share">
                                                                    Profit Share</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label">Invoice:</label>
                                                            <input type="file" id="invoice" name="invoice"
                                                                value="{{ $accountsPayable->invoice }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-1">
                                                        <div class="mb-4">
                                                            <label class="form-label">Po Value:</label>
                                                            <input type="text" id="po_value" name="po_value"
                                                                value="{{ $accountsPayable->po_value }}"
                                                                class="form-control maxlength-options" maxlength="15"
                                                                placeholder="Enter decimal number only">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label">Due Date:</label>
                                                            <input type="date" id="due_date" name="due_date"
                                                                value="{{ $accountsPayable->due_date }}"
                                                                class="form-control maxlength-options" maxlength="300"
                                                                placeholder="client_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="mb-4">
                                                            <label class="form-label">Principal Name: </label>
                                                            <input type="text" id="principal_name" name="principal_name"
                                                                value="{{ $accountsPayable->principal_name }}"
                                                                class="form-control maxlength-options" maxlength="100"
                                                                placeholder="Enter Your principal_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label">Principal Po:</label>
                                                            <input type="file" id="principal_po" name="principal_po"
                                                                value="{{ $accountsPayable->principal_po }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">


                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label">Principal Po Number:</label>
                                                            <input type="text" id="principal_po_number"
                                                                name="principal_po_number"
                                                                value="{{ $accountsPayable->principal_po_number }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label">Principal Amount:</label>
                                                            <input type="text" id="principal_amount"
                                                                name="principal_amount"
                                                                value="{{ $accountsPayable->principal_amount }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="row mb-3">
                                                            <label class="form-label">Principal Payment Status</label>
                                                            <select id="principal_payment_status"
                                                                name="principal_payment_status"
                                                                data-placeholder="Select your principal_payment_status "
                                                                class="form-control form-control-select2">
                                                                <option></option>
                                                                <option @selected($accountsPayable->principal_payment_status == 'advance_paid') value="advance_paid">
                                                                    Advance Paid
                                                                </option>
                                                                <option @selected($accountsPayable->principal_payment_status == ' not_paid') value="not_paid">
                                                                    Not Paid
                                                                </option>
                                                                <option @selected($accountsPayable->principal_payment_status == 'half_paid') value="half_paid">
                                                                    Half Paid
                                                                </option>
                                                                <option @selected($accountsPayable->principal_payment_status == 'paid') value="paid">Paid
                                                                </option>
                                                                <option @selected($accountsPayable->principal_payment_status == 'delayed') value="delayed">
                                                                    Delayed
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-4">
                                                            <label class="form-label">Principal Payment Value:</label>
                                                            <input type="text" id="principal_payment_value"
                                                                name="principal_payment_value"
                                                                value="{{ $accountsPayable->principal_payment_value }}"
                                                                class="form-control maxlength-options" maxlength="15"
                                                                placeholder="principal_payment_value">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-4">
                                                            <label class="form-label">Delivery Date: </label>
                                                            <input type="date" id="delivery_date" name="delivery_date"
                                                                value="{{ $accountsPayable->delivery_date }}"
                                                                class="form-control"
                                                                placeholder="Enter Your delivery_date">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="mb-4">
                                                            <label class="form-label">Credit Days:</label>
                                                            <input type="text" id="credit_days" name="credit_days"
                                                                value="{{ $accountsPayable->credit_days }}"
                                                                class="form-control maxlength-options" maxlength="100"
                                                                placeholder="credit_days">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="reset" class="btn btn-sm btn-danger">Reset<i
                                            class="icon-reset"></i></button>
                                    <a href="{{ route('account-payable.index') }}" type="submit"
                                        class="btn btn-sm btn-info">Back</a>
                                    <button type="submit"
                                        class="btn btn-sm btn-primary from-prevent-multiple-submits">Submit
                                        <i class="ph-paper-plane-tilt ms-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
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
                principal_po_number: {
                    number: true
                },
                principal_amount: {
                    number: true
                },
                principal_payment_value: {
                    number: true
                },
                credit_days: {
                    number: true
                },
            },
        });
    </script>
@endpush
