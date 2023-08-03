@extends('admin.master')
@section('content')
<style>
    .nav-tabs .nav-link.active {
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    color: #f1f4f9 !important;
    background-color: #247297;
    border: none !important;
    border-color: transparent !important;
}
.tab_trigers{
    width: 130px !important;
    color: #fff !important;
    margin-bottom: 2px;
}
</style>
    <div class="content-wrapper">
        <div class="d-flex justify-content-between align-items-center">
            {{-- Page Destination/ BreadCrumb --}}
            <div class="page-header-content d-lg-flex  bg-white">
                <div class="d-flex px-2">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="" class="breadcrumb-item">Income and Expense</a>
                        <span class="breadcrumb-item active">Overview</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
            {{-- Inner Page Tab --}}
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


        
        <!-- Inner content -->
        <div class="content-inner">
            <!-- Content area -->
            <div class="content">
                <!-- Table components -->
                <div class="col-lg-12 padding">
                    <h3 class="text-center" style="color: #247297;"> LEDGER BOOK - FY23 </h3>
                    <div class="col-lg-8 offset-lg-3">
                        <!-- insite menu start-->
                        {{-- <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar">
                            <li class="nav-item">
                                <a href="{{ route('income-expense.overview') }}" class="nav-link">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('income-expense.ledger') }}" class="nav-link active">Ledger Book</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('income.index') }}" class="nav-link">Income</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('expense.index') }}" class="nav-link">Expense</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="true">Cataagorical</a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="top-end"
                                    style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -46px);">
                                    <a href="cataagorical.html" class="dropdown-item">Cataagorical</a>
                                    <a href="cataagorical.html" class="dropdown-item">Debts</a>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                    <!-- insite menu end-->
                </div>
                <!-- table start -->
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 table-responsive padding">
                        <table class="table table-xs table-bordered">
                            <thead style="background-color: #247297;">
                                <tr class="">
                                    <th class="text-white text-center" width="8%"> Particulars </th>
                                    <th class="text-white text-center" width="8%"> Jan </th>
                                    <th class="text-white text-center" width="8%"> Feb </th>
                                    <th class="text-white text-center" width="8%"> Mar </th>
                                    <th class="text-white text-center" width="8%"> Apr </th>
                                    <th class="text-white text-center" width="8%"> May </th>
                                    <th class="text-white text-center" width="8%"> Jun </th>
                                    <th class="text-white text-center" width="8%"> Jul </th>
                                    <th class="text-white text-center" width="8%"> Aug </th>
                                    <th class="text-white text-center" width="7%"> Sep </th>
                                    <th class="text-white text-center" width="7%"> Oct </th>
                                    <th class="text-white text-center" width="7%"> Nov </th>
                                    <th class="text-white text-center" width="7%"> Dec </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Income</td>
                                    <td class="text-center">{{ $incomeJanuaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeFebruaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeMarchAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeAprilAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeMayAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeJuneAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeJulyAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeAugustAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeSeptemberAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeOctoberAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeNovemberAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeDecemberAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Expense</td>
                                    <td class="text-center">{{ $expenseJanuaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseFebruaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseMarchAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseAprilAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseMayAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseJuneAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseJulyAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseAugustAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseSeptemberAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseOctoberAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseNovemberAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseDecemberAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Total </td>
                                    <td class="text-center text-info">
                                        {{ $incomeJanuaryAmount->sum() + $expenseJanuaryAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeFebruaryAmount->sum() + $expenseFebruaryAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeMarchAmount->sum() + $expenseMarchAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeAprilAmount->sum() + $expenseAprilAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeMayAmount->sum() + $expenseMayAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeJuneAmount->sum() + $expenseJuneAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeJulyAmount->sum() + $expenseJulyAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeAugustAmount->sum() + $expenseAugustAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeSeptemberAmount->sum() + $expenseSeptemberAmount->sum() }}
                                    </td>
                                    <td class="text-center text-info">
                                        {{ $incomeOctoberAmount->sum() + $expenseOctoberAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeNovemberAmount->sum() + $expenseNovemberAmount->sum() }} </td>
                                    <td class="text-center text-info">
                                        {{ $incomeDecemberAmount->sum() + $expenseDecemberAmount->sum() }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Monthly tap -->
                    <ul class=" mx-auto nav nav-tabs mt-3 d-flex justify-content-center align-items-center" role="tablist" style="width: 55%;">
                        <li class="nav-item" role="presentation">
                            <a href="#js-January-tab" class="nav-link active" data-bs-toggle="tab"
                                aria-selected="true" role="tab" tabindex="-1">
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
                            <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="March" tabindex="-1">
                                Mar
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                Apr
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-May-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                May
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-June-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                Jun
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                Jul
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
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
                    <!-- Monthly tab end -->
                    <div class="tab-content table-responsive mt-3">
                        <div class="tab-pane fade active show" id="js-January-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#salesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="salesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body table-responsive">
                                        <table class="table table-bordered table-xs datatable-basic  JanTabIncome">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#office_rent_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#utilitybills_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#servicebills_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#sales_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="sales_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Purchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="Purchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Jan_Marketing_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="Jan_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#remuneration_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="remuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Conveyance_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="Conveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Stationaries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="Stationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Groceries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="Groceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#oldDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="oldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Incentives_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="Incentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Invetment_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="Invetment_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#TenderSecurities_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="TenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MD_Personal_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="MD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Outstanding_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="Outstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#TravelTour_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="TravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Entertainment_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="Entertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JanTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'January' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-February-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruarysalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="FebruarysalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#February_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="February_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#February_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="February_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#February_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="February_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#Februarysales_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="Februarysales_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#FebruaryPurchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="FebruaryPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#February_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="February_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Februaryremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Februaryremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruaryConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="FebruaryConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruaryStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="FebruaryStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#FebruaryGroceries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="FebruaryGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#FebruaryoldDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="FebruaryoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruaryIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="FebruaryIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#February_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="February_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruaryTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="FebruaryTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruaryMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="FebruaryMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruaryOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="FebruaryOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#FebruaryTravelTour_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="FebruaryTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#FebruaryEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="FebruaryEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FebTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'February' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MarchsalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="MarchsalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#March_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="March_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#March_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="March_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#March_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="March_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#March_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="March_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MarchPurchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="MarchPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#March_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="March_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicMarbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Marchremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Marchremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MarchConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="MarchConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MarchStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="MarchStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MarbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MarchGroceries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="MarchGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MarcholdDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="MarcholdDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MarchIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="MarchIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#March_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="March_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MarchTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="MarchTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MarchMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="MarchMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MarchOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="MarchOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MarchTravelTour_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="MarchTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MarchEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="MarchEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  MarTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'March' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilsalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="AprilsalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#April_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="April_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#April_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="April_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#April_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="April_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#April_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="April_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#AprilPurchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="AprilPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#April_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="April_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Aprilremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Aprilremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="AprilConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="AprilStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAprbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#AprilGroceries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="AprilGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#ApriloldDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="ApriloldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="AprilIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#April_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="April_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="AprilTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="AprilMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="AprilOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#AprilTravelTour_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="AprilTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AprilEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="AprilEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AprTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'April' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MaysalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="MaysalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#May_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="May_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#May_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="May_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#May_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="May_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#May_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="May_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayPurchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="MayPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#May_Marketing_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="May_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Mayremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Mayremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayConveyance_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="MayConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MayStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="MayStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic MayTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayGroceries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="MayGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayoldDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="MayoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayIncentives_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="MayIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#May_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="May_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MayTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="MayTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayMD_Personal_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="MayMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayOutstanding_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="MayOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#MayTravelTour_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="MayTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#MayEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="MayEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FMayab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'May' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JunesalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="JunesalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#June_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="June_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#June_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="June_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#June_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="June_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#June_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="June_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JunePurchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="JunePurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#June_Marketing_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="June_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Juneremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Juneremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JuneConveyance_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="JuneConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JuneStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="JuneStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JunbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JuneGroceries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="JuneGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JuneoldDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="JuneoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JuneIncentives_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="JuneIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#June_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="June_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JuneTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="JuneTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JuneMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="JuneMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JuneOutstanding_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="JuneOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JuneTravelTour_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="JuneTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JuneEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="JuneEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  JunTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'June' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JulysalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="JulysalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic JulIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#July_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="July_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#July_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="July_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#July_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="July_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#July_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="July_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JulyPurchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="JulyPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#July_Marketing_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="July_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Julyremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Julyremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JulyConveyance_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="JulyConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JulyStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="JulyStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic   JulbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JulyGroceries_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="JulyGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JulyoldDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="JulyoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JulyIncentives_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="JulyIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#July_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="July_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JulyTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="JulyTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JulyMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="JulyMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JulyOutstanding_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="JulyOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#JulyTravelTour_item"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="JulyTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#JulyEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="JulyEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic    JulTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'July' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustsalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="AugustsalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#August_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="August_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#August_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="August_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#August_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="August_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#August_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="August_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#AugustPurchase_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="AugustPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#August_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="August_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Augustremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Augustremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="AugustConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="AugustStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basicAugbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustGroceries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="AugustGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#AugustoldDebts_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="AugustoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="AugustIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#August_Returns_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="August_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="AugustTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="AugustMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="AugustOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustTravelTour_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="AugustTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#AugustEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="AugustEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic AugTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'August' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptembersalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="SeptembersalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#September_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="September_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#September_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="September_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#September_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="September_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#September_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="September_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberPurchase_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="SeptemberPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#September_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="September_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Septemberremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Septemberremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="SeptemberConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="SeptemberStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberGroceries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="SeptemberGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberoldDebts_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="SeptemberoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="SeptemberIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#September_Returns_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="September_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="SeptemberTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="SeptemberMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="SeptemberOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberTravelTour_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="SeptemberTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#SeptemberEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="SeptemberEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic SepTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'September' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-October-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctobersalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="OctobersalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#October_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="October_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#October_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="October_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#October_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="October_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#October_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="October_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberPurchase_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="OctoberPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#October_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="October_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Octoberremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Octoberremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="OctoberConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="OctoberStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberGroceries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="OctoberGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberoldDebts_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="OctoberoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="OctoberIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#October_Returns_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="October_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="OctoberTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="OctoberMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="OctoberOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberTravelTour_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="OctoberTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#OctoberEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="OctoberEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic OctTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'October' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovembersalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="NovembersalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#November_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="November_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#November_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="November_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#November_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="November_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#November_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="November_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberPurchase_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="NovemberPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#November_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="November_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Novemberremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Novemberremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="NovemberConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="NovemberStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic NovbTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberGroceries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="NovemberGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberoldDebts_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="NovemberoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="NovemberIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#November_Returns_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="November_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="NovemberTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="NovemberMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="NovemberOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberTravelTour_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="NovemberTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#NovemberEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="NovemberEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic  NovTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'November' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecembersalesIncome_item1">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales/Income
                                    </h3>
                                </a>
                                <div id="DecembersalesIncome_item1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecIncomeTab">
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
                                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                                    class="text-primary">
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
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#December_office_rent_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Office Rent
                                    </h3>
                                </a>
                                <div id="December_office_rent_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab1">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'office_rent')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#December_utilitybills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Utility Bills
                                    </h3>
                                </a>
                                <div id="December_utilitybills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab2">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'utility_bills')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#December_servicebills_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Service Bills
                                    </h3>
                                </a>
                                <div id="December_servicebills_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab3">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'service_bill')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#December_CoG_item1"
                                    class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Sales - CoG
                                    </h3>
                                </a>
                                <div id="December_CoG_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab4">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'sales_cog')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberPurchase_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Purchase
                                    </h3>
                                </a>
                                <div id="DecemberPurchase_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'purchase')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#December_Marketing_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Marketing
                                    </h3>
                                </a>
                                <div id="December_Marketing_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab6">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'marketing')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#Decemberremuneration_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Remuneration
                                    </h3>
                                </a>
                                <div id="Decemberremuneration_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab7">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'remuneration')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberConveyance_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Conveyance
                                    </h3>
                                </a>
                                <div id="DecemberConveyance_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab8">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'conveyance')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberStationaries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Stationaries
                                    </h3>
                                </a>
                                <div id="DecemberStationaries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab9">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'stationariers')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberGroceries_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Groceries
                                    </h3>
                                </a>
                                <div id="DecemberGroceries_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab10">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'groceries')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberoldDebts_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Old / Debts
                                    </h3>
                                </a>
                                <div id="DecemberoldDebts_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab11">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'old_debts')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberIncentives_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Incentives
                                    </h3>
                                </a>
                                <div id="DecemberIncentives_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab12">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'incentives')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#December_Returns_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Returns
                                    </h3>
                                </a>
                                <div id="December_Returns_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic FDecab13">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'return')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberTenderSecurities_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Tender Securities
                                    </h3>
                                </a>
                                <div id="DecemberTenderSecurities_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab14">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'tender_securities')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberMD_Personal_item1" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> MD Personal
                                    </h3>
                                </a>
                                <div id="DecemberMD_Personal_item1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab15">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'md_personal')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberOutstanding_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Outstanding
                                    </h3>
                                </a>
                                <div id="DecemberOutstanding_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab16">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'outstrading')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberTravelTour_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Travel / Tour
                                    </h3>
                                </a>
                                <div id="DecemberTravelTour_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab17">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'travel_tour')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="collapse"
                                    data-bs-target="#DecemberEntertainment_item" class="text-black">
                                    <h3 class="tab_trigers" style="padding: 5px; background-color: #247297; font-size: 13px;">
                                        <i class="icon-plus2 icon-1x"></i> Entertainment
                                    </h3>
                                </a>
                                <div id="DecemberEntertainment_item" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_expanded">
                                    <div class="accordion-body">
                                        <table class="table table-bordered table-xs datatable-basic DecTab18">
                                            <thead>
                                                <tr class="text-center">
                                                    <th> SL </th>
                                                    <th> Particulars </th>
                                                    <th> Date </th>
                                                    <th> Month </th>
                                                    <th> Amount </th>
                                                    <th> Category </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($expenses as $key => $expense)
                                                    @if ($expense->created_at->format('F') == 'December' && $expense->category == 'entertainment')
                                                        <tr>
                                                            <td>{{ ++$key }} </td>
                                                            <td> {{ $expense->particulars }}</td>
                                                            <td> {{ $expense->date }}</td>
                                                            <td> {{ $expense->month }}</td>
                                                            <td> {{ $expense->amount }}</td>
                                                            <td> {{ $expense->category }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                                    class="text-primary">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        //  All Month IncomeTab
        $('.JanTabIncome, .FebIncomeTab, .MarIncomeTab, .AprIncomeTab, .MayIncomeTab, .JunIncomeTab, .JulIncomeTab, .AugIncomeTab, .SepIncomeTab, .OctIncomeTab, .NovIncomeTab, .DecIncomeTab')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [9],
                }, ],
            });
        // Jan Expense
        $('.JanTab1, .JanTab2, .JanTab3, .JanTab4, .JanTab5, .JanTab6, .JanTab7, .JanTab8, .JanTab9, .JanTab10, .JanTab11, .JanTab12, .JanTab13, .JanTab14, .JanTab15, .JanTab16, .JanTab17, .JanTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Feb
        $('.FebTab1, .FebTab2, .FebTab3, .FebTab4, .FebTab5, .FebTab6, .FebTab7, .FebTab8, .FebTab9, .FebTab10, .FebTab11, .FebTab12, .FebTab13, .FebTab14, .FebTab15, .FebTab16, .FebTab17, .FebTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Mar
        $('.MarbTab1, .MarbTab2, .MarbTab3, .MarbTab4, .MarbTab5, .MarbTab6, .MarbTab7, .MarbTab8, .MarbTab9, .MarbTab10, .MarbTab11, .MarbTab12, .MarbTab13, .MarbTab14, .MarbTab15, .MarbTab16, .MarbTab17, .MarbTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // April
        $('.AprTab1, .AprTab2, .AprTab3, .AprTab4, .AprTab5, .AprTab6, .AprTab7, .AprTab8, .AprTab9, .AprTab10, .AprTab11, .AprTab12, .AprTab13, .AprTab14, .AprTab15, .AprTab16, .AprTab17, .AprTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // May
        $('.MayTab1, .MayTab2, .MayTab3, .MayTab4, .MayTab5, .MayTab6, .MayTab7, .MayTab8, .MayTab9, .MayTab10, .MayTab11, .MayTab12, .MayTab13, .MayTab14, .MayTab15, .MayTab16, .MayTab17, .MayTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // June
        $('.JunTab1, .JunTab2, .JunTab3, .JunTab4, .JunTab5, .JunTab6, .JunTab7, .JunTab8, .JunTab9, .JunTab10, .JunTab11, .JunTab12, .JunTab13, .JunTab14, .JunTab15, .JunTab16, .JunTab17, .JunTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Jul
        $('.JulTab1, .JulTab2, .JulTab3, .JulTab4, .JulTab5, .JulTab6, .JulTab7, .JulTab8, .JulTab9, .JulTab10, .JulTab11, .JulTab12, .JulTab13, .JulTab14, .JulTab15, .JulTab16, .JulTab17, .JulTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Aug
        $('.AugTab1, .AugTab2, .AugTab3, .AugTab4, .AugTab5, .AugTab6, .AugTab7, .AugTab8, .AugTab9, .AugTab10, .AugTab11, .AugTab12, .AugTab13, .AugTab14, .AugTab15, .AugTab16, .AugTab17, .AugTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Sep
        $('.SepTab1, .SepTab2, .SepTab3, .SepTab4, .SepTab5, .SepTab6, .SepTab7, .SepTab8, .SepTab9, .SepTab10, .SepTab11, .SepTab12, .SepTab13, .SepTab14, .SepTab15, .SepTab16, .SepTab17, .SepTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Oct
        $('.OctTab1, .OctTab2, .OctTab3, .OctTab4, .OctTab5, .OctTab6, .OctTab7, .OctTab8, .OctTab9, .OctTab10, .OctTab11, .OctTab12, .OctTab13, .OctTab14, .OctTab15, .OctTab16, .OctTab17, .OctTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Nov
        $('.NovTab1, .NovTab2, .NovTab3, .NovTab4, .NovTab5, .NovTab6, .NovTab7, .NovTab8, .NovTab9, .NovTab10, .NovTab11, .NovTab12, .NovTab13, .NovTab14, .NovTab15, .NovTab16, .NovTab17, .NovTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        // Dec
        $('.DecTab1, .DecTab2, .DecTab3, .DecTab4, .DecTab5, .DecTab6, .DecTab7, .DecTab8, .DecTab9, .DecTab10, .DecTab11, .DecTab12, .DecTab13, .DecTab14, .DecTab15, .DecTab16, .DecTab17, .DecTab18')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
    </script>
@endpush
