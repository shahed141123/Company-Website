@extends('admin.master')
@section('content')
    <style>
        .info-cards {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: #ae0a46;
            color: white !important;
        }

        .info-cards h6 {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: #ae0a46;
            color: white !important;
        }

        .info-details {
            border-top: 1px solid #ae0a46;
        }

        .leave-date {
            font-size: 10px;
            border-radius: 50%;
            width: 25px;
            text-align: center;
            padding-top: 3px;
            height: 25px;
            border: 1px solid #ae0a46;
        }

        .leave-date:hover {
            background-color: #ae0a46;
            color: white !important;
            border: 1px solid #ae0a46;
            transition: 0.5s all;
        }

        thead {
            background-color: transparent !important;
            color: #000 !important;
        }

        .form-control-sm {
            height: 32.5px;
        }

        .has-fixed-height {
            height: 235px;
        }
    </style>
    <div class="content-wrapper">
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            {{-- <a href="{{ route('leave-application.index') }}" class="breadcrumb-item">Leave Status</a> --}}
                            <span class="breadcrumb-item active">Leave Status</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="me-3">
                        <a href="{{ route('leave-application.create') }}" class="btn navigation_btn" data-bs-toggle="modal"
                            data-bs-target="#makeleave">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Make A Leave</span>
                            </div>
                        </a>
                        <a href="" class="btn navigation_btn" data-bs-toggle="modal" data-bs-target="#checkapproved">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Give Approval</span>
                            </div>
                        </a>
                    </div>
                </div>
        </section>
        <section>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card info-cards p-1 rounded-0 main_color mb-0">
                            <h6 class="text-center mb-0 p-0 text-muted">Employe Status</h6>
                        </div>
                        <div class="info-details card px-3 py-3 rounded-0">
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
                    <div class="col-lg-9">
                        <div class="row gx-0">
                            <div class="col-lg-4">
                                <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                    <h6 class="text-center mb-0 p-0 text-muted">Leave Description</h6>
                                </div>
                                <div class="info-details card px-3 py-3 rounded-0">
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
                                <div class="info-details card px-3 py-3 rounded-0 text-center">
                                    <p class="p-0 m-0 text-muted border mb-1">
                                        <span class="text-danger">{{ $employeeCategory->yearly_casual_leave ?? '0' }}</span>
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
                                <div class="info-details card px-3 py-3 rounded-0 text-center">
                                    <p class="p-0 m-0 text-muted border mb-1">
                                        <span class="text-danger">{{ $employeeCategory->yearly_earned_leave ?? '0' }}</span>
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
                                <div class="info-details card px-3 py-3 rounded-0 text-center">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Check Leave Status Modal Area  --}}
        <!-- Modal -->
        <div class="modal fade" id="makeleave" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
            aria-labelledby="checkapprovedLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0 text-white" style="background-color: #ae0a46 !important;">
                        <h5 class="modal-title text-uppercase" id="checkapprovedLabel">Leave Application</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container">
                            <div class="row my-2">
                                <div class="col-lg-12">
                                    <form method="POST" action="{{ route('leave-application.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Applicant Name: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="name"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Applicant Name" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Type Of Leave: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="type_of_leave"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Type Of Leave" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Designation: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="designation"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Your Designation" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Company:</label>
                                                        <input type="text" name="company"
                                                            class="form-control form-control-sm" placeholder="NGEN IT">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Leave Start Date: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" name="leave_start_date"
                                                            class="form-control form-control-sm"
                                                            placeholder="Leave Start Date" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Leave End Date: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" name="leave_end_date"
                                                            class="form-control form-control-sm"
                                                            placeholder="Leave End Date" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Total Days: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" name="total_days"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Total Dayes" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Job Status <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="job_status"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Job Status" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Reporting On <span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" name="reporting_on"
                                                            class="form-control form-control-sm"
                                                            placeholder="Leave End Date" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="">
                                                        <label class="form-label">Leave Explanation <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="leave_explanation" class="form-control form-control-sm" id="" cols="30"
                                                            rows="1"placeholder="Enter Leave Explanation" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Substitute During Leave <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="substitute_during_leave"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Substitute During Leave" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Leave Address</label>
                                                        <textarea name="leave_address" class="form-control form-control-sm" id="" cols="30" rows="1"
                                                            placeholder="Leave End Date" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Is Betwwen Holiday</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="is_between_holidays" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check ms-3">
                                                                <input class="form-check-input" type="radio"
                                                                    name="is_between_holidays" id="flexRadioDefault2"
                                                                    checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Leave Contact Number</label>
                                                        <input type="text" name="leave_contact_no"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Enter Leave Contact Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="">
                                                        <label class="form-label">Include Open Saturday</label>
                                                        <input type="number" name="included_open_saturday"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Include Open Saturday">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <label class="form-label">Substitute Signature <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="substitute_signature"
                                                            class="form-control form-control-sm" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <label class="form-label">Applicant Signature <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="applicant_signature"
                                                            class="form-control form-control-sm" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-end mt-3">
                                            <button type="reset" value="Reset" class="submit_close_btn "
                                                data-bs-dismiss="modal">Reset Form</button>
                                            <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                                style="padding: 4px 9px;">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <input class="form-control form-control-sm" type="file" name="recommended_by"
                                            value="Approved">
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
                                        <input type="radio" class="btn-check" name="application_status" id="btnradio1"
                                            autocomplete="off" checked>
                                        <label class="btn btn-outline-success" for="btnradio1">Approved</label>

                                        <input type="radio" class="btn-check" name="application_status" id="btnradio2"
                                            autocomplete="off">
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
@endsection
