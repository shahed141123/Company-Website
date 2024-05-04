@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">CRM</a>
                        <span class="breadcrumb-item active">Client Database Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                <div>
                    <a href="#" class="btn navigation_btn">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                            <span>CRM</span>
                        </div>
                    </a>
                    <a href="{{ route('client-database.index') }}" class="btn navigation_btn" >
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-plus me-1" style="font-size: 12px;"></i>
                            <span>Add Client Database</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-12 col-sm-12 d-flex justify-content-between">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn" href="http://127.0.0.1:3000/admin/solutionDetails">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                            <p class="text-white p-0 m-0 fw-bold"> Add Client Database </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('client-database.store') }}">
                                @csrf
                                <div class="bg-light p-2 rounded-2">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Sector</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="sector" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Sub Sector</span>
                                        </div>
                                        <div class="form-group text-secondary col-sm-8">
                                            <select name="sub_sector" class="form-control select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose Sub Sector ">
                                                <option></option>
                                                @foreach ($industrys as $industry)
                                                    <option value="{{ $industry->id }}">{{ $industry->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Company Name</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="company_name" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Address</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="address" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Area</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="area" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Contact Person</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="contact_person" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Designation</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="designation" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Department</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="department" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Official Phone</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="official_phone"
                                                class="form-control maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Phone</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="phone" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Email</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="email" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Client Status</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="client_status" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Tier</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="tier" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="mb-0">Comments</span>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="comments" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-end mt-3">
                                        <input type="submit" class="submit_btn from-prevent-multiple-submits px-3" value="Submit" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
