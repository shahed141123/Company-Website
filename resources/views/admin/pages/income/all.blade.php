@extends('admin.master')
@section('content')
    <style>
        .previous {
            width: 50px !important;
        }

        .datatable-footer {
            padding-right: 10px !important;
        }
    </style>
    <div class="content-wrapper">
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <span class="breadcrumb-item active">Income</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}

                <!-- Basic tabs -->
                <div class="d-flex">
                    <div>
                        <a href="{{ route('income-expense.overview') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Overview</span>
                            </div>
                        </a>
                        <a href="{{ route('income-expense.ledger') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                <span>Ledger Book</span>
                            </div>
                        </a>
                        <a href="{{ route('income.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                                <span>Income</span>
                            </div>
                        </a>
                        <a href="{{ route('expense.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                                <span>Expense</span>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown ms-1 me-3">
                        <button class="btn navigation_btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a href="cataagorical.html" class="dropdown-item">Cataagorical</a>
                            </li>
                            <li><a href="cataagorical.html" class="dropdown-item">Debts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="content">
            <!-- Table components -->
            <h3 class="text-center mt-2" style="color: #247297;" >All Income Details</h3>
            <div class="">
                <!-- model-start for Submit-->
                <form action="{{ route('income.store') }}" class="form-validate-jquery" method="post">
                    @csrf
                    <div id="modal_income" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center">Income Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body p-2">
                                    <div class="row">
                                        <div class="col-lg-4 pe-0">
                                            <div class="py-2 px-2 bg-light">
                                                {{--  --}}
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>RFQ ID</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
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
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Month</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <select name="month" id="month"
                                                            class="form-control form-control-sm" required>
                                                            <option>--select--</option>
                                                            <option value="january"> January</option>
                                                            <option value="february"> February</option>
                                                            <option value="march"> March</option>
                                                            <option value="april"> April</option>
                                                            <option value="may"> May</option>
                                                            <option value="june"> June</option>
                                                            <option value="july"> July</option>
                                                            <option value="august"> August</option>
                                                            <option value="september"> September</option>
                                                            <option value="october"> October</option>
                                                            <option value="november"> November</option>
                                                            <option value="december"> December</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Client Name</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <input type="text" name="client_name" id="client_name"
                                                            class="form-control form-control-sm" placeholder="Enter Client Name" required>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4 pe-0">
                                            <div class="py-2 px-2 bg-light">
                                                {{--  --}}
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Order Id</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <select name="order_id" id="order_id"
                                                            class="form-control form-control-sm" data-bs-placeholder="Order Id">
                                                            @foreach ($orders as $order)
                                                                <option value="{{ $order->id }}">
                                                                    {{ $order->order_number . $order->client_type . App\Models\Client\Client::where('id', $order->client_id) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Reference</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <select name="type" id="type"
                                                            class="form-control form-control-sm">
                                                            <option>--select--</option>
                                                            <option value="corporate"> Corporate</option>
                                                            <option value="online"> Online </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Amount</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <input type="text" name="amount" id="amount"
                                                            placeholder="00.00" class="form-control form-control-sm"
                                                            required>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4 pe-0">
                                            <div class="py-2 px-2 bg-light">
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <input type="date" name="date" id="date"
                                                            placeholder="" class="form-control form-control-sm" required>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Type</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <select name="type" id="type"
                                                            class="form-control form-control-sm" aria-invalid="false">
                                                            <option>--select--</option>
                                                            <option value="corporate"> Corporate</option>
                                                            <option value="online"> Online </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                                <div class="row mb-1 d-flex align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <span>Received</span>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <input type="text" name="received_value" id="received_value"
                                                            placeholder="00.00" class="form-control form-control-sm"
                                                            required>
                                                    </div>
                                                </div>
                                                {{--  --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <div class="pb-2 px-2">
                                            <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                                style="padding: 5px;">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <!-- model-end -->
            </div>
        </div>
        <!-- tab menu start-->
        <div class="d-flex align-items-center justify-content-between w-75 mx-auto "
            style="    border-bottom: 1px solid #247297;">
            <ul class="nav nav-tabs border-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#js-All-Expense-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                        role="tab" tabindex="-1">
                        All Income
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-January-tab" class="nav-link" data-bs-toggle="tab" aria-selected="true" role="tab"
                        tabindex="-1">
                        Jan
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        Feb
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="March"
                        tabindex="-1">
                        Mar
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        Apr
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
                        Jun
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        Jul
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        Aug
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        Sep
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        Oct
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        Nov
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        Dec
                    </a>
                </li>
            </ul>
            <div>
                <li class="nav-item d-flex justify-content-end" role="presentation">
                    <span type="button" class=" ms-5 " style="color: #247297;" data-bs-toggle="modal"
                        data-bs-target="#modal_income"> <i class="ph-plus icons_design " style="color: #247297;" ></i> Add Income</span>
                </li>
            </div>
        </div>

        <!-- tab menu end -->
        <div class="card-body w-100 mx-auto">
            <div class="tab-content table-responsive">
                <div class="tab-pane fade show active" id="js-income-all-tab" role="tabpanel">
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            <a href="" data-bs-toggle="modal" data-bs-target="#addnewsLetter">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        {{-- <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span> --}}
                                </div>
                            </a>
                            <div class="text-center" style="margin-left: 505px">
                                <h5 class="ms-1" style="color: #247297;">Income All</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table january table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%">Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($incomes)
                                @foreach ($incomes as $key => $income)
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td>
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i
                                                    class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-January-tab" role="tabpanel">
                    <table class="table january table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'January')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-February-tab" role="tabpanel">
                    <table class="table february  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'February')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                    <table class="table march  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'March')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                    <table class="table april  may-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'April')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                    <table class="table may  june-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'May')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                    <table class="table june  july-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'June')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                    <table class="table july  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'July')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                    <table class="table august  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'August')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                    <table class="table september  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'September')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-October-tab" role="tabpanel">
                    <table class="table october  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'October')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                    <table class="table november  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'November')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                    <table class="table december  table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:15%;">RFQ Name</th>
                                <th style="width:10%;">Date</th>
                                <th style="width:10%"> Month </th>
                                <th style="width:15%;">PO Ref.</th>
                                <th style="width:15%;">Client Name</th>
                                <th style="width:5%;">Type</th>
                                <th style="width:10%"> Amount </th>
                                <th style="width:5%;">Received Value</th>
                                <th style="width:10%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $key => $income)
                                @if ($income->created_at->format('F') == 'December')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                        </td>
                                        <td> {{ $income->date }}</td>
                                        <td> {{ $income->month }}</td>
                                        <td> {{ $income->po_reference }}</td>
                                        <td> {{ $income->client_name }}</td>
                                        <td> {{ $income->type }}</td>
                                        <td> {{ $income->amount }}</td>
                                        <td> {{ $income->received_value }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('income.destroy', [$income->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
            // success: function(label) {
            //     label.addClass('validation-valid-label').text('success.'); // remove to hide Success message
            // },
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
                received_value: {
                    number: true
                },
            },
        });
        $('.january, .february, .march, .april, .may, .june, .july, .august, .september, .october, .november, .december')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [9],
                }, ],
            });
    </script>
@endpush
