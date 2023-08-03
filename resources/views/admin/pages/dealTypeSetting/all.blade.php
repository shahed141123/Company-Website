@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Deal Type Setting Management</span>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="" data-bs-toggle="modal" data-bs-target="#addDealTypeSetting">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Deal Type Setting</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table dealTypeSettingDT table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="20%">Id</th>
                            <th width="35%">Deal Type</th>
                            <th width="30%">Value</th>
                            <th width="20%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($dealTypeSettings)
                            @foreach ($dealTypeSettings as $key => $dealTypeSetting)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ ucfirst($dealTypeSetting->deal_type) }}</td>
                                    <td>{{ $dealTypeSetting->value }}</td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#update-deal-type-{{ $dealTypeSetting->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('deal-type-settings.destroy', [$dealTypeSetting->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                        {{-- Edit Success Modal --}}
                                        <div id="update-deal-type-{{ $dealTypeSetting->id }}" class="modal fade"
                                            tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">Edit Deal Type Setting</h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form method="post"
                                                            action="{{ route('deal-type-settings.update', $dealTypeSetting->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="container">
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Deal Type</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="deal_type"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose deal type ">
                                                                            <option></option>
                                                                            <option @selected($dealTypeSetting->deal_type == 'new')
                                                                                value="new">New </option>
                                                                            <option @selected($dealTypeSetting->deal_type == 'renew')
                                                                                value="renew">Renew </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Value</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="email"
                                                                            value="{{ $dealTypeSetting->value }}"
                                                                            name="value"
                                                                            class="form-control form-control-sm"
                                                                            maxlength="100" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                            </div>
                                                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                <button type="submit"
                                                                    class="submit_btn from-prevent-multiple-submits"
                                                                    style="padding: 5px;">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Success Modal End --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Success Modal --}}
        <div id="addDealTypeSetting" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Deal Type Setting</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form method="post" action="{{ route('deal-type-settings.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Deal Type</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="deal_type" class="form-control form-control-sm select"
                                            data-placeholder="Chose deal type ">
                                            <option></option>
                                            <option value="new">New </option>
                                            <option value="renew">Renew </option>
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Value</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="email" name="value" class="form-control form-control-sm"
                                            maxlength="100" required />
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.dealTypeSettingDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
    @endpush
@endonce
