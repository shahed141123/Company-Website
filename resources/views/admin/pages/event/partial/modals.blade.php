@if (count($events) > 0)
    @foreach ($events as $event)
        <div id="eventEdit{{ $event->id }}" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Edit Event Management</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-1">
                        <div class="container ps-0 pe-0">
                            <form method="post" action="{{ route('event.update', $event->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="px-2 py-2 m-2 bg-light rounded-0">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <label for="">Event Category</label>
                                            <select name="event_category" class="form-select w-100 select-wizard"
                                                data-minimum-results-for-search="Infinity" data-allow-clear="true"
                                                data-placeholder="Select Event Category" required>
                                                <option></option>
                                                @foreach ($event_categorys as $event_category)
                                                    <option value="{{ $event_category->id }}"
                                                        @selected($event_category->id === $event->event_category)>{{ $event_category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-8">
                                            <label for="">Event Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title"
                                                class="form-control form-control-sm maxlength" maxlength="100"
                                                value="{{ $event->title }}" />
                                        </div>


                                        <div class="col-sm-4">
                                            <label for="start_date">Start Date</label>
                                            <input type="date" name="start_date" class="form-control form-control-sm"
                                                id="start_date" value="{{ $event->start_date }}" />
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="end_date">End Date</label>
                                            <input type="date" name="end_date" class="form-control form-control-sm"
                                                id="end_date" value="{{ $event->end_date }}" />
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="">Status</label>
                                            <select name="status" class="form-select w-100 select-wizard"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Select Status" required>
                                                <option></option>
                                                <option value="active" @selected($event->status == 'active')>Active
                                                </option>
                                                <option value="inactive" @selected($event->status == 'inactive')>In Active
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="">Attendees</label>
                                            <select name="user_id[]" class="form-control-sm multiselect btn btn-sm"
                                                id="select6" multiple="multiple" data-include-select-all-option="true"
                                                data-placeholder="Select Attendees" data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true" required>
                                                @php
                                                    $employeeIds = isset($event->user_id) ? json_decode($event->user_id, true) : [];
                                                @endphp
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" @selected(is_array($employeeIds) && in_array($user->id, $employeeIds))>
                                                        {{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Department</label>

                                            <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                                id="select6" multiple="multiple" data-allow-clear="true"
                                                data-include-select-all-option="true" data-placeholder="Chose Sector"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true" required>
                                                @php
                                                    $employeeIds = isset($employee->department) ? json_decode($employee->department, true) : [];
                                                @endphp
                                                <option value="admin" @selected(is_array($employeeIds) && in_array('admin', $employeeIds))>Admin</option>
                                                <option value="business" @selected(is_array($employeeIds) && in_array('business', $employeeIds))>Business</option>
                                                <option value="accounts" @selected(is_array($employeeIds) && in_array('accounts', $employeeIds))>Accounts</option>
                                                <option value="site" @selected(is_array($employeeIds) && in_array('site', $employeeIds))>Site & Contents
                                                </option>
                                                <option value="logistics" @selected(is_array($employeeIds) && in_array('logistics', $employeeIds))>Logistics
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-sm-8">
                                            <label for="">Event Description</label>
                                            <textarea class="form-control form-control-sm" name="description" id="description" rows="2">{{ $event->description }}</textarea>
                                        </div>

                                    </div>
                                    {{--  --}}
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12 text-secondary text-end">
                                        <button type="submit" class="text-white btn btn-sm" id="submitbtn"
                                            style="background-color:#247297 !important; padding: 5px 12px 5px;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

<div id="eventAdd" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-white">Add Event Management </h6>
                <a type="button" data-bs-dismiss="modal">
                    <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                </a>
            </div>
            <div class="modal-body p-1">
                <div class="container ps-0 pe-0">
                    <form method="post" action="{{ route('event.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="px-2 py-2 m-2 bg-light rounded-0">
                            <div class="row mb-1">
                                <div class="col-sm-4">
                                    <label for="">Event Category</label>
                                    <select name="event_category" class="form-select w-100 select-wizard"
                                        data-minimum-results-for-search="Infinity" data-allow-clear="true"
                                        data-placeholder="Select Event Category" required>
                                        <option></option>
                                        @foreach ($event_categorys as $event_category)
                                            <option value="{{ $event_category->id }}">{{ $event_category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Event Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control form-control-sm maxlength" maxlength="100" />
                                </div>

                                <div class="col-sm-4">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" name="start_date" class="form-control form-control-sm"
                                        id="start_date" />
                                </div>
                                <div class="col-sm-4">
                                    <label for="end_date">End Date</label>
                                    <input type="date" name="end_date" class="form-control form-control-sm"
                                        id="end_date" />
                                </div>
                                <div class="col-sm-4">
                                    <label for="start_time">Start Time</label>
                                    <input type="time" name="start_time" class="form-control form-control-sm"
                                        id="start_time" />
                                </div>
                                <div class="col-sm-4">
                                    <label for="end_time">End Time</label>
                                    <input type="time" name="end_time" class="form-control form-control-sm"
                                        id="end_time" />
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Status</label>
                                    <select name="status" class="form-select w-100 select-wizard"
                                        data-minimum-results-for-search="Infinity" data-allow-clear="true"
                                        data-placeholder="Select Status" required>
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">In Active</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label" for="basicpill-firstname-input">Department</label>
                                    <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                        id="select6" multiple="multiple" data-include-select-all-option="true"
                                        data-placeholder="Chose Sector" data-enable-filtering="true"
                                        data-allow-clear="true" data-enable-case-insensitive-filtering="true"
                                        required>

                                        <option value="admin">Admin</option>
                                        <option value="business">Business</option>
                                        <option value="accounts">Accounts</option>
                                        <option value="site">Site & Contents</option>
                                        <option value="logistics">Logistics</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Attendees</label>
                                    <select name="user_id[]" class="form-control-sm multiselect btn btn-sm"
                                        id="select6" multiple="multiple" data-include-select-all-option="true"
                                        data-placeholder="Select Attendees" data-enable-filtering="true"
                                        data-enable-case-insensitive-filtering="true" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-8">
                                    <label for="">Event Description</label>
                                    <textarea class="form-control form-control-sm" name="description" id="description" rows="2"></textarea>
                                </div>
                            </div>
                            {{--  --}}
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12 text-secondary text-end">
                                <button type="submit" class="text-white btn btn-sm" id="submitbtn"
                                    style="background-color:#247297 !important; padding: 5px 12px 5px;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-1">
                            <div class="col-lg-4">
                                <p><strong>Title:</strong> <span id="eventTitle"></span></p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Date:</strong> <span id="eventStartDate"></span> - <span id="eventEndDate"></span></p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Time:</strong> <span id="eventStartTime"></span> - <span id="eventEndTime"></span></p>
                            </div>
                            <div class="col-lg-12">
                                <p><strong>Description:</strong> <span id="eventDescription"></span></p>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <p><strong>Start Date:</strong> <span id="eventStartDate"></span></p>
                <p><strong>End Date:</strong> <span id="eventEndDate"></span></p>
                <p><strong>Start Time:</strong> <span id="eventStartTime"></span></p>
                <p><strong>End Time:</strong> <span id="eventEndTime"></span></p> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
