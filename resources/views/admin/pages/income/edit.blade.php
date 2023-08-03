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
                        <span class="breadcrumb-item active">Purchase Management</span>
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
                    <h5 class="text-center">income Product Edit Form</h5>
                </div>
                <div class="card-body">
                    <!-- modal for update  -->
                    <form action="{{ route('income.update', $income->id) }}" class="form-validate-jquery" method="post">
                        @csrf
                        @method('PUT')
                        <div class="table-responsive">
                            <table class="table -xs table-borderless table-responsive">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="rfq_id"> RFQ ID <strong class="text-danger">*</strong>
                                            </label>
                                            <select name="rfq_id" id="rfq_id" class="form-control form-control-sm"
                                                required>
                                                <option>--select--</option>
                                                @foreach ($rfqs as $rfq)
                                                    <option @selected($rfq->id == $income->rfq_id) value="{{ $rfq->id }}">
                                                        {{ $rfq->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="order_id"> ORDER ID <strong class="text-danger">*</strong>
                                            </label>
                                            <select name="order_id" id="order_id" class="form-control form-control-sm">
                                                <option>--select--</option>
                                                @foreach ($orders as $order)
                                                    <option @selected($order->id == $income->order_id) value="{{ $order->id }}">
                                                        {{ $order->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="date">Date <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="date" value="{{ $income->date }}" name="date" id="date"
                                                placeholder="" class="form-control form-control-sm" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="month"> Month <strong class="text-danger">*</strong>
                                            </label>
                                            <select name="month" id="month" class="form-control form-control-sm"
                                                required>
                                                <option>--select--</option>
                                                <option @selected($income->month == 'january') value="january">January</option>
                                                <option @selected($income->month == 'february') value="february">February</option>
                                                <option @selected($income->month == 'march') value="march">March</option>
                                                <option @selected($income->month == 'april') value="april">April</option>
                                                <option @selected($income->month == 'may') value="may">May</option>
                                                <option @selected($income->month == 'june') value="june">June</option>
                                                <option @selected($income->month == 'july') value="july">July</option>
                                                <option @selected($income->month == 'august') value="august">August</option>
                                                <option @selected($income->month == 'september') value="september">September</option>
                                                <option @selected($income->month == 'october') value="october">October</option>
                                                <option @selected($income->month == 'november') value="november">November</option>
                                                <option @selected($income->month == 'december') value="december">December</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="po_reference"> PO Reference <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $income->po_reference }}" name="po_reference"
                                                id="po_reference" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="type"> Type <strong class="text-danger">*</strong>
                                            </label>
                                            <select name="type" id="type" class="form-control form-control-sm">
                                                <option>--select--</option>
                                                <option @selected($income->type == 'corporate') value="corporate"> Corporate</option>
                                                <option @selected($income->type == 'online') value="online"> Online </option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="client_name">Client Name <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $income->client_name }}" name="client_name"
                                                id="client_name" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="amount"> Amount <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $income->amount }}" name="amount"
                                                id="amount" placeholder="00.00" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="received_value">Received Amount <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $income->received_value }}" name="received_value" id="received_value"
                                                placeholder="00.00" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-end mt-3">
                            <button type="reset" class="btn btn-sm btn-danger me-3">Reset<i
                                    class="icon-reset"></i></button>
                            <a href="{{ route('income.index') }}" type="submit"
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
