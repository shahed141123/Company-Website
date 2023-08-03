@extends('admin.master')
@section('content')
    <style>
        .navigation_btn:hover {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 11px;
            border: none;
            background-color: #d3d3d392;
            border-color: #ddd;
            color: #ddd !important;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        }

        .icon_btn:hover {
            color: #ddd !important;
        }
    </style>
    <!-- Content area -->
    <div class="content">
        <!-- Table components -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-xs table-bordered table-responsive w-75 mx-auto mb-3">
                    <tr class="main_bg">
                        <th class="text-center text-white " colspan="4">
                            <div class="row  ">
                                <div class="col-lg-4">
                                    <a href="payable-receiveable-dashboard.html" class="float-start text-white"> Payable &
                                        Receivable Dashboard </a>
                                </div>
                                <div class="col-lg-4">
                                    <span>Details Payable Information</span>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <a class="btn navigation_btn" href="" data-bs-toggle="modal"
                                        data-bs-target="#modal_account_payable">
                                        <div class="d-flex align-items-center">
                                            <span class="icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Details Payable Information">
                                                <i class="ph-plus icons_design"></i> </span>
                                            <span class="ms-1">Add</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th class="bg-white text-center" colspan="2" rowspan="2"> <a href="#"
                                class="main_color">
                                Total Payable </a>
                        </th>
                    </tr>
                    <tr>
                        <th class="bg-white text-center"> <a href="#" class="main_color"> Paid </a> </th>
                        <td class="bg-white text-center main_color"> 200.00</td>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-center"> FY </th>
                        <th class="bg-white text-center"> <a href="#" class="main_color"> Outstanding </a> </th>
                        <td class="bg-white text-center main_color"> 150.00</td>
                    </tr>
                </table>
                <!-- model-start -->
                <!-- Basic modal for Closed -->
                <form action="{{ route('account-payable.store') }}" class="form-validate-jquery-payable" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="modal_account_payable" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Account Payable</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body p-0 mx-2 my-2">
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-lg-6 bg-light py-2 ">
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>RFQ Name</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="rfq_id" id="rfq_id"
                                                            class="form-control form-control-sm" required>
                                                            <option>--select--</option>
                                                            @foreach ($rfqs as $rfq)
                                                                <option value="{{ $rfq->id }}"> {{ $rfq->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Payment Type</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="payment_type" id="payment_type"
                                                            class="form-control form-control-sm" required>
                                                            <option>--select--</option>
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
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Invoice</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="file" name="invoice" id="invoice">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>PO Value</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="po_value" id="po_value"
                                                            class="form-control form-control-sm" placeholder="PO Value">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Due Date</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="date" name="due_date" id="due_date"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Credit Days</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="credit_days" id="credit_days"
                                                            class="form-control form-control-sm"
                                                            placeholder="Credit Days">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Delivery Date</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="date" name="delivery_date" id="delivery_date"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                            </div>
                                            <div class="col-lg-6 bg-light py-2">
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Client PO</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="file" name="client_po" id="client_po">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Client PO Number</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="client_po_number"
                                                            id="client_po_number" placeholder="PO Number"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Client Amount</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="client_amount"
                                                            id="client_amount" placeholder="00.00"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Client Payment</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="client_payment_status"
                                                            id="client_payment_status"
                                                            class="form-control form-control-sm">
                                                            <option value="">--select--</option>
                                                            <option value="advance_paid">Advance Paid</option>
                                                            <option value="not_paid"> Not Paid</option>
                                                            <option value="half_paid">Half Paid</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="delayed">Delayed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Client Payment</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="client_payment_value"
                                                            placeholder="client Payment" id="client_payment_value"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1">
                                                    <div class="col-sm-4">
                                                        <span>Client Name</span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="client_name" id="client_name"
                                                            placeholder="client" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                {{--  --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-0 p-0">
                                    <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                        style="padding: 4px 9px;">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- model-end -->
            </div>
        </div>
        <!-- tab menu start-->
        <ul class="nav nav-tabs w-75 mx-auto d-flex justify-content-center" role="tablist"
            style="border-bottom: 1px solid #247297">
            <li class="nav-item" role="presentation">
                <a href="#js-January-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                    role="tab" tabindex="-1">
                    January
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    February
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="March"
                    tabindex="-1">
                    March
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    April
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-May-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    May
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-June-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    June
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    July
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    August
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    September
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    October
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    November
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    December
                </a>
            </li>
        </ul>
        <!-- tab menu end -->
        <div class="">
            <!-- Tab start -->
            <div class="card-body">
                <div class="tab-content table-responsive">
                    <div class="tab-pane fade active show" id="js-January-tab" role="tabpanel">
                        <div class="content pt-0 ">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">January</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'January')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-February-tab" role="tabpanel">
                        <div class="content pt-0">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">February</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'February')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                        <div class="content pt-0">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">March</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'March')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                        <div class="content pt-0">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">April</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'April')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                        <div class="content pt-0">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">May</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'May')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                        <div class="content pt-0 ">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">June</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'June')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                        <div class="content pt-0">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">July</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'July')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                        <div class="content pt-0 ">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">August</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'August')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                        <div class="content pt-0 ">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">September</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'September')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-October-tab" role="tabpanel">
                        <div class="content pt-0 ">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">October</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'October')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                        <div class="content pt-0 ">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">November</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'November')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                        <div class="content pt-0 ">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;
                                    z-index: 999;
                                    margin-bottom: -40px;">
                                    <div class="text-center" style="margin-left: 505px">
                                        <h5 class="ms-1" style="color: #247297;">December</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table newsLetterDt table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%"> Id </th>
                                            <th width="5%"> Rfq Name </th>
                                            <th width="10%">Payment type </th>
                                            <th width="8%"> Po Value </th>
                                            <th width="8%"> Due Date </th>
                                            <th width="8%"> Client Name </th>
                                            <th width="8%"> Client Po number </th>
                                            <th width="8%"> Client Amount </th>
                                            <th width="8%"> Client Payment status </th>
                                            <th width="8%"> Client Payment Value </th>
                                            <th width="8%"> delivery Date </th>
                                            <th width="10%">credit days </th>
                                            <th width="7%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($accountsReceivables as $key => $accountsReceivable)
                                            @if ($accountsReceivable->created_at->format('F') == 'December')
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                                    </td>
                                                    <td>{{ $accountsReceivable->payment_type }}</td>
                                                    <td>{{ $accountsReceivable->po_value }}</td>
                                                    <td>{{ $accountsReceivable->due_date }}</td>
                                                    <td>{{ $accountsReceivable->client_name }}</td>
                                                    <td>{{ $accountsReceivable->client_po_number }}</td>
                                                    <td>{{ $accountsReceivable->client_amount }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_status }}</td>
                                                    <td>{{ $accountsReceivable->client_payment_value }}</td>
                                                    <td>{{ $accountsReceivable->delivery_date }}</td>
                                                    <td>{{ $accountsReceivable->credit_days }}</td>
                                                    <td>
                                                        <a href="{{ route('account-payable.edit', [$accountsReceivable->id]) }}"
                                                            class="text-primary">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('account-payable.destroy', [$accountsReceivable->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <td colspan="12" class="text-center"> Data not available</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end cart body -->
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $('.newsLetterDt').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [2],
            }, ],
        });
    </script>
    <script>
        // Initialize ==========Closed Form valitation
        const validator = $('.form-validate-jquery-payable').validate({
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
                label.addClass('validation-valid-label').text('Success.'); // remove to hide Success message
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
                password: {
                    minlength: 5
                },
                repeat_password: {
                    equalTo: '#password'
                },
                email: {
                    email: true
                },
                repeat_email: {
                    equalTo: '#email'
                },
                minimum_characters: {
                    minlength: 10
                },
                maximum_characters: {
                    maxlength: 10
                },
                minimum_number: {
                    min: 10
                },
                maximum_number: {
                    max: 10
                },
                number_range: {
                    range: [10, 20]
                },
                url: {
                    url: true
                },
                date: {
                    date: true
                },
                date_iso: {
                    dateISO: true
                },
                numbers: {
                    number: true
                },
                clientPO: {
                    number: true
                },
                clientPONumber: {
                    number: true
                },
                clientAmount: {
                    number: true
                },
                clientValue: {
                    number: true
                },
                POValue: {
                    text: true
                },
                client: {
                    text: true
                },
                digits: {
                    digits: true
                },
                creditcard: {
                    creditcard: true
                },
                basic_checkbox: {
                    minlength: 2
                },
                styled_checkbox: {
                    minlength: 2
                },
                switch_group: {
                    minlength: 2
                }
            },
            messages: {
                custom: {
                    required: 'This is a custom error message'
                },
                basic_checkbox: {
                    minlength: 'Please select at least {0} checkboxes'
                },
                styled_checkbox: {
                    minlength: 'Please select at least {0} checkboxes'
                },
                switch_group: {
                    minlength: 'Please select at least {0} switches'
                },
                agree: 'Please accept our policy'
            }
        });
    </script>
@endpush
