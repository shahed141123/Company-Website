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
                        <a href="{{ route('policy-acknowledgment.index') }}" class="breadcrumb-item">Policy
                            Acknowledgements</a>
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
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#policyAcknowledgementsAdd"
                        type="button"
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
                <table class="table policyAcknowledgementsDT table-bordered table-hover datatable-highlight text-center ">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="30%">Employee Name</th>
                            <th width="55%">Policy Title</th>
                            <th width="55%">Status</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($policyAcknowledgments)
                            @foreach ($policyAcknowledgments as $key => $policyAcknowledgement)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ optional($policyAcknowledgement->employee)->name }}</td>
                                    <td>{{ optional($policyAcknowledgement->policy)->title }}</td>

                                    <td>{{ $policyAcknowledgement->status }}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#policyAcknowledgementsEdit_{{ $policyAcknowledgement->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                style="color: #247297 !important;"></i>
                                            {{-- Edit Policy Acknowledgement --}}
                                            <div id="policyAcknowledgementsEdit_{{ $policyAcknowledgement->id }}"
                                                class="modal fade" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header rounded-0">
                                                            <h6 class="modal-title text-white">Edit Policy Acknowledgement
                                                            </h6>
                                                            <a type="button" data-bs-dismiss="modal">
                                                                <i class="ph ph-x text-white"
                                                                    style="font-weight: 800;font-size: 10px;"></i>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body p-0 px-2">
                                                            <form
                                                                action="{{ route('policy-acknowledgment.update', $policyAcknowledgement->id) }}"
                                                                method="post" class="from-prevent-multiple-submits pt-2">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">
                                                                    <div class="col-lg-6 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Employee
                                                                                Name</label>
                                                                            <select name="employee_id"
                                                                                class="form-control select"
                                                                                data-placeholder="Select employee...">
                                                                                <option></option>
                                                                                @foreach ($users as $user)
                                                                                    <option @selected($policyAcknowledgement->employee_id == $user->id)
                                                                                        value="{{ $user->id }}">
                                                                                        {{ $user->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 pt-1">
                                                                        <div class="mb-1">
                                                                            <label class="p-0 text-start text-black">Policy
                                                                                Title</label>
                                                                            <select name="policy_id"
                                                                                class="form-control select"
                                                                                data-placeholder="Select Policy
                                                                                Title...">
                                                                                <option></option>
                                                                                @foreach ($hrPolicies as $hrPolicie)
                                                                                    <option @selected($policyAcknowledgement->policy_id == $hrPolicie->id)
                                                                                        value="{{ $hrPolicie->id }}">
                                                                                        {{ $hrPolicie->title }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Status</label>
                                                                            <select name="status"
                                                                                class="form-control select"
                                                                                data-minimum-results-for-search="Infinity"
                                                                                data-placeholder="Select Status...">
                                                                                <option></option>
                                                                                <option @selected($policyAcknowledgement->status == 'acknowledged')
                                                                                    value="acknowledged">Acknowledged
                                                                                </option>
                                                                                <option @selected($policyAcknowledgement->status == 'pending')
                                                                                    value="pending">Pending</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 pt-1">
                                                                        <div class="mb-1">
                                                                            <label class="p-0 text-start text-black">Sign
                                                                                <span class="text-danger">*</span></label>
                                                                            <input name="sign"type="file"
                                                                                class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 pt-1">
                                                                        <div class="mb-1">
                                                                            <label
                                                                                class="p-0 text-start text-black">Acknowledged
                                                                                At
                                                                            </label>
                                                                            <input type="datetime-local"
                                                                                id="acknowledged_at" name="acknowledged_at"
                                                                                value="{{ \Carbon\Carbon::parse($policyAcknowledgement->acknowledged_at)->format('Y-m-d\TH:i') }}"
                                                                                class="form-control form-control-sm">

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                    <button type="button" class="submit_close_btn "
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="submit_btn from-prevent-multiple-submits"
                                                                        style="padding: 5px;">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Edit Tax Modal End --}}
                                        </a>
                                        <a href="{{ route('policy-acknowledgment.destroy', $policyAcknowledgement->id) }}"
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
        {{-- Add Policy Acknowledgement Modal --}}
        <!-- Basic modal -->
        <div id="policyAcknowledgementsAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header rounded-0">
                        <h6 class="modal-title text-white">Add Policy Acknowledgements</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="{{ route('policy-acknowledgment.store') }}" method="post"
                            class="from-prevent-multiple-submits pt-2">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Employee Name</label>
                                        {{-- <select name="employee_id" class="form-control select"
                                            data-placeholder="Select Employee...">
                                            <option></option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select> --}}
                                        <input type="hidden" name="employee_id" value="{{ Auth::user()->id }}">
                                        <p class="m-0 p-0">{{ Auth::user()->name }}</p>
                                        {{-- <input type="text" value="{{ Auth::user()->name }}" disabled> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Policy Title</label>
                                        <select name="policy_id" class="form-control select"
                                            data-placeholder="Select Policy...">
                                            <option></option>
                                            @foreach ($hrPolicies as $hrPolicie)
                                                <option value="{{ $hrPolicie->id }}">{{ $hrPolicie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Status</label>
                                        <select name="status" class="form-control select"
                                            data-minimum-results-for-search="Infinity"
                                            data-placeholder="Select Status...">
                                            <option></option>
                                            <option value="acknowledged">Acknowledged</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Sign <span
                                                class="text-danger">*</span></label>
                                        <input name="sign" type="file" value="{{ Auth::user()->sign }}"
                                            class="form-control form-control-sm">
                                            <img src="{{asset('storage/'.Auth::user()->sign)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-1">
                                    <div class="mb-1">
                                        <label class="p-0 text-start text-black">Acknowledged
                                            At
                                        </label>
                                        <input type="datetime-local" id="acknowledged_at" name="acknowledged_at"
                                            class="form-control form-control-sm">
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
        {{-- Add Policy Acknowledgement Modal End --}}
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.policyAcknowledgementsDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4],
                }, ],
            });
        </script>
    @endpush
@endonce
