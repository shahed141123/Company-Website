@extends('admin.master')
@section('content')
    <style>
        .label_style {
            width: 151px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('marketing-team-target.index') }}" class="breadcrumb-item">Marketing Team Target</a>
                        <a href="" class="breadcrumb-item">Edit</a>
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
        <div class="content pt-2 w-75 mx-auto">
            <div class="text-center">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">

                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('solutionDetails.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold"> Edit Team Target </p>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <a href="{{ route('solutionDetails.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                    <span>Row</span>
                                </div>
                            </a>
                            <a href="{{ route('purchase.index') }}" class="btn navigation_btn ms-2">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                    <span>Solution</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <form method="post" action="{{ route('marketing-team-target.store') }}">
                    @csrf
                    <!--Banner Section-->
                    <div class="container">
                        <div class="row g-2 p-1">
                            <div class="col-lg-6 col-sm-12 ">
                                <div class="px-2 py-2 rounded bg-light mt-2">
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Marketing Manager</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="marketing_manager_id" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm"
                                                data-placeholder="Chose Marketing Manager" required>
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option @selected($user->id == $marketingTeamTarget->marketing_manager_id) value="{{ $user->id }}">
                                                        {{ $user->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Country Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="country_id" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose country name"
                                                required>
                                                <option></option>
                                                @foreach ($countrys as $country)
                                                    <option @selected($country->id == $marketingTeamTarget->country_id) value="{{ $country->id }}">
                                                        {{ $country->country_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    @php
                                        for ($m = 1; $m <= 12; $m++) {
                                            $months[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                        }
                                    @endphp
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Month</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="brand_id[]" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose month"
                                                required>
                                                <option></option>
                                                @foreach ($months as $month)
                                                    <option @selected(Str::lower($month) == $marketingTeamTarget->month) value="{{ Str::lower($month) }}">
                                                        {{ $month }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Product Id</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="product_id[]" class="form-control form-select-sm multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true" data-enable-case-insensitive-filtering="true">
                                                @php
                                                    $productIds = isset($marketingTeamTarget->product_id) ? json_decode($marketingTeamTarget->product_id, true) : [];
                                                    $products = app\Models\Admin\Product::pluck('name', 'id')->toArray();
                                                @endphp

                                                @foreach ($products as $id => $name)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($productIds) && in_array($id, $productIds) ? 'selected' : '' }}>
                                                        {{ $name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Fiscal Year</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" @selected($marketingTeamTarget->year == $marketingTeamTarget->year)
                                                value="{{ $marketingTeamTarget->year }}" name="year" id="datepicker"
                                                class="yearselect form-control form-control-sm" />
                                        </div>
                                    </div>
                                    {{--  --}}

                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Client Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="client_id[]" class="form-control form-select-sm multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true" data-enable-case-insensitive-filtering="true">
                                                @php
                                                    $clientIds = isset($marketingTeamTarget->client_id) ? json_decode($marketingTeamTarget->client_id, true) : [];
                                                    $clients = app\Models\Admin\Client::pluck('name', 'id')->toArray();
                                                @endphp

                                                @foreach ($clients as $id => $name)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($clientIds) && in_array($id, $clientIds) ? 'selected' : '' }}>
                                                        {{ $name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Industry Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="industry_id[]" class="form-control form-select-sm multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                @php
                                                    $industryIds = isset($marketingTeamTarget->industry_id) ? json_decode($marketingTeamTarget->industry_id, true) : [];
                                                    $industrys = app\Models\Admin\Industry::pluck('title', 'id')->toArray();
                                                @endphp

                                                @foreach ($industrys as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($industryIds) && in_array($id, $industryIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Solution Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="solution_id[]" class="form-control form-select-sm multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                @php
                                                    $solutionIds = isset($marketingTeamTarget->solution_id) ? json_decode($marketingTeamTarget->solution_id, true) : [];
                                                    $solutions = app\Models\Admin\SolutionDetail::pluck('name', 'id')->toArray();
                                                @endphp

                                                @foreach ($solutions as $id => $name)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($solutionIds) && in_array($id, $solutionIds) ? 'selected' : '' }}>
                                                        {{ $name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Email</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" value="{{ $marketingTeamTarget->email }}" name="email"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Social</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="social" value="{{ $marketingTeamTarget->social }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Call</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="call" value="{{ $marketingTeamTarget->call }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Press</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="press" value="{{ $marketingTeamTarget->press }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="px-2 py-2 rounded bg-light mt-2">
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Presentaion</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="press" value="{{ $marketingTeamTarget->presentaion }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Boost</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="boost" value="{{ $marketingTeamTarget->boost }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Meet</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="meet" value="{{ $marketingTeamTarget->meet }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Blog</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="blog" value="{{ $marketingTeamTarget->blog }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Follow Up Meet</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="follow_up_meet" value="{{ $marketingTeamTarget->follow_up_meet }}"
                                                class="form-control form-control-sm allow_decimal" maxlength="100"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Negotiation</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="negotiation" value="{{ $marketingTeamTarget->negotiation }}"
                                                class="form-control form-control-sm allow_decimal maxlengt"
                                                maxlength="100" required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Deal Closeing</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="deal_closeing" value="{{ $marketingTeamTarget->deal_closeing }}"
                                                class="form-control form-control-sm allow_decimal maxlengt"
                                                maxlength="100" required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Work Order</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="work_order" value="{{ $marketingTeamTarget->work_order }}"
                                                class="form-control form-control-sm  allow_decimal maxlengt"
                                                maxlength="100" required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pb-2 pe-3">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 4px 9px;">Submit</button>
                    </div>
            </div>

            </form>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
