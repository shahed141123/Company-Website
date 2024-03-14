<div class="modal fade" id="makeleave" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-labelledby="checkapprovedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-0">
            <div class="modal-header rounded-0 text-white px-4 py-2" style="background-color: #247297 !important;">
                <h5 class="modal-title" id="checkapprovedLabel">Leave Application</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('leave-application.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card rounded-0 shadow-none border-0 mb-0">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Applicant Name: <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name" disabled
                                                        value="{{ Auth::user()->name }}"
                                                        class="form-control form-control-sm border-0"
                                                        placeholder="Enter Applicant Name" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Type Of Leave:
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <select name="type_of_leave"
                                                        class="form-control form-control-sm select"
                                                        data-placeholder="Select Type of Leave" data-allow-clear="true"
                                                        required>
                                                        <option value="sick">Sick Leave</option>
                                                        <option value="earned">Earned Leave</option>
                                                        <option value="casual">Casual Leave</option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please Enter Type Of Leave.</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Designation: <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="designation"
                                                        value="{{ Auth::user()->designation }}"
                                                        class="form-control form-control-sm border-0"
                                                        placeholder="Enter Your Designation" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Company:</label>
                                                    <input type="text" name="company" value="NGEN IT" disabled
                                                        class="form-control form-control-sm" placeholder="NGEN IT">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Leave Start Date: <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" name="leave_start_date"
                                                        class="form-control form-control-sm"
                                                        placeholder="Leave Start Date" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Leave End Date: <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" name="leave_end_date"
                                                        class="form-control form-control-sm"
                                                        placeholder="Leave End Date" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Total Days: <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" name="total_days"
                                                        class="form-control form-control-sm"
                                                        placeholder="Enter Total Dayes" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Job Status <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="job_status"
                                                        class="form-control form-control-sm"
                                                        placeholder="Enter Job Status" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Reporting On <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" name="reporting_on"
                                                        class="form-control form-control-sm"
                                                        placeholder="Reporting On" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Leave Explanation <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="leave_explanation" class="form-control form-control-sm" id="" cols="30"
                                                        rows="1"placeholder="Enter Leave Explanation" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Substitute During Leave <span
                                                            class="text-danger">*</span></label>
                                                    <select name="substitute_id"
                                                        class="form-control form-control-sm select"
                                                        data-placeholder="Select a Substitute" data-allow-clear="true"
                                                        required>
                                                        <option></option>
                                                        @foreach ($all_employees as $substitute)
                                                            <option value="{{ $substitute->id }}">
                                                                {{ $substitute->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback"> Please Select substitute.</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Leave Address</label>
                                                    <textarea name="leave_address" class="form-control form-control-sm" id="" cols="30" rows="1"
                                                        placeholder="Leave Address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Is Between Holiday</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                value="yes" name="is_between_holidays"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check ms-3">
                                                            <input class="form-check-input" type="radio"
                                                                value="no" name="is_between_holidays"
                                                                id="flexRadioDefault2" checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Leave Period Contact Number</label>
                                                    <input type="text" name="leave_contact_no"
                                                        class="form-control form-control-sm"
                                                        placeholder="Enter Enter Leave Contact Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Include Open Saturday (If none
                                                        enter: 0)</label>
                                                    <input type="number" name="included_open_saturday"
                                                        class="form-control form-control-sm"
                                                        placeholder="Enter Include Open Saturday">
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label mb-0">Substitute Signature <span
                                                        class="text-danger">*</span></label>
                                                <input type="file" name="substitute_signature"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                        </div> --}}
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label mb-0">Applicant Signature <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" name="applicant_signature"
                                                        class="form-control form-control-sm" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <button type="submit"
                                                        class="submit_btn from-prevent-multiple-submits"
                                                        style="padding: 4px 9px;">Submit</button>
                                                </div>
                                            </div>
                                        </div>
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

