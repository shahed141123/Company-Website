@extends('admin.master')
@section('content')
    <style>
        .pagination-flat .previous {
            margin-right: 30px !important;
        }

        .dataTables_paginate {
            margin: 0px;
            padding: 0px;
            margin-right: 15px;
        }

        .navigation_btn:hover {
            color: white !important;
        }

        .submit_btn {
            color: white !important;
        }

        .submit_btn:hover {
            color: #247297 !important;
        }
    </style>
    <div class="content-wrapper">
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">

                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="http://127.0.0.1:8000/admin/dashboard" class="breadcrumb-item">Home</a>
                            <span class="breadcrumb-item active">Purchase</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>


                <!-- Basic tabs -->
                <div class="d-flex">
                    <div>
                        <a href="http://127.0.0.1:8000/admin/income-expense/overview" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Overview</span>
                            </div>
                        </a>
                        <a href="http://127.0.0.1:8000/admin/income-expense/ledger" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                <span>Ledger Book</span>
                            </div>
                        </a>
                        <a href="http://127.0.0.1:8000/admin/income" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                                <span>Income</span>
                            </div>
                        </a>
                        <a href="http://127.0.0.1:8000/admin/expense" class="btn navigation_btn">
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
            <div class="card mx-auto mb-3 w-50">
                <div class="col-lg-12">
                    <table class="table table-xs table-bordered table-responsive">
                        <tr class="main_bg">
                            <th class="text-center  py-1" colspan="2">
                                <div class="row ">
                                    <div class="col-lg-6 col-sm-6 d-flex justify-content-start">
                                        <span class="text-white">Purchase Order</span>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 d-flex justify-content-end">
                                        <a href="" data-bs-toggle="modal"
                                            data-bs-target="#modal_purchase_order_save">
                                            <div class="d-flex align-items-center">
                                                <span class="ms-2 icon_btn" style="font-weight: 800;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add Solution Details">
                                                    <i class="ph-plus icons_design text-white"></i> </span>
                                                <span class="ms-1" style="color: #fff;">Add</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th class=" text-center" style="color: #247297"> Total Amount </th>
                            <th class=" text-center" style="color: #247297"> Total Number </th>
                        </tr>
                        <tr>
                            <td class="text-center"> {{ App\Models\Admin\Purchase::sum('total') }} $</td>
                            <td class="text-center"> {{ App\Models\Admin\Purchase::count() }}</td>
                        </tr>
                    </table>
                    @include('admin.pages.purchase.add')
                </div>
            </div>
            <!-- tab month menu start-->
            <h3 class="text-center" style="color: #247297;">Purchase History</h3>
            <ul class="nav nav-tabs mx-auto" role="tablist" style="width: 70%; border-bottom: 1px solid #247297;">
                <li class="nav-item" role="presentation">
                    <a href="#js-January-tab" class="nav-link  js-January-tab" data-bs-toggle="tab" aria-selected="true"
                        role="tab" tabindex="-1">
                        January
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-February-tab" class="nav-link  js-February-tab" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        February
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-March-tab" class="nav-link  js-March-tab" data-bs-toggle="tab" aria-selected="false"
                        role="March" tabindex="-1">
                        March
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-April-tab" class="nav-link  js-April-tab" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        April
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-May-tab" class="nav-link  js-May-tab" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        May
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-June-tab" class="nav-link  js-June-tab" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        June
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-July-tab" class="nav-link  js-July-tab" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        July
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-August-tab" class="nav-link  js-August-tab" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        August
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-September-tab" class="nav-link  js-September-tab" data-bs-toggle="tab"
                        aria-selected="false" role="tab" tabindex="-1">
                        September
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-October-tab" class="nav-link  js-October-tab" data-bs-toggle="tab"
                        aria-selected="false" role="tab" tabindex="-1">
                        October
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-November-tab" class="nav-link  js-November-tab" data-bs-toggle="tab"
                        aria-selected="false" role="tab" tabindex="-1">
                        November
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-December-tab" class="nav-link  js-December-tab" data-bs-toggle="tab"
                        aria-selected="false" role="tab" tabindex="-1">
                        December
                    </a>
                </li>
            </ul>
            <!-- tab month menu end -->
            <div class="tab-content table-responsive">
                <div class="tab-pane fade js-January-tab" id="js-January-tab" role="tabpanel">
                    <div class="d-flex align-items-center">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-3 mt-2" style="color: #247297;">January Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table january table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'January')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td>
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-eye me-2 p-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
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
                <div class="tab-pane fade js-February-tab" id="js-February-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">February Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  february">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'February')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
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
                <div class="tab-pane fade js-March-tab" id="js-March-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">March Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  march">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'March')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-April-tab" id="js-April-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">April Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  april">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'April')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-May-tab" id="js-May-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">May Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  may">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'May')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-June-tab" id="js-June-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">June Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  june">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'June')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-July-tab" id="js-July-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">July Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  july">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'July')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-August-tab" id="js-August-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">August Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  august">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'August')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-September-tab" id="js-September-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">September Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  september">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'September')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-October-tab" id="js-October-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">October Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  october">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'October')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-November-tab" id="js-November-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">November Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  november">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'November')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}" class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                <div class="tab-pane fade js-December-tab" id="js-December-tab" role="tabpanel">
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
                            <div class="text-center" style="margin-left: 540px">
                                <h5 class="ms-1 mb-0" style="color: #247297;">December Purchase</h5>
                            </div>
                        </div>
                        {{-- Add Details End --}}
                    </div>
                    <table class="table newsLetterDt table-bordered table-hover text-center  december">
                        <thead>
                            <tr class="text-small">
                                <th style="width:5%;">ID</th>
                                <th style="width:13%;">RFQ Code</th>
                                <th style="width:10%;">PQ Reference</th>
                                <th style="width:15%;">PO Reference</th>
                                <th style="width:30%;">Principal Name</th>
                                <th style="width:15%;"> Amount</th>
                                <th style="width:12%"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchases as $key => $purchase)
                                @if ($purchase->created_at->format('F') == 'December')
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('rfq_code') }}
                                        </td>
                                        <td>{{ $purchase->pq_reference }}</td>
                                        <td>{{ $purchase->po_reference }}</td>
                                        <td>{{ $purchase->principal_name }}</td>
                                        <td>{{ $purchase->total }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('purchase.show', [$purchase->id]) }}" class="text-info">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                class="text-primary">
                                                <i class="fa-solid fa-pen-to-square ms-1 rounded-circle text-primary"></i>
                                            </a>
                                            <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                class="text-danger delete">
                                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger delete"></i>
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
                subtotal: {
                    number: true
                },
                shipping: {
                    number: true
                },
                tax: {
                    number: true
                },
                others: {
                    number: true
                },
                total: {
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
                    targets: [6],
                }, ],
            });
    </script>

    <script>
        $(document).ready(function() {
            var currentMonth = (new Date).getMonth() + 1;
            if (currentMonth == 1) {
                // alert(currentMonth);
                $("#js-January-tab").addClass("show");
                $(".js-January-tab").addClass("active");
                // $(".js-January-tab").addClass("bg-red");
            } else if (currentMonth == 2) {
                // alert(currentMonth);
                $("#js-February-tab").addClass("show");
                $(".js-February-tab").addClass("active");
                // $(".js-February-tab").addClass("bg-red");
            } else if (currentMonth == 3) {
                $("#js-March-tab").addClass("show");
                $(".js-March-tab").addClass("active");
                // $(".js-March-tab").addClass("bg-red");
            } else if (currentMonth == 4) {
                $("#js-April-tab").addClass("show");
                $(".js-April-tab").addClass("active");
                // $(".js-April-tab").addClass("bg-red");
            } else if (currentMonth == 5) {
                $("#js-May-tab").addClass("show");
                $(".js-May-tab").addClass("active");
                // $(".js-May-tab").addClass("bg-red");
            } else if (currentMonth == 6) {
                $("#js-June-tab").addClass("show");
                $(".js-June-tab").addClass("active");
                // $(".js-June-tab").addClass("bg-red");
            } else if (currentMonth == 7) {
                $("#js-July-tab").addClass("show");
                $(".js-July-tab").addClass("active");
                // $(".js-July-tab").addClass("bg-red");
            } else if (currentMonth == 8) {
                $("#js-August-tab").addClass("show");
                $(".js-August-tab").addClass("active");
                // $(".js-August-tab").addClass("bg-red");
            } else if (currentMonth == 9) {
                $("#js-September-tab").addClass("show");
                $(".js-September-tab").addClass("active");
                // $(".js-September-tab").addClass("bg-red");
            } else if (currentMonth == 10) {
                $("#js-October-tab").addClass("show");
                $(".js-October-tab").addClass("active");
                // $(".js-October-tab").addClass("bg-red");
            } else if (currentMonth == 11) {
                $("#js-November-tab").addClass("show");
                $(".js-November-tab").addClass("active");
                // $(".js-November-tab").addClass("bg-red");
            } else if (currentMonth == 12) {
                $("#js-December-tab").addClass("show");
                $(".js-December-tab").addClass("active");
                // $(".js-December-tab").addClass("bg-red");
            }

        });
    </script>
@endpush
