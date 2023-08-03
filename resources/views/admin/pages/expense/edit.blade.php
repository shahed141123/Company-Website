@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Account Expense Management</span>
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

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Account Expense Edit Form</h5>
                </div>
                <div class="card-body">
                    <!-- modal for update  -->
                    <form action="{{ route('expense.update', $expense->id) }}" class="form-validate-jquery" method="post">
                        @csrf
                        @method('PUT')
                        <div class="table-responsive">
                            <table class="table table-xs table-borderless table-responsive">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="date"> Date <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="date" value="{{ $expense->date }}" name="date" id="date"
                                                class="form-control form-control-sm" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="month"> Month <strong class="text-danger">*</strong>
                                            </label>
                                            <select name="month" id="month" class="form-control form-control-sm"
                                                required>
                                                <option>--select--</option>
                                                <option @selected($expense->month == 'january') value="january">January</option>
                                                <option @selected($expense->month == 'february') value="february">February</option>
                                                <option @selected($expense->month == 'march') value="march">March</option>
                                                <option @selected($expense->month == 'april') value="april">April</option>
                                                <option @selected($expense->month == 'may') value="may">May</option>
                                                <option @selected($expense->month == 'june') value="june">June</option>
                                                <option @selected($expense->month == 'july') value="july">July</option>
                                                <option @selected($expense->month == 'august') value="august">August</option>
                                                <option @selected($expense->month == 'september') value="september">September</option>
                                                <option @selected($expense->month == 'october') value="october">October</option>
                                                <option @selected($expense->month == 'november') value="november">November</option>
                                                <option @selected($expense->month == 'december') value="december">December</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="category"> Category <strong class="text-danger">*</strong></label>
                                            <select name="category" id="category" class="form-control form-control-sm">
                                                <option>--select--</option>
                                                <option @selected($expense->category == 'office_rent') value="office_rent"> Office Rent
                                                </option>
                                                <option @selected($expense->category == 'utility_bills') value="utility_bills"> Utility Bills
                                                </option>
                                                <option @selected($expense->category == 'service_bill') value="service_bill"> Service Bill
                                                </option>
                                                <option @selected($expense->category == 'sales_cog') value="sales_cog"> Sales CoG </option>
                                                <option @selected($expense->category == 'purchase') value="purchase"> Purchase </option>
                                                <option @selected($expense->category == 'marketing') value="marketing"> Marketing </option>
                                                <option @selected($expense->category == 'remuneration') value="remuneration"> Remuneration
                                                </option>
                                                <option @selected($expense->category == 'conveyance') value="conveyance"> Conveyance
                                                </option>
                                                <option @selected($expense->category == 'stationariers') value="stationariers"> Stationariers
                                                </option>
                                                <option @selected($expense->category == 'groceries') value="groceries"> Groceries </option>
                                                <option @selected($expense->category == 'old_debts') value="old_debts ">Old / Debts
                                                </option>
                                                <option @selected($expense->category == 'incentives') value="incentives">Incentives
                                                </option>
                                                <option @selected($expense->category == 'return') value="return">Return </option>
                                                <option @selected($expense->category == 'tender_securities') value="tender_securities">Tender
                                                    Securities</option>
                                                <option @selected($expense->category == 'md_personal') value="md_personal">Md Personal
                                                </option>
                                                <option @selected($expense->category == 'outstrading') value="outstrading">Outstrading
                                                </option>
                                                <option @selected($expense->category == 'travel_tour') value="travel_tour">Travel / Tour
                                                </option>
                                                <option @selected($expense->category == 'entertainment') value="entertainment"> Entertainment
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="type"> Type <strong class="text-danger">*</strong></label>
                                            <select name="type" id="type" class="form-control form-control-sm">
                                                <option>--select--</option>
                                                <option @selected($expense->type == 'loan') value="loan"> Loan</option>
                                                <option @selected($expense->type == 'house') value="house">House</option>
                                                <option @selected($expense->type == 'electricity') value="electricity"> Electricity
                                                </option>
                                                <option @selected($expense->type == 'water') value="water"> Water </option>
                                                <option @selected($expense->type == 'telephone_mobile') value="telephone_mobile">
                                                    Telephone/Mobile </option>
                                                <option @selected($expense->type == 'internet') value="internet"> Internet </option>
                                                <option @selected($expense->type == 'entertainment') value="entertainment"> Entertainment
                                                </option>
                                                <option @selected($expense->type == 'repairing') value="repairing"> Repairing </option>
                                                <option @selected($expense->type == 'furniture') value="furniture"> Furniture </option>
                                                <option @selected($expense->type == 'accessories') value="accessories"> Accessories
                                                </option>
                                                <option @selected($expense->type == 'equipments') value="equipments ">Equipments
                                                </option>
                                                <option @selected($expense->type == 'electric') value="electric"> Electric </option>
                                                <option @selected($expense->type == 'advertisements') value="advertisements"> Advertisements
                                                </option>
                                                <option @selected($expense->type == 'other_Service') value="other_Service">Other's Service
                                                </option>
                                                <option @selected($expense->type == 'maintenance') value="maintenance">Maintenance
                                                </option>
                                                <option @selected($expense->type == 'sale_pro') value="sale_pro">Sales Pro </option>
                                                <option @selected($expense->type == 'outside_pro') value="outside_pro">Outside Pro
                                                </option>
                                                <option @selected($expense->type == 'mkt_com_op') value="mkt_com_op">Mkt/Com/Op
                                                </option>
                                                <option @selected($expense->type == 'card_expense') value="card_expense">Card Expense
                                                </option>
                                                <option @selected($expense->type == 'consultancy_fee') value="consultancy_fee">Consultancy
                                                    Fee </option>
                                                <option @selected($expense->type == 'monthly_selary') value="monthly_selary">Monthly Selary
                                                </option>
                                                <option @selected($expense->type == 'wages') value="wages">Wages</option>
                                                <option @selected($expense->type == 'asset') value="asset">Asset</option>
                                                <option @selected($expense->type == 'items') value="items">Items</option>
                                                <option @selected($expense->type == 'mescellinuous') value="mescellinuous">Mescellinuous
                                                </option>
                                                <option @selected($expense->type == 'delivery') value="delivery">Delivery</option>
                                                <option @selected($expense->type == 'monthly') value="monthly">Monthly</option>
                                                <option @selected($expense->type == 'job_circular') value="job_circular">Job circular
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="particulars"> Particulars <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $expense->particulars }}" name="particulars"
                                                id="particulars" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="voucher">Voucher </label>
                                            <input type="file" name="voucher" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="amount"> Amount <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $expense->amount }}" name="amount"
                                                id="amount" placeholder="00.00" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="form-group">
                                            <label for="comment">Comment </label>
                                            <input type="text" value="{{ $expense->comment }}" name="comment"
                                                id="comment" placeholder="Comment"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-end mt-3">
                            <button type="reset" class="btn btn-sm btn-danger me-3">Reset<i
                                    class="icon-reset"></i></button>
                            <a href="{{ route('expense.index') }}" type="submit"
                                class="btn btn-sm btn-info me-3">Back</a>
                            <button type="submit"
                                class="btn btn-sm btn-primary from-prevent-multiple-submits me-3">Submit
                                <i class="ph-paper-plane-tilt ms-2"></i>
                            </button>
                        </div>
                    </form>
                    <!-- model-end for update-->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
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
                amount: {
                    number: true
                },
            },
        });
    </script>
@endpush
