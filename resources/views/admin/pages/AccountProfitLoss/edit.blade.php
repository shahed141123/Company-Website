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
                        <span class="breadcrumb-item active">Account Profit Loss Management</span>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Account Profit Loss edit</h5>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('account-profit-loss.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Account Profit Loss
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">
                                    <h5 class="mb-0 text-center">Edit Account Profit Loss Form</h5>
                                </div>
                                <div class="card-body">
                                    <form method="post"
                                        action="{{ route('account-profit-loss.update', $AccountProfitLoss->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Rfq Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="rfq_id" class="form-control select"
                                                    data-minimum-results-for-search="Infinity" data-placeholder="Chose rfq">
                                                    <option></option>
                                                    @foreach ($rfqs as $rfq)
                                                        <option @selected($rfq->id == $AccountProfitLoss->rfq_id) value="{{ $rfq->id }}">
                                                            {{ $rfq->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sales Price </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $AccountProfitLoss->sales_price }}"
                                                    name="sales_price" class="form-control maxlength" maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Cost Price </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $AccountProfitLoss->cost_price }}"
                                                    name="cost_price" class="form-control maxlength" maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Gross Makup Percentage </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text"
                                                    value="{{ $AccountProfitLoss->gross_makup_percentage }}"
                                                    name="gross_makup_percentage" class="form-control maxlength"
                                                    maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Gross Makup Ammount </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $AccountProfitLoss->gross_makup_ammount }}"
                                                    name="gross_makup_ammount" class="form-control maxlength"
                                                    maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Net Profit Percentage </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text"
                                                    value="{{ $AccountProfitLoss->net_profit_percentage }}"
                                                    name="net_profit_percentage" class="form-control maxlength"
                                                    maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Net Profit Ammount </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $AccountProfitLoss->net_profit_ammount }}"
                                                    name="net_profit_ammount" class="form-control maxlength"
                                                    maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Profit </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $AccountProfitLoss->profit }}"
                                                    name="profit" class="form-control maxlength" maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Loss </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $AccountProfitLoss->loss }}"
                                                    name="loss" class="form-control maxlength" maxlength="30" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection
