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
                        <a href="{{ route('hr-policy.index') }}" class="breadcrumb-item">HR Policy</a>
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
                <div class="text-success nav-link cat-tab3" style="position: relative;z-index: 999;margin-bottom: -36px;">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#hrPolicyAdd" type="button"
                        class="btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start ms-1">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Add
                    </a>
                </div>
            </div>
            <div>
                <!-- Title Area End -->
                <table class="table hrPolicyDT table-bordered table-hover datatable-highlight text-center ">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="45%">title</th>
                            <th width="15%">effective_date</th>
                            <th width="15%">expiration_date</th>
                            <th width="10%">status</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($hrPolices)
                            @foreach ($hrPolices as $key => $hrPolicy)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ $hrPolicy->title }}</td>
                                    <td>{{ $hrPolicy->effective_date }}</td>
                                    <td>{{ $hrPolicy->expiration_date }}</td>
                                    <td>{{ $hrPolicy->status }}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#hrPolicyEdit_{{ $hrPolicy->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
                                            {{-- Edit Employee Department --}}
                                            <div id="hrPolicyEdit_{{ $hrPolicy->id }}" class="modal fade" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title text-white">Edit HR Policy</h6>
                                                            <a type="button" data-bs-dismiss="modal">
                                                                <i class="ph ph-x text-white"
                                                                    style="font-weight: 800;font-size: 10px;"></i>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body p-0 px-2">
                                                            <form action="{{ route('hr-policy.update', $hrPolicy->id) }}"
                                                                method="post" class="from-prevent-multiple-submits pt-2">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">
                                                                    <div class="col-lg-4 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Category
                                                                                Name</label>
                                                                            <select name="category_id"
                                                                                class="form-control select"
                                                                                data-placeholder="Select Category Name...">
                                                                                @foreach ($policyCategories as $policyCategory)
                                                                                    <option
                                                                                        value="{{ $policyCategory->id }}"
                                                                                        @selected($hrPolicy->category_id == $policyCategory->id)>
                                                                                        {{ $policyCategory->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Status</label>
                                                                            <select name="status"
                                                                                class="form-control select"
                                                                                data-minimum-results-for-search="Infinity"
                                                                                data-placeholder="Select Status...">
                                                                                <option></option>
                                                                                <option @selected($hrPolicy->status == 'active')
                                                                                    value="active">Active</option>
                                                                                <option @selected($hrPolicy->status == 'inactive')
                                                                                    value="inactive">Inactive</option>
                                                                                <option @selected($hrPolicy->status == 'archived')
                                                                                    value="archived">Archived</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <div class="mb-1">
                                                                            <label class="p-0 text-start text-black">Title
                                                                                <span class="text-danger">*</span></label>
                                                                            <input name="title"
                                                                                value="{{ $hrPolicy->title }}"
                                                                                maxlength="250" type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Hr Policy Title"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Effective
                                                                                Date <span
                                                                                    class="text-danger">*</span></label>
                                                                            <input name="effective_date"
                                                                                value="{{ $hrPolicy->effective_date }}"
                                                                                type="date"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Effective Date" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Expiration
                                                                                Date <span
                                                                                    class="text-danger">*</span></label>
                                                                            <input name="expiration_date"
                                                                                value="{{ $hrPolicy->expiration_date }}"
                                                                                type="date"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Expiration Date"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Version</label>
                                                                            <input name="version"
                                                                                value="{{ $hrPolicy->version }}"
                                                                                maxlength="250" type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Version">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Description</label>
                                                                            <textarea class="form-control maxlength" name="description" id="" maxlength="500" cols="30"
                                                                                rows="3" placeholder="Enter Description">{{ $hrPolicy->description }}</textarea>
                                                                        </div>
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
                                            {{-- Edit Tax Modal End --}}
                                        </a>
                                        <a href="{{ route('hr-policy.destroy', $hrPolicy->id) }}"
                                            class="text-danger delete">
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
        {{-- Add Employee Department Modal --}}
        <!-- Basic modal -->
        <div id="hrPolicyAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Hr Policy</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="{{ route('hr-policy.store') }}" method="post"
                            class="from-prevent-multiple-submits pt-2">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Category Name</label>
                                        <select name="category_id" class="form-control select"
                                            data-placeholder="Select Category Name...">
                                            @foreach ($policyCategories as $policyCategory)
                                                <option value="{{ $policyCategory->id }}">{{ $policyCategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Status</label>
                                        <select name="status" class="form-control select"
                                            data-minimum-results-for-search="Infinity"
                                            data-placeholder="Select Status...">
                                            <option></option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="archived">Archived</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Title <span
                                                class="text-danger">*</span></label>
                                        <input name="title" maxlength="250" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Hr Policy Title"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Effective Date <span
                                                class="text-danger">*</span></label>
                                        <input name="effective_date" maxlength="250" type="date"
                                            class="form-control form-control-sm" placeholder="Enter Effective Date"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Expiration Date <span
                                                class="text-danger">*</span></label>
                                        <input name="expiration_date" maxlength="250" type="date"
                                            class="form-control form-control-sm" placeholder="Enter Expiration Date"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Version</label>
                                        <input name="version" maxlength="50" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Version">
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Description</label>
                                        <textarea class="form-control maxlength" name="description" id="" maxlength="500" cols="30"
                                            rows="3" placeholder="Enter Description"></textarea>
                                    </div>
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
        {{-- Add Employee Department Modal End --}}
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.hrPolicyDT').DataTable({
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
