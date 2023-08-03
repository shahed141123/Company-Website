@extends('admin.master')
@section('content')
    <style>
        .previous {
            width: 50px !important;
        }

        .datatable-footer {
            padding-right: 10px;
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
                            <span class="breadcrumb-item active">Expense</span>
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

        </section>
        <div class="content ">
            <!-- Table components -->
            <h3 class="text-center mt-2"> Expense Section</h3>
            <!-- model-start for Submit-->
            <form action="{{ route('expense.store') }}" class="form-validate-jquery" method="post"
                enctype="multipart/form-data">
                @csrf
                <div id="modal_expense" class="modal fade " tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center">Add Expense Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body m-0 p-1">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12 bg-light py-1">
                                            <div class="row mb-1 d-flex align-items-center">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Date</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="date" name="date" id="date"
                                                        class="form-control form-control-sm" required>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1 d-flex align-items-center">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Type</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <select name="type" id="type"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="loan"> Loan</option>
                                                        <option value="house">House</option>
                                                        <option value="electricity"> Electricity </option>
                                                        <option value="water"> Water </option>
                                                        <option value="telephone_mobile"> Telephone/Mobile
                                                        </option>
                                                        <option value="internet"> Internet </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                        <option value="repairing"> Repairing </option>
                                                        <option value="furniture"> Furniture </option>
                                                        <option value="accessories"> Accessories </option>
                                                        <option value="equipments ">Equipments </option>
                                                        <option value="electric"> Electric </option>
                                                        <option value="advertisements"> Advertisements </option>
                                                        <option value="other_Service">Other's Service
                                                        </option>
                                                        <option value="maintenance">Maintenance</option>
                                                        <option value="sale_pro">Sales Pro </option>
                                                        <option value="outside_pro">Outside Pro </option>
                                                        <option value="mkt_com_op">Mkt/Com/Op </option>
                                                        <option value="card_expense">Card Expense </option>
                                                        <option value="consultancy_fee">Consultancy Fee
                                                        </option>
                                                        <option value="monthly_selary">Monthly Selary </option>
                                                        <option value="wages">Wages</option>
                                                        <option value="asset">Asset</option>
                                                        <option value="items">Items</option>
                                                        <option value="mescellinuous">Mescellinuous</option>
                                                        <option value="delivery">Delivery</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="job_circular">Job circular</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1 d-flex align-items-center">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Amount</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="amount" id="amount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1 d-flex align-items-center">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Category</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <select name="category" id="category"
                                                        class="form-control form-control-sm">
                                                        <option>--select--</option>
                                                        <option value="office_rent"> Office Rent</option>
                                                        <option value="utility_bills"> Utility Bills </option>
                                                        <option value="service_bill"> Service Bill</option>
                                                        <option value="sales_cog"> Sales CoG </option>
                                                        <option value="purchase"> Purchase </option>
                                                        <option value="marketing"> Marketing </option>
                                                        <option value="remuneration"> Remuneration </option>
                                                        <option value="conveyance"> Conveyance </option>
                                                        <option value="stationariers"> Stationariers </option>
                                                        <option value="groceries"> Groceries </option>
                                                        <option value="old_debts ">Old / Debts </option>
                                                        <option value="incentives">Incentives </option>
                                                        <option value="return">Return </option>
                                                        <option value="tender_securities">Tender Securities</option>
                                                        <option value="md_personal">Md Personal </option>
                                                        <option value="outstrading">Outstrading </option>
                                                        <option value="travel_tour">Travel / Tour </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}

                                        </div>
                                        <div class="col-lg-6 col-sm-12 bg-light py-1">
                                            <div class="row mb-1 d-flex align-items-center">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Month</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
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
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Particulars</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="particulars" id="particulars"
                                                        class="form-control form-control-sm" placeholder="Particulars
                                                        ">
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row d-flex align-items-center mb-1">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Voucher</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="file" name="voucher"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-4 col-sm-12">
                                                    <span>Comment</span>
                                                </div>
                                                <div class="col-lg-8 col-sm-12">
                                                    <input type="text" name="comment" id="comment"
                                                        placeholder="Comment" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end px-3 mb-1 mt-1">
                                    <button type="submit" class="submit_btn from-prevent-multiple-submits">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
            <!-- model-end -->
        </div>
        <!-- tab menu start-->
        <div class="d-flex align-items-center justify-content-between w-75 mx-auto "
            style="border-bottom: 1px solid #247297;">
            <ul class="nav nav-tabs border-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#js-All-Expense-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                        role="tab" tabindex="-1">
                        All Expense
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
                    <span type="button" class="text-success ms-5" data-bs-toggle="modal"
                        data-bs-target="#modal_expense" style="color: #247297 !important;"> <i class="ph-plus icons_design"></i> Add Expence</span>
                </li>
            </div>
        </div>
        <!-- tab menu end -->
        <div class=" mx-auto" style="width: 85%;">
            <div class="tab-content table-responsive">
                <div class="tab-pane fade active show" id="js-All-Expense-tab" role="tabpanel">
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">All Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table whatWeDoDt table-bordered table-hover text-center">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'February')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                <div class="tab-pane fade" id="js-January-tab" role="tabpanel">
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">January Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table january table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'January')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">February Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table february table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'February')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">March Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table march table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'March')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">April Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table april table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'April')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">May Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table may table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'May')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">June Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table june table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'June')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">July Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table july table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'July')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">August Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table august table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'August')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">September Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table september table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'September')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">October Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table october table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'October')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">November Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table november table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'November')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="d-flex align-items-center py-2">
                        {{-- Add Details Start --}}
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;
                            z-index: 999;
                            margin-bottom: -40px;">
                            {{-- <a href="{{ route('knowledge.create') }}">
                                <div class="d-flex align-items-center">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Solution Details">
                                        <i class="ph-plus icons_design"></i> </span>
                                    <span class="ms-1" style="color: #247297;">Add</span>
                                </div>
                            </a> --}}
                            <div class="text-center" style="margin-left: 480px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">December Expense</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table december table-bordered table-xs datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">SL.No</th>
                                <th style="width:15%;">Particulars</th>
                                <th style="width:12%;">Date</th>
                                <th style="width:15%;">Month</th>
                                <th style="width:20%;">Amount</th>
                                <th style="width:15%;">Category</th>
                                <th style="width:13%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $key => $expense)
                                @if ($expense->created_at->format('F') == 'December')
                                    <tr>
                                        <td>{{ ++$key }} </td>
                                        <td> {{ $expense->particulars }}</td>
                                        <td> {{ $expense->date }}</td>
                                        <td> {{ $expense->month }}</td>
                                        <td> {{ $expense->amount }}</td>
                                        <td> {{ $expense->category }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('expense.edit', [$expense->id]) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
            <!-- model-start for Update-->
            {{-- <form action="{{ route('expense.update') }}" class="form-validate-jquery" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="modal_expense_edit" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center">Edit Expense Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-borderless table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="RFQID"> Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" name="date" id="date"
                                                        class="form-control form-control-sm" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="monthEdit"> Month <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="month" id="monthEdit"
                                                        class="form-control form-control-sm" required>
                                                        <option value="">--select--</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="C"> C <strong
                                                            class="text-danger">*</strong></label>
                                                    <select name="C" id="C"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="office_rent"> Office Rent</option>
                                                        <option value="utility_bills"> Utility Bills </option>
                                                        <option value="service_bill"> Service Bill</option>
                                                        <option value="sales_cog"> Sales CoG </option>
                                                        <option value="purchase"> Purchase </option>
                                                        <option value="marketing"> Marketing </option>
                                                        <option value="remuneration"> Remuneration </option>
                                                        <option value="conveyance"> Conveyance </option>
                                                        <option value="groceries"> Stationariers </option>
                                                        <option value="groceries"> Groceries </option>
                                                        <option value="old_debts ">Old / Debts </option>
                                                        <option value="incentives">Incentives </option>
                                                        <option value="return">Return </option>
                                                        <option value="tender_securities">Tender Securities
                                                        </option>
                                                        <option value="md_personal">Md Personal </option>
                                                        <option value="outstrading">Outstrading </option>
                                                        <option value="travel_tour">Travel / Tour </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="type"> Type <strong
                                                            class="text-danger">*</strong></label>
                                                    <select name="type" id="type"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="loan"> Loan</option>
                                                        <option value="house">House</option>
                                                        <option value="electricity"> Electricity </option>
                                                        <option value="water"> Water </option>
                                                        <option value="telephone_mobile"> Telephone/Mobile
                                                        </option>
                                                        <option value="internet"> Internet </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                        <option value="repairing"> Repairing </option>
                                                        <option value="furniture"> Furniture </option>
                                                        <option value="accessories"> Accessories </option>
                                                        <option value="equipments ">Equipments </option>
                                                        <option value="electric"> Electric </option>
                                                        <option value="advertisements"> Advertisements </option>
                                                        <option value="other_Service">Other's Service
                                                        </option>
                                                        <option value="maintenance">Maintenance</option>
                                                        <option value="sale_pro">Sales Pro </option>
                                                        <option value="outside_pro">Outside Pro </option>
                                                        <option value="mkt_com_op">Mkt/Com/Op </option>
                                                        <option value="card_expense">Card Expense </option>
                                                        <option value="consultancy_fee">Consultancy Fee
                                                        </option>
                                                        <option value="monthly_selary">Monthly Selary </option>
                                                        <option value="wages">Wages</option>
                                                        <option value="asset">Asset</option>
                                                        <option value="items">Items</option>
                                                        <option value="mescellinuous">Mescellinuous</option>
                                                        <option value="delivery">Delivery</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="job_circular">Job circular</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="particulars"> Particulars <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="particulars" id="particulars"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="voucher">Voucher </label>
                                                    <input type="file" name="voucher" id="voucher"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="amount"> Amount <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" name="amount" id="amount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label for="comment">Comment </label>
                                                    <input type="text" name="comment" id="comment"
                                                        placeholder="Comment" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                </form> --}}
            <!-- model-end -->
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


        $('.january, .february, .march, .april, .may, .june, .july, .august, .september, .october, .november, .december')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
    </script>
    <script type="text/javascript">
        $('.whatWeDoDt').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [4],
            }, ],
        });
    </script>
@endpush
