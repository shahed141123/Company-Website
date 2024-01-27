@extends('admin.master')
@section('content')

    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex sticky">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('hr-and-admin.index') }}" class="breadcrumb-item">Hr and Admin</a>
                            <a href="{{ route('employee.index') }}" class="breadcrumb-item">
                                <span class="breadcrumb-item active">Employees</span>
                            </a>
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
                            <i class="fa-solid fa-nfc-magnifying-glass me-1"></i>
                            <span>Employee Category</span>
                        </div>
                    </a>
                    <a href="{{ route('employee-department.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1"></i>
                            <span>Department</span>
                        </div>
                    </a>
                </div>
                <!-- Basic tabs -->
            </div>
        </div>
        <!-- page header -->


<!-- Sales Chain Page -->
<div class="content p-1 my-3">
    <div class="card rounded-0">
        <div class="card-header">
            <div class="row">
                <!-- Add Employee Button Section -->
                <div class="col-lg-5 ps-0">
                    <div>
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addEmployee"
                            type="button"
                            class="btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="icon-plus2"></i>
                            </span>
                            Add
                        </a>
                    </div>
                </div>
                <!-- Employee Details Heading Section -->
                <div class="col-lg-7">
                    <h5 class="ms-1 mb-0 text-start" style="color: #247297;">Employee Details</h5>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table employeeDT table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th width="7%">Image</th>
                            <th width="18%">Name</th>
                            <th width="18%">Email</th>
                            <th width="10%">Designation</th>
                            <th width="9%">Role</th>
                            <th width="23%">Department</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($employees)
                            @foreach ($employees as $key => $employee)
                                <tr>
                                    <!-- Serial Number -->
                                    <td>{{ ++$key }}</td>
                                    <!-- Employee Image -->
                                    <td>
                                        <img src="{{ !file_exists($employee->photo) ? url('upload/no_image.jpg') : url('upload/admin/' . $employee->photo) }}"
                                            alt="" width="40px" height="40px" style="border-radius: 50%">
                                    </td>
                                    <!-- Employee Name -->
                                    <td>{{ $employee->name }}</td>
                                    <!-- Employee Email -->
                                    <td>{{ $employee->email }}</td>
                                    <!-- Employee Designation -->
                                    <td>{{ $employee->designation }}</td>
                                    <!-- Employee Role -->
                                    <td>{{ ucfirst($employee->role) }}</td>
                                    <!-- Employee Department -->
                                    <td>
                                        @if (is_array(json_decode($employee->department)))
                                            @foreach (json_decode($employee->department) as $department)
                                                <span class="badge bg-success">{{ ucfirst($department) }}</span>
                                            @endforeach
                                        @else
                                            <span class="badge bg-success">{{ ucfirst($employee->department) }}</span>
                                        @endif
                                    </td>
                                    <!-- Employee Actions -->
                                    <td class="text-center">
                                        <a href="javascript:void(0);" class="text-primary"
                                            data-bs-target="#editEmployee{{ $employee->id }}"
                                            data-bs-toggle="modal" type="button">
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
    </div>
