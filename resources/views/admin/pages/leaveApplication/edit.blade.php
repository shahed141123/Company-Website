@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-inner">
            <div class="page-header page-header-light">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Page Destination/ BreadCrumb --}}
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex px-2">
                            <div class="breadcrumb py-2">
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                <span class="breadcrumb-item active">Leave Dashboard</span>
                            </div>
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                    {{-- Inner Page Tab --}}
                    {{-- <div>
                        <a href="javascript:void(0)" class="btn navigation_btn" data-bs-toggle="modal"
                            data-bs-target="#makeleave">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 14px;"></i>
                                <span>Make A Leave</span>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
            <div class="content mt-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 card-title text-center">Leave Application of {{ $leave->name }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gx-0 pb-2">
                            <div class="col-md-2 col-4 mb-3">
                                <span class="main_color">
                                    Designation
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($leave->designation) }}
                                </span>
                            </div>
                            <div class="col-md-2 col-4 mb-3">
                                <span class="main_color">
                                    Job Status
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($leave->job_status) }}
                                </span>
                            </div>
                            <div class="col-md-2 col-4 mb-3">
                                <span class="main_color">
                                    Leave Type
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($leave->type_of_leave) }}
                                </span>
                            </div>
                            <div class="col-md-4 col-7 mb-3">
                                <span class="main_color">
                                    Leave Period
                                </span> : <span class="text-info badge-text rounded-1">
                                    From {{ $leave->leave_start_date }} To {{ $leave->leave_end_date }}
                                </span>
                            </div>
                            <div class="col-md-2 col-5 mb-3">
                                <span class="main_color">
                                    Reporting On
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($leave->reporting_on) }}
                                </span>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <span class="main_color">
                                    Substitute
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($leave->substitute_during_leave) }}
                                </span>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <span class="main_color">
                                    Supervisor
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($employee->getSupervisorName()) }}
                                </span>
                            </div>
                            <div class="col-md-2 col-4 mb-3">
                                <span class="main_color">
                                    Is Between Holiday
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($leave->is_between_holidays) }}
                                </span>
                            </div>
                            <div class="col-md-2 col-4 mb-3">
                                <span class="main_color">
                                    Included Open Saturday
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ $leave->included_open_saturday <= 0 ? 'None' : $leave->included_open_saturday }}
                                </span>
                            </div>
                            <div class="col-md-2 col-4 mb-3">
                                <span class="main_color">
                                    Contact Number
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ $leave->leave_contact_no }}
                                </span>
                            </div>
                            @if (!empty($leave->leave_explanation))
                                <div class="col-md-6 col-9 mb-3">
                                    <span class="main_color">
                                        Leave Explanation
                                    </span> : <span class="text-info badge-text rounded-1">
                                        {{ $leave->leave_explanation }}
                                    </span>
                                </div>
                            @endif
                            <div class="col-md-6 col-3 mb-3">
                                <span class="main_color">
                                    Application Status
                                </span> : <span class="text-info badge-text rounded-1">
                                    {{ ucfirst($leave->application_status) }}
                                </span>
                            </div>
                        </div>
                        @if ($leave->application_status === 'ceo_approval_pending')
                        <div class="row mb-3">
                            <div class="table-responsive col-lg-6 offset-lg-3">
                                <table class="table table-bordered">
                                    <thead
                                        style="background-color: #ae0a468f !important; color: white !important;">
                                        <tr>
                                            <th width="40%">Leave Position</th>
                                            <th width="20%">Leave Due As On</th>
                                            <th width="20%">Leave Availed</th>
                                            <th width="20%">Balance Due</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Earned Leave
                                            </td>
                                            <td>
                                                <input type="number" value="{{ optional($employee_leave_due)->earned_leave_due_as_on ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm">
                                            </td>
                                            <td><input type="number" value="{{ optional($employee_leave_due)->earned_leave_availed ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm"></td>
                                            <td><input type="number" value="{{ optional($employee_leave_due)->earned_balance_due ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Casual Leave
                                            </td>
                                            <td>
                                                <input type="number" value="{{ optional($employee_leave_due)->casual_leave_due_as_on ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm">
                                            </td>
                                            <td><input type="number" value="{{ optional($employee_leave_due)->casual_leave_availed ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm"></td>
                                            <td><input type="number" value="{{ optional($employee_leave_due)->casual_balance_due ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Medical Leave
                                            </td>
                                            <td>
                                                <input type="number" value="{{ optional($employee_leave_due)->medical_leave_due_as_on ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm">
                                            </td>
                                            <td><input type="number" value="{{ optional($employee_leave_due)->medical_leave_availed ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm"></td>
                                            <td><input type="number" value="{{ optional($employee_leave_due)->medical_balance_due ?? '' }}"
                                                    disabled class="border-0 form-control form-control-sm"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>


                {{-- Approval Sections --}}
                @if ($leave->application_status === 'substitute_approval_pending')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 card-title text-center">Substitute Approval</h5>
                        </div>
                        <form action="{{ route('substitute.approval', $leave->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row gx-1">
                                    <div class="col-md-2 col-12 mb-3">
                                        <label class="form-label">Substitute Action <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check text-success">
                                                <input class="form-check-input text-success bg-success" type="radio"
                                                    name="substitute_action" id="flexRadioDefault1" value="approved"
                                                    checked>
                                                <label class="form-check-label text-success" for="flexRadioDefault1">
                                                    Approved
                                                </label>
                                            </div>
                                            <div class="form-check ms-3 text-danger">
                                                <input class="form-check-input text-danger bg-danger" type="radio"
                                                    name="substitute_action" id="flexRadioDefault2" value="rejected">
                                                <label class="form-check-label text-danger" for="flexRadioDefault2">
                                                    Reject
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label">Substitute Signature</label>
                                        <input type="file" name="substitute_signature"
                                            class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="form-label">Comments</label>
                                        <textarea class="form-control form-control-sm" name="substitute_note" rows="1"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                            </div>
                        </form>
                    </div>
                @endif

                @if ($leave->application_status === 'supervisor_approval_pending')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 card-title text-center">Supervisor Approval</h5>
                        </div>
                        <form action="{{ route('supervisor.approval', $leave->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row gx-1">
                                    <div class="col-md-2 col-12 mb-3">
                                        <label class="form-label">Supervisor Action <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check text-success">
                                                <input class="form-check-input text-success bg-success" type="radio"
                                                    name="supervisor_action" id="flexRadioDefault1" value="approved"
                                                    checked>
                                                <label class="form-check-label text-success" for="flexRadioDefault1">
                                                    Approved
                                                </label>
                                            </div>
                                            <div class="form-check ms-3 text-danger">
                                                <input class="form-check-input text-danger bg-danger" type="radio"
                                                    name="supervisor_action" id="flexRadioDefault2" value="rejected">
                                                <label class="form-check-label text-danger" for="flexRadioDefault2">
                                                    Reject
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label">Supervisor Signature</label>
                                        <input type="file" name="supervisor_signature"
                                            class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="form-label">Comments</label>
                                        <textarea class="form-control form-control-sm" name="supervisor_note" rows="1"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                            </div>
                        </form>
                    </div>
                @endif

                @if ($leave->application_status === 'hr_approval_pending')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 card-title text-center">HR Approval</h5>
                        </div>
                        <form action="{{ route('hr.approval', $leave->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="table-responsive col-lg-6 offset-lg-3">
                                        <table class="table table-bordered">
                                            <thead
                                                style="background-color: #ae0a468f !important; color: white !important;">
                                                <tr>
                                                    <th width="40%">Leave Position</th>
                                                    <th width="20%">Leave Due As On</th>
                                                    <th width="20%">Leave Availed</th>
                                                    <th width="20%">Balance Due</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Earned Leave
                                                    </td>
                                                    <td>
                                                        <input type="number" name="earned_leave_due_as_on" value="{{ optional($employee_leave_due)->earned_leave_due_as_on ?? '' }}"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="earned_leave_availed" value="{{ optional($employee_leave_due)->earned_leave_availed ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="earned_balance_due" value="{{ optional($employee_leave_due)->earned_balance_due ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Casual Leave
                                                    </td>
                                                    <td>
                                                        <input type="number" name="casual_leave_due_as_on" value="{{ optional($employee_leave_due)->casual_leave_due_as_on ?? '' }}"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="casual_leave_availed" value="{{ optional($employee_leave_due)->casual_leave_availed ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="casual_balance_due" value="{{ optional($employee_leave_due)->casual_balance_due ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Medical Leave
                                                    </td>
                                                    <td>
                                                        <input type="number" name="medical_leave_due_as_on" value="{{ optional($employee_leave_due)->medical_leave_due_as_on ?? '' }}"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="medical_leave_availed" value="{{ optional($employee_leave_due)->medical_leave_availed ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="medical_balance_due" value="{{ optional($employee_leave_due)->medical_balance_due ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row gx-1">
                                    <div class="col-md-2 col-12 mb-3">
                                        <label class="form-label">HR Action <span class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check text-success">
                                                <input class="form-check-input text-success bg-success" type="radio"
                                                    name="hr_action" id="flexRadioDefault1" value="approved" checked>
                                                <label class="form-check-label text-success" for="flexRadioDefault1">
                                                    Approved
                                                </label>
                                            </div>
                                            <div class="form-check ms-3 text-danger">
                                                <input class="form-check-input text-danger bg-danger" type="radio"
                                                    name="hr_action" id="flexRadioDefault2" value="rejected">
                                                <label class="form-check-label text-danger" for="flexRadioDefault2">
                                                    Reject
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label">HR Signature</label>
                                        <input type="file" name="hr_signature" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="form-label">Comments</label>
                                        <textarea class="form-control form-control-sm" name="hr_note" rows="1"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                            </div>
                        </form>
                    </div>
                @endif

                @if ($leave->application_status === 'ceo_approval_pending')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 card-title text-center">CEO Approval</h5>
                        </div>
                        <form action="{{ route('ceo.approval', $leave->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row gx-1">
                                    <div class="col-md-2 col-12 mb-3">
                                        <label class="form-label">CEO Action <span class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check text-success">
                                                <input class="form-check-input text-success bg-success" type="radio"
                                                    name="ceo_action" id="flexRadioDefault1" value="approved" checked>
                                                <label class="form-check-label text-success" for="flexRadioDefault1">
                                                    Approved
                                                </label>
                                            </div>
                                            <div class="form-check ms-3 text-danger">
                                                <input class="form-check-input text-danger bg-danger" type="radio"
                                                    name="ceo_action" id="flexRadioDefault2" value="rejected">
                                                <label class="form-check-label text-danger" for="flexRadioDefault2">
                                                    Reject
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label">CEO Signature</label>
                                        <input type="file" name="ceo_signature" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="form-label">Comments</label>
                                        <textarea class="form-control form-control-sm" name="ceo_note" rows="1"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                            </div>
                        </form>
                    </div>
                @endif

            </div>


        </div>
    </div>
@endsection
