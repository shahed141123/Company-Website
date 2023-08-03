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
                        <span class="breadcrumb-item active">Marketing Manager Role Management</span>
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
                    <a href="" data-bs-toggle="modal" data-bs-target="#addMarketingManager">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Marketing Manager Role</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table MarketingManagerDt table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="10%">Id</th>
                            <th width="11%">Manager Id</th>
                            <th width="23%">DMAR</th>
                            <th width="23%">CMAR</th>
                            <th width="23%">EMAR</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($marketingManagerRoles)
                            @foreach ($marketingManagerRoles as $key => $marketingManagerRole)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ app\models\User::where('id', $marketingManagerRole->marketing_manager_id)->value('name') }}
                                    </td>
                                    <td>{{ $marketingManagerRole->dmar }}</td>
                                    <td>{{ $marketingManagerRole->cmar }}</td>
                                    <td>{{ $marketingManagerRole->emar }}</td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editMarketingManager">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('marketing-manager-role.destroy', [$marketingManagerRole->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                        {{-- Edit Success Modal --}}
                                        <div id="editMarketingManager" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">Edit Marketing Manager </h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form method="post"
                                                            action="{{ route('marketing-manager-role.update', $marketingManagerRole->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="container">
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Manager</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="marketing_manager_id"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose Marketing Manager">
                                                                            <option></option>
                                                                            @foreach ($users as $user)
                                                                                <option @selected($marketingManagerRole->marketing_manager_id == $user->id)
                                                                                    value="{{ $user->id }}">
                                                                                    {{ $user->name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>DMAR</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="dmar"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose DMAR ">
                                                                            <option></option>
                                                                            <option @selected($marketingManagerRole->dmar == 'yes')
                                                                                value="yes">Yes </option>
                                                                            <option @selected($marketingManagerRole->dmar == 'no')
                                                                                value="no">No </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>CMAR</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="dmar"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose CMAR ">
                                                                            <option></option>
                                                                            <option @selected($marketingManagerRole->cmar == 'yes')
                                                                                value="yes">Yes </option>
                                                                            <option @selected($marketingManagerRole->cmar == 'no')
                                                                                value="no">No </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>EMAR</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="dmar"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose CMAR ">
                                                                            <option></option>
                                                                            <option @selected($marketingManagerRole->emar == 'yes')
                                                                                value="yes">Yes </option>
                                                                            <option @selected($marketingManagerRole->emar == 'no')
                                                                                value="no">No </option>
                                                                        </select>
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
        <div id="addMarketingManager" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Marketing Manager</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form method="post" action="{{ route('marketing-manager-role.store') }}">
                            @csrf
                            <div class="container">
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Manager</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="marketing_manager_id" class="form-control form-control-sm select"
                                            data-placeholder="Chose Marketing Manager">
                                            <option></option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>DMAR</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="dmar" class="form-control form-control-sm select"
                                            data-placeholder="Chose DMAR ">
                                            <option value="yes">Yes </option>
                                            <option value="no">No </option>
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>CMAR</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="dmar" class="form-control form-control-sm select"
                                            data-placeholder="Chose CMAR ">
                                            <option value="yes">Yes </option>
                                            <option value="no">No </option>
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>EMAR</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="dmar" class="form-control form-control-sm select"
                                            data-placeholder="Chose CMAR ">
                                            <option value="yes">Yes </option>
                                            <option value="no">No </option>
                                        </select>
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
            $('.MarketingManagerDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
        </script>
    @endpush
@endonce