</div>
<!-- Sales Chain Page -->


        <div id="addEmployee" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-white px-4 p-2" style="background-color: #247297">
                        <h5 class="modal-title">Add Employee</h5>
                        <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                style="font-weight: 800;"></i>
                        </a>
                    </div>
                    <div class="modal-body pt-0">
                        <form id="myform" method="post" class="needs-validation" action="{{ route('employee.store') }}"
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="container pt-2">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label star" for="basicpill-firstname-input ">Full
                                                Name</label>
                                            <input type="text" maxlength="80" class="form-control form-control-sm"
                                                placeholder="Enter Employee Name" name="name"
                                                value="{{ old('name') }}" required />
                                            <div class="invalid-feedback"> Please Enter Full Name.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-1">
                                            <label class="form-label star" for="basicpill-email-input">Designation</label>
                                            <input maxlength="50" type="text" class="form-control form-control-sm"
                                                placeholder="Enter Employee Designation" name="designation"
                                                value="{{ old('designation') }}" required />
                                            <div class="invalid-feedback"> Please Enter Designation.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mb-1">
                                            <label class="form-label star" for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control form-control-sm"
                                                placeholder="Enter Email ID" name="email" value="{{ old('email') }}"
                                                required />
                                            <div class="invalid-feedback"> Please Enter Email Address.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                            <input maxlength="15" type="text"
                                                class="form-control form-control-sm allow_decimal"
                                                placeholder="Enter Phone Number" name="phone"
                                                value="{{ old('phone') }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label star" for="basicpill-email-input">Job
                                                Category</label>
                                            <select name="employee_category_id" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-allow-clear="true"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Choose Employee Category" required>
                                                <option></option>
                                                @foreach ($employeeCategories as $employeeCategory)
                                                    <option value="{{ $employeeCategory->id }}">
                                                        {{ $employeeCategory->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Job Category.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label star" for="basicpill-phoneno-input">Employee Code
                                                (Biometric ID)</label>
                                            <input type="text" class="form-control form-control-sm allow_decimal"
                                                placeholder="Employee Code (Biometric ID)" name="employee_id"
                                                maxlength="15" value="{{ old('employee_id') }}" required />
                                            <div class="invalid-feedback"> Please Enter Employee Code.</div>
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
                                            <label class="form-label start"
                                                for="basicpill-firstname-input">Department</label>
                                            <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                                id="select6" multiple="multiple" data-include-select-all-option="true"
                                                data-placeholder="Choose Sector" data-enable-filtering="true"
                                                data-allow-clear="true" data-enable-case-insensitive-filtering="true"
                                                required>
                                                <option value="admin">Admin</option>
                                                <option value="business">Business</option>
                                                <option value="accounts">Accounts</option>
                                                <option value="site">Site & Contents</option>
                                                <option value="logistics">Logistics</option>
                                                <option value="support">Support</option>
                                                <option value="hr">HR</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Department.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label star" for="basicpill-firstname-input">Role</label>
                                            <select name="role" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-allow-clear="true"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Choose Sector" required>
                                                <option></option>
                                                <option value="admin">Admin</option>
                                                <option value="manager">Manager</option>
                                                <option value="others">Others</option>
                                                <option value="developer">Support Developer</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Role.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label star"
                                                for="basicpill-firstname-input">Supervisor</label>
                                            <select name="supervisor_id" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-allow-clear="true"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Choose Supervisor" required>
                                                <option></option>
                                                @foreach ($employees as $supervisor)
                                                    <option value="{{ $supervisor->id }}">
                                                        {{ $supervisor->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Supervisor.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Profile
                                                Picture</label>
                                            <input id="image1" type="file" class="form-control form-control-sm"
                                                id="basicpill-firstname-input" name="photo" />
                                            {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Sign</label>
                                            <div class="row"></div>
                                            <input id="image" type="file" class="form-control form-control-sm"
                                                id="basicpill-firstname-input" name="sign" />
                                            {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label star"
                                                for="basicpill-firstname-input">Password</label>
                                            <input type="password" class="form-control form-control-sm" id="password"
                                                name="password">
                                        </div>
                                        <div class="invalid-feedback"> Please Enter Password.</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label star" for="basicpill-firstname-input">Confirm
                                                Password</label>
                                            <input type="password" class="form-control form-control-sm"
                                                id="confirm_password" name="confirm_password">
                                            <div id="message"></div>
                                        </div>
                                        <div class="invalid-feedback"> Please Enter Confirm Password.</div>
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer border-0 pt-1 pb-2 pe-0">
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
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-white px-4" style="background-color: #247297">
                            <h5 class="modal-title">Edit Employee</h5>
                            <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                    style="font-weight: 800;"></i>
                            </a>
                        </div>
                        <div class="modal-body pt-0">
                            <form id="myform" method="post" action="{{ route('employee.update', $employee->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="container pt-2">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Full
                                                    Name</label>
                                                <input type="text" maxlength="80" class="form-control form-control-sm"
                                                    placeholder="Enter Employees Name" name="name"
                                                    value="{{ $employee->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-email-input">Designation</label>
                                                <input maxlength="50" type="text" class="form-control form-control-sm"
                                                    placeholder="Enter Employees Designation" name="designation"
                                                    value="{{ $employee->designation }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
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
                                                <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                                <input maxlength="15" type="text"
                                                    class="form-control form-control-sm allow_decimal"
                                                    placeholder="Enter Phone Number" name="phone"
                                                    value="{{ $employee->phone }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label class="form-label" for="basicpill-email-input">Job Category</label>
                                                <select name="employee_category_id"
                                                    class="form-control form-control-sm select" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    @foreach ($employeeCategories as $employeeCategory)
                                                        <option value="{{ $employeeCategory->id }}"
                                                            @selected($employee->employee_category_id == $employeeCategory->id)>
                                                            {{ $employeeCategory->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label star" for="basicpill-phoneno-input">Employee Code
                                                    (Biometric ID)
                                                </label>
                                                <input type="text" class="form-control form-control-sm allow_decimal"
                                                    placeholder="Employee Code (Biometric ID)" name="employee_id"
                                                    maxlength="15" value="{{ $employee->employee_id }}" required />
                                            </div>
                                            <div class="invalid-feedback"> Please Enter Employee Code.</div>
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
                                                <label class="form-label star"
                                                    for="basicpill-firstname-input">Department</label>

                                                <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                                    id="select6" multiple="multiple"
                                                    data-include-select-all-option="true" data-placeholder="Choose Sector"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true" required>
                                                    @php
                                                        $employeeIds = isset($employee->department) ? json_decode($employee->department, true) : [];
                                                    @endphp
                                                    <option value="admin" @selected(is_array($employeeIds) && in_array('admin', $employeeIds))>Admin</option>
                                                    <option value="business" @selected(is_array($employeeIds) && in_array('business', $employeeIds))>Business</option>
                                                    <option value="accounts" @selected(is_array($employeeIds) && in_array('accounts', $employeeIds))>Accounts</option>
                                                    <option value="hr" @selected(is_array($employeeIds) && in_array('hr', $employeeIds))>HR</option>
                                                    <option value="site" @selected(is_array($employeeIds) && in_array('site', $employeeIds))>Site & Contents
                                                    </option>
                                                    <option value="logistics" @selected(is_array($employeeIds) && in_array('logistics', $employeeIds))>Logistics
                                                    </option>
                                                    <option value="support" @selected(is_array($employeeIds) && in_array('support', $employeeIds))>Support
                                                    </option>
                                                </select>
                                                <div class="invalid-feedback"> Please Enter Department.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Role</label>
                                                <select name="role" class="form-control form-select-sm select"
                                                    data-container-css-class="select-sm"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Choose Sector" required>
                                                    <option></option>
                                                    <option value="admin" @selected($employee->role == 'admin')>Admin</option>
                                                    <option value="manager" @selected($employee->role == 'manager')>Manager</option>
                                                    <option value="others" @selected($employee->role == 'others')>Others</option>
                                                    <option value="developer" @selected($employee->role == 'developer')>Support
                                                        Developer</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Enter Role.</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label class="form-label required"
                                                    for="basicpill-firstname-input">Supervisor</label>
                                                <select name="supervisor_id" class="form-control form-control-sm select"
                                                    data-control="select2" data-placeholder="Select a Supervisor"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach ($employees as $supervisor)
                                                        <option value="{{ $supervisor->id }}"
                                                            @selected($employee->supervisor_id == $supervisor->id)>
                                                            {{ $supervisor->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Enter Supervisor.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Profile
                                                    Picture</label>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <input id="image" type="file"
                                                            class="form-control form-control-sm"
                                                            id="basicpill-firstname-input" name="photo" />
                                                    </div>
                                                    <div class="col-2">
                                                        <img id="showImage"
                                                            src="{{ !file_exists($employee->photo) ? url('upload/no_image.jpg') : url('storage/' . $employee->photo) }}"
                                                            alt="Admin" style="width:40px; height: 40px;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label class="form-label" for="basicpill-firstname-input">Sign</label>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <input id="image" type="file"
                                                            class="form-control form-control-sm"
                                                            id="basicpill-firstname-input" name="sign" />
                                                    </div>
                                                    <div class="col-2">
                                                        <img id="showImage"
                                                            src="{{ !file_exists($employee->sign) ? url('upload/no_image.jpg') : url('storage/' . $employee->photo) }}"
                                                            alt="Sign" style="width:40px; height: 40px;" />
                                                    </div>
                                                </div>

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


    </div>

@endsection


@once
    @push('scripts')
        <script type="text/javascript">
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })
            ()
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                // Initialize DataTable
                var table = $('.employeeDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 3, 4, 6, 7],
                    }],
                });

                // Add button to the left of the DataTable header
                var button = $(
                    '<button class="btn btn-info custom_btn btn-labeled btn-labeled-start"><span class="btn-labeled-icon bg-black bg-opacity-20"><i class="icon-plus2"></i></span>Add</button>'
                );
                button.prependTo('.employeeDT_wrapper .datatable-header');

                // Handle button click event
                button.on('click', function() {
                    // Add your button click logic here
                    console.log('Button clicked');
                });

                // Other existing script code...

                // Rest of your scripts
                const validator = $('.form-validate-permission-store, .form-validate-permission-update').validate({
                    ignore: 'input[type=hidden], .select2-search__field',
                    rules: {
                        percentage: {
                            number: true
                        },
                    },
                });

                $('.confirm_password').on('keyup', function() {
                    if ($('.password').val() == $('.confirm_password').val()) {
                        $('.message').html('Passwords match').css('color', 'green');
                    } else {
                        $('.message').html('Passwords do not match').css('color', 'red');
                    }
                });
            });
        </script>
    @endpush
@endonce
