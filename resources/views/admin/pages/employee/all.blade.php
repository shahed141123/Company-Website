@extends('admin.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <style>
        .accordion {
            --accordion-border-width: 0px !important;
        }

        .section-border {
            border-bottom: 0.5px solid #24739763;
        }

        .nav-tabs .nav-link.active {
            color: #ff0000 !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('hr-and-admin.index') }}" class="breadcrumb-item">Hr and Admin</a>
                            <a href="{{ route('employee.index') }}" class="breadcrumb-item"><span
                                    class="breadcrumb-item active">Employees</span></a>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
                <div>
                    <a href="{{ route('employee-category.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>Employee Category</span>
                        </div>
                    </a>
                    <a href="{{ route('employee-department.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>Department</span>
                        </div>
                    </a>
                    {{-- <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                            <span>Purchase</span>
                        </div>
                    </a>
                    <a href="{{ route('delivery.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                            <span>delivery</span>
                        </div>
                    </a> --}}
                </div>
                <!-- Basic tabs -->


        </section>
        <!-- /page header -->

        <!-- Sales Chain Page -->
        <div class="content pt-0">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -38px;">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addEmployee" type="button"
                        class="mx-3 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Add
                    </a>

                    <div class="text-center" style="margin-left:14rem;">
                        <h5 class="ms-1 mb-0" style="color: #247297;">Employee Details</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table employeeDT table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="6%">SL</th>
                            <th width="9%">Image</th>
                            <th width="20%">Name</th>
                            <th width="20%">Email</th>
                            <th width="13%">Designation</th>
                            <th width="11%">Role</th>
                            <th width="12%">Department</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($employees)
                            @foreach ($employees as $key => $employee)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td><img src="{{ !file_exists($employee->photo) ? url('upload/no_image.jpg') : url('upload/admin/' . $employee->photo) }}"
                                            alt="" width="40px" height="40px" style="border-radius: 50%"></td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->designation }}</td>
                                    <td>{{ ucfirst($employee->role) }}</td>
                                    <td>
                                        @if (is_array(json_decode($employee->department)))
                                            @foreach (json_decode($employee->department) as $department)
                                                <span class="badge bg-success">{{ ucfirst($department) }}</span>
                                            @endforeach

                                        @else
                                        <span class="badge bg-success">{{ ucfirst($employee->department) }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0);" class="text-primary"
                                            data-bs-target="#editEmployee{{ $employee->id }}" data-bs-toggle="modal"
                                            type="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('employee.destroy', [$employee->id]) }}"
                                            class="text-danger delete mx-2">
                                            <i class="delete fa-solid fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Sales Chain Page -->

        <!--ADD Modal---->

        <div id="addEmployee" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header  text-white" style="background-color: #247297">
                        <h5 class="modal-title">Add Employee</h5>
                        <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form id="myform" method="post" action="{{ route('employee.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="container my-3 mx-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Full Name</label>
                                            <input type="text" maxlength="80" class="form-control form-control-sm"
                                                placeholder="Enter Employees Name" name="name"
                                                value="{{ old('name') }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-email-input">Designation</label>
                                            <input maxlength="50" type="text" class="form-control form-control-sm"
                                                placeholder="Enter Employees Designation" name="designation"
                                                value="{{ old('designation') }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                            <input maxlength="15" type="text"
                                                class="form-control form-control-sm allow_decimal"
                                                placeholder="Enter Phone Number" name="phone"
                                                value="{{ old('phone') }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control form-control-sm"
                                                placeholder="Enter Email ID" name="email"
                                                value="{{ old('email') }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">City</label>
                                            <input type="text" maxlength="50" class="form-control form-control-sm"
                                                placeholder="Enter City" name="city" value="{{ old('city') }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Department</label>
                                            <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                                id="select6" multiple="multiple" data-include-select-all-option="true"
                                                data-placeholder="Chose Sector" data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true" required>

                                                <option value="admin">Admin</option>
                                                <option value="business">Business</option>
                                                <option value="accounts">Accounts</option>
                                                <option value="site">Site & Contents</option>
                                                <option value="logistics">Logistics</option>
                                                <option value="support">Support</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Role</label>
                                            <select name="role" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm"
                                                data-minimum-results-for-search="Infinity" data-placeholder="Chose Sector"
                                                required>
                                                <option></option>
                                                <option value="admin">Admin</option>
                                                <option value="manager">Manager</option>
                                                <option value="others">Others</option>
                                                <option value="developer">Support Developer</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Profile
                                                Picture</label>
                                            <div class="row"></div>
                                            <input id="image" type="file" class="form-control form-control-sm"
                                                id="basicpill-firstname-input" name="photo" />
                                            {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Password</label>
                                            <input type="password" class="form-control form-control-sm" id="password"
                                                name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Confirm
                                                Password</label>
                                            <input type="password" class="form-control form-control-sm"
                                                id="confirm_password" name="confirm_password">
                                            <div id="message"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 10px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($employees as $employee)
            <div id="editEmployee{{ $employee->id }}" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header  text-white" style="background-color: #247297">
                            <h5 class="modal-title">Add Employee</h5>
                            <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                    style="font-weight: 800;font-size: 10px;"></i>
                            </a>
                        </div>
                        <div class="modal-body p-0 px-2">
                            <form id="myform" method="post" action="{{ route('employee.update', $employee->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="container my-3 mx-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Full
                                                    Name</label>
                                                <input type="text" maxlength="80" class="form-control form-control-sm"
                                                    placeholder="Enter Employees Name" name="name"
                                                    value="{{ $employee->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-email-input">Designation</label>
                                                <input maxlength="50" type="text" class="form-control form-control-sm"
                                                    placeholder="Enter Employees Designation" name="designation"
                                                    value="{{ $employee->designation }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                                <input maxlength="15" type="text"
                                                    class="form-control form-control-sm allow_decimal"
                                                    placeholder="Enter Phone Number" name="phone"
                                                    value="{{ $employee->phone }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-email-input">Email</label>
                                                <input type="email" class="form-control form-control-sm"
                                                    placeholder="Enter Email ID" name="email"
                                                    value="{{ $employee->email }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">City</label>
                                                <input type="text" maxlength="50" class="form-control form-control-sm"
                                                    placeholder="Enter City" name="city"
                                                    value="{{ $employee->city }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label"
                                                    for="basicpill-firstname-input">Department</label>

                                                <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                                    id="select6" multiple="multiple"
                                                    data-include-select-all-option="true" data-placeholder="Chose Sector"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true" required>
                                                    @php
                                                        $employeeIds = isset($employee->department) ? json_decode($employee->department, true) : [];
                                                    @endphp
                                                    <option value="admin" @selected(is_array($employeeIds) && in_array('admin', $employeeIds))>Admin</option>
                                                    <option value="business" @selected(is_array($employeeIds) && in_array('business', $employeeIds))>Business</option>
                                                    <option value="accounts" @selected(is_array($employeeIds) && in_array('accounts', $employeeIds))>Accounts</option>
                                                    <option value="site" @selected(is_array($employeeIds) && in_array('site', $employeeIds))>Site & Contents</option>
                                                    <option value="logistics" @selected(is_array($employeeIds) && in_array('logistics', $employeeIds))>Logistics
                                                    </option>
                                                    <option value="support" @selected(is_array($employeeIds) && in_array('support', $employeeIds))>Support
                                                    </option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Role</label>
                                                <select name="role" class="form-control form-select-sm select"
                                                    data-container-css-class="select-sm"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose Sector" required>
                                                    <option></option>
                                                    <option value="admin" @selected($employee->role == 'admin')>Admin</option>
                                                    <option value="manager" @selected($employee->role == 'manager')>Manager</option>
                                                    <option value="others" @selected($employee->role == 'others')>Others</option>
                                                    <option value="developer" @selected($employee->role == 'developer')>Support Developer</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Profile
                                                    Picture</label>
                                                <div class="row"></div>
                                                <input id="image" type="file" class="form-control form-control-sm"
                                                    id="basicpill-firstname-input" name="photo" />
                                                {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Password</label>
                                                <input type="password" class="form-control form-control-sm"
                                                    id="password" name="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control form-control-sm"
                                                    id="confirm_password" name="confirm_password">
                                                <div id="message"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                    <button type="button" class="submit_close_btn "
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                        style="padding: 10px;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!--ADD Modal---->



    </div>

@endsection


@once
    @push('scripts')
        <script type="text/javascript">
            $('.employeeDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0, 1, 2, 3, 4, 6,7],
                }, ],
            });

            Initialize
            const validator = $('.form-validate-permission-store, .form-validate-permission-update').validate({
                ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
                rules: {
                    percentage: {
                        number: true
                    },
                },
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#confirm_password').on('keyup', function() {
                    if ($('#password').val() == $('#confirm_password').val()) {
                        $('#message').html('Passwords match').css('color', 'green');
                    } else {
                        $('#message').html('Passwords do not match').css('color', 'red');
                    }
                });
            });
        </script>
    @endpush
@endonce
