@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
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

        </section>
        <!-- Content area -->
        <div class="content">
            <!-- Table components -->
            <div class="">
                    <h5 class="text-center" style="color:#247297;">Income and Expense Overview</h5>
                    <div class="bg-white shadow-sm w-50 m-auto px-2 py-2 rounded">
                        <table class="table table-xs table-bordered table-responsive  p-1">
                            <thead>
                                <tr style="background-color:#247297;">
                                    <th class="text-white text-center"> Month </th>
                                    <th class="text-white text-center"> Income </th>
                                    <th class="text-white text-center"> Expenses </th>
                                    <th class="text-white text-center"> Profit/Loss </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center text-info">Jan</td>
                                    <td class="text-center"> {{ $incomeJanuaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseJanuaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeJanuaryAmount->sum() - $expenseJanuaryAmount->sum() }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Feb</td>
                                    <td class="text-center"> {{ $incomeFebruaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseFebruaryAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeFebruaryAmount->sum() - $expenseFebruaryAmount->sum() }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Mar</td>
                                    <td class="text-center"> {{ $incomeMarchAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseMarchAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeMarchAmount->sum() - $expenseMarchAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Apr </td>
                                    <td class="text-center"> {{ $incomeAprilAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseAprilAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeAprilAmount->sum() - $expenseAprilAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">May </td>
                                    <td class="text-center"> {{ $incomeMayAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseMayAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeMayAmount->sum() - $expenseMayAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Jun </td>
                                    <td class="text-center"> {{ $incomeJuneAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseJuneAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeJuneAmount->sum() - $expenseJuneAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Jul </td>
                                    <td class="text-center"> {{ $incomeJulyAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseJulyAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeJulyAmount->sum() - $expenseJulyAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Aug </td>
                                    <td class="text-center"> {{ $incomeAugustAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseAugustAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeAugustAmount->sum() - $expenseAugustAmount->sum() }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Sep </td>
                                    <td class="text-center"> {{ $incomeSeptemberAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseSeptemberAmount->sum() }}</td>
                                    <td class="text-center">
                                        {{ $incomeSeptemberAmount->sum() - $expenseSeptemberAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Oct </td>
                                    <td class="text-center"> {{ $incomeOctoberAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseOctoberAmount->sum() }}</td>
                                    <td class="text-center">{{ $incomeOctoberAmount->sum() - $expenseOctoberAmount->sum() }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Nov </td>
                                    <td class="text-center"> {{ $incomeNovemberAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseNovemberAmount->sum() }}</td>
                                    <td class="text-center">
                                        {{ $incomeNovemberAmount->sum() - $expenseNovemberAmount->sum() }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center text-info">Dec </td>
                                    <td class="text-center"> {{ $incomeDecemberAmount->sum() }}</td>
                                    <td class="text-center">{{ $expenseDecemberAmount->sum() }}</td>
                                    <td class="text-center">
                                        {{ $incomeDecemberAmount->sum() - $expenseDecemberAmount->sum() }}</td>
                                </tr>
                            </tbody>
                            @php
                                $profitLossTotal = $incomeJanuaryAmount->sum() - $expenseJanuaryAmount->sum() + ($incomeFebruaryAmount->sum() - $expenseFebruaryAmount->sum()) + ($incomeMarchAmount->sum() - $expenseMarchAmount->sum()) + ($incomeAprilAmount->sum() - $expenseAprilAmount->sum()) + ($incomeMayAmount->sum() - $expenseMayAmount->sum()) + ($incomeJuneAmount->sum() - $expenseJuneAmount->sum()) + ($incomeJulyAmount->sum() - $expenseJulyAmount->sum()) + ($incomeAugustAmount->sum() - $expenseAugustAmount->sum()) + ($incomeSeptemberAmount->sum() - $expenseSeptemberAmount->sum()) + ($incomeOctoberAmount->sum() - $expenseOctoberAmount->sum()) + ($incomeNovemberAmount->sum() - $expenseNovemberAmount->sum()) + ($incomeDecemberAmount->sum() - $expenseDecemberAmount->sum());
                            @endphp
                            <tfoot>
                                <tr>
                                    {{-- style="background-color:rgb(173, 174, 174)" --}}
                                    <th class="text-center text-danger">Total </th>
                                    <th class="text-center text-danger">{{ $incomesTotalAmount }}</th>
                                    <td class="text-center text-danger">{{ $expensesTotalAmount }}</th>
                                    <th class="text-center text-danger">{{ $profitLossTotal }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
