@extends('admin.master')
@section('content')
    <style>
        #DataTables_Table_0_wrapper {
            margin-top: -1rem;
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('notice.index') }}" class="breadcrumb-item">Notice</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content pt-0 w-75 mx-auto">
            <!-- Highlighting rows and columns -->
            <div class="d-flex justify-content-start align-items-center py-2">
                <div class="d-flex align-items-center">
                    <div class="text-success nav-link cat-tab3"
                        style="position: relative;z-index: 999;margin-bottom: -36px;">
                        <a href="javascript(void:0);" type="button" data-bs-toggle="modal"
                            data-bs-target="#employeeDepartmentAdd"
                            class="mx-1 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="icon-plus2"></i>
                            </span>
                            Add
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <!-- Title Area End -->
                <table class="table noticeDT table-bordered table-hover datatable-highlight text-center ">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="45%">Title</th>
                            <th width="15%">Publish Date</th>
                            <th width="15%">Expiry Date</th>
                            <th width="10%">Achievement Status</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($notices)
                            @foreach ($notices as $key => $notice)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td>{{ $notice->publish_date }}</td>
                                    <td>{{ $notice->expiry_date }}</td>
                                    <td>{{ $notice->achievement_status }}</td>
                                    <td>
                                        <a class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#notice_{{ $notice->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
                                            {{-- Edit Notice --}}
                                            <div id="notice_{{ $notice->id }}" class="modal fade" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title text-white">Edit Notice</h6>
                                                            <a type="button" data-bs-dismiss="modal">
                                                                <i class="ph ph-x text-white"
                                                                    style="font-weight: 800;font-size: 10px;"></i>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body p-0 px-2">
                                                            <form action="{{ route('notice.update', $notice->id) }}"
                                                                method="post" class="from-prevent-multiple-submits pt-2">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <label class="">Employee Name</label>
                                                                        <select class="form-control select"
                                                                            name="employee_id"
                                                                            data-placeholder="Select Employee...">
                                                                            <option></option>
                                                                            @foreach ($employees as $employee)
                                                                                <option class="form-control select"
                                                                                    @selected($notice->id == $employee->id)
                                                                                    value="{{ $employee->id }}">
                                                                                    {{ $employee->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <label class="p-0 text-start text-black">
                                                                            Title <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input name="title"
                                                                                value="{{ $notice->title }}" type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Title" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <label class="p-0 text-start text-black">
                                                                            Content</label>
                                                                        <div class="input-group">
                                                                            <textarea name="content"  class="form-control form-control-sm" id=""
                                                                                cols="30" rows="10">{{ $notice->content }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <label class="p-0 text-start text-black">
                                                                            Publish Date</label>
                                                                        <div class="input-group">
                                                                            <input name="publish_date"
                                                                                value="{{ $notice->publish_date }}"
                                                                                type="date"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your  Publish Date">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <label class="p-0 text-start text-black">
                                                                            Expiry Date</label>
                                                                        <div class="input-group">
                                                                            <input name="expiry_date"
                                                                                value="{{ $notice->expiry_date }}"
                                                                                type="date"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Your Expiry Date">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <label class="">
                                                                            Achievement Status
                                                                            <span class="text-danger">*</span>
                                                                        </label>
                                                                        <select class="form-select select"
                                                                            name="achievement_status"
                                                                            data-minimum-results-for-search="Infinity"
                                                                            data-placeholder="Select  Achievement Status...">
                                                                            <option></option>
                                                                            <option class="form-select" value="achieved"
                                                                                @selected($notice->achievement_status == 'achieved')>
                                                                                Achieved </option>
                                                                            <option class="form-select"
                                                                                value="not_achieved"
                                                                                @selected($notice->achievement_status == 'not_achieved')> Not Achieved
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                    <button type="button" class="submit_close_btn "
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="submit_btn from-prevent-multiple-submits"
                                                                        style="padding: 10px;">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Edit Notice Modal End --}}
                                        </a>
                                        <a href="{{ route('notice.destroy', $notice->id) }}" class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /content area End-->
        {{-- Add Notice Modal --}}
        <!-- Basic modal -->
        <div id="employeeDepartmentAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Notice</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="{{ route('notice.store') }}" method="post"
                            class="from-prevent-multiple-submits pt-2">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="">Employee Name</label>
                                    <select class="form-control select" name="employee_id"
                                    data-placeholder="Select Employee..." data-allow-clear="true">
                                    <option></option>
                                    @foreach ($employees as $employee)
                                        <option class="form-control select" value="{{ $employee->id }}">
                                            {{ $employee->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <label class="p-0 text-start text-black">
                                        Title <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input name="title" type="text" class="form-control form-control-sm"
                                            placeholder="Enter Your Title" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <label class="p-0 text-start text-black">
                                        Content</label>
                                    <div class="input-group">
                                        <textarea name="content" class="form-control form-control-sm" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <label class="p-0 text-start text-black">
                                        Publish Date</label>
                                    <div class="input-group">
                                        <input name="publish_date" type="date" class="form-control form-control-sm"
                                            placeholder="Enter Your  Publish Date">
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <label class="p-0 text-start text-black">
                                        Expiry Date</label>
                                    <div class="input-group">
                                        <input name="expiry_date" type="date" class="form-control form-control-sm"
                                            placeholder="Enter Your Expiry Date">
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <label class="">
                                        Achievement Status
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select select" name="achievement_status"
                                        data-minimum-results-for-search="Infinity"
                                        data-placeholder="Select  Achievement Status...">
                                        <option></option>
                                        <option class="form-select" value="achieved"> Achieved </option>
                                        <option class="form-select" value="not_achieved"> Not Achieved </option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /basic modal -->
        {{-- Add Notice Modal End --}}
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.noticeDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4, 5],
                }, ],
            });
        </script>
    @endpush
@endonce
