@extends('admin.master')
@section('content')
    <style>
        .custom-bg {
            background-color: #eee !important;
            border-bottom: 1px solid #72727273;
        }
    </style>
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
                    <div>
                        <a href="" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 14px;"></i>
                                <span>Make A Leave</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content mt-2">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <h5 class="m-0 p-1 text-center card-main-title">
                                Leave Application Of {{ !empty($leave->name) ? ucfirst($leave->name) : '(No Name)' }}
                            </h5>
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Name</td>
                                                        <td class="ps-2 w-25">
                                                            {{ !empty($leave->name) ? ucfirst($leave->name) : 'N/A' }}</td>
                                                        <td class="custom-bg ps-2 w-25">Type Of Leave</td>
                                                        <td class="ps-2 w-25">{{ ucfirst($leave->type_of_leave) }}</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Designation</td>
                                                        <td class="ps-2 w-25">{{ ucfirst($leave->designation) }}</td>
                                                        <td class="custom-bg ps-2 w-25">Leave Period</td>
                                                        <td class="ps-2 w-25">From
                                                            <span class="text-info">{{ $leave->leave_start_date }}</span> To
                                                            <span class="text-info">{{ $leave->leave_end_date }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Company</td>
                                                        <td class="ps-2 w-25">
                                                            {{ !empty($leave->company) ? ucfirst($leave->company) : 'NGen IT' }}
                                                        </td>
                                                        <td class="custom-bg ps-2 w-25">Total Days</td>
                                                        <td class="ps-2 w-25">
                                                            {{ !empty($leave->company) ? ucfirst($leave->company) : '1 Day' }}
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Job Status</td>
                                                        <td class="ps-2 w-25">{{ ucfirst($leave->job_status) }}</td>
                                                        <td class="custom-bg ps-2 w-25">Reporting On</td>
                                                        <td class="ps-2 w-25">{{ ucfirst($leave->reporting_on) }}</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Leave Explanation</td>
                                                        <td class="ps-2 w-25 text-info">{{ $leave->leave_explanation }}
                                                        </td>
                                                        <td class="custom-bg ps-2 w-25">Substitute</td>
                                                        <td class="ps-2 w-25">
                                                            {{ ucfirst($leave->substitute_during_leave) }}</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Leave Address</td>
                                                        <td class="ps-2 w-25">
                                                            {{ !empty($leave->address) ? ucfirst($leave->address) : 'Dhaka' }}
                                                        </td>
                                                        <td class="custom-bg ps-2 w-25">Is Between Holiday</td>
                                                        <td class="ps-2 w-25">{{ ucfirst($leave->is_between_holidays) }}
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Leave Contact</td>
                                                        <td class="ps-2 w-25">{{ $leave->leave_contact_no }}</td>
                                                        <td class="custom-bg ps-2 w-25">Included Open Saturday</td>
                                                        <td class="ps-2 w-25">
                                                            {{ $leave->included_open_saturday <= 0 ? 'None' : $leave->included_open_saturday }}
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="custom-bg ps-2 w-25">Supervisor</td>
                                                        <td class="ps-2 w-25">{{ ucfirst($employee->getSupervisorName()) }}
                                                        </td>
                                                        <td class="custom-bg ps-2 w-25">Application Status</td>
                                                        <td class="ps-2 w-25 text-danger">
                                                            {{ ucfirst($leave->application_status) }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($leave->application_status === 'substitute_approval_pending')
                        <form action="{{ route('substitute.approval', $leave->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="m-0 p-1 text-center card-main-title">
                                        Substitute Approval
                                    </h5>
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-label">Substitute Signature</label>
                                                    <input type="file" name="substitute_signature"
                                                        class="form-control form-control-sm">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Comments</label>
                                                    <textarea class="form-control form-control-sm" name="substitute_note" rows="1"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <h6>Application Status</h6>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic radio toggle button group">
                                                        <input type="radio" class="btn-check" name="substitute_action" value="approved"
                                                            id="btnradio1" autocomplete="off" checked>
                                                        <label class="btn btn-outline-success"
                                                            for="btnradio1">Approved</label>

                                                        <input type="radio" class="btn-check" name="substitute_action" value="rejected"
                                                            id="btnradio2" autocomplete="off">
                                                        <label class="btn btn-outline-danger"
                                                            for="btnradio2">Rejected</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-end">
                                                    <button type="submit"
                                                        class="submit_btn from-prevent-multiple-submits mt-5"
                                                        style="padding: 4px 9px;">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                    @if ($leave->application_status === 'supervisor_approval_pending')
                        <form action="{{ route('supervisor.approval', $leave->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="m-0 p-1 text-center card-main-title">
                                        Supervisor Approval
                                    </h5>
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-label">Supervisor Signature</label>
                                                    <input type="file" name="supervisor_signature"
                                                        class="form-control form-control-sm">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Comments</label>
                                                    <textarea class="form-control form-control-sm" name="supervisor_note" rows="1"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h5>Application Status</h5>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic radio toggle button group">
                                                        <input type="radio" class="btn-check" name="supervisor_action" value="approved"
                                                            id="btnradio1" autocomplete="off" checked>
                                                        <label class="btn btn-outline-primary"
                                                            for="btnradio1">Approved</label>

                                                        <input type="radio" class="btn-check" name="supervisor_action" value="rejected"
                                                            id="btnradio2" autocomplete="off">
                                                        <label class="btn btn-outline-primary"
                                                            for="btnradio2">Rejected</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-end">
                                                    <button type="submit"
                                                        class="submit_btn from-prevent-multiple-submits mt-5"
                                                        style="padding: 4px 9px;">Submit</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
                {{-- Approval Sections --}}
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
                                                        <input type="number" name="earned_leave_due_as_on"
                                                            value="{{ optional($employee_leave_due)->earned_leave_due_as_on ?? '' }}"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="earned_leave_availed"
                                                            value="{{ optional($employee_leave_due)->earned_leave_availed ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="earned_balance_due"
                                                            value="{{ optional($employee_leave_due)->earned_balance_due ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Casual Leave
                                                    </td>
                                                    <td>
                                                        <input type="number" name="casual_leave_due_as_on"
                                                            value="{{ optional($employee_leave_due)->casual_leave_due_as_on ?? '' }}"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="casual_leave_availed"
                                                            value="{{ optional($employee_leave_due)->casual_leave_availed ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="casual_balance_due"
                                                            value="{{ optional($employee_leave_due)->casual_balance_due ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Medical Leave
                                                    </td>
                                                    <td>
                                                        <input type="number" name="medical_leave_due_as_on"
                                                            value="{{ optional($employee_leave_due)->medical_leave_due_as_on ?? '' }}"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="medical_leave_availed"
                                                            value="{{ optional($employee_leave_due)->medical_leave_availed ?? '' }}"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="medical_balance_due"
                                                            value="{{ optional($employee_leave_due)->medical_balance_due ?? '' }}"
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
