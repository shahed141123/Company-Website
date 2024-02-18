<style>
    .note-editor {
        width: 100%;
    }
</style>

<!-- Add Notice Modal -->
<div id="noticeAdd" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h6 class="modal-title text-white mb-0">Add Notice</h6>
                <a type="button" data-bs-dismiss="modal">
                    <i class="ph ph-x text-white" style="font-weight: 800; font-size: 18px;"></i>
                </a>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('notice.store') }}" method="post" class="from-prevent-multiple-submits pt-2">
                    @csrf
                    <div class="row">
                        <!-- Employee Name -->
                        <div class="col-lg-5 pt-1 mb-3">
                            <label class="">Employee Name</label>
                            <select class="form-select select" name="employee_id" data-placeholder="Select Employee..."
                                data-allow-clear="true">
                                <option></option>
                                @foreach ($employees as $employee)
                                    <option class="form-control select" value="{{ $employee->id }}">
                                        {{ $employee->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Title -->
                        <div class="col-lg-7 pt-1 mb-3">
                            <label class="p-0 text-start text-black">
                                Title <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input name="title" type="text" class="form-control form-control-sm"
                                    placeholder="Enter Your Title" required>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="col-lg-12 pt-1 mb-3">
                            <label class="p-0 text-start text-black"> Content</label>
                            <div class="input-group">
                                <textarea name="content" id="overview" class="form-control form-control-sm" rows="10"></textarea>
                            </div>
                        </div>
                        <!-- Publish Date -->
                        <div class="col-lg-4 pt-1 mb-3">
                            <label class="p-0 text-start text-black">Publish Date</label>
                            <div class="input-group">
                                <input name="publish_date" type="date" class="form-control form-control-sm"
                                    placeholder="Enter Your  Publish Date">
                            </div>
                        </div>
                        <!-- Expiry Date -->
                        <div class="col-lg-4 pt-1 mb-3">
                            <label class="p-0 text-start text-black">Expiry Date</label>
                            <div class="input-group">
                                <input name="expiry_date" type="date" class="form-control form-control-sm"
                                    placeholder="Enter Your Expiry Date">
                            </div>
                        </div>
                        <!-- Achievement Status -->
                        <div class="col-lg-4 pt-1 mb-3">
                            <label class="">
                                Achievement Status
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select select" name="achievement_status"
                                data-minimum-results-for-search="Infinity"
                                data-placeholder="Select Achievement Status...">
                                <option></option>
                                <option class="form-select" value="achieved"> Achieved </option>
                                <option class="form-select" value="not_achieved"> Not Achieved </option>
                            </select>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 5px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Notice Modals -->
@if ($notices)
    @foreach ($notices as $key => $notice)
        <div id="notice_{{ $notice->id }}" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white mb-0">Edit Notice</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 18px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="{{ route('notice.update', $notice->id) }}" method="post"
                            class="from-prevent-multiple-submits pt-2">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- Employee Name -->
                                <div class="col-lg-5 mb-3">
                                    <label class="">Employee Name</label>
                                    <select class="form-control select" name="employee_id"
                                        data-placeholder="Select Employee...">
                                        <option></option>
                                        @foreach ($employees as $employee)
                                            <option class="form-control select" @selected($notice->id == $employee->id)
                                                value="{{ $employee->id }}">
                                                {{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Title -->
                                <div class="col-lg-7 mb-3">
                                    <label class="p-0 text-start text-black">
                                        Title <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input name="title" value="{{ $notice->title }}" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Title"
                                            required>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="col-lg-12 mb-3">
                                    <label class="p-0 text-start text-black">
                                        Content</label>
                                    <div class="input-group">
                                        <textarea name="content" class="form-control form-control-sm" id="short_desc" cols="30" rows="10">{{ $notice->content }}</textarea>
                                    </div>
                                </div>
                                <!-- Publish Date -->
                                <div class="col-lg-4 mb-3">
                                    <label class="p-0 text-start text-black">
                                        Publish Date</label>
                                    <div class="input-group">
                                        <input name="publish_date" value="{{ $notice->publish_date }}" type="date"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Your  Publish Date">
                                    </div>
                                </div>
                                <!-- Expiry Date -->
                                <div class="col-lg-4 mb-3">
                                    <label class="p-0 text-start text-black">
                                        Expiry Date</label>
                                    <div class="input-group">
                                        <input name="expiry_date" value="{{ $notice->expiry_date }}" type="date"
                                            class="form-control form-control-sm" placeholder="Enter Your Expiry Date">
                                    </div>
                                </div>
                                <!-- Achievement Status -->
                                <div class="col-lg-4 mb-3">
                                    <label class="">
                                        Achievement Status
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select select" name="achievement_status"
                                        data-minimum-results-for-search="Infinity"
                                        data-placeholder="Select Achievement Status...">
                                        <option></option>
                                        <option class="form-select" value="achieved" @selected($notice->achievement_status == 'achieved')>
                                            Achieved </option>
                                        <option class="form-select" value="not_achieved" @selected($notice->achievement_status == 'not_achieved')>
                                            Not
                                            Achieved
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- Modal Footer -->
                            <div class="modal-footer border-0">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 10px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
