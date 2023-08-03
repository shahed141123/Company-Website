@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Permission Management</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card p-0 py-1 mt-1">
                    <div class="card-body p-0 px-2">
                        <div class="row">
                            <div class="col-lg-8">
                                <h5 class="text-center  p-0 py-1">Edit Permissions</h5>
                            </div>

                            <div class="col-lg-4">
                                <a href="{{ route('all.permission') }}" type="button"
                                    class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="icon-eye"></i>
                                    </span>
                                    All Permission
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form id="myForm" method="post" action="{{ route('update.permission') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $permission->id }}">

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Permission Name</h6>
                                </div>
                                <div class="form-group col-sm-9 text-secondary">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $permission->name }}" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Group Name</h6>
                                </div>
                                <div class="basic-form col-sm-9 text-secondary">
                                    <select name="group_name" class="form-control select mb-3"
                                        data-placeholder="Choose Group">
                                        <option></option>
                                        <option value="product-management"
                                            {{ $permission->group_name == 'product-management' ? 'selected' : '' }}>Product Management</option>

                                        <option
                                            value="sourcing-management"{{ $permission->group_name == 'sourcing-management' ? 'selected' : '' }}>
                                            Sourcing Management</option>

                                        <option
                                            value="rfq-management"{{ $permission->group_name == 'rfq-management' ? 'selected' : '' }}>
                                            RFQ Management</option>
                                        <option
                                            value="sales-management"{{ $permission->group_name == 'sales-management' ? 'selected' : '' }}>
                                            Sales Management</option>
                                        <option
                                            value="accounts-management"{{ $permission->group_name == 'accounts-management' ? 'selected' : '' }}>
                                            Accounts Management</option>
                                        <option
                                            value="marketing-management"{{ $permission->group_name == 'marketing-management' ? 'selected' : '' }}>
                                            Marketing Management</option>
                                        <option
                                            value="industry-solutions"{{ $permission->group_name == 'industry-solutions' ? 'selected' : '' }}>
                                            Industry Management</option>
                                        <option
                                            value="feature-management"{{ $permission->group_name == 'feature-management' ? 'selected' : '' }}>
                                            Feature Management</option>
                                        <option
                                            value="blog-management"{{ $permission->group_name == 'blog-management' ? 'selected' : '' }}>
                                            Blog Management</option>
                                        <option
                                            value="sitesettings-management"{{ $permission->group_name == 'sitesettings-management' ? 'selected' : '' }}>
                                            Site settings Management</option>
                                        <option
                                            value="support-management"{{ $permission->group_name == 'support-management' ? 'selected' : '' }}>
                                            Support Management</option>
                                        <option
                                            value="account-approval-management"{{ $permission->group_name == 'account-approval-management' ? 'selected' : '' }}>
                                            Account Management</option>
                                        <option
                                            value="row-builder-management"{{ $permission->group_name == 'row-builder-management' ? 'selected' : '' }}>
                                            Row Builder Management</option>
                                        <option
                                            value="page-builder-management"{{ $permission->group_name == 'page-builder-management' ? 'selected' : '' }}>
                                            Page Builder Management Management</option>
                                        <option
                                            value="order-management"{{ $permission->group_name == 'order-management' ? 'selected' : '' }}>
                                            Order Management</option>
                                        <option
                                            value="role-permission-management"{{ $permission->group_name == 'role-permission-management' ? 'selected' : '' }}>
                                            Role Management</option>
                                        <option
                                            value="job-management"{{ $permission->group_name == 'job-management' ? 'selected' : '' }}>
                                            Job Management</option>
                                        <option
                                            value="terms-policy-management"{{ $permission->group_name == 'terms-policy-management' ? 'selected' : '' }}>
                                            Terms and Policy Management</option>
                                        <option
                                            value="dashboard"{{ $permission->group_name == 'dashboard' ? 'selected' : '' }}>
                                            Dashboard</option>

                                    </select>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-4 text-secondary">
                                    <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                        class="ph-paper-plane-tilt ms-2"></i></button>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Permission Name',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