@isset($leaveApplications)
    @foreach ($leaveApplications as $leaveApplication)
        <div class="modal fade" id="makeleaveEdit" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
            aria-labelledby="checkapprovedLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0 text-white bg-secondary">
                        <h5 class="modal-title text-uppercase" id="checkapprovedLabel">Leave Application Edit</h5>
                        <h2 class="accordion-header d-flex align-items-center" id="flush-headingOne">
                            <button class="ms-2 button-37 collapsed" type="button" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                <a href="javascript:void(0);" class="text-primary">
                                    <i class="fa-solid fa-eyes p-1 rounded-circle" style=" color: #174a62;"></i>
                                </a>
                            </button>
                        </h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container">
                            <div class="row my-2">
                                <div class="col-lg-12">
                                    <form class="" action="#">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Applicant Name:
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="name"
                                                            value="{{ $leaveApplication->name }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Applicant Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Type Of Leave: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="type_of_leave"
                                                            value="{{ $leaveApplication->type_of_leave }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Type Of Leave">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Designation: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="designation"
                                                            value="{{ $leaveApplication->designation }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Your Designation">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Company:</label>
                                                        <input type="text" name="company"
                                                            value="{{ $leaveApplication->company }}"
                                                            class="form-control form-control-sm" placeholder="NGEN IT">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Leave Start Date:
                                                            <span class="text-danger">*</span></label>
                                                        <input type="date" name="leave_start_date"
                                                            value="{{ $leaveApplication->leave_start_date }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Leave Start Date">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Leave End Date:
                                                            <span class="text-danger">*</span></label>
                                                        <input type="date" name="leave_end_date"
                                                            value="{{ $leaveApplication->leave_end_date }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Leave End Date">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Total Days: <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="total_days"
                                                            value="{{ $leaveApplication->total_days }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Total Dayes">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Job Status <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="job_status"
                                                            value="{{ $leaveApplication->job_status }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Job Status">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Reporting On <span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" name="reporting_on"
                                                            value="{{ $leaveApplication->reporting_on }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Leave End Date">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Leave Explanation
                                                            <span class="text-danger">*</span></label>
                                                        <textarea name="leave_explanation" class="form-control form-control-sm" id="" cols="30"
                                                            rows="1" placeholder="Enter Leave Explanation">{{ $leaveApplication->leave_explanation }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Substitute During
                                                            Leave
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="substitute_during_leave"
                                                            value="{{ $leaveApplication->substitute_during_leave }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Substitute During Leave">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Leave
                                                            Address</label>
                                                        <input type="text" name="leave_address"
                                                            value="{{ $leaveApplication->leave_address }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Leave End Date">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Is Betwwen
                                                            Holiday</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="is_between_holidays" value="yes"
                                                                    id="yes" @checked($leaveApplication->is_between_holidays == 'yes') disabled>
                                                                <label class="form-check-label" for="yes">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check ms-3">
                                                                <input class="form-check-input" type="radio"
                                                                    name="is_between_holidays" value="no"
                                                                    id="no" @checked($leaveApplication->is_between_holidays == 'no') disabled>
                                                                <label class="form-check-label" for="no">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Leave Contact
                                                            Number</label>
                                                        <input type="text" name="leave_contact_no"
                                                            value="{{ $leaveApplication->leave_contact_no }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Enter Leave Contact Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Include Open
                                                            Saturday</label>
                                                        <input type="text" name="included_open_saturday"
                                                            value="{{ $leaveApplication->included_open_saturday }}"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Include Open Saturday">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Substitute Signature
                                                            <span class="text-danger">*</span></label>
                                                        <input type="file" name="substitute_signature"
                                                            value="{{ $leaveApplication->substitute_signature }}"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-1">
                                                        <label class="form-label mb-0">Applicant Signature
                                                            <span class="text-danger">*</span></label>
                                                        <input type="file" name="applicant_signature"
                                                            value="{{ $leaveApplication->applicant_signature }}"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-end mt-3">
                                            {{-- <button type="reset" value="Reset" class="submit_close_btn "
                                                data-bs-dismiss="modal">Reset Form</button>
                                            <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                                style="padding: 4px 9px;">Submit</button> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endisset
