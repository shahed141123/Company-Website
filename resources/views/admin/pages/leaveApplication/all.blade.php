@extends('admin.master')
@section('content')
    <style>
        .info-cards {
            background-color: #ae0a46;
            color: white !important;
        }

        .info-cards h6 {
            background-color: #ae0a46;
            color: white !important;
        }

        .info-details {
            border-top: 1px solid #ae0a46;
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
                        <a href="javascript:void(0)" class="btn navigation_btn" data-bs-toggle="modal"
                            data-bs-target="#makeleave">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 14px;"></i>
                                <span>Make A Leave</span>
                            </div>
                        </a>
                        {{-- <a href="" class="btn navigation_btn" data-bs-toggle="modal" data-bs-target="#checkapproved">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 14px;"></i>
                                <span>Give Approval</span>
                            </div>
                        </a> --}}
                    </div>
                    <!-- Basic tabs -->
                </div>
            </div>
            <div class="content mt-2">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card info-cards p-1 rounded-0 main_color mb-0 py-2">
                                    <h6 class="text-center mb-0 p-0 text-muted">Employee Status</h6>
                                </div>
                                <div class=" card px-3 py-3 rounded-0">
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Job Status</span>
                                        <span class="text-danger">{{ $user->getCategoryName() ?? 'Not set' }} </span>
                                    </p>
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Next Evulation Date</span>
                                        <span class="text-danger">{{ Auth::user()->evaluation_date ?? '0' }} Days</span>
                                    </p>
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Designation</span>
                                        <span class="text-danger" title="September 12">
                                            {{ Auth::user()->designation ?? 'Not set' }}</span>
                                    </p>
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Joinning</span>
                                        <span class="text-danger" title="September 12">
                                            {{ Auth::user()->sign_date ?? '00-00-0000' }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="row gx-0">
                                        {{-- <div class="col-lg-4">
                                            <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                                <h6 class="text-center mb-0 p-0 text-muted">Leave Description</h6>
                                            </div>
                                            <div class=" card px-3 py-3 rounded-0">
                                                <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                    <span>Yearly Leave :</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                    <span>Leave Availed :</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                    <span>Leave Due :</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                    <span>Total :</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                                <h6 class="text-center mb-0 p-0 text-muted">Casual Leave</h6>
                                            </div>
                                            <div class=" card px-3 py-3 rounded-0 text-center">
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span
                                                        class="text-danger">{{ $employeeCategory->yearly_casual_leave ?? '0' }}</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span class="text-danger">0</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span class="text-danger" title="September 12">0</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                                <h6 class="text-center mb-0 p-0 text-muted">Earned Leave</h6>
                                            </div>
                                            <div class=" card px-3 py-3 rounded-0 text-center">
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span
                                                        class="text-danger">{{ $employeeCategory->yearly_earned_leave ?? '0' }}</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span class="text-danger">0</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span class="text-danger" title="September 12">0</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                                <h6 class="text-center mb-0 p-0 text-muted">Medical Leave</h6>
                                            </div>
                                            <div class=" card px-3 py-3 rounded-0 text-center">
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span
                                                        class="text-danger">{{ $employeeCategory->yearly_medical_leave ?? '0' }}</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span class="text-danger">0</span>
                                                </p>
                                                <p class="p-0 m-0 text-muted border mb-1">
                                                    <span class="text-danger" title="September 12">0</span>
                                                </p>
                                            </div>
                                        </div> --}}
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead
                                                    style="background-color: #ae0a46 !important; color: white !important;">
                                                    <tr>
                                                        <th width="30%">Leave Position</th>
                                                        <th width="25%">Leave Due As On</th>
                                                        <th width="25%">Leave Availed</th>
                                                        <th width="20%">Balance Due</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td>
                                                            Earned Leave
                                                        </td>
                                                        <td>
                                                            {{ optional($employee_leave_due)->earned_leave_due_as_on ?? '' }}
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->earned_leave_availed ?? '' }}
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->earned_balance_due ?? '' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Casual Leave
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->casual_leave_due_as_on ?? '' }}
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->casual_leave_availed ?? '' }}
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->casual_balance_due ?? '' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Medical Leave
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->medical_leave_due_as_on ?? '' }}
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->medical_leave_availed ?? '' }}
                                                        </td>
                                                        <td>{{ optional($employee_leave_due)->medical_balance_due ?? '' }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="table-responsive">
                            <div class="table-responsive table-bordered">
                                <table class="table table-hover">
                                    <thead class="border text-center">
                                        <tr>
                                            <th width="5%" class="text-center">Sl:</th>
                                            <th width="15%">Type Of Leave</th>
                                            <th width="25%">Leave Period</th>
                                            <th width="15%">Reporting On</th>
                                            <th width="20%">Leave Applied at</th>
                                            <th width="20%">Status</th>
                                            {{-- <th width="15%" class="text-center">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @if ($leaveApplications)
                                            @foreach ($leaveApplications as $leaveApplication)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $leaveApplication->type_of_leave }}</td>
                                                    <td>From {{ $leaveApplication->leave_start_date }} To
                                                        {{ $leaveApplication->leave_end_date }}</td>
                                                    <td>{{ $leaveApplication->reporting_on }}</td>
                                                    <td>{{ $leaveApplication->reporting_on }}</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-{{ optional($leaveApplication)->application_status == 'approved' ? 'success' : (optional($leaveApplication)->application_status == 'rejected' ? 'danger' : 'warning') }}">
                                                            {{ optional($leaveApplication)->application_status == 'approved' ? 'Approved' : (optional($leaveApplication)->application_status == 'rejected' ? 'Rejected' : 'Pending') }}
                                                        </span>
                                                    </td>
                                                    {{-- <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal" data-bs-target="#makeleaveEdit">
                                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                                style="color: #247297 !important;"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" href=""
                                                            class="text-danger delete">
                                                            <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                                style="color: #247297 !important;"></i>
                                                        </a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                            @else
                                            <tr><h5 class="text-center mb-0">No Leave Application Available</h5></tr>
                                        @endif
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Check Leave Status Modal Area  --}}
            <!-- Modal -->
            @include('admin.partials.leave_modal')
            {{-- Check Leave Status Modal Area  End --}}
            {{-- Check Leave Status Modal Area  --}}
            <!-- Modal -->
            <div class="modal fade" id="checkapproved" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="checkapprovedLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content rounded-0">
                        <div class="modal-header rounded-0 text-white" style="background-color: #ae0a46 !important;">
                            <h5 class="modal-title text-uppercase" id="checkapprovedLabel">For Official Use</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body rounded-0">
                            <div class="container">
                                {{-- <div class="d-flex justify-content-between">
                                <h6 class="p-1 m-0 text-center">Current Leave</h6>
                                <h6 class="p-1 m-0 text-center">
                                    <span class="text-success">Start : 5 Sep</span>
                                    <span class="text-danger">End : 8 Sep</span>
                                </h6>
                            </div> --}}
                                <div class="row gx-0 mb-3">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered">
                                            <thead style="background-color: #ae0a468f !important; color: white !important;">
                                                <tr>
                                                    <th scope="col">Leave Position</th>
                                                    <th scope="col">Leave Due As On</th>
                                                    <th scope="col">Leave Availed</th>
                                                    <th scope="col">Balance Due</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="leave_position"
                                                            class="form-control form-control-sm" value="Earned Leave">
                                                    </td>
                                                    <td>
                                                        <input type="number" name="leave_due_as_on"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="leave_availed"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="balance_due"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="leave_position"
                                                            class="form-control form-control-sm" value="Casual Leave">
                                                    </td>
                                                    <td>
                                                        <input type="number" name="leave_due_as_on"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="text" name="leave_availed"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="balance_due"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="leave_position"
                                                            class="form-control form-control-sm" value="Medical Leave">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="leave_availed"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="number" name="leave_due_as_on"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="number" name="balance_due"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row gx-0">
                                    <div class="col-lg-6">
                                        <p class="m-0 border p-1"
                                            style="background-color: #ae0a468f !important; color:
                                        white;">
                                            Checked By: (HR &
                                            Admin)</p>
                                        <p class="m-0
                                        border p-1"
                                            style="background-color: #ae0a468f !important; color:
                                        white;">
                                            Recommended By: (CEO
                                            & Head)</p>
                                        <p class="m-0
                                        border p-1"
                                            style="background-color: #ae0a468f !important; color:
                                        white;">
                                            Recived By: (OD)</p>
                                        <p class="m-0
                                        border p-1"
                                            style="background-color: #ae0a468f !important; color:
                                        white;">
                                            Approved By: (MD)</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file" name="checked_by"
                                                value="Approved">
                                        </p>
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file"
                                                name="recommended_by" value="Approved">
                                        </p>
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file" name="reviewed_by"
                                                value="Approved">
                                        </p>
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file" name="approved_by"
                                                value="Approved">
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <p class="m-0 p-0">Application Status</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="btn-group border mt-3 d-flex justify-content-end" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="application_status"
                                                id="btnradio1" autocomplete="off" checked>
                                            <label class="btn btn-outline-success" for="btnradio1">Approved</label>

                                            <input type="radio" class="btn-check" name="application_status"
                                                id="btnradio2" autocomplete="off">
                                            <label class="btn btn-outline-danger" for="btnradio2">Reject</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer rounded-0 p-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Check Leave Status Modal Area  End --}}
        </div>
    </div>
@endsection
